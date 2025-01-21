<?php
$video = $args['video'];
?>
<section class="section-core section-core section-history" props="{}">
	<div class="section-history__wrapper wrapper">
		<div class="section-history__flex grid-flex grid-flex_wrap">
			<div class="section-history__col section-history__col_left grid-col grid-col_left"><div class="section-history__title ui-title ui-title_default ui-title_color-purple ui-title_size-default">Новая история</div></div>
			<div class="section-history__col section-history__col_right grid-col grid-col_right">
				<div class="section-history__subtitle ui-title ui-title_default ui-title_color-purple ui-title_size-middle">Усадьба Салтыкова</div>
				<div class="section-history__text">
					Особняк XVIII века был бережно реконструирован <br />
					и&nbsp;подарил исторические стены для&nbsp;гастрокластера TVERSKOY. <br />
					Более 17 000 м² полностью посвятили еде — и&nbsp;вы можете стать частью нового гастрономического мира в&nbsp;центре Москвы.
				</div>
			</div>
		</div>
		<?php if($video): ?>
			<div class="section-history__image module-video">
				<video class="module-video__video object-fit-cover" preload="metadata" autoplay="autoplay" loop="loop" muted="muted" playsinline="playsinline">
					<source src="<?php echo $video['url'] ?>" type="<?php echo $video['mime_type'] ?>" />
				</video>
			</div>
		<?php endif; ?>

	</div>
</section>
