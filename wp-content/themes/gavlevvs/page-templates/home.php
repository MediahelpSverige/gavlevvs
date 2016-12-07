<?php
/**
 * Template Name: Home Page
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>

 <section class="banner">
    	<div class="container">
    		<div class="mainSlider">
    			<?php query_posts( 'cat=3&showposts=-1' );?>
    			<?php while ( have_posts() ) : the_post(); ?>
    			<?php  $image = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full' ); ?>   
    			<div class="item" style="background-image:url('<?php echo $image[0]; ?>')">
        					
    			</div>
    			<?php endwhile;?>
    			<?php wp_reset_query() ?>
    		</div>
    	</div>
    </section>
	
	<section class="container">
	    <div class="content">
	    	<div class="row">
	    		<div class="fer">
	    		<?php while ( have_posts() ) : the_post(); ?>
	    		<?php the_content(); ?>
				<?php endwhile;?>
				<?php wp_reset_postdata(); ?>
	    		</div>	    		
	    	</div>
	    	
	    </div>
	</section>
<?php
//get_sidebar();
get_footer();
