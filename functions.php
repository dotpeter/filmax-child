<?php

add_action( 'wp_enqueue_scripts', 'irrev_theme_enqueue_styles' );

/**
 * Enqueue styles and scripts.
 *
 * @return void
 */
function irrev_theme_enqueue_styles() {

	$the_theme     = wp_get_theme();
	$theme_version = $the_theme->get( 'Version' );

	wp_enqueue_style( 'filmax-child-style', get_stylesheet_uri() . '/dist/css/main.css', array(), $theme_version );

}

require_once get_theme_file_path( 'inc/theme-admin.php' );
