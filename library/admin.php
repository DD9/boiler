<?php
/*
This file handles the admin area and functions.
You can use this file to make changes to the
dashboard. Updates to this page are coming soon.
It's turned off by default, but you can call it
via the functions file.

Developed by: Eddie Machado & DD9


*/

//BOILER defaults

// Disable the Admin Bar. 
add_filter( 'show_admin_bar', '__return_false' );

//Remove links menu on older installs
function my_remove_menu_pages() {
  remove_menu_page('link-manager.php');  
}
add_action( 'admin_menu', 'my_remove_menu_pages' );


/************* DASHBOARD WIDGETS *****************/
// disable default dashboard widgets
function disable_default_dashboard_widgets() {
	// remove_meta_box( 'dashboard_right_now', 'dashboard', 'core' );    // Right Now Widget
	//remove_meta_box( 'dashboard_recent_comments', 'dashboard', 'core' ); // Comments Widget
	remove_meta_box( 'dashboard_incoming_links', 'dashboard', 'core' );  // Incoming Links Widget
	//remove_meta_box( 'dashboard_plugins', 'dashboard', 'core' );         // Plugins Widget

	//remove_meta_box('dashboard_quick_press', 'dashboard', 'core' );  // Quick Press Widget
	//remove_meta_box( 'dashboard_recent_drafts', 'dashboard', 'core' );   // Recent Drafts Widget
	//remove_meta_box( 'dashboard_primary', 'dashboard', 'core' );         //
	//remove_meta_box( 'dashboard_secondary', 'dashboard', 'core' );       //

	// removing plugin dashboard boxes
	remove_meta_box( 'yoast_db_widget', 'dashboard', 'normal' );         // Yoast's SEO Plugin Widget


}
add_action( 'admin_menu', 'disable_default_dashboard_widgets' );

//Disable YOAST nag messages
//remove_action( 'admin_notices', array( Yoast_Notification_Center::get(), 'display_notifications' ) );
//remove_action( 'all_admin_notices', array( Yoast_Notification_Center::get(), 'display_notifications' ) );




// adding any custom widgets
//add_action( 'wp_dashboard_setup', 'bones_custom_dashboard_widgets' );


/************* CUSTOM LOGIN PAGE *****************/
//Disabled in Boiler by default
// calling your own login css so you can style it

//Updated to proper 'enqueue' method
//http://codex.wordpress.org/Plugin_API/Action_Reference/login_enqueue_scripts
function bones_login_css() {
	wp_enqueue_style( 'bones_login_css', get_template_directory_uri() . '/css/login.css', false );
}

// changing the logo link from wordpress.org to your site
function bones_login_url() {  return home_url(); }

// changing the alt text on the logo to show your site name
function bones_login_title() { return get_option( 'blogname' ); }

// calling it only on the login page
//add_action( 'login_enqueue_scripts', 'bones_login_css', 10 );
//add_filter( 'login_headerurl', 'bones_login_url' );
//add_filter( 'login_headertitle', 'bones_login_title' );


/************* CUSTOMIZE ADMIN *******************/


// Custom Backend Footer
function bones_custom_admin_footer() {
	_e( '<span id="footer-thankyou">Developed by <a href="http://dd9.com" target="_blank">DD9</a></span>. Built using <a href="https://github.com/DD9/boiler" target="_blank">Boiler</a>.', 'bonestheme' );
}

// adding it to the admin area
add_filter( 'admin_footer_text', 'bones_custom_admin_footer' );
