<?php
/*
Repository of custom functions for reference. 
To use: copy out what you want into /funtions.php

---------------------------------------------
//http://css-tricks.com/snippets/wordpress/allow-svg-through-wordpress-media-uploader/
function cc_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');




---------------------------------------------
// Add Editor Stylesheet
function my_theme_add_editor_styles() {
    add_editor_style( 'custom-editor-style.css' );
}
add_action( 'init', 'my_theme_add_editor_styles' );



---------------------------------------------
// If is subpage
// See SCA theme /page.php for usage in template
function is_subpage() {
    global $post;                              // load details about this page

    if ( is_page() && $post->post_parent ) {   // test to see if the page has a parent
        return $post->post_parent;             // return the ID of the parent post

    } else {                                   // there is no parent so ...
        return false;                          // ... the answer to the question is false
    }
}


---------------------------------------------
// Font Awesome Shortcodes http://www.gregreindel.com/adding-font-awesome-icons-via-shortcode/
// usage: [icon type="comment" size="2x"]
function addscFontAwesome($atts) {
    extract(shortcode_atts(array(
    'type'  => '',
    'size' => '',
    'rotate' => '',
    'flip' => '',
    'pull' => '',
    'animated' => '',
 
    ), $atts));
     
    $type = ($type) ? 'fa-'.$type. '' : 'icon-star';
    $size = ($size) ? 'fa-'.$size. '' : '';
    $rotate = ($rotate) ? 'fa-rotate-'.$rotate. '' : '';
    $flip = ($flip) ? 'fa-flip-'.$flip. '' : '';
    $pull = ($pull) ? 'pull-'.$pull. '' : '';
    $animated = ($animated) ? 'fa-spin' : '';
 
    $theAwesomeFont = '<i class="fa '.sanitize_html_class($type).' '.sanitize_html_class($size).' '.sanitize_html_class($rotate).' '.sanitize_html_class($flip).' '.sanitize_html_class($pull).' '.sanitize_html_class($animated).'"></i>';
     
    return $theAwesomeFont;
}
 
add_shortcode('icon', 'addscFontAwesome');



---------------------------------------------
//http://css-tricks.com/snippets/wordpress/allow-svg-through-wordpress-media-uploader/
function cc_mime_types( $mimes ){
	$mimes['svg'] = 'image/svg+xml';
	return $mimes;
}
add_filter( 'upload_mimes', 'cc_mime_types' );



---------------------------------------------
// Pass WYSIWYG values through the_content filter
// https://wordpress.org/support/topic/acf-40-wysiwyg-the_content-filter
// http://www.advancedcustomfields.com/resources/acfformat_value/

function my_acf_format_value($value, $post_id, $field){
	return str_replace( ']]>', ']]>', apply_filters( 'the_content', $value) );
}
function my_on_init(){
	if(!is_admin()){
		remove_all_filters('acf/format_value/type=wysiwyg');
		add_filter('acf/format_value/type=wysiwyg', 'my_acf_format_value', 10, 3);
	}
}
add_action('init', 'my_on_init');
 
 
 
---------------------------------------------
//http://wordpress.stackexchange.com/questions/59189/add-body-class-based-on-existance-of-post-thumbnail-code-works-but-receiving-ph
function add_featured_image_body_class( $classes ) {    
global $post;
    if ( isset ( $post->ID ) && get_the_post_thumbnail($post->ID)) {
          $classes[] = 'has_featured_image';
 }
          return $classes;
}
add_filter( 'body_class', 'add_featured_image_body_class' );



---------------------------------------------
// check for a certain meta key on the current post and add a body class if meta value exists
//http://krogsgard.com/2012/wordpress-body-class-post-meta/
add_filter('body_class','custom_field_body_class');
 
function custom_field_body_class( $classes ) {
 
if ( get_field('header_graphic', get_the_ID()) ) {
$classes[] = 'has_header_graphic';
}
// return the $classes array
return $classes;
 
}



---------------------------------------------
//Excerpts for pages (http://stevejonesdev.com/2011/10/add-excerpt-field-to-wordpress-pages/)

add_action( 'init', 'my_add_excerpts_to_pages' );
function my_add_excerpts_to_pages() {
add_post_type_support( 'page', 'excerpt' );
}





*/