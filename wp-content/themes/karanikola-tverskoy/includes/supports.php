<?php

if ( function_exists( 'add_theme_support' ) ) {
	add_theme_support( 'post-thumbnails' );
}

if ( function_exists( 'add_image_size' ) ) {
	add_image_size( 'hd', 1920, 9999 );
}

register_nav_menus([
	'main' => 'Main Menu',
	'footer_left' => 'Footer Left',
	'footer_right' => 'Footer Right',
]);
