<?php

function wg_theme_styles()
{
  wp_enqueue_style('theme_css', get_template_directory_uri() . '/assets/css/theme.css');

  wp_enqueue_script('theme_js', get_template_directory_uri() . '/assets/js/script.js', array('jquery'), '1.0', true);
}

function wg_after_setup()
{
  add_theme_support('menus');

  add_theme_support('post-thumbnails');

  add_theme_support('title-tag');

  add_theme_support('custom-logo');

  register_nav_menu('primary', __('Primary Menu'), 'primeirotema');
}

function wg_widgets()
{

  register_sidebar(array(
    'name' => __('Meu primeiro Sidebar', 'primeirotema'),
    'id' => 'wg_sidebar',
    'description' => __('Sidebar parra o tema', 'primeirotema'),

    'before_title' => '<h2 class="widget_title">',
    'after_title' => '</h2>',

    'before_widget' => '<div>',
    'after_widget' => '</div>'
  ));
}
