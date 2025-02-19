<?php /* Template Name: Партнерам */ ?>
<?php
get_header();
global $post;
$banner = get_field('banner', $post->ID);
?>
<main class="part-main-content">
	<?php get_template_part('/template-parts/section-partners', null, [
		'title' => $post->post_title,
		'banner' => $banner,
	]); ?>
</main>
<?php
get_footer();
?>
