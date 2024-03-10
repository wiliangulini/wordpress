<?php

function wg_theme_styles() {

  wp_enqueue_script("fontawesome", "https://use.fontawesome.com/releases/v6.3.0/js/all.js");

  wp_enqueue_style("googlelora", "https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic");
  
  wp_enqueue_style("googleopensans", "https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800");

  wp_enqueue_style("bootstrap", get_template_directory_uri()."/css/styles.css");
  


  wp_enqueue_script("bootstrap", "https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js");

  wp_enqueue_script("themejs", get_template_directory_uri()."/js/scripts.js");
}

function wg_after_setup() {
  add_theme_support('title-tag');
  add_theme_support('custom-logo');
  add_theme_support('post-thumbnails');

  register_nav_menu("primary", __('Primary Menu', 'segundotema'));

}