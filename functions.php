<?php

// Add UpThemes Framework
include_once('options/options.php');
include_once('inc/theme-options.php');

/**
 * Theme setup functions
 */
function timelaph_setup_theme() {
	/*
	 * Enable translation
	 *
	 * Declare Theme textdomain and define
	 * location for translation files.
	 *
	 * Translations can be added to the /languages
	 * directory.
	 *
	 * @since	Holding Pattern 1.2
	 */
	load_theme_textdomain( 'timelaph', get_template_directory() . '/languages' );

	$args = array(
		'default-color' => '000000',
		'default-image' => get_template_directory_uri() . '/images/stars_bg.png',
	);
	add_theme_support( 'custom-background', $args );

}
add_action( 'after_setup_theme', 'timelaph_setup_theme' );

function timelaph_enqueue_scripts(){

	wp_enqueue_style( 'style-css', get_stylesheet_uri() );

}

add_action( 'wp_enqueue_scripts','timelaph_enqueue_scripts' );

?>