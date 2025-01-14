<?php
	$item = $args['item'];
	$link = get_the_permalink($item->ID);
	$picture = get_the_post_thumbnail_url( $item->ID, 'medium' );
	$title = get_the_title($item->ID);
	$tags = wp_get_post_terms($item->ID, 'post_tag');
	$excerpt = get_the_excerpt($item->ID);
	$date = get_the_date('m.y', $item->ID);
	$className = $args['class'] ?? 'section-news-catalog__item';
	$isBackground = $args['background'] ?? null;
	$isBackgroundField = get_field('show_image_at_listing', $item->ID);
	$currentBackground = $isBackground === null ? $isBackgroundField : $isBackground;
	$isAjax = !empty($args['ajax']) ? 'is-loaded' : '';
?>

<a class="<?php echo $className ?> <?php echo $isAjax ?> item-news <?php if(!$currentBackground): ?>item-news_border-top<?php else: ?>item-news_height<?php endif; ?>" href="<?php echo $link ?>">
	<?php if(!empty($currentBackground)): ?>
		<picture class="item-news__image item-news__image_hidden-large-tablet module-photo">
			<img class="image-source" src="<?php echo $picture ?>" alt="" loading="lazy">
		</picture>
	<?php endif; ?>
	<span class="item-news__content <?php if(!empty($currentBackground)): ?>item-news__content_background<?php endif; ?>">
		<span class="item-news__content-top">
			<span class="item-news__info">
				<?php foreach($tags as $key => $tag): ?>
					<span class="item-news__info-item"><?php echo $tag->name; ?></span>
				<?php endforeach; ?>

				<span class="item-news__info-item">
					<?php echo $date; ?>
				</span>
			</span>
			<?php if($title): ?>
				<div class="item-news__title ui-title ui-title_default ui-title_color-gray ui-title_size-middle">
					<?php echo $title; ?>
				</div>
			<?php endif; ?>
			<?php if($excerpt): ?>
				<span class="item-news__text js-set-length-text" data-length="110" data-length-mobile="57">
					<?php echo $excerpt; ?>
				</span>
			<?php endif; ?>
		</span>
		<span class="item-news__content-bottom">
			<span class="item-news__button ui-button ui-button_circle-gray ui-button_type_circle ui-button_size_circle-default"><span class="ui-button__icon ui-button__icon_icon-arrow-2"><svg class="ui-button__icon ui-button__icon_circle ui-button__icon_circle-gray module-svg-icon module-svg-icon_icon-arrow-2" viewBox="0 0 24 24"><use href="#icon-arrow-2"></use></svg></span></span>
			<!-- <span class="item-news__button ui-button ui-button_circle-gray ui-button_type_circle ui-button_size_circle-default">
				<span class="ui-button__icon ui-button__icon_icon-arrow-2">
					<svg class="ui-button__icon ui-button__icon_circle ui-button__icon_circle-gray module-svg-icon module-svg-icon_icon-arrow-2" viewBox="0 0 24 24">
						<use href="#icon-arrow-2"></use>
					</svg>
				</span>
			</span> -->
		</span>
	</span>
</a>
