<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

	<!--banner part start-->
	<div class="banner_part">
		<!--slider part start-->
		<div id="demo" class="slider_outr">
	        <div id="owl-demo">
	        	<?php
		  			query_posts( 'cat=2&order=DESC&showposts=20' );
					while (have_posts()) : the_post();
		  		?>
	            <div class="item">
	            	<?php $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full');?>
					<img src="<?php echo $large_image_url[0]; ?>" alt="" />
	                <div class="carousel-caption">
	                	<div class="container">
	                   		<div class="captext wow pulse animated" data-wow-delay="0.9s" data-wow-offset="100">
	                            <span>
	                                <?php the_title(); ?>
	                                <img src="<?=get_post_meta( get_the_ID(), 'Icon', true ); ?>" alt="">
	                            </span>
	                            <?php $post_id = get_the_ID(); ?>
	                            <h2><?=get_post_meta( $post_id, 'Title1', true ); ?></h2>
	                            <h3><?=get_post_meta( $post_id, 'Title2', true ); ?></h3>
	                           	<h4 class="text-right telefon"><?=get_post_meta( $post_id, 'phone', true ); ?></h4>
	                         </div>
	                    </div>
	                </div>
	            </div>
	            
	            <?php endwhile; ?>
	           
	        </div>
		</div>
	    <!--slider part end-->
	</div>
	<!--banner part end-->
	
	<!--banner btm part start-->
	<div class="container">
		<!--banner btm part-->
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<div class="banner_btmpart">
	    	<div class="header">
	        	<span>
	            	<h2><?= get_the_title(35); ?></h2>
	            </span>
	        </div>
	        <?php $queried_post = get_post('35'); ?>
			<?= $queried_post->post_content;?>
	    </div>
	    <!--banner btm end-->

	    <?php endwhile; else : ?>
	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>
	    
	   <!-- slider btm part-->
	   <div class="inr_slider">
	   		<div id="demo2">
	            <div class="owl-theme2 wow fadeInUp animated" data-wow-delay="0.2s" data-wow-offset="100" id="owl-demo2">
	                <?php
			  			query_posts( 'cat=3&order=DESC' );
						while (have_posts()) : the_post();
			  		?>
	                <div class="item">
	                	<span class="saab_text">
	                    	<a href="<?php the_field('link'); ?>"><?php the_title(); ?></a>
	                        <br>
	                    	<!-- <img src="<?php //bloginfo('template_url'); ?>/images/saab_pic2.png" alt=""> -->
	                    </span>
	                	<?php $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full');?>
						<img src="<?php echo $large_image_url[0]; ?>" alt="" />
	                </div>
	                <?php endwhile; ?>
	                
	            </div>
	   		</div>
	   </div>
	   <!-- slider btm end-->
	</div>
	<!--banner btm part end-->

<?php get_footer(); ?>
