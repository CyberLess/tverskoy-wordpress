<?php /* Template Name: Контакты */ ?>
<?php
get_header();
?>
<main class="part-main-content">
	<section class="section-core section-core section-contacts" props="{}">
		<div class="section-contacts__wrapper wrapper">
			<div class="section-contacts__header part-section-header">
				<div class="section-contacts__title ui-title ui-title_default ui-title_color-gray ui-title_size-big">В сердце исторической Москвы</div>
				<div class="section-contacts__text">
					В пешей доступности от&nbsp;главной точки на&nbsp;карте ночной жизни города — Патриарших прудов. Гурмэ&#x2011;кластер окружают московские «места силы»: Большая Бронная и&nbsp;Тверской бульвар, а в пяти минутах —
					<br />
					станции метро «Тверская», «Чеховская» и «Пушкинская».
				</div>
				<div class="section-contacts__subtitle ui-title ui-title_default ui-title_color-gray ui-title_size-small">По вопросам аренды</div>
				<div class="section-contacts__buttons grid-flex grid-flex_vertical-center grid-flex_justify-center">
					<a class="section-contacts__button ui-button ui-button_type_default ui-button_size_default" href="#"><span class="ui-button__text">Позвоните</span></a>
					<div class="section-contacts__buttons-divider">Или</div>
					<a class="section-contacts__button ui-button ui-button_type_default ui-button_size_default" href="#"><span class="ui-button__text">Напишите</span></a>
				</div>
				<div class="section-contacts__info grid-flex grid-flex_vertical-center grid-flex_justify-space-beetwen">
					<div class="section-contacts__info-col">
						<div class="section-contacts__info-item">
							<div class="section-contacts__info-title">E-mail</div>
							<a class="section-contacts__info-text" href="mailto:info@tverskoy.com">info@tverskoy.com</a>
						</div>
					</div>
					<div class="section-contacts__info-col">
						<div class="section-contacts__info-item">
							<div class="section-contacts__info-title">Телефон</div>
							<a class="section-contacts__info-text" href="tel:+74951234567">+7 (495) 123-45-67</a>
						</div>
					</div>
					<div class="section-contacts__info-col">
						<div class="section-contacts__info-item">
							<div class="section-contacts__info-title">Адрес кластера</div>
							<div class="section-contacts__info-text">Тверской бульвар 27, стр. 6</div>
						</div>
					</div>
				</div>
			</div>
			<div class="section-contacts__main part-section-main">
				<div class="section-contacts__map part-map">
					<picture class="part-map__image part-map__image_desktop module-photo"><img class="part-map__image-source" src="<?php echo IMAGES ?>/part-map-1.svg" alt="photo" loading="lazy" /></picture>
					<picture class="part-map__image part-map__image_mobile module-photo"><img class="part-map__image-source" src="<?php echo IMAGES ?>/part-map-1-mobile.svg" alt="photo" loading="lazy" /></picture>
				</div>
			</div>
		</div>
	</section>
</main>
<?php
get_footer();
?>
