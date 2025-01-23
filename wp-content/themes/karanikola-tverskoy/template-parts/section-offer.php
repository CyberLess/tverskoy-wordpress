<?php
$video1 = $args['video1'];
$video2 = $args['video2'];
$addr = $args['addr'];
?>
<section class="section-core section-core section-offer" props="{}">
	<div class="section-offer__wrapper wrapper">
		<div class="section-offer__flex grid-flex grid-flex_justify-center">
			<div class="section-offer__title grid-flex grid-flex_justify-space-beetwen">
				<div class="section-offer__title-part">T</div>
				<div class="section-offer__title-part">V</div>
				<div class="section-offer__title-part">E</div>
				<div class="section-offer__title-part">R</div>
				<div class="section-offer__title-part">S</div>
				<div class="section-offer__title-part">K</div>
				<div class="section-offer__title-part">O</div>
				<div class="section-offer__title-part">Y</div>
			</div>
			<?php if($video1): ?>
				<div class="section-offer__decor">
					<div class="section-offer__decor-part section-offer__decor-part_main section-offer__decor-part_main-left module-video">
						<video class="module-video__video" preload="metadata" autoplay="autoplay" loop="loop" muted="muted" playsinline="playsinline">
							<source src="<?php echo $video1['url'] ?>" type="<?php echo $video1['mime_type'] ?>" />
						</video>
					</div>
					<picture class="section-offer__decor-part section-offer__decor-part_absolute section-offer__decor-part_absolute-left module-photo">
						<img src="<?php echo IMAGES ?>/section-offer-2.png" alt="photo" loading="lazy" />
					</picture>
				</div>
			<?php else: ?>
				<div class="section-offer__decor">
					<picture class="section-offer__decor-part section-offer__decor-part_main section-offer__decor-part_main-left module-photo"><img src="<?php echo IMAGES ?>/section-offer-1.png" alt="photo" loading="lazy" /></picture>
					<picture class="section-offer__decor-part section-offer__decor-part_absolute section-offer__decor-part_absolute-left module-photo">
						<img src="<?php echo IMAGES ?>/section-offer-2.png" alt="photo" loading="lazy" />
					</picture>
				</div>
			<?php endif; ?>
			<?php if($video2): ?>
				<div class="section-offer__decor">
					<div class="section-offer__decor-part section-offer__decor-part_main section-offer__decor-part_main-right module-video">
						<video class="module-video__video" preload="metadata" autoplay="autoplay" loop="loop" muted="muted" playsinline="playsinline">
							<source src="<?php echo $video2['url'] ?>" type="<?php echo $video2['mime_type'] ?>" />
						</video>
					</div>
					<picture class="section-offer__decor-part section-offer__decor-part_absolute section-offer__decor-part_absolute-right module-photo">
						<img src="<?php echo IMAGES ?>/section-offer-4.png" alt="photo" loading="lazy" />
					</picture>
				</div>
			<?php else: ?>
				<div class="section-offer__decor">
					<picture class="section-offer__decor-part section-offer__decor-part_main section-offer__decor-part_main-right module-photo"><img src="<?php echo IMAGES ?>/section-offer-3.png" alt="photo" loading="lazy" /></picture>
					<picture class="section-offer__decor-part section-offer__decor-part_absolute section-offer__decor-part_absolute-right module-photo">
						<img src="<?php echo IMAGES ?>/section-offer-4.png" alt="photo" loading="lazy" />
					</picture>
				</div>
			<?php endif; ?>
		</div>
		<div class="section-offer__bottom">
			<div class="section-offer__flex grid-flex grid-flex_justify-space-beetwen grid-flex_vertical-center">
				<div class="section-offer__info">
					Гастрономический <br />
					кластер в&nbsp;центре Москвы
				</div>
				<div class="section-offer__trigger grid-flex grid-flex_justify-center">
					<svg class="section-offer__trigger-icon module-svg-icon module-svg-icon_icon-arrow" viewBox="0, 0, 10, 14"><use href="#icon-arrow"></use></svg>
				</div>
				<?php if($addr): ?>
					<div class="section-offer__info">
						Адрес кластера: <br />
						<?php echo $addr; ?>
					</div>
				<?php endif; ?>

			</div>
		</div>
	</div>
</section>
