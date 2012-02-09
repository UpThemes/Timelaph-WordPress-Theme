<!DOCTYPE html>
<html>
<head>

	<title><?php wp_title(); ?></title>
	
	<link rel="stylesheet" type="text/css" charset="utf-8" media="screen,projection" href="<?php echo get_stylesheet_uri(); ?>">

	<link rel="alternate" type="application/rss+xml" title="<?php esc_attr( bloginfo( 'title' ) ); ?> <?php _e( 'RSS Feed', 'timelaph' ); ?>" href="<?php upfw_rss(); ?>" />

	<?php wp_head(); ?>

</head>
<body>