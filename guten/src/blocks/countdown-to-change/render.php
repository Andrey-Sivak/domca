<?php
/**
 *
 * @package domca
 */

$domca_countdown_to_change_text       = $attributes['text'] ?? '';
$domca_countdown_to_change_cta_text   = $attributes['ctaText'] ?? '';
$domca_countdown_to_change_button1    = $attributes['button1'] ?? '';
$domca_countdown_to_change_button2    = $attributes['button2'] ?? '';
$domca_countdown_to_change_date_start = $attributes['dateStart'] ?? '';
$domca_countdown_to_change_we_begin   = $attributes['weBegin'] ?? '';
$domca_countdown_to_change_days_to_go = $attributes['daysToGo'] ?? '';

$formatted_date = '';
$days_remaining = 0;

if ( ! empty( $domca_countdown_to_change_date_start ) ) {
	$date_obj    = new DateTime( $domca_countdown_to_change_date_start );
	$base_format = 'F j, Y';

	$timestamp      = $date_obj->getTimestamp();
	$formatted_date = function_exists( 'wp_date' )
			? wp_date( $base_format, $timestamp )
			: date_i18n( $base_format, $timestamp );

	$today          = new DateTime();
	$diff           = $date_obj->diff( $today );
	$days_remaining = $diff->invert ? $diff->days : 0;
}


$domca_countdown_to_change_wrapper_attributes = get_block_wrapper_attributes(
	array(
		'class' => 'dm-wrap',
	)
);

$domca_countdown_to_change_base_class = 'wp-block-domca-countdown-to-change';

$domca_countdown_to_change_decor_bg = '<svg
                        class="' . esc_attr( $domca_countdown_to_change_base_class ) . '__content-right-decor"
                        preserveAspectRatio="none"
                        aria-hidden="true"
                        viewBox="0 0 463 108"
                        fill="none"
                >
                    <path
                            d="M2 21C2 11.0589 10.0589 3 20 3H442C451.941 3 460 11.0589 460 21V87C460 96.9411 451.941 105 442 105H20C10.0589 105 2 96.9411 2 87V21Z"
                            fill="white"
                    />
                    <path
                            d="M376.501 106.861C352.462 106.462 333.538 108.225 304.238 107.976C274.939 107.727 270.551 106.791 236.995 107.002C203.442 107.212 169.869 106.572 154.928 106.957C139.988 107.341 138.411 106.179 117.195 106.437C95.9805 106.695 83.1223 106.543 64.5681 106.166C55.7366 105.986 38.1948 105.818 20 105.743C9.66375 105.994 0.925294 96.2807 1.2894 87C1.26481 77.5051 1.19678 69.1897 1.07064 63.555C0.754215 49.4208 1.02791 33.9321 1.29463 21C1.38925 14.6527 4.80432 9.486 8.43085 6.6949C12.0201 3.88714 15.666 3.06612 18.3306 2.904C19.4753 2.84184 19.9989 2.94468 20 3.01352C20 3.01357 20 3.01362 20 3.01367C19.998 3.11342 19.1899 3.16343 17.7646 3.34752C11.7917 3.77718 2.35425 10.1743 2.64468 21C2.67737 22.3332 2.71222 23.692 2.74935 25.0744C3.37372 48.3222 2.68376 50.8626 3.0046 82.2552C3.02108 83.8685 3.03842 85.4487 3.05641 87C3.1502 96.9336 11.7854 103.868 20 103.553C35.9603 103.334 51.729 103.196 74.1696 103.448C111.106 103.863 119.59 102.127 171.73 103.111C223.868 104.094 229.355 102.279 281.313 102.038C333.271 101.796 398.858 102.798 430.179 102.715C433.967 102.705 437.912 102.693 442 102.68C449.726 102.919 457.777 95.8915 457.596 87C457.545 66.6995 457.519 44.282 457.607 21C457.631 17.6285 456.529 14.2562 454.473 11.5293C451.678 7.75871 446.973 5.26091 442 5.28692C400.973 5.2321 353.426 5.6535 310.357 5.27791C261.345 4.8505 192.053 4.31067 160.041 3.94893C128.03 3.5872 120.228 3.50561 89.4157 3.72664C71.7046 3.85369 47.3058 3.73393 26.6968 3.26668C16.325 3.03152 18.6753 2.7041 29.1148 2.54744C44.3808 2.31837 56.9126 2.4714 64.7785 2.06221C80.4962 1.24443 87.1765 0.930714 107.019 1.4067C126.861 1.88262 136.21 0.801005 147.776 0.925495C159.343 1.05005 159.153 1.68803 217.965 1.19649C276.779 0.704936 309.02 0.579512 331.292 0.461506C353.564 0.343499 400.07 0.897202 436.368 0.697345C438.157 0.687493 440.038 0.678572 442 0.670474C451.272 0.194459 462.556 8.78757 462.396 21C462.422 42.0846 462.421 66.1037 462.459 87C462.642 99.3631 451.247 107.957 442 107.554C437.631 107.579 433.707 107.61 430.345 107.647C400.599 107.974 400.538 107.26 376.501 106.861Z"
                            fill="#817676"
                    />
                </svg>';
