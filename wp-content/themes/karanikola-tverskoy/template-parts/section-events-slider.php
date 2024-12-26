<?php
$query = new WP_Query;
$posts = $query->query($args['query']);
$total_pages = $query->max_num_pages;

$lising = get_field('events_listing', 'options');
$listing_url = !empty($lising) ? get_the_permalink($lising->ID) : null;
?>
<?php if($posts): ?>
<section class="section-core section-core section-events-slider" props="{}">
	<div class="section-events-slider__wrapper wrapper">
		<div class="section-events-slider__flex grid-flex grid-flex_wrap">
			<div class="section-events-slider__col grid-col grid-col_left"><div class="section-events-slider__title ui-title ui-title_default ui-title_color-gray ui-title_size-default">Мероприятия</div></div>
			<div class="section-events-slider__col grid-col grid-col_right">
				<div class="section-events-slider__text">
					Особняк XVIII века был бережно реконструирован и&nbsp;подарил исторические стены для&nbsp;гастрокластера TVERSKOY. Более 17 000 м² полностью посвятили еде — и&nbsp;вы можете стать частью нового
					гастрономического мира в&nbsp;центре Москвы.
				</div>
			</div>
		</div>
		<div class="js-event-container">
			<picture class="section-events-slider__module-photo module-photo event-item-preview js-event-preview"></picture>
			<div class="section-events-slider__slider js-slider-default">
				<div class="section-events-slider__slider-wrapper swiper-wrapper">
					<?php foreach( $posts as $item ): ?>
						<div class="section-events-slider__slide swiper-slide">
							<?php get_template_part('template-parts/item-event', null, ['item' => $item]); ?>
						</div>
					<? endforeach; ?>
				</div>
			</div>
		</div>
		<div class="section-events-slider__pagination slider-pagination slider-pagination_gray">
			<div class="slider-pagination__bullet js-slider-default-pagination-bullet"></div>
			<div class="slider-pagination__index js-slider-default-pagination-index"></div>
		</div>
		<?php if($listing_url): ?>
			<a class="section-events-slider__button ui-button ui-button_type_default ui-button_size_default" href="<?php echo $listing_url; ?>"><span class="ui-button__text">Все события</span></a>
		<?php endif; ?>
	</div>
</section>
<?php endif; ?>
