<?php /* Template Name: Текст */ ?>
<?php
get_header();
?>
<main class="part-main-content">
<?php
	global $post;
	$title = get_the_title();
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
				<?php get_template_part('/template-parts/button-back', null, [
					'url' => get_home_url(),
				]); ?>
				<div class="section-news-single__flex grid-flex grid-flex_wrap grid-flex_justify-space-beetwen">
					<?php if($title): ?>
						<div class="section-news-single__col section-news-single__col_width-full">
							<div class="section-news-single__title ui-title ui-title_default ui-title_color-gray ui-title_size-default">
								<?php echo $title; ?>
							</div>
						</div>
					<?php endif; ?>
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
</main>
<?php
get_footer();
?>
