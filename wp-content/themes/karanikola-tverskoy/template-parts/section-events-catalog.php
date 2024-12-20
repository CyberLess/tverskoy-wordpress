<?php
$title = $args['title'];
$list = get_posts();
?>
<section class="section-core section-core section-events-catalog" props="{}">
	<div class="section-events-catalog__wrapper wrapper">
		<?php if($title): ?>
			<div class="section-events-catalog__header part-section-header">
				<div class="section-events-catalog__title ui-title ui-title_default ui-title_color-gray ui-title_size-big">
					<?php echo $title; ?>
				</div>
			</div>
		<?php endif; ?>
		<div class="section-events-catalog__main part-section-main">
			<div class="section-events-catalog__flex grid-flex grid-flex_wrap js-event-container">
				<picture class="section-events-catalog__module-photo module-photo event-item-preview js-event-preview"></picture>
				<div class="section-events-catalog__col">
					<a class="section-events-catalog__item item-event grid-flex grid-flex grid-flex_wrap js-event-item" href="#">
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
				<div class="section-events-catalog__col">
					<a class="section-events-catalog__item item-event grid-flex grid-flex grid-flex_wrap js-event-item" href="#">
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
				<div class="section-events-catalog__col">
					<a class="section-events-catalog__item item-event grid-flex grid-flex grid-flex_wrap js-event-item" href="#">
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
				<div class="section-events-catalog__col">
					<a class="section-events-catalog__item item-event grid-flex grid-flex grid-flex_wrap js-event-item" href="#">
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
				<div class="section-events-catalog__col">
					<a class="section-events-catalog__item item-event grid-flex grid-flex grid-flex_wrap js-event-item" href="#">
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
				<div class="section-events-catalog__col">
					<a class="section-events-catalog__item item-event grid-flex grid-flex grid-flex_wrap js-event-item" href="#">
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
				<div class="section-events-catalog__col">
					<a class="section-events-catalog__item item-event grid-flex grid-flex grid-flex_wrap js-event-item" href="#">
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
				<div class="section-events-catalog__col">
					<a class="section-events-catalog__item item-event grid-flex grid-flex grid-flex_wrap js-event-item" href="#">
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
				<div class="section-events-catalog__col">
					<a class="section-events-catalog__item item-event grid-flex grid-flex grid-flex_wrap js-event-item" href="#">
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
			</div>
		</div>
	</div>
</section>
