<?php
$title = $args['title'];
$query = new WP_Query;
$posts = $query->query($args['query']);
$total_pages = $query->max_num_pages;

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
		<?php if($posts): ?>
			<form action="<?php echo admin_url( "admin-ajax.php" ) ?>" data-scroll="true" class="section-events-catalog__main part-section-main js-listing">
				<input type="hidden" name="page" value="1">
				<input type="hidden" name="perPage" value="<?php echo get_option('posts_per_page'); ?>">
				<input type="hidden" name="type" value="events">
				<input type="hidden" name="action" value="load_more">
				<template id="skeleton">
					<div class="section-events-catalog__col">
						<div class="section-events-catalog__item item-event is-active item-event_skeleton grid-flex grid-flex grid-flex_wrap">
							<div class="item-event__col item-event__col_left grid-col grid-col_left"><div class="item-event__title ui-title _">&nbsp;</div></div>
							<div class="item-event__col item-event__col_right grid-col grid-col_right">
								<div class="item-event__title ui-title _">&nbsp;</div>
								<div class="item-event__text">&nbsp;</div>
								<div class="item-event__author">&nbsp;</div>
								<div class="item-event__time">&nbsp;</div>
							</div>
						</div>
					</div>
				</template>

				<div class="section-events-catalog__flex grid-flex grid-flex_wrap js-event-container js-listing-body">
					<picture class="section-events-catalog__module-photo module-photo event-item-preview js-event-preview"></picture>
					<?php foreach( $posts as $item ): ?>
						<div class="section-events-catalog__col">
							<?php get_template_part('template-parts/item-event', null, [
								'item' => $item,
								'class' => 'section-events-catalog__item'
							]); ?>
						</div>
					<? endforeach; ?>
				</div>
			</form>
		<?php endif; ?>
	</div>
</section>
