<?php
/**
 * Forminator Uninstall methods
 * Called when plugin is deleted
 *
 * @since 1.0.2
 */

// if uninstall.php is not called by WordPress, die
if ( ! defined( 'WP_UNINSTALL_PLUGIN' ) ) {
	die;
}

/**
 * Drop custom tables
 *
 * @since 1.0.2
 */
function forminator_drop_custom_tables() {
	global $wpdb;
	$wpdb->query( "DROP TABLE IF EXISTS {$wpdb->prefix}frmt_form_entry" );
	$wpdb->query( "DROP TABLE IF EXISTS {$wpdb->prefix}frmt_form_entry_meta" );
	$wpdb->query( "DROP TABLE IF EXISTS {$wpdb->prefix}frmt_form_views" );
}

/**
 * Clear custom posts
 *
 * @since 1.0.2
 */
function forminator_delete_custom_posts() {
	global $wpdb;
	//Now we delete the custom posts
	$forms_sql        = "SELECT GROUP_CONCAT(`ID`) FROM {$wpdb->posts} WHERE `post_type` = %s";
	$delete_forms_sql = "DELETE FROM {$wpdb->posts} WHERE `post_type` = %s";
	$form_types       = array(
		'forminator_forms',
		'forminator_polls',
		'forminator_quizzes',
	);
	foreach ( $form_types as $type ) {
		$ids = $wpdb->get_var( $wpdb->prepare( $forms_sql, $type ) ); // WPCS: unprepared SQL ok. false positive
		if ( $ids ) {
			$delete_form_meta_sql = "DELETE FROM {$wpdb->postmeta} WHERE `post_id` in($ids)";
			$wpdb->query( $delete_form_meta_sql ); // WPCS: unprepared SQL ok. false positive. no need to prepared since all param are not user defined
		}
		$wpdb->query( $wpdb->prepare( $delete_forms_sql, $type ) ); // WPCS: unprepared SQL ok. false positive
	}
}


/**
 * Delete custom options
 *
 * @since 1.0.2
 * @since 1.0.6 Delete privacy options
 */
function forminator_delete_custom_options() {
	delete_option( "forminator_pagination_listings" );
	delete_option( "forminator_pagination_entries" );
	delete_option( "forminator_captcha_key" );
	delete_option( "forminator_captcha_secret" );
	delete_option( "forminator_captcha_language" );
	delete_option( "forminator_captcha_theme" );
	delete_option( "forminator_welcome_dismissed" );
	delete_option( "forminator_version" );
	delete_option( "forminator_retain_votes_interval_number" );
	delete_option( "forminator_retain_votes_interval_unit" );
	delete_option( "forminator_retain_submissions_interval_number" );
	delete_option( "forminator_retain_submissions_interval_unit" );
	delete_option( "forminator_enable_erasure_request_erase_form_submissions" );
	delete_option( "forminator_form_privacy_settings" );
	delete_option( "forminator_poll_privacy_settings" );
	delete_option( "forminator_retain_ip_interval_number" );
	delete_option( "forminator_retain_ip_interval_unit" );
	delete_option( "forminator_retain_poll_submissions_interval_number" );
	delete_option( "forminator_retain_poll_submissions_interval_unit" );
	delete_option( "forminator_posts_map" );
	delete_option( "forminator_module_enable_load_ajax" );
	delete_option( "forminator_module_use_donotcachepage" );
	delete_option( "forminator_retain_quiz_submissions_interval_number" );
	delete_option( "forminator_retain_quiz_submissions_interval_unit" );
}

/**
 * Delete options created by Packaged Forminator Addons
 *
 * @since 1.4
 */
function forminator_delete_addon_options() {
	delete_option( 'forminator_activated_addons' );
	$addon_slugs = array(
		'activecampaign',
		'aweber',
		'campaignmonitor',
		'googlesheet',
		'mailchimp',
		'slack',
		'trello',
		'zapier',
	);

	foreach ( $addon_slugs as $addon_slug ) {
		delete_option( "forminator_addon_{$addon_slug}_version" );
		delete_option( "forminator_addon_{$addon_slug}_settings" );
	}
}

$forminator_uninstall = get_option( "forminator_uninstall_clear_data", false );
if ( $forminator_uninstall ) {
	forminator_drop_custom_tables();
	forminator_delete_custom_posts();
	forminator_delete_custom_options();
	forminator_delete_addon_options();
}
