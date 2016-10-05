<?php 

get_header();

?>


<section class="section-white">

	<div class="container">
	<div class="left-side-text">
	
<div class="main-text-wrap welcome">
		<?php 
		
			if ( have_posts() ) {
				while ( have_posts() ) {
					the_post(); 
					//
					// Post Content here
					the_content();
					//
				} // end while
			} // end if
?>
</div>
</div>
<div class="sidebar">
	<?php dynamic_sidebar('home_right_1');?>
</div>
	</div>
	</section>
	<div class="clearfix"></div>
<!--
	<section class="section-blue">
		<div class="container"><div class="main-text-wrap"><i class="fa fa-clock-o"></i><h2>Vårt kontor i Bålsta har öppet vardagar 08:30-16:30.</h2></div></div>
	</section>
-->
<?php get_footer(); ?>