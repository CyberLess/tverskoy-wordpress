<?php /* Template Name: Главная */ ?>
<?php
get_header();
?>
<?php
	$addr = get_field('addr', 'options');
?>
<main class="part-main-content
	<section class="section-core section-core section-offer" props="{}">
		<div class="section-offer__wrapper wrapper">
			<div class="section-offer__flex grid-flex grid-flex_justify-center">
				<div class="section-offer__title grid-flex grid-flex_justify-space-beetwen">
					<div class="section-offer__title-part">T</div>
					<div class="section-offer__title-part">V</div>
					<div class="section-offer__title-part">E</div>
					<div class="section-offer__title-part">R</div>
					<div class="section-offer__title-part">S</div>
					<div class="section-offer__title-part">K</div>
					<div class="section-offer__title-part">O</div>
					<div class="section-offer__title-part">Y</div>
				</div>
				<div class="section-offer__decor">
					<picture class="section-offer__decor-part section-offer__decor-part_main section-offer__decor-part_main-left module-photo"><img src="<?php echo IMAGES ?>/section-offer-1.png" alt="photo" loading="lazy" /></picture>
					<picture class="section-offer__decor-part section-offer__decor-part_absolute section-offer__decor-part_absolute-left module-photo">
						<img src="<?php echo IMAGES ?>/section-offer-2.png" alt="photo" loading="lazy" />
					</picture>
				</div>
				<div class="section-offer__decor">
					<picture class="section-offer__decor-part section-offer__decor-part_main section-offer__decor-part_main-right module-photo"><img src="<?php echo IMAGES ?>/section-offer-3.png" alt="photo" loading="lazy" /></picture>
					<picture class="section-offer__decor-part section-offer__decor-part_absolute section-offer__decor-part_absolute-right module-photo">
						<img src="<?php echo IMAGES ?>/section-offer-4.png" alt="photo" loading="lazy" />
					</picture>
				</div>
			</div>
			<div class="section-offer__bottom">
				<div class="section-offer__flex grid-flex grid-flex_justify-space-beetwen grid-flex_vertical-center">
					<div class="section-offer__info">
						Гастрономический <br />
						кластер в&nbsp;центре Москвы
					</div>
					<div class="section-offer__trigger grid-flex grid-flex_justify-center">
						<svg class="section-offer__trigger-icon module-svg-icon module-svg-icon_icon-arrow" viewBox="0, 0, 10, 14"><use href="#icon-arrow"></use></svg>
					</div>
					<?php if($addr): ?>
						<div class="section-offer__info">
							Адрес кластера: <br />
							<?php echo $addr; ?>
						</div>
					<?php endif; ?>

				</div>
			</div>
		</div>
	</section>
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
	<section class="section-core section-core section-history" props="{}">
		<div class="section-history__wrapper wrapper">
			<div class="section-history__flex grid-flex grid-flex_wrap">
				<div class="section-history__col section-history__col_left grid-col grid-col_left"><div class="section-history__title ui-title ui-title_default ui-title_color-purple ui-title_size-default">Новая история</div></div>
				<div class="section-history__col section-history__col_right grid-col grid-col_right">
					<div class="section-history__subtitle ui-title ui-title_default ui-title_color-purple ui-title_size-middle">Усадьба Салтыкова</div>
					<div class="section-history__text">
						Особняк XVIII века был бережно реконструирован <br />
						и&nbsp;подарил исторические стены для&nbsp;гастрокластера TVERSKOY. <br />
						Более 17 000 м² полностью посвятили еде — и&nbsp;вы можете стать частью нового гастрономического мира в&nbsp;центре Москвы.
					</div>
				</div>
			</div>
			<picture class="section-history__image module-photo"><img class="object-fit-cover" src="<?php echo IMAGES ?>/section-history-1.png" alt="photo" loading="lazy" /></picture>
		</div>
	</section>
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
