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
	$itemTemplate = [
		"events" => "item-event",
		"post" => "item-news",
		"institution" => "item-product",
		"premises" => "item-rent"
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

	// var_dump([
	// 	"request" => $request,
	// 	"posts" => $posts
	// ]);

	if ($posts) {
		foreach ($posts as $post) {
			ob_start();
			get_template_part("/template-parts/{$itemTemplate[$type]}", null, [
				'item' => $post
			]);
			if ($type === 'events') {
				$template = "<div class='section-events-catalog__col'>" . trim(ob_get_clean()) . "</div>";
			} else if ($type === 'post') {
				$template = "<div class='section-news-catalog__col'>" . trim(ob_get_clean()) . "</div>";
			} else {
				$template = trim(ob_get_clean());
			}

			array_push($result['list'], $template);
		}
	}

	wp_send_json($result);
}
