<!DOCTYPE html>
<html>
<head>

	<title><?php if( is_home() ) echo get_bloginfo("title") . " - " . get_bloginfo('description'); else wp_title(); ?></title>
	
	<link rel="stylesheet" type="text/css" charset="utf-8" media="screen,projection" href="<?php bloginfo('template_url') ?>/style.css">
		
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo("title"); ?> <?php _e("RSS Feed"); ?>" href="<?php rss(); ?>" />

	<?php wp_head(); ?>

</head>
<body>