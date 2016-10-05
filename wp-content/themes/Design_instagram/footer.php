		<footer id="page-footer">
		<div class="top-footer">
		<div class="container">
		<div class="row">
		<div id="left-field" class="col-md-4">
		<h3>Mediahelp Sverige AB</h3>
		<?php dynamic_sidebar( 'footer_left' ); ?> 
			
		</div>
		<div id="middle-field" class="col-md-4">
		<h3>Postadress</h3>
		<?php dynamic_sidebar( 'footer_center' ); ?> 
			
		</div>
		<div id="right-field" class="col-md-4 map">
		<?php dynamic_sidebar( 'footer_right' ); ?> 
		<!--<i class="fa fa-facebook-official" aria-hidden="true"></i>-->
		</div>
		</div>
							</div>

		</div>

		<div class="bot-footer">

			<p class="footer-copyright">Copyright &copy; <?= date('Y') ?> <?php bloginfo('name') ?></p>

			</div>

		</footer>
		    <script>
console.log('first')

    </script>
    <script type="text/javascript">
    	console.log('footer')
    </script>
    <script src="https://npmcdn.com/masonry-layout@4.1/dist/masonry.pkgd.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_url');?>/src/js/script.js"></script>
		<?php wp_footer() ?>


		<script type="text/javascript">
		
		</script>
	</body>
	</div>
</html>
