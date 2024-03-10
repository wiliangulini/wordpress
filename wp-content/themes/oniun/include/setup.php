<?php
function bo_theme_styles() {
  wp_enqueue_style('bootstrap_css', get_template_directory_uri().'/assets/css/bootstrap.min.css');
  wp_enqueue_style('themeoniun_css', get_template_directory_uri().'/assets/css/theme_oniun.css');

  wp_enqueue_script('jquery_js', get_template_directory_uri().'/assets/js/jquery.min.js', array('jquery'), false , true);
  wp_enqueue_script('bootstrap_js', get_template_directory_uri().'/assets/js/bootstrap.bundle.min.js', array('jquery_js'), false, true);
  wp_enqueue_script('script_js', get_template_directory_uri().'/assets/js/script.js', array('jquery_js', 'bootstrap_js'), false, true);
}

function bo_after_setup() {
  add_theme_support("post-thumbnails");
  add_theme_support("title-tag");
  add_theme_support("custom-logo");

  register_nav_menu("primary", "Menu Primário");
  register_nav_menu("top", "Menu Superior");
}

function bo_widgets() {

}


?>