<?php
/**
 * This file has all the main shortcode functions
 * @package Symple Shortcodes Plugin
 * @since 1.0
 * @author AJ Clarke : http://sympleplorer.com
 * @copyright Copyright (c) 2012, AJ Clarke
 * @link http://sympleplorer.com
 * @License: GNU General Public License version 2.0
 * @License URI: http://www.gnu.org/licenses/gpl-2.0.html
 */


/*
 * Allow shortcodes in widgets
 * @since v1.0
 */
add_filter('widget_text', 'do_shortcode');



/*
 * Fix Shortcodes
 * @since v1.0
 */
if( !function_exists('symple_fix_shortcodes') ) {
	function symple_fix_shortcodes($content){
		$array = array (
			'<p>['		=> '[', 
			']</p>'		=> ']', 
			']<br />'	=> ']'
		);
		$content = strtr($content, $array);
		return $content;
	}
}
add_filter('the_content', 'symple_fix_shortcodes');


/*
 * Clear Floats
 * @since v1.0
 */
if( !function_exists('symple_clear_floats_shortcode') ) {
	function symple_clear_floats_shortcode() {
		return '<div class="symple-clear-floats"></div>';
	}
}
add_shortcode( 'symple_clear_floats', 'symple_clear_floats_shortcode' );




/*  CUSTOM DD9 */

// Special ordered list

function speciallist_shortcode( $atts, $content = null ) {
   return '<div class="special_list">' . $content . '</div>';
}

add_shortcode( 'special_list', 'speciallist_shortcode' );

// Special Links
function special_links( $atts, $content = null ) {
	extract( shortcode_atts( array(
	'url'  => '',
	'text' => '', 
	), $atts ) );
	
	$output = '<a href="' . $url . '" class="special_link">';
	$output .= $text;
	$output .= '<span class="more_arrow"></span></a>';
	
	return $output;
}

add_shortcode('special_link', 'special_links'); 

// Small shortcode

function small_shortcode( $atts, $content = null ) {
   return '<small>' . $content . '</small>';
}

add_shortcode( 'small', 'small_shortcode' );

// Accent Font shortcode

function accentfont_shortcode( $atts, $content = null ) {
   return '<span class="accent_font">' . $content . '</span>';
}

add_shortcode( 'accent_font', 'accentfont_shortcode' );

// Lead text shortcode

function lead_shortcode( $atts, $content = null ) {
   return '<span class="lead">' . $content . '</span>';
}

add_shortcode( 'lead', 'lead_shortcode' );



/*  END CUSTOM DD9 */




/*
 * Callout
 * @since v1.4
 */
if( !function_exists('symple_callout_shortcode') ) {
	function symple_callout_shortcode( $atts, $content = NULL ) {
		extract( shortcode_atts( array(
			'caption'				=> '',
			'button_text'			=> '',
			'button_color'			=> 'blue',
			'button_url'			=> 'http://www.wpexplorer.com',
			'button_rel'			=> 'nofollow',
			'button_target'			=> 'blank',
			'button_border_radius'	=> '',
			'button_size'			=> '',
			'class'					=> '',
			'button_icon_left'		=> '',
			'button_icon_right'		=> '',
			'visibility'			=> 'all',
			'fade_in'				=> '',
		), $atts ) );
		$fade_in_class = NULL;
		if ( $fade_in == 'true' ) {
			wp_enqueue_script('symple_scroll_fade');
			$fade_in_class = 'symple-fadein';
		}
		$icon_left = strtolower($button_icon_left);
		$icon_right = strtolower($button_icon_right);
		$border_radius_style = ( $button_border_radius ) ? 'style="border-radius:'. intval($button_border_radius) .'px"' : NULL;
		$output = '<div class="symple-callout symple-clearfix '. $class .' symple-'. $visibility .' '. $fade_in_class .'">';
		if ( $button_text !== '' ) {
			$output .= '<div class="symple-callout-button">';
				$output .='<a href="'. esc_url($button_url) .'" title="'. $button_text .'" target="_'. $button_target .'" class="symple-button '. $button_size .' '.$button_color .'" '. $border_radius_style .'><span class="symple-button-inner" '. $border_radius_style .'>';
				if ( $icon_left !== '' && $icon_left !== 'none' ) {
					$output .= '<i class="symple-heading-icon-left fa fa-'. $icon_left .'"></i>';
				}
				$output .= $button_text;
				if ( $icon_right !== '' && $icon_right !== 'none' ) {
					$output .= '<i class="symple-heading-icon-right fa fa-'. $icon_right .'"></i>';
				}
			$output .='</span></a>';
			$output .='</div>';
		}
		$output .= '<div class="symple-callout-caption">';
			$output .= do_shortcode ( $content );
		$output .= '</div>';
		$output .= '</div>';
		
		return $output;
	}
}
add_shortcode( 'symple_callout', 'symple_callout_shortcode' );


