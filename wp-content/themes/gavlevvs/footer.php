<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>

	<footer class="footer">
		<div class="container">
			<div class="copy"><?php dynamic_sidebar('sidebar-3'); ?></div>
		</div>
	</footer>
	<?php wp_footer(); ?>
</body>
</html>