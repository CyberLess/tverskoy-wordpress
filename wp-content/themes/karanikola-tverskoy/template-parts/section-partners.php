<?php
	$title = $args['title'];
	$banner = $args['banner'];
?>
<section class="section-core section-core section-partners" props="{}">
	<div class="section-partners__wrapper wrapper">
		<div class="section-partners__wrapper section-partners__wrapper">
			<?php if($title): ?>
				<div class="section-partners__header part-section-header">
					<div class="section-partners__title ui-title ui-title_default ui-title_color-gray ui-title_size-big">
						<?php echo $title; ?>
					</div>
				</div>
			<?php endif; ?>

			<?php if($banner): ?>
				<?php get_template_part('/template-parts/part-banner', null, [
					'title' => $banner['title'],
					'excerpt' => $banner['excerpt'],
					'picture' => !empty($banner['picture']) && $banner['type'] === 'image' ? $banner['picture']['sizes']['large'] : null,
					'video' => !empty($banner['video']) && $banner['type'] === 'video' ? [
						'url' => $banner['video']['url']
					] : null,
					'class' => "section-partners__banner"
				]); ?>
			<?php endif; ?>
		</div>
	</div>
</section>
