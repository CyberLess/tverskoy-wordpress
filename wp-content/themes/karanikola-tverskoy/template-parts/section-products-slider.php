<?php
$posts = get_field('favorite');

$grouped_posts = [];
if ($posts) {
    foreach ($posts as $post) {
        $floors = wp_get_post_terms($post->ID, 'floors');
        if (!empty($floors)) {
            $floor_id = $floors[0]->term_id;
            if (!isset($grouped_posts[$floor_id])) {
                $grouped_posts[$floor_id] = [
                    'floor' => $floors[0],
                    'posts' => []
                ];
            }
            $grouped_posts[$floor_id]['posts'][] = $post;
        }
    }
}

$lising = get_field('institutions_listing', 'options');
$listing_url = !empty($lising) ? get_the_permalink($lising->ID) : null;
?>
<?php if(!empty($posts)): ?>
	<section class="section-core section-core section-products-slider js-products-slider" props="{}">
		<div class="section-products-slider__main js-products-slider-main">
			<div class="swiper-wrapper">
				<?php foreach($grouped_posts as $groupIndex => $group): ?>
					<div class="section-products-slider__main-slide swiper-slide js-products-slider-main-slide">
						<div class="section-products-slider__flex grid-flex grid-flex_justify-space-beetwen grid-flex_height-full">
							<div class="section-products-slider__col section-products-slider__col_left grid-col grid-col_left">
								<div class="section-products-slider__flex grid-flex grid-flex_wrap grid-flex_justify-space-beetwen">
									<div class="section-products-slider__title ui-title ui-title_default ui-title_color-purple ui-title_size-default">КУХНИ МИРА</div>
									<div class="section-products-slider__floor ui-title ui-title_default ui-title_color-purple ui-title_size-middle">
										<?php echo $group['floor']->name ?>
									</div>
								</div>
								<div class="section-products-slider__flex grid-flex">
									<div class="section-products-slider__col section-products-slider__col_inner-left">
										<div class="section-products-slider__subtitle">Популярные заведения</div>
										<?php if(!empty($group['posts'])): ?>
											<div class="section-products-slider__pagination js-products-slider-inner-tabs-pagination">
												<?php foreach($group['posts'] as $post): ?>
													<div class="section-products-slider__pagination-item js-products-slider-tabs-pagination-button">
														<?php echo get_the_title($post->ID); ?>
													</div>
												<?php endforeach; ?>
												<?php if($listing_url): ?>
													<a class="section-products-slider__more" href="<?php echo $listing_url ?>">Смотреть все</a>
												<?php endif; ?>
											</div>
										<?php endif; ?>
									</div>
									<div class="section-products-slider__col section-products-slider__col_inner-right">
										<div class="section-products-slider__schemes">
											<?php
												$firstPost = $group['posts'][0];
												$scheme = get_field('scheme', $firstPost->ID);
											?>
											<picture class="section-products-slider__schemes-source module-photo">
												<img class="js-scheme" src="<?php echo $scheme['sizes']['large'] ?>" alt="" loading="lazy" />
											</picture>
										</div>
									</div>
								</div>
								<div class="section-products-slider__control grid-flex grid-flex_justify-space-beetwen grid-flex_vertical-center">
									<div class="section-products-slider__group-buttons ui-group-buttons js-products-slider-main-tabs-pagination">
										<div class="ui-group-buttons__flex grid-flex grid-flex_width-full">
											<?php $first = array_keys($grouped_posts)[0]; ?>
											<?php foreach($grouped_posts as $sIndex => $subgroup): ?>
												<span class="ui-group-buttons__button ui-button  ui-button_type_purple-border ui-button_size_middle js-products-slider-tabs-pagination-button <?php if($sIndex === $groupIndex): ?>ui-button_type_purple-border-active<?php endif; ?>">
													<span class="ui-button__text">
														<?php echo $subgroup['floor']->name ?>
													</span>
												</span>
											<?php endforeach; ?>
										</div>
									</div>
									<div class="section-products-slider__slider-navigation slider-navigation slider-navigation_blue">
										<button class="slider-navigation__slider-button slider-button slider-button_blue slider-button_prev js-slider-default-navigation-prev">
											<svg class="slider-button__icon module-svg-icon module-svg-icon_icon-arrow" viewBox="0 0 60 60"><use href="#icon-arrow"></use></svg>
										</button>
										<button class="slider-navigation__slider-button slider-button slider-button_blue slider-button_next js-slider-default-navigation-next">
											<svg class="slider-button__icon module-svg-icon module-svg-icon_icon-arrow" viewBox="0 0 60 60"><use href="#icon-arrow"></use></svg>
										</button>
									</div>
								</div>
							</div>

							<div class="section-products-slider__col section-products-slider__col_right grid-col grid-col_right">
								<div class="section-products-slider__title section-products-slider__title_mobile ui-title ui-title_default ui-title_color-purple ui-title_size-default ui-title_color-purple ui-title_size-default">
									КУХНИ МИРА
								</div>
								<div class="section-products-slider__pagination-index slider-pagination slider-pagination_purple">
									<div class="slider-pagination__bullet js-slider-default-pagination-bullet"></div>
									<div class="slider-pagination__index js-slider-default-pagination-index"></div>
								</div>
								<?php if(!empty($group['posts'])): ?>
									<div class="section-products-slider__inner js-products-slider-inner">
										<div class="swiper-wrapper">
											<?php foreach($group['posts'] as $item): ?>
												<?php
													$link = get_the_permalink($item->ID);
													$picture = get_the_post_thumbnail_url( $item->ID, 'medium_large' );
													$title = get_the_title($item->ID);
													$floor = wp_get_post_terms($item->ID, 'floors')[0];
													$scheme = get_field('scheme', $item->ID);
													$excerpt = get_the_excerpt($item->ID);
												?>
												<div class="section-products-slider__inner-slide swiper-slide">
													<a
														class="section-products-slider__item item-product-slider js-item-product"
														href="<?php echo $link ?>"
														<?php if (!empty($scheme)): ?>data-scheme="<?php echo $scheme['sizes']['large'] ?>"<?php endif; ?>
														<?php if (!empty($floor)): ?>data-floor="<?php echo $floor->name ?>"<?php endif; ?>
														<?php if (!empty($title)): ?>data-title="<?php echo $title ?>" <?php endif; ?>
														data-event="click"
													>
														<!-- hover -->
														<span class="item-product-slider__image">
															<?php if($picture): ?>
																<picture class="item-product-slider__image-source item-product-slider__image-source_border-radius module-photo">
																	<img src="<?php echo $picture ?>" alt="" loading="lazy" />
																</picture>
															<?php endif; ?>
															<span class="item-product-slider__button item-product-slider__button_desktop ui-button ui-button_circle-red ui-button_type_circle ui-button_size_circle-default"><span class="ui-button__icon ui-button__icon_icon-arrow-2"><svg class="ui-button__icon ui-button__icon_circle ui-button__icon_circle-gray module-svg-icon module-svg-icon_icon-arrow-2" viewBox="0 0 24 24"><use href="#icon-arrow-2"></use></svg></span></span>
															<span class="item-product-slider__button item-product-slider__button_mobile ui-button ui-button_circle-gray-background ui-button_type_circle ui-button_size_circle-default">
																<span class="ui-button__icon ui-button__icon_icon-map">
																	<svg class="ui-button__icon ui-button__icon_circle ui-button__icon_circle-blue module-svg-icon module-svg-icon_icon-map" viewBox="0 0 20 20">
																		<use href="#icon-map"></use>
																	</svg>
																</span>
															</span>
															<!-- <span class="item-product-slider__button item-product-slider__button_desktop ui-button ui-button_circle-red ui-button_type_circle ui-button_size_circle-default">
																<span class="ui-button__icon ui-button__icon_icon-arrow-2">
																	<svg class="ui-button__icon ui-button__icon_circle ui-button__icon_circle-gray module-svg-icon module-svg-icon_icon-arrow-2" viewBox="0 0 24 24">
																		<use href="#icon-arrow-2"></use>
																	</svg>
																</span>
															</span> -->
															<!-- <span class="item-product-slider__button item-product-slider__button_mobile ui-button ui-button_circle-gray-background ui-button_type_circle ui-button_size_circle-default">
																<span class="ui-button__icon ui-button__icon_icon-map">
																	<svg class="ui-button__icon ui-button__icon_circle ui-button__icon_circle-blue module-svg-icon module-svg-icon_icon-map" viewBox="0 0 20 20"><use href="#icon-map"></use></svg>
																</span>
															</span> -->
														</span>
														<?php if($title): ?>
															<span class="item-product-slider__title">
																<?php echo $title ?>
															</span>
														<?php endif; ?>
														<?php if($excerpt): ?>
															<span class="item-product-slider__text">
																<?php echo $excerpt; ?>
															</span>
														<?php endif; ?>
													</a>
												</div>
											<?php endforeach; ?>
										</div>
									</div>
								<?php endif; ?>
							</div>
						</div>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
		<?php if($listing_url): ?>
			<a class="section-products-slider__button ui-button ui-button_type_purple-border ui-button_size_default" href="<?php echo $listing_url; ?>">
				<span class="ui-button__text">Посмотреть все</span>
			</a>
		<?php endif; ?>
	</section>
<?php endif; ?>
