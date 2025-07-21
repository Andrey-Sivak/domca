<?php
/**
 * Template for rendering the new year reset block.
 *
 * @package domca
 */

$domca_new_year_reset_title          = $attributes['title'] ?? '';
$domca_new_year_reset_subtitle       = $attributes['subtitle'] ?? '';
$domca_new_year_reset_quote          = $attributes['quote'] ?? '';
$domca_new_year_reset_benefits_title = $attributes['benefitsTitle'] ?? '';
$domca_new_year_reset_benefit1       = $attributes['benefit1'] ?? '';
$domca_new_year_reset_benefit2       = $attributes['benefit2'] ?? '';
$domca_new_year_reset_benefit3       = $attributes['benefit3'] ?? '';
$domca_new_year_reset_cta_text       = $attributes['ctaText'] ?? '';

$domca_new_year_reset_base_class = 'wp-block-domca-new-year-reset';

$domca_new_year_reset_wrapper_attributes = get_block_wrapper_attributes(
	array(
		'class' => 'dm-wrap',
	)
);

$domca_new_year_reset_cloud_svg = '<svg
		viewBox="0 0 439 291"
		fill="none"
		class="' . esc_attr( $domca_new_year_reset_base_class ) . '__benefits-item-cloud"
		preserveAspectRatio="none"
	>
		<path
			d="M438.155 192.345C438.155 244.354 395.953 286.518 343.897 286.518H99.2582C47.2019 286.518 5 244.354 5 192.345C5 140.336 47.2019 98.1726 99.2582 98.1726C116.446 98.1726 132.555 102.766 146.427 110.801C145.871 106.672 145.585 102.455 145.585 98.1726C145.585 46.1636 187.783 4 239.839 4C291.899 4 334.097 46.1636 334.097 98.1726C334.097 98.3382 334.097 98.5082 334.093 98.6738C337.318 98.3422 340.585 98.1726 343.897 98.1726C395.953 98.1731 438.155 140.337 438.155 192.345Z"
			fill="#FFF6F6"
		/>
		<path
			d="M85.1994 96.0787C90.0245 95.5014 94.6634 95.1955 99.2582 95.125C115.717 94.9854 131.829 97.3012 148.878 106.57L141.58 111.453C140.931 107.249 140.571 102.82 140.59 98.1726C140.595 96.7027 140.639 95.2179 140.724 93.719C145.451 60.3588 148.62 53.8605 174.325 25.9017C193.566 7.70716 220.584 0.445024 239.839 0.932356C248.938 0.971517 256.478 2.20306 261.834 3.228C278.382 7.36895 280.185 8.94737 299.893 22.5021C318.629 37.5813 326.554 51.3587 332.255 71.3899C333.783 77.2619 335.707 86.8759 335.545 98.1726C335.543 98.3397 335.541 98.5178 335.534 98.709L333.945 97.2397C337.146 96.9492 340.484 96.805 343.897 96.8373C370.225 96.1469 397.984 111.622 408.412 121.58C426.896 136.558 436.566 163.119 437.848 178.748C438.449 183.652 438.504 187.542 438.423 190.502C438.386 191.761 438.255 192.345 438.132 192.345C438.132 192.345 438.132 192.345 438.132 192.345C437.976 192.345 437.835 191.443 437.775 189.84C437.496 182.107 435.905 170.325 430.292 157.864C418.28 136.047 418.367 130.727 389.844 112.024C373.784 103.349 359.214 100.701 343.897 100.811C340.775 100.86 337.61 101.055 334.375 101.417L331.234 101.714L331.336 98.6063C331.337 98.4852 331.336 98.3391 331.334 98.1726C331.207 87.5906 329.607 75.9521 324.472 62.9159C316.777 44.5224 307.466 35.4591 296.357 26.8686C284.922 18.8685 270.534 9.4379 242.6 7.18991C241.67 7.13488 240.75 7.09547 239.839 7.07065C212.992 6.93112 198.742 15.5162 186.826 24.3327C175.354 33.8318 163.615 45.1679 154.873 70.5783C152.139 79.1827 150.592 88.5613 150.569 98.1726C150.557 102.153 150.8 106.16 151.311 110.144L152.591 120.142L143.956 115.066C130.39 107.035 114.488 102.767 99.2582 102.636C70.8657 102.013 47.3261 116.136 35.9633 127.794C21.4094 141.888 8.90729 165.288 9.08203 192.345C9.03857 209.301 13.9969 227.163 24.0611 242.414C38.5477 265.251 67.9271 283.016 99.2582 282.506C123.291 282.427 147.546 282.418 170.636 282.721C224.864 283.434 301.531 284.333 336.95 284.936C339.387 284.978 341.697 285.017 343.897 285.054C372.87 283.789 384.007 280.18 407.688 260.02C422.028 246.98 435.433 222.528 437.424 199.72C438.263 188.329 439.016 190.854 438.372 202.494C436.949 219.592 430.61 232.517 426.775 240.424C418.51 255.934 413.679 263.153 394.453 274.97C374.61 285.548 363.954 288.612 350.76 289.738C348.143 289.876 346.087 289.858 343.897 289.775C335.291 289.423 325.163 288.865 272.861 289.524C207.788 290.343 172.115 290.552 147.473 290.749C135.959 290.841 118.592 290.688 99.2582 290.534C76.1711 290.704 51.0611 280.759 34.4305 265.904C18.3345 252.868 0.32613 223.634 0.955412 192.345C0.389058 160.917 17.7747 133.757 30.0763 122.055C55.9903 99.5695 58.6832 101.487 85.1994 96.0787Z"
			fill="#817676"
		/>
	</svg>';
