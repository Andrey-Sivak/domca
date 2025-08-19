<?php
/**
 * Template for rendering the Contact Form block.
 *
 * @package domca
 */

$domca_contact_form_title          = $attributes['title'] ?? '';
$domca_contact_form_form_shortcode = $attributes['formShortcode'] ?? '';
$domca_contact_form_block_id       = $attributes['blockId'] ?? '';

$domca_contact_form_wrapper_attributes = get_block_wrapper_attributes(
	array(
		'class' => 'dm-wrap',
		'id'    => ! empty( $domca_contact_form_block_id ) ? esc_attr( $domca_contact_form_block_id ) : null,
	)
);

$domca_contact_form_base_class = 'wp-block-domca-contact-form';

$domca_contact_form_render_decor_svg = static function () use ( $domca_contact_form_base_class ) {
	ob_start();
	?>
	<svg
			preserveAspectRatio="none"
			aria-hidden="true"
			viewBox="0 0 957 682"
			fill="none"
			class="<?php echo esc_attr( "{$domca_contact_form_base_class}__form-decor" ); ?>"
	>
		<path
				d="M4 67C4 33.8629 30.8629 7 64 7H890C923.137 7 950 33.8629 950 67V614C950 647.137 923.137 674 890 674H64C30.8629 674 4 647.137 4 614V67Z"
			  fill="white"
		/>
		<path
				d="M702.18 678.652C633.249 677.654 578.985 682.062 494.968 681.439C410.951 680.816 398.368 678.478 302.147 679.004C205.932 679.53 109.661 677.931 66.8194 678.891C65.8607 678.913 64.9213 678.933 64 678.95C43.5347 678.836 31.9209 671.634 21.8796 662.752C12.4739 653.446 1.34721 640.314 0.490346 614C0.476314 610.509 0.449425 606.809 0.40767 602.872C-0.237551 542.038 0.141694 505.168 1.08608 451.963C2.03047 398.755 2.83672 235.294 1.67659 175.855C0.97722 140.023 1.431 101.154 2.00635 67C2.23708 43.3441 16.5289 24.7273 30.3154 16.1443C41.2303 9.12885 51.5755 7.16169 59.2207 6.75707C62.4936 6.6057 63.9974 6.86141 64 7.0338C64 7.03392 64 7.03404 64 7.03416C63.9942 7.28335 61.6755 7.4095 57.5683 7.86479C38.2878 8.80021 5.86396 29.1138 5.891 65.5534C5.89088 66.0376 5.89657 66.5198 5.90789 67C7.4086 132.289 5.71541 140.134 6.51149 229.478C7.31358 319.495 8.91713 373.579 7.8802 479.496C7.31265 537.472 8.35591 571.002 9.01324 614C8.81283 636.583 26.6382 667.437 64 668.646C79.2855 668.765 96.1464 668.967 114.998 669.277C264.505 671.736 280.24 667.198 429.229 666.594C578.219 665.991 766.29 668.495 856.103 668.287C866.966 668.262 878.279 668.232 890 668.2C916.435 669.07 944.549 645.002 943.962 614C943.834 549.485 943.803 478.057 944.15 404.388C944.626 303.027 943.765 182.747 943.934 67C944.517 39.9318 922.035 15.5249 895.971 13.0188C894.007 12.7876 892.018 12.6615 890 12.6447C749.903 11.5844 555.935 10.2626 465.568 9.37233C373.777 8.46801 351.404 8.26403 263.05 8.8166C212.263 9.13424 142.3 8.83484 83.2031 7.6667C53.462 7.07881 60.2013 6.26026 90.1368 5.86861C133.912 5.29591 169.847 5.67851 192.403 4.65553C237.473 2.61107 256.629 1.82679 313.528 3.01674C370.423 4.20655 397.233 1.50251 430.399 1.81374C463.567 2.12512 463.022 3.72007 631.667 2.49123C749.622 1.63172 830.303 1.21998 890 0.949176C918.715 0.85748 940.256 18.7227 949.451 37.5175C953.5 45.547 956.408 55.7001 956.385 67C956.319 136.783 955.321 249.875 955.757 340.686C956.079 407.931 956.003 520.053 956.128 614C956.73 654.232 919.371 681.795 890 680.385C877.472 680.448 866.219 680.524 856.58 680.616C771.283 681.434 771.108 679.649 702.18 678.652Z"
			  fill="#817676"
		/>
	</svg>
	<?php
	return (string) ob_get_clean();
}
?>

<section
		<?php
        // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
		echo $domca_contact_form_wrapper_attributes;
		?>
>
	<div class="<?php echo esc_attr( $domca_contact_form_base_class . '__wrap' ); ?>">

		<?php
        // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
		echo $domca_contact_form_render_decor_svg();
		?>

		<div class="dm-form-loading" role="status" aria-live="polite">
			<?php get_template_part( '/vector-images/form-loading' ); ?>
			<span class="screen-reader-text">
				<?php echo esc_html__( 'Loading form submission', 'dm' ); ?>
			</span>
		</div>
		<div class="dm-form-success" role="status" aria-live="polite">
			<?php get_template_part( '/vector-images/form-success' ); ?>
			<p class="dm-form-success-text">
				<?php echo esc_html__( 'Form submitted successfully!', 'dm' ); ?>
				<br>
				<?php echo esc_html__( 'I will get back to you soon ❤️', 'dm' ); ?>
			</p>
			<span class="screen-reader-text">
				<?php echo esc_html__( 'Form submitted successfully', 'dm' ); ?>
			</span>
		</div>
		<h2 class="<?php echo esc_attr( $domca_contact_form_base_class . '__title dm-heading dm-heading-h2' ); ?>">
			<?php echo wp_kses_post( $domca_contact_form_title ); ?>
		</h2>

		<?php if ( ! empty( $domca_contact_form_form_shortcode ) ) : ?>
			<div class="<?php echo $domca_contact_form_base_class . '__form'; ?>" role="form">
				<?php echo do_shortcode( $domca_contact_form_form_shortcode ); ?>
			</div>
		<?php endif; ?>
	</div>
</section>
