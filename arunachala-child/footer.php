<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Arunachala
 */
?>

	</div><!-- #content -->

	<footer class="site-footer" role="contentinfo">
	<div class="container">
		<div class="site-info">
		<div class="row">
		<div class="col-md-4">
				78 John Street North<br>
				Stratford, Ontario, Canada<br>
				N5A 6K7
		</div>
		<div class="col-md-4">
				Toll Free: <a href="tel:1-877-472-1144">1-877-472-1144</a><br>
				Phone: <a href="tel:519-272-1144">519-272-1144</a>
		</div>
		<div class="col-md-4">
				Email: <a href="mailto:kayleigh.kowatsch@gmail.com">info@agincourtmanor.com</a> 
		</div>
		</div>
		<div class="row">
			<div id="cc">
				<?php do_action( 'arunachala_credits' ); ?>
				&copy; Copyright <?php echo date('Y'); ?> <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php bloginfo('name'); ?>"><?php bloginfo('name'); ?></a>
			</div>
		</div>
		</div><!-- .site-info -->
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>