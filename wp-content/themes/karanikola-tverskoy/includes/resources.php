<?php

function add_theme_resources () {
    wp_enqueue_style( 'theme-style', get_stylesheet_uri());

	wp_register_style('font-style', ASSETS . '/styles/font.css');
    wp_enqueue_style( 'font-style');
    wp_register_style('vendor-style', ASSETS . '/styles/vendor.css');
    wp_enqueue_style( 'vendor-style');
    wp_register_style('app-style', ASSETS . '/styles/app.css');
    wp_enqueue_style( 'app-style');

    wp_deregister_script( 'jquery' );

	wp_enqueue_script( 'vendor-scripts', ASSETS . '/scripts/vendor2.js', null, null, true );
	wp_enqueue_script( 'main-scripts', ASSETS . '/scripts/index-page2.js', null, null, true );
}

add_action('wp_enqueue_scripts', 'add_theme_resources');
