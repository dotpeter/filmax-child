<?php
/**
 * Child-Theme functions and definitions
 *
 * @package filmax-child
 */

/**
 * Enqueue styles and scripts.
 *
 * @return void
 */
function filmax_child_scripts() {
	$the_theme     = wp_get_theme();
	$theme_version = $the_theme->get( 'Version' );

	wp_enqueue_style( 'filmax-parent-style', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'filmax-child-style', get_stylesheet_uri(), array(), $theme_version );
	wp_enqueue_style( 'irreversivel-style', get_stylesheet_uri() . '/dist/css/main.css', array(), $theme_version );
}

add_action( 'wp_enqueue_scripts', 'filmax_child_scripts' );

//require_once get_theme_file_path( 'inc/theme-admin.php' );
