<?php
$socials = get_field('socials', 'options');
$menu = wp_get_nav_sorted_menu_items('main');

?>
<!-- Modal -->
<div
	class="modal fade"
	id="book-modal"
	tabindex="-1"
	aria-labelledby="formModalLabel"
	aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="formModalLabel">Заполните форму</h5>
				<button
					type="button"
					class="btn-close"
					data-bs-dismiss="modal"
					aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<?php echo do_shortcode('[contact-form-7 id="f0294cc" title="Форма в модалке"]'); ?>
			</div>
		</div>
	</div>
</div>
<!-- Menu Modal -->
<div
	class="modal fade"
	id="menu-modal"
	tabindex="-1"
	aria-labelledby="programModalLabel"
	aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content" style="background-color: #1d1d1d; color: white">
			<div class="modal-body">
				<div class="menu" id="menu">
					<svg class="menu__thingy">
						<use xlink:href="<?php echo SPRITE ?>#menu-thingy" />
					</svg>
					<button
						class="menu__close"
						data-bs-target="#menu-modal"
						data-bs-toggle="modal">
						<svg class="icon__close">
							<use xlink:href="<?php echo SPRITE ?>#close" />
						</svg>
					</button>
					<?php if($menu): ?>
						<nav>
							<ul class="menu__links">
								<?php foreach($menu as $item): ?>
									<li class="menu__item">
										<div class="borders">
											<div class="border"></div>
											<div class="border"></div>
											<div class="border"></div>
											<div class="border"></div>
										</div>
										<a href="<?php echo $item->url; ?>" class="menu__link"><?php echo $item->title; ?></a>
									</li>
								<?php endforeach; ?>
							</ul>
						</nav>
					<?php endif; ?>

					<div class="menu__bottom">
						<?php if($socials): ?>
							<ul class="social">
								<?php foreach($socials as $social): ?>
									<li class="social__item">
										<a href="<?php echo $social['link'] ?>" target="_blank">
											<svg class="icon__social">
												<use xlink:href="<?php echo SPRITE ?>#<?php echo $social['name'] ?>" />
											</svg>
										</a>
									</li>
								<?php endforeach; ?>
							</ul>
						<?php endif; ?>

						<p class="menu__bottom-text copyright-text">
							все права защищены
						</p>
					</div>
					<svg class="menu__thingy">
						<use xlink:href="<?php echo SPRITE ?>#menu-thingy" />
					</svg>
				</div>
			</div>
		</div>
	</div>
</div>


<div
	class="modal fade js-program-modal is-loading"
	id="program-modal"
	tabindex="-1"
	aria-labelledby="programModalLabel"
	aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered">
		<div class="borders">
			<div class="border"></div>
			<div class="border"></div>
			<div class="border"></div>
			<div class="border"></div>
		</div>
		<!-- modal-lg for larger size if needed -->
		<div class="modal-content js-program-container" style="background-color: #1d1d1d; color: white">
			<div class="site-loader">
				<div class="site-loader__circle"></div>
			</div>
		</div>
	</div>
</div>
