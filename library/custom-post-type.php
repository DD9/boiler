<?php
/* Custom Post Types

*/

//DD9 Notice:
//CPT DISABLED IN Boiler by default
//Hardcode custom post types here if you want to keep them out of the dashboard
//Otherwise use
//https://wordpress.org/plugins/custom-post-type-ui/


// Flush rewrite rules for custom post types
add_action( 'after_switch_theme', 'bones_flush_rewrite_rules' );

// Flush your rewrite rules
function bones_flush_rewrite_rules() {
	flush_rewrite_rules();
}




?>
