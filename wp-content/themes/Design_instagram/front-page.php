<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div class="page-wrapper">

		<section id="intro">
		<div class="banner-img">
			<img src="http://localhost:8080/design/wp-content/uploads/2016/09/banner_pic.png">
		</div>
				<!--<div class="stripes"></div>-->
			<div class="container">


			<div class="row">
				<div class="col-md-12" id="full-text">
				<h1 class="lr-border">Välkommen till oss!</h1>
				<p style="margin-bottom:100px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
				<?php the_field('first_text'); ?>
					<!--<p>Traktor & Maskin i Sörmland AB är ett privatägt företag som verkar inom de gröna näringarna. Vi verkar i Sörmland och är återförsäljare för Massey Ferguson som är ett av de världsledande företagen inom lantbrukssektorn. Vi genomsyras av en äkta vilja att ge god service och se nöjda kunder. Långsiktiga relationer med våra kunder är viktigt för oss.</p>-->
				</div>
			</div>


								<div class="col-md-8">



<h3 class="section-heading" style="width:60%;">Använd formuläret om du vill meddela oss något</h3>
<?php echo do_shortcode('[contact-form-7 id="81" title="Kontaktformulär 1"]');?>






				</div>

				<div class="col-md-4">
								<div class="fb-wrap">

			<h3 class="section-heading">Vi finns på Facebook</h3>
				<iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Ffacebook%2F&tabs=timeline&width=340&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=911661125591162" width="340" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
			</div>
				</div>

							<div class="row">
				<div class="col-md-12"  id="full-text">
				<?php the_field('last_text'); ?>

				<!--
					<p>Traktor & Maskin i Sörmland verkar i hela Sörmland med försäljning och service av traktorer, tröskor och jordbruksrelaterade produkter. Vårt mål är att bli ett framstående maskinbolag i Sörmland och Er partner genom god service, spetskompetens och ny teknik.</p>

					<strong>Har du några frågor och funderingar slå oss en signal på 0155-714 40 – Välkomna!</strong>-->
				</div>
			</div>


			</div>
		</section>
		<!--<section id="youtube">
			<iframe width="1900" height="1069" src="https://www.youtube.com/embed/WsDP93MyflE?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>-->
		</section>

		<div class="clearfix"></div>
	</div>

	<?php endwhile; else : ?>
	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>

<script type="text/javascript">
/*
jQuery(window).load(function ($) {

	console.log($(window).height());
	//$('.banner').height($(window).height() -123);


});
*/

console.log('footer');
var feed = new Instafeed({
        get: 'user',
        userId: 3127068056,

        accessToken: '3127068056.1677ed0.6dccf6aae5074bb08e9aef60f8227ca7',
        template: '<div class="insta grid-item"><a href="{{link}}"><div class="text"><small>{{caption}}</small></div><img src="{{image}}" /></a></div>',
        limit: 18,
        resolution: 'standard_resolution',

         after: function() {
         	console.log('done');
         	jQuery('#instafeed').append('<div class="clearfix"></div>');
         }
    });
    feed.run();
</script>

<?php get_footer();?>