<?php
	$phone = get_field('phone', 'options');
	$email = get_field('email', 'options');
	$addr = get_field('addr', 'options');
?>
		<footer class="part-footer">
			<div class="part-footer__wrapper wrapper">
				<div class="part-footer__top">
					<div class="part-footer__flex grid-flex">
						<div class="part-footer__col part-footer__col_left grid-col grid-col_left">
							<a class="part-footer__logo">
								<svg class="part-footer__logo-icon module-svg-icon module-svg-icon_icon-logo" viewBox="0, 0, 225, 60"><use href="#icon-logo"></use></svg>
							</a>
							<div class="part-footer__menu">
								<div class="part-footer__menu-item"><a class="part-footer__menu-link" href="#">Новости</a></div>
								<div class="part-footer__menu-item"><a class="part-footer__menu-link" href="#">Мероприятия</a></div>
								<div class="part-footer__menu-item"><a class="part-footer__menu-link" href="#">Партнерам</a></div>
								<div class="part-footer__menu-item"><a class="part-footer__menu-link" href="#">Контакты</a></div>
							</div>
							<div class="part-footer__contacts">
								<?php if($addr): ?>
									<div class="part-footer__contacts-item grid-flex grid-flex_justify-space-beetwen grid-flex_vertical-center">
										<div class="part-footer__contacts-name">Адрес</div>
										<div class="part-footer__contacts-value"><?php echo $addr; ?></div>
									</div>
								<?php endif; ?>
								<?php if($phone): ?>
									<div class="part-footer__contacts-item grid-flex grid-flex_justify-space-beetwen grid-flex_vertical-center">
										<div class="part-footer__contacts-name">Телефон</div>
										<a class="part-footer__contacts-value" href="tel:<?php echo $phone; ?>"><?php echo $phone; ?></a>
									</div>
								<?php endif; ?>
								<?php if($email): ?>
									<div class="part-footer__contacts-item grid-flex grid-flex_justify-space-beetwen grid-flex_vertical-center">
										<div class="part-footer__contacts-name">Почта</div>
										<a class="part-footer__contacts-value" href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a>
									</div>
								<?php endif; ?>
							</div>
						</div>
						<div class="part-footer__col part-footer__col_right grid-col grid-col_right">
							<div class="part-footer__text grid-flex grid-flex_justify-space-beetwen">
								<div class="part-footer__text-part">T</div>
								<div class="part-footer__text-part">V</div>
								<div class="part-footer__text-part">E</div>
								<div class="part-footer__text-part">R</div>
								<div class="part-footer__text-part">S</div>
								<div class="part-footer__text-part">K</div>
								<div class="part-footer__text-part">O</div>
								<div class="part-footer__text-part">Y</div>
							</div>
							<picture class="part-footer__decor module-photo"><img class="object-fit-cover" src="<?php echo IMAGES ?>/part-footer-1.png" alt="photo" loading="lazy" /></picture>
						</div>
					</div>
				</div>
				<div class="part-footer__bottom">
					<div class="part-footer__flex grid-flex grid-flex_justify-space-beetwen">
						<div class="part-footer__info">2024 все права защищены</div>
						<a class="part-footer__info" href="#">Политика конфиденциальности</a>
					</div>
				</div>
			</div>
		</footer>
		<?php get_template_part('/template-parts/site-modals'); ?>
		<?php wp_footer(); ?>
    </body>
</html>
