<?php
/**
 *  Template for rendering the FAQ about section block.
 *
 * @package domca
 */

$domca_faq_about_section_title        = $attributes['title'] ?? '';
$domca_faq_about_section_faq_text     = $attributes['faqText'] ?? '';
$domca_faq_about_section_faq_button   = $attributes['faqButton'] ?? '';
$domca_faq_about_section_about_text   = $attributes['aboutText'] ?? '';
$domca_faq_about_section_about_button = $attributes['aboutButton'] ?? '';

$domca_faq_about_section_wrapper_attributes = get_block_wrapper_attributes(
	array(
		'class' => 'dm-wrap',
	)
);

$domca_faq_about_section_base_class = 'wp-block-domca-faq-about-section';
?>

<section
	<?php
	// phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
	echo $domca_faq_about_section_wrapper_attributes;
	?>
>
	<div class="<?php echo esc_attr( $domca_faq_about_section_base_class . '__wrap dm-container' ); ?>">
		<h2 class="<?php echo esc_attr( $domca_faq_about_section_base_class . '__title dm-heading dm-heading-h2 dm-animate' ); ?>">
			<?php echo wp_kses_post( $domca_faq_about_section_title ); ?>
		</h2>

		<div class="<?php echo esc_attr( $domca_faq_about_section_base_class . '__content' ); ?>">
			<div class="<?php echo esc_attr( $domca_faq_about_section_base_class . '__item dm-faq dm-animate' ); ?>">
				<svg
						viewBox="0 0 671 445"
						fill="none"
						class="<?php echo esc_attr( $domca_faq_about_section_base_class . '__item-decor' ); ?>"
						preserveAspectRatio="none"
						aria-hidden="true"
				>
					<path
							d="M4 57C4 29.3858 26.3858 7 54 7H614C641.614 7 664 29.3858 664 57V387C664 414.614 641.614 437 614 437H54C26.3858 437 4 414.614 4 387V57Z"
							fill="white"
					/>
					<path
							d="M488.055 441.652C441.832 440.654 405.445 445.062 349.106 444.439C292.768 443.816 284.33 441.478 219.808 442.004C155.289 442.53 90.734 440.931 62.0057 441.891C59.0954 441.989 56.4488 442.046 54 442.072C42.0237 441.98 34.4688 438.777 26.4332 433.675C18.7925 428.27 8.72358 420.616 2.48077 401.808C0.96167 396.793 0.267899 391.803 0.219326 387C-0.138741 354.13 0.254653 331.21 1.08608 299.801C2.03047 264.121 2.83672 154.511 1.67659 114.653C1.12936 95.8518 1.28814 75.8042 1.65876 57C1.86612 34.3698 17.6973 17.4931 30.8664 11.5442C38.7106 7.73772 45.6359 6.79815 50.7898 6.67136C52.9857 6.63112 53.9996 6.85538 54 7.0338C54 7.03392 54 7.03404 54 7.03416C53.9934 7.27496 52.4501 7.44732 49.69 7.70622C36.689 8.44632 15.2046 18.6749 8.40771 41.546C6.72787 47.191 6.24413 52.3565 6.34405 57C7.01004 87.7338 5.81902 98.4966 6.51149 150.61C7.31358 210.973 8.91713 247.239 7.8802 318.263C7.4592 347.101 7.92454 366.92 8.46123 387C9.00052 405.98 22.4251 429.977 54 431.584C65.8286 431.687 79.1047 431.904 94.3123 432.277C194.566 434.736 205.118 430.198 305.024 429.594C404.932 428.991 531.045 431.495 591.27 431.287C598.554 431.262 606.14 431.232 614 431.2C635.209 431.915 658.397 412.514 657.921 387C657.832 347.872 657.844 305.414 658.15 261.783C658.583 200.059 657.912 127.872 657.912 57C658.465 33.1879 636.976 12.353 614 12.7136C613.436 12.7074 612.873 12.7012 612.311 12.6948C518.069 11.6263 384.831 10.2767 323.277 9.37233C261.725 8.46801 246.722 8.26403 187.475 8.8166C153.42 9.13424 106.505 8.83484 66.8769 7.6667C46.9336 7.07881 51.4528 6.26026 71.5264 5.86861C100.881 5.29591 124.977 5.67851 140.102 4.65553C170.325 2.61107 183.17 1.82679 221.324 3.01674C259.476 4.20655 277.453 1.50251 299.694 1.81374C321.935 2.12512 321.569 3.72007 434.656 2.49123C517.854 1.58716 573.398 1.17849 614 0.908144C630.461 0.80886 644.179 7.80923 653.277 16.5993C661.989 24.7972 670.461 39.2959 670.308 57C670.065 103.475 669.382 166.779 669.757 219.067C670.054 260.55 670.012 327.5 670.102 387C670.683 421.363 638.355 444.657 614 443.385C605.599 443.448 598.054 443.524 591.59 443.616C534.393 444.434 534.275 442.649 488.055 441.652Z"
							fill="#817676"
					/>
				</svg>
				<div class="<?php echo esc_attr( $domca_faq_about_section_base_class . '__item-inner' ); ?>">
					<?php if ( ! empty( $domca_faq_about_section_faq_text ) ) : ?>
						<h3 class="<?php echo esc_attr( $domca_faq_about_section_base_class . '__item-text' ); ?>">
							<?php echo wp_kses_post( $domca_faq_about_section_faq_text ); ?>
						</h3>
					<?php endif; ?>
					<?php if ( ! empty( $domca_faq_about_section_faq_button ) ) : ?>
						<p class="<?php echo esc_attr( $domca_faq_about_section_base_class . '__item-button dm-button dm-button-primary' ); ?>">
							<?php echo wp_kses_post( $domca_faq_about_section_faq_button ); ?>
						</p>
					<?php endif; ?>
				</div>
			</div>

			<div class="<?php echo esc_attr( $domca_faq_about_section_base_class . '__item dm-about dm-animate' ); ?>">
				<svg
						viewBox="0 0 671 445"
						fill="none"
						class="<?php echo esc_attr( $domca_faq_about_section_base_class . '__item-decor' ); ?>"
						preserveAspectRatio="none"
						aria-hidden="true"
				>
					<path
							d="M4 57C4 29.3858 26.3858 7 54 7H614C641.614 7 664 29.3858 664 57V387C664 414.614 641.614 437 614 437H54C26.3858 437 4 414.614 4 387V57Z"
							fill="white"
					/>
					<path
							d="M488.055 441.652C441.832 440.654 405.445 445.062 349.106 444.439C292.768 443.816 284.33 441.478 219.808 442.004C155.289 442.53 90.734 440.931 62.0057 441.891C59.0954 441.989 56.4488 442.046 54 442.072C42.0237 441.98 34.4688 438.777 26.4332 433.675C18.7925 428.27 8.72358 420.616 2.48077 401.808C0.96167 396.793 0.267899 391.803 0.219326 387C-0.138741 354.13 0.254653 331.21 1.08608 299.801C2.03047 264.121 2.83672 154.511 1.67659 114.653C1.12936 95.8518 1.28814 75.8042 1.65876 57C1.86612 34.3698 17.6973 17.4931 30.8664 11.5442C38.7106 7.73772 45.6359 6.79815 50.7898 6.67136C52.9857 6.63112 53.9996 6.85538 54 7.0338C54 7.03392 54 7.03404 54 7.03416C53.9934 7.27496 52.4501 7.44732 49.69 7.70622C36.689 8.44632 15.2046 18.6749 8.40771 41.546C6.72787 47.191 6.24413 52.3565 6.34405 57C7.01004 87.7338 5.81902 98.4966 6.51149 150.61C7.31358 210.973 8.91713 247.239 7.8802 318.263C7.4592 347.101 7.92454 366.92 8.46123 387C9.00052 405.98 22.4251 429.977 54 431.584C65.8286 431.687 79.1047 431.904 94.3123 432.277C194.566 434.736 205.118 430.198 305.024 429.594C404.932 428.991 531.045 431.495 591.27 431.287C598.554 431.262 606.14 431.232 614 431.2C635.209 431.915 658.397 412.514 657.921 387C657.832 347.872 657.844 305.414 658.15 261.783C658.583 200.059 657.912 127.872 657.912 57C658.465 33.1879 636.976 12.353 614 12.7136C613.436 12.7074 612.873 12.7012 612.311 12.6948C518.069 11.6263 384.831 10.2767 323.277 9.37233C261.725 8.46801 246.722 8.26403 187.475 8.8166C153.42 9.13424 106.505 8.83484 66.8769 7.6667C46.9336 7.07881 51.4528 6.26026 71.5264 5.86861C100.881 5.29591 124.977 5.67851 140.102 4.65553C170.325 2.61107 183.17 1.82679 221.324 3.01674C259.476 4.20655 277.453 1.50251 299.694 1.81374C321.935 2.12512 321.569 3.72007 434.656 2.49123C517.854 1.58716 573.398 1.17849 614 0.908144C630.461 0.80886 644.179 7.80923 653.277 16.5993C661.989 24.7972 670.461 39.2959 670.308 57C670.065 103.475 669.382 166.779 669.757 219.067C670.054 260.55 670.012 327.5 670.102 387C670.683 421.363 638.355 444.657 614 443.385C605.599 443.448 598.054 443.524 591.59 443.616C534.393 444.434 534.275 442.649 488.055 441.652Z"
							fill="#817676"
					/>
				</svg>
				<div class="<?php echo esc_attr( $domca_faq_about_section_base_class . '__item-inner' ); ?>">
					<?php if ( ! empty( $domca_faq_about_section_about_text ) ) : ?>
						<h3 class="<?php echo esc_attr( $domca_faq_about_section_base_class . '__item-text' ); ?>">
							<?php echo wp_kses_post( $domca_faq_about_section_about_text ); ?>
						</h3>
					<?php endif; ?>
					<?php if ( ! empty( $domca_faq_about_section_about_button ) ) : ?>
						<p class="<?php echo esc_attr( $domca_faq_about_section_base_class . '__item-button dm-button dm-button-primary' ); ?>">
							<?php echo wp_kses_post( $domca_faq_about_section_about_button ); ?>
						</p>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
</section>
