<?php
add_action( 'wp_ajax_nopriv_load_program', 'call_load_program' );
add_action( 'wp_ajax_load_program', 'call_load_program' );

function call_load_program(){
	$id = $_POST['id'];
	$result = [
		"html" => ""
	];

	$post = get_post($id);

	if ($post) {
		ob_start();
		get_template_part("/template-parts/modal-program", null, [
			'post' => $post
		]);
		$template = trim(ob_get_clean());
		$result['html'] = $template;
	}

	wp_send_json($result);
}
