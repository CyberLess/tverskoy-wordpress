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
					<div class="section-news-single__col section-news-single__col_width-full">
						<div class="section-news-single__title ui-title ui-title_default ui-title_color-gray ui-title_size-default">Открытие нового фуд-корнера &quot;Бургеры и&nbsp;брускетты&quot;</div>
					</div>
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
							<div class="section-news-single__info-item"><div class="section-news-single__info-title ui-title ui-title_default ui-title_color-gray ui-title_size-small">Event</div></div>
							<div class="section-news-single__info-item"><div class="section-news-single__info-title ui-title ui-title_default ui-title_color-gray ui-title_size-small">03.24</div></div>
						</div>
					</div>
				</div>
				<div class="section-news-single__subtitle"></div>
				<div class="section-news-single__date"></div>
				<button class="section-news-single__button ui-button _"></button>
			</div>
			<div class="section-news-single__main part-section-main">
				<div class="section-news-single__content part-section-content">
					<div class="part-section-content__item">
						<picture class="part-section-content__image module-photo"><img class="object-fit-cover" src="<?php echo IMAGES ?>/section-news-single-1.png" alt="photo" loading="lazy" /></picture>
					</div>
					<div class="part-section-content__item" id="anchor-1">
						<div class="part-section-content__flex grid-flex grid-flex_justify-end">
							<div class="part-section-content__col grid-col grid-col_right">
								<div class="part-section-content__title">Новый вкус на&nbsp;Тверском бульваре</div>
								<div class="part-section-content__text">
									<p>
										Тверской бульвар — одно из&nbsp;самых оживленных и&nbsp;знаковых мест Москвы, где жители и&nbsp;гости столицы могут наслаждаться городской жизнью. Теперь здесь появился новый повод
										для&nbsp;прогулки — открытие фуд-корнера &quot;Бургеры и&nbsp;брускетты&quot;. Это заведение обещает стать популярным местом для&nbsp;всех любителей вкусной и&nbsp;качественной еды
										на&nbsp;свежем воздухе.
									</p>
								</div>
							</div>
						</div>
					</div>
					<div class="part-section-content__item" id="anchor-2">
						<div class="part-section-content__flex grid-flex grid-flex_justify-end">
							<div class="part-section-content__col grid-col grid-col_right">
								<div class="part-section-content__title">История фуд-корнера &quot;Бургеры и&nbsp;брускетты&quot;</div>
								<div class="part-section-content__text">
									<p>
										Идея открыть небольшой, но уникальный фуд-корнер возникла у&nbsp;группы молодых рестораторов, которые хотели привнести на&nbsp;Тверской бульвар новое гастрономическое пространство. Они сделали
										акцент на&nbsp;свежие ингредиенты и&nbsp;доступные цены, привлекая не только местных жителей, но и&nbsp;туристов.
									</p>
									<div class="part-section-content__subtitle">Основные цели создателей:</div>
									<dl>
										<dd>Разнообразить гастрономическую карту Тверского бульвара.</dd>
										<dd>Предложить блюда для&nbsp;быстрого, но вкусного перекуса.</dd>
										<dd>Сделать заведение доступным для&nbsp;всех категорий гостей.</dd>
									</dl>
								</div>
							</div>
						</div>
					</div>
					<div class="part-section-content__item" id="anchor-3">
						<div class="part-section-content__flex grid-flex grid-flex_justify-end">
							<div class="part-section-content__col grid-col grid-col_right">
								<div class="part-section-content__title">Концепция и&nbsp;атмосфера заведения</div>
								<div class="part-section-content__text">
									<p>Фуд-корнер &quot;Бургеры и&nbsp;брускетты&quot; предлагает своим гостям не просто вкусную еду, но и&nbsp;возможность насладиться легкой и&nbsp;непринужденной атмосферой.</p>
									<div class="part-section-content__subtitle">Ключевые особенности атмосферы:</div>
									<ol>
										<li>Виды стрелковых спортов</li>
										<li>Удобные столики.</li>
										<li>Приветливый персонал.</li>
									</ol>
								</div>
							</div>
						</div>
					</div>
					<div class="part-section-content__item">
						<picture class="part-section-content__image module-photo"><img class="object-fit-cover" src="<?php echo IMAGES ?>/section-news-single-1.png" alt="photo" loading="lazy" /></picture>
					</div>
					<div class="part-section-content__item">
						<div class="part-section-content__flex grid-flex grid-flex_justify-end">
							<div class="part-section-content__col grid-col grid-col_right">
								<div class="part-section-content__title">Меню: Разнообразие бургеров и&nbsp;брускетт</div>
								<div class="part-section-content__text">
									<p>Меню фуд-корнера предлагает широчайший выбор блюд, от&nbsp;классических бургеров до&nbsp;изысканных брускетт.</p>
									<div class="part-section-content__subtitle">Основные категории меню:</div>
									<div class="part-section-content__flex grid-flex grid-flex_wrap grid-flex_justify-space-beetwen">
										<div class="part-section-content__text-col">
											<div class="part-section-content__subtitle">Бургеры:</div>
											<ul>
												<li>Классический с&nbsp;говядиной</li>
												<li>С рыбой и&nbsp;лаймовым соусом</li>
												<li>Веганский с&nbsp;тофу</li>
											</ul>
										</div>
										<div class="part-section-content__text-col">
											<div class="part-section-content__subtitle">Брускетты:</div>
											<ul>
												<li>С авокадо и&nbsp;копченым лососем</li>
												<li>С помидорами, базиликом и&nbsp;пестом</li>
												<li>С прошутто и&nbsp;пармезаном</li>
											</ul>
										</div>
									</div>
									<div></div>
								</div>
							</div>
						</div>
					</div>
					<div class="part-section-content__item">
						<div class="part-section-content__flex grid-flex grid-flex_justify-end">
							<div class="part-section-content__col grid-col grid-col_right">
								<div class="part-section-content__title">Будущие мероприятия и&nbsp;планы на&nbsp;развитие</div>
								<div class="part-section-content__text"><p>Фуд-корнер планирует развиваться и&nbsp;радовать своих гостей новыми интересными предложениями.</p></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="section-core section-core section-news-slider section-news-slider_line" props="{}">
		<div class="section-news-slider__wrapper wrapper">
			<div class="section-news-slider__flex grid-flex grid-flex_justify-space-beetwen grid-flex_vertical-center">
				<div class="section-news-slider__title ui-title ui-title_default ui-title_color-gray ui-title_size-default">Может быть интересно</div>
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
		</div>
	</section>
</main>
<?php
get_footer();
?>
