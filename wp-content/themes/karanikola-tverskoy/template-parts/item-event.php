<?php
	$item = $args['item'];
	$datetime = getDateTimeFormat(get_field('datetime', $item->ID));
	$link = get_the_permalink($item->ID);
	$picture = get_the_post_thumbnail_url( $item->ID, 'medium_large' );
	$name = get_field('name', $item->ID);
	$short_description = get_field('short_description', $item->ID);
	$artist = get_field('artist', $item->ID);
?>
<a class="section-events-catalog__item item-event grid-flex grid-flex grid-flex_wrap js-event-item" href="<?php echo $link; ?>">
	<span class="item-event__col item-event__col_left grid-col grid-col_left">
		<div class="item-event__date ui-title ui-title_default ui-title_color-gray ui-title_size-middle">
			<?php echo $datetime['date']; ?>
			<?php if($datetime['time']): ?>
				<span class="ui-title__date-part">
					/ <?php echo $datetime['time']; ?>
				</span>
			<?php endif; ?>
		</div>
		<?php if($picture): ?>
			<picture class="item-event__image module-photo">
				<img class="object-fit-cover js-event-item-image" src="<?php echo $picture ?>" alt="photo" loading="lazy" />
			</picture>
		<?php endif; ?>
	</span>
	<span class="item-event__col item-event__col_right grid-col grid-col_right">
		<?php if($name): ?>
			<div class="item-event__title ui-title ui-title_default ui-title_color-gray ui-title_size-middle">
				<?php echo $name; ?>
			</div>
		<?php endif; ?>
		<?php if($short_description): ?>
			<span class="item-event__text">
				<?php echo $short_description; ?>
			</span>
		<?php endif; ?>
		<?php if($artist): ?>
			<span class="item-event__author">
				<span class="item-event__author-text">Автор:</span>
				<span class="item-event__author-value">
					<?php echo $artist; ?>
				</span>
			</span>
		<?php endif; ?>
		<?php if($datetime['time']): ?>
			<span class="item-event__time">
				<svg class="item-event__time-icon module-svg-icon module-svg-icon_icon-clock" viewBox="0 0 24 24"><use href="#icon-clock"></use></svg><span class="item-event__time-text">
					<?php echo $datetime['time']; ?>
				</span>
			</span>
		<?php endif; ?>

		<div class="item-event__button ui-button ui-button_type_default ui-button_size_default">
			<span class="ui-button__text">Подробнее</span>
		</div>
	</span>
</a>
