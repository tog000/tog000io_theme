/**
 * navigation.js
 *
 * Handles toggling the navigation menu for small screens and enables tab
 * support for dropdown menus.
 */
( function() {

	var button = jQuery( '#menu-toggle-button' );
	var menu = jQuery( '#site-navigation' );

	var status = false;
	button.on("click",function(){
		status = !status;
		if(status){
			menu.slideDown();
		}else{
			menu.slideUp();
		}
	});

} )();
