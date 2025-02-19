<?php
$title = $args['title'];
$categories = get_terms([
	'taxonomy' => 'category',
	'hide_empty' => true,
]);
$params = $args['query'] ?? [];
$query = new WP_Query;
$posts = $query->query($params);
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
			<?php get_template_part('/template-parts/part-banner', null, [
				'permalink' => get_the_permalink($banner->ID),
				'title' => get_the_title($banner->ID),
				'excerpt' => get_the_excerpt($banner->ID),
				'picture' => get_the_post_thumbnail_url($banner->ID, 'large'),
				'tags' => wp_get_post_terms($banner->ID, 'post_tag'),
				'date' => get_the_date('m.y', $banner->ID),
				'class' => "section-news-catalog__banner"
			]); ?>
		<?php endif; ?>

		<form action="<?php echo admin_url( "admin-ajax.php" ) ?>" class="section-news-catalog__main part-section-main js-listing">
			<input type="hidden" name="page" value="1">
			<input type="hidden" name="type" value="post">
			<input type="hidden" name="action" value="load_more">
			<?php if(!empty($params['tax_query'])): ?>
				<?php foreach($params['tax_query'] as $tax): ?>
					<input type="hidden" name="taxonomies[<?php echo $tax['taxonomy'] ?>]" value="<?php echo $tax['terms'] ?>">
				<?php endforeach; ?>
			<?php endif; ?>

			<?php if($posts): ?>
				<div class="section-news-catalog__grid js-listing-body">
					<template id="skeleton">
						<div class="section-news-catalog__col">
							<div class="section-news-catalog__item item-news item-news_border-top item-news_skeleton">
								<div class="item-news__content">
									<div class="item-news__content-top">
										<div class="item-news__info"><div class="item-news__info-item is-skeleton">&nbsp;</div></div>
										<div class="item-news__title ui-title _ is-skeleton">&nbsp;</div>
										<div class="item-news__text is-skeleton">&nbsp;</div>
									</div>
								</div>
							</div>
						</div>
					</template>
					<?php foreach($posts as $post): ?>
						<?php
							$isBackgroundField = get_field('show_image_at_listing', $post->ID);
							$isBackgroundClass = $isBackgroundField ? "section-news-catalog__col_height" : "";
						?>
						<div class="section-news-catalog__col <?php echo $isBackgroundClass ?>">
							<?php get_template_part('template-parts/item-news', null, [
								'item' => $post,
								'class' => 'section-news-catalog__item'
							]); ?>
						</div>
					<?php endforeach; ?>
				</div>
				<?php if($total_pages > 1): ?>
					<button class="section-news-catalog__button ui-button ui-button_type_default ui-button_size_default js-listing-more">
						<span class="ui-button__text">Показать еще</span>
					</button>
				<?php endif; ?>
			<?php endif; ?>
		</form>
	</div>
</section>
