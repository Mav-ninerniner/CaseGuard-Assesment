<?php   

function load_css(){
  wp_register_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), false, 'all');
  wp_enqueue_style('bootstrap');
}
add_action('wp_enqueue_scripts', 'load_css');

function load_js(){

  wp_enqueue_script('jquery');
  wp_register_script('bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', 'jquery', false, true);
  wp_enqueue_script('bootstrap');
}
add_action('wp_enqueue_scripts', 'load_js');

function custom_theme_enqueue_styles() {
  // Enqueue the main stylesheet
  wp_enqueue_style('main-stylesheet', get_stylesheet_uri());

  // Enqueue jQuery for smooth scroll
  wp_enqueue_script('jquery');
}
add_action('wp_enqueue_scripts', 'custom_theme_enqueue_styles');

?>