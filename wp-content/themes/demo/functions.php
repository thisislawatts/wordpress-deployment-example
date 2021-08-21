<?php 

add_action( 'wp_enqueue_scripts', 'demo_theme_load_scripts', 20 );

if ( ! function_exists( 'demo_theme_load_scripts' ) ) :
	/**
	 * Load CSS file.
	 */
	function demo_theme_load_scripts() {

		wp_enqueue_style( 'demo-theme-child-style', trailingslashit( get_stylesheet_directory_uri() ) . 'style.css', [] , $css_version );
	}
endif;