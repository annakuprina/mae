<?php

namespace OM4\Zapier;

use Exception;
use OM4\Zapier\Admin\Dashboard;
use OM4\Zapier\Logger;
use OM4\Zapier\Plugin\CheckoutFieldEditor;
use OM4\Zapier\Plugin\Subscriptions;
use OM4\Zapier\SendQueue;
use OM4\Zapier\Trigger\TriggerFactory;
use WC_DateTime;

defined( 'ABSPATH' ) || exit;

/**
 * Class Plugin
 * This class is a singleton, and should be accessed via the WC_Zapier() function.
 */
class Plugin {

	/** Database version (used for install/upgrade tasks if required) */
	const DB_VERSION = 3;

	/** Name of the wp_option record that stores the installed version number. */
	const DB_VERSION_OPTION_NAME = 'wc_zapier_version';

	/** The minimum WooCommerce version that this plugin supports. */
	const MINIMUM_SUPPORTED_WOOCOMMERCE_VERSION = '3.0.0';

	/** URL to the documentation for this plugin. */
	const DOCUMENTATION_URL = 'https://docs.woocommerce.com/document/woocommerce-zapier/';

	/**
	 * Stores the one and only instance of this class
	 *
	 * @var self
	 */
	private static $instance;

	/** @var Dashboard */
	private $admin;

	/**
	 * Full path to this plugin's directory (including trailing slash)
	 *
	 * @var string
	 */
	public static $plugin_dir;

	/**
	 * The list of WooCommerce order statuses.
	 *
	 * Generated by Plugin::get_order_statuses()
	 *
	 * @var string[]
	 */
	private static $order_statuses;

	/** @var SendQueue */
	public static $queue;

	/**
	 * The main Plugin instance.
	 *
	 * @return self
	 */
	public static function instance() {

		if ( ! isset( self::$instance ) ) {
			self::$instance = new self();
		}
		return self::$instance;
	}

	/**
	 * Initialise the plugin
	 * Constructor is private so nobody else can create an instance.
	 */
	private function __construct() {
		self::$plugin_dir = dirname( WC_ZAPIER_PLUGIN_FILE ) . '/';

		load_plugin_textdomain( 'wc_zapier', false, dirname( plugin_basename( WC_ZAPIER_PLUGIN_FILE ) ) . '/languages' );
		add_action( 'plugins_loaded', array( $this, 'plugins_loaded' ) );
	}

	/**
	 * Executed during the 'plugins_loaded' WordPress hook.
	 *
	 * - Checks that we're running the correct WooCommerce Version
	 * - Sets up various hooks
	 * - Load Supported Zapier Triggers
	 * - Loads the admin/dashboard interface if required
	 *
	 * @return void
	 */
	public function plugins_loaded() {
		// WooCommerce version check.
		if ( version_compare( WOOCOMMERCE_VERSION, self::MINIMUM_SUPPORTED_WOOCOMMERCE_VERSION, '<' ) ) {
			add_action( 'admin_notices', array( $this, 'admin_notice' ) );
			( new Logger() )->alert(
				'WooCommerce plugin version (%s) is less than %s',
				[ WOOCOMMERCE_VERSION, self::MINIMUM_SUPPORTED_WOOCOMMERCE_VERSION ]
			);
			return;
		}

		self::$queue = SendQueue::instance();

		// User has a supported version of WooCommerce, so let's proceed.

		// WooCommerce init is priority 0, cancel_order is priority 10
		// Initialize in between those two so that cancelled orders are
		// accounted for.
		add_action( 'init', array( $this, 'init' ), 5 );

		add_action( 'admin_init', array( $this, 'maybe_activate_or_update' ) );

		add_filter( 'plugin_action_links_' . plugin_basename( WC_ZAPIER_PLUGIN_FILE ), array( $this, 'action_links' ) );

		// Check the WooCommerce Subscriptions plugin.
		if ( class_exists( 'WC_Subscriptions' ) ) {
			new Subscriptions();
		}
		// Check the WooCommerce Checkout Field Editor plugin.
		if ( function_exists( 'woocommerce_init_checkout_field_editor' ) ) {
			new CheckoutFieldEditor();
		}

		add_action( 'wc_zapier_resend_sample_data', array( '\\OM4\\Zapier\\Plugin', 'resend_sample_data' ) );

	}

