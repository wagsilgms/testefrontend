<?php
// Includes
require get_template_directory().'/include/setup.php';

// Hooks
add_action('wp_enqueue_scripts', 'ws_theme_styles');
add_action('after_setup_theme', 'ws_after_setup');