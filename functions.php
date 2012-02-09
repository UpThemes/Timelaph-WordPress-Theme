<?php

// Add UpThemes Framework
require_once('admin/admin.php');

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

	$locale = get_locale();
	$locale_file = get_template_directory() . "/languages/$locale.php";
	if ( is_readable( $locale_file ) ) {
		require_once( $locale_file );
	}
}
add_action( 'after_setup_theme', 'timelaph_setup_theme' );

function timelaph_enqueue_scripts(){
	
	wp_enqueue_script( 'jquery.infieldlabel', get_bloginfo('template_url') . "/js/jquery.infieldlabel.js", array("jquery") );
	wp_enqueue_script( 'global', get_bloginfo('template_url') . "/js/global.js", array("jquery.infieldlabel") );
	
}

add_action( 'wp_enqueue_scripts','timelaph_enqueue_scripts' );

function timelaph_custom_styles(){

	global $up_options;

	?>

<style type="text/css">

body{
	background: <?php echo $up_options->background_color; ?> url(<?php echo $up_options->background_image; ?>);
	<?php if ($up_options->background_position): ?> background-position: <?php echo $up_options->background_position; ?>; <?php endif; ?>
	<?php if ($up_options->background_repeat): ?> background-position: <?php echo $up_options->background_repeat; ?>; <?php endif; ?>
}

#container{
	width: <?php echo $up_options->page_width; ?>;
}

</style>

	<?php

}
add_action( 'wp_head','timelaph_custom_styles' );


/**
 * Filter wp_title
 */
function timelaph_filter_wp_title( $title ) {
	if( is_front_page() ) {
		$title = esc_attr( get_bloginfo( 'title' ) ) . " - " . esc_attr( get_bloginfo( 'description' ) );
	}
	return $title;
}
add_filter( 'wp_title', 'timelaph_filter_wp_title' );

?>