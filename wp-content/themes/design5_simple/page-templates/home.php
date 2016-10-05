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
    			<?php query_posts( 'cat=4&showposts=-1' );?>
    			<?php while ( have_posts() ) : the_post(); ?>
    			<div class="item">
    			<?php  $image = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full' ); ?>           						
    				<img src="<?php echo $image[0]; ?>" alt="" />
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
	    		<?php $event_query = new WP_Query(array('post_type' => 'page','post_parent'  => 6, 'posts_per_page' => '-1','order'=> 'DESC')); 
                  while ( $event_query->have_posts() ) : $event_query->the_post(); ?>
	    		<div class="col-sm-4 col-md-4">
	    			<div class="imgWrapOuter">
		    			<div class="imgWrap"><?php  $image = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full' ); ?>           						
    				<img src="<?php echo $image[0]; ?>" alt="" /></div>
	    			</div>
	    			<div class="text">
	    				<h3><?php the_title(); ?></h3>
				    	<p><?php echo wp_trim_words(get_the_content(),14,'.')?></p>
				    	<div class="blog-btn-area-sm"><a href="<?php the_permalink(); ?>" class="blog-btn-sm">Läs mer</a></div>
	    			</div>
	    			
	    		</div>
	    		<?php endwhile; ?>
	    	</div>
	    	
	    </div>
	</section>
<?php
//get_sidebar();
get_footer();
