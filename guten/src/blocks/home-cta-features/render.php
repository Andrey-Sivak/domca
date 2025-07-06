<?php
/**
 * Template for rendering the home CTA features block.
 *
 * @package domca
 */

$domca_home_cta_features_title       = $attributes['title'] ?? '';
$domca_home_cta_features_image       = $attributes['image'] ?? null;
$domca_home_cta_features_button      = $attributes['button'] ?? null;
$domca_home_cta_features_sub_heading = $attributes['subHeading'] ?? '';
$domca_home_cta_features_features    = $attributes['features'] ?? array();

$domca_home_cta_features_wrapper_attributes = get_block_wrapper_attributes(
	array(
		'class' => 'dm-wrap',
	)
);

$domca_home_cta_features_base_class = 'wp-block-domca-home-cta-features';
?>

<section
	<?php
	// phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
	echo $domca_home_cta_features_wrapper_attributes;
	?>
>
	<div class="<?php echo esc_attr( $domca_home_cta_features_base_class . '__wrap dm-container' ); ?>">
		<?php if ( $domca_home_cta_features_image['id'] ) : ?>
			<figure class="<?php echo esc_attr( $domca_home_cta_features_base_class . '__image dm-animate' ); ?>">

				<svg class="<?php echo esc_attr( $domca_home_cta_features_base_class . '__image-clip-path' ); ?>">
					<clipPath id="home-cta-features-clip-path" clipPathUnits="objectBoundingBox">
						<path d="M0,0.084 C0,0.038,0.054,0,0.121,0 H0.879 C0.946,0,1,0.038,1,0.084 V0.916 C1,0.962,0.946,1,0.879,1 H0.121 C0.054,1,0,0.962,0,0.916 V0.084"></path>
					</clipPath>
				</svg>

				<svg
						viewBox="0 0 593 844"
						fill="none"
						class="<?php echo esc_attr( $domca_home_cta_features_base_class . '__image-decor' ); ?>"
						preserveAspectRatio="none"
						aria-hidden="true"
				>
					<path
							d="M353.63 840.652C294.038 839.654 247.128 844.062 174.495 843.439C128.119 843.042 106.919 841.944 76 841.34C57.7206 840.839 33.0191 834.674 13.9476 808.144C5.39853 795.814 0.828472 780.77 0.888591 766C0.93555 697.889 1.90764 635.127 1.10854 604.32C0.147543 567.285 3.05298 563.376 2.40767 510.782C1.76245 458.191 2.14169 426.316 3.08608 380.321C4.03047 334.323 4.83672 193.011 3.67659 141.626C3.19436 120.266 3.26038 97.6588 3.53648 76C3.54169 43.5483 27.1807 19.2455 46.1718 11.5586C56.377 7.02175 65.2345 5.88073 71.8717 5.68981C74.6904 5.62587 76.0001 5.8566 76 6.0338C76 6.03392 76 6.03404 76 6.03416C75.993 6.27684 73.9962 6.43886 70.4249 6.74153C53.5624 7.67975 25.8596 19.358 13.9241 47.8901C9.53623 58.4233 8.39847 67.819 8.46624 76C8.83836 109.364 7.87215 125.952 8.51149 187.983C9.31358 265.803 10.9171 312.558 9.8802 404.123C8.84336 495.687 13.1825 516.718 10.7234 645.97C9.67631 701.009 9.898 735.077 10.5444 766C11.4808 795.668 32.336 827.73 76 828.961C88.5034 828.795 102.26 828.666 117.663 828.594C246.466 827.991 409.053 830.495 486.696 830.287C496.087 830.262 505.867 830.232 516 830.2C546.595 831.301 580.55 803.295 579.907 766C579.834 717.988 579.861 666.301 580.15 613.27C580.748 503.2 579.237 367.322 580.305 245.823C580.756 194.589 581.256 134.414 581.752 76C582.96 38.8131 548.581 8.28463 516 9.28977C479.277 8.95684 447.033 8.64443 423.156 8.37233C343.802 7.46801 324.461 7.26403 248.079 7.8166C204.174 8.13424 143.69 7.83484 92.6011 6.6667C66.8899 6.07881 72.7161 5.26026 98.5953 4.86861C136.439 4.29591 167.505 4.67851 187.004 3.65553C225.968 1.61107 242.528 0.826786 291.717 2.01674C340.903 3.20655 364.08 0.502513 392.752 0.813737C417.619 1.08377 420.566 2.31916 516 1.84098C531.362 1.71235 549.782 6.61028 565.408 20.2277C582.43 34.9877 590.987 56.3052 590.987 76C591.828 185.171 592.094 250.489 592.346 297.721C592.641 352.933 591.257 468.219 591.757 558.199C592.042 609.666 592.015 691.541 592.092 766C592.925 812.662 548.701 844.24 516 842.385C505.169 842.448 495.442 842.524 487.108 842.616C413.369 843.434 413.218 841.649 353.63 840.652Z"
							fill="white"
					/>
				</svg>
				<?php
				echo wp_get_attachment_image(
					$domca_home_cta_features_image['id'],
					'full',
					false,
					array()
				);
				?>
			</figure>
		<?php endif; ?>

		<div class="<?php echo esc_attr( $domca_home_cta_features_base_class . '__content' ); ?>">
			<?php if ( $domca_home_cta_features_title ) : ?>
				<h2 class="<?php echo esc_attr( $domca_home_cta_features_base_class . '__title dm-heading dm-heading-h2 dm-animate' ); ?>">
					<?php echo wp_kses_post( $domca_home_cta_features_title ); ?>
				</h2>
			<?php endif; ?>

			<?php
			if ( ! empty( $domca_home_cta_features_button['url'] ) ) :
				?>
				<a
						href="<?php echo esc_url( $domca_home_cta_features_button['url'] ); ?>"
						target="<?php echo esc_attr( $domca_home_cta_features_button['target'] ); ?>"
						class="<?php echo esc_attr( $domca_home_cta_features_base_class . '__button dm-button dm-button-secondary dm-animate' ); ?>"
						aria-label=""
						title="<?php echo esc_attr( $domca_home_cta_features_button['text'] ); ?>"
				>
					<span><?php echo esc_html( $domca_home_cta_features_button['text'] ); ?></span>
				</a>
			<?php endif; ?>

			<svg
					viewBox="0 0 784 12"
					fill="none"
					class="<?php echo esc_attr( $domca_home_cta_features_base_class . '__separator' ); ?>"
					preserveAspectRatio="none"
					aria-hidden="true"
			>
				<path d="M439.15 2.27872C456.455 3.07663 470.077 -0.449966 491.169 0.0484999C512.26 0.546973 515.419 2.41764 539.575 1.99674C563.729 1.57592 587.896 2.8554 598.651 2.08683C609.406 1.31803 610.541 3.64238 625.814 3.12614C641.085 2.60996 650.341 2.91336 663.698 3.66886C677.055 4.42438 718.09 5.06938 733.012 4.14127C747.934 3.21317 764.953 4.82355 775.188 5.20548C778.376 5.32445 780.885 5.48726 782.808 5.65665C783.623 5.72848 784 5.87873 784 6.02704C784 6.02714 784 6.02724 784 6.02733C784 6.212 783.416 6.39358 782.369 6.41691C777.285 6.53017 769.688 6.829 760.713 7.49869C743.977 8.74744 742.149 7.36752 719.551 8.00919C696.953 8.65086 683.376 9.93371 656.786 9.10416C630.197 8.27468 624.09 11.746 586.557 9.77872C549.024 7.81159 545.074 11.442 507.672 11.9247C470.269 12.4074 423.056 10.4044 400.509 10.5705C377.963 10.7366 347.681 11.1594 315.718 10.6803C283.755 10.2012 244.298 11.4107 209.016 10.5558C173.735 9.701 123.854 8.62133 100.81 7.89786C77.7665 7.17441 72.1499 7.01123 49.9695 7.45328C37.22 7.70739 19.6563 7.46787 4.82076 6.53336C-2.64546 6.06305 -0.953615 5.40821 6.56139 5.09489C17.5508 4.63673 26.5719 4.94281 32.2342 4.12443C43.5488 2.48886 48.3576 1.86143 62.6414 2.81339C76.9245 3.76524 83.6548 1.60201 91.981 1.85099C100.308 2.10009 100.171 3.37605 142.507 2.39298C184.844 1.40987 208.054 1.15902 224.087 0.923011C240.119 0.686997 273.597 1.7944 299.726 1.39469C325.856 0.995004 378.976 1.36132 400.39 0.706947C421.803 0.0526252 421.847 1.48082 439.15 2.27872Z"/>
			</svg>

			<?php if ( $domca_home_cta_features_sub_heading ) : ?>
				<p class="<?php echo esc_attr( $domca_home_cta_features_base_class . '__sub-heading dm-animate' ); ?>">
					<?php echo wp_kses_post( $domca_home_cta_features_sub_heading ); ?>
				</p>
			<?php endif; ?>
			<?php if ( $domca_home_cta_features_features ) : ?>
				<div class="<?php echo esc_attr( $domca_home_cta_features_base_class . '__features dm-animate' ); ?>">
					<?php foreach ( $domca_home_cta_features_features as $domca_home_cta_features_feature ) : ?>
						<div class="<?php echo esc_attr( $domca_home_cta_features_base_class . '__feature' ); ?>">
							<svg
									viewBox="0 0 224 195"
									fill="none"
									class="<?php echo esc_attr( $domca_home_cta_features_base_class . '__feature-decor' ); ?>"
									preserveAspectRatio="none"
									aria-hidden="true"
							>
								<path d="M24.126 160.774L124.305 190.612C143.153 200.741 166.53 192.127 174.583 172.084L221.261 55.9065C230.124 33.8463 216.125 9.25647 192.854 6.00895L48.0838 0.337717C31.234 -0.322399 16.6099 12.0495 14.2384 28.9708L0.894422 124.184C-1.39833 140.543 8.48989 156.117 24.126 160.774Z"/>
							</svg>
							<p class="<?php echo esc_attr( $domca_home_cta_features_base_class . '__feature-text' ); ?>">
								<?php echo wp_kses_post( $domca_home_cta_features_feature['text'] ); ?>
							</p>
						</div>
					<?php endforeach; ?>
				</div>
			<?php endif; ?>
		</div>
	</div>
</section>
