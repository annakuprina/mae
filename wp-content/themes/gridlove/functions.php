<?php



/* Define Theme Vars */

define( 'GRIDLOVE_THEME_VERSION', '2.2.14' );



/* Define content width */

if ( !isset( $content_width ) ) {

	$content_width = 770;

}



/* Localization */

load_theme_textdomain( 'gridlove', get_template_directory()  . '/languages' );





/* After theme setup main hook */

add_action( 'after_setup_theme', 'gridlove_theme_setup' );



/**

 * After Theme Setup

 *

 * Callback for after_theme_setup hook

 *

 * @return void

 * @since  1.0

 */



function gridlove_theme_setup() {



	/* Add thumbnails support */

	add_theme_support( 'post-thumbnails' );



	/* Add theme support for title tag */

	add_theme_support( 'title-tag' );





	/* Add image sizes */

	$image_sizes = gridlove_get_image_sizes();

	if ( !empty( $image_sizes ) ) {

		foreach ( $image_sizes as $id => $size ) {

			add_image_size( $id, $size['w'], $size['h'], $size['crop'] );

		}

	}



	/* Add post formats support */

	add_theme_support( 'post-formats', array( 'audio', 'gallery', 'video' ) );



	/* Support for HTML5 */

	add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );



	/* Automatic Feed Links */

	add_theme_support( 'automatic-feed-links' );



	/* Declare WooCommerce support */

	add_theme_support( 'woocommerce' );



	add_theme_support( 'wc-product-gallery-zoom' );

	add_theme_support( 'wc-product-gallery-lightbox' );

	add_theme_support( 'wc-product-gallery-slider' );



}



/* Helpers and utility functions */

include_once ( get_template_directory() . '/core/helpers.php' );



/* Load frontend scripts */

include_once ( get_template_directory() . '/core/enqueue.php' );



/* Module-specific functions */

include_once ( get_template_directory() . '/core/modules.php' );



/* Template functions */

include_once ( get_template_directory() . '/core/template-functions.php' );



/* Menus */

include_once ( get_template_directory() . '/core/menus.php' );



/* Sidebars */

include_once ( get_template_directory() . '/core/sidebars.php' );



/* Widgets */

include_once ( get_template_directory() . '/core/widgets.php' );



/* Extensions (hooks and filters to add/modify specific features ) */

include_once ( get_template_directory() . '/core/extensions.php' );





if ( is_admin() ) {



/* Admin helpers and utility functions  */

include_once ( get_template_directory() . '/core/admin/helpers.php' );



/* Load admin scripts */

include_once ( get_template_directory() . '/core/admin/enqueue.php' );



/* Theme Options */

include_once ( get_template_directory() . '/core/admin/options.php' );



/* Demo importer panel */

include_once ( get_template_directory() . '/core/admin/demo-importer.php' );



/* Include plugins - TGM */

include_once ( get_template_directory() . '/core/admin/plugins.php' );



/* Include AJAX action handlers */

include_once ( get_template_directory() . '/core/admin/ajax.php' );



/* Extensions ( hooks and filters to add/modify specific features ) */

include_once ( get_template_directory() . '/core/admin/extensions.php' );



/* Custom metaboxes */

include_once ( get_template_directory() . '/core/admin/metaboxes.php' );



}



add_action ( 'woocommerce_product_meta_start', 'show_attributes', 25 );

function show_attributes() {

	global $product;

	wc_display_product_attributes( $product );

}

add_filter( 'woocommerce_product_tabs', 'bbloomer_remove_product_tabs', 98 );

function bbloomer_remove_product_tabs( $tabs ) {

	unset( $tabs['additional_information'] );

	return $tabs;

}


add_filter('woocommerce_sale_flash', 'woocommerce_custom_sale_text', 10, 3);
function woocommerce_custom_sale_text($text, $post, $_product)
{
    return '<span class="onsale">Sale Item</span>';
}


add_filter( 'woocommerce_billing_fields', 'heckpack_remove_filter_phone', 10, 1 );
function heckpack_remove_filter_phone( $address_fields ) {
  $address_fields['billing_phone']['required'] = true;
  return $address_fields;
}

/*add_filter( 'woocommerce_breadcrumb_defaults', 'jk_woocommerce_breadcrumbs' );
function jk_woocommerce_breadcrumbs() {
    return array(
            'delimiter'   => '&nbsp;&#47;&nbsp;',
            'wrap_before' => '<ol itemscope itemtype="http://schema.org/BreadcrumbList" class="woocommerce-breadcrumb">',
            'wrap_after'  => '</ol>',
            'before'      => '<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">',
            'after'       => '</li>',
            'home'        => _x( 'Home', 'breadcrumb', 'woocommerce' ),
        );
}*/