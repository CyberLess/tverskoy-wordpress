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
	<?php
		$menu = wp_get_nav_sorted_menu_items('main');
		$lising = get_field('institutions_listing', 'options');
		$listing_url = !empty($lising) ? get_the_permalink($lising->ID) : null;
	?>
	<?php get_template_part('/template-parts/site-sprite'); ?>
	<header class="part-header js-part-header">
		<div class="part-header__inner">
			<div class="part-header__wrapper wrapper">
				<div class="part-header__flex grid-flex grid-flex_justify-space-beetwen grid-flex_vertical-center">
					<div class="part-header__col">
						<a class="part-header__logo" href="/">
							<svg class="part-header__logo-icon module-svg-icon module-svg-icon_icon-logo" viewBox="0, 0, 150, 40"><use href="#icon-logo"></use></svg>
						</a>
					</div>
					<div class="part-header__col">
						<?php if($menu): ?>
							<div class="part-header__menu grid-flex">
								<?php foreach($menu as $item): ?>
									<div class="part-header__menu-item">
										<a class="part-header__menu-link" href="<?php echo $item->url; ?>">
											<?php echo $item->title; ?>
										</a>
									</div>
								<?php endforeach; ?>
							</div>
						<?php endif; ?>

					</div>
					<div class="part-header__col grid-flex">
						<?php if($listing_url): ?>
							<a class="part-header__button ui-button ui-button_type_default ui-button_white ui-button_size_default" href="<?php echo $listing_url; ?>"><span class="ui-button__text">Выбрать где поесть</span></a>
						<?php endif; ?>
						<button class="part-header__button-burger button-burger js-button-burger" aria-label="Кнопка для&nbsp;открытия мобильного меню" data-bs-toggle="modal" data-bs-target="#modal-menu">
							<span class="button-burger__lines" aria-hidden="true">
								<span class="button-burger__line"></span><span class="button-burger__line"></span><span class="button-burger__line"></span><span class="button-burger__line"></span>
							</span>
						</button>
					</div>
				</div>
			</div>
		</div>
	</header>

