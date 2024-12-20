<?php /* Template Name: Мероприятия */ ?>
<?php
get_header();
global $post;
?>
<main class="part-main-content">
	<?php get_template_part('/template-parts/section-events-catalog', null, [
		'title' => $post->post_title,
		'query' => [
			'post_type' => 'events',
		]
	]); ?>
</main>
<?php
get_footer();
?>
