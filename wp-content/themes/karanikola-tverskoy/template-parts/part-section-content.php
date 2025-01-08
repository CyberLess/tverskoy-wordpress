<?php
// part-section-content
?>

<?php if( have_rows('constructor') ): ?>
	<div class="section-events-single__content part-section-content">
		<?php while( have_rows('constructor') ): the_row(); ?>
			<?php if( get_row_layout() == 'image' ): ?>
				<?php
					$image = get_sub_field('image');
					$mobileImage = get_sub_field('mobile-image');
				?>
				<?php if($image): ?>
					<div class="part-section-content__item">
						<picture class="part-section-content__image module-photo">
							<?php if($mobileImage): ?>
								<source srcset="<? echo $mobileImage['sizes']['medium_large'] ?>" media="(max-width: 580px)" />
							<?php endif; ?>
							<img class="object-fit-cover" src="<? echo $image['sizes']['hd'] ?>" alt="<?php echo $image['alt'] ?>" loading="lazy" />
						</picture>
					</div>
				<?php endif; ?>
			<?php elseif( get_row_layout() == 'text' ): ?>
				<?php
					$text = get_sub_field('text');
					$name = get_sub_field('contents_name');
					$anchor = get_sub_field('contents_anchor');
				?>
				<?php if($text): ?>
					<div class="part-section-content__item" <?php if($name): ?>	id="<?php echo $anchor; ?>"<?php endif; ?>>
						<div class="part-section-content__flex grid-flex grid-flex_justify-end">
							<div class="part-section-content__col grid-col grid-col_right content">
								<?php echo $text; ?>
							</div>
						</div>
					</div>
				<?php endif; ?>
			<?php endif; ?>
		<?php endwhile; ?>
	</div>
<?php endif; ?>

