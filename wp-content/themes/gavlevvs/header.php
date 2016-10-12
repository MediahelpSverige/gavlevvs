<?php
/**
 * The Header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="/favicon.ico" type="<?php bloginfo('template_directory'); ?>/image/x-icon">
	<link rel="icon" href="<?php bloginfo('template_directory'); ?>/images/favicon.ico" type="<?php bloginfo('template_directory'); ?>/image/x-icon">

    <title><?php wp_title( '|', true, 'right' ); ?></title>

    <!-- Bootstrap core CSS -->
    <link href="<?php bloginfo('template_directory'); ?>/css/bootstrap.css" rel="stylesheet">
    <link href="<?php bloginfo('template_directory'); ?>/css/owl.carousel.css" rel="stylesheet">
    <link href="<?php bloginfo('template_directory'); ?>/css/countrySelect.css" rel="stylesheet">
    <link href="<?php bloginfo('template_directory'); ?>/css/fonts.css" rel="stylesheet">
    <link href="<?php bloginfo('template_directory'); ?>/css/developer.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="<?php bloginfo('template_directory'); ?>/css/jquery.fancybox.css" rel="stylesheet">
    <link href="<?php bloginfo('template_directory'); ?>/css/custom.css" rel="stylesheet">
    <link href="<?php bloginfo('template_directory'); ?>/css/responsive.css" rel="stylesheet">
	
	
	<!-- Bootstrap core JavaScript-->
    <script src="<?php bloginfo('template_directory'); ?>/js/jquery-1.9.1.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/bootstrap.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/Placeholders.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/owl.carousel.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/countrySelect.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/jquery.fancybox.pack.js"></script>    
    <script src="<?php bloginfo('template_directory'); ?>/js/custom.js"></script>    

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <script> var ISOLDIE = false; </script>
	<!--[if lt IE 9]>
	     <script> var ISOLDIE = true; </script>
	<![endif]-->
	<script>
	     if(ISOLDIE) {
	          alert("Your browser currently does not support this feature. Please upgrade.");
	          window.location = 'http://www.microsoft.com/en-us/download/internet-explorer-9-details.aspx';
	     }	
	</script>
    
        <?php wp_head(); ?>
  </head>

  <body>
	
	<header class="header">
		<div class="container">
			<?php if ( get_header_image() ) : ?>
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="navbar-brand"><img src="<?php header_image(); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"></a>
			<?php endif; ?>
			<div class="headerRight">
				<!-- <div class="phnTxt">Ring för mer info!</div>
				<div class="phnNo">0173-30200</div> -->
				<?php dynamic_sidebar('sidebar-4'); ?>
			</div>
		</div>
	    <div class="container">
	      <div class="navbar navbar-inverse" role="navigation">
	        <div class="navbar-header">
	          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
	            <span class="sr-only">Toggle navigation</span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	          </button>
	        </div>
	        <div class="collapse navbar-collapse">
	          <!-- <ul class="nav navbar-nav">
	            <li class="active"><a href="#">Hem</a></li>
	            <li><a href="#">Om Elfcon</a></li>
	            <li><a href="#">Besiktning</a></li>
	            <li><a href="#">Forsaljning</a></li>
	            <li><a href="#">Tankar</a></li>
	            <li><a href="#">Reparation</a></li>
	            <li><a href="#">Kontakta Oss</a></li>
	          </ul> -->
	          <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav navbar-nav', 'menu_id' => 'primary-menu' ) ); ?>
	        </div><!--/.nav-collapse -->
	        
	      </div>
	    </div>
    </header>

