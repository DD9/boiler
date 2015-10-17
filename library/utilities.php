<?php


/**
 * pr function.
 * 
 * @access public
 * @param mixed $input (default: null)
 * @param bool $exit (default: false)
 * @return void
 */
function pr($input = null, $exit = false, $classes = null){
	echo '<pre class="' . $classes . '">';
	print_r($input);
	echo '</pre>';
	if ($exit) exit;
}

