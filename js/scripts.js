/*
Main Scripts File


This file should contain any js scripts you want to add to the site.
Instead of calling it in the header or throwing it inside wp_head()
this file will be called automatically in the footer so as not to
slow the page load.

*/



// MAIN FUNCTIONS WRAPPER -----------------------------
// Fires on document ready
// Inside of this function, $() will work as an alias for jQuery()
// and other libraries also using $ will not be accessible under this shortcut
// See jQuery noConflict Wrapers
// http://codex.wordpress.org/Function_Reference/wp_enqueue_script
jQuery(document).ready(function($) {


  // Responsive Scripts Skeleton --------------------------------------------
  /* getting viewport width */
  var responsive_viewport = $(window).width();

  /* if is below 481px */
  if (responsive_viewport < 481) {

  } /* end smallest screen */

  /* if is larger than 481px */
  if (responsive_viewport > 481) {

  } /* end larger than 481px */

  /* if is above or equal to 768px */
  if (responsive_viewport >= 768) {

  /* load gravatars */
  $('.comment img[data-gravatar]').each(function(){
      $(this).attr('src',$(this).attr('data-gravatar'));
  });

  }

  /* off the bat large screen actions */
  if (responsive_viewport > 1030) {

  }



  // Initialize FitVids --------------------------------------------
  // Target your .container, .wrapper, .post, etc.
  $(".container").fitVids();


  // add all your scripts here




});




// OUTSIDE DOCUMENT READY SCRIPTS -----------------------------
// Lost of copypasta stuff here

// IE8 ployfill for GetComputed Style (for Responsive Script below)
if (!window.getComputedStyle) {
    window.getComputedStyle = function(el, pseudo) {
        this.el = el;
        this.getPropertyValue = function(prop) {
            var re = /(\-([a-z]){1})/g;
            if (prop == 'float') prop = 'styleFloat';
            if (re.test(prop)) {
                prop = prop.replace(re, function () {
                    return arguments[2].toUpperCase();
                });
            }
            return el.currentStyle[prop] ? el.currentStyle[prop] : null;
        }
        return this;
    }
}



/*! A fix for the iOS orientationchange zoom bug.
 Script by @scottjehl, rebound by @wilto.
 MIT License.
*/
(function(w){
	// This fix addresses an iOS bug, so return early if the UA claims it's something else.
	if( !( /iPhone|iPad|iPod/.test( navigator.platform ) && navigator.userAgent.indexOf( "AppleWebKit" ) > -1 ) ){ return; }
    var doc = w.document;
    if( !doc.querySelector ){ return; }
    var meta = doc.querySelector( "meta[name=viewport]" ),
        initialContent = meta && meta.getAttribute( "content" ),
        disabledZoom = initialContent + ",maximum-scale=1",
        enabledZoom = initialContent + ",maximum-scale=10",
        enabled = true,
		x, y, z, aig;
    if( !meta ){ return; }
    function restoreZoom(){
        meta.setAttribute( "content", enabledZoom );
        enabled = true; }
    function disableZoom(){
        meta.setAttribute( "content", disabledZoom );
        enabled = false; }
    function checkTilt( e ){
		aig = e.accelerationIncludingGravity;
		x = Math.abs( aig.x );
		y = Math.abs( aig.y );
		z = Math.abs( aig.z );
		// If portrait orientation and in one of the danger zones
        if( !w.orientation && ( x > 7 || ( ( z > 6 && y < 8 || z < 8 && y > 6 ) && x > 5 ) ) ){
			if( enabled ){ disableZoom(); } }
		else if( !enabled ){ restoreZoom(); } }
	w.addEventListener( "orientationchange", restoreZoom, false );
	w.addEventListener( "devicemotion", checkTilt, false );
})( this );


