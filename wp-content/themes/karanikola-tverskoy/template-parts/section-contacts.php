<?php
$title = $args['title'];
$description = $args['description'];
$map = $args['map'];
$map_mobile = $args['map_mobile'];

$phone = get_field('phone', 'options');
$email = get_field('email', 'options');
$addr = get_field('addr', 'options');
?>
<section class="section-core section-core section-contacts" props="{}">
	<div class="section-contacts__wrapper wrapper">
		<div class="section-contacts__header part-section-header">
			<?php if($title): ?>
				<div class="section-contacts__title ui-title ui-title_default ui-title_color-gray ui-title_size-big"><?php echo $title; ?></div>
			<?php endif; ?>
			<?php if($description): ?>
				<div class="section-contacts__text">
					<?php echo $description; ?>
				</div>
			<?php endif; ?>

			<div class="section-contacts__subtitle ui-title ui-title_default ui-title_color-gray ui-title_size-small">По вопросам аренды</div>
			<div class="section-contacts__buttons grid-flex grid-flex_vertical-center grid-flex_justify-center">
				<?php if($phone): ?>
					<a class="section-contacts__button ui-button ui-button_type_default ui-button_size_default" href="tel:<?php echo $phone ?>"><span class="ui-button__text">Позвоните</span></a>
				<?php endif; ?>
				<?php if($phone && $email): ?>
					<div class="section-contacts__buttons-divider">Или</div>
				<?php endif; ?>
				<?php if($email): ?>
					<a class="section-contacts__button ui-button ui-button_type_default ui-button_size_default" href="mailto:<?php echo $email ?>"><span class="ui-button__text">Напишите</span></a>
				<?php endif; ?>

			</div>
			<div class="section-contacts__info grid-flex grid-flex_vertical-center grid-flex_justify-space-beetwen">
				<?php if($email): ?>
					<div class="section-contacts__info-col">
						<div class="section-contacts__info-item">
							<div class="section-contacts__info-title">E-mail</div>
							<a class="section-contacts__info-text" href="mailto:<?php echo $email; ?>">
								<?php echo $email; ?>
							</a>
						</div>
					</div>
				<?php endif; ?>
				<?php if($phone): ?>
					<div class="section-contacts__info-col">
						<div class="section-contacts__info-item">
							<div class="section-contacts__info-title">Телефон</div>
							<a class="section-contacts__info-text" href="tel:<?php echo $phone; ?>"><?php echo $phone; ?></a>
						</div>
					</div>
				<?php endif; ?>
				<?php if($addr): ?>
					<div class="section-contacts__info-col">
						<div class="section-contacts__info-item">
							<div class="section-contacts__info-title">Адрес кластера</div>
							<div class="section-contacts__info-text"><?php echo $addr; ?></div>
						</div>
					</div>
				<?php endif; ?>
			</div>
		</div>
		<div class="section-contacts__main part-section-main">
			<div class="section-contacts__map part-map">
				<?php if($map): ?>
					<picture class="part-map__image part-map__image_desktop module-photo"><img class="part-map__image-source" src="<?php echo $map['sizes']['hd'] ?>" alt="photo" loading="lazy" /></picture>
				<?php endif; ?>

				<?php if($map_mobile): ?>
					<picture class="part-map__image part-map__image_mobile module-photo"><img class="part-map__image-source" src="<?php echo $map_mobile['sizes']['medium_large'] ?>" alt="photo" loading="lazy" /></picture>
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>
