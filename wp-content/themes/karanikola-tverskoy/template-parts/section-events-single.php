<?php
	global $post;
	$datetime = getDateTimeFormat(get_field('datetime'));
	$datetimeFull = getDateTimeFormat(get_field('datetime'), 'd.m.Y');
	$link = get_the_permalink();
	$picture = get_the_post_thumbnail_url( $post->ID, 'medium_large' );
	$name = get_field('name');
	$short_description = get_field('short_description');
	$artist = get_field('artist');
	$link = get_field('link');
	$title = "{$artist} /  {$datetimeFull['date']}";

	$lising = get_field('events_listing', 'options');
	$listing_url = !empty($lising) ? get_the_permalink($lising->ID) : null;
?>
<section class="section-core section-core section-events-single" props="{}">
	<div class="section-events-single__wrapper wrapper">
		<div class="section-events-single__header part-section-header">
			<?php get_template_part('/template-parts/button-back', null, [
				'url' => $listing_url,
			]); ?>

			<?php if($title): ?>
				<div class="section-events-single__title ui-title ui-title_default ui-title_color-gray ui-title_size-default">
					<?php echo $title; ?>
				</div>
			<?php endif; ?>

			<div class="section-events-single__subtitle">
				<?php echo $short_description; ?> <br>“<?php echo $name ?>”
			</div>
			<div class="section-events-single__date"><?php echo $datetime['date']; ?> / <?php echo $datetime['time']; ?></div>

			<a class="section-events-single__button ui-button ui-button_type_default ui-button_size_default" href="<?php echo $link ?>" target="_blank">
				<span class="ui-button__text">Билеты</span>
			</a>
		</div>
		<div class="section-events-single__main part-section-main">
			<?php get_template_part('/template-parts/part-section-content', null, null); ?>
		</div>
	</div>
</section>
