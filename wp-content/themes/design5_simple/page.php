<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other 'pages' on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>

 <section class="banner">
    	<div class="container">
    		<!--<div class="cntctimg"><?php  $image = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full' ); ?>           						
    				<img src="<?php echo $image[0]; ?>" alt="" /></div>-->
    	</div>
    </section>
	
	<section class="container">
	    <div class="content">
	    	<div class="row">
	    		<?php  while (have_posts() ) : the_post(); ?>
	    		<div class="col-sm-12">
	    			<!--<h2 class="sub_header"><?php the_title();?></h2>-->
	    			<div class="text_about">
	    			        <?php the_content(); ?>
	    			</div>
	    		</div>
	    		<?php endwhile; ?>
	    	</div>	
	    </div>
	</section>

<?php
//get_sidebar();
get_footer();
