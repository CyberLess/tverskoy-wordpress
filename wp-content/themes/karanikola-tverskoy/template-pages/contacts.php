<?php /* Template Name: Контакты */ ?>
<?php
get_header();
?>
<main class="part-main-content">
	<?php get_template_part('/template-parts/section-contacts', null, [
		'title' => get_field('title'),
		'description' => get_field('description'),
		'map' => get_field('map'),
		'map_mobile' => get_field('map_mobile'),
	]); ?>
</main>
<?php
get_footer();
?>
