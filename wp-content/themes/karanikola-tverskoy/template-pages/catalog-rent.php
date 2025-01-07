<?php /* Template Name: Каталог Помещений */ ?>
<?php
get_header();
// global $post;
// $post_type = get_field('post_type', $post->ID);
?>
<main class="part-main-content part-main-content part-main-content_overflow-auto">
	<?php get_template_part('/template-parts/section-products-catalog', null, [
		'title' => $post->post_title,
		'query' => [
			'post_type' => 'premises',
		]
	]); ?>
</main>
<?php
get_footer();
?>
