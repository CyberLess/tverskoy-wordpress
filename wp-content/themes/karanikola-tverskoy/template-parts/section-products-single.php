<?php
	global $post;
	$title = get_the_title();
	$excerpt = get_the_excerpt();
	$worktime = get_field('worktime');
	$sitelink = get_field('sitelink');
	$gallery = get_field('gallery');
	$domain = getDomainFromUrl($sitelink);

	$lising = get_field('institutions_listing', 'options');
	$listing_url = !empty($lising) ? get_the_permalink($lising->ID) : null;
?>
<section class="section-core section-core section-products-single" props="{}">
	<div class="section-products-single__wrapper wrapper">
		<div class="section-products-single__header part-section-header">
			<?php get_template_part('/template-parts/button-back', null, [
				'url' => $listing_url,
			]); ?>
			<?php if($title): ?>
				<div class="section-products-single__title ui-title ui-title_default ui-title_color-gray ui-title_size-big">
					<?php echo $title; ?>
				</div>
			<?php endif; ?>
			<?php if($excerpt): ?>
				<div class="section-products-single__text">
					<?php echo $excerpt; ?>
				</div>
			<?php endif; ?>
			<?php if($worktime): ?>
				<div class="section-products-single__time"><?php echo $worktime; ?></div>
			<?php endif; ?>
			<?php if($sitelink): ?>
				<a class="section-products-single__button ui-button ui-button_type_default ui-button_size_default" href="<?php echo $sitelink; ?>"><span class="ui-button__text"><?php echo $domain; ?></span></a>
			<?php endif; ?>
		</div>
		<div class="section-products-single__main part-section-main">
			<?php if($gallery): ?>
				<div class="section-products-single__slider js-slider-default" data-parameter='{"loop":true,"centeredSlides":true}'>
					<div class="section-products-single__slider-wrapper swiper-wrapper">
						<?php foreach($gallery as $index => $image): ?>
							<div class="section-products-single__slide swiper-slide">
								<picture class="section-products-single__slide-image <?php if($index % 3 === 0): ?>section-products-single__slide-image_border-radius<?php endif; ?> module-photo">
									<img class="object-fit-cover" src="<?php echo $image['sizes']['large'] ?>" alt="<?php echo $image['alt'] ?>" loading="lazy" />
								</picture>
							</div>
						<?php endforeach; ?>
					</div>
				</div>
				<div class="section-products-single__slider-control grid-flex grid-flex_justify-space-beetwen">
					<div class="section-products-single__pagination slider-pagination slider-pagination_gray">
						<div class="slider-pagination__bullet js-slider-default-pagination-bullet"></div>
						<div class="slider-pagination__index js-slider-default-pagination-index"></div>
					</div>
					<div class="section-products-single__slider-navigation slider-navigation slider-navigation_gray">
						<button class="slider-navigation__slider-button slider-button slider-button_gray slider-button_prev js-slider-default-navigation-prev">
							<svg class="slider-button__icon module-svg-icon module-svg-icon_icon-arrow" viewBox="0 0 60 60"><use href="#icon-arrow"></use></svg>
						</button>
						<button class="slider-navigation__slider-button slider-button slider-button_gray slider-button_next js-slider-default-navigation-next">
							<svg class="slider-button__icon module-svg-icon module-svg-icon_icon-arrow" viewBox="0 0 60 60"><use href="#icon-arrow"></use></svg>
						</button>
					</div>
				</div>
			<?php endif; ?>

			<div class="section-products-single__content part-section-content">
				<div class="part-section-content__item">
					<div class="part-section-content__flex grid-flex grid-flex_justify-end">
						<div class="part-section-content__col grid-col grid-col_right content">
							<?php the_content() ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