/*
 * Skillbars
 * @since v1.3
 */
if( !function_exists('symple_skillbar_shortcode') ) {
	function symple_skillbar_shortcode( $atts  ) {
		extract( shortcode_atts( array(
			'title'			=> '',
			'percentage'	=> '100',
			'color'			=> '#6adcfa',
			'class'			=> '',
			'show_percent'	=> 'true',
			'visibility'	=> 'all',
		), $atts ) );
		
		// Enque scripts
		wp_enqueue_script('symple_skillbar');
		
		// Display the accordion	';
		$output = '<div class="symple-skillbar symple-clearfix '. $class .' symple-'. $visibility .'" data-percent="'. intval( $percentage ) .'%">';
			if ( $title !== '' ) $output .= '<div class="symple-skillbar-title" style="background: '. $color .';"><span>'. $title .'</span></div>';
			$output .= '<div class="symple-skillbar-bar" style="background: '. $color .';"></div>';
			if ( $show_percent == 'true' ) {
				$output .= '<div class="symple-skill-bar-percent">'.$percentage.'%</div>';
			}
		$output .= '</div>';
		
		return $output;
	}
}
add_shortcode( 'symple_skillbar', 'symple_skillbar_shortcode' );

/*
 * Spacing
 * @since v1.0
 */
if( !function_exists('symple_spacing_shortcode') ) {
	function symple_spacing_shortcode( $atts ) {
		extract( shortcode_atts( array(
			'size'	=> '20px',
			'class'	=> '',
		),
		$atts ) );
	 return '<hr class="symple-spacing '. $class .'" style="height: '. intval($size) .'px" />';
	}
}
add_shortcode( 'symple_spacing', 'symple_spacing_shortcode' );

/**
* Social Icons
* @since 1.0
*/
if( !function_exists('symple_social_shortcode') ) {
	function symple_social_shortcode( $atts ){   
		extract( shortcode_atts( array(
			'icon'				=> 'twitter',
			'url'				=> 'http://www.twitter.com/sympleplorer',
			'title'				=> 'Follow Us',
			'target'			=> 'self',
			'rel'				=> '',
			'border_radius'		=> '',
			'class'				=> '',
		), $atts ) );
		$icons_url = plugin_dir_url( __FILE__ ) .'images/social/';
		$icons_url = apply_filters( 'symple_social_icon_url', $icons_url );
		return '<a href="' . esc_url($url) . '" class="symple-social-icon '. $class .'" target="_'.$target.'" title="'. $title .'" rel="'. $rel .'"
><img src="'. $icons_url . $icon .'.png" alt="'. $icon .'" /></a>';
	}
}
add_shortcode('symple_social', 'symple_social_shortcode');

/**
* Highlights
* @since 1.0
*/
if ( !function_exists( 'symple_highlight_shortcode' ) ) {
	function symple_highlight_shortcode( $atts, $content = null ) {
		extract( shortcode_atts( array(
			'color'			=> 'yellow',
			'class'			=> '',
			'visibility'	=> 'all',
		),
		$atts ) );
		return '<span class="symple-highlight symple-highlight-'. $color .' '. $class .' symple-'. $visibility .'">' . do_shortcode( $content ) . '</span>';
	
	}
}
add_shortcode('symple_highlight', 'symple_highlight_shortcode');


