<?php

function milosz_theme_enqueue_scripts() {
    $theme_dir = get_stylesheet_directory_uri();

    $bootstrap_css = $theme_dir . '/node_modules/bootstrap/dist/css/bootstrap.min.css';
    $bootstrap_js = $theme_dir . '/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js';

    wp_enqueue_style('bootstrap-css', $bootstrap_css, array(), '5.3.0');

    wp_enqueue_script('bootstrap-js', $bootstrap_js, array(), '5.3.0', true);
}
add_action('wp_enqueue_scripts', 'milosz_theme_enqueue_scripts');

function custom_styles() {
    $theme_dir = get_stylesheet_directory_uri();
    wp_enqueue_style('custom-style', $theme_dir . '/assets/style/css/styles.min.css', array(), '1.0.0');
}
add_action('wp_enqueue_scripts', 'custom_styles');

function register_menus() {
    register_nav_menus([
        'main-menu' => __('Main page menu', 'mytheme'),
    ]);
}
add_action('after_setup_theme', 'register_menus');

function burger_menu_scripts() {
    $theme_dir = get_stylesheet_directory_uri();
    wp_enqueue_script('burger-menu', $theme_dir . '/assets/scripts/burger-menu.js', array(), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'burger_menu_scripts');