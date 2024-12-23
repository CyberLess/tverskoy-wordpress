<?php
get_header();
$category = get_queried_object();
$banner = get_field('banner', "term_{$category->term_id}");
?>
<main class="part-main-content">
	<?php get_template_part('/template-parts/section-news-catalog', null, [
		'title' => $category->name,
		'banner' => $banner,
		'query' => [
			'post_type' => 'post',
			"tax" => [
				[
					'taxonomy' => 'category',
					'field' => 'id',
					'terms' => $category->term_id,
				]
			]
		]
	]); ?>
</main>
<?php
get_footer();
?>
