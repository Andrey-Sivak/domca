<?php
/**
 *
 * @package domca
 */

$domca_reviews_slider_title    = $attributes['title'] ?? '';
$domca_reviews_slider_subtitle = $attributes['subtitle'] ?? '';
$domca_reviews_slider_items    = $attributes['items'] ?? null;

$domca_reviews_slider_wrapper_attributes = get_block_wrapper_attributes(
	array(
		'class' => 'dm-wrap',
	)
);

$domca_reviews_slider_base_class = 'wp-block-domca-reviews-slider';
?>

<section
	<?php echo $domca_reviews_slider_wrapper_attributes; ?>
>
	<div class="<?php echo esc_attr( $domca_reviews_slider_base_class . '__wrap dm-container' ); ?>">
		<h2 class="<?php echo esc_attr( $domca_reviews_slider_base_class . '__title dm-heading dm-heading-h2 dm-animate' ); ?>">
			<?php echo wp_kses_post( $domca_reviews_slider_title ); ?>
		</h2>
		<?php if ( ! empty( $domca_reviews_slider_subtitle ) ) : ?>
			<p class="<?php echo esc_attr( $domca_reviews_slider_base_class . '__subtitle dm-animate' ); ?>">
				<?php echo wp_kses_post( $domca_reviews_slider_subtitle ); ?>
			</p>
		<?php endif; ?>

		<?php if ( ! empty( $domca_reviews_slider_items ) ) : ?>
			<div
					class="<?php echo esc_attr( $domca_reviews_slider_base_class . '__list' . ( count( $domca_reviews_slider_items ) > 3 ? '' : ' dm-items-' . count( $domca_reviews_slider_items ) ) ); ?>"
			>

				<?php
				if ( count( $domca_reviews_slider_items ) > 3 ) {
					echo '<div class="swiper-wrapper" role="list">';
				}
				?>

				<?php foreach ( $domca_reviews_slider_items as $domca_reviews_slider_item ) : ?>
					<?php if ( ! empty( $domca_reviews_slider_item['text'] ) || ! empty( $domca_reviews_slider_item['author'] ) ) : ?>
						<div class="<?php echo esc_attr( $domca_reviews_slider_base_class . '__item' . ( count( $domca_reviews_slider_items ) > 3 ? ' swiper-slide' : '' ) ); ?>">
							<svg
									viewBox="0 0 467 427"
									fill="none"
									class="<?php echo esc_attr( $domca_reviews_slider_base_class . '__item-decor' ); ?>"
									preserveAspectRatio="none"
									aria-hidden="true"
							>
								<path d="M59.2784 341.001L230.299 393.475C261.187 412.307 305.541 393.646 325.691 353.341L442.493 119.704C464.672 75.3405 446.6 27.4928 405.821 22.6118L147.991 21.0787C117.982 20.9002 88.2433 46.4285 79.1653 80.1603L28.0844 269.963C19.3077 302.575 32.585 332.811 59.2784 341.001Z"
									  fill="#CBA2A2"/>
								<path d="M117.306 39.3994L374.096 14.5347C393.558 12.6503 410.581 17.4009 422.508 26.6172"
									  stroke="#393E41" stroke-width="2.5" stroke-miterlimit="10"/>
								<path d="M47.2102 101.059C44.9271 59.6553 86.3826 21.9193 131.331 24.4855L368.05 38.0009C398.798 39.7565 424.353 60.8588 423.98 85.9566L400.859 302.385C396.691 330.692 371.309 355.196 340.32 360.435L155.341 391.71C122.466 397.268 93.7614 379.417 88.9081 350.396L47.2102 101.059Z"
									  fill="white"/>
								<path d="M74.7131 45.0575C34.3315 57.8623 5.49062 99.29 13.4604 138.555L61.6102 375.81C69.9156 416.738 114.776 436.264 158.084 417.798L354.154 334.217"
									  stroke="#393E41" stroke-width="2.5" stroke-miterlimit="10"/>
								<path d="M445.072 37.3121C458.91 49.2887 466.607 67.1682 464.698 87.7888L450.211 244.235C447.504 273.493 425.83 301.162 395.536 314.2"
									  stroke="#393E41" stroke-width="2.5" stroke-miterlimit="10"/>
								<path d="M103.784 17.1448C107.209 17.4308 109.802 19.7864 110.086 23.7013C110.321 26.9321 108.009 29.5021 104.764 29.8691C98.1232 30.62 94.7115 24.8852 94.8468 19.0085C94.9573 14.2085 97.3157 10.1418 101.166 7.08534C102.889 5.71882 104.575 4.48772 106.473 3.4501C106.871 3.23263 107.364 3.40638 107.525 3.81838C108.01 5.06689 109.092 6.60831 107.869 7.49034C101.105 12.3698 99.6083 16.7964 103.784 17.1448Z"
									  stroke="#393E41" stroke-width="2.5" stroke-miterlimit="10"/>
								<path d="M85.2299 20.8392C88.6549 21.1252 91.2481 23.4808 91.5328 27.3957C91.7677 30.6266 89.4553 33.1964 86.2099 33.5635C79.5695 34.3143 76.1578 28.5795 76.2931 22.7028C76.4036 17.9028 78.762 13.8362 82.6123 10.7797C84.3349 9.41315 86.0211 8.18205 87.9193 7.14443C88.3172 6.92697 88.8108 7.10072 88.9709 7.51272C89.4561 8.76122 90.5382 10.3025 89.3155 11.1847C82.5516 16.0642 81.0546 20.4906 85.2299 20.8392Z"
									  stroke="#393E41" stroke-width="2.5" stroke-miterlimit="10"/>
								<path d="M363.899 332.804C360.451 332.89 357.603 330.833 356.884 326.979C356.291 323.799 358.313 320.999 361.51 320.285C368.051 318.823 372.09 324.145 372.608 329.99C373.03 334.765 371.129 339.055 367.627 342.503C366.06 344.045 364.515 345.448 362.736 346.683C362.364 346.942 361.852 346.822 361.646 346.431C361.024 345.245 359.773 343.832 360.895 342.825C367.101 337.253 368.103 332.699 363.899 332.804Z"
									  stroke="#393E41" stroke-width="2.5" stroke-miterlimit="10"/>
								<path d="M381.938 327.105C378.489 327.191 375.641 325.134 374.923 321.28C374.33 318.099 376.351 315.3 379.548 314.585C386.089 313.123 390.129 318.445 390.646 324.291C391.068 329.066 389.167 333.355 385.665 336.804C384.099 338.345 382.553 339.749 380.775 340.984C380.402 341.242 379.89 341.123 379.685 340.732C379.062 339.545 377.812 338.133 378.934 337.125C385.14 331.554 386.142 327 381.938 327.105Z"
									  stroke="#393E41" stroke-width="2.5" stroke-miterlimit="10"/>
							</svg>

							<div class="<?php echo esc_attr( $domca_reviews_slider_base_class . '__item-content' ); ?>">

								<?php if ( ! empty( $domca_reviews_slider_item['text'] ) ) : ?>
									<blockquote
											class="<?php echo esc_attr( $domca_reviews_slider_base_class . '__item-text' ); ?>">
										<?php echo wp_kses_post( $domca_reviews_slider_item['text'] ); ?>
									</blockquote>
								<?php endif; ?>

								<div class="<?php echo esc_attr( $domca_reviews_slider_base_class . '__item-author' ); ?>">
									<?php if ( ! empty( $domca_reviews_slider_item['author'] ) ) : ?>
										<cite class="<?php echo esc_attr( $domca_reviews_slider_base_class . '__author' ); ?>">
											<?php echo '– ' . wp_kses_post( $domca_reviews_slider_item['author'] ); ?>
										</cite>
									<?php endif; ?>
								</div>
							</div>
						</div>
					<?php endif; ?>
				<?php endforeach; ?>

				<?php
				if ( count( $domca_reviews_slider_items ) > 3 ) {
					echo '</div>';
					echo '<div class="' . $domca_reviews_slider_base_class . '__pagination swiper-pagination' . '"></div>';
				}
				?>
			</div>
		<?php endif; ?>
	</div>
</section>
