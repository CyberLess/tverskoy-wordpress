<?php /* Template Name: Главная */ ?>
<?php
get_header();
?>
<main class="part-main-content
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
				<div class="section-offer__decor">
					<picture class="section-offer__decor-part section-offer__decor-part_main section-offer__decor-part_main-left module-photo"><img src="<?php echo IMAGES ?>/section-offer-1.png" alt="photo" loading="lazy" /></picture>
					<picture class="section-offer__decor-part section-offer__decor-part_absolute section-offer__decor-part_absolute-left module-photo">
						<img src="<?php echo IMAGES ?>/section-offer-2.png" alt="photo" loading="lazy" />
					</picture>
				</div>
				<div class="section-offer__decor">
					<picture class="section-offer__decor-part section-offer__decor-part_main section-offer__decor-part_main-right module-photo"><img src="<?php echo IMAGES ?>/section-offer-3.png" alt="photo" loading="lazy" /></picture>
					<picture class="section-offer__decor-part section-offer__decor-part_absolute section-offer__decor-part_absolute-right module-photo">
						<img src="<?php echo IMAGES ?>/section-offer-4.png" alt="photo" loading="lazy" />
					</picture>
				</div>
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
					<div class="section-offer__info">
						Адрес кластера: <br />
						Тверской бульвар 27, стр. 6
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="section-core section-core section-about" props="{}">
		<div class="section-about__wrapper wrapper">
			<div class="section-about__title ui-title ui-title_default ui-title_color-gray ui-title_size-small">О кластере</div>
			<div class="section-about__line"></div>
			<div class="section-about__text">
				<span class="section-about__text-part section-about__text-part_gray">Добро пожаловать в&nbsp;TVERSKOY —гастрономический кластер</span>
				<span class="section-about__text-part section-about__text-part_default">
					в&nbsp;центре Москвы, где традиции встречаются с&nbsp;современностью. Откройте для&nbsp;себя уникальные блюда, атмосферу и&nbsp;виды на&nbsp;Тверской бульвар.
				</span>
			</div>
			<div class="section-about__decors grid-flex grid-flex_justify-center grid-flex_vertical-bottom">
				<div class="section-about__decors-item"></div>
				<div class="section-about__decors-item"></div>
				<div class="section-about__decors-item"></div>
				<picture class="section-about__decors-image module-photo"><img src="<?php echo IMAGES ?>/section-about-1.png" alt="photo" loading="lazy" /></picture>
				<div class="section-about__decors-item"></div>
				<div class="section-about__decors-item section-about__decors-item_border-radius"></div>
				<div class="section-about__decors-item"></div>
			</div>
		</div>
	</section>
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
			<picture class="section-history__image module-photo"><img class="object-fit-cover" src="<?php echo IMAGES ?>/section-history-1.png" alt="photo" loading="lazy" /></picture>
		</div>
	</section>
	<section class="section-core section-core section-products-slider js-products-slider" props="{}">
		<div class="section-products-slider__main js-products-slider-main">
			<div class="swiper-wrapper">
				<div class="section-products-slider__main-slide swiper-slide js-products-slider-main-slide">
					<div class="section-products-slider__flex grid-flex grid-flex_justify-space-beetwen grid-flex_height-full">
						<div class="section-products-slider__col section-products-slider__col_left grid-col grid-col_left">
							<div class="section-products-slider__flex grid-flex grid-flex_wrap grid-flex_justify-space-beetwen">
								<div class="section-products-slider__title ui-title ui-title_default ui-title_color-purple ui-title_size-default">КУХНИ МИРА</div>
								<div class="section-products-slider__floor ui-title ui-title_default ui-title_color-purple ui-title_size-middle">1 этаж</div>
							</div>
							<div class="section-products-slider__flex grid-flex">
								<div class="section-products-slider__col section-products-slider__col_inner-left">
									<div class="section-products-slider__subtitle">Популярные заведения</div>
									<div class="section-products-slider__pagination js-products-slider-inner-tabs-pagination">
										<div class="section-products-slider__pagination-item js-products-slider-tabs-pagination-button">Утренний Блин</div>
										<div class="section-products-slider__pagination-item js-products-slider-tabs-pagination-button">Кофешоп есть зерно</div>
										<div class="section-products-slider__pagination-item js-products-slider-tabs-pagination-button">Сэндвич-бар</div>
										<div class="section-products-slider__pagination-item js-products-slider-tabs-pagination-button">Смузи и&nbsp;Фреши</div>
										<div class="section-products-slider__pagination-item js-products-slider-tabs-pagination-button">Завтрак на&nbsp;ходу</div>
										<div class="section-products-slider__pagination-item js-products-slider-tabs-pagination-button">Багетная Лавка</div>
										<div class="section-products-slider__pagination-item js-products-slider-tabs-pagination-button">Суши Экспресс</div>
										<div class="section-products-slider__pagination-item js-products-slider-tabs-pagination-button">Пицца Мини</div>
										<div class="section-products-slider__pagination-item js-products-slider-tabs-pagination-button">Салат-Бар</div>
										<div class="section-products-slider__pagination-item js-products-slider-tabs-pagination-button">Вафельный Дом</div>
										<a class="section-products-slider__more" href="#">Смотреть все</a>
									</div>
								</div>
								<div class="section-products-slider__col section-products-slider__col_inner-right">
									<div class="section-products-slider__schemes">
										<picture class="section-products-slider__schemes-source module-photo"><img class="js-scheme" src="src/assets/images/schemes/schemes-1.png" alt="photo" loading="lazy" /></picture>
									</div>
								</div>
							</div>
							<div class="section-products-slider__control grid-flex grid-flex_justify-space-beetwen grid-flex_vertical-center">
								<div class="section-products-slider__group-buttons ui-group-buttons js-products-slider-main-tabs-pagination">
									<div class="ui-group-buttons__flex grid-flex grid-flex_width-full">
										<span class="ui-group-buttons__button ui-button ui-button_type_purple-border-active ui-button_type_purple-border ui-button_size_middle js-products-slider-tabs-pagination-button">
											<span class="ui-button__text">1 этаж</span>
										</span>
										<span class="ui-group-buttons__button ui-button ui-button_type_purple-border ui-button_size_middle js-products-slider-tabs-pagination-button"><span class="ui-button__text">2 этаж</span></span>
										<span class="ui-group-buttons__button ui-button ui-button_type_purple-border ui-button_size_middle js-products-slider-tabs-pagination-button"><span class="ui-button__text">3 этаж</span></span>
									</div>
								</div>
								<div class="section-products-slider__slider-navigation slider-navigation slider-navigation_blue">
									<button class="slider-navigation__slider-button slider-button slider-button_blue slider-button_prev js-slider-default-navigation-prev">
										<svg class="slider-button__icon module-svg-icon module-svg-icon_icon-arrow" viewBox="0 0 60 60"><use href="#icon-arrow"></use></svg>
									</button>
									<button class="slider-navigation__slider-button slider-button slider-button_blue slider-button_next js-slider-default-navigation-next">
										<svg class="slider-button__icon module-svg-icon module-svg-icon_icon-arrow" viewBox="0 0 60 60"><use href="#icon-arrow"></use></svg>
									</button>
								</div>
							</div>
						</div>
						<div class="section-products-slider__col section-products-slider__col_right grid-col grid-col_right">
							<div class="section-products-slider__title section-products-slider__title_mobile ui-title ui-title_default ui-title_color-purple ui-title_size-default ui-title_color-purple ui-title_size-default">
								КУХНИ МИРА
							</div>
							<div class="section-products-slider__pagination-index slider-pagination slider-pagination_purple">
								<div class="slider-pagination__bullet js-slider-default-pagination-bullet"></div>
								<div class="slider-pagination__index js-slider-default-pagination-index"></div>
							</div>
							<div class="section-products-slider__inner js-products-slider-inner">
								<div class="swiper-wrapper">
									<div class="section-products-slider__inner-slide swiper-slide">
										<a
											class="section-products-slider__item item-product-slider js-item-product"
											href="#"
											data-scheme="src/assets/images/schemes/schemes-1.png"
											data-floor="1 этаж"
											data-title="Утренний Блин"
											data-event="click"
										>
											<span class="item-product-slider__image">
												<picture class="item-product-slider__image-source item-product-slider__image-source_border-radius module-photo">
													<img src="<?php echo IMAGES ?>/item-product-slider-1.png" alt="photo" loading="lazy" />
												</picture>
												<span class="item-product-slider__button item-product-slider__button_desktop ui-button ui-button_circle-red ui-button_type_circle ui-button_size_circle-default">
													<span class="ui-button__icon ui-button__icon_icon-arrow-2">
														<svg class="ui-button__icon ui-button__icon_circle ui-button__icon_circle-gray module-svg-icon module-svg-icon_icon-arrow-2" viewBox="0 0 24 24">
															<use href="#icon-arrow-2"></use>
														</svg>
													</span>
												</span>
												<span class="item-product-slider__button item-product-slider__button_mobile ui-button ui-button_circle-gray-background ui-button_type_circle ui-button_size_circle-default">
													<span class="ui-button__icon ui-button__icon_icon-map">
														<svg class="ui-button__icon ui-button__icon_circle ui-button__icon_circle-blue module-svg-icon module-svg-icon_icon-map" viewBox="0 0 20 20"><use href="#icon-map"></use></svg>
													</span>
												</span>
											</span>
											<span class="item-product-slider__title">Утренний Блин</span>
											<span class="item-product-slider__text">
												Coffeeshop Company — международная <br />
												сеть кофеен, часть группы компаний «Schärf Group», специализирующаяся на&nbsp;продаже кофе, чая, горячих и&nbsp;холодных напитков, закусок и&nbsp;десертов.
											</span>
										</a>
									</div>
									<div class="section-products-slider__inner-slide swiper-slide">
										<a
											class="section-products-slider__item item-product-slider js-item-product"
											href="#"
											data-scheme="src/assets/images/schemes/schemes-2.png"
											data-floor="1 этаж"
											data-title="Кофешоп есть зерно"
											data-event="click"
										>
											<span class="item-product-slider__image">
												<picture class="item-product-slider__image-source module-photo"><img src="<?php echo IMAGES ?>/item-product-slider-1.png" alt="photo" loading="lazy" /></picture>
												<span class="item-product-slider__button item-product-slider__button_desktop ui-button ui-button_circle-red ui-button_type_circle ui-button_size_circle-default">
													<span class="ui-button__icon ui-button__icon_icon-arrow-2">
														<svg class="ui-button__icon ui-button__icon_circle ui-button__icon_circle-gray module-svg-icon module-svg-icon_icon-arrow-2" viewBox="0 0 24 24">
															<use href="#icon-arrow-2"></use>
														</svg>
													</span>
												</span>
												<span class="item-product-slider__button item-product-slider__button_mobile ui-button ui-button_circle-gray-background ui-button_type_circle ui-button_size_circle-default">
													<span class="ui-button__icon ui-button__icon_icon-map">
														<svg class="ui-button__icon ui-button__icon_circle ui-button__icon_circle-blue module-svg-icon module-svg-icon_icon-map" viewBox="0 0 20 20"><use href="#icon-map"></use></svg>
													</span>
												</span>
											</span>
											<span class="item-product-slider__title">Кофешоп есть зерно</span>
											<span class="item-product-slider__text">
												Coffeeshop Company — международная <br />
												сеть кофеен, часть группы компаний «Schärf Group», специализирующаяся на&nbsp;продаже кофе, чая, горячих и&nbsp;холодных напитков, закусок и&nbsp;десертов.
											</span>
										</a>
									</div>
									<div class="section-products-slider__inner-slide swiper-slide">
										<a
											class="section-products-slider__item item-product-slider js-item-product"
											href="#"
											data-scheme="src/assets/images/schemes/schemes-1.png"
											data-floor="1 этаж"
											data-title="Сэндвич-бар"
											data-event="click"
										>
											<span class="item-product-slider__image">
												<picture class="item-product-slider__image-source item-product-slider__image-source_border-radius module-photo">
													<img src="<?php echo IMAGES ?>/item-product-slider-1.png" alt="photo" loading="lazy" />
												</picture>
												<span class="item-product-slider__button item-product-slider__button_desktop ui-button ui-button_circle-red ui-button_type_circle ui-button_size_circle-default">
													<span class="ui-button__icon ui-button__icon_icon-arrow-2">
														<svg class="ui-button__icon ui-button__icon_circle ui-button__icon_circle-gray module-svg-icon module-svg-icon_icon-arrow-2" viewBox="0 0 24 24">
															<use href="#icon-arrow-2"></use>
														</svg>
													</span>
												</span>
												<span class="item-product-slider__button item-product-slider__button_mobile ui-button ui-button_circle-gray-background ui-button_type_circle ui-button_size_circle-default">
													<span class="ui-button__icon ui-button__icon_icon-map">
														<svg class="ui-button__icon ui-button__icon_circle ui-button__icon_circle-blue module-svg-icon module-svg-icon_icon-map" viewBox="0 0 20 20"><use href="#icon-map"></use></svg>
													</span>
												</span>
											</span>
											<span class="item-product-slider__title">Сэндвич-бар</span>
											<span class="item-product-slider__text">
												Coffeeshop Company — международная <br />
												сеть кофеен, часть группы компаний «Schärf Group», специализирующаяся на&nbsp;продаже кофе, чая, горячих и&nbsp;холодных напитков, закусок и&nbsp;десертов.
											</span>
										</a>
									</div>
									<div class="section-products-slider__inner-slide swiper-slide">
										<a
											class="section-products-slider__item item-product-slider js-item-product"
											href="#"
											data-scheme="src/assets/images/schemes/schemes-2.png"
											data-floor="1 этаж"
											data-title="Смузи и&nbsp;Фреши"
											data-event="click"
										>
											<span class="item-product-slider__image">
												<picture class="item-product-slider__image-source module-photo"><img src="<?php echo IMAGES ?>/item-product-slider-1.png" alt="photo" loading="lazy" /></picture>
												<span class="item-product-slider__button item-product-slider__button_desktop ui-button ui-button_circle-red ui-button_type_circle ui-button_size_circle-default">
													<span class="ui-button__icon ui-button__icon_icon-arrow-2">
														<svg class="ui-button__icon ui-button__icon_circle ui-button__icon_circle-gray module-svg-icon module-svg-icon_icon-arrow-2" viewBox="0 0 24 24">
															<use href="#icon-arrow-2"></use>
														</svg>
													</span>
												</span>
												<span class="item-product-slider__button item-product-slider__button_mobile ui-button ui-button_circle-gray-background ui-button_type_circle ui-button_size_circle-default">
													<span class="ui-button__icon ui-button__icon_icon-map">
														<svg class="ui-button__icon ui-button__icon_circle ui-button__icon_circle-blue module-svg-icon module-svg-icon_icon-map" viewBox="0 0 20 20"><use href="#icon-map"></use></svg>
													</span>
												</span>
											</span>
											<span class="item-product-slider__title">Смузи и&nbsp;Фреши</span>
											<span class="item-product-slider__text">
												Coffeeshop Company — международная <br />
												сеть кофеен, часть группы компаний «Schärf Group», специализирующаяся на&nbsp;продаже кофе, чая, горячих и&nbsp;холодных напитков, закусок и&nbsp;десертов.
											</span>
										</a>
									</div>
									<div class="section-products-slider__inner-slide swiper-slide">
										<a
											class="section-products-slider__item item-product-slider js-item-product"
											href="#"
											data-scheme="src/assets/images/schemes/schemes-1.png"
											data-floor="1 этаж"
											data-title="Завтрак на&nbsp;ходу"
											data-event="click"
										>
											<span class="item-product-slider__image">
												<picture class="item-product-slider__image-source item-product-slider__image-source_border-radius module-photo">
													<img src="<?php echo IMAGES ?>/item-product-slider-1.png" alt="photo" loading="lazy" />
												</picture>
												<span class="item-product-slider__button item-product-slider__button_desktop ui-button ui-button_circle-red ui-button_type_circle ui-button_size_circle-default">
													<span class="ui-button__icon ui-button__icon_icon-arrow-2">
														<svg class="ui-button__icon ui-button__icon_circle ui-button__icon_circle-gray module-svg-icon module-svg-icon_icon-arrow-2" viewBox="0 0 24 24">
															<use href="#icon-arrow-2"></use>
														</svg>
													</span>
												</span>
												<span class="item-product-slider__button item-product-slider__button_mobile ui-button ui-button_circle-gray-background ui-button_type_circle ui-button_size_circle-default">
													<span class="ui-button__icon ui-button__icon_icon-map">
														<svg class="ui-button__icon ui-button__icon_circle ui-button__icon_circle-blue module-svg-icon module-svg-icon_icon-map" viewBox="0 0 20 20"><use href="#icon-map"></use></svg>
													</span>
												</span>
											</span>
											<span class="item-product-slider__title">Завтрак на&nbsp;ходу</span>
											<span class="item-product-slider__text">
												Coffeeshop Company — международная <br />
												сеть кофеен, часть группы компаний «Schärf Group», специализирующаяся на&nbsp;продаже кофе, чая, горячих и&nbsp;холодных напитков, закусок и&nbsp;десертов.
											</span>
										</a>
									</div>
									<div class="section-products-slider__inner-slide swiper-slide">
										<a
											class="section-products-slider__item item-product-slider js-item-product"
											href="#"
											data-scheme="src/assets/images/schemes/schemes-2.png"
											data-floor="1 этаж"
											data-title="Багетная Лавка"
											data-event="click"
										>
											<span class="item-product-slider__image">
												<picture class="item-product-slider__image-source module-photo"><img src="<?php echo IMAGES ?>/item-product-slider-1.png" alt="photo" loading="lazy" /></picture>
												<span class="item-product-slider__button item-product-slider__button_desktop ui-button ui-button_circle-red ui-button_type_circle ui-button_size_circle-default">
													<span class="ui-button__icon ui-button__icon_icon-arrow-2">
														<svg class="ui-button__icon ui-button__icon_circle ui-button__icon_circle-gray module-svg-icon module-svg-icon_icon-arrow-2" viewBox="0 0 24 24">
															<use href="#icon-arrow-2"></use>
														</svg>
													</span>
												</span>
												<span class="item-product-slider__button item-product-slider__button_mobile ui-button ui-button_circle-gray-background ui-button_type_circle ui-button_size_circle-default">
													<span class="ui-button__icon ui-button__icon_icon-map">
														<svg class="ui-button__icon ui-button__icon_circle ui-button__icon_circle-blue module-svg-icon module-svg-icon_icon-map" viewBox="0 0 20 20"><use href="#icon-map"></use></svg>
													</span>
												</span>
											</span>
											<span class="item-product-slider__title">Багетная Лавка</span>
											<span class="item-product-slider__text">
												Coffeeshop Company — международная <br />
												сеть кофеен, часть группы компаний «Schärf Group», специализирующаяся на&nbsp;продаже кофе, чая, горячих и&nbsp;холодных напитков, закусок и&nbsp;десертов.
											</span>
										</a>
									</div>
									<div class="section-products-slider__inner-slide swiper-slide">
										<a
											class="section-products-slider__item item-product-slider js-item-product"
											href="#"
											data-scheme="src/assets/images/schemes/schemes-1.png"
											data-floor="1 этаж"
											data-title="Суши Экспресс"
											data-event="click"
										>
											<span class="item-product-slider__image">
												<picture class="item-product-slider__image-source item-product-slider__image-source_border-radius module-photo">
													<img src="<?php echo IMAGES ?>/item-product-slider-1.png" alt="photo" loading="lazy" />
												</picture>
												<span class="item-product-slider__button item-product-slider__button_desktop ui-button ui-button_circle-red ui-button_type_circle ui-button_size_circle-default">
													<span class="ui-button__icon ui-button__icon_icon-arrow-2">
														<svg class="ui-button__icon ui-button__icon_circle ui-button__icon_circle-gray module-svg-icon module-svg-icon_icon-arrow-2" viewBox="0 0 24 24">
															<use href="#icon-arrow-2"></use>
														</svg>
													</span>
												</span>
												<span class="item-product-slider__button item-product-slider__button_mobile ui-button ui-button_circle-gray-background ui-button_type_circle ui-button_size_circle-default">
													<span class="ui-button__icon ui-button__icon_icon-map">
														<svg class="ui-button__icon ui-button__icon_circle ui-button__icon_circle-blue module-svg-icon module-svg-icon_icon-map" viewBox="0 0 20 20"><use href="#icon-map"></use></svg>
													</span>
												</span>
											</span>
											<span class="item-product-slider__title">Суши Экспресс</span>
											<span class="item-product-slider__text">
												Coffeeshop Company — международная <br />
												сеть кофеен, часть группы компаний «Schärf Group», специализирующаяся на&nbsp;продаже кофе, чая, горячих и&nbsp;холодных напитков, закусок и&nbsp;десертов.
											</span>
										</a>
									</div>
									<div class="section-products-slider__inner-slide swiper-slide">
										<a
											class="section-products-slider__item item-product-slider js-item-product"
											href="#"
											data-scheme="src/assets/images/schemes/schemes-2.png"
											data-floor="1 этаж"
											data-title="Пицца Мини"
											data-event="click"
										>
											<span class="item-product-slider__image">
												<picture class="item-product-slider__image-source module-photo"><img src="<?php echo IMAGES ?>/item-product-slider-1.png" alt="photo" loading="lazy" /></picture>
												<span class="item-product-slider__button item-product-slider__button_desktop ui-button ui-button_circle-red ui-button_type_circle ui-button_size_circle-default">
													<span class="ui-button__icon ui-button__icon_icon-arrow-2">
														<svg class="ui-button__icon ui-button__icon_circle ui-button__icon_circle-gray module-svg-icon module-svg-icon_icon-arrow-2" viewBox="0 0 24 24">
															<use href="#icon-arrow-2"></use>
														</svg>
													</span>
												</span>
												<span class="item-product-slider__button item-product-slider__button_mobile ui-button ui-button_circle-gray-background ui-button_type_circle ui-button_size_circle-default">
													<span class="ui-button__icon ui-button__icon_icon-map">
														<svg class="ui-button__icon ui-button__icon_circle ui-button__icon_circle-blue module-svg-icon module-svg-icon_icon-map" viewBox="0 0 20 20"><use href="#icon-map"></use></svg>
													</span>
												</span>
											</span>
											<span class="item-product-slider__title">Пицца Мини</span>
											<span class="item-product-slider__text">
												Coffeeshop Company — международная <br />
												сеть кофеен, часть группы компаний «Schärf Group», специализирующаяся на&nbsp;продаже кофе, чая, горячих и&nbsp;холодных напитков, закусок и&nbsp;десертов.
											</span>
										</a>
									</div>
									<div class="section-products-slider__inner-slide swiper-slide">
										<a
											class="section-products-slider__item item-product-slider js-item-product"
											href="#"
											data-scheme="src/assets/images/schemes/schemes-1.png"
											data-floor="1 этаж"
											data-title="Салат-Бар"
											data-event="click"
										>
											<span class="item-product-slider__image">
												<picture class="item-product-slider__image-source item-product-slider__image-source_border-radius module-photo">
													<img src="<?php echo IMAGES ?>/item-product-slider-1.png" alt="photo" loading="lazy" />
												</picture>
												<span class="item-product-slider__button item-product-slider__button_desktop ui-button ui-button_circle-red ui-button_type_circle ui-button_size_circle-default">
													<span class="ui-button__icon ui-button__icon_icon-arrow-2">
														<svg class="ui-button__icon ui-button__icon_circle ui-button__icon_circle-gray module-svg-icon module-svg-icon_icon-arrow-2" viewBox="0 0 24 24">
															<use href="#icon-arrow-2"></use>
														</svg>
													</span>
												</span>
												<span class="item-product-slider__button item-product-slider__button_mobile ui-button ui-button_circle-gray-background ui-button_type_circle ui-button_size_circle-default">
													<span class="ui-button__icon ui-button__icon_icon-map">
														<svg class="ui-button__icon ui-button__icon_circle ui-button__icon_circle-blue module-svg-icon module-svg-icon_icon-map" viewBox="0 0 20 20"><use href="#icon-map"></use></svg>
													</span>
												</span>
											</span>
											<span class="item-product-slider__title">Салат-Бар</span>
											<span class="item-product-slider__text">
												Coffeeshop Company — международная <br />
												сеть кофеен, часть группы компаний «Schärf Group», специализирующаяся на&nbsp;продаже кофе, чая, горячих и&nbsp;холодных напитков, закусок и&nbsp;десертов.
											</span>
										</a>
									</div>
									<div class="section-products-slider__inner-slide swiper-slide">
										<a
											class="section-products-slider__item item-product-slider js-item-product"
											href="#"
											data-scheme="src/assets/images/schemes/schemes-2.png"
											data-floor="1 этаж"
											data-title="Вафельный Дом"
											data-event="click"
										>
											<span class="item-product-slider__image">
												<picture class="item-product-slider__image-source module-photo"><img src="<?php echo IMAGES ?>/item-product-slider-1.png" alt="photo" loading="lazy" /></picture>
												<span class="item-product-slider__button item-product-slider__button_desktop ui-button ui-button_circle-red ui-button_type_circle ui-button_size_circle-default">
													<span class="ui-button__icon ui-button__icon_icon-arrow-2">
														<svg class="ui-button__icon ui-button__icon_circle ui-button__icon_circle-gray module-svg-icon module-svg-icon_icon-arrow-2" viewBox="0 0 24 24">
															<use href="#icon-arrow-2"></use>
														</svg>
													</span>
												</span>
												<span class="item-product-slider__button item-product-slider__button_mobile ui-button ui-button_circle-gray-background ui-button_type_circle ui-button_size_circle-default">
													<span class="ui-button__icon ui-button__icon_icon-map">
														<svg class="ui-button__icon ui-button__icon_circle ui-button__icon_circle-blue module-svg-icon module-svg-icon_icon-map" viewBox="0 0 20 20"><use href="#icon-map"></use></svg>
													</span>
												</span>
											</span>
											<span class="item-product-slider__title">Вафельный Дом</span>
											<span class="item-product-slider__text">
												Coffeeshop Company — международная <br />
												сеть кофеен, часть группы компаний «Schärf Group», специализирующаяся на&nbsp;продаже кофе, чая, горячих и&nbsp;холодных напитков, закусок и&nbsp;десертов.
											</span>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="section-products-slider__main-slide swiper-slide js-products-slider-main-slide">
					<div class="section-products-slider__flex grid-flex grid-flex_justify-space-beetwen grid-flex_height-full">
						<div class="section-products-slider__col section-products-slider__col_left grid-col grid-col_left">
							<div class="section-products-slider__flex grid-flex grid-flex_wrap grid-flex_justify-space-beetwen">
								<div class="section-products-slider__title ui-title ui-title_default ui-title_color-purple ui-title_size-default">КУХНИ МИРА</div>
								<div class="section-products-slider__floor ui-title ui-title_default ui-title_color-purple ui-title_size-middle">2 этаж</div>
							</div>
							<div class="section-products-slider__flex grid-flex">
								<div class="section-products-slider__col section-products-slider__col_inner-left">
									<div class="section-products-slider__subtitle">Популярные заведения</div>
									<div class="section-products-slider__pagination js-products-slider-inner-tabs-pagination">
										<div class="section-products-slider__pagination-item js-products-slider-tabs-pagination-button">Утренний Блин</div>
										<div class="section-products-slider__pagination-item js-products-slider-tabs-pagination-button">Кофешоп есть зерно</div>
										<div class="section-products-slider__pagination-item js-products-slider-tabs-pagination-button">Сэндвич-бар</div>
										<a class="section-products-slider__more" href="#">Смотреть все</a>
									</div>
								</div>
								<div class="section-products-slider__col section-products-slider__col_inner-right">
									<div class="section-products-slider__schemes">
										<picture class="section-products-slider__schemes-source module-photo"><img class="js-scheme" src="src/assets/images/schemes/schemes-1.png" alt="photo" loading="lazy" /></picture>
									</div>
								</div>
							</div>
							<div class="section-products-slider__control grid-flex grid-flex_justify-space-beetwen grid-flex_vertical-center">
								<div class="section-products-slider__group-buttons ui-group-buttons js-products-slider-main-tabs-pagination">
									<div class="ui-group-buttons__flex grid-flex grid-flex_width-full">
										<span class="ui-group-buttons__button ui-button ui-button_type_purple-border ui-button_size_middle js-products-slider-tabs-pagination-button"><span class="ui-button__text">1 этаж</span></span>
										<span class="ui-group-buttons__button ui-button ui-button_type_purple-border-active ui-button_type_purple-border ui-button_size_middle js-products-slider-tabs-pagination-button">
											<span class="ui-button__text">2 этаж</span>
										</span>
										<span class="ui-group-buttons__button ui-button ui-button_type_purple-border ui-button_size_middle js-products-slider-tabs-pagination-button"><span class="ui-button__text">3 этаж</span></span>
									</div>
								</div>
								<div class="section-products-slider__slider-navigation slider-navigation slider-navigation_blue">
									<button class="slider-navigation__slider-button slider-button slider-button_blue slider-button_prev js-slider-default-navigation-prev">
										<svg class="slider-button__icon module-svg-icon module-svg-icon_icon-arrow" viewBox="0 0 60 60"><use href="#icon-arrow"></use></svg>
									</button>
									<button class="slider-navigation__slider-button slider-button slider-button_blue slider-button_next js-slider-default-navigation-next">
										<svg class="slider-button__icon module-svg-icon module-svg-icon_icon-arrow" viewBox="0 0 60 60"><use href="#icon-arrow"></use></svg>
									</button>
								</div>
							</div>
						</div>
						<div class="section-products-slider__col section-products-slider__col_right grid-col grid-col_right">
							<div class="section-products-slider__title section-products-slider__title_mobile ui-title ui-title_default ui-title_color-purple ui-title_size-default ui-title_color-purple ui-title_size-default">
								КУХНИ МИРА
							</div>
							<div class="section-products-slider__pagination-index slider-pagination slider-pagination_purple">
								<div class="slider-pagination__bullet js-slider-default-pagination-bullet"></div>
								<div class="slider-pagination__index js-slider-default-pagination-index"></div>
							</div>
							<div class="section-products-slider__inner js-products-slider-inner">
								<div class="swiper-wrapper">
									<div class="section-products-slider__inner-slide swiper-slide">
										<a
											class="section-products-slider__item item-product-slider js-item-product"
											href="#"
											data-scheme="src/assets/images/schemes/schemes-1.png"
											data-floor="2 этаж"
											data-title="Утренний Блин"
											data-event="click"
										>
											<span class="item-product-slider__image">
												<picture class="item-product-slider__image-source item-product-slider__image-source_border-radius module-photo">
													<img src="<?php echo IMAGES ?>/item-product-slider-1.png" alt="photo" loading="lazy" />
												</picture>
												<span class="item-product-slider__button item-product-slider__button_desktop ui-button ui-button_circle-red ui-button_type_circle ui-button_size_circle-default">
													<span class="ui-button__icon ui-button__icon_icon-arrow-2">
														<svg class="ui-button__icon ui-button__icon_circle ui-button__icon_circle-gray module-svg-icon module-svg-icon_icon-arrow-2" viewBox="0 0 24 24">
															<use href="#icon-arrow-2"></use>
														</svg>
													</span>
												</span>
												<span class="item-product-slider__button item-product-slider__button_mobile ui-button ui-button_circle-gray-background ui-button_type_circle ui-button_size_circle-default">
													<span class="ui-button__icon ui-button__icon_icon-map">
														<svg class="ui-button__icon ui-button__icon_circle ui-button__icon_circle-blue module-svg-icon module-svg-icon_icon-map" viewBox="0 0 20 20"><use href="#icon-map"></use></svg>
													</span>
												</span>
											</span>
											<span class="item-product-slider__title">Утренний Блин</span>
											<span class="item-product-slider__text">
												Coffeeshop Company — международная <br />
												сеть кофеен, часть группы компаний «Schärf Group», специализирующаяся на&nbsp;продаже кофе, чая, горячих и&nbsp;холодных напитков, закусок и&nbsp;десертов.
											</span>
										</a>
									</div>
									<div class="section-products-slider__inner-slide swiper-slide">
										<a
											class="section-products-slider__item item-product-slider js-item-product"
											href="#"
											data-scheme="src/assets/images/schemes/schemes-2.png"
											data-floor="2 этаж"
											data-title="Кофешоп есть зерно"
											data-event="click"
										>
											<span class="item-product-slider__image">
												<picture class="item-product-slider__image-source module-photo"><img src="<?php echo IMAGES ?>/item-product-slider-1.png" alt="photo" loading="lazy" /></picture>
												<span class="item-product-slider__button item-product-slider__button_desktop ui-button ui-button_circle-red ui-button_type_circle ui-button_size_circle-default">
													<span class="ui-button__icon ui-button__icon_icon-arrow-2">
														<svg class="ui-button__icon ui-button__icon_circle ui-button__icon_circle-gray module-svg-icon module-svg-icon_icon-arrow-2" viewBox="0 0 24 24">
															<use href="#icon-arrow-2"></use>
														</svg>
													</span>
												</span>
												<span class="item-product-slider__button item-product-slider__button_mobile ui-button ui-button_circle-gray-background ui-button_type_circle ui-button_size_circle-default">
													<span class="ui-button__icon ui-button__icon_icon-map">
														<svg class="ui-button__icon ui-button__icon_circle ui-button__icon_circle-blue module-svg-icon module-svg-icon_icon-map" viewBox="0 0 20 20"><use href="#icon-map"></use></svg>
													</span>
												</span>
											</span>
											<span class="item-product-slider__title">Кофешоп есть зерно</span>
											<span class="item-product-slider__text">
												Coffeeshop Company — международная <br />
												сеть кофеен, часть группы компаний «Schärf Group», специализирующаяся на&nbsp;продаже кофе, чая, горячих и&nbsp;холодных напитков, закусок и&nbsp;десертов.
											</span>
										</a>
									</div>
									<div class="section-products-slider__inner-slide swiper-slide">
										<a
											class="section-products-slider__item item-product-slider js-item-product"
											href="#"
											data-scheme="src/assets/images/schemes/schemes-1.png"
											data-floor="2 этаж"
											data-title="Сэндвич-бар"
											data-event="click"
										>
											<span class="item-product-slider__image">
												<picture class="item-product-slider__image-source item-product-slider__image-source_border-radius module-photo">
													<img src="<?php echo IMAGES ?>/item-product-slider-1.png" alt="photo" loading="lazy" />
												</picture>
												<span class="item-product-slider__button item-product-slider__button_desktop ui-button ui-button_circle-red ui-button_type_circle ui-button_size_circle-default">
													<span class="ui-button__icon ui-button__icon_icon-arrow-2">
														<svg class="ui-button__icon ui-button__icon_circle ui-button__icon_circle-gray module-svg-icon module-svg-icon_icon-arrow-2" viewBox="0 0 24 24">
															<use href="#icon-arrow-2"></use>
														</svg>
													</span>
												</span>
												<span class="item-product-slider__button item-product-slider__button_mobile ui-button ui-button_circle-gray-background ui-button_type_circle ui-button_size_circle-default">
													<span class="ui-button__icon ui-button__icon_icon-map">
														<svg class="ui-button__icon ui-button__icon_circle ui-button__icon_circle-blue module-svg-icon module-svg-icon_icon-map" viewBox="0 0 20 20"><use href="#icon-map"></use></svg>
													</span>
												</span>
											</span>
											<span class="item-product-slider__title">Сэндвич-бар</span>
											<span class="item-product-slider__text">
												Coffeeshop Company — международная <br />
												сеть кофеен, часть группы компаний «Schärf Group», специализирующаяся на&nbsp;продаже кофе, чая, горячих и&nbsp;холодных напитков, закусок и&nbsp;десертов.
											</span>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="section-products-slider__main-slide swiper-slide js-products-slider-main-slide">
					<div class="section-products-slider__flex grid-flex grid-flex_justify-space-beetwen grid-flex_height-full">
						<div class="section-products-slider__col section-products-slider__col_left grid-col grid-col_left">
							<div class="section-products-slider__flex grid-flex grid-flex_wrap grid-flex_justify-space-beetwen">
								<div class="section-products-slider__title ui-title ui-title_default ui-title_color-purple ui-title_size-default">КУХНИ МИРА</div>
								<div class="section-products-slider__floor ui-title ui-title_default ui-title_color-purple ui-title_size-middle">3 этаж</div>
							</div>
							<div class="section-products-slider__flex grid-flex">
								<div class="section-products-slider__col section-products-slider__col_inner-left">
									<div class="section-products-slider__subtitle">Популярные заведения</div>
									<div class="section-products-slider__pagination js-products-slider-inner-tabs-pagination">
										<div class="section-products-slider__pagination-item js-products-slider-tabs-pagination-button">Утренний Блин</div>
										<div class="section-products-slider__pagination-item js-products-slider-tabs-pagination-button">Кофешоп есть зерно</div>
										<div class="section-products-slider__pagination-item js-products-slider-tabs-pagination-button">Сэндвич-бар</div>
										<div class="section-products-slider__pagination-item js-products-slider-tabs-pagination-button">Смузи и&nbsp;Фреши</div>
										<div class="section-products-slider__pagination-item js-products-slider-tabs-pagination-button">Завтрак на&nbsp;ходу</div>
										<div class="section-products-slider__pagination-item js-products-slider-tabs-pagination-button">Багетная Лавка</div>
										<div class="section-products-slider__pagination-item js-products-slider-tabs-pagination-button">Суши Экспресс</div>
										<div class="section-products-slider__pagination-item js-products-slider-tabs-pagination-button">Пицца Мини</div>
										<div class="section-products-slider__pagination-item js-products-slider-tabs-pagination-button">Салат-Бар</div>
										<div class="section-products-slider__pagination-item js-products-slider-tabs-pagination-button">Вафельный Дом</div>
										<a class="section-products-slider__more" href="#">Смотреть все</a>
									</div>
								</div>
								<div class="section-products-slider__col section-products-slider__col_inner-right">
									<div class="section-products-slider__schemes">
										<picture class="section-products-slider__schemes-source module-photo"><img class="js-scheme" src="src/assets/images/schemes/schemes-1.png" alt="photo" loading="lazy" /></picture>
									</div>
								</div>
							</div>
							<div class="section-products-slider__control grid-flex grid-flex_justify-space-beetwen grid-flex_vertical-center">
								<div class="section-products-slider__group-buttons ui-group-buttons js-products-slider-main-tabs-pagination">
									<div class="ui-group-buttons__flex grid-flex grid-flex_width-full">
										<span class="ui-group-buttons__button ui-button ui-button_type_purple-border ui-button_size_middle js-products-slider-tabs-pagination-button"><span class="ui-button__text">1 этаж</span></span>
										<span class="ui-group-buttons__button ui-button ui-button_type_purple-border ui-button_size_middle js-products-slider-tabs-pagination-button"><span class="ui-button__text">2 этаж</span></span>
										<span class="ui-group-buttons__button ui-button ui-button_type_purple-border-active ui-button_type_purple-border ui-button_size_middle js-products-slider-tabs-pagination-button">
											<span class="ui-button__text">3 этаж</span>
										</span>
									</div>
								</div>
								<div class="section-products-slider__slider-navigation slider-navigation slider-navigation_blue">
									<button class="slider-navigation__slider-button slider-button slider-button_blue slider-button_prev js-slider-default-navigation-prev">
										<svg class="slider-button__icon module-svg-icon module-svg-icon_icon-arrow" viewBox="0 0 60 60"><use href="#icon-arrow"></use></svg>
									</button>
									<button class="slider-navigation__slider-button slider-button slider-button_blue slider-button_next js-slider-default-navigation-next">
										<svg class="slider-button__icon module-svg-icon module-svg-icon_icon-arrow" viewBox="0 0 60 60"><use href="#icon-arrow"></use></svg>
									</button>
								</div>
							</div>
						</div>
						<div class="section-products-slider__col section-products-slider__col_right grid-col grid-col_right">
							<div class="section-products-slider__title section-products-slider__title_mobile ui-title ui-title_default ui-title_color-purple ui-title_size-default ui-title_color-purple ui-title_size-default">
								КУХНИ МИРА
							</div>
							<div class="section-products-slider__pagination-index slider-pagination slider-pagination_purple">
								<div class="slider-pagination__bullet js-slider-default-pagination-bullet"></div>
								<div class="slider-pagination__index js-slider-default-pagination-index"></div>
							</div>
							<div class="section-products-slider__inner js-products-slider-inner">
								<div class="swiper-wrapper">
									<div class="section-products-slider__inner-slide swiper-slide">
										<a
											class="section-products-slider__item item-product-slider js-item-product"
											href="#"
											data-scheme="src/assets/images/schemes/schemes-1.png"
											data-floor="3 этаж"
											data-title="Утренний Блин"
											data-event="click"
										>
											<span class="item-product-slider__image">
												<picture class="item-product-slider__image-source item-product-slider__image-source_border-radius module-photo">
													<img src="<?php echo IMAGES ?>/item-product-slider-1.png" alt="photo" loading="lazy" />
												</picture>
												<span class="item-product-slider__button item-product-slider__button_desktop ui-button ui-button_circle-red ui-button_type_circle ui-button_size_circle-default">
													<span class="ui-button__icon ui-button__icon_icon-arrow-2">
														<svg class="ui-button__icon ui-button__icon_circle ui-button__icon_circle-gray module-svg-icon module-svg-icon_icon-arrow-2" viewBox="0 0 24 24">
															<use href="#icon-arrow-2"></use>
														</svg>
													</span>
												</span>
												<span class="item-product-slider__button item-product-slider__button_mobile ui-button ui-button_circle-gray-background ui-button_type_circle ui-button_size_circle-default">
													<span class="ui-button__icon ui-button__icon_icon-map">
														<svg class="ui-button__icon ui-button__icon_circle ui-button__icon_circle-blue module-svg-icon module-svg-icon_icon-map" viewBox="0 0 20 20"><use href="#icon-map"></use></svg>
													</span>
												</span>
											</span>
											<span class="item-product-slider__title">Утренний Блин</span>
											<span class="item-product-slider__text">
												Coffeeshop Company — международная <br />
												сеть кофеен, часть группы компаний «Schärf Group», специализирующаяся на&nbsp;продаже кофе, чая, горячих и&nbsp;холодных напитков, закусок и&nbsp;десертов.
											</span>
										</a>
									</div>
									<div class="section-products-slider__inner-slide swiper-slide">
										<a
											class="section-products-slider__item item-product-slider js-item-product"
											href="#"
											data-scheme="src/assets/images/schemes/schemes-2.png"
											data-floor="3 этаж"
											data-title="Кофешоп есть зерно"
											data-event="click"
										>
											<span class="item-product-slider__image">
												<picture class="item-product-slider__image-source module-photo"><img src="<?php echo IMAGES ?>/item-product-slider-1.png" alt="photo" loading="lazy" /></picture>
												<span class="item-product-slider__button item-product-slider__button_desktop ui-button ui-button_circle-red ui-button_type_circle ui-button_size_circle-default">
													<span class="ui-button__icon ui-button__icon_icon-arrow-2">
														<svg class="ui-button__icon ui-button__icon_circle ui-button__icon_circle-gray module-svg-icon module-svg-icon_icon-arrow-2" viewBox="0 0 24 24">
															<use href="#icon-arrow-2"></use>
														</svg>
													</span>
												</span>
												<span class="item-product-slider__button item-product-slider__button_mobile ui-button ui-button_circle-gray-background ui-button_type_circle ui-button_size_circle-default">
													<span class="ui-button__icon ui-button__icon_icon-map">
														<svg class="ui-button__icon ui-button__icon_circle ui-button__icon_circle-blue module-svg-icon module-svg-icon_icon-map" viewBox="0 0 20 20"><use href="#icon-map"></use></svg>
													</span>
												</span>
											</span>
											<span class="item-product-slider__title">Кофешоп есть зерно</span>
											<span class="item-product-slider__text">
												Coffeeshop Company — международная <br />
												сеть кофеен, часть группы компаний «Schärf Group», специализирующаяся на&nbsp;продаже кофе, чая, горячих и&nbsp;холодных напитков, закусок и&nbsp;десертов.
											</span>
										</a>
									</div>
									<div class="section-products-slider__inner-slide swiper-slide">
										<a
											class="section-products-slider__item item-product-slider js-item-product"
											href="#"
											data-scheme="src/assets/images/schemes/schemes-1.png"
											data-floor="3 этаж"
											data-title="Сэндвич-бар"
											data-event="click"
										>
											<span class="item-product-slider__image">
												<picture class="item-product-slider__image-source item-product-slider__image-source_border-radius module-photo">
													<img src="<?php echo IMAGES ?>/item-product-slider-1.png" alt="photo" loading="lazy" />
												</picture>
												<span class="item-product-slider__button item-product-slider__button_desktop ui-button ui-button_circle-red ui-button_type_circle ui-button_size_circle-default">
													<span class="ui-button__icon ui-button__icon_icon-arrow-2">
														<svg class="ui-button__icon ui-button__icon_circle ui-button__icon_circle-gray module-svg-icon module-svg-icon_icon-arrow-2" viewBox="0 0 24 24">
															<use href="#icon-arrow-2"></use>
														</svg>
													</span>
												</span>
												<span class="item-product-slider__button item-product-slider__button_mobile ui-button ui-button_circle-gray-background ui-button_type_circle ui-button_size_circle-default">
													<span class="ui-button__icon ui-button__icon_icon-map">
														<svg class="ui-button__icon ui-button__icon_circle ui-button__icon_circle-blue module-svg-icon module-svg-icon_icon-map" viewBox="0 0 20 20"><use href="#icon-map"></use></svg>
													</span>
												</span>
											</span>
											<span class="item-product-slider__title">Сэндвич-бар</span>
											<span class="item-product-slider__text">
												Coffeeshop Company — международная <br />
												сеть кофеен, часть группы компаний «Schärf Group», специализирующаяся на&nbsp;продаже кофе, чая, горячих и&nbsp;холодных напитков, закусок и&nbsp;десертов.
											</span>
										</a>
									</div>
									<div class="section-products-slider__inner-slide swiper-slide">
										<a
											class="section-products-slider__item item-product-slider js-item-product"
											href="#"
											data-scheme="src/assets/images/schemes/schemes-2.png"
											data-floor="3 этаж"
											data-title="Смузи и&nbsp;Фреши"
											data-event="click"
										>
											<span class="item-product-slider__image">
												<picture class="item-product-slider__image-source module-photo"><img src="<?php echo IMAGES ?>/item-product-slider-1.png" alt="photo" loading="lazy" /></picture>
												<span class="item-product-slider__button item-product-slider__button_desktop ui-button ui-button_circle-red ui-button_type_circle ui-button_size_circle-default">
													<span class="ui-button__icon ui-button__icon_icon-arrow-2">
														<svg class="ui-button__icon ui-button__icon_circle ui-button__icon_circle-gray module-svg-icon module-svg-icon_icon-arrow-2" viewBox="0 0 24 24">
															<use href="#icon-arrow-2"></use>
														</svg>
													</span>
												</span>
												<span class="item-product-slider__button item-product-slider__button_mobile ui-button ui-button_circle-gray-background ui-button_type_circle ui-button_size_circle-default">
													<span class="ui-button__icon ui-button__icon_icon-map">
														<svg class="ui-button__icon ui-button__icon_circle ui-button__icon_circle-blue module-svg-icon module-svg-icon_icon-map" viewBox="0 0 20 20"><use href="#icon-map"></use></svg>
													</span>
												</span>
											</span>
											<span class="item-product-slider__title">Смузи и&nbsp;Фреши</span>
											<span class="item-product-slider__text">
												Coffeeshop Company — международная <br />
												сеть кофеен, часть группы компаний «Schärf Group», специализирующаяся на&nbsp;продаже кофе, чая, горячих и&nbsp;холодных напитков, закусок и&nbsp;десертов.
											</span>
										</a>
									</div>
									<div class="section-products-slider__inner-slide swiper-slide">
										<a
											class="section-products-slider__item item-product-slider js-item-product"
											href="#"
											data-scheme="src/assets/images/schemes/schemes-1.png"
											data-floor="3 этаж"
											data-title="Завтрак на&nbsp;ходу"
											data-event="click"
										>
											<span class="item-product-slider__image">
												<picture class="item-product-slider__image-source item-product-slider__image-source_border-radius module-photo">
													<img src="<?php echo IMAGES ?>/item-product-slider-1.png" alt="photo" loading="lazy" />
												</picture>
												<span class="item-product-slider__button item-product-slider__button_desktop ui-button ui-button_circle-red ui-button_type_circle ui-button_size_circle-default">
													<span class="ui-button__icon ui-button__icon_icon-arrow-2">
														<svg class="ui-button__icon ui-button__icon_circle ui-button__icon_circle-gray module-svg-icon module-svg-icon_icon-arrow-2" viewBox="0 0 24 24">
															<use href="#icon-arrow-2"></use>
														</svg>
													</span>
												</span>
												<span class="item-product-slider__button item-product-slider__button_mobile ui-button ui-button_circle-gray-background ui-button_type_circle ui-button_size_circle-default">
													<span class="ui-button__icon ui-button__icon_icon-map">
														<svg class="ui-button__icon ui-button__icon_circle ui-button__icon_circle-blue module-svg-icon module-svg-icon_icon-map" viewBox="0 0 20 20"><use href="#icon-map"></use></svg>
													</span>
												</span>
											</span>
											<span class="item-product-slider__title">Завтрак на&nbsp;ходу</span>
											<span class="item-product-slider__text">
												Coffeeshop Company — международная <br />
												сеть кофеен, часть группы компаний «Schärf Group», специализирующаяся на&nbsp;продаже кофе, чая, горячих и&nbsp;холодных напитков, закусок и&nbsp;десертов.
											</span>
										</a>
									</div>
									<div class="section-products-slider__inner-slide swiper-slide">
										<a
											class="section-products-slider__item item-product-slider js-item-product"
											href="#"
											data-scheme="src/assets/images/schemes/schemes-2.png"
											data-floor="3 этаж"
											data-title="Багетная Лавка"
											data-event="click"
										>
											<span class="item-product-slider__image">
												<picture class="item-product-slider__image-source module-photo"><img src="<?php echo IMAGES ?>/item-product-slider-1.png" alt="photo" loading="lazy" /></picture>
												<span class="item-product-slider__button item-product-slider__button_desktop ui-button ui-button_circle-red ui-button_type_circle ui-button_size_circle-default">
													<span class="ui-button__icon ui-button__icon_icon-arrow-2">
														<svg class="ui-button__icon ui-button__icon_circle ui-button__icon_circle-gray module-svg-icon module-svg-icon_icon-arrow-2" viewBox="0 0 24 24">
															<use href="#icon-arrow-2"></use>
														</svg>
													</span>
												</span>
												<span class="item-product-slider__button item-product-slider__button_mobile ui-button ui-button_circle-gray-background ui-button_type_circle ui-button_size_circle-default">
													<span class="ui-button__icon ui-button__icon_icon-map">
														<svg class="ui-button__icon ui-button__icon_circle ui-button__icon_circle-blue module-svg-icon module-svg-icon_icon-map" viewBox="0 0 20 20"><use href="#icon-map"></use></svg>
													</span>
												</span>
											</span>
											<span class="item-product-slider__title">Багетная Лавка</span>
											<span class="item-product-slider__text">
												Coffeeshop Company — международная <br />
												сеть кофеен, часть группы компаний «Schärf Group», специализирующаяся на&nbsp;продаже кофе, чая, горячих и&nbsp;холодных напитков, закусок и&nbsp;десертов.
											</span>
										</a>
									</div>
									<div class="section-products-slider__inner-slide swiper-slide">
										<a
											class="section-products-slider__item item-product-slider js-item-product"
											href="#"
											data-scheme="src/assets/images/schemes/schemes-1.png"
											data-floor="3 этаж"
											data-title="Суши Экспресс"
											data-event="click"
										>
											<span class="item-product-slider__image">
												<picture class="item-product-slider__image-source item-product-slider__image-source_border-radius module-photo">
													<img src="<?php echo IMAGES ?>/item-product-slider-1.png" alt="photo" loading="lazy" />
												</picture>
												<span class="item-product-slider__button item-product-slider__button_desktop ui-button ui-button_circle-red ui-button_type_circle ui-button_size_circle-default">
													<span class="ui-button__icon ui-button__icon_icon-arrow-2">
														<svg class="ui-button__icon ui-button__icon_circle ui-button__icon_circle-gray module-svg-icon module-svg-icon_icon-arrow-2" viewBox="0 0 24 24">
															<use href="#icon-arrow-2"></use>
														</svg>
													</span>
												</span>
												<span class="item-product-slider__button item-product-slider__button_mobile ui-button ui-button_circle-gray-background ui-button_type_circle ui-button_size_circle-default">
													<span class="ui-button__icon ui-button__icon_icon-map">
														<svg class="ui-button__icon ui-button__icon_circle ui-button__icon_circle-blue module-svg-icon module-svg-icon_icon-map" viewBox="0 0 20 20"><use href="#icon-map"></use></svg>
													</span>
												</span>
											</span>
											<span class="item-product-slider__title">Суши Экспресс</span>
											<span class="item-product-slider__text">
												Coffeeshop Company — международная <br />
												сеть кофеен, часть группы компаний «Schärf Group», специализирующаяся на&nbsp;продаже кофе, чая, горячих и&nbsp;холодных напитков, закусок и&nbsp;десертов.
											</span>
										</a>
									</div>
									<div class="section-products-slider__inner-slide swiper-slide">
										<a
											class="section-products-slider__item item-product-slider js-item-product"
											href="#"
											data-scheme="src/assets/images/schemes/schemes-2.png"
											data-floor="3 этаж"
											data-title="Пицца Мини"
											data-event="click"
										>
											<span class="item-product-slider__image">
												<picture class="item-product-slider__image-source module-photo"><img src="<?php echo IMAGES ?>/item-product-slider-1.png" alt="photo" loading="lazy" /></picture>
												<span class="item-product-slider__button item-product-slider__button_desktop ui-button ui-button_circle-red ui-button_type_circle ui-button_size_circle-default">
													<span class="ui-button__icon ui-button__icon_icon-arrow-2">
														<svg class="ui-button__icon ui-button__icon_circle ui-button__icon_circle-gray module-svg-icon module-svg-icon_icon-arrow-2" viewBox="0 0 24 24">
															<use href="#icon-arrow-2"></use>
														</svg>
													</span>
												</span>
												<span class="item-product-slider__button item-product-slider__button_mobile ui-button ui-button_circle-gray-background ui-button_type_circle ui-button_size_circle-default">
													<span class="ui-button__icon ui-button__icon_icon-map">
														<svg class="ui-button__icon ui-button__icon_circle ui-button__icon_circle-blue module-svg-icon module-svg-icon_icon-map" viewBox="0 0 20 20"><use href="#icon-map"></use></svg>
													</span>
												</span>
											</span>
											<span class="item-product-slider__title">Пицца Мини</span>
											<span class="item-product-slider__text">
												Coffeeshop Company — международная <br />
												сеть кофеен, часть группы компаний «Schärf Group», специализирующаяся на&nbsp;продаже кофе, чая, горячих и&nbsp;холодных напитков, закусок и&nbsp;десертов.
											</span>
										</a>
									</div>
									<div class="section-products-slider__inner-slide swiper-slide">
										<a
											class="section-products-slider__item item-product-slider js-item-product"
											href="#"
											data-scheme="src/assets/images/schemes/schemes-1.png"
											data-floor="3 этаж"
											data-title="Салат-Бар"
											data-event="click"
										>
											<span class="item-product-slider__image">
												<picture class="item-product-slider__image-source item-product-slider__image-source_border-radius module-photo">
													<img src="<?php echo IMAGES ?>/item-product-slider-1.png" alt="photo" loading="lazy" />
												</picture>
												<span class="item-product-slider__button item-product-slider__button_desktop ui-button ui-button_circle-red ui-button_type_circle ui-button_size_circle-default">
													<span class="ui-button__icon ui-button__icon_icon-arrow-2">
														<svg class="ui-button__icon ui-button__icon_circle ui-button__icon_circle-gray module-svg-icon module-svg-icon_icon-arrow-2" viewBox="0 0 24 24">
															<use href="#icon-arrow-2"></use>
														</svg>
													</span>
												</span>
												<span class="item-product-slider__button item-product-slider__button_mobile ui-button ui-button_circle-gray-background ui-button_type_circle ui-button_size_circle-default">
													<span class="ui-button__icon ui-button__icon_icon-map">
														<svg class="ui-button__icon ui-button__icon_circle ui-button__icon_circle-blue module-svg-icon module-svg-icon_icon-map" viewBox="0 0 20 20"><use href="#icon-map"></use></svg>
													</span>
												</span>
											</span>
											<span class="item-product-slider__title">Салат-Бар</span>
											<span class="item-product-slider__text">
												Coffeeshop Company — международная <br />
												сеть кофеен, часть группы компаний «Schärf Group», специализирующаяся на&nbsp;продаже кофе, чая, горячих и&nbsp;холодных напитков, закусок и&nbsp;десертов.
											</span>
										</a>
									</div>
									<div class="section-products-slider__inner-slide swiper-slide">
										<a
											class="section-products-slider__item item-product-slider js-item-product"
											href="#"
											data-scheme="src/assets/images/schemes/schemes-2.png"
											data-floor="3 этаж"
											data-title="Вафельный Дом"
											data-event="click"
										>
											<span class="item-product-slider__image">
												<picture class="item-product-slider__image-source module-photo"><img src="<?php echo IMAGES ?>/item-product-slider-1.png" alt="photo" loading="lazy" /></picture>
												<span class="item-product-slider__button item-product-slider__button_desktop ui-button ui-button_circle-red ui-button_type_circle ui-button_size_circle-default">
													<span class="ui-button__icon ui-button__icon_icon-arrow-2">
														<svg class="ui-button__icon ui-button__icon_circle ui-button__icon_circle-gray module-svg-icon module-svg-icon_icon-arrow-2" viewBox="0 0 24 24">
															<use href="#icon-arrow-2"></use>
														</svg>
													</span>
												</span>
												<span class="item-product-slider__button item-product-slider__button_mobile ui-button ui-button_circle-gray-background ui-button_type_circle ui-button_size_circle-default">
													<span class="ui-button__icon ui-button__icon_icon-map">
														<svg class="ui-button__icon ui-button__icon_circle ui-button__icon_circle-blue module-svg-icon module-svg-icon_icon-map" viewBox="0 0 20 20"><use href="#icon-map"></use></svg>
													</span>
												</span>
											</span>
											<span class="item-product-slider__title">Вафельный Дом</span>
											<span class="item-product-slider__text">
												Coffeeshop Company — международная <br />
												сеть кофеен, часть группы компаний «Schärf Group», специализирующаяся на&nbsp;продаже кофе, чая, горячих и&nbsp;холодных напитков, закусок и&nbsp;десертов.
											</span>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<a class="section-products-slider__button ui-button ui-button_type_purple-border ui-button_size_default" href="#"><span class="ui-button__text">Посмотреть все</span></a>
	</section>
	<section class="section-core section-core section-events-slider" props="{}">
		<div class="section-events-slider__wrapper wrapper">
			<div class="section-events-slider__flex grid-flex grid-flex_wrap">
				<div class="section-events-slider__col grid-col grid-col_left"><div class="section-events-slider__title ui-title ui-title_default ui-title_color-gray ui-title_size-default">Мероприятия</div></div>
				<div class="section-events-slider__col grid-col grid-col_right">
					<div class="section-events-slider__text">
						Особняк XVIII века был бережно реконструирован и&nbsp;подарил исторические стены для&nbsp;гастрокластера TVERSKOY. Более 17 000 м² полностью посвятили еде — и&nbsp;вы можете стать частью нового
						гастрономического мира в&nbsp;центре Москвы.
					</div>
				</div>
			</div>
			<div class="js-event-container">
				<picture class="section-events-slider__module-photo module-photo event-item-preview js-event-preview"></picture>
				<div class="section-events-slider__slider js-slider-default">
					<div class="section-events-slider__slider-wrapper swiper-wrapper">
						<div class="section-events-slider__slide swiper-slide">
							<a class="section-events-slider__item item-event grid-flex grid-flex grid-flex_wrap js-event-item" href="#">
								<span class="item-event__col item-event__col_left grid-col grid-col_left">
									<div class="item-event__date ui-title ui-title_default ui-title_color-gray ui-title_size-middle">12 января<span class="ui-title__date-part"> / 14:45</span></div>
									<picture class="item-event__image module-photo"><img class="object-fit-cover js-event-item-image" src="<?php echo IMAGES ?>/item-event-1.png" alt="photo" loading="lazy" /></picture>
								</span>
								<span class="item-event__col item-event__col_right grid-col grid-col_right">
									<div class="item-event__title ui-title ui-title_default ui-title_color-gray ui-title_size-middle">Ох березы мои березы,</div>
									<span class="item-event__text">Презентация нового альбома</span>
									<span class="item-event__author"><span class="item-event__author-text">Автор:</span><span class="item-event__author-value">Клава Кока</span></span>
									<span class="item-event__time">
										<svg class="item-event__time-icon module-svg-icon module-svg-icon_icon-clock" viewBox="0 0 24 24"><use href="#icon-clock"></use></svg><span class="item-event__time-text">14:45</span>
									</span>
									<div class="item-event__button ui-button ui-button_type_default ui-button_size_default"><span class="ui-button__text">Подробнее</span></div>
								</span>
							</a>
						</div>
						<div class="section-events-slider__slide swiper-slide">
							<a class="section-events-slider__item item-event grid-flex grid-flex grid-flex_wrap js-event-item" href="#">
								<span class="item-event__col item-event__col_left grid-col grid-col_left">
									<div class="item-event__date ui-title ui-title_default ui-title_color-gray ui-title_size-middle">12 января<span class="ui-title__date-part"> / 14:45</span></div>
									<picture class="item-event__image module-photo"><img class="object-fit-cover js-event-item-image" src="<?php echo IMAGES ?>/item-event-2.png" alt="photo" loading="lazy" /></picture>
								</span>
								<span class="item-event__col item-event__col_right grid-col grid-col_right">
									<div class="item-event__title ui-title ui-title_default ui-title_color-gray ui-title_size-middle">Stand up night!,</div>
									<span class="item-event__text">Презентация нового альбома</span>
									<span class="item-event__author"><span class="item-event__author-text">Автор:</span><span class="item-event__author-value">Клава Кока</span></span>
									<span class="item-event__time">
										<svg class="item-event__time-icon module-svg-icon module-svg-icon_icon-clock" viewBox="0 0 24 24"><use href="#icon-clock"></use></svg><span class="item-event__time-text">14:45</span>
									</span>
									<div class="item-event__button ui-button ui-button_type_default ui-button_size_default"><span class="ui-button__text">Подробнее</span></div>
								</span>
							</a>
						</div>
						<div class="section-events-slider__slide swiper-slide">
							<a class="section-events-slider__item item-event grid-flex grid-flex grid-flex_wrap js-event-item" href="#">
								<span class="item-event__col item-event__col_left grid-col grid-col_left">
									<div class="item-event__date ui-title ui-title_default ui-title_color-gray ui-title_size-middle">12 января<span class="ui-title__date-part"> / 14:45</span></div>
									<picture class="item-event__image module-photo"><img class="object-fit-cover js-event-item-image" src="<?php echo IMAGES ?>/item-event-1.png" alt="photo" loading="lazy" /></picture>
								</span>
								<span class="item-event__col item-event__col_right grid-col grid-col_right">
									<div class="item-event__title ui-title ui-title_default ui-title_color-gray ui-title_size-middle">Ох березы мои березы,</div>
									<span class="item-event__text">Презентация нового альбома</span>
									<span class="item-event__author"><span class="item-event__author-text">Автор:</span><span class="item-event__author-value">Клава Кока</span></span>
									<span class="item-event__time">
										<svg class="item-event__time-icon module-svg-icon module-svg-icon_icon-clock" viewBox="0 0 24 24"><use href="#icon-clock"></use></svg><span class="item-event__time-text">14:45</span>
									</span>
									<div class="item-event__button ui-button ui-button_type_default ui-button_size_default"><span class="ui-button__text">Подробнее</span></div>
								</span>
							</a>
						</div>
						<div class="section-events-slider__slide swiper-slide">
							<a class="section-events-slider__item item-event grid-flex grid-flex grid-flex_wrap js-event-item" href="#">
								<span class="item-event__col item-event__col_left grid-col grid-col_left">
									<div class="item-event__date ui-title ui-title_default ui-title_color-gray ui-title_size-middle">12 января<span class="ui-title__date-part"> / 14:45</span></div>
									<picture class="item-event__image module-photo"><img class="object-fit-cover js-event-item-image" src="<?php echo IMAGES ?>/item-event-2.png" alt="photo" loading="lazy" /></picture>
								</span>
								<span class="item-event__col item-event__col_right grid-col grid-col_right">
									<div class="item-event__title ui-title ui-title_default ui-title_color-gray ui-title_size-middle">Stand up night!,</div>
									<span class="item-event__text">Презентация нового альбома</span>
									<span class="item-event__author"><span class="item-event__author-text">Автор:</span><span class="item-event__author-value">Клава Кока</span></span>
									<span class="item-event__time">
										<svg class="item-event__time-icon module-svg-icon module-svg-icon_icon-clock" viewBox="0 0 24 24"><use href="#icon-clock"></use></svg><span class="item-event__time-text">14:45</span>
									</span>
									<div class="item-event__button ui-button ui-button_type_default ui-button_size_default"><span class="ui-button__text">Подробнее</span></div>
								</span>
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="section-events-slider__pagination slider-pagination slider-pagination_gray">
				<div class="slider-pagination__bullet js-slider-default-pagination-bullet"></div>
				<div class="slider-pagination__index js-slider-default-pagination-index"></div>
			</div>
			<a class="section-events-slider__button ui-button ui-button_type_default ui-button_size_default" href="#"><span class="ui-button__text">Все события</span></a>
		</div>
	</section>
	<section class="section-core section-core section-news-slider" props="{}">
		<div class="section-news-slider__wrapper wrapper">
			<div class="section-news-slider__flex grid-flex grid-flex_justify-space-beetwen grid-flex_vertical-center">
				<div class="section-news-slider__title ui-title ui-title_default ui-title_color-gray ui-title_size-default">новости</div>
				<a class="section-news-slider__button section-news-slider__button_desktop ui-button ui-button_type_default ui-button_size_default" href="#"><span class="ui-button__text">Все новости</span></a>
			</div>
			<div class="section-news-slider__slider js-slider-default">
				<div class="section-news-slider__slider-wrapper swiper-wrapper">
					<div class="section-news-slider__slide section-news-slider__slide_border-top swiper-slide">
						<a class="section-news-slider__item item-news item-news_border-top" href="#">
							<span class="item-news__content">
								<span class="item-news__content-top">
									<span class="item-news__info"><span class="item-news__info-item">Кухня</span><span class="item-news__info-item">03.24</span></span>
									<div class="item-news__title ui-title ui-title_default ui-title_color-gray ui-title_size-middle">Новое меню в&nbsp;ресторане</div>
									<span class="item-news__text js-set-length-text" data-length="110" data-length-mobile="57">
										Компактное помещение с&nbsp;косметическим ремонтом. Белые стены, потолки 4,5 метра, неограниченное количество розеток, деревянssssssssssssssssss ssssssssssssssss ssssss
									</span>
								</span>
								<span class="item-news__content-bottom">
									<span class="item-news__button ui-button ui-button_circle-gray ui-button_type_circle ui-button_size_circle-default">
										<span class="ui-button__icon ui-button__icon_icon-arrow-2">
											<svg class="ui-button__icon ui-button__icon_circle ui-button__icon_circle-gray module-svg-icon module-svg-icon_icon-arrow-2" viewBox="0 0 24 24"><use href="#icon-arrow-2"></use></svg>
										</span>
									</span>
								</span>
							</span>
						</a>
					</div>
					<div class="section-news-slider__slide section-news-slider__slide_border-top swiper-slide">
						<a class="section-news-slider__item item-news item-news_border-top" href="#">
							<span class="item-news__content">
								<span class="item-news__content-top">
									<span class="item-news__info"><span class="item-news__info-item">Кухня</span><span class="item-news__info-item">03.24</span></span>
									<div class="item-news__title ui-title ui-title_default ui-title_color-gray ui-title_size-middle">Новое меню в&nbsp;</div>
									<span class="item-news__text js-set-length-text" data-length="110" data-length-mobile="57">Компактное количество розеток, деревянные</span>
								</span>
								<span class="item-news__content-bottom">
									<span class="item-news__button ui-button ui-button_circle-gray ui-button_type_circle ui-button_size_circle-default">
										<span class="ui-button__icon ui-button__icon_icon-arrow-2">
											<svg class="ui-button__icon ui-button__icon_circle ui-button__icon_circle-gray module-svg-icon module-svg-icon_icon-arrow-2" viewBox="0 0 24 24"><use href="#icon-arrow-2"></use></svg>
										</span>
									</span>
								</span>
							</span>
						</a>
					</div>
					<div class="section-news-slider__slide section-news-slider__slide_height swiper-slide">
						<a class="section-news-slider__item item-news" href="#">
							<picture class="item-news__image item-news__image_hidden-large-tablet module-photo"><img class="image-source" src="<?php echo IMAGES ?>/item-news-1.png" alt="photo" loading="lazy" /></picture>
							<span class="item-news__content item-news__content_background item-news__content_slider">
								<span class="item-news__content-top">
									<span class="item-news__info"><span class="item-news__info-item">Кухня</span><span class="item-news__info-item">03.24</span></span>
									<div class="item-news__title ui-title ui-title_default ui-title_color-gray ui-title_size-middle">Новое меню в&nbsp;ресторане &quot;Восточный экспресс&quot;</div>
									<span class="item-news__text js-set-length-text" data-length="110" data-length-mobile="57">
										Компактное помещение с&nbsp;косметическим ремонтом. Белые стены, потолки 4,5 метра, неограниченное количество розеток, деревянssssssssssssssssss ssssssssssssssss ssssss
									</span>
								</span>
								<span class="item-news__content-bottom">
									<span class="item-news__button ui-button ui-button_circle-gray ui-button_type_circle ui-button_size_circle-default">
										<span class="ui-button__icon ui-button__icon_icon-arrow-2">
											<svg class="ui-button__icon ui-button__icon_circle ui-button__icon_circle-gray module-svg-icon module-svg-icon_icon-arrow-2" viewBox="0 0 24 24"><use href="#icon-arrow-2"></use></svg>
										</span>
									</span>
								</span>
							</span>
						</a>
					</div>
					<div class="section-news-slider__slide section-news-slider__slide_border-top swiper-slide">
						<a class="section-news-slider__item item-news item-news_border-top" href="#">
							<span class="item-news__content">
								<span class="item-news__content-top">
									<span class="item-news__info"><span class="item-news__info-item">Кухня</span><span class="item-news__info-item">03.24</span></span>
									<div class="item-news__title ui-title ui-title_default ui-title_color-gray ui-title_size-middle">Новое меню в&nbsp;ресторане &quot;Восточный экспресс&quot;</div>
									<span class="item-news__text js-set-length-text" data-length="110" data-length-mobile="57">
										Компактное помещение с&nbsp;косметическим ремонтом. Белые стены, потолки 4,5 метра, неограниченное количество розеток, деревянssssssssssssssssss ssssssssssssssss ssssss
									</span>
								</span>
								<span class="item-news__content-bottom">
									<span class="item-news__button ui-button ui-button_circle-gray ui-button_type_circle ui-button_size_circle-default">
										<span class="ui-button__icon ui-button__icon_icon-arrow-2">
											<svg class="ui-button__icon ui-button__icon_circle ui-button__icon_circle-gray module-svg-icon module-svg-icon_icon-arrow-2" viewBox="0 0 24 24"><use href="#icon-arrow-2"></use></svg>
										</span>
									</span>
								</span>
							</span>
						</a>
					</div>
					<div class="section-news-slider__slide section-news-slider__slide_border-top swiper-slide">
						<a class="section-news-slider__item item-news item-news_border-top" href="#">
							<span class="item-news__content">
								<span class="item-news__content-top">
									<span class="item-news__info"><span class="item-news__info-item">Кухня</span><span class="item-news__info-item">03.24</span></span>
									<div class="item-news__title ui-title ui-title_default ui-title_color-gray ui-title_size-middle">Новое меню в&nbsp;ресторане &quot;Восточный экспресс&quot;</div>
									<span class="item-news__text js-set-length-text" data-length="110" data-length-mobile="57">
										Компактное помещение с&nbsp;косметическим ремонтом. Белые стены, потолки 4,5 метра, неограниченное количество розеток, деревянssssssssssssssssss ssssssssssssssss ssssss
									</span>
								</span>
								<span class="item-news__content-bottom">
									<span class="item-news__button ui-button ui-button_circle-gray ui-button_type_circle ui-button_size_circle-default">
										<span class="ui-button__icon ui-button__icon_icon-arrow-2">
											<svg class="ui-button__icon ui-button__icon_circle ui-button__icon_circle-gray module-svg-icon module-svg-icon_icon-arrow-2" viewBox="0 0 24 24"><use href="#icon-arrow-2"></use></svg>
										</span>
									</span>
								</span>
							</span>
						</a>
					</div>
				</div>
			</div>
			<div class="section-news-slider__pagination slider-pagination slider-pagination_gray">
				<div class="slider-pagination__bullet js-slider-default-pagination-bullet"></div>
				<div class="slider-pagination__index js-slider-default-pagination-index"></div>
			</div>
			<a class="section-news-slider__button section-news-slider__button_mobile ui-button ui-button_type_default ui-button_size_default" href="#"><span class="ui-button__text">Все новости</span></a>
		</div>
	</section>
</main>
<?php
get_footer();
?>
