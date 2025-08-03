<?php
/**
 * Template for rendering the "What I Do Today" block.
 *
 * @package domca
 */

$domca_what_i_do_today_title = $attributes['title'] ?? '';
$domca_what_i_do_today_text1 = $attributes['text1'] ?? '';
$domca_what_i_do_today_text2 = $attributes['text2'] ?? '';

$domca_what_i_do_today_base_class = 'wp-block-domca-what-i-do-today';

$domca_what_i_do_today_wrapper_attributes = get_block_wrapper_attributes(
	array(
		'class' => $domca_what_i_do_today_base_class . ' dm-wrap',
	)
);

$domca_what_i_do_today_decor_svg = '<svg
	viewBox="0 0 671 375"
	fill="none"
	class="' . esc_attr( $domca_what_i_do_today_base_class . '__decor' ) . '"
	aria-hidden="true"
	preserveAspectRatio="none"
>
	<path
		d="M4 57C4 29.3858 26.3858 7 54 7H614C641.614 7 664 29.3858 664 57V317C664 344.614 641.614 367 614 367H54C26.3858 367 4 344.614 4 317V57Z"
		fill="white"
	/>
	<path
		d="M496.475 371.652C453.342 370.654 419.388 375.062 366.815 374.439C314.243 373.816 306.369 371.478 246.161 372.004C185.955 372.53 125.716 370.931 98.9077 371.891C78.7759 372.613 72.1675 371.154 54 370.656C47.575 370.458 39.6344 369.433 30.3977 365.128C8.98293 354.676 -0.00804675 334.805 0.225615 317C0.388048 304.662 0.686468 292.405 1.08608 278.318C2.03047 245.024 2.83672 142.741 1.67659 105.548C1.18361 89.743 1.2636 72.9942 1.55526 57C1.6996 33.6193 18.7293 16.3589 32.3079 10.8377C39.7344 7.52919 46.1877 6.74257 51.0046 6.65832C53.052 6.63501 54.0002 6.85445 54 7.0338C54 7.03392 54 7.03404 54 7.03416C53.9942 7.27365 52.5526 7.45316 49.9768 7.68231C37.8147 8.38451 17.8569 17.1329 9.84891 37.8147C7.07146 45.0034 6.3671 51.4052 6.44939 57C6.86643 81.8589 5.86297 93.5586 6.51149 139.102C7.31358 195.428 8.91713 229.27 7.8802 295.546C7.75839 303.332 7.71078 310.413 7.71763 317C8.82442 344.666 28.5023 361.334 54 361.672C73.112 361.388 96.2751 361.415 129.055 362.277C222.606 364.736 232.453 360.198 325.68 359.594C418.908 358.991 536.591 361.495 592.79 361.287C599.587 361.262 606.666 361.232 614 361.2C635.091 361.922 658.377 342.599 657.909 317C657.834 281.953 657.858 244.175 658.15 205.405C658.49 160.182 658.149 108.94 657.987 57C658.495 33.4848 637.152 12.5018 614 13.012C600.834 12.9514 587.8 12.8505 574.986 12.6948C487.045 11.6263 362.714 10.2767 305.275 9.37233C247.838 8.46801 233.838 8.26403 178.552 8.8166C146.773 9.13424 102.995 8.83484 66.0161 7.6667C47.406 7.07881 51.6231 6.26026 70.3547 5.86861C97.7465 5.29591 120.232 5.67851 134.346 4.65553C162.548 2.61107 174.535 1.82679 210.138 3.01674C245.739 4.20655 262.515 1.50251 283.269 1.81374C304.023 2.12512 303.682 3.72007 409.208 2.49123C514.737 1.26234 572.588 0.94878 612.551 0.653764C613.027 0.650243 613.511 0.646961 614 0.643912C634.856 -1.24679 670.628 19.8714 670.01 57C669.75 92.2856 669.495 131.428 669.757 165.545C670.044 203.038 670.015 262.828 670.094 317C670.709 351.394 638.174 374.694 614 373.385C606.161 373.448 599.12 373.524 593.088 373.616C539.715 374.434 539.605 372.649 496.475 371.652Z"
		fill="#817676"
	/>
</svg>';

?>

<section
	<?php
	// phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
	echo $domca_what_i_do_today_wrapper_attributes;
	?>
>
	<div class="<?php echo esc_attr( $domca_what_i_do_today_base_class . '__wrap dm-container' ); ?>">
		<?php if ( ! empty( $domca_what_i_do_today_title ) ) : ?>
			<h2 class="<?php echo esc_attr( $domca_what_i_do_today_base_class . '__title dm-heading dm-heading-h2' ); ?>">
				<?php echo wp_kses_post( $domca_what_i_do_today_title ); ?>
			</h2>
		<?php endif; ?>

		<div class="<?php echo esc_attr( $domca_what_i_do_today_base_class . '__content' ); ?>">
			<?php if ( ! empty( $domca_what_i_do_today_text1 ) ) : ?>
				<div class="<?php echo esc_attr( $domca_what_i_do_today_base_class . '__item left' ); ?>">
					<?php echo wp_kses( $domca_what_i_do_today_decor_svg, domca_get_svg_allowed_html() ); ?>
					<p class="<?php echo esc_attr( $domca_what_i_do_today_base_class . '__text' ); ?>">
						<?php echo wp_kses_post( $domca_what_i_do_today_text1 ); ?>
					</p>
				</div>
			<?php endif; ?>

			<?php if ( ! empty( $domca_what_i_do_today_text2 ) ) : ?>
				<div class="<?php echo esc_attr( $domca_what_i_do_today_base_class . '__item right' ); ?>">
					<?php echo wp_kses( $domca_what_i_do_today_decor_svg, domca_get_svg_allowed_html() ); ?>
					<p class="<?php echo esc_attr( $domca_what_i_do_today_base_class . '__text' ); ?>">
						<?php echo wp_kses_post( $domca_what_i_do_today_text2 ); ?>
					</p>
				</div>
			<?php endif; ?>
		</div>
	</div>
</section>
