<?php /* Template Name: Главная */ ?>
<?php
get_header();
?>
<main class="part-main-content">
	<?php get_template_part('/template-parts/section-offer', null, [
		'video1' => get_field('hello_first_video'),
		'video2' => get_field('hello_second_video'),
		'addr' => get_field('addr', 'options')
	]); ?>
	<section class="section-core section-core section-about" props="{}">
		<div class="section-about__wrapper wrapper">
			<div class="section-about__title ui-title ui-title_default ui-title_color-gray ui-title_size-small">О кластере</div>
			<div class="section-about__line"></div>
			<div class="section-about__text">
				<span class="section-about__text-part section-about__text-part_gray">Добро пожаловать в&nbsp;TVERSKOY —гастрономический кластер</span>
				<span class="section-about__text-part section-about__text-part_default">
					в&nbsp;центре Москвы, где традиции встречаются с&nbsp;современностью. Откройте для&nbsp;себя уникальные блюда, атмосферу и&nbsp;виды на&nbsp;Тверской бульвар.
				</span>
			</div>
			<div class="section-about__decors grid-flex grid-flex_justify-center grid-flex_vertical-bottom">
				<div class="section-about__decors-item"></div>
				<div class="section-about__decors-item"></div>
				<div class="section-about__decors-item"></div>
				<picture class="section-about__decors-image module-photo"><img src="<?php echo IMAGES ?>/section-about-1800.png" alt="photo" loading="lazy" /></picture>
				<div class="section-about__decors-item"></div>
				<div class="section-about__decors-item section-about__decors-item_border-radius"></div>
				<div class="section-about__decors-item"></div>
			</div>
		</div>
	</section>
	<?php get_template_part('/template-parts/section-history', null, [
		'video' => get_field('history_video'),
	]); ?>

	<?php get_template_part('/template-parts/section-products-slider', null, [
		'query' => [
			'post_type' => 'events',
			'posts_per_page' => 4
		]
	]); ?>
	<?php get_template_part('/template-parts/section-events-slider', null, [
		'query' => [
			'post_type' => 'events',
			'posts_per_page' => 4
		]
	]); ?>
	<?php get_template_part('/template-parts/section-news-slider', null, [
		'query' => [
			'post_type' => 'post',
			'posts_per_page' => 5
		]
	]); ?>
</main>
<?php
get_footer();
?>
