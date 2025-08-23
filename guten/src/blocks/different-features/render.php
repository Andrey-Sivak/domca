<?php
/**
 * Render callback for domca/different-features
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/** @var array    $attributes */
/** @var string   $content */
/** @var WP_Block $block */

$base_class = 'wp-block-domca-different-features';

$title    = $attributes['title'] ?? '';
$features = isset( $attributes['features'] ) && is_array( $attributes['features'] ) ? $attributes['features'] : array();

// Fallback if editor mistakenly wrote to a different key.
if ( empty( $features ) && isset( $attributes['reasons'] ) && is_array( $attributes['reasons'] ) ) {
	$features = $attributes['reasons'];
}

$wrapper_attrs = get_block_wrapper_attributes(
	array(
		'class' => $base_class . ' dm-wrap',
	)
);
?>
<section <?php echo $wrapper_attrs; ?>>
	<div class="<?php echo esc_attr( $base_class ); ?>__wrap dm-container">
		<?php if ( ! empty( $title ) ) : ?>
			<h2 class="<?php echo esc_attr( $base_class ); ?>__title dm-heading dm-heading-h2">
				<?php echo wp_kses_post( $title ); ?>
			</h2>
		<?php endif; ?>

		<?php if ( ! empty( $features ) ) : ?>
			<div class="<?php echo esc_attr( $base_class ); ?>__reasons">
				<?php
				foreach ( $features as $item ) :
					$text = is_array( $item ) && isset( $item['text'] ) ? $item['text'] : '';
					if ( '' === trim( (string) $text ) ) {
						continue;
					}
					?>
					<div class="<?php echo esc_attr( $base_class ); ?>__reason">
						<svg
								viewBox="0 0 346 285"
								preserveAspectRatio="none"
								aria-hidden="true"
								fill="none"
								class="<?php echo esc_attr( $base_class ); ?>__reason-decor"
						>
							<path
									d="M4 55C4 27.3858 26.3858 5 54 5H290C317.614 5 340 27.3858 340 55V229C340 256.614 317.614 279 290 279H54C26.3858 279 4 256.614 4 229V55Z"
									class="<?php echo esc_attr( $base_class ); ?>__reason-decor-bg"
							/>
							<path
									d="M221.79 282.721C196.756 281.923 177.05 285.45 146.538 284.952C116.026 284.453 111.456 282.582 76.5116 283.003C68.9428 283.094 61.3732 283.106 54 283.075C23.5613 283.205 6.10945 257.41 2.67383 245.544C0.115255 238.459 0.078098 233.759 0.380008 229C0.828415 223.479 1.41162 217.515 1.12614 205.297C0.609959 183.204 0.913355 169.814 1.66886 150.492C2.37417 132.453 2.98316 79.5183 2.30589 55C2.25771 53.1889 2.29602 51.5331 2.37473 50.0484C2.73686 26.3158 26.5124 7.85382 41.1866 5.83562C45.7563 4.7784 49.4608 4.61786 52.2616 4.68611C53.4489 4.7199 54.0004 4.88075 54 5.02704C54 5.02714 54 5.02724 54 5.02733C53.9993 5.21483 53.1515 5.38076 51.6591 5.47118C44.4651 5.84883 33.2347 8.58765 23.7391 17.0944C10.5522 30.8329 7.25137 36.3198 5.83308 55C5.84641 59.1604 5.89678 63.9655 6.00919 69.6927C6.65086 102.384 7.93371 122.025 7.10416 160.491C6.47989 189.44 8.29166 201.606 8.38768 229C8.45201 237.162 10.2939 247.206 17.5311 257.401C28.9371 272.629 43.3739 275.819 54 275.542C73.8082 274.921 88.705 273.378 122.663 273.075C176.772 272.593 245.073 274.596 277.69 274.43C281.635 274.409 285.743 274.386 290 274.36C310.593 275.21 335.457 255.982 335.117 229C335.145 218.602 335.208 207.962 335.32 197.19C335.761 154.594 334.769 102.799 335.279 55C335.323 51.2853 334.928 47.6008 334.115 44.0401C330.654 26.0899 311.864 8.36484 290 8.47828C254.579 7.90687 220.062 7.33681 199.836 6.89786C166.501 6.17441 158.375 6.01123 126.288 6.45328C107.844 6.70739 82.4358 6.46787 60.9739 5.53336C50.1729 5.06305 52.6205 4.40821 63.492 4.09489C79.3898 3.63673 92.4401 3.94281 100.632 3.12443C117 1.48886 123.956 0.861429 144.62 1.81339C165.283 2.76524 175.019 0.60201 187.064 0.85099C199.11 1.10009 198.911 2.37605 260.158 1.39298C270.93 1.22007 280.846 1.06982 290 0.938308C331.152 1.95243 345.618 36.6114 344.982 55C345.015 58.4121 345.046 61.6098 345.077 64.6314C345.313 87.8252 344.206 136.256 344.605 174.055C344.756 188.327 344.798 208.166 344.827 229C346.104 261.607 312.666 285.925 290 284.108C285.45 284.158 281.364 284.219 277.863 284.293C246.886 284.947 246.822 283.519 221.79 282.721Z"
									fill="#817676"
							/>
						</svg>

						<p class="<?php echo esc_attr( $base_class ); ?>__reason-text">
							<?php echo wp_kses_post( $text ); ?>
						</p>
					</div>
				<?php endforeach; ?>
			</div>
		<?php endif; ?>
	</div>
</section>
