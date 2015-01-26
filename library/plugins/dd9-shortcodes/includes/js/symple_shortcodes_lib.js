jQuery(function($){
	$(document).ready(function(){
		
		// Toggle
		$("h3.symple-toggle-trigger").click(function(){
			$(this).toggleClass("active").next().slideToggle("fast");
			return false; //Prevent the browser jump to the link anchor
		});
					
		// UI tabs
		$( ".symple-tabs" ).tabs();
		
		// UI accordion
		$(".symple-accordion").accordion({autoHeight: false});		

	}); // END doc ready
}); // END function ($)