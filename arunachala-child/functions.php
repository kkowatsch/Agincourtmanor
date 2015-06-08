<?php
/**
 * Enqueues child theme stylesheet, loading first the parent theme stylesheet.
 */
function arunachala_custom_enqueue_child_theme_styles() {
	wp_enqueue_style( 'parent-theme-css', get_template_directory_uri() . '/style.css' );
	
	wp_enqueue_style(
      'arunachala-child-style',
      get_stylesheet_directory_uri() . '/style.css',
      array( 'arunachala-child-bootstrap' )
    );
}
add_action( 'wp_enqueue_scripts', 'arunachala_custom_enqueue_child_theme_styles' );