?>

<section
	<?php
	// phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
	echo $domca_countdown_to_change_wrapper_attributes;
	?>
>
	<div class="<?php echo esc_attr( $domca_countdown_to_change_base_class ); ?>__wrap dm-container">
		<div class="<?php echo esc_attr( $domca_countdown_to_change_base_class ); ?>__content-left">
			<p class="<?php echo esc_attr( $domca_countdown_to_change_base_class ); ?>__text">
				<?php echo wp_kses_post( $domca_countdown_to_change_text ); ?>
			</p>
			<p class="<?php echo esc_attr( $domca_countdown_to_change_base_class ); ?>__cta-text">
				<?php echo wp_kses_post( $domca_countdown_to_change_cta_text ); ?>
			</p>
			<div class="<?php echo esc_attr( $domca_countdown_to_change_base_class ); ?>__buttons">
				<p class="<?php echo esc_attr( $domca_countdown_to_change_base_class ); ?>__button dm-button dm-button-secondary">
					<?php echo wp_kses_post( $domca_countdown_to_change_button1 ); ?>
				</p>
				<p class="<?php echo esc_attr( $domca_countdown_to_change_base_class ); ?>__button dm-button dm-button-primary">
					<?php echo wp_kses_post( $domca_countdown_to_change_button2 ); ?>
				</p>
			</div>
		</div>

		<div class="<?php echo esc_attr( $domca_countdown_to_change_base_class ); ?>__content-right">
			<div class="<?php echo esc_attr( $domca_countdown_to_change_base_class ); ?>__we-begin">
				<?php echo wp_kses( $domca_countdown_to_change_decor_bg, domca_get_svg_allowed_html() ); ?>
				<div class="<?php echo esc_attr( $domca_countdown_to_change_base_class ); ?>__we-begin-content">
					<?php get_template_part( '/vector-images/icon-calendar' ); ?>
					<div class="<?php echo esc_attr( $domca_countdown_to_change_base_class ); ?>__we-begin-text">
						<p class="<?php echo esc_attr( $domca_countdown_to_change_base_class ); ?>__we-begin-text-title">
							<?php echo wp_kses_post( $domca_countdown_to_change_we_begin ); ?>
						</p>
						<p class="<?php echo esc_attr( $domca_countdown_to_change_base_class ); ?>__date">
							<?php echo esc_html( $formatted_date ); ?>
						</p>
					</div>
				</div>
			</div>

			<div class="<?php echo esc_attr( $domca_countdown_to_change_base_class ); ?>__days-to-go">
				<?php echo wp_kses( $domca_countdown_to_change_decor_bg, domca_get_svg_allowed_html() ); ?>
				<div class="<?php echo esc_attr( $domca_countdown_to_change_base_class ); ?>__days-to-go-content">
					<?php get_template_part( '/vector-images/icon-clock' ); ?>
					<div class="<?php echo esc_attr( $domca_countdown_to_change_base_class ); ?>__days-to-go-text">
						<p class="<?php echo esc_attr( $domca_countdown_to_change_base_class ); ?>__days-number">
							<?php echo esc_html( $days_remaining ); ?>
						</p>
						<p class="<?php echo esc_attr( $domca_countdown_to_change_base_class ); ?>__days-to-go-text-title">
							<?php echo wp_kses_post( $domca_countdown_to_change_days_to_go ); ?>
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
