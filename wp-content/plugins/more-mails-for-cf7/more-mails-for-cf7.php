<?php
/*
Plugin Name: More Mails for Contact Form 7
Description: Add a third, fourth, etc. mail message to any CF7 form.
Version: 1.0.0
Author: Roy Orbison
Text Domain: more-mails-for-contact-form-7
Licence: GPLv2 or later
*/

const MOMA4CF7_TEXTDOM = 'more-mails-for-contact-form-7';
const MOMA4CF7_MIN = 3;
define('MOMA4CF7_BASE', basename(__FILE__, '.php'));

if (is_admin()) {
	add_action(
		'admin_menu'
		, function() {
			$title = __('Contact Form 7 More Mails', MOMA4CF7_TEXTDOM);
			$slug_admin = MOMA4CF7_BASE . '-admin';
			$slug_settings = MOMA4CF7_BASE . '-settings';

			add_filter(
				'plugin_action_links_' . plugin_basename(__FILE__)
				, function($links) use ($slug_admin) {
					array_unshift(
						$links
						, '<a href="' . admin_url('admin.php?page=' . urlencode($slug_admin)) . '">Settings</a>'
					);
					return $links;
				}
			);

			add_submenu_page(
				'wpcf7'
				, $title
				, __('More mails', MOMA4CF7_TEXTDOM)
				, 'administrator'
				, $slug_admin
				, function() use ($title, $slug_admin, $slug_settings) {
					?>
					<div class=wrap>
						<h1><?= esc_html($title); ?></h1>
						<form action=options.php method=post>
							<?php
							settings_fields($slug_settings);
							do_settings_sections($slug_admin);
							submit_button();
							?>
						</form>
					</div>
					<?php
				}
			);

			add_action(
				'admin_init'
				, function() use ($slug_admin, $slug_settings) {
					register_setting(
						$slug_settings
						, MOMA4CF7_BASE
						, [
							'sanitize_callback' => function($inputs) {
								foreach ($inputs as $setting => $val) {
									switch ($setting) {
										case 'max':
											$inputs[$setting] = max(MOMA4CF7_MIN, (int) $val);
									}
								}
								return $inputs;
							},
						]
					);

					$options = get_option(MOMA4CF7_BASE);
					$nuttin = function() {
						return '';
					};

					$slug_sect = MOMA4CF7_BASE . '-general';
					add_settings_section(
						$slug_sect
						, __('Settings', MOMA4CF7_TEXTDOM)
						, $nuttin
						, $slug_admin
					);
					$name = 'max';
					add_settings_field(
						$name
						, __('Mail sections per form', MOMA4CF7_TEXTDOM)
						, function() use (&$options, $name) {
							printf(
								'<input type=number required class=small-text id=%1$s-%2$s name="%1$s[%2$s]" value="%3$s" min=%4$d placeholder=%4$d>'
								, MOMA4CF7_BASE
								, $name
								, $options && isset($options[$name]) ? esc_attr($options[$name]) : ''
								, MOMA4CF7_MIN
							);
						}
						, $slug_admin
						, $slug_sect
						, [
							'label_for' => MOMA4CF7_BASE . "-$name",
						]
					);
				}
			);
		}
		, 9999
	);

	add_filter(
		'wpcf7_editor_panels'
		, function($panels) {
			if ($max = moma4cf7_max()) {
				$panels['mail-panel']['callback'] = function($post) use ($max) {
					wpcf7_editor_panel_mail($post);
					for ($i = MOMA4CF7_MIN; $i <= $max; $i++) {
						echo '<br class="clear" />';
						wpcf7_editor_box_mail(
							$post
							, [
								/* translators: %d: nth mail section */
								'id' => "wpcf7-mail-$i",
								'name' => "mail_$i",
								'title' => sprintf(__('Mail (%d)', MOMA4CF7_TEXTDOM), $i),
								'use' => sprintf(__('Use Mail (%d)', MOMA4CF7_TEXTDOM), $i),
							]
						);
					}
				};
			}
			return $panels;
		}
		, 8
	);

	add_action(
		'wpcf7_save_contact_form'
		, function($contact_form, $args, $context) {
			if ($max = moma4cf7_max()) {
				$properties = $contact_form->get_properties();
				$properties_moma = [];
				for ($i = MOMA4CF7_MIN; $i <= $max; $i++) {
					$property = "mail_$i";
					if (isset($_POST["wpcf7-mail-$i"])) {
						$properties_moma[$property] = wpcf7_sanitize_mail(
							wp_unslash($_POST["wpcf7-mail-$i"])
							, $properties[$property]
						);
					}
				}
				if ($properties_moma) {
					$contact_form->set_properties($properties_moma);
				}
			}
		}
		, 8
		, 3
	);
}

register_activation_hook(
	__FILE__
	, function() {
		if (false === get_option(MOMA4CF7_BASE)) {
			add_option(MOMA4CF7_BASE, [
				'max' => MOMA4CF7_MIN,
			]);
		}
	}
);

add_filter(
	'wpcf7_contact_form_properties'
	, function($properties, $contact_form) {
		if ($max = moma4cf7_max()) {
			for ($i = MOMA4CF7_MIN; $i <= $max; $i++) {
				$property = "mail_$i";
				if (!array_key_exists($property, $properties)) {
					$properties[$property] = [];
				}
			}
		}
		return $properties;
	}
	, 8
	, 2
);

add_filter(
	'wpcf7_additional_mail'
	, function($additional_mail, $contact_form) {
		if ($max = moma4cf7_max()) {
			for ($i = MOMA4CF7_MIN; $i <= $max; $i++) {
				$property = "mail_$i";
				if (
					$mail_n = $contact_form->prop($property)
					and $mail_n['active']
				) {
					$additional_mail[$property] = $mail_n;
				}
			}
		}
		return $additional_mail;
	}
	, 8
	, 2
);

function moma4cf7_max() {
	static $max = null;
	if (null === $max) {
		$max = ($options = get_option(MOMA4CF7_BASE))
				&& isset($options['max'])
				&& ($options['max'] = (int) $options['max']) >= MOMA4CF7_MIN ?
			$options['max'] :
			false;
	}
	return $max;
}
