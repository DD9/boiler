<?php

// shortcodes

/*--------------------------------------*/
/*    Clean up Shortcodes
/*--------------------------------------*/
function wpex_clean_shortcodes($content){   
    $array = array (
        '<p>[' => '[', 
        ']</p>' => ']', 
        ']<br />' => ']'
    );
    $content = strtr($content, $array);
    return $content;
}
add_filter('the_content', 'wpex_clean_shortcodes');



// Line Break Shortcode 
function line_break_shortcode() {
return '<br />';
}
add_shortcode( 'br', 'line_break_shortcode' );

// Divider shortcode
function divider_shortcode( $atts, $content = null ) {
   return '<hr />';
}
add_shortcode( 'divider', 'divider_shortcode' );

// Divider Bar shortcode
function dividerbar_shortcode( $atts, $content = null ) {
   return '<div class="divider-bar"></div>';
}
add_shortcode( 'dividerbar', 'dividerbar_shortcode' );


// Lead text shortcode 
function lead_shortcode( $atts, $content = null ) {
   return '<p class="lead">' . $content . '</p>';
}
add_shortcode( 'lead', 'lead_shortcode' );


// Small shortcode 
function small_shortcode( $atts, $content = null ) {
   return '<small>' . $content . '</small>';
}
add_shortcode( 'small', 'small_shortcode' );


// Buttons
function buttons( $atts, $content = null ) {
  extract( shortcode_atts( array(
  'class' => '', /* primary, default, info, success, danger, warning */
  'size' => '', /* xs, sm, default, large */
  'target' => 'self', /* self, blank */
  'url'  => '' 
  ), $atts ) );
  
  $bs_btn_classes = array('primary', 'default', 'info', 'success', 'danger', 'warning' );

  if($class == "") {
    $class = "btn-default";
  }else{
    if(in_array($class, $bs_btn_classes))
      $class = "btn-" . $class;
  }

  if($size == "default" || $size == "" )
    $size = "";
  else
    $size = "btn-" . $size;

  
  $output = '<a href="' . $url . '" target="_' . $target . '" class="btn '. $class . ' ' . $size . '">';
  $output .= $content;
  $output .= '</a>';
  
  return $output;
}

add_shortcode('button', 'buttons'); 


