<?php 
/*template name: kontakt*/

get_header();
?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div class="page-wrapper">

<section id="kontakt">

<div class="map-banner banner">
<div class="overlay-title-banner">

<h1><?php the_title();?></h1>
</div>
	<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d32053.86147906547!2d17.694372!3d59.859663!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x691af148fefd86d8!2sMediahelp+Sverige+AB!5e0!3m2!1ssv!2sse!4v1474463715260" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>

<div class="container">



<div class="col-md-8 col-sm-8">


<?php $args = array('post_type' => 'worker'); ?>


<?php $the_query = new WP_Query( $args ); 

if ( $the_query->have_posts() ) { ?>

<div class="worker-wrap">

<?php while ( $the_query->have_posts() ) { ?>


	<?php $the_query->the_post(); ?>



	
	<div class="worker">

<div class="kont-image" style="background-image:url('<?php the_post_thumbnail_url();?>')"></div>

			<h3><?php the_title();?></h3>
			<strong><?php the_field('titel'); ?></strong>
			<div class="phone"><i class="fa fa-phone"></i><span><?php the_field('telefon');?></span><div class="clearfix"></div></div>
			<div class="email"><i class="fa fa-envelope-o"></i><a href="mailto:<?php the_field('email'); ?>"><?php the_field('email');?></a><div class="clearfix"></div></div>
		<div class="clearfix"></div>

	</div>


	<?php }


	wp_reset_postdata();
?>
</div>
<?php 
	}else{

		//no posts

		} ?>



</div>
 <div class="col-md-4 col-sm-4">

<div class="box-wrap">

<h3 class="title-border">Mediahelp Sverige AB</h3>
<h4>E-post</h4>
<a href="mailto:info@mediahelp.se">info@mediahel.se</a>
<h4>Uppsala</h4>
<p>Axel Johanssonsgatan 4-6</p>
<p>Telefon: 018-490 6390</p>
<h4>HITTA HIT</h4>
<p>Våra lokaler ligger i Kristallen, nära södra avfarten från E4:an, i Uppsala. </p>
</div>
</div>

			
</section>

</div>

	<?php endwhile; else : ?>
	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>

<?php 

get_footer();

?>