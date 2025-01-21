<?php
$url = $args['url'];
?>
<?php if($url): ?>
	<a class="part-section-header__prev" href="<?php echo $url; ?>">
		<svg class="part-section-header__prev-icon module-svg-icon module-svg-icon_icon-arrow" viewBox="0 0 16 16"><use href="#icon-arrow"></use></svg>
		<div class="part-section-header__prev-text">Назад</div>
	</a>
<?php endif; ?>
