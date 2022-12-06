<?php

function theme_styles() {
  wp_enqueue_style('default_stylesheet', get_stylesheet_uri());
  wp_enqueue_style('theme-stylesheet', get_template_directory_uri() .'/assets/css/bundle.css');
  wp_enqueue_style('leadlover-stylesheet', '//paginas.rocks/Content/capture/forms/formCustom.css');
}

add_action('wp_enqueue_scripts', 'theme_styles');

//add js scripts
function theme_scripts(){
  wp_enqueue_script('bundle', get_template_directory_uri() . '/assets/js/bundle.js', array(), null, true);
  wp_localize_script( 'bundle', 'wp', array( 'ajaxurl' => admin_url( 'admin-ajax.php' ), 'templatedir' => get_template_directory_uri() ) );

  //leadlovers forms
  if(is_front_page() || is_page('contato')){
    wp_enqueue_script('ll-page-capture', '//paginas.rocks/scripts/capture/capture.js', array(), null, true);
    wp_enqueue_script('ll-captcha', '/paginas.rocks/scripts/capture/form/async-form-captcha.js', array(), null, true);
  }
}

add_action('wp_enqueue_scripts', 'theme_scripts');

?>
