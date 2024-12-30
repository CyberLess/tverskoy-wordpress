<?php
add_filter('wpcf7_autop_or_not', '__return_false');
add_filter('script_loader_tag', "add_module_to_tag_script", 10, 3);
// add_filter('allowed_http_origins', 'add_allowed_origins');

// function add_allowed_origins($origins) {
//     $origins[] = 'http://localhost:3010';
//     return $origins;
// }

function add_module_to_tag_script($tag, $handle, $src){
	$modules = [
		'vendor-scripts',
		'main-scripts',
	];

	if ( !in_array($handle, $modules) ) {
		return $tag;
	}

	$tag = '<script type="module" crossorigin src="' . esc_url( $src ) . '"></script>';
	return $tag;
}
