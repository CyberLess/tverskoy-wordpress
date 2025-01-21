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

	if ( is_page_template( 'template-pages/index.php' ) ) {
		wp_enqueue_script( 'index-scripts', ASSETS . '/scripts/index.pug.js', null, null, false );
		// wp_enqueue_script( 'footer-scripts', ASSETS . '/scripts/footer.js', null, null, false );
		// wp_enqueue_script( 'events-scripts', ASSETS . '/scripts/events.js', null, null, false );
		// wp_enqueue_script( 'news-scripts', ASSETS . '/scripts/news.js', null, null, false );
	}

	if ( is_page_template( 'template-pages/contacts.php' ) ) {
		wp_enqueue_script( 'contacts-scripts', ASSETS . '/scripts/contacts.pug.js', null, null, false );
	}
	if ( is_page_template( 'template-pages/events.php' ) ) {
		wp_enqueue_script( 'events-catalog-scripts', ASSETS . '/scripts/events-catalog.pug.js', null, null, false );
	}
	if ( is_page_template( 'template-pages/catalog-rent.php' ) ) {
		wp_enqueue_script( 'products-catalog-rent-scripts', ASSETS . '/scripts/products-catalog-rent.pug.js', null, null, false );
	}
	if ( is_page_template( 'template-pages/catalog.php' ) ) {
		wp_enqueue_script( 'products-catalog-scripts', ASSETS . '/scripts/products-catalog.pug.js', null, null, false );
	}
	if ( is_page_template( 'template-pages/news.php' ) ) {
		wp_enqueue_script( 'news-catalog-scripts', ASSETS . '/scripts/news-catalog.pug.js', null, null, false );
	}
	if ( is_singular( 'post' ) ) {
		wp_enqueue_script( 'post-scripts', ASSETS . '/scripts/news-single.pug.js', null, null, true );
	}
}

add_action('wp_enqueue_scripts', 'add_theme_resources');
