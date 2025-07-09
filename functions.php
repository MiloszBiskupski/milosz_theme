<?php

function milosz_theme_enqueue_scripts() {
    $theme_dir = get_stylesheet_directory_uri();

    $bootstrap_css = $theme_dir . '/node_modules/bootstrap/dist/css/bootstrap.min.css';
    $bootstrap_js = $theme_dir . '/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js';

    wp_enqueue_style('bootstrap-css', $bootstrap_css, array(), '5.3.0');

    wp_enqueue_script('bootstrap-js', $bootstrap_js, array(), '5.3.0', true);
}
add_action('wp_enqueue_scripts', 'milosz_theme_enqueue_scripts');

function mytheme_register_menus() {
    register_nav_menus([
        'main-menu' => __('Main Menu', 'mytheme'),
    ]);
}
add_action('after_setup_theme', 'mytheme_register_menus');