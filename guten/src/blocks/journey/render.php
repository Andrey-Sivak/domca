<?php
/**
 * Template for rendering the Journey block.
 *
 * @package domca
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/** @var array $attributes */

$domca_journey_title       = $attributes['title'] ?? '';
$domca_journey_text        = $attributes['text'] ?? '';
$domca_journey_subtitle    = $attributes['subtitle'] ?? '';
$domca_journey_steps       = ( isset( $attributes['steps'] ) && is_array( $attributes['steps'] ) ) ? $attributes['steps'] : array();
$domca_journey_close_title = $attributes['closeTitle'] ?? '';
$domca_journey_close_text  = $attributes['closeText'] ?? '';

$domca_journey_base_class = 'wp-block-domca-journey';

$domca_journey_wrapper_attributes = get_block_wrapper_attributes(
	array(
		'class' => 'dm-wrap',
	)
);

$domca_journey_decor = '<svg
                        viewBox="0 0 1442 164"
                        fill="none"
                        class="' . $domca_journey_base_class . '__close-decor"
                        aria-hidden="true"
                        preserveAspectRatio="none"
                >
                <path d="M3 38C3 20.3269 17.3269 6 35 6H1405C1422.67 6 1437 20.3269 1437 38V126C1437 143.673 1422.67 158 1405 158H35C17.3269 158 3 143.673 3 126V38Z" fill="white"/>
<path d="M1217.54 161.721C1148.74 160.923 1094.58 164.45 1010.72 163.952C926.862 163.453 914.303 161.582 818.265 162.003C722.232 162.424 626.145 161.145 583.384 161.913C540.625 162.682 536.113 160.358 475.391 160.874C414.673 161.39 377.872 161.087 324.769 160.331C271.662 159.576 108.512 158.931 49.1857 159.859C44.5033 159.932 39.7689 159.989 35 160.033C17.019 160.719 0.30706 144.118 0.942071 126C1.15184 93.7464 1.70129 62.6568 2.02836 38C2.09332 32.4205 3.57588 27.2495 5.84527 22.9693C12.1046 11.3354 22.7303 6.89077 30.2283 6.00624C33.4842 5.62542 35.0013 5.90312 35 6.02704C35 6.02714 35 6.02724 35 6.02733C34.9982 6.24609 32.6684 6.24019 28.6411 7.05721C17.6198 8.93636 3.54776 20.5276 3.82981 38C3.99489 50.8764 4.21306 65.0998 4.49869 80.3197C4.85411 99.2574 4.99659 113.394 5.03333 126C5.20152 141.585 16.6509 155.623 35 156.13C51.8754 156.194 72.6796 156.205 102.707 155.991C192.553 155.349 246.533 154.066 352.249 154.896C457.963 155.725 482.244 152.254 631.471 154.221C780.694 156.188 796.399 152.558 945.105 152.075C1093.81 151.593 1281.53 153.596 1371.17 153.43C1382.01 153.409 1393.3 153.386 1405 153.36C1418.84 153.754 1432.59 141.216 1432.25 126C1432.19 98.1835 1432.14 68.7022 1432.11 38C1432.49 23.8886 1419.74 10.5747 1405 10.9002C1367.85 10.8898 1329.37 10.8278 1290.25 10.6803C1163.17 10.2012 1006.29 11.4107 866.017 10.5558C725.744 9.701 527.425 8.62133 435.805 7.89786C344.188 7.17441 321.857 7.01123 233.672 7.45328C182.981 7.70739 113.151 7.46787 54.1666 6.53336C24.482 6.06305 31.2086 5.40821 61.0871 5.09489C104.779 4.63673 140.646 4.94281 163.159 4.12443C208.144 2.48886 227.263 1.86143 284.053 2.81339C340.841 3.76524 367.599 1.60201 400.703 1.85099C433.808 2.10009 433.263 3.37605 601.588 2.39298C769.915 1.40987 862.191 1.15902 925.936 0.923011C989.68 0.686997 1122.78 1.7944 1226.67 1.39469C1272.1 1.21991 1338.05 1.19161 1405 1.16038C1424.71 0.662428 1442.37 18.5287 1441.87 38C1441.89 68.8324 1441.91 98.822 1441.97 126C1442.3 147.754 1422.52 163.747 1405 163.108C1392.5 163.158 1381.26 163.219 1371.64 163.293C1286.51 163.947 1286.33 162.519 1217.54 161.721Z" fill="#817676"/>
                </svg>';

$domca_journey_flag = '<svg
                        viewBox="0 0 24 60"
                        fill="none"
                        class="' . $domca_journey_base_class . '__flag"
                        aria-hidden="true"
                        preserveAspectRatio="none"
                >
                <path d="M22.9053 2.32275L9.71875 17.5454V2.32275H22.9053Z" fill="#FDDFDF" stroke="white"/>
