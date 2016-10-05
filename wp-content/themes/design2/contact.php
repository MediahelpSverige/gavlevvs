<?php
/**
 * Template Name: Contact Page
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header('contact'); ?>



	<!--banner part start-->
	<div class="banner_part_inner">
			<?php 

			$image = get_field('header_image');
			
			if( !empty($image) ): ?>
			
				<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
			
			<?php endif; ?>
	</div>
	<!--banner part end-->
	
	<!--banner btm part start-->
	<div class="container">
		<!--banner btm part-->
		<div class="banner_btmpart innr_page">
			<h1 class="entry-title"><?php echo get_the_title('12'); ?></h1>
			
	    	<div class="row contact_content">
	    		<div class="col-sm-8">
	    			<?php
			  			query_posts( 'cat=4&order=DESC' );
						while (have_posts()) : the_post();
			  		?>
					<div class="row profile_row">
						<div class="col-sm-4">
							<div class="pro_pic">
								<?php $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full');?>
								<img src="<?php echo $large_image_url[0]; ?>" alt="" />
							</div>
						</div>
						<div class="col-sm-8">
							<h3><?php the_title(); ?></h3>
							<?php the_content(); ?>
						</div>
					</div>
					<?php endwhile; ?>
	    		</div>
	    		<div class="col-sm-4">
	    			<?php echo do_shortcode('[contact-form-7 id="101" title="Namnlös"]'); ?>
	    		</div>
	    	</div>
	    	
	    </div>
	    <!--banner btm end-->
	
	</div>
	<!--banner btm part end-->
	



<?php
get_footer();
