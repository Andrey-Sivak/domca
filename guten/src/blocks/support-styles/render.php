<?php
/**
 * Server-side renderer for the Support Styles block.
 *
 * @package domca
 */

$domca_support_styles_base_class = 'wp-block-domca-support-styles';

$domca_support_styles_title  = isset( $attributes['title'] ) ? (string) $attributes['title'] : '';
$domca_support_styles_items  = isset( $attributes['items'] ) && is_array( $attributes['items'] ) ? $attributes['items'] : array();
$domca_support_styles_button = isset( $attributes['button'] ) ? (string) $attributes['button'] : '';

$domca_support_styles_shape_item = static function ( $item ) {
	return array(
		'title' => isset( $item['title'] ) ? (string) $item['title'] : '',
		'items' => isset( $item['items'] ) && is_array( $item['items'] ) ? $item['items'] : array(),
		'note'  => isset( $item['note'] ) ? (string) $item['note'] : '',
	);
};

$domca_support_styles_has_content = (bool) wp_strip_all_tags( $domca_support_styles_title );
if ( ! $domca_support_styles_has_content ) {
	foreach ( $domca_support_styles_items as $domca_support_styles_it ) {
		$domca_support_styles_it = $domca_support_styles_shape_item( $domca_support_styles_it );
		if ( wp_strip_all_tags( $domca_support_styles_it['title'] ) || wp_strip_all_tags( $domca_support_styles_it['note'] ) ) {
			$domca_support_styles_has_content = true;
			break;
		}
		if ( ! empty( array_filter( $domca_support_styles_it['items'], static fn( $domca_support_styles_s ) => (bool) wp_strip_all_tags( (string) $domca_support_styles_s ) ) ) ) {
			$domca_support_styles_has_content = true;
			break;
		}
	}
}
if ( ! $domca_support_styles_has_content && ! wp_strip_all_tags( $domca_support_styles_button ) ) {
	return;
}

$domca_support_styles_wrapper_attributes = get_block_wrapper_attributes(
	array(
		'class' => 'dm-wrap',
	)
);

$domca_support_styles_render_decor_svg = static function () use ( $domca_support_styles_base_class ) {
	ob_start();
	?>
	<svg
			preserveAspectRatio="none"
			aria-hidden="true"
			viewBox="0 0 691 407"
			fill="none"
			class="<?php echo esc_attr( "{$domca_support_styles_base_class}__item-decor" ); ?>"
	>
		<path
				d="M4 62C4 31.6243 28.6243 7 59 7H629C659.376 7 684 31.6243 684 62V344C684 374.376 659.376 399 629 399H59C28.6244 399 4 374.376 4 344V62Z"
				fill="white"
		/>
		<path
				d="M505.736 403.652C460.497 402.654 424.885 407.062 369.746 406.439C314.607 405.816 306.348 403.478 243.2 404.004C180.055 404.53 116.874 402.931 88.7571 403.891C75.3722 404.349 67.6869 403.93 59 403.435C48.9785 402.472 36.1663 401.369 19.0601 386.871C5.37797 374.384 0.0334416 358.365 0.108376 344C0.196589 326.267 0.550427 309.91 1.08608 290.105C2.03047 255.186 2.83672 147.908 1.67659 108.899C1.22284 93.6418 1.25449 77.5457 1.48983 62C1.53587 35.8853 21.0336 16.595 36.221 10.8347C44.0637 7.524 50.8079 6.74332 55.8611 6.65821C58.0046 6.63511 59.0005 6.85442 59 7.0338C59 7.03392 59 7.03404 59 7.03416C58.9945 7.27364 57.4801 7.45317 54.7757 7.68246C41.9828 8.41567 21.0858 17.0177 11.4777 38.223C7.4043 47.2703 6.4578 55.1799 6.50399 62C6.76513 85.4473 5.89719 98.8449 6.51149 144.091C7.31358 203.168 8.91713 238.663 7.8802 308.174C7.67632 321.843 7.68031 333.441 7.79959 344C9.00359 370.802 26.9292 392.179 59 393.52C75.6054 393.464 95.3101 393.648 120.376 394.277C218.496 396.736 228.823 392.198 326.602 391.594C424.382 390.991 547.811 393.495 606.754 393.287C613.883 393.262 621.308 393.232 629 393.2C652.382 394.023 678.407 372.583 677.902 344C677.836 308.38 677.869 270.161 678.15 230.975C678.517 179.681 678.089 121.003 677.952 62C678.529 35.6767 654.659 12.3984 629 12.9131C621.076 12.8568 613.211 12.785 605.425 12.6948C513.189 11.6263 382.788 10.2767 322.544 9.37233C262.303 8.46801 247.619 8.26403 189.634 8.8166C156.303 9.13424 110.387 8.83484 71.6028 7.6667C52.084 7.07881 56.507 6.26026 76.1533 5.86861C104.882 5.29591 128.466 5.67851 143.269 4.65553C172.848 2.61107 185.42 1.82679 222.762 3.01674C260.102 4.20655 277.696 1.50251 299.463 1.81374C321.231 2.12512 320.873 3.72007 431.552 2.49123C529.055 1.40867 587.751 1.03643 629 0.761451C635.207 0.72393 641.057 1.61558 646.409 3.16088C664.697 7.52405 690.571 29.4205 690.104 62C689.82 102.255 689.463 149.029 689.757 189.169C690.037 227.568 690.016 288.264 690.088 344C690.785 381.469 655.186 406.859 629 405.385C620.778 405.448 613.393 405.524 607.067 405.616C551.088 406.434 550.973 404.649 505.736 403.652Z"
				fill="#817676"
		/>
	</svg>
	<?php
	return (string) ob_get_clean();
};

