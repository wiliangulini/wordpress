<?php
// Includes
require get_template_directory() . '/include/setup.php';

// Hooks
add_action('wp_enqueue_scripts', 'wg_theme_styles');
add_action('after_setup_theme', 'wg_after_setup');
add_action('widgets_init', 'wg_widgets');