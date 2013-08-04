<?php

$options = array(
  "logo" => array(
    "tab" => "general",
    "name" => "logo",
    "title" => "Logo Image",
    "description" => __( "Upload your image or select from the gallery.", "platform" ),
    "section" => "appearance",
    "since" => "1.0",
    "id" => "appearance",
    "type" => "image",
    "default" => get_stylesheet_directory_uri()."/images/logo.png"
  ),
  "body_text" => array(
    "tab" => "general",
    "name" => "body_text",
    "title" => "Body Text",
    "description" => __( "Enter the text you'd like to have displayed in the body of the page.", "platform" ),
    "section" => "text",
    "since" => "1.0",
    "id" => "text",
    "type" => "textarea",
    "default" => "Our app is currently undergoing heavy development and isn't quite ready for you just yet. Stay updated by following us on <a href='http://twitter.com/upthemes'>twitter</a>."
  ),
  "custom_form" => array(
    "tab" => "general",
    "name" => "custom_form",
    "title" => "Custom Embed Form HTML",
    "description" => __( "If you're using a third-party email subscription form, embed the HTML/CSS code here.", "platform" ),
    "section" => "text",
    "since" => "1.0",
    "id" => "text",
    "type" => "textarea"
  ),
);

$general = array(
	"name" => "general",
	"title" => __("General","platform"),
	'sections' => array(
    'appearance' => array(
    	'name' => 'appearance',
    	'title' => __( 'Appearance', 'personality' ),
    	'description' => __( 'Modify the visual appearance of the theme.','personality' )
    ),
    'text' => array(
    	'name' => 'text',
    	'title' => __( 'Text', 'personality' ),
    	'description' => __( 'Modify text parts displayed within the theme.','personality' )
    )
	)
);

register_theme_option_tab($general);

register_theme_options($options);