$domca_support_styles__separator = '<svg
			viewBox="0 0 1920 12"
			fill="none"
			class="' . esc_attr( $domca_support_styles_base_class . '__separator' ) . '"
			preserveAspectRatio="none"
			aria-hidden="true"
	>
		<path d="M1075.47 2.27872C1117.85 3.07663 1151.21 -0.449966 1202.86 0.0484999C1254.52 0.546973 1262.25 2.41764 1321.41 1.99674C1380.56 1.57592 1439.75 2.8554 1466.09 2.08683C1492.42 1.31803 1495.2 3.64238 1532.6 3.12614C1570.01 2.60996 1592.67 2.91336 1625.38 3.66886C1658.09 4.42438 1758.59 5.06938 1795.13 4.14127C1831.67 3.21317 1873.35 4.82355 1898.42 5.20548C1906.23 5.32445 1912.37 5.48726 1917.08 5.65665C1919.08 5.72848 1920 5.87873 1920 6.02704C1920 6.02714 1920 6.02724 1920 6.02733C1920 6.212 1918.57 6.39358 1916.01 6.41691C1903.56 6.53017 1884.95 6.829 1862.97 7.49869C1821.99 8.74744 1817.51 7.36752 1762.16 8.00919C1706.82 8.65086 1673.57 9.93371 1608.46 9.10416C1543.34 8.27468 1528.38 11.746 1436.47 9.77872C1344.55 7.81159 1334.88 11.442 1243.28 11.9247C1151.68 12.4074 1036.06 10.4044 980.84 10.5705C925.623 10.7366 851.463 11.1594 773.187 10.6803C694.91 10.2012 598.281 11.4107 511.876 10.5558C425.473 9.701 303.316 8.62133 246.881 7.89786C190.448 7.17441 176.694 7.01123 122.374 7.45328C91.151 7.70739 48.138 7.46787 11.8059 6.53336C-6.47869 6.06305 -2.33538 5.40821 16.0687 5.09489C42.9815 4.63673 65.0739 4.94281 78.9409 4.12443C106.65 2.48886 118.427 1.86143 153.408 2.81339C188.387 3.76524 204.869 1.60201 225.259 1.85099C245.651 2.10009 245.316 3.37605 348.997 2.39298C452.68 1.40987 509.519 1.15902 548.783 0.923011C588.048 0.686997 670.033 1.7944 734.024 1.39469C798.015 0.995004 928.105 1.36132 980.547 0.706947C1032.99 0.0526252 1033.09 1.48082 1075.47 2.27872Z"/>
	</svg>'


?>
<section
		<?php
        // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
		echo $domca_support_styles_wrapper_attributes;
		?>
