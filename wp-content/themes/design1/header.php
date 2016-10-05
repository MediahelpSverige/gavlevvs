<html>
<head>
	<meta charset="UTF-8">
		<title><?php bloginfo ( 'name' ); ?></title>
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport'/>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<script src="<?php bloginfo( 'template_url' ); ?>/js/jquery-1.12.0.min.js"></script>
<script src="<?php bloginfo( 'template_url' ); ?>/js/parallax.min.js"></script>
<!--Custom stylesheet-->
<link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/css/bootstrap.css">
<link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/style.css">


<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
<link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/css/custom.css">
<link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/css/responsive.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>


<!--OWL-->
<link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/css/owl.carousel.css">
<link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/css/owl.transitions.css">
<link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/css/owl.theme.css">
<link rel="icon" href="<?php bloginfo( 'template_url' ); ?>/img/icon.jpg">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<link href='https://fonts.googleapis.com/css?family=Ubuntu:300,400,700|Lora:400,700' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700|Cardo|Crimson+Text:400,400italic,700' rel='stylesheet' type='text/css'>

<script src="<?php bloginfo( 'template_url' ); ?>/js/owl.carousel.min.js"></script>
<script src="//use.edgefonts.net/passion-one:n4,n7,n9;neuton;source-sans-pro.js"></script>
<script type="text/javascript">
/*
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-36679993-1', 'auto');
  ga('require','displayfeatures');
  ga('send', 'pageview');
*/

</script>
<?php wp_head(); ?>
</head>
<body>
<!-- Google Tag Manager -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-KG2T2G"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-KG2T2G');</script>
<!-- End Google Tag Manager -->
<header>
	<div id="logo-wrap">
<div class="container">
<div class="top-header-logo">
<?php 
$custom_logo_id = get_theme_mod( 'custom_logo' );
$image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
 ?>
	<a href="<?php bloginfo('url'); ?>"><img src="<?php echo $image[0]; ?>"></a>
	</div>
	<div class="nav-menu"><?php wp_nav_menu( array( 'theme_location' => 'main_nav', 'menu_class' => 'nav-menu', 'menu_class' => 'site_nav', 'container_class' => 'menu-main-menu-container') ); ?></div>
	</div>
	<div style="clear:both;"></div>
		<div class="menu-toggle">
		<span class="stripe"></span>
		<span class="stripe"></span>
		<span class="stripe"></span>
	</div>
	</div>


<section class="banner" style="background-image: url('<?php the_post_thumbnail_url( 'full' ); ?>')">
<div class="overlay"></div>
<div class="container">
	<div class="header-logo">


</div>
</div>
</section>
</header>