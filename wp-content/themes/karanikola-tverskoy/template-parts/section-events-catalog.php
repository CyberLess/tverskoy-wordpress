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
			<div class="section-events-catalog__main part-section-main">
				<div class="section-events-catalog__flex grid-flex grid-flex_wrap js-event-container">
					<picture class="section-events-catalog__module-photo module-photo event-item-preview js-event-preview"></picture>
					<?php foreach( $posts as $item ): ?>
						<div class="section-events-catalog__col">
							<?php get_template_part('template-parts/item-event', null, ['item' => $item]); ?>
						</div>
					<? endforeach; ?>
				</div>
			</div>
		<?php endif; ?>
	</div>
</section>
