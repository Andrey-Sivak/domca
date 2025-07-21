<?php
/**
 * Template for rendering the choose path pricing block.
 *
 * @package domca
 */

$domca_choose_path_pricing_left_column_title     = $attributes['leftColumnTitle'] ?? '';
$domca_choose_path_pricing_right_column_title    = $attributes['rightColumnTitle'] ?? '';
$domca_choose_path_pricing_full_program_title    = $attributes['fullProgramTitle'] ?? '';
$domca_choose_path_pricing_full_program_price    = $attributes['fullProgramPrice'] ?? '';
$domca_choose_path_pricing_full_program_features = $attributes['fullProgramFeatures'] ?? '';
$domca_choose_path_pricing_full_program_button   = $attributes['fullProgramButton'] ?? '';
$domca_choose_path_pricing_ebook_title           = $attributes['ebookTitle'] ?? '';
$domca_choose_path_pricing_ebook_price           = $attributes['ebookPrice'] ?? '';
$domca_choose_path_pricing_ebook_features        = $attributes['ebookFeatures'] ?? '';
$domca_choose_path_pricing_ebook_button          = $attributes['ebookButton'] ?? '';
$domca_choose_path_pricing_main_button           = $attributes['mainButton'] ?? '';

$domca_choose_path_pricing_base_class = 'wp-block-domca-choose-path-pricing';

$domca_choose_path_pricing_wrapper_attributes = get_block_wrapper_attributes(
	array(
		'class' => 'dm-wrap',
	)
);

$domca_choose_path_pricing_decor_svg = '<svg
		viewBox="0 0 593 556"
		fill="none"
		class="' . esc_attr( $domca_choose_path_pricing_base_class . '__column-decor' ) . '"
		preserveAspectRatio="none"
	>
		<path
			d="M6 76C6 37.3401 37.3401 6 76 6H516C554.66 6 586 37.3401 586 76V478C586 516.66 554.66 548 516 548H76C37.3401 548 6 516.66 6 478V76Z"
			fill="#CBA2A2"
		/>
		<path
			d="M388.271 552.652C341.393 551.654 304.491 556.062 247.353 555.439C190.217 554.816 181.659 552.478 116.223 553.004C102.71 553.113 89.1958 553.131 76 553.099C25.2034 553.426 -0.949211 503.539 1.32546 478C1.27586 474.372 1.20514 471.075 1.10854 468.146C0.147543 439.012 3.05298 435.937 2.40767 394.564C1.76245 353.193 2.14169 328.118 3.08608 291.936C4.03047 255.751 4.83672 144.588 3.67659 104.165C3.41287 94.9762 3.31311 85.4935 3.32202 76C2.58185 41.0695 31.6889 14.6113 52.2495 9.07727C60.5791 6.29793 67.5216 5.68409 72.7516 5.64441C74.9667 5.63923 76.0011 5.85344 76 6.0338C76 6.03392 76 6.03404 76 6.03416C75.9965 6.27222 74.4174 6.45944 71.6128 6.65739C58.2313 7.3863 36.815 14.267 22.5814 33.7144C10.7449 50.6315 8.96342 63.2546 8.50297 76C8.37514 91.3123 8.0834 107.958 8.51149 140.632C9.31358 201.85 10.9171 238.63 9.8802 310.66C8.92658 376.907 12.5206 396.22 11.1904 478C11.0748 484.625 11.912 491.718 14.1709 498.992C26.3603 534.334 55.9451 544.193 76 543.636C112.144 542.835 140.165 540.966 202.647 540.594C303.97 539.991 431.87 542.495 492.948 542.287C500.335 542.262 508.029 542.232 516 542.2C545.958 543.355 580.475 515.737 579.876 478C579.856 447.058 579.92 414.52 580.15 381.314C580.748 294.727 579.237 187.838 580.305 92.2601C580.365 86.9555 580.425 81.5291 580.486 76C582.246 44.079 552.304 9.73232 516 10.327C450.351 9.61976 386.599 8.91568 349.092 8.37233C286.668 7.46801 271.453 7.26403 211.366 7.8166C176.828 8.13424 129.249 7.83484 89.0593 6.6667C68.8335 6.07881 73.4167 5.26026 93.7747 4.86861C123.545 4.29591 147.983 4.67851 163.322 3.65553C193.973 1.61107 207 0.826786 245.694 2.01674C284.387 3.20655 302.619 0.502513 325.175 0.813737C347.731 1.12512 347.36 2.72007 462.049 1.49123C481.465 1.28318 499.397 1.10138 516 0.941449C567.15 1.18327 593.157 45.8953 591.971 76C592.128 98.6907 592.238 117.19 592.346 133.086C592.641 176.519 591.257 267.209 591.757 337.992C592.005 373.128 592.017 426.28 592.066 478C593.167 524.49 547.949 556.481 516 554.385C507.48 554.448 499.828 554.524 493.272 554.616C435.265 555.434 435.146 553.649 388.271 552.652Z"
			fill="#817676"
		/>
	</svg>';
