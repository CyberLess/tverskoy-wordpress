<?php

function add_theme_resources () {
    wp_enqueue_style( 'theme-style', get_stylesheet_uri());

    // wp_register_style('app-style', ASSETS . '/global.css');
    // wp_enqueue_style( 'app-style');

    wp_deregister_script( 'jquery' );

	// if ( is_page_template( 'template-pages/index.php' ) ) {
	// 	wp_enqueue_script( 'index-scripts', ASSETS . '/main.js', null, null, false );
	// }
	// if ( is_page_template( 'template-pages/about.php' ) ) {
	// 	wp_enqueue_script( 'about-scripts', ASSETS . '/about.js', null, null, true );
	// }
	// if ( is_page_template( 'template-pages/clients.php' ) ) {
	// 	wp_enqueue_script( 'clients-scripts', ASSETS . '/corporate.js', null, null, true );
	// }
	// if ( is_page_template( 'template-pages/news.php' ) || is_category() ) {
	// 	wp_enqueue_script( 'news-scripts', ASSETS . '/news.js', null, null, true );
	// }
	// if ( is_page_template( 'template-pages/programs.php' ) || is_tax('category-program')) {
	// 	wp_enqueue_script( 'programs-scripts', ASSETS . '/program.js', null, null, true );
	// }
	// if ( is_page_template( 'template-pages/school.php' ) ) {
	// 	wp_enqueue_script( 'school-scripts', ASSETS . '/school.js', null, null, true );
	// }
	// if ( is_singular( 'post' ) ) {
	// 	wp_enqueue_script( 'post-scripts', ASSETS . '/newsEl.js', null, null, true );
	// }
	// if ( is_page_template( 'template-pages/contacts.php' ) || is_page_template( 'template-pages/price.php' ) ) {
	// 	wp_enqueue_script( 'global-scripts', ASSETS . '/global.js', null, null, true );
	// }
	// wp_enqueue_script( 'main-scripts', ASSETS . '/global.js', null, null, true );
}

add_action('wp_enqueue_scripts', 'add_theme_resources');
