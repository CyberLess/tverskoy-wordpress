<?php /* Template Name: Каталог */ ?>
<?php
get_header();
?>
<main class="part-main-content part-main-content part-main-content_overflow-auto">
	<section class="section-core section-core section-products-catalog js-fixed-element-section" props="{}">
		<span class="section-products-catalog__filter ui-button ui-button_type_blue ui-button_size_default js-fixed-element" data-bs-toggle="modal" data-bs-target="#modal-product-filter">
			<span class="ui-button__icon ui-button__icon_icon-filter">
				<svg class="ui-button__icon ui-button__icon_default module-svg-icon module-svg-icon_icon-filter" viewBox="0 0 16 16"><use href="#icon-filter"></use></svg>
			</span>
			<span class="ui-button__text">Фильтры</span>
		</span>
		<div class="section-products-catalog__flex grid-flex grid-flex_justify-space-beetwen">
			<div class="section-products-catalog__col section-products-catalog__col_left grid-col grid-col_left">
				<div class="section-products-catalog__flex grid-flex grid-flex_wrap grid-flex_justify-space-beetwen">
					<div class="section-products-catalog__title ui-title ui-title_default ui-title_color-purple ui-title_size-default">КУХНИ МИРА</div>
					<div class="section-products-catalog__floor ui-title ui-title_default ui-title_color-purple ui-title_size-middle">1 этаж</div>
				</div>
				<div class="section-products-catalog__group-buttons ui-group-buttons">
					<div class="ui-group-buttons__flex grid-flex grid-flex_width-full">
						<span class="ui-group-buttons__button ui-button ui-button_type_purple-border-active ui-button_type_purple-border ui-button_size_middle"><span class="ui-button__text">1 этаж</span></span>
						<a class="ui-group-buttons__button ui-button ui-button_type_purple-border ui-button_size_middle" href="#"><span class="ui-button__text">2 этаж</span></a>
						<a class="ui-group-buttons__button ui-button ui-button_type_purple-border ui-button_size_middle" href="#"><span class="ui-button__text">3 этаж</span></a>
					</div>
				</div>
				<picture class="section-products-catalog__schemes module-photo"><img class="js-scheme-main" src="src/assets/images/schemes/schemes-1.png" alt="photo" loading="lazy" /></picture>
			</div>
			<div class="section-products-catalog__col section-products-catalog__col_right grid-col grid-col_right">
				<div class="section-products-catalog__items">
					<a class="section-products-catalog__item item-product js-item-product" href="#" data-event="hover,click" data-floor="1 этаж" data-title="Утрений блин" data-scheme="src/assets/images/schemes/schemes-1.png">
						<span class="item-product__flex grid-flex grid-flex_justify-space-beetwen">
							<span class="item-product__col item-product__col_left">
								<span class="item-product__info">
									<span class="item-product__title ui-title ui-title_default ui-title_color-purple ui-title_size-middle">Утрений блин</span>
									<span class="item-product__text">
										Coffeeshop Company — международная сеть кофеен, часть группы компаний «Schärf Group», специализирующаяся на&nbsp;продаже кофе, чая, горячих и&nbsp;холодных напитков, закусок и&nbsp;десертов.
									</span>
								</span>
								<span class="item-product__button item-product__button_desktop ui-button ui-button_circle-purple ui-button_type_circle ui-button_size_circle-default">
									<span class="ui-button__icon ui-button__icon_icon-arrow-2">
										<svg class="ui-button__icon ui-button__icon_circle ui-button__icon_circle-purple module-svg-icon module-svg-icon_icon-arrow-2" viewBox="0 0 24 24"><use href="#icon-arrow-2"></use></svg>
									</span>
								</span>
							</span>
							<span class="item-product__col item-product__col_right">
								<picture class="item-product__image module-photo"><img src="<?php echo IMAGES ?>/item-product-1.png" alt="photo" loading="lazy" /></picture>
								<span class="item-product__button item-product__button_mobile ui-button ui-button_circle-gray-background ui-button_type_circle ui-button_size_circle-default">
									<span class="ui-button__icon ui-button__icon_icon-map">
										<svg class="ui-button__icon ui-button__icon_circle ui-button__icon_circle-blue module-svg-icon module-svg-icon_icon-map" viewBox="0 0 20 20"><use href="#icon-map"></use></svg>
									</span>
								</span>
							</span>
						</span>
					</a>
					<a class="section-products-catalog__item item-product js-item-product" href="#" data-event="hover,click" data-floor="1 этаж" data-title="Утрений блин 2" data-scheme="src/assets/images/schemes/schemes-2.png">
						<span class="item-product__flex grid-flex grid-flex_justify-space-beetwen">
							<span class="item-product__col item-product__col_left">
								<span class="item-product__info">
									<span class="item-product__title ui-title ui-title_default ui-title_color-purple ui-title_size-middle">Утрений блин 2</span>
									<span class="item-product__text">
										Coffeeshop Company — международная сеть кофеен, часть группы компаний «Schärf Group», специализирующаяся на&nbsp;продаже кофе, чая, горячих и&nbsp;холодных напитков, закусок и&nbsp;десертов.
									</span>
								</span>
								<span class="item-product__button item-product__button_desktop ui-button ui-button_circle-purple ui-button_type_circle ui-button_size_circle-default">
									<span class="ui-button__icon ui-button__icon_icon-arrow-2">
										<svg class="ui-button__icon ui-button__icon_circle ui-button__icon_circle-purple module-svg-icon module-svg-icon_icon-arrow-2" viewBox="0 0 24 24"><use href="#icon-arrow-2"></use></svg>
									</span>
								</span>
							</span>
							<span class="item-product__col item-product__col_right">
								<picture class="item-product__image module-photo"><img src="<?php echo IMAGES ?>/item-product-1.png" alt="photo" loading="lazy" /></picture>
								<span class="item-product__button item-product__button_mobile ui-button ui-button_circle-gray-background ui-button_type_circle ui-button_size_circle-default">
									<span class="ui-button__icon ui-button__icon_icon-map">
										<svg class="ui-button__icon ui-button__icon_circle ui-button__icon_circle-blue module-svg-icon module-svg-icon_icon-map" viewBox="0 0 20 20"><use href="#icon-map"></use></svg>
									</span>
								</span>
							</span>
						</span>
					</a>
					<a class="section-products-catalog__item item-product js-item-product" href="#" data-event="hover,click" data-floor="1 этаж" data-title="Утрений блин" data-scheme="src/assets/images/schemes/schemes-2.png">
						<span class="item-product__flex grid-flex grid-flex_justify-space-beetwen">
							<span class="item-product__col item-product__col_left">
								<span class="item-product__info">
									<span class="item-product__title ui-title ui-title_default ui-title_color-purple ui-title_size-middle">Утрений блин</span>
									<span class="item-product__text">
										Coffeeshop Company — международная сеть кофеен, часть группы компаний «Schärf Group», специализирующаяся на&nbsp;продаже кофе, чая, горячих и&nbsp;холодных напитков, закусок и&nbsp;десертов.
									</span>
								</span>
								<span class="item-product__button item-product__button_desktop ui-button ui-button_circle-purple ui-button_type_circle ui-button_size_circle-default">
									<span class="ui-button__icon ui-button__icon_icon-arrow-2">
										<svg class="ui-button__icon ui-button__icon_circle ui-button__icon_circle-purple module-svg-icon module-svg-icon_icon-arrow-2" viewBox="0 0 24 24"><use href="#icon-arrow-2"></use></svg>
									</span>
								</span>
							</span>
							<span class="item-product__col item-product__col_right">
								<picture class="item-product__image item-product__image_border-radius module-photo"><img src="<?php echo IMAGES ?>/item-product-1.png" alt="photo" loading="lazy" /></picture>
								<span class="item-product__button item-product__button_mobile ui-button ui-button_circle-gray-background ui-button_type_circle ui-button_size_circle-default">
									<span class="ui-button__icon ui-button__icon_icon-map">
										<svg class="ui-button__icon ui-button__icon_circle ui-button__icon_circle-blue module-svg-icon module-svg-icon_icon-map" viewBox="0 0 20 20"><use href="#icon-map"></use></svg>
									</span>
								</span>
							</span>
						</span>
					</a>
					<a class="section-products-catalog__item item-product js-item-product" href="#" data-event="hover,click" data-floor="1 этаж" data-title="Утрений блин" data-scheme="src/assets/images/schemes/schemes-1.png">
						<span class="item-product__flex grid-flex grid-flex_justify-space-beetwen">
							<span class="item-product__col item-product__col_left">
								<span class="item-product__info">
									<span class="item-product__title ui-title ui-title_default ui-title_color-purple ui-title_size-middle">Утрений блин</span>
									<span class="item-product__text">
										Coffeeshop Company — международная сеть кофеен, часть группы компаний «Schärf Group», специализирующаяся на&nbsp;продаже кофе, чая, горячих и&nbsp;холодных напитков, закусок и&nbsp;десертов.
									</span>
								</span>
								<span class="item-product__button item-product__button_desktop ui-button ui-button_circle-purple ui-button_type_circle ui-button_size_circle-default">
									<span class="ui-button__icon ui-button__icon_icon-arrow-2">
										<svg class="ui-button__icon ui-button__icon_circle ui-button__icon_circle-purple module-svg-icon module-svg-icon_icon-arrow-2" viewBox="0 0 24 24"><use href="#icon-arrow-2"></use></svg>
									</span>
								</span>
							</span>
							<span class="item-product__col item-product__col_right">
								<picture class="item-product__image module-photo"><img src="<?php echo IMAGES ?>/item-product-1.png" alt="photo" loading="lazy" /></picture>
								<span class="item-product__button item-product__button_mobile ui-button ui-button_circle-gray-background ui-button_type_circle ui-button_size_circle-default">
									<span class="ui-button__icon ui-button__icon_icon-map">
										<svg class="ui-button__icon ui-button__icon_circle ui-button__icon_circle-blue module-svg-icon module-svg-icon_icon-map" viewBox="0 0 20 20"><use href="#icon-map"></use></svg>
									</span>
								</span>
							</span>
						</span>
					</a>
					<a class="section-products-catalog__item item-product js-item-product" href="#" data-event="hover,click" data-floor="1 этаж" data-title="Утрений блин" data-scheme="src/assets/images/schemes/schemes-2.png">
						<span class="item-product__flex grid-flex grid-flex_justify-space-beetwen">
							<span class="item-product__col item-product__col_left">
								<span class="item-product__info">
									<span class="item-product__title ui-title ui-title_default ui-title_color-purple ui-title_size-middle">Утрений блин</span>
									<span class="item-product__text">
										Coffeeshop Company — международная сеть кофеен, часть группы компаний «Schärf Group», специализирующаяся на&nbsp;продаже кофе, чая, горячих и&nbsp;холодных напитков, закусок и&nbsp;десертов.
									</span>
								</span>
								<span class="item-product__button item-product__button_desktop ui-button ui-button_circle-purple ui-button_type_circle ui-button_size_circle-default">
									<span class="ui-button__icon ui-button__icon_icon-arrow-2">
										<svg class="ui-button__icon ui-button__icon_circle ui-button__icon_circle-purple module-svg-icon module-svg-icon_icon-arrow-2" viewBox="0 0 24 24"><use href="#icon-arrow-2"></use></svg>
									</span>
								</span>
							</span>
							<span class="item-product__col item-product__col_right">
								<picture class="item-product__image item-product__image_border-radius module-photo"><img src="<?php echo IMAGES ?>/item-product-1.png" alt="photo" loading="lazy" /></picture>
								<span class="item-product__button item-product__button_mobile ui-button ui-button_circle-gray-background ui-button_type_circle ui-button_size_circle-default">
									<span class="ui-button__icon ui-button__icon_icon-map">
										<svg class="ui-button__icon ui-button__icon_circle ui-button__icon_circle-blue module-svg-icon module-svg-icon_icon-map" viewBox="0 0 20 20"><use href="#icon-map"></use></svg>
									</span>
								</span>
							</span>
						</span>
					</a>
				</div>
			</div>
		</div>
	</section>
</main>
<?php
get_footer();
?>
