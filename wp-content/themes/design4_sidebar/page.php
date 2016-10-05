<?php
get_header();
?>
<article>
<div class="container">
<div class="row">
<div class="col-md-3 col-sm-3" id="sidopanel">
	<div class="logga">
		<?php the_custom_logo(); ?>
	</div>
		<div class="search">
			<?php get_search_form(); ?>
	</div>
	<div class="menu">
<?php wp_nav_menu( array( 'theme_location' => 'side_menu', 'menu_class' => 'nav-side', 'menu_class' => 'main_nav', 'container_class' => 'side-menu-container') ); ?>
	</div>
	<div class="social">
	<i class="fa fa-facebook-official" aria-hidden="true"></i>
	<i class="fa fa-instagram" aria-hidden="true"></i>
	<i class="fa fa-twitter-square" aria-hidden="true"></i>
	<i class="fa fa-search" aria-hidden="true"></i>	
	</div>
	<!--
	<div class="partners">

<div class="partner"><img src="http://localhost:8080/design/wp-content/uploads/2016/09/partner_logo4.png" alt=""></div>
<div class="partner"><img src="http://localhost:8080/design/wp-content/uploads/2016/09/intersport.jpg" alt=""></div>
<div class="partner"><img src="http://localhost:8080/design/wp-content/uploads/2016/09/partner_logo3.png" alt=""></div>
<div class="partner"><img src="http://localhost:8080/design/wp-content/uploads/2016/09/logo_gotalands.png" alt=""></div>
<div class="partner"><img src="http://localhost:8080/design/wp-content/uploads/2016/09/engstrom.png" alt=""></div>
</div>-->
</div>
<div class="col-md-9 col-sm-9" id="content">
<div class="banner" style="background-image:url('http://localhost:8080/design/wp-content/uploads/2016/09/AdobeStock_40515377.jpeg');">
<div class="text">
	<?php if( have_posts()){

		while (have_posts()) {

			the_post();

			the_content();
			# code...

			
		}



	}?>
</div>
<div class="blurarea">
<div class="blurcontainer">
<div class="blur-bg"></div>

</div>
</div>
</div>



</div>


</div>
</article>



<?php get_footer(); ?>

