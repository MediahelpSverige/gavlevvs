<?php

/*
Template Name: Search Page
*/ 

get_header();
?>
<section class="section-white">
<div class="container-wrap">
	<div class="container" <?php get_search_form(); ?>>

	<?php if ( have_posts() ) : ?>
   <!-- HTML content appropriate for results found goes here -->
   <?php while ( have_posts() ) : the_post(); ?>
     <?php the_content(); ?>
   <?php endwhile; ?>
<?php else : ?>
   <!-- HTML content appropriate for results not found goes here -->
<?php endif; ?>

	</div>
	</div>
</section>
<?php get_footer(); ?>