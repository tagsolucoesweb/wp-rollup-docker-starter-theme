<?php

function theme_styles() {
  wp_enqueue_style('default_stylesheet', get_stylesheet_uri());
  wp_enqueue_style('theme-stylesheet', get_template_directory_uri() .'/assets/css/bundle.css');
}

add_action('wp_enqueue_scripts', 'theme_styles');

//add js scripts
function theme_scripts(){
  wp_enqueue_script('bundle', get_template_directory_uri() . '/assets/js/bundle.js', array(), null, true);
  wp_localize_script( 'bundle', 'wp', array( 'ajaxurl' => admin_url( 'admin-ajax.php' ), 'templatedir' => get_template_directory_uri() ) );
}

add_action('wp_enqueue_scripts', 'theme_scripts');

?>
