<?php
/**
 * Template Name: Hitta Hit Page
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
			<h1 class="entry-title"><?php echo get_the_title('10'); ?></h1>
			
	    	<div class="row contact_content">
	    		<div class="col-sm-4">
	    			<?php query_posts('page_id=10'); ?>
					<?php while (have_posts()) : the_post(); ?>	
						<?php the_content(); ?>
					<?php endwhile; ?>
	    		</div>
	    		<div class="col-sm-8">
					<?php 
						$location = get_field('google_map');
						
						if( !empty($location) ):
						?>
						<div class="acf-map">
							<div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
						</div>
					<?php endif; ?>
	    		</div>
	    	</div>
	    </div>
	    <!--banner btm end-->
	
	</div>
	<!--banner btm part end-->
	



<?php
get_footer();
