<?php
/**
 * This file loads the CSS and JS necessary for your shortcodes display
 *
 * @package Symple Shortcodes Plugin
 * @since 1.0
 * @author AJ Clarke : http://wpexplorer.com
 * @copyright Copyright (c) 2012, AJ Clarke
 * @link http://wpexplorer.com
 */
 


if( !function_exists ('symple_shortcodes_scripts') ) :
	function symple_shortcodes_scripts() {

		$scripts_dir = mytheme_inc_url. 'plugins/dd9-shortcodes/includes/';

		// Make sure jquery is loaded
		wp_enqueue_script( 'jquery' );

		// Register scripts
		wp_register_script( 'symple_tabs', $scripts_dir . 'js/symple_tabs.js', array ( 'jquery', 'jquery-ui-tabs'), '1.0', true );
		wp_register_script( 'symple_toggle', $scripts_dir . 'js/symple_toggle.js', 'jquery', '1.0', true );
		wp_register_script( 'symple_accordion', $scripts_dir . 'js/symple_accordion.js', array ( 'jquery', 'jquery-ui-accordion'), '1.0', true );
		wp_register_script( 'symple_googlemap',  $scripts_dir . 'js/symple_googlemap.js', array('jquery'), '1.0', true );
		wp_register_script( 'symple_googlemap_api', 'https://maps.googleapis.com/maps/api/js?sensor=false', array('jquery'), '1.0', true );
		wp_register_script( 'symple_skillbar', $scripts_dir . 'js/symple_skillbar.js', array ( 'jquery' ), '1.0', true );
		wp_register_script( 'symple_scroll_fade', plugin_dir_url( __FILE__ ) . 'js/symple_scroll_fade.js', array ( 'jquery' ), '1.0', true );

		// Enqueue CSS
		wp_enqueue_style( 'symple_shortcode_styles', $scripts_dir . 'css/symple_shortcodes_styles.css' );
		//wp_enqueue_style( 'symple_shortcodes_font_awesome', $scripts_dir . 'css/font-awesome.min.css.css' );
		
	}
	add_action('wp_enqueue_scripts', 'symple_shortcodes_scripts');
endif;