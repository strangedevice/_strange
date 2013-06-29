<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package _strange
 */
?>

	</div><!-- #main -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<?php do_action( '_strange_credits' ); ?>
                        <?php printf('Made with') ?>
			<a href="http://wordpress.org/" title="<?php esc_attr_e( 'A Semantic Personal Publishing Platform', '_strange' ); ?>" rel="generator"><?php printf( __( '%s', '_strange' ), 'WordPress' ); ?></a>
			<?php printf( __( 'by %1$s.', '_strange' ), '<a href="http://www.strangedevice.co.uk/" rel="designer">Strange Device</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
