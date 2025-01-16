<?php
// $socials = get_field('socials', 'options');
// $menu = wp_get_nav_sorted_menu_items('main');
?>
<?php
	$phone = get_field('phone', 'options');
	$email = get_field('email', 'options');
	$addr = get_field('addr', 'options');
	$menu = wp_get_nav_sorted_menu_items('main');
?>
<section class="part-modals">
	<div class="modal fade" id="modal-rent" aria-hidden="true" role="dialog">
		<div class="modal-dialog modal-dialog_position-center">
			<div class="modal-content modal-content_default modal-content_default-padding modal-content_default-width">
				<div class="modal-body modal-body_default modal-body_default-padding modal-body_default-width">
					<button class="modal__button-close modal__button-close_default" data-bs-dismiss="modal">
						<svg class="modal__module-svg-icon modal__module-svg-icon_icon-close" viewBox="0 0 24 24"><use href="#icon-close"></use></svg>
					</button>
					<div class="modal__title">Аренда помещения</div>
					<div class="modal__form">
						<?php echo do_shortcode('[contact-form-7 id="9cc34e3" title="Форма - аренда"]'); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade" id="modal-callback" aria-hidden="true" role="dialog">
		<div class="modal-dialog modal-dialog_position-center">
			<div class="modal-content modal-content_default modal-content_default-padding modal-content_default-width">
				<div class="modal-body modal-body_default modal-body_default-padding modal-body_default-width">
					<button class="modal__button-close modal__button-close_default" data-bs-dismiss="modal">
						<svg class="modal__module-svg-icon modal__module-svg-icon_icon-close" viewBox="0 0 24 24"><use href="#icon-close"></use></svg>
					</button>
					<div class="modal__title">Оставьте заявку</div>
					<form class="modal__form js-form">
						<div class="modal__form-fields">
							<label class="modal__form-field form-field js-form-field">
								<span class="form-field__content">
									<input class="form-field__input form-field__input_border form-field__input_border-gray js-form-field-input" type="text" placeholder="Имя" />
									<svg class="form-field__clear js-form-field-clear module-svg-icon module-svg-icon_icon-close" viewBox="0, 0, 20, 20"><use href="#icon-close"></use></svg>
								</span>
								<span class="form-field__error js-form-field-error"></span>
							</label>
							<label class="modal__form-field form-field js-form-field">
								<span class="form-field__content">
									<input class="form-field__input form-field__input_border form-field__input_border-gray js-form-field-input" type="text" placeholder="E-mail" />
									<svg class="form-field__clear js-form-field-clear module-svg-icon module-svg-icon_icon-close" viewBox="0, 0, 20, 20"><use href="#icon-close"></use></svg>
								</span>
								<span class="form-field__error js-form-field-error"></span>
							</label>
							<label class="modal__form-field form-field js-form-field">
								<span class="form-field__content">
									<input class="form-field__input form-field__input_border form-field__input_border-gray js-form-field-input" type="text" placeholder="+7 (___) ___-__-__" />
									<svg class="form-field__clear js-form-field-clear module-svg-icon module-svg-icon_icon-close" viewBox="0, 0, 20, 20"><use href="#icon-close"></use></svg>
								</span>
								<span class="form-field__error js-form-field-error"></span>
							</label>
						</div>
						<button class="modal__button modal__button_submit ui-button ui-button_default ui-button_type_gray ui-button_size_default"><span class="ui-button__text">Отправить</span></button>
						<div class="modal__form-policy">Отправляя данную форму вы соглашаетесь с политикой обработки персональных данных.</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade" id="modal-product" aria-hidden="true" role="dialog">
		<div class="modal-dialog modal-dialog_position-bottom">
			<div class="modal-content modal-content_background-gray modal-content_width-full modal-content_product">
				<div class="modal-body modal-body_background-gray modal-body_width-full modal-body_product">
					<button class="modal__button-close modal__button-close_border" data-bs-dismiss="modal">
						<svg class="modal__module-svg-icon modal__module-svg-icon_icon-close" viewBox="0 0 24 24"><use href="#icon-close"></use></svg>
					</button>
					<div class="modal__product modal-content-product">
						<div class="modal-content-product__title">
							<div class="modal-content-product__title-part js-modal-product-title">Утренний Блин</div>
							<div class="modal-content-product__title-delimeter">•</div>
							<div class="modal-content-product__title-part js-modal-product-floor">1 этаж</div>
						</div>
						<picture class="modal-content-product__scheme module-photo"><img class="js-scheme" src="src/assets/images/schemes/schemes-1.png" alt="photo" loading="lazy" /></picture>
						<div class="modal-content-product__flex grid-flex">
							<div class="modal-content-product__flex-col">
								<span class="modal-content-product__button-back ui-button ui-button_circle-blue ui-button_type_circle ui-button_size_circle-default" data-bs-dismiss="modal">
									<span class="ui-button__icon ui-button__icon_icon-arrow-2">
										<svg class="ui-button__icon ui-button__icon_circle module-svg-icon module-svg-icon_icon-arrow-2" viewBox="0 0 24 24"><use href="#icon-arrow-2"></use></svg>
									</span>
								</span>
							</div>
							<div class="modal-content-product__flex-col">
								<button class="modal-content-product__button modal-content-product__button_submit ui-button ui-button_default ui-button_type_blue ui-button_size_default">
									<span class="ui-button__text">Подробнее</span>
								</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php
		$tags = get_terms([
			'taxonomy' => 'keywords_tag',
			'hide_empty' => false,
		]);

	?>
	<div class="modal fade" id="modal-product-filter" aria-hidden="true" role="dialog">
		<div class="modal-dialog modal-dialog_position-bottom">
			<div class="modal-content modal-content_background-gray modal-content_width-full modal-content_product">
				<div class="modal-body modal-body_background-gray modal-body_width-full modal-body_product">
					<button class="modal__button-close modal__button-close_border" data-bs-dismiss="modal">
						<svg class="modal__module-svg-icon modal__module-svg-icon_icon-close" viewBox="0 0 24 24"><use href="#icon-close"></use></svg>
					</button>
					<form class="modal__filter modal-content-filter">
						<div class="modal-content-filter__flex grid-flex grid-flex_direction-column grid-flex_justify-space-between">
							<div class="modal-content-filter__top">
								<div class="modal-content-filter__title">ресторан</div>
								<picture class="modal-content-filter__scheme module-photo"><img class="js-scheme-filter" src="src/assets/images/schemes/schemes-1.png" alt="photo" loading="lazy" /></picture>
							</div>
							<div class="modal-content-filter__middle">
								<?php if($tags): ?>
									<div class="modal-content-filter__items">
										<?php foreach($tags as $tag): ?>
											<label class="modal-content-filter__item">
												<input class="modal-content-filter__item-checkbox" type="checkbox" value="<?php echo $tag->term_id; ?>" name="taxonomies[keywords_tag]"
												form="filters-form"
												/>
												<span class="modal-content-filter__item-text"><?php echo $tag->name; ?></span>
											</label>
										<?php endforeach; ?>
									</div>
								<?php endif; ?>
							</div>
							<div class="modal-content-filter__bottom">
								<button class="modal-content-filter__button modal-content-filter__button_clear ui-button ui-button_default ui-button_size_default"><span class="ui-button__text">Сбросить</span></button>
								<button class="modal-content-filter__button modal-content-filter__button_submit ui-button ui-button_default ui-button_size_default" form="filters-form" data-bs-dismiss="modal">
									<span class="ui-button__text">Показать</span>
								</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade js-modal-menu" id="modal-menu" aria-hidden="true" role="dialog">
		<div class="modal-dialog modal-dialog_position-center">
			<div class="modal-content modal-content_menu">
				<div class="modal-body modal-body_menu">
					<?php if($menu): ?>
						<div class="modal__menu">
							<?php foreach($menu as $item): ?>
								<div class="modal__menu-item">
									<a class="modal__menu-link" href="<?php echo $item->url; ?>">
										<?php echo $item->title; ?>
									</a>
								</div>
							<?php endforeach; ?>
						</div>
					<?php endif; ?>

					<div class="modal__info">
						<?php if($phone): ?>
							<div class="modal__info-item"><a class="modal__info-value" href="tel:<?php echo $phone; ?>"><?php echo $phone; ?></a></div>
						<?php endif; ?>
						<?php if($email): ?>
							<div class="modal__info-item"><a class="modal__info-value" href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a></div>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
