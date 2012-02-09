<!DOCTYPE html>
<html>
<head>

	<title><?php if( is_front_page() ) echo esc_attr( get_bloginfo( 'title' ) ) . " - " . esc_attr( get_bloginfo( 'description' ) ); else wp_title(); ?></title>
	
	<link rel="stylesheet" type="text/css" charset="utf-8" media="screen,projection" href="<?php echo get_stylesheet_uri(); ?>">

	<link rel="alternate" type="application/rss+xml" title="<?php esc_attr( bloginfo( 'title' ) ); ?> <?php _e( 'RSS Feed', 'timelaph' ); ?>" href="<?php upfw_rss(); ?>" />

	<?php wp_head(); ?>

</head>
<body>