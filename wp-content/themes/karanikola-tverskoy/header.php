<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1">
    <title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<script>
		var options = {
			ajax: "<?php echo admin_url( 'admin-ajax.php' ) ?>"
		}
	</script>
    <?php wp_head(); ?>
</head>

<body>
	<?php get_template_part('/template-parts/site-sprite'); ?>
	<header class="part-header js-part-header">
		<div class="part-header__wrapper wrapper">
			<div class="part-header__flex grid-flex grid-flex_justify-space-beetwen grid-flex_vertical-center">
				<div class="part-header__col">
					<a class="part-header__logo" href="/">
						<svg class="part-header__logo-icon module-svg-icon module-svg-icon_icon-logo" viewBox="0, 0, 150, 40"><use href="#icon-logo"></use></svg>
					</a>
				</div>
				<div class="part-header__col">
					<div class="part-header__menu grid-flex">
						<div class="part-header__menu-item"><a class="part-header__menu-link" href="#">Новости</a></div>
						<div class="part-header__menu-item"><a class="part-header__menu-link" href="#">Мероприятия</a></div>
						<div class="part-header__menu-item"><a class="part-header__menu-link" href="#">Партнерам</a></div>
						<div class="part-header__menu-item"><a class="part-header__menu-link" href="#">Контакты</a></div>
					</div>
				</div>
				<div class="part-header__col grid-flex">
					<a class="part-header__button ui-button ui-button_type_default ui-button_size_default" href="#"><span class="ui-button__text">Выбрать где поесть</span></a>
					<button class="part-header__button-burger button-burger js-button-burger" aria-label="Кнопка для&nbsp;открытия мобильного меню" data-bs-toggle="modal" data-bs-target="#modal-menu">
						<span class="button-burger__lines" aria-hidden="true">
							<span class="button-burger__line"></span><span class="button-burger__line"></span><span class="button-burger__line"></span><span class="button-burger__line"></span>
						</span>
					</button>
				</div>
			</div>
		</div>
	</header>

