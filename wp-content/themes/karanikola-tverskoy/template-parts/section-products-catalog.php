<?php
$title = $args['title'];
$floors = get_terms([
	'taxonomy' => 'floors',
	'hide_empty' => false,
]);
$params = $args['query'] ?? [];
$query = new WP_Query;
$posts = $query->query(array_merge($params, [
	"tax" => [
		[
			'taxonomy' => 'floors',
			'field' => 'id',
			'terms' => $floors[0]->term_id,
		]
	]
]));
$total_pages = $query->max_num_pages;

?>

<section class="section-core section-core section-products-catalog js-fixed-element-section" props="{}">
	<span class="section-products-catalog__filter ui-button ui-button_type_blue ui-button_size_default js-fixed-element" data-bs-toggle="modal" data-bs-target="#modal-product-filter">
		<span class="ui-button__icon ui-button__icon_icon-filter">
			<svg class="ui-button__icon ui-button__icon_default module-svg-icon module-svg-icon_icon-filter" viewBox="0 0 16 16"><use href="#icon-filter"></use></svg>
		</span>
		<span class="ui-button__text">Фильтры</span>
	</span>
	<div class="section-products-catalog__flex grid-flex grid-flex_justify-space-beetwen">
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
							<a class="ui-group-buttons__button ui-button ui-button_type_purple-border ui-button_size_middle <?php if($index === 0): ?>ui-button_type_purple-border-active<?php endif; ?>" href="<?php echo get_term_link($floor); ?>">
								<span class="ui-button__text">
									<?php echo $floor->name; ?>
								</span>
							</a>
						<?php endforeach; ?>
					</div>
				<?php endif; ?>
			</div>
			<picture class="section-products-catalog__schemes module-photo">
				<?php if($posts[0]): ?>
					<?php
						$item = $posts[0];
						$scheme = get_field('scheme', $item->ID);
					?>
					<img class="js-scheme-main" src="<?php echo $scheme['sizes']['large'] ?>" alt="" loading="lazy" />
				<?php endif; ?>
			</picture>
		</div>
		<div class="section-products-catalog__col section-products-catalog__col_right grid-col grid-col_right">
			<?php if($posts): ?>
				<div class="section-products-catalog__items">
					<?php foreach($posts as $post): ?>
						<?php get_template_part('template-parts/item-product', null, ['item' => $post]); ?>
					<?php endforeach; ?>
				</div>
			<?php endif; ?>
		</div>
	</div>
</section>
