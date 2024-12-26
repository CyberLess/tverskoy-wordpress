<?php
$params = $args['query'] ?? [];
$query = new WP_Query;
$posts = $query->query(array_merge($params, [
]));
$total_pages = $query->max_num_pages;

$lising = get_field('news_listing', 'options');
$listing_url = !empty($lising) ? get_the_permalink($lising->ID) : null;

?>
<?php if($posts): ?>
	<section class="section-core section-core section-news-slider" props="{}">
		<div class="section-news-slider__wrapper wrapper">
			<div class="section-news-slider__flex grid-flex grid-flex_justify-space-beetwen grid-flex_vertical-center">
				<div class="section-news-slider__title ui-title ui-title_default ui-title_color-gray ui-title_size-default">новости</div>
				<?php if($listing_url): ?>
					<a class="section-news-slider__button section-news-slider__button_desktop ui-button ui-button_type_default ui-button_size_default" href="<?php echo $listing_url; ?>">
						<span class="ui-button__text">Все новости</span>
					</a>
				<?php endif; ?>
			</div>
			<div class="section-news-slider__slider js-slider-default">
				<div class="section-news-slider__slider-wrapper swiper-wrapper">
					<?php foreach($posts as $post): ?>
						<div class="section-news-slider__slide section-news-slider__slide_border-top swiper-slide">
							<?php get_template_part('template-parts/item-news', null, ['item' => $post]); ?>
						</div>
					<?php endforeach; ?>
				</div>
			</div>
			<div class="section-news-slider__pagination slider-pagination slider-pagination_gray">
				<div class="slider-pagination__bullet js-slider-default-pagination-bullet"></div>
				<div class="slider-pagination__index js-slider-default-pagination-index"></div>
			</div>
			<?php if($listing_url): ?>
				<a class="section-news-slider__button section-news-slider__button_mobile ui-button ui-button_type_default ui-button_size_default" href="<?php echo $listing_url; ?>">
					<span class="ui-button__text">Все новости</span>
				</a>
			<?php endif; ?>
		</div>
	</section>
<?php endif; ?>
