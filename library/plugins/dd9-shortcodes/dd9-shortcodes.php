<?php
/*
Plugin Name: dd9-shortcodes
Plugin URI: http://www.wpexplorer.com/symple-shortcodes
Description: A free shortcodes plugin
Author:  DD9, forked from AJ Clarke
Author URI: http://www.wpexplorer.com
Version: 1.6
License: GNU General Public License version 2.0
License URI: http://www.gnu.org/licenses/gpl-2.0.html
*/




// Exit if accessed directly
//if ( ! defined( 'ABSPATH' ) ) exit;

// Adds plugin JS and CSS
//require_once( dirname(__FILE__) . '/includes/scripts.php' );

// Main shortcode functions
//require_once( dirname(__FILE__) . '/includes/shortcode-functions.php');

// Adds mce buttons to post editor
//require_once( dirname(__FILE__) . '/includes/mce/symple_shortcodes_tinymce.php');

// Auto Updates Class
//require_once('wp-updates-plugin.php');
//new WPUpdatesPluginUpdater_285( 'http://wp-updates.com/api/2/plugin', plugin_basename(__FILE__));


require_once mytheme_inc_path. 'plugins/dd9-shortcodes/includes/scripts.php';
require_once mytheme_inc_path. 'plugins/dd9-shortcodes/includes/shortcode-functions.php';
require_once mytheme_inc_path. 'plugins/dd9-shortcodes/includes/mce/symple_shortcodes_tinymce.php';