/*
 * Buttons
 * @since v1.0
 */
if( !function_exists('symple_button_shortcode') ) {
	function symple_button_shortcode( $atts, $content = null ) {
		extract( shortcode_atts( array(
			'color' => 'pumpkin',
			'url' => 'http://www.sympleplorer.com',
			'title' => 'Visit Site',
			'target' => 'self',
			'rel' => '',
			'class' => '',
			'icon_left' => '',
			'icon_right' => ''
		), $atts ) );
		
		$border_radius = "2px";
		$border_radius_style = ( $border_radius ) ? 'style="border-radius:'. $border_radius .'"' : NULL;		
		$rel = ( $rel ) ? 'rel="'.$rel.'"' : NULL;
		
		$button = NULL;
		$button .= '<a href="' . $url . '" class="btn '. $class .'" target="_'.$target.'" title="'. $title .'" '. $rel .'>';
			$button .= '<span>';
				if ( $icon_left ) $button .= '<span class="symple-button-icon-left icon-'. $icon_left .'"></span>';
				$button .= $content;
				if ( $icon_right ) $button .= '<span class="symple-button-icon-right icon-'. $icon_right .'"></span>';
			$button .= '</span>';			
		$button .= '</a>';
		return $button;
	}
	add_shortcode('button', 'symple_button_shortcode');
}



/*
 * Boxes
 * @since v1.0
 *
 */
if( !function_exists('symple_box_shortcode') ) { 
	function symple_box_shortcode( $atts, $content = null ) {
		extract( shortcode_atts( array(
			'color'				=> 'gray',
			'float'				=> 'center',
			'text_align'		=> 'left',
			'width'				=> '100%',
			'margin_top'		=> '',
			'margin_bottom'		=> '',
			'class'				=> '',
			'visibility'		=> 'all',
			'fade_in'			=> 'false',
		), $atts ) );
		$fade_in_class = NULL;
		if ( $fade_in == 'true' ) {
			wp_enqueue_script('symple_scroll_fade');
			$fade_in_class = 'symple-fadein';
		}
		$style_attr = '';
		if( $margin_bottom ) {
			$style_attr .= 'margin-bottom: '. $margin_bottom .';';
		}
		if ( $margin_top ) {
			$style_attr .= 'margin-top: '. $margin_top .';';
		}
		$alert_content = '';
		$alert_content .= '<div class="symple-box '. $fade_in_class .'  ' . $color . ' '.$float.' '. $class .' symple-'. $visibility .'" style="text-align:'. $text_align .'; width:'. $width .';'. $style_attr .'">';
		$alert_content .= ' '. do_shortcode($content) .'</div>';
		return $alert_content;
	}
}
add_shortcode( 'symple_box', 'symple_box_shortcode' );




/*
 * Testimonial
 * @Custom DD9
 *
 */
if( !function_exists('symple_testimonial_shortcode') ) { 
	function symple_testimonial_shortcode( $atts, $content = null  ) {
		extract( shortcode_atts( array(
			'by' => '',
			'class' => '',
		  ), $atts ) );
		$testimonial_content = '';
		$testimonial_content .= '<div class="testimonial'. $class .'"><blockquote><p>';
		$testimonial_content .= $content;
		$testimonial_content .= '</p><small>';
		$testimonial_content .= $by .'</small></blockquote></div>';	
		return $testimonial_content;
	}
	add_shortcode( 'testimonial', 'symple_testimonial_shortcode' );
}


/*
 * Divider
 * @Custom DD9
 */
