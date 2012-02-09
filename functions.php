<?php

// Add UpThemes Framework
require_once('admin/functions.php');

function theme_init(){
	
	wp_enqueue_script( 'jquery.infieldlabel', get_bloginfo('template_url') . "/js/jquery.infieldlabel.js", array("jquery") );
	wp_enqueue_script( 'global', get_bloginfo('template_url') . "/js/global.js", array("jquery.infieldlabel") );
	
}

add_action('after_setup_theme','theme_init');

function custom_styles(){

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


</style>

<?php

}

add_action('wp_head','custom_styles');

?>