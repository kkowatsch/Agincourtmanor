<?php
/**
 * @package Arunachala
 */
?>


	<footer class="entry-meta">
		<?php if ( 'post' == get_post_type() && !is_home() ) : // Hide category and tag text for pages on Search and Homepage ?>
			<?php
				/* translators: used between list items, there is a space after the comma */
				$categories_list = get_the_category_list( __( ', ', 'arunachala' ) );
				if ( $categories_list && arunachala_categorized_blog() ) :
			?>
			<span class="cat-links">
				<?php printf( __( '%1$s', 'arunachala' ), $categories_list ); ?>
			</span>
			<?php endif; // End if categories ?>

			<?php
				/* translators: used between list items, there is a space after the comma */
				$tags_list = get_the_tag_list( '', __( ', ', 'arunachala' ) );
				if ( $tags_list ) :
			?>
			<span class="tags-links">
				<?php printf( __( '%1$s', 'arunachala' ), $tags_list ); ?>
			</span>
			<?php endif; // End if $tags_list ?>
		<?php endif; // End if 'post' == get_post_type() ?>
		
	</footer><!-- .entry-meta -->
</article><!-- #post-## -->