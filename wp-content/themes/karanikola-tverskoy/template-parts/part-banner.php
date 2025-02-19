<?php
	$permalink = $args['permalink'] ?? null;
	$title = $args['title'] ?? '';
	$excerpt = $args['excerpt'] ?? '';
	$picture = $args['picture'] ?? null;
	$video = $args['video'] ?? null;
	$tags = $args['tags'] ?? null;
	$date = $args['date'] ?? null;
	$class = $args['class'] ?? '';
?>
<?php if($permalink): ?>
	<a class="<?php echo $class ?> part-banner" href="<?php echo $permalink ?>">
<?php else: ?>
	<div class="<?php echo $class ?> part-banner" data-bs-toggle="modal" data-bs-target="#modal-callback">
<?php endif; ?>
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
					<span class="part-banner__button ui-button ui-button_circle-gray ui-button_type_circle ui-button_size_circle-default"><span class="ui-button__icon ui-button__icon_icon-arrow-2"><svg class="ui-button__icon ui-button__icon_circle ui-button__icon_circle-gray module-svg-icon module-svg-icon_icon-arrow-2" viewBox="0 0 24 24"><use href="#icon-arrow-2"></use></svg></span></span>
					<!-- <span class="part-banner__button ui-button ui-button_circle-gray ui-button_type_circle ui-button_size_circle-default">
						<span class="ui-button__icon ui-button__icon_icon-arrow-2">
							<svg class="ui-button__icon ui-button__icon_circle ui-button__icon_circle-gray module-svg-icon module-svg-icon_icon-arrow-2" viewBox="0 0 24 24">
								<use href="#icon-arrow-2"></use>
							</svg>
						</span>
					</span> -->
				</span>
			</span>
		</span>
		<span class="part-banner__col part-banner__col_right">
			<?php if($picture): ?>
				<picture class="part-banner__image module-photo">
					<img class="object-fit-cover" src="<?php echo $picture ?>" alt="" loading="lazy" />
				</picture>
			<?php endif; ?>
			<?php if($video): ?>
				<span class="part-banner__module-video module-video">
					<video class="module-video__video" preload="metadata" autoplay="autoplay" loop="loop" muted="muted" playsinline="playsinline">
						<source src="<?php echo $video['url'] ?>" type="video/mp4" />
					</video>
				</span>
			<?php endif; ?>
		</span>
	</span>
<?php if($permalink): ?>
	</a>
<?php else: ?>
	</div>
<?php endif; ?>
