<?php
/*  Array Options:
   
   name (string)
   desc (string)
   id (string)
   type (string) - text, color, image, select, multiple, textarea, page, pages, category, categories
   value (string) - default value - replaced when custom value is entered - (text, color, select, textarea, page, category)
   options (array)
   attr (array) - any form field attributes
   url (string) - for image type only - defines the default image
    
*/

$options = array (

    array(  "name" => "Body Text",
            "desc" => "Enter the text you'd like to have displayed in the body of the page.",
            "id" => "body_text",
            "value" => __("Our app is currently undergoing heavy development and isn't quite ready for you just yet. Stay updated by following us on <a href='http://twitter.com/upthemes'>twitter</a>."),
            "type" => "textarea",
            "attr" => array("rows" => "8")),
            
    array(  "name" => "Show email subscribe form?",
            "desc" => "Do you want to show the email subscription form (must enter a value below for this to appear)?",
            "id" => "show_email_form",
            "type" => "select",
            "default_text" => "No",
            "options" => array(
            					"Yes" => "1")),

    array(  "name" => "Feedburner",
            "desc" => "Add your username to redirect RSS feeds to Feedburner",
            "id" => "feedburner",
            "type" => "text"),
            
    array(  "name" => "Show link to RSS?",
            "desc" => "Do you want to share the link to your RSS feed?",
            "id" => "show_rss",
            "type" => "select",
            "default_text" => "No",
            "options" => array(
            					"Yes" => "1"))
);

/* ------------ Do not edit below this line ----------- */

//Check if theme options set
global $default_check;
global $default_options;

if(!$default_check):
    foreach($options as $option):
        if($option['type'] != 'image'):
            $default_options[$option['id']] = $option['value'];
        else:
            $default_options[$option['id']] = $option['url'];
        endif;
    endforeach;
    $update_option = get_option('up_themes_'.UPTHEMES_SHORT_NAME);
    if(is_array($update_option)):
        $update_option = array_merge($update_option, $default_options);
        update_option('up_themes_'.UPTHEMES_SHORT_NAME, $update_option);
    else:
        update_option('up_themes_'.UPTHEMES_SHORT_NAME, $default_options);
    endif;
endif;

render_options($options);
?>