<path d="M9.3138 59.9979C14.4041 59.9158 18.4892 57.2137 18.436 53.9612L18.4314 52.1699L0 52.5759L0.00152003 54.2577C0.0547504 57.5087 4.22345 60.08 9.3138 59.9979Z" fill="#695E5E"/>
<path d="M9.12268 46.5395C4.03234 46.6216 -0.052716 49.3237 0.00051436 52.5762C0.0522239 55.8287 4.22093 58.3985 9.31279 58.3164C14.4031 58.2343 18.4882 55.5322 18.435 52.2797C18.3817 49.0287 14.213 46.4574 9.12268 46.5395Z" fill="#817676"/>
<path d="M9.21875 52.192V1" stroke="white" stroke-width="1.0699" stroke-miterlimit="10" stroke-linecap="round"/>
                </svg>'
?>

<section
		<?php
        // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
		echo $domca_journey_wrapper_attributes;
		?>
>
	<div class="<?php echo esc_attr( $domca_journey_base_class . '__wrap dm-container' ); ?>">
		<?php if ( ! empty( $domca_journey_title ) ) : ?>
			<h2 class="<?php echo esc_attr( $domca_journey_base_class . '__title dm-heading dm-heading-h2' ); ?>">
				<?php echo wp_kses_post( $domca_journey_title ); ?>
			</h2>
		<?php endif; ?>

		<?php if ( ! empty( $domca_journey_text ) ) : ?>
			<p class="<?php echo esc_attr( $domca_journey_base_class . '__text' ); ?>">
				<?php echo wp_kses_post( $domca_journey_text ); ?>
			</p>
		<?php endif; ?>

		<?php if ( ! empty( $domca_journey_subtitle ) ) : ?>
			<p class="<?php echo esc_attr( $domca_journey_base_class . '__subtitle' ); ?>">
				<?php echo wp_kses_post( $domca_journey_subtitle ); ?>
			</p>
		<?php endif; ?>

		<?php if ( ! empty( $domca_journey_steps ) && is_array( $domca_journey_steps ) ) : ?>
			<div class="<?php echo esc_attr( $domca_journey_base_class . '__steps' ); ?>">
				<?php get_template_part( '/vector-images/roadmap' ); ?>

				<?php
				$domca_journey_step_count = 0;
				foreach ( $domca_journey_steps as $step ) :

					$step_text   = is_array( $step ) ? ( $step['text'] ?? '' ) : '';
					$step_period = is_array( $step ) ? ( $step['period'] ?? '' ) : '';

					// Skip completely empty step.
					if ( '' === trim( (string) $step_text ) && '' === trim( (string) $step_period ) ) {
						continue;
					}
					?>
					<div class="<?php echo esc_attr( $domca_journey_base_class . '__step' . ' dm-step-' . ( $domca_journey_step_count + 1 ) ); ?>">
						<?php
						if ( $domca_journey_step_count % 2 === 0 ) {
							echo wp_kses( $domca_journey_flag, domca_get_svg_allowed_html() );
						}
						?>
						<div>
						<?php if ( ! empty( $step_period ) ) : ?>
							<p class="<?php echo esc_attr( $domca_journey_base_class . '__step-period' ); ?>">
								<?php echo wp_kses_post( $step_period ); ?>
							</p>
						<?php endif; ?>
						<?php if ( ! empty( $step_text ) ) : ?>
							<p class="<?php echo esc_attr( $domca_journey_base_class . '__step-text' ); ?>">
								<?php echo wp_kses_post( $step_text ); ?>
							</p>
						<?php endif; ?>
						</div>
						<?php
						if ( $domca_journey_step_count % 2 !== 0 ) {
							echo wp_kses( $domca_journey_flag, domca_get_svg_allowed_html() );
						}
						?>
					</div>
					<?php
					$domca_journey_step_count ++;
				endforeach;
				?>
			</div>
		<?php endif; ?>

		<?php if ( ! empty( $domca_journey_close_title ) || ! empty( $domca_journey_close_text ) ) : ?>
			<div class="<?php echo esc_attr( $domca_journey_base_class . '__close' ); ?>">
				<?php echo wp_kses( $domca_journey_decor, domca_get_svg_allowed_html() ); ?>
				<?php if ( ! empty( $domca_journey_close_title ) ) : ?>
					<p class="<?php echo esc_attr( $domca_journey_base_class . '__close-title' ); ?>">
						<?php echo wp_kses_post( $domca_journey_close_title ); ?>
					</p>
				<?php endif; ?>

				<?php if ( ! empty( $domca_journey_close_text ) ) : ?>
					<p class="<?php echo esc_attr( $domca_journey_base_class . '__close-text' ); ?>">
						<?php echo wp_kses_post( $domca_journey_close_text ); ?>
					</p>
				<?php endif; ?>
			</div>
		<?php endif; ?>
	</div>
</section>

<style>
	.<?php echo esc_attr( $domca_journey_base_class ); ?> {
		background-image: url('<?php echo get_template_directory_uri() . '/images/bg-logo-pattern.svg'; ?>');
	}
</style>
