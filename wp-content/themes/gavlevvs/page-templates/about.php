<?php
/**
 * Template Name: about Page
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>

    <section class="banner">
    	<div class="container">
    		<div class="cntctimg"><?php  $image = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full' ); ?>           						
    				<img src="<?php echo $image[0]; ?>" alt="" /></div>
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

	    	<div class="row">
	    		<div class="col-md-12">
	    		<h2 class="page-title">Det här är vi:</h2>
                <?php $args = array('post_type' => 'worker', 'posts_per_page' => -1); ?>
                <?php $query = new WP_Query($args); ?>
                <?php while($query->have_posts()){ 
                    $query->the_post(); ?>

                    <div class="col-md-4 col-sm-4">

                    <img class="worker-img" src="<?php the_post_thumbnail_url('medium'); ?>">
                   <h4> <?php the_title(); ?></h4>
                    <?php the_content(); ?>

                    </div>
	    		</div>
	    	</div>
	    </div>
	</section>
<?php
//get_sidebar();
get_footer(); ?>