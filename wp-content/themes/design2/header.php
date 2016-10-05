<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->
	<script>(function(){document.documentElement.className='js'})();</script>
	<?php wp_head(); ?>
	<link rel="icon" href="<?php bloginfo('template_url'); ?>/images/favicon.ico" type="image/x-icon">
    <link rel="icon" type="image/png" href="<?php bloginfo('template_url'); ?>/images/favicon.png" /> 
	<link href="<?php bloginfo('template_url'); ?>/css/bootstrap.css" rel="stylesheet" type="text/css"/>
    <link href="<?php bloginfo('template_url'); ?>/css/style.css" rel="stylesheet" type="text/css" />
    <link href="<?php bloginfo('template_url'); ?>/css/owl.carousel.css" rel="stylesheet" type="text/css" />
    <link href="<?php bloginfo('template_url'); ?>/css/owl.theme.css" rel="stylesheet" type="text/css" />
    <link href="<?php bloginfo('template_url'); ?>/css/owl.transitions.css" rel="stylesheet" type="text/css" />
    <link href="<?php bloginfo('template_url'); ?>/css/animate.css" rel="stylesheet" type="text/css" />
    <link href="<?php bloginfo('template_url'); ?>/css/responsive.css" rel="stylesheet" type="text/css" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
    
    <script src="<?php bloginfo('template_url'); ?>/js/jquery-1.8.0.min.js"></script>    
	<script src="<?php bloginfo('template_url'); ?>/js/bootstrap.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/wow.min.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/owl.carousel.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
		  $("#owl-demo").owlCarousel({
		
		  navigation : true,
		  slideSpeed : 300,
		  paginationSpeed : 400,
		  singleItem : true,
		  transitionStyle : "fade",
		  });
		  
		  /////////////
		  wow.init();
		  
		  /////////////
		  //Sort random function
	      function random(owlSelector){
	        owlSelector.children().sort(function(){
	            return Math.round(Math.random()) - 0.5;
	        }).each(function(){
	          $(this).appendTo(owlSelector);
	        });
	      }
	
	      $("#owl-demo2").owlCarousel({
	        navigation: true,
	        navigationText: [
	        "<i class='icon-chevron-left icon-white'></i>",
	        "<i class='icon-chevron-right icon-white'></i>"
	        ],
	      });
		  
		});
	
		/////////////////////////////////
	
		$(window).scroll(function() {
			var scroll = $(window).scrollTop();
			
			if (scroll >= 75) {
				$(".header_part").addClass("addhd");
				$(".logo").addClass("addlogo");
				$(".header_menupart").addClass("scrollhd");
				}
			if (scroll <= 76) {
				$(".logo").removeClass("addlogo");
				$(".header_menupart").removeClass("scrollhd");
				$(".header_part").removeClass("addhd");
			}
		});
	
		/////////////////////////////////////////
			
		$(window).load(function() {
			$(".se-pre-con").fadeOut("slow");;
		});
			
	    wow = new WOW({
		      boxClass:     'wow',      // default
		      animateClass: 'animated', // default
		      offset:       0,          // default
		      mobile:       false,       // default
		      tablet:		false,
		      live:         true        // default
		    });
	    
    </script>
</head>

<body <?php body_class(); ?>>
<!--header part start-->
	<div class="header_part wow bounceInDown animated" data-wow-delay="0.1s" data-wow-offset="100">
		<div class="container">
	    	<div class="navbar navbar-default">
	            <div class="navbar-header">
	              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
	                <span class="icon-bar"></span>
	                <span class="icon-bar"></span>
	                <span class="icon-bar"></span>
	              </button>
	              <!--logo part start-->
	              <h1>						<?php 
$custom_logo_id = get_theme_mod( 'custom_logo' );
$image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
 ?>
	<a href="<?php bloginfo('url'); ?>"><img src="<?php echo $image[0]; ?>"></a></h1>
	              <!--logo part end-->
	            </div>
	           	<!-- nav part start-->
	           	<?php
		            wp_nav_menu( array(
		                'menu'              => 'primary',
		                'theme_location'    => 'primary',
		                'depth'             => 2,
		                'container'         => 'div',
		                'container_class'   => 'collapse navbar-collapse',
		        		'container_id'      => 'bs-example-navbar-collapse-1',
		                'menu_class'        => 'nav navbar-nav navbar-right',
		                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
		                'walker'            => new wp_bootstrap_navwalker())
		            );
		        ?>
	           	
	            <!-- nav part end-->
	          </div>
	    </div>
	</div>
	<!--header part end-->
