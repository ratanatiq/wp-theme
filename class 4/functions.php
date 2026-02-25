<?php
/*
* My Theme Function
*/
// Theme Title
add_theme_support('title-tag');

// Theme CSS and jQuery File calling
function anzmlabs_css_js(){
  wp_enqueue_style('anzmlabs-design', get_stylesheet_uri());
  wp_register_style('bootstrap', get_template_directory_uri().'/css/bootstrap.min.css', array(), '5.3.8', 'all');
  wp_register_style('design', get_template_directory_uri().'/css/design.css', array(), '1.0.0', 'all');
  wp_enqueue_style('bootstrap');
  wp_enqueue_style('design');


  //jQuery
  wp_enqueue_script('jquery');
  wp_enqueue_script('bootstrap', get_template_directory_uri().'/js/bootstrap.min.js', array(), '5.3.8', 'true' );
  wp_enqueue_script('main', get_template_directory_uri().'/js/main.js', array(), '1.0.0', 'true' );

}
add_action('wp_enqueue_scripts', 'anzmlabs_css_js');


?>