?>

<section
	<?php
	// phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
	echo $domca_choose_path_pricing_wrapper_attributes;
	?>
>
	<svg
			viewBox="0 0 1920 12"
			fill="none"
			class="<?php echo esc_attr( $domca_choose_path_pricing_base_class . '__separator' ); ?>"
			preserveAspectRatio="none"
			aria-hidden="true"
	>
		<path d="M1075.47 2.27872C1117.85 3.07663 1151.21 -0.449966 1202.86 0.0484999C1254.52 0.546973 1262.25 2.41764 1321.41 1.99674C1380.56 1.57592 1439.75 2.8554 1466.09 2.08683C1492.42 1.31803 1495.2 3.64238 1532.6 3.12614C1570.01 2.60996 1592.67 2.91336 1625.38 3.66886C1658.09 4.42438 1758.59 5.06938 1795.13 4.14127C1831.67 3.21317 1873.35 4.82355 1898.42 5.20548C1906.23 5.32445 1912.37 5.48726 1917.08 5.65665C1919.08 5.72848 1920 5.87873 1920 6.02704C1920 6.02714 1920 6.02724 1920 6.02733C1920 6.212 1918.57 6.39358 1916.01 6.41691C1903.56 6.53017 1884.95 6.829 1862.97 7.49869C1821.99 8.74744 1817.51 7.36752 1762.16 8.00919C1706.82 8.65086 1673.57 9.93371 1608.46 9.10416C1543.34 8.27468 1528.38 11.746 1436.47 9.77872C1344.55 7.81159 1334.88 11.442 1243.28 11.9247C1151.68 12.4074 1036.06 10.4044 980.84 10.5705C925.623 10.7366 851.463 11.1594 773.187 10.6803C694.91 10.2012 598.281 11.4107 511.876 10.5558C425.473 9.701 303.316 8.62133 246.881 7.89786C190.448 7.17441 176.694 7.01123 122.374 7.45328C91.151 7.70739 48.138 7.46787 11.8059 6.53336C-6.47869 6.06305 -2.33538 5.40821 16.0687 5.09489C42.9815 4.63673 65.0739 4.94281 78.9409 4.12443C106.65 2.48886 118.427 1.86143 153.408 2.81339C188.387 3.76524 204.869 1.60201 225.259 1.85099C245.651 2.10009 245.316 3.37605 348.997 2.39298C452.68 1.40987 509.519 1.15902 548.783 0.923011C588.048 0.686997 670.033 1.7944 734.024 1.39469C798.015 0.995004 928.105 1.36132 980.547 0.706947C1032.99 0.0526252 1033.09 1.48082 1075.47 2.27872Z"/>
	</svg>

	<div class="<?php echo esc_attr( $domca_choose_path_pricing_base_class . '__wrap dm-container' ); ?>">
		<article class="<?php echo esc_attr( $domca_choose_path_pricing_base_class . '__column left' ); ?>">
			<?php if ( ! empty( $domca_choose_path_pricing_left_column_title ) ) : ?>
				<h2 class="<?php echo esc_attr( $domca_choose_path_pricing_base_class . '__title dm-heading dm-heading-h2' ); ?>">
					<?php echo wp_kses_post( $domca_choose_path_pricing_left_column_title ); ?>
				</h2>
			<?php endif; ?>

			<div class="<?php echo esc_attr( $domca_choose_path_pricing_base_class . '__column-content' ); ?>">
				<?php echo wp_kses( $domca_choose_path_pricing_decor_svg, domca_get_svg_allowed_html() ); ?>
				<div class="<?php echo esc_attr( $domca_choose_path_pricing_base_class . '__column-inner' ); ?>">
					<?php if ( ! empty( $domca_choose_path_pricing_full_program_title ) ) : ?>
						<p class="<?php echo esc_attr( $domca_choose_path_pricing_base_class . '__column-title dm-heading dm-heading-h3' ); ?>">
							<?php echo wp_kses_post( $domca_choose_path_pricing_full_program_title ); ?>
						</p>
					<?php endif; ?>

					<?php if ( ! empty( $domca_choose_path_pricing_full_program_price ) ) : ?>
						<p class="<?php echo esc_attr( $domca_choose_path_pricing_base_class . '__column-price' ); ?>">
							<?php echo wp_kses_post( $domca_choose_path_pricing_full_program_price ); ?>
						</p>
					<?php endif; ?>

					<?php if ( ! empty( $domca_choose_path_pricing_full_program_features ) ) : ?>
						<p class="<?php echo esc_attr( $domca_choose_path_pricing_base_class . '__column-features' ); ?>">
							<?php echo wp_kses_post( $domca_choose_path_pricing_full_program_features ); ?>
						</p>
					<?php endif; ?>

					<?php if ( ! empty( $domca_choose_path_pricing_full_program_button ) ) : ?>
						<p class="<?php echo esc_attr( $domca_choose_path_pricing_base_class . '__column-button dm-button dm-button-white' ); ?>">
							<?php echo wp_kses_post( $domca_choose_path_pricing_full_program_button ); ?>
						</p>
					<?php endif; ?>
				</div>
			</div>
		</article>

		<article class="<?php echo esc_attr( $domca_choose_path_pricing_base_class . '__column right' ); ?>">
			<?php if ( ! empty( $domca_choose_path_pricing_right_column_title ) ) : ?>
				<h2 class="<?php echo esc_attr( $domca_choose_path_pricing_base_class . '__title dm-heading dm-heading-h2' ); ?>">
					<?php echo wp_kses_post( $domca_choose_path_pricing_right_column_title ); ?>
				</h2>
			<?php endif; ?>

			<div class="<?php echo esc_attr( $domca_choose_path_pricing_base_class . '__column-content' ); ?>">
				<?php echo wp_kses( $domca_choose_path_pricing_decor_svg, domca_get_svg_allowed_html() ); ?>
				<div class="<?php echo esc_attr( $domca_choose_path_pricing_base_class . '__column-inner' ); ?>">
					<?php if ( ! empty( $domca_choose_path_pricing_ebook_title ) ) : ?>
						<p class="<?php echo esc_attr( $domca_choose_path_pricing_base_class . '__column-title dm-heading dm-heading-h3' ); ?>">
							<?php echo wp_kses_post( $domca_choose_path_pricing_ebook_title ); ?>
						</p>
					<?php endif; ?>

					<?php if ( ! empty( $domca_choose_path_pricing_ebook_price ) ) : ?>
						<p class="<?php echo esc_attr( $domca_choose_path_pricing_base_class . '__column-price' ); ?>">
							<?php echo wp_kses_post( $domca_choose_path_pricing_ebook_price ); ?>
						</p>
					<?php endif; ?>

					<?php if ( ! empty( $domca_choose_path_pricing_ebook_features ) ) : ?>
						<p class="<?php echo esc_attr( $domca_choose_path_pricing_base_class . '__column-features' ); ?>">
							<?php echo wp_kses_post( $domca_choose_path_pricing_ebook_features ); ?>
						</p>
					<?php endif; ?>

					<?php if ( ! empty( $domca_choose_path_pricing_ebook_button ) ) : ?>
						<p class="<?php echo esc_attr( $domca_choose_path_pricing_base_class . '__column-button dm-button dm-button-white' ); ?>">
							<?php echo wp_kses_post( $domca_choose_path_pricing_ebook_button ); ?>
						</p>
					<?php endif; ?>
				</div>
			</div>
		</article>
	</div>

	<?php if ( ! empty( $domca_choose_path_pricing_main_button ) ) : ?>
		<p class="<?php echo esc_attr( $domca_choose_path_pricing_base_class . '__button dm-button dm-button-primary' ); ?>">
			<?php echo wp_kses_post( $domca_choose_path_pricing_main_button ); ?>
		</p>
	<?php endif; ?>
</section>
