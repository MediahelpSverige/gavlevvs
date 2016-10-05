/**
 * This file adds some LIVE to the Theme Customizer live preview. To leverage
 * this, set your custom settings to 'postMessage' and then add your handling
 * here. Your javascript should grab settings from customizer controls, and 
 * then make any necessary changes to the page using jQuery.
 */
( function( $ ) {

	// Update the site title in real time...

	
	

	//Update site title color in real time...
	wp.customize( 'header_textcolor', function( value ) {
		value.bind( function( newval ) {
			$('#logo-wrap a').css('color', newval );
		} );
	} );

	//Update site background color...
	wp.customize( 'nav_backgroundColor', function( value ) {
		console.log('called');
		value.bind( function( newval ) {
			$('.bottom-header').css('background-color', newval );
		} );
	} );

		//Update site background color...
	wp.customize( 'boxColor', function( value ) {
		console.log('called');
		value.bind( function( newval ) {
			$('section.section-white.single').css('background-color', newval );
		} );
	} );

			//Update site background color...
	wp.customize( 'boxColor', function( value ) {
		console.log('called');
		value.bind( function( newval ) {
			$('.left-side-text').css('background-color', newval );
		} );
	} );

			//Update site background color...
	wp.customize( 'backgroundColor', function( value ) {
		console.log('called');
		value.bind( function( newval ) {
			$('body').css('background-color', newval );
		} );
	} );


			//Update site background color...
	wp.customize( 'header_backgroundColor', function( value ) {
		console.log('called');
		value.bind( function( newval ) {
			$('#logo-wrap').css('background-color', newval );
		} );
	} );


				//Update site background color...
	wp.customize( 'footer_backgroundColor', function( value ) {
		console.log('called');
		value.bind( function( newval ) {
			$('footer').css('background-color', newval );
		} );
	} );

					//Update site background color...
	wp.customize( 'sidebar_backgroundColor', function( value ) {
		console.log('called');
		value.bind( function( newval ) {
			$('.sidebar-wrapper').css('background-color', newval );
		} );
	} );


				//Update site background color...
	wp.customize( 'footer_textColor', function( value ) {
		console.log('called');
		value.bind( function( newval ) {
			$('footer').css('color', newval );
		} );
	} );

				//Update site background color...
	wp.customize( 'bot_footer_backgroundColor', function( value ) {
		console.log('called');
		value.bind( function( newval ) {
			$('.footer-bottom').css('background-color', newval );
		} );
	} );
	
	
	
} )( jQuery );