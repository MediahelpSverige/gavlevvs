<?php
/**
 * Template Name: contactus Page
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>


<style type="text/css">



.acf-map {

	width: 100%;

	height: 400px;

	border: #ccc solid 1px;

	margin: 20px 0;

}



/* fixes potential theme css conflict */

.acf-map img {

   max-width: inherit !important;

}



</style>

<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>

<script type="text/javascript">

(function($) {



/*

*  new_map

*

*  This function will render a Google Map onto the selected jQuery element

*

*  @type	function

*  @date	8/11/2013

*  @since	4.3.0

*

*  @param	$el (jQuery element)

*  @return	n/a

*/



function new_map( $el ) {

	

	// var

	var $markers = $el.find('.marker');

	

	

	// vars

	var args = {

		zoom		: 16,

		center		: new google.maps.LatLng(0, 0),

		mapTypeId	: google.maps.MapTypeId.ROADMAP

	};

	

	

	// create map	        	

	var map = new google.maps.Map( $el[0], args);

	

	

	// add a markers reference

	map.markers = [];

	

	

	// add markers

	$markers.each(function(){

		

    	add_marker( $(this), map );

		

	});

	

	

	// center map

	center_map( map );

	

	

	// return

	return map;

	

}



/*

*  add_marker

*

*  This function will add a marker to the selected Google Map

*

*  @type	function

*  @date	8/11/2013

*  @since	4.3.0

*

*  @param	$marker (jQuery element)

*  @param	map (Google Map object)

*  @return	n/a

*/



function add_marker( $marker, map ) {



	// var

	var latlng = new google.maps.LatLng( $marker.attr('data-lat'), $marker.attr('data-lng') );



	// create marker

	var marker = new google.maps.Marker({

		position	: latlng,

		map			: map

	});



	// add to array

	map.markers.push( marker );



	// if marker contains HTML, add it to an infoWindow

	if( $marker.html() )

	{

		// create info window

		var infowindow = new google.maps.InfoWindow({

			content		: $marker.html()

		});



		// show info window when marker is clicked

		google.maps.event.addListener(marker, 'click', function() {



			infowindow.open( map, marker );



		});

	}



}



/*

*  center_map

*

*  This function will center the map, showing all markers attached to this map

*

*  @type	function

*  @date	8/11/2013

*  @since	4.3.0

*

*  @param	map (Google Map object)

*  @return	n/a

*/



function center_map( map ) {



	// vars

	var bounds = new google.maps.LatLngBounds();



	// loop through all markers and create bounds

	$.each( map.markers, function( i, marker ){



		var latlng = new google.maps.LatLng( marker.position.lat(), marker.position.lng() );



		bounds.extend( latlng );



	});



	// only 1 marker?

	if( map.markers.length == 1 )

	{

		// set center of map

	    map.setCenter( bounds.getCenter() );

	    map.setZoom( 16 );

	}

	else

	{

		// fit to bounds

		map.fitBounds( bounds );

	}



}



/*

*  document ready

*

*  This function will render each map when the document is ready (page has loaded)

*

*  @type	function

*  @date	8/11/2013

*  @since	5.0.0

*

*  @param	n/a

*  @return	n/a

*/

// global var

var map = null;



$(document).ready(function(){



	$('.acf-map').each(function(){



		// create map

		map = new_map( $(this) );



	});



});



})(jQuery);

</script>

    <section class="banner">
    	<div class="container">
    		<div class="cntctimg" style="width:100%;"><?php the_field('karta'); ?></div>
    	</div>
    </section>
	
	<section class="container">
	    <div class="content contact-page">
	    	<div class="row">
	    		<div class="col-sm-6 col-xs-12">
	    			<?php echo do_shortcode(the_field('kontaktformular')); ?>	    			
	    		</div>
	    		<div class="col-sm-6 col-xs-12">
					<?php the_field('contact-page'); ?>

	    			<?php /* <div class="row address_row">
	    				<div class="col-sm-6">
	    					<?php dynamic_sidebar('sidebar-5'); ?>
	    				</div>
	    				<div class="col-sm-6">
	    					<?php dynamic_sidebar('sidebar-6'); ?>
	    				</div>
	    			</div>
	    			<div class="row address_row">
	    				<div class="col-sm-6">
	    					<?php dynamic_sidebar('sidebar-7'); ?>
	    				</div>
	    				<div class="col-sm-6">
	    					<?php dynamic_sidebar('sidebar-8'); ?>
	    				</div>
	    			</div>
	    			<div class="row address_row">
	    				<div class="col-sm-6">
	    					<?php dynamic_sidebar('sidebar-9'); ?>
	    				</div>
	    				<div class="col-sm-6">
	    					<?php dynamic_sidebar('sidebar-10'); ?>
	    				</div>
	    			</div> */ ?>
	    		</div>
	    	</div>	
	    </div>
	</section>
<?php
//get_sidebar();
get_footer();
