<?php /* Template Name: Новости */ ?>
<?php
get_header();
global $post;
$banner = get_field('banner', $post->ID);
?>
<main class="part-main-content">
	<?php get_template_part('/template-parts/section-news-catalog', null, [
		'title' => $post->post_title,
		'banner' => $banner,
		'query' => [
			'post_type' => 'post',
		]
	]); ?>
</main>
<?php
get_footer();
?>
