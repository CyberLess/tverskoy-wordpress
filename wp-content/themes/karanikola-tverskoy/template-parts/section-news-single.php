<?php
	global $post;
	$title = get_the_title();
	$date = get_the_date('m.y');
	$tags = wp_get_post_terms($post->ID, 'post_tag');
?>

<section class="section-core section-core section-news-single js-fixed-element-section" props="{}">
	<div class="section-news-single__wrapper wrapper">
		<div class="section-news-single__share js-fixed-element">
			<a class="section-news-single__share-button ui-button ui-button_type_purple ui-button_size_default" href="#" data-bs-toggle="modal" data-bs-target="#modal-share">
				<span class="ui-button__icon ui-button__icon_icon-share">
					<svg class="ui-button__icon ui-button__icon_default ui-button__icon_gray module-svg-icon module-svg-icon_icon-share" viewBox="0 0 18 18"><use href="#icon-share"></use></svg>
				</span>
				<span class="ui-button__text">Поделиться</span>
			</a>
		</div>
		<div class="section-news-single__header part-section-header">
			<a class="part-section-header__prev" href="#">
				<svg class="part-section-header__prev-icon module-svg-icon module-svg-icon_icon-arrow" viewBox="0 0 16 16"><use href="#icon-arrow"></use></svg>
				<div class="part-section-header__prev-text">Назад</div>
			</a>
			<div class="section-news-single__flex grid-flex grid-flex_wrap grid-flex_justify-space-beetwen">
				<?php if($title): ?>
					<div class="section-news-single__col section-news-single__col_width-full">
						<div class="section-news-single__title ui-title ui-title_default ui-title_color-gray ui-title_size-default">
							<?php echo $title; ?>
						</div>
					</div>
				<?php endif; ?>

				<div class="section-news-single__col">
					<div class="section-news-single__subtitle section-news-single__subtitle_social ui-title ui-title_default ui-title_color-gray ui-title_size-small">Поделиться</div>
					<div class="section-news-single__social">
						<a class="section-news-single__social-button ui-button ui-button_circle-gray ui-button_type_circle ui-button_size_circle-middle ui-button_type_circle ui-button_size_circle-middle" href="#">
							<span class="ui-button__icon ui-button__icon_icon-vk">
								<svg class="ui-button__icon ui-button__icon_circle ui-button__icon_circle-gray module-svg-icon module-svg-icon_icon-vk" viewBox="0 0 24 24"><use href="#icon-vk"></use></svg>
							</span>
						</a>
						<a class="section-news-single__social-button ui-button ui-button_circle-gray ui-button_type_circle ui-button_size_circle-middle ui-button_type_circle ui-button_size_circle-middle" href="#">
							<span class="ui-button__icon ui-button__icon_icon-tg">
								<svg class="ui-button__icon ui-button__icon_circle ui-button__icon_circle-gray module-svg-icon module-svg-icon_icon-tg" viewBox="0 0 24 24"><use href="#icon-tg"></use></svg>
							</span>
						</a>
						<a class="section-news-single__social-button ui-button ui-button_circle-gray ui-button_type_circle ui-button_size_circle-middle ui-button_type_circle ui-button_size_circle-middle" href="#">
							<span class="ui-button__icon ui-button__icon_icon-whatsapp">
								<svg class="ui-button__icon ui-button__icon_circle ui-button__icon_circle-gray module-svg-icon module-svg-icon_icon-whatsapp" viewBox="0 0 24 24"><use href="#icon-whatsapp"></use></svg>
							</span>
						</a>
					</div>
				</div>

				<div class="section-news-single__col">
					<div class="section-news-single__subtitle ui-title ui-title_default ui-title_color-gray ui-title_size-small">Оглавление</div>
					<div class="section-news-single__anchors"></div>
					<div class="section-news-single__anchors-item"><a class="section-news-single__anchors-link" href="#anchor-1">Новый вкус на&nbsp;Тверском бульваре</a></div>
					<div class="section-news-single__anchors-item"><a class="section-news-single__anchors-link" href="#anchor-2">История фуд-корнера &quot;Бургеры и&nbsp;брускетты&quot;</a></div>
					<div class="section-news-single__anchors-item"><a class="section-news-single__anchors-link" href="#anchor-3">Концепция и&nbsp;атмосфера заведения</a></div>
				</div>

				<div class="section-news-single__col">
					<div class="section-news-single__info">
						<?php if($tags): ?>
							<?php foreach($tags as $tag): ?>
								<div class="section-news-single__info-item"><div class="section-news-single__info-title ui-title ui-title_default ui-title_color-gray ui-title_size-small">
									<?php echo $tag->name; ?>
								</div></div>
							<?php endforeach; ?>
						<?php endif; ?>
						<?php if($date): ?>
							<div class="section-news-single__info-item"><div class="section-news-single__info-title ui-title ui-title_default ui-title_color-gray ui-title_size-small">
								<?php echo $date; ?>
							</div></div>
						<?php endif; ?>
					</div>
				</div>
			</div>
			<div class="section-news-single__subtitle"></div>
			<div class="section-news-single__date"></div>
			<button class="section-news-single__button ui-button _"></button>
		</div>
		<div class="section-news-single__main part-section-main">
			<?php get_template_part('/template-parts/part-section-content', null, null); ?>
		</div>
	</div>
</section>
