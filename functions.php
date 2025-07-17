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

//ACF
function my_acf_block_render_callback( $block ) {
    
    $slug = str_replace('acf/', '', $block['name']);
    
    if( file_exists( get_theme_file_path("/template-parts/blocks/{$slug}.php") ) ) {
        include( get_theme_file_path("/template-parts/blocks/{$slug}.php") );
    }
}

add_action('acf/init', 'my_acf_init');
function my_acf_init() {
    
    // check function exists
    if( function_exists('acf_register_block') ) {
        
        // register a testimonial block
        acf_register_block(array(
            'name'              => 'hero-home-page',
            'title'             => __('Hero | Home Page'),
            'description'       => __('A custom hero block for the home page.'),
            'render_callback'   => 'my_acf_block_render_callback',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'hero', 'home' ),
        ));
    }
}