if( !function_exists('symple_divider_shortcode') ) {
	function symple_divider_shortcode( $atts ) {
		extract( shortcode_atts( array(
			'margin_top' => '28px',
			'margin_bottom' => '28px',
			'class' => '',
		  ),
		  $atts ) );
		$style_attr = '';
		if ( $margin_top && $margin_bottom ) {  
			$style_attr = 'style="margin-top: '. $margin_top .';margin-bottom: '. $margin_bottom .';"';
		} elseif( $margin_bottom ) {
			$style_attr = 'style="margin-bottom: '. $margin_bottom .';"';
		} elseif ( $margin_top ) {
			$style_attr = 'style="margin-top: '. $margin_top .';"';
		} else {
			$style_attr = NULL;
		}
	 return '<hr class="symple-divider '. $class .'" '.$style_attr.' />';
	}
	add_shortcode( 'divider', 'symple_divider_shortcode' );
}

/*
 * Toggle
 * @Custom DD9
 */
if( !function_exists('symple_toggle_shortcode') ) {
	function symple_toggle_shortcode( $atts, $content = null ) {
		extract( shortcode_atts( array(
			'title' => 'Toggle Title',
			'class' => '',
		), $atts ) );
		 
		
		
		// Display the Toggle
		return '<div class="symple-toggle clearfix '. $class .'"><h3 class="symple-toggle-trigger"><span>'. $title .'</span><div class="toggle_icon"><i class="fa fa-plus"></i><i class="fa fa-minus"></i></div></h3><div class="symple-toggle-container">' . do_shortcode($content) . '</div></div>';
	}
	add_shortcode('toggle', 'symple_toggle_shortcode');
}

/*
 * Columns
 * @Custom DD9
 *
 */
if( !function_exists('symple_column_shortcode') ) {
	function symple_column_shortcode( $atts, $content = null ){
		extract( shortcode_atts( array(
			'size' => 'one-third',
			'position' =>'first',
			'class' => '',
		  ), $atts ) );
		  return '<div class="symple-column symple-' . $size . ' symple-column-'.$position.' '. $class .'">' . do_shortcode($content) . '</div>';
	}
	add_shortcode('symple_column', 'symple_column_shortcode');
}



// Section
if( !function_exists('symple_accordion_section_shortcode') ) {
	function symple_accordion_section_shortcode( $atts, $content = null  ) {
		extract( shortcode_atts( array(
			'title'	=> 'Title',
			'class'	=> '',
		), $atts ) );
		return '<h3 class="symple-accordion-trigger '. $class .'"><a href="#">'. $title .'</a></h3><div>' . do_shortcode($content) . '</div>';
	}
}
add_shortcode( 'symple_accordion_section', 'symple_accordion_section_shortcode' );


/*
 * Tabs
 * @since v1.0
 *
 */
if (!function_exists('symple_tabgroup_shortcode')) {
	function symple_tabgroup_shortcode( $atts, $content = null ) {
		
		//Enque scripts
		wp_enqueue_script('jquery-ui-tabs');
		wp_enqueue_script('symple_tabs');
		
		// Display Tabs
		$defaults = array();
		extract( shortcode_atts( $defaults, $atts ) );
		preg_match_all( '/tab title="([^\"]+)"/i', $content, $matches, PREG_OFFSET_CAPTURE );
		$tab_titles = array();
		if( isset($matches[1]) ){ $tab_titles = $matches[1]; }
		$output = '';
		if( count($tab_titles) ){
		    $output .= '<div id="symple-tab-'. rand(1, 100) .'" class="symple-tabs">';
			$output .= '<ul class="ui-tabs-nav symple-clearfix">';
			foreach( $tab_titles as $tab ){
				$output .= '<li><a href="#symple-tab-'. sanitize_title( $tab[0] ) .'">' . $tab[0] . '</a></li>';
			}
		    $output .= '</ul>';
		    $output .= do_shortcode( $content );
		    $output .= '</div>';
		} else {
			$output .= do_shortcode( $content );
		}
		return $output;
	}
}
add_shortcode( 'symple_tabgroup', 'symple_tabgroup_shortcode' );

if (!function_exists('symple_tab_shortcode')) {
	function symple_tab_shortcode( $atts, $content = null ) {
		$defaults = array(
			'title'			=> 'Tab',
			'class'			=> '',
			'visibility'	=> 'all',
		);
		extract( shortcode_atts( $defaults, $atts ) );
		return '<div id="symple-tab-'. sanitize_title( $title ) .'" class="tab-content '. $class .' symple-'. $visibility .'">'. do_shortcode( $content ) .'</div>';
	}
}
add_shortcode( 'symple_tab', 'symple_tab_shortcode' );




/*
 * Pricing Table
 * @since v1.0
 *
 */
 
/*main*/
if( !function_exists('symple_pricing_table_shortcode') ) {
	function symple_pricing_table_shortcode( $atts, $content = null  ) {
		extract( shortcode_atts( array(
			'class'			=> '',
			'visibility'	=> 'all',
		), $atts ) );
		return '<div class="symple-pricing-table '. $class .' symple-'. $visibility .'">' . do_shortcode($content) . '</div><div class="symple-clear-floats"></div>';
	}
}
add_shortcode( 'symple_pricing_table', 'symple_pricing_table_shortcode' );

/*section*/
if( !function_exists('symple_pricing_shortcode') ) {
	function symple_pricing_shortcode( $atts, $content = null  ) {
		
		extract( shortcode_atts( array(
			'size'					=> 'one-half',
			'position'				=> '',
			'featured'				=> 'no',
			'plan'					=> 'Basic',
			'cost'					=> '$20',
			'per'					=> 'month',
			'button_url'			=> '',
			'button_text'			=> 'Purchase',
			'button_color'			=> 'blue',
			'button_target'			=> 'self',
			'button_rel'			=> 'nofollow',
			'button_border_radius'	=> '',
			'button_icon_left'		=> '',
			'button_icon_right'		=> '',
			'class'					=> '',
		), $atts ) );
		
		//set variables
		$featured_pricing = ( $featured == 'yes' ) ? 'featured' : NULL;
		$border_radius_style = ( $button_border_radius ) ? 'style="border-radius:'. $button_border_radius .'"' : NULL;
		$icon_left = strtolower($button_icon_left);
		$icon_right = strtolower($button_icon_right);
		
		//start content  
		$pricing_content ='';
		$pricing_content .= '<div class="symple-pricing symple-'. $size .' '. $featured_pricing .' symple-column-'. $position. ' '. $class .'">';
			$pricing_content .= '<div class="symple-pricing-header">';
				$pricing_content .= '<h5>'. $plan. '</h5>';
				$pricing_content .= '<div class="symple-pricing-cost">'. $cost .'</div><div class="symple-pricing-per">'. $per .'</div>';
			$pricing_content .= '</div>';
			$pricing_content .= '<div class="symple-pricing-content">';
				$pricing_content .= ''. $content. '';
			$pricing_content .= '</div>';
			if( $button_url ) {
				$pricing_content .= '<div class="symple-pricing-button"><a href="'. $button_url .'" class="symple-button '. $button_color .'" target="_'. $button_target .'" rel="'. $button_rel .'" '. $border_radius_style .'><span class="symple-button-inner" '. $border_radius_style .'>';
				if ( $icon_left !== '' && $icon_left !== 'none' ) {
					$pricing_content .= '<i class="symple-heading-icon-left fa fa-'. $icon_left .'"></i>';
				}
				$pricing_content .= $button_text;
				if ( $icon_right !== '' && $icon_right !== 'none' ) {
					$pricing_content .= '<i class="symple-heading-icon-right fa fa-'. $icon_right .'"></i>';
				}
			$pricing_content .='</span></a></div>';
			}
		$pricing_content .= '</div>';
		return $pricing_content;
	}
}
add_shortcode( 'symple_pricing', 'symple_pricing_shortcode' );


/*
 * Heading
 * @since v1.1

if( !function_exists('symple_heading_shortcode') ) {
	function symple_heading_shortcode( $atts ) {
		extract( shortcode_atts( array(
			'title'			=> __('Sample Heading', 'symple'),
			'type'			=> 'h2',
			'style'			=> 'double-line',
			'margin_top'	=> '',
			'margin_bottom'	=> '',
			'text_align'	=> '',
			'font_size'		=> '',
			'color'			=> '',
			'class'			=> '',
			'icon_left'		=> '',
			'icon_right'	=> ''
		),
		$atts ) );

		// Load required scripts
		if ( ( $icon_left && $icon_left !== 'none' ) || (  $icon_right && $icon_right !== 'none' ) ) {
			wp_enqueue_style('symple_shortcode_font_awesome');
		}

		$style_attr = '';
		if ( $font_size ) {
			$style_attr .= 'font-size: '. $font_size .';';
		}
		if ( $color ) {
			$style_attr .= 'color: '. $color .';';
		}
		if( $margin_bottom ) {
			$style_attr .= 'margin-bottom: '. intval($margin_bottom) .'px;';
		}
		if ( $margin_top ) {
			$style_attr .= 'margin-top: '. intval($margin_top) .'px;';
		}
		
		if ( $text_align ) {
			$text_align = 'text-align-'. $text_align;
		} else {
			$text_align = 'text-align-left';
		}
		
	 	$output = '<'.$type.' class="symple-heading symple-heading-'. $style .' '. $text_align .' '. $class .'" style="'.$style_attr.'"><span>';
		if ( $icon_left !== '' && $icon_left !== 'none' ) $output .= '<i class="symple-heading-icon-left fa fa-'. $icon_left .'"></i>';
			$output .= $title;
		if ( $icon_right !== '' && $icon_right !== 'none' ) $output .= '<i class="symple-heading-icon-right fa fa-'. $icon_right .'"></i>';
		$output .= '</'.$type.'></span>';
		
		return $output;
	}
}
add_shortcode( 'symple_heading', 'symple_heading_shortcode' );
 */

/*
 * Google Maps
 * @since v1.1
 */
if (! function_exists( 'symple_shortcode_googlemaps' ) ) {
	function symple_shortcode_googlemaps($atts, $content = null) {
		
		extract(shortcode_atts(array(
				'title'			=> '',
				'location'		=> '',
				'width'			=> '',
				'height'		=> '300',
				'zoom'			=> 8,
				'align'			=> '',
				'class'			=> '',
				'visibility'	=> 'all',
		), $atts));
		
		// load scripts
		wp_enqueue_script('symple_googlemap');
		wp_enqueue_script('symple_googlemap_api');
		
		
		$output = '<div id="map_canvas_'.rand(1, 100).'" class="googlemap '. $class .' symple-'. $visibility .'" style="height:'.$height.'px;width:100%">';
			$output .= (!empty($title)) ? '<input class="title" type="hidden" value="'.$title.'" />' : '';
			$output .= '<input class="location" type="hidden" value="'.$location.'" />';
			$output .= '<input class="zoom" type="hidden" value="'.$zoom.'" />';
			$output .= '<div class="map_canvas"></div>';
		$output .= '</div>';
		
		return $output;
	}
}
add_shortcode("symple_googlemap", "symple_shortcode_googlemaps");


/*
 * Divider
 * @DD9 Custom
 */
if( !function_exists('symple_divider_shortcode') ) {
	function symple_divider_shortcode( $atts ) {
		extract( shortcode_atts( array(
			'margin_top' => '10px',
			'margin_bottom' => '24px',
			'class' => '',
		  ),
		  $atts ) );
		$style_attr = '';
		if ( $margin_top && $margin_bottom ) {  
			$style_attr = 'style="margin-top: '. $margin_top .';margin-bottom: '. $margin_bottom .';"';
		} elseif( $margin_bottom ) {
			$style_attr = 'style="margin-bottom: '. $margin_bottom .';"';
		} elseif ( $margin_top ) {
			$style_attr = 'style="margin-top: '. $margin_top .';"';
		} else {
			$style_attr = NULL;
		}
	 return '<hr class="symple-divider '. $class .'" '.$style_attr.' />';
	}
	add_shortcode( 'divider', 'symple_divider_shortcode' );
}