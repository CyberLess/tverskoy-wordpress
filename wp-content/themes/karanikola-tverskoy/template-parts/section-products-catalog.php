<?php
$title = $args['title'];
$floors = get_terms([
	'taxonomy' => 'floors',
	'hide_empty' => false,
]);
$params = $args['query'] ?? [];
$query = new WP_Query;
$posts = $query->query(array_merge($params, [
	"tax_query" => [
		[
			'taxonomy' => 'floors',
			'field' => 'id',
			'terms' => $floors[0]->term_id,
		]
	]
]));
$total_pages = $query->max_num_pages;
$item_template = $params['post_type'] === 'institution' ? 'item-product' : 'item-rent';
?>

<section class="section-core section-core section-products-catalog js-fixed-element-section" props="{}">
	<?php if($params['post_type'] === 'institution' ): ?>
		<span class="section-products-catalog__filter ui-button ui-button_type_blue ui-button_size_default js-fixed-element" data-bs-toggle="modal" data-bs-target="#modal-product-filter">
			<span class="ui-button__icon ui-button__icon_icon-filter">
				<svg class="ui-button__icon ui-button__icon_default module-svg-icon module-svg-icon_icon-filter" viewBox="0 0 16 16"><use href="#icon-filter"></use></svg>
			</span>
			<span class="ui-button__text">Фильтры</span>
		</span>
	<?php endif; ?>
	<form id="filters-form" data-reset-submit="true" action="<?php echo admin_url( "admin-ajax.php" ) ?>" <?php if(empty($params['posts_per_page'])): ?>data-scroll="true"<?php endif; ?>  class="section-products-catalog__flex grid-flex grid-flex_justify-space-beetwen js-listing">
		<div class="section-products-catalog__col section-products-catalog__col_left grid-col grid-col_left">
			<div class="section-products-catalog__flex grid-flex grid-flex_wrap grid-flex_justify-space-beetwen">
				<?php if($title): ?>
					<div class="section-products-catalog__title ui-title ui-title_default ui-title_color-purple ui-title_size-default"><?php echo $title; ?></div>
				<?php endif; ?>
				<?php if(!empty($floors[0])): ?>
					<div class="section-products-catalog__floor ui-title ui-title_default ui-title_color-purple ui-title_size-middle">
						<?php echo $floors[0]->name; ?>
					</div>
				<?php endif; ?>
			</div>
			<div class="section-products-catalog__group-buttons ui-group-buttons">
				<?php if($floors): ?>
					<div class="ui-group-buttons__flex grid-flex grid-flex_width-full">
						<?php foreach($floors as $index => $floor): ?>
							<label class="ui-group-buttons__item ui-checkbox js-update-label" data-to-selector=".section-products-catalog__floor">
								<input class="ui-checkbox__checkbox" type="radio" value="<?php echo $floor->term_id; ?>" name="taxonomies[floors]" <?php if($index === 0): ?>checked="checked"<?php endif; ?> />
								<span class="ui-checkbox__text"><?php echo $floor->name; ?></span>
							</label>
						<?php endforeach; ?>
					</div>
				<?php endif; ?>
			</div>
			<picture class="section-products-catalog__schemes module-photo">
				<?php if(!empty($posts[0])): ?>
					<?php
						$item = $posts[0];
						$scheme = get_field('scheme', $item->ID);
					?>
					<img class="js-scheme-main" src="<?php if (!empty($scheme['sizes']['large'])) { echo $scheme['sizes']['large']; } ?>" alt="" loading="lazy" />
				<?php endif; ?>
			</picture>
		</div>
		<div class="section-products-catalog__col section-products-catalog__col_right grid-col grid-col_right">
			<input type="hidden" name="page" value="1">
			<input type="hidden" name="type" value="<?php echo $params['post_type']; ?>">
			<?php if(!empty($params['posts_per_page'])): ?>
				<input type="hidden" name="perPage" value="<?php echo $params['posts_per_page']; ?>">
			<?php else: ?>
				<input type="hidden" name="perPage" value="<?php echo get_option('posts_per_page'); ?>">
			<?php endif; ?>
			<input type="hidden" name="action" value="load_more">
			<template id="skeleton">
				<?php if($params['post_type'] === 'institution'): ?>
					<div class="section-products-catalog__item item-product item-product_skeleton js-item-product" data-event="">
						<div class="item-product__flex grid-flex grid-flex_justify-space-beetwen">
							<div class="item-product__col item-product__col_left">
								<div class="item-product__info">
									<div class="item-product__title ui-title _ is-skeleton is-skeleton is-skeleton_dirt">&nbsp;</div>
									<div class="item-product__text is-skeleton is-skeleton is-skeleton_dirt">&nbsp;</div>
								</div>
							</div>
							<div class="item-product__col item-product__col_right is-skeleton is-skeleton is-skeleton_dirt"><div class="item-product__image"></div></div>
						</div>
					</div>
				<?php else: ?>
					<div class="section-products-catalog__item item-product item-product_skeleton js-item-product" data-event="">
						<div class="item-product__flex grid-flex grid-flex_justify-space-beetwen">
							<div class="item-product__col item-product__col_left">
								<div class="item-product__info">
									<div class="item-product__title ui-title _ is-skeleton is-skeleton is-skeleton_dirt">&nbsp;</div>
									<div class="item-product__text is-skeleton is-skeleton is-skeleton_dirt">&nbsp;</div>
								</div>
							</div>
						</div>
					</div>
				<?php endif; ?>
			</template>

			<?php if($posts): ?>
				<div class="section-products-catalog__items js-listing-body">
					<?php foreach($posts as $post): ?>
						<?php get_template_part("template-parts/{$item_template}", null, ['item' => $post]); ?>
					<?php endforeach; ?>
				</div>
			<?php endif; ?>
		</div>
	</form>
</section>
