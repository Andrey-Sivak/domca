<?php
/**
 * Template for rendering the One Small Step block.
 *
 * @package domca
 */

$domca_one_small_step_text   = $attributes['text'] ?? '';
$domca_one_small_step_button = $attributes['button'] ?? '';
$domca_one_small_step_image  = $attributes['image'] ?? array();

$domca_one_small_step_image_id = $domca_one_small_step_image['id'] ?? null;

$domca_one_small_step_base_class = 'wp-block-domca-one-small-step';

$domca_one_small_step_wrapper_attributes = get_block_wrapper_attributes(
	array(
		'class' => 'dm-wrap',
	)
);

// Section separator SVG
$domca_one_small_step_separator_svg = static function () use ( $domca_one_small_step_base_class ) {
	ob_start();
	?>
	<svg
			viewBox="0 0 1920 12"
			fill="none"
			class="<?php echo esc_attr( "{$domca_one_small_step_base_class}__separator" ); ?>"
			preserveAspectRatio="none"
			aria-hidden="true"
	>
		<path d="M1075.47 2.27872C1117.85 3.07663 1151.21 -0.449966 1202.86 0.0484999C1254.52 0.546973 1262.25 2.41764 1321.41 1.99674C1380.56 1.57592 1439.75 2.8554 1466.09 2.08683C1492.42 1.31803 1495.2 3.64238 1532.6 3.12614C1570.01 2.60996 1592.67 2.91336 1625.38 3.66886C1658.09 4.42438 1758.59 5.06938 1795.13 4.14127C1831.67 3.21317 1873.35 4.82355 1898.42 5.20548C1906.23 5.32445 1912.37 5.48726 1917.08 5.65665C1919.08 5.72848 1920 5.87873 1920 6.02704C1920 6.02714 1920 6.02724 1920 6.02733C1920 6.212 1918.57 6.39358 1916.01 6.41691C1903.56 6.53017 1884.95 6.829 1862.97 7.49869C1821.99 8.74744 1817.51 7.36752 1762.16 8.00919C1706.82 8.65086 1673.57 9.93371 1608.46 9.10416C1543.34 8.27468 1528.38 11.746 1436.47 9.77872C1344.55 7.81159 1334.88 11.442 1243.28 11.9247C1151.68 12.4074 1036.06 10.4044 980.84 10.5705C925.623 10.7366 851.463 11.1594 773.187 10.6803C694.91 10.2012 598.281 11.4107 511.876 10.5558C425.473 9.701 303.316 8.62133 246.881 7.89786C190.448 7.17441 176.694 7.01123 122.374 7.45328C91.151 7.70739 48.138 7.46787 11.8059 6.53336C-6.47869 6.06305 -2.33538 5.40821 16.0687 5.09489C42.9815 4.63673 65.0739 4.94281 78.9409 4.12443C106.65 2.48886 118.427 1.86143 153.408 2.81339C188.387 3.76524 204.869 1.60201 225.259 1.85099C245.651 2.10009 245.316 3.37605 348.997 2.39298C452.68 1.40987 509.519 1.15902 548.783 0.923011C588.048 0.686997 670.033 1.7944 734.024 1.39469C798.015 0.995004 928.105 1.36132 980.547 0.706947C1032.99 0.0526252 1033.09 1.48082 1075.47 2.27872Z"/>
	</svg>
	<?php
	return (string) ob_get_clean();
}
?>

<section
		<?php
        // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
		echo $domca_one_small_step_wrapper_attributes;
		?>
>
	<?php
    // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
	echo $domca_one_small_step_separator_svg();
	?>

	<div class="<?php echo esc_attr( $domca_one_small_step_base_class . '__wrap dm-container' ); ?>">
		<div class="<?php echo esc_attr( $domca_one_small_step_base_class . '__image' ); ?>">
			<?php
			if ( ! empty( $domca_one_small_step_image_id ) ) {
                // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
				echo wp_get_attachment_image( (int) $domca_one_small_step_image_id, 'full' );
			} elseif ( ! empty( $domca_one_small_step_image_url ) ) {
				?>
				<img src="<?php echo esc_url( $domca_one_small_step_image_url ); ?>" alt="" loading="lazy"/>
				<?php
			}
			?>
		</div>

		<div class="<?php echo esc_attr( $domca_one_small_step_base_class . '__content' ); ?>">
			<?php if ( ! empty( $domca_one_small_step_text ) ) : ?>
				<p class="<?php echo esc_attr( $domca_one_small_step_base_class . '__text' ); ?>">
					<?php echo wp_kses_post( $domca_one_small_step_text ); ?>
				</p>
			<?php endif; ?>

			<?php if ( ! empty( $domca_one_small_step_button ) ) : ?>
				<p class="<?php echo esc_attr( $domca_one_small_step_base_class . '__button dm-button dm-button-white' ); ?>">
					<?php echo wp_kses_post( $domca_one_small_step_button ); ?>
				</p>
			<?php endif; ?>
		</div>
	</div>
</section>