	/**
	 * Obtain the list of WooCommerce order statuses.
	 *
	 * @return string[] Array of order status slugs (excluding the wc- prefix)
	 */
	public static function get_order_statuses() {
		if ( is_null( self::$order_statuses ) ) {
			self::$order_statuses = array();
			$statuses             = wc_get_order_statuses();
			foreach ( $statuses as $status => $status_label ) {
				// Use the order status without wc- internal prefix.
				$status                 = 'wc-' === substr( $status, 0, 3 ) ? substr( $status, 3 ) : $status;
				self::$order_statuses[] = $status;
			}
		}
		return self::$order_statuses;
	}

	/**
	 * Displays a message if the user isn't using a supported version of WooCommerce.
	 *
	 * @return void
	 */
	public function admin_notice() {
		?>
		<div id="message" class="error">
			<p>
			<?php
			echo esc_html(
				sprintf(
					// Translators: %s: WooCommerce Version.
					__( 'The WooCommerce Zapier Integration plugin is only compatible with WooCommerce version %s or later. Please update WooCommerce.', 'wc_zapier' ),
					self::MINIMUM_SUPPORTED_WOOCOMMERCE_VERSION
				)
			);
			?>
			</p>
		</div>
		<?php
	}

	/**
	 * Registers the custom post type for storing Zapier feeds.
	 * Executed during the 'init' WordPress hook.
	 *
	 * @return void
	 */
	public function init() {
		// The Custom Post Type that stores the zapier feeds.
		register_post_type(
			'wc_zapier_feed',
			array(
				'public'       => false,
				'show_ui'      => true,
				'show_in_menu' => 'woocommerce',
				'supports'     => false,
				'labels'       => array(
					'name'               => __( 'Zapier Feeds', 'wc_zapier' ),
					'singular_name'      => __( 'Zapier Feed', 'wc_zapier' ),
					'add_new_item'       => __( 'Add New Zapier Feed', 'wc_zapier' ),
					'edit_item'          => __( 'Edit Zapier Feed', 'wc_zapier' ),
					'new_item'           => __( 'New Zapier Feed', 'wc_zapier' ),
					'view_item'          => __( 'View Zapier Feed', 'wc_zapier' ),
					'search_items'       => __( 'Search Zapier Feeds', 'wc_zapier' ),
					'not_found'          => __( 'No Zapier Feeds found', 'wc_zapier' ),
					'not_found_in_trash' => __( 'No Zapier Feeds found in Trash', 'wc_zapier' ),
				),
			)
		);

		TriggerFactory::load_triggers();

		if ( is_admin() ) {
			$this->admin = new Dashboard();
		}
	}

	/**
	 * Install the plugin if required.
	 *
	 * As per http://core.trac.wordpress.org/ticket/14170 it's far better to use
	 * an upgrade routine fired on admin_init Executed on every admin/dashboard
	 * page load (via the admin_init hook).
	 *
	 * @return void
	 */
	public function maybe_activate_or_update() {
		$installed_version = intval( get_option( self::DB_VERSION_OPTION_NAME ) );
		if ( self::DB_VERSION !== $installed_version ) {
			if ( 0 !== $installed_version ) {
				// Any database update/upgrade routines will go here.
				if ( 1 === $installed_version ) {
					// Send sample data to all active feeds to ensure they have the latest field definitions.
					self::resend_sample_data_async();
					$installed_version++;
				}
				if ( 2 === $installed_version ) {
					// Automatically deactivate the Synchronous Send plugin (its no longer required).
					if ( function_exists( 'deactivate_plugins' ) ) {
						if ( is_plugin_active( 'woocommerce-zapier-synchronous/woocommerce-zapier-synchronous.php' ) ) {
							deactivate_plugins( 'woocommerce-zapier-synchronous/woocommerce-zapier-synchronous.php' );
						}
					}
					$installed_version ++;
				}
			}
			update_option( self::DB_VERSION_OPTION_NAME, self::DB_VERSION );
		}
	}

	/**
	 * Return a formatted price (excluding currency symbols) In the output, the
	 * number of decimal places matching WooCommerce's "General -> Currency
	 * options -> Number of decimals" setting
	 *
	 * @param int|float $price The unformatted price (without any thousands separators).
	 *
	 * @return string The formatted price.
	 */
	public static function format_price( $price ) {
		return wc_format_decimal( $price, wc_get_price_decimals() );
	}

	/**
	 * Format a WordPress date into a W3C formatted date in the store's local
	 * timezone (eg 2005-08-15T15:52:01+08:00)
	 *
	 * @param string|WC_DateTime $date Date to format to.
	 *
	 * @return string Date formatted like 2005-08-15T15:52:01+08:00.
	 */
	public static function format_date( $date ) {
		if ( ! is_a( $date, 'WC_DateTime' ) && empty( $date ) ) {
			return '';
		}

		if ( is_a( $date, 'WC_DateTime' ) ) {
			// A WC 2.7+ date - convert it to a date/time string in the site's local timezone.
			$date = gmdate( 'Y-m-d H:i:s', $date->getOffsetTimestamp() );
		}
		return date_i18n( DATE_W3C, strtotime( $date ) );
	}

	/**
	 * Prepare (decode) a string, in preparation for sending to Zapier
	 * Some order fields in WooCommerce are HTML entity encoded, and they need
	 * to be decoded before sending to Zapier. For example, "&amp;" should be
	 * sent as "&".
	 *
	 * @see: https://github.com/woocommerce/woocommerce/commit/07237d9a09849e107707943453b1fb245b8b4a2d
	 * @see: https://github.com/woocommerce/woocommerce/issues/10149
	 *
	 * @param string|array $value string|array The string/array that needs to be decoded.
	 *
	 * @return string|array The decoded string/array.
	 */
	public static function decode( $value ) {
		if ( is_array( $value ) ) {
			return json_encode( array_map( array( 'OM4\\Zapier\\Plugin', 'decode' ), $value ) );
		} elseif ( is_object( $value ) ) {
			// TODO: Handle scenarios where an object is passed (Issue #125).
			( new Logger() )->notice( 'OM4\Zapier\Plugin::decode() value is an object: %s', [ json_encode( $value ) ] );
			return json_encode( $value );
		} else {
			return html_entity_decode( $value, ENT_QUOTES, get_bloginfo( 'charset' ) );
		}
	}

	/**
	 * Override the WooCommerce Zapier plugin's action links.
	 * Displayed beside the activate/deactivate links on WordPress' Plugins screen.
	 *
	 * @param array $links Array of plugin action links.
	 *
	 * @return array
	 */
	public function action_links( $links ) {

		$plugin_links = array(
			'<a href="' . admin_url( 'edit.php?post_type=wc_zapier_feed' ) . '">' . __( 'Settings', 'wc_zapier' ) . '</a>',
			'<a href="' . self::DOCUMENTATION_URL . '">' . __( 'Documentation', 'wc_zapier' ) . '</a>',
			'<a href="' . admin_url( 'admin.php?page=wc-status&tab=logs' ) . '">' . __( 'Logs', 'wc_zapier' ) . '</a>',
		);

		return array_merge( $plugin_links, $links );
	}

	/**
	 * Asynchronously send sample data to all Feeds that use the specified trigger(s)
	 * This ensures that all existing Zaps include the latest data specification.
	 *
	 * @param strings[] $trigger_keys List of trigger keys.
	 *
	 * @return void
	 */
	public static function resend_sample_data_async( $trigger_keys = array() ) {
		wp_schedule_single_event( time(), 'wc_zapier_resend_sample_data', array( 'trigger_keys' => $trigger_keys ) );
	}

	/**
	 * Immediately re-send sample data to all currently active Zapier Feeds that use these triggers
	 * This ensures that Zapier has the latest checkout field definitions.
	 *
	 * @param string[] $trigger_keys Array of trigger keys.
	 *
	 * @return void
	 */
	public static function resend_sample_data( $trigger_keys = array() ) {
		if ( empty( $trigger_keys ) ) {
			$trigger_keys = TriggerFactory::get_trigger_keys();
		}
		foreach ( $trigger_keys as $trigger_key ) {
			try {
				$trigger = TriggerFactory::get_trigger_with_key( $trigger_key );
				$trigger->send_sample_data_to_active_feeds_using_this_trigger();
			} catch ( Exception $ex ) {
				// Invalid trigger key - silently ignore and continue.
				continue;
			}
		}
	}
}
