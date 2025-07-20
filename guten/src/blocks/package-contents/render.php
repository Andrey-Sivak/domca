<?php
/**
 * Template for rendering the package contents block.
 *
 * @package domca
 */

$domca_package_contents_title            = $attributes['title'] ?? '';
$domca_package_contents_feature1_title   = $attributes['feature1Title'] ?? '';
$domca_package_contents_feature1_details = $attributes['feature1Details'] ?? array();
$domca_package_contents_feature2_title   = $attributes['feature2Title'] ?? '';
$domca_package_contents_feature2_details = $attributes['feature2Details'] ?? array();
$domca_package_contents_feature3_title   = $attributes['feature3Title'] ?? '';
$domca_package_contents_feature3_details = $attributes['feature3Details'] ?? array();
$domca_package_contents_feature4_title   = $attributes['feature4Title'] ?? '';
$domca_package_contents_feature4_details = $attributes['feature4Details'] ?? array();
$domca_package_contents_bonus_title      = $attributes['bonusTitle'] ?? '';
$domca_package_contents_bonus_details    = $attributes['bonusDetails'] ?? array();

$domca_package_contents_base_class = 'wp-block-domca-package-contents';

$domca_package_contents_wrapper_attributes = get_block_wrapper_attributes(
	array(
		'class' => 'dm-wrap',
	)
);

/**
 * Render feature details with dots
 */
if ( ! function_exists( 'render_feature_details' ) ) {
	function render_feature_details( $details, $base_class ) {
		if ( empty( $details ) ) {
			return '';
		}

		$output = '';
		foreach ( $details as $detail ) {
			if ( ! empty( $detail ) ) {
				$output .= '<div class="' . esc_attr( $base_class . '__feature-detail' ) . '">';
				$output .= '<p>' . wp_kses_post( $detail ) . '</p>';
				$output .= '</div>';
			}
		}

		return $output;
	}
}

$domca_package_contents_arrow = '<svg viewBox="0 0 174 1323" fill="none" class="' . esc_attr( $domca_package_contents_base_class ) . '__feature-arrow" preserveAspectRatio="none" aria-hidden="true">
<path d="M107.206 8.35889V12.8389H95.6858C42.8858 12.8389 0.00585938 55.7189 0.00585938 108.519L0 1322.5H56.64L56.6458 108.519C56.6458 86.9189 74.2458 69.4789 95.6858 69.4789H107.206V76.1989C107.206 84.0389 112.486 86.9189 119.046 82.5989L168.326 50.1188C174.886 45.7988 174.886 38.7589 168.326 34.5989L119.046 2.11877C112.646 -2.36123 107.206 0.518887 107.206 8.35889Z" fill="#FFF6F6"/>
</svg>
'
?>

<section
	<?php
	// phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
	echo $domca_package_contents_wrapper_attributes;
	?>
>
	<div class="<?php echo esc_attr( $domca_package_contents_base_class . '__wrap dm-container' ); ?>">
		<?php if ( ! empty( $domca_package_contents_title ) ) : ?>
			<h2 class="<?php echo esc_attr( $domca_package_contents_base_class . '__title dm-heading dm-heading-h2' ); ?>">
				<?php echo wp_kses_post( $domca_package_contents_title ); ?>
			</h2>
		<?php endif; ?>

		<div class="<?php echo esc_attr( $domca_package_contents_base_class . '__features' ); ?>">
			<div class="<?php echo esc_attr( $domca_package_contents_base_class . '__feature' ); ?>">
				<?php echo wp_kses( $domca_package_contents_arrow, domca_get_svg_allowed_html() ); ?>
				<?php if ( ! empty( $domca_package_contents_feature1_title ) ) : ?>
					<p class="<?php echo esc_attr( $domca_package_contents_base_class . '__feature-title' ); ?>">
						<?php echo wp_kses_post( $domca_package_contents_feature1_title ); ?>
					</p>
				<?php endif; ?>
				<?php
				// phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
				echo render_feature_details( $domca_package_contents_feature1_details, $domca_package_contents_base_class );
				?>
			</div>

			<div class="<?php echo esc_attr( $domca_package_contents_base_class . '__feature' ); ?>">
				<?php echo wp_kses( $domca_package_contents_arrow, domca_get_svg_allowed_html() ); ?>
				<?php if ( ! empty( $domca_package_contents_feature2_title ) ) : ?>
					<p class="<?php echo esc_attr( $domca_package_contents_base_class . '__feature-title' ); ?>">
						<?php echo wp_kses_post( $domca_package_contents_feature2_title ); ?>
					</p>
				<?php endif; ?>
				<?php
				// phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
				echo render_feature_details( $domca_package_contents_feature2_details, $domca_package_contents_base_class );
				?>
			</div>

			<div class="<?php echo esc_attr( $domca_package_contents_base_class . '__feature' ); ?>">
				<?php echo wp_kses( $domca_package_contents_arrow, domca_get_svg_allowed_html() ); ?>
				<?php if ( ! empty( $domca_package_contents_feature3_title ) ) : ?>
					<p class="<?php echo esc_attr( $domca_package_contents_base_class . '__feature-title' ); ?>">
						<?php echo wp_kses_post( $domca_package_contents_feature3_title ); ?>
					</p>
				<?php endif; ?>
				<?php
				// phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
				echo render_feature_details( $domca_package_contents_feature3_details, $domca_package_contents_base_class );
				?>
			</div>

			<div class="<?php echo esc_attr( $domca_package_contents_base_class . '__feature' ); ?>">
				<?php echo wp_kses( $domca_package_contents_arrow, domca_get_svg_allowed_html() ); ?>
				<?php if ( ! empty( $domca_package_contents_feature4_title ) ) : ?>
					<p class="<?php echo esc_attr( $domca_package_contents_base_class . '__feature-title' ); ?>">
						<?php echo wp_kses_post( $domca_package_contents_feature4_title ); ?>
					</p>
				<?php endif; ?>
				<?php
				// phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
				echo render_feature_details( $domca_package_contents_feature4_details, $domca_package_contents_base_class );
				?>
			</div>

			<div class="<?php echo esc_attr( $domca_package_contents_base_class . '__feature' ); ?>">
				<?php echo wp_kses( $domca_package_contents_arrow, domca_get_svg_allowed_html() ); ?>
				<?php if ( ! empty( $domca_package_contents_bonus_title ) ) : ?>
					<p class="<?php echo esc_attr( $domca_package_contents_base_class . '__feature-title' ); ?>">
						<?php echo wp_kses_post( $domca_package_contents_bonus_title ); ?>
					</p>
				<?php endif; ?>
				<?php
				// phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
				echo render_feature_details( $domca_package_contents_bonus_details, $domca_package_contents_base_class );
				?>
			</div>
		</div>
	</div>
</section>

<style>
	.<?php echo esc_attr( $domca_package_contents_base_class ); ?> {
		background-image: url('<?php echo get_template_directory_uri() . '/images/bg-logo-pattern-2.svg'; ?>');
		background-position: top center;
		background-repeat: repeat;
		background-size: 100% auto;
	}
</style>
