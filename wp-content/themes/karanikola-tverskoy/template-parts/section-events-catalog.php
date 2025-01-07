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
				<input type="hidden" name="type" value="events">
				<input type="hidden" name="action" value="load_more">
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
