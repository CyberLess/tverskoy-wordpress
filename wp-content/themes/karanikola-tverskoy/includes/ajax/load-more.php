<?php
add_action( 'wp_ajax_nopriv_load_more', 'call_load_more' );
add_action( 'wp_ajax_load_more', 'call_load_more' );

function call_load_more(){
	$taxonomies = $_POST['taxonomies'];
	$type = $_POST['type'] ?? "post";
	$page = $_POST['page'] ?? 1;
	$result = [
		"list" => [],
		"total_pages" => 0
	];
	$request = [
		"post_type" => $type,
		'paged' => $page,
	];

	if (!empty($taxonomies)) {
		$request['tax_query'] = [];
		foreach($taxonomies as $name => $value) {
			array_push($request['tax_query'], [
				'taxonomy' => $name,
				'field' => 'id',
				'terms' => $value,
			]);
		}
	}

	$query = new WP_Query;
	$posts = $query->query($request);
	$result['total_pages'] = $query->max_num_pages;

	if ($posts) {
		foreach ($posts as $post) {
			ob_start();
			get_template_part("/template-parts/item-{$type}", null, [
				'post' => $post
			]);
			$template = "<li>" . trim(ob_get_clean()) . "</li>";
			array_push($result['list'], $template);
		}
	}

	wp_send_json($result);
}