>
	<?php echo wp_kses( $domca_support_styles__separator, domca_get_svg_allowed_html() ); ?>
	<?php echo wp_kses( $domca_support_styles__separator, domca_get_svg_allowed_html() ); ?>

	<div class="<?php echo esc_attr( "{$domca_support_styles_base_class}__wrap dm-container" ); ?>">
		<?php if ( $domca_support_styles_title ) : ?>
			<h2 class="<?php echo esc_attr( "{$domca_support_styles_base_class}__title dm-heading dm-heading-h2" ); ?>">
				<?php echo wp_kses_post( $domca_support_styles_title ); ?>
			</h2>
		<?php endif; ?>

		<?php if ( ! empty( $domca_support_styles_items ) ) : ?>
			<div class="<?php echo esc_attr( "{$domca_support_styles_base_class}__items" ); ?>">
				<?php foreach ( $domca_support_styles_items as $domca_support_styles_item ) : ?>
					<?php
					$domca_support_styles_item             = $domca_support_styles_shape_item( $domca_support_styles_item );
					$domca_support_styles_has_item_content = wp_strip_all_tags( $domca_support_styles_item['title'] ) || wp_strip_all_tags( $domca_support_styles_item['note'] ) || ! empty( array_filter( $domca_support_styles_item['items'], static fn( $domca_support_styles_s ) => (bool) wp_strip_all_tags( (string) $domca_support_styles_s ) ) );
					if ( ! $domca_support_styles_has_item_content ) {
						continue;
					}
					?>
					<div class="<?php echo esc_attr( "{$domca_support_styles_base_class}__item" ); ?>">
						<?php
                        // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
						echo $domca_support_styles_render_decor_svg();
						?>
						<div class="<?php echo esc_attr( "{$domca_support_styles_base_class}__item-content" ); ?>">
							<div>
								<?php if ( $domca_support_styles_item['title'] ) : ?>
									<p class="<?php echo esc_attr( "{$domca_support_styles_base_class}__item-title" ); ?>">
										<?php echo wp_kses_post( $domca_support_styles_item['title'] ); ?>
									</p>
								<?php endif; ?>

								<?php
								$domca_support_styles_sub_items = array_filter(
									array_map(
										static fn( $domca_support_styles_s ) => (string) $domca_support_styles_s,
										$domca_support_styles_item['items']
									),
									static fn( $domca_support_styles_s ) => (bool) wp_strip_all_tags( $domca_support_styles_s )
								);
								?>
								<?php if ( ! empty( $domca_support_styles_sub_items ) ) : ?>
									<div class="<?php echo esc_attr( "{$domca_support_styles_base_class}__item-list" ); ?>">
										<?php foreach ( $domca_support_styles_sub_items as $domca_support_styles_sub_text ) : ?>
											<div class="<?php echo esc_attr( "{$domca_support_styles_base_class}__item-list-item" ); ?>">
												<p class="<?php echo esc_attr( "{$domca_support_styles_base_class}__item-text" ); ?>">
													<?php echo wp_kses_post( $domca_support_styles_sub_text ); ?>
												</p>
											</div>
										<?php endforeach; ?>
									</div>
								<?php endif; ?>
							</div>

							<?php if ( $domca_support_styles_item['note'] ) : ?>
								<div class="<?php echo esc_attr( "{$domca_support_styles_base_class}__item-note" ); ?>">
									<svg width="30" height="30" viewBox="0 0 30 30" fill="none">
										<rect width="30" height="30" rx="15" fill="#817676"/>
										<path d="M9 15L12.9 19L22 11" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
									</svg>
									<p class="<?php echo esc_attr( "{$domca_support_styles_base_class}__item-note-text" ); ?>">
										<?php echo wp_kses_post( $domca_support_styles_item['note'] ); ?>
									</p>
								</div>
							<?php endif; ?>
						</div>
					</div>
				<?php endforeach; ?>
			</div>
		<?php endif; ?>

		<?php if ( $domca_support_styles_button ) : ?>
			<p class="<?php echo esc_attr( "{$domca_support_styles_base_class}__button dm-button dm-button-primary" ); ?>">
				<?php echo wp_kses_post( $domca_support_styles_button ); ?>
			</p>
		<?php endif; ?>
	</div>
</section>
