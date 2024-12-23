<?php
$title = $args['title'];
$categories = get_terms([
	'taxonomy' => 'category',
	'hide_empty' => true,
]);
$params = $args['query'] ?? [];
$query = new WP_Query;
$posts = $query->query(array_merge($params, [
]));
$banner = $args['banner'] ?? null;
$total_pages = $query->max_num_pages;
$mainLink = getTplPageURL('template-pages/news.php');
?>

<section class="section-core section-core section-news-catalog" props="{}">
	<div class="section-news-catalog__wrapper wrapper">
		<div class="section-news-catalog__header part-section-header">
			<?php if($title): ?>
				<div class="section-news-catalog__title ui-title ui-title_default ui-title_color-gray ui-title_size-big">
					<?php echo $title; ?>
				</div>
			<?php endif; ?>
			<?php if(!empty($categories)): ?>
				<div class="section-news-catalog__group-buttons ui-group-buttons">
					<div class="ui-group-buttons__flex grid-flex grid-flex_width-full">
						<?php if($mainLink): ?>
							<a href="<?php echo $mainLink ?>" class="ui-group-buttons__button ui-button ui-button_type_default-active ui-button_type_default ui-button_size_middle">
								<span class="ui-button__text">Все</span>
							</a>
						<?php endif; ?>
						<?php foreach($categories as $category): ?>
							<?php
								$link = get_term_link($category);
							?>
							<a class="ui-group-buttons__button ui-button ui-button_type_default ui-button_size_middle" href="<?php echo $link ?>">
								<span class="ui-button__text">
									<?php echo $category->name; ?>
								</span>
							</a>
						<?php endforeach; ?>
					</div>
				</div>
			<?php endif; ?>
		</div>
		<?php if($banner): ?>
			<?php
				$permalink = get_the_permalink($banner->ID);
				$title = get_the_title($banner->ID);
				$excerpt = get_the_excerpt($banner->ID);
				$picture = get_the_post_thumbnail_url($banner->ID, 'large');
				$tags = wp_get_post_terms($banner->ID, 'post_tag');
				$date = get_the_date('m.y', $banner->ID);
			?>
			<a class="section-news-catalog__banner part-banner" href="<?php echo $permalink ?>">
				<span class="part-banner__flex grid-flex grid-flex_wrap">
					<span class="part-banner__col part-banner__col_left">
						<span class="part-banner__content">
							<span class="part-banner__content-top">
								<span class="part-banner__info">
									<?php if($tags): ?>
										<?php foreach($tags as $tag): ?>
											<span class="part-banner__info-item"><?php echo $tag->name; ?></span>
										<?php endforeach; ?>
									<?php endif; ?>
									<span class="part-banner__info-item"><?php echo $date; ?></span>
								</span>
								<?php if($title): ?>
									<span class="part-banner__title"><?php echo $title; ?></span>
								<?php endif; ?>
								<?php if($excerpt): ?>
									<span class="part-banner__text"><?php echo $excerpt; ?> </span>
								<?php endif; ?>
							</span>
							<span class="part-banner__content-bottom">
								<span class="part-banner__button ui-button ui-button_circle-gray ui-button_type_circle ui-button_size_circle-default">
									<span class="ui-button__icon ui-button__icon_icon-arrow-2">
										<svg class="ui-button__icon ui-button__icon_circle ui-button__icon_circle-gray module-svg-icon module-svg-icon_icon-arrow-2" viewBox="0 0 24 24">
											<use href="#icon-arrow-2"></use>
										</svg>
									</span>
								</span>
							</span>
						</span>
					</span>
					<span class="part-banner__col part-banner__col_right">
						<?php if($picture): ?>
							<picture class="part-banner__image module-photo">
								<img class="object-fit-cover" src="<?php echo $picture ?>" alt="" loading="lazy" />
							</picture>
						<?php endif; ?>
					</span>
				</span>
			</a>
		<?php endif; ?>

		<div class="section-news-catalog__main part-section-main">
			<?php if($posts): ?>
				<div class="section-news-catalog__grid">
					<?php foreach($posts as $post): ?>
						<div class="section-news-catalog__col">
							<?php get_template_part('template-parts/item-news', null, ['item' => $post]); ?>
						</div>
					<?php endforeach; ?>
				</div>
				<a class="section-news-catalog__button ui-button ui-button_type_default ui-button_size_default" href="#"><span class="ui-button__text">Показать еще</span></a>
			<?php endif; ?>
		</div>
	</div>
</section>
