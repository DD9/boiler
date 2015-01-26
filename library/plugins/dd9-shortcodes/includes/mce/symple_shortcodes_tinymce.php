<?php
/**
 * This file has all the main shortcode functions
 *
 * @package Symple Shortcodes Plugin
 * @author AJ Clarke : http://wpexplorer.com
 * @copyright Copyright (c) 2012, AJ Clarke
 * @link http://wpexplorer.com
 *
 */


function symple_shortcodes_add_mce_button() {
	// check user permissions
	if ( !current_user_can( 'edit_posts' ) && !current_user_can( 'edit_pages' ) ) {
		return;
	}
	// check if WYSIWYG is enabled
	if ( 'true' == get_user_option( 'rich_editing' ) ) {
		add_filter( 'mce_external_plugins', 'symple_shortcodes_add_tinymce_plugin' );
		add_filter( 'mce_buttons', 'symple_shortcodes_register_mce_button' );
	}
}
add_action('admin_head', 'symple_shortcodes_add_mce_button');


function symple_shortcodes_add_tinymce_plugin( $plugin_array ) {
	$plugin_array['symple_shortcodes_mce_button'] = mytheme_inc_url . 'plugins/dd9-shortcodes/includes/mce/js/symple_shortcodes_tinymce.js';
	return $plugin_array;
}


function symple_shortcodes_register_mce_button( $buttons ) {
	array_push( $buttons, 'symple_shortcodes_mce_button' );
	return $buttons;
}


function symple_shortcodes_mce_css() {
	wp_enqueue_style('symple_shortcodes-tc', mytheme_inc_url. 'plugins/dd9-shortcodes/includes/mce/css/symple_shortcodes_tinymce_style.css' );
}
add_action( 'admin_enqueue_scripts', 'symple_shortcodes_mce_css' );