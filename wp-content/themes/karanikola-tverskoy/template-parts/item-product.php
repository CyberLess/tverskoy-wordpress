<?php
	$item = $args['item'];
	$link = get_the_permalink($item->ID);
	$picture = get_the_post_thumbnail_url( $item->ID, 'medium' );
	// $artist = get_field('artist', $item->ID);
	$title = get_the_title($item->ID);
	$floor = wp_get_post_terms($item->ID, 'floors')[0];
	$scheme = get_field('scheme', $item->ID);
	$excerpt = get_the_excerpt($item->ID);
?>

<a
	class="section-products-catalog__item item-product js-item-product"
	href="<?php echo $link ?>"
	data-event="hover,click"
	<?php if (!empty($floor)): ?>data-floor="<?php echo $floor->name ?>"<?php endif; ?>
	<?php if (!empty($title)): ?>data-title="<?php echo $title ?>" <?php endif; ?>
	<?php if (!empty($scheme)): ?>data-scheme="<?php echo $scheme['sizes']['large'] ?>"<?php endif; ?>
>
	<span class="item-product__flex grid-flex grid-flex_justify-space-beetwen">
		<span class="item-product__col item-product__col_left">
			<span class="item-product__info">
				<span class="item-product__title ui-title ui-title_default ui-title_color-purple ui-title_size-middle">
					<?php echo $title ?>
				</span>
				<span class="item-product__text">
					<?php echo $excerpt ?>
				</span>
			</span>
			<span class="item-product__button item-product__button_desktop ui-button ui-button_circle-purple ui-button_type_circle ui-button_size_circle-default" style="translate: none; rotate: none; scale: none; transform: translate(0px, 0px); opacity: 1;"><span class="ui-button__icon ui-button__icon_icon-arrow-2"><svg class="ui-button__icon ui-button__icon_circle ui-button__icon_circle-purple module-svg-icon module-svg-icon_icon-arrow-2" viewBox="0 0 24 24"><use href="#icon-arrow-2"></use></svg></span></span>
			<!-- <span class="item-product__button item-product__button_desktop ui-button ui-button_circle-purple ui-button_type_circle ui-button_size_circle-default">
				<span class="ui-button__icon ui-button__icon_icon-arrow-2">
					<svg class="ui-button__icon ui-button__icon_circle ui-button__icon_circle-purple module-svg-icon module-svg-icon_icon-arrow-2" viewBox="0 0 24 24"><use href="#icon-arrow-2"></use></svg>
				</span>
			</span> -->
		</span>
		<span class="item-product__col item-product__col_right">
			<?php if($picture): ?>
				<picture class="item-product__image module-photo">
					<img src="<?php echo $picture ?>" alt="" loading="lazy" />
				</picture>
			<?php endif; ?>
			<span class="item-product__button item-product__button_mobile ui-button ui-button_circle-gray-background ui-button_type_circle ui-button_size_circle-default">
				<span class="ui-button__icon ui-button__icon_icon-map">
					<svg class="ui-button__icon ui-button__icon_circle ui-button__icon_circle-blue module-svg-icon module-svg-icon_icon-map" viewBox="0 0 20 20"><use href="#icon-map"></use></svg>
				</span>
			</span>
		</span>
	</span>
</a>
