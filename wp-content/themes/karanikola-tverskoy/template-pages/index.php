<?php /* Template Name: Главная */ ?>
<?php
get_header();
?>
<main class="part-main-content">
	<?php get_template_part('/template-parts/section-offer', null, [
		'video1' => get_field('hello_first_video'),
		'video2' => get_field('hello_second_video'),
		'addr' => get_field('addr', 'options'),
		'addr_url' => get_field('addr_url', 'options'),
	]); ?>
	<section class="section-core section-core section-about" props="{}">
		<div class="section-about__wrapper wrapper">
			<div class="section-about__title ui-title ui-title_default ui-title_color-gray ui-title_size-small">О кластере</div>
			<div class="section-about__line"></div>
			<div class="section-about__text">
				<span class="section-about__text-part section-about__text-part_gray">Добро пожаловать в&nbsp;TVERSKOY — гастрономический кластер в&nbsp;центре Москвы, </span>
				<span class="section-about__text-part section-about__text-part_default">где традиции встречаются с&nbsp;современностью. Откройте для&nbsp;себя уникальные блюда в&nbsp;атмосфере изысканной кухни с&nbsp;роскошными видами на&nbsp;Тверской бульвар.</span>
			</div>
			<div class="section-about__diving">
				<div class="section-about__decors grid-flex grid-flex_justify-center grid-flex_vertical-bottom">
					<div class="section-about__decors-item"></div>
					<div class="section-about__decors-item"></div>
					<div class="section-about__decors-item"></div>
					<div class="section-about__diving-image">
						<picture class="section-about__decors-image module-photo"><img src="<?php echo IMAGES ?>/section-about-1800.png" alt="photo" loading="lazy" /></picture>
					</div>
					<div class="section-about__decors-item"></div>
					<div class="section-about__decors-item section-about__decors-item_border-radius"></div>
					<div class="section-about__decors-item"></div>
				</div>
				<div class="section-about__diving-text section-about__diving-text--1">Формат гастрокластера полностью переосмыслен благодаря необычным материалам отделки и&nbsp;передвижным декорациям на&nbsp;каждом этаже.</div>
				<div class="section-about__diving-text section-about__diving-text--2">Пространство нового foodspace меняется несколько раз в&nbsp;день, дизайнерские детали, графика, современные скульптуры создают неповторимую атмосферу театральности.</div>
			</div>
		</div>
	</section>
	<?php get_template_part('/template-parts/section-history', null, [
		'video' => get_field('history_video'),
	]); ?>

	<?php
		$favorites = get_field('favorite');
	?>
	<?php if(!empty($favorites)): ?>
		<?php get_template_part('/template-parts/section-products-slider', null, [
			'posts' => $favorites
		]); ?>
	<?php else: ?>
		<?php get_template_part('/template-parts/section-products-catalog', null, [
			'title' => 'Аренда помещений',
			'query' => [
				'post_type' => 'premises',
				'posts_per_page' => 6
			]
		]); ?>
	<?php endif; ?>

	<?php get_template_part('/template-parts/section-events-slider', null, [
		'query' => [
			'post_type' => 'events',
			'posts_per_page' => 2
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
