<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package matthias-tema
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<!-- <a href="<?php echo esc_url( __( 'https://wordpress.org/', 'matthias-tema' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'matthias-tema' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'matthias-tema' ), 'matthias-tema', '<a href="http://underscores.me/">Underscores.me</a>' );
				?> -->
				<p>&copy; 2020 Brain Traffic</p>
				<a href="#">Confab Conference</a>
				<a href="#">Button Conference</a>
				<a href="#">Content Strategy Podcast</a>
				<a href="#">Contact Us</a>
				<a href="#">Newsletter</a>
				<a href="#">Twitter</a>
				<a href="#">LinkedIn</a>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
