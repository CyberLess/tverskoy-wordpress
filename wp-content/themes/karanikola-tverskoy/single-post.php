<?php
get_header();
?>
<main class="part-main-content">
	<div class="modal fade" id="modal-share" aria-hidden="true" role="dialog">
		<div class="modal-dialog modal-dialog_position-bottom">
			<div class="modal-content modal-content_default modal-content_share">
				<div class="modal-body modal-body_default modal-body_share">
					<button class="modal__button-close modal__button-close_default" data-bs-dismiss="modal">
						<svg class="modal__module-svg-icon modal__module-svg-icon_icon-close" viewBox="0 0 24 24"><use href="#icon-close"></use></svg>
					</button>
					<div class="modal__title">Поделитесь статьей</div>
					<div class="modal__social">
						<a class="modal__social-button ui-button ui-button_circle-gray ui-button_type_circle ui-button_size_circle-middle" href="#">
							<span class="ui-button__icon ui-button__icon_icon-vk">
								<svg class="ui-button__icon ui-button__icon_circle ui-button__icon_circle-gray module-svg-icon module-svg-icon_icon-vk" viewBox="0 0 24 24"><use href="#icon-vk"></use></svg>
							</span>
						</a>
						<a class="modal__social-button ui-button ui-button_circle-gray ui-button_type_circle ui-button_size_circle-middle" href="#">
							<span class="ui-button__icon ui-button__icon_icon-tg">
								<svg class="ui-button__icon ui-button__icon_circle ui-button__icon_circle-gray module-svg-icon module-svg-icon_icon-tg" viewBox="0 0 24 24"><use href="#icon-tg"></use></svg>
							</span>
						</a>
						<a class="modal__social-button ui-button ui-button_circle-gray ui-button_type_circle ui-button_size_circle-middle" href="#">
							<span class="ui-button__icon ui-button__icon_icon-whatsapp">
								<svg class="ui-button__icon ui-button__icon_circle ui-button__icon_circle-gray module-svg-icon module-svg-icon_icon-whatsapp" viewBox="0 0 24 24"><use href="#icon-whatsapp"></use></svg>
							</span>
						</a>
					</div>
					<a class="modal__button modal__button_share ui-button ui-button_type_purple ui-button_size_default" href="#">
						<span class="ui-button__icon ui-button__icon_icon-link">
							<svg class="ui-button__icon ui-button__icon_default ui-button__icon_gray module-svg-icon module-svg-icon_icon-link" viewBox="0 0 18 18"><use href="#icon-link"></use></svg>
						</span>
						<span class="ui-button__text">Скопировать ссылку</span>
					</a>
				</div>
			</div>
		</div>
	</div>

	<?php get_template_part('/template-parts/section-news-single', null, null); ?>

	<?php get_template_part('/template-parts/section-news-slider', null, [
		'query' => [
			'post_type' => 'post',
			'posts_per_page' => 5
		]
	]); ?>
</main>
<?php
get_footer();
?>