?>

<section
	<?php
	// phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
	echo $domca_new_year_reset_wrapper_attributes;
	?>
>
	<div class="<?php echo esc_attr( $domca_new_year_reset_base_class . '__wrap dm-container' ); ?>">
		<?php if ( ! empty( $domca_new_year_reset_title ) ) : ?>
			<h2 class="<?php echo esc_attr( $domca_new_year_reset_base_class . '__title dm-heading dm-heading-h2' ); ?>">
				<?php echo wp_kses_post( $domca_new_year_reset_title ); ?>
			</h2>
		<?php endif; ?>

		<?php if ( ! empty( $domca_new_year_reset_subtitle ) ) : ?>
			<p class="<?php echo esc_attr( $domca_new_year_reset_base_class . '__subtitle' ); ?>">
				<?php echo wp_kses_post( $domca_new_year_reset_subtitle ); ?>
			</p>
		<?php endif; ?>

		<?php if ( ! empty( $domca_new_year_reset_quote ) ) : ?>
			<div class="<?php echo esc_attr( $domca_new_year_reset_base_class . '__quote' ); ?>">
				<p class="<?php echo esc_attr( $domca_new_year_reset_base_class . '__quote-text' ); ?>">
					<?php echo wp_kses_post( $domca_new_year_reset_quote ); ?>
				</p>
				<svg
						class="<?php echo esc_attr( $domca_new_year_reset_base_class . '__quote-decor' ); ?>"
						viewBox="0 0 1442 252"
						fill="none"
						preserveAspectRatio="none"
				>
					<path
							d="M3 50C3 25.6995 22.6995 6 47 6H1393C1417.3 6 1437 25.6995 1437 50V202C1437 226.301 1417.3 246 1393 246H47C22.6995 246 3 226.301 3 202V50Z"
							fill="white"
					/>
					<path
							d="M1196.19 249.721C1123.96 248.923 1067.1 252.45 979.062 251.952C891.024 251.453 877.839 249.582 777.013 250.003C676.193 250.424 575.315 249.145 530.422 249.913C485.532 250.682 480.794 248.358 417.045 248.874C353.3 249.39 314.665 249.087 258.914 248.331C219.537 247.798 122.532 247.319 47 247.411C17.715 247.688 0.218595 220.22 1.24867 202C1.21551 199.06 1.17974 196.291 1.14127 193.709C0.419795 145.292 1.23232 91.5837 1.80929 50C1.93305 37.6913 7.20177 27.0124 13.766 19.9653C23.0777 9.94372 34.058 6.65171 41.9963 5.93586C45.4159 5.64622 46.999 5.8982 47 6.02704C47 6.02714 47 6.02724 47 6.02733C46.9963 6.23947 44.557 6.27007 40.2807 6.93164C25.3059 8.57298 3.63534 24.303 4.04666 50C4.17425 58.9134 4.32383 68.3033 4.49869 78.0853C5.49442 133.785 4.8188 149.924 4.82945 202C4.68003 214.457 11.0719 230.598 27.5238 239.211C33.7068 242.404 40.4535 243.896 47 243.832C129.182 243.164 185.348 242.13 287.764 242.896C398.748 243.725 424.24 240.254 580.907 242.221C737.569 244.188 754.058 240.558 910.177 240.075C1066.3 239.593 1263.37 241.596 1357.48 241.43C1368.86 241.409 1380.72 241.386 1393 241.36C1412.64 241.958 1432.67 224.149 1432.22 202C1432.13 154.869 1432.07 103.589 1432.11 50C1432.69 29.5576 1414.24 10.3497 1393 10.7688C1383.65 10.7435 1374.26 10.7142 1364.83 10.6803C1231.41 10.2012 1066.72 11.4107 919.448 10.5558C772.18 9.701 563.975 8.62133 467.787 7.89786C371.603 7.17441 348.159 7.01123 255.576 7.45328C202.359 7.70739 129.047 7.46787 67.1222 6.53336C35.9577 6.06305 43.0195 5.40821 74.3877 5.09489C120.258 4.63673 157.913 4.94281 181.548 4.12443C228.776 2.48886 248.848 1.86143 308.47 2.81339C368.088 3.76524 396.181 1.60201 430.935 1.85099C465.691 2.10009 465.119 3.37605 641.835 2.39298C818.554 1.40987 915.431 1.15902 982.353 0.923011C1049.28 0.686997 1189.01 1.7944 1298.08 1.39469C1324.33 1.29849 1357.11 1.24666 1393 1.2143C1417.84 0.39907 1442.42 23.0651 1441.83 50C1441.85 101.615 1441.87 155.041 1441.94 202C1442.36 231.251 1415.58 252.036 1393 251.108C1379.87 251.158 1368.08 251.219 1357.98 251.293C1268.6 251.947 1268.42 250.519 1196.19 249.721Z"
							fill="#817676"
					/>
				</svg>
			</div>
		<?php endif; ?>

		<div class="<?php echo esc_attr( $domca_new_year_reset_base_class . '__benefits' ); ?>">
			<?php if ( ! empty( $domca_new_year_reset_benefits_title ) ) : ?>
				<p class="<?php echo esc_attr( $domca_new_year_reset_base_class . '__benefits-title' ); ?>">
					<?php echo wp_kses_post( $domca_new_year_reset_benefits_title ); ?>
				</p>
			<?php endif; ?>

			<div class="<?php echo esc_attr( $domca_new_year_reset_base_class . '__benefits-list' ); ?>">
				<div class="<?php echo esc_attr( $domca_new_year_reset_base_class . '__benefits-item' ); ?>">
					<div class="<?php echo esc_attr( $domca_new_year_reset_base_class . '__benefits-item-num' ); ?>">
						1
					</div>
					<?php echo wp_kses( $domca_new_year_reset_cloud_svg, domca_get_svg_allowed_html() ); ?>
					<?php if ( ! empty( $domca_new_year_reset_benefit1 ) ) : ?>
						<p class="<?php echo esc_attr( $domca_new_year_reset_base_class . '__benefits-item-title' ); ?>">
							<?php echo wp_kses_post( $domca_new_year_reset_benefit1 ); ?>
						</p>
					<?php endif; ?>
				</div>

				<div class="<?php echo esc_attr( $domca_new_year_reset_base_class . '__benefits-item' ); ?>">
					<svg
							width="435"
							height="139"
							viewBox="0 0 435 139"
							fill="none"
							class="<?php echo esc_attr( $domca_new_year_reset_base_class . '__benefits-item-2-line left' ); ?>"
					>
						<path
								d="M434.153 7.83417C371.331 7.83417 310.396 13.5429 253.042 24.8026C197.713 35.6641 148.047 51.2029 105.423 70.9858C62.988 90.681 29.7183 113.565 6.53834 139.001L0.739746 133.727C24.6252 107.517 58.7341 84.0169 102.118 63.8808C145.314 43.8325 195.583 28.098 251.529 17.115C309.381 5.75822 370.824 0 434.153 0L434.153 7.83417Z"
								fill="#E0BEBE"
						/>
					</svg>
					<svg
							width="435"
							height="139"
							viewBox="0 0 435 139"
							fill="none"
							class="<?php echo esc_attr( $domca_new_year_reset_base_class . '__benefits-item-2-line right' ); ?>"
					>
						<path
								d="M434.153 7.83417C371.331 7.83417 310.396 13.5429 253.042 24.8026C197.713 35.6641 148.047 51.2029 105.423 70.9858C62.988 90.681 29.7183 113.565 6.53834 139.001L0.739746 133.727C24.6252 107.517 58.7341 84.0169 102.118 63.8808C145.314 43.8325 195.583 28.098 251.529 17.115C309.381 5.75822 370.824 0 434.153 0L434.153 7.83417Z"
								fill="#E0BEBE"
						/>
					</svg>
					<div class="<?php echo esc_attr( $domca_new_year_reset_base_class . '__benefits-item-num' ); ?>">
						2
					</div>
					<?php echo wp_kses( $domca_new_year_reset_cloud_svg, domca_get_svg_allowed_html() ); ?>
					<?php if ( ! empty( $domca_new_year_reset_benefit2 ) ) : ?>
						<p class="<?php echo esc_attr( $domca_new_year_reset_base_class . '__benefits-item-title' ); ?>">
							<?php echo wp_kses_post( $domca_new_year_reset_benefit2 ); ?>
						</p>
					<?php endif; ?>
				</div>

				<div class="<?php echo esc_attr( $domca_new_year_reset_base_class . '__benefits-item' ); ?>">
					<div class="<?php echo esc_attr( $domca_new_year_reset_base_class . '__benefits-item-num' ); ?>">
						3
					</div>
					<?php echo wp_kses( $domca_new_year_reset_cloud_svg, domca_get_svg_allowed_html() ); ?>
					<?php if ( ! empty( $domca_new_year_reset_benefit3 ) ) : ?>
						<p class="<?php echo esc_attr( $domca_new_year_reset_base_class . '__benefits-item-title' ); ?>">
							<?php echo wp_kses_post( $domca_new_year_reset_benefit3 ); ?>
						</p>
					<?php endif; ?>
				</div>
			</div>
		</div>

		<?php if ( ! empty( $domca_new_year_reset_cta_text ) ) : ?>
			<p class="<?php echo esc_attr( $domca_new_year_reset_base_class . '__cta-text' ); ?>">
				<?php echo wp_kses_post( $domca_new_year_reset_cta_text ); ?>
			</p>
		<?php endif; ?>
	</div>
</section>
