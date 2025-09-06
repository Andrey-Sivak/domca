<?php
/**
 * Template for rendering the Lead Magnet Opt-in block.
 *
 * @package domca
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/** @var array $attributes */

$dm_optin_data_form_id       = $attributes['dataFormId'] ?? '';
$dm_optin_points      = ( isset( $attributes['bulletPoints'] ) && is_array( $attributes['bulletPoints'] ) ) ? $attributes['bulletPoints'] : array();
$dm_optin_button      = $attributes['button'] ?? '';
$dm_optin_block_id    = isset( $attributes['blockId'] ) ? (string) $attributes['blockId'] : '';

$dm_optin_base_class = 'wp-block-domca-lead-magnet-optin';

$dm_optin_wrapper_attributes = get_block_wrapper_attributes(
	array(
		'class' => 'dm-wrap',
        'id'                => ! empty( $dm_optin_block_id ) ? esc_attr( $dm_optin_block_id ) : null,
	)
);

$dm_optin_quote_decor = '<svg
                        viewBox="0 0 620 569"
                        fill="none"
                        class="' . $dm_optin_base_class . '__quote_decor"
                        aria-hidden="true"
                        preserveAspectRatio="none"
                >
                <path d="M76.4784 438.709L302.952 521.947C344.256 549.085 401.609 528.918 426.301 478.574L569.434 186.746C596.612 131.333 570.868 67.8012 517.194 57.8275L179.086 32.7145C139.733 29.7915 101.837 60.1552 91.3793 102.987L32.5369 343.993C22.4267 385.403 41.1298 425.717 76.4784 438.709Z" fill="#CBA2A2"/>
<path d="M151.381 57.1963L477.604 41.1659C502.329 39.951 524.308 47.8767 540.031 61.7001" stroke="#393E41" stroke-width="4" stroke-miterlimit="10"/>
<path d="M546.253 398.899L546.545 363.199L616.4 316.835C622.287 312.927 618.577 305.306 610.619 304.961L547.044 302.202L548.095 173.703C560.505 129.064 519.322 84.3426 459.524 77.5202L112.891 37.9729C47.0716 30.4637 -7.73584 72.1967 1.67635 122.658L99.0489 429.27C110.382 464.957 154.798 489.423 201.844 485.894L466.563 466.036C512.046 462.624 545.965 434.048 546.253 398.899Z" fill="white"/>
<path d="M94.2447 61.1863C44.4033 75.1415 9.73292 124.568 20.7695 172.898L87.4481 464.926C98.9497 515.302 155.288 541.054 208.606 520.302L449.992 426.376" stroke="#393E41" stroke-width="4" stroke-miterlimit="10"/>
<path d="M548.655 72.7097C566.375 88.5299 576.624 111.502 574.962 137.46L562.346 334.397C559.989 371.228 533.866 405.106 496.454 420.071" stroke="#393E41" stroke-width="4" stroke-miterlimit="10"/>
<path d="M134.154 39.2404C138.501 39.6231 141.803 42.6427 142.183 47.6402C142.497 51.7643 139.576 55.0321 135.46 55.4836C127.039 56.4074 122.682 49.0712 122.825 41.5723C122.941 35.4474 125.913 30.27 130.783 26.3894C132.962 24.6544 135.095 23.0921 137.498 21.7778C138.002 21.5023 138.629 21.7266 138.834 22.2532C139.456 23.849 140.837 25.8217 139.29 26.941C130.732 33.1329 128.855 38.7741 134.154 39.2404Z" stroke="#393E41" stroke-width="4" stroke-miterlimit="10"/>
<path d="M110.527 43.9484C114.874 44.3311 118.176 47.3507 118.556 52.3482C118.87 56.4726 115.949 59.7401 111.834 60.1916C103.412 61.1154 99.0553 53.7792 99.1978 46.2803C99.3143 40.1554 102.286 34.978 107.156 31.0974C109.335 29.3624 111.468 27.8001 113.871 26.4858C114.375 26.2104 115.002 26.4346 115.207 26.9613C115.829 28.557 117.21 30.5295 115.663 31.649C107.105 37.8409 105.228 43.4819 110.527 43.9484Z" stroke="#393E41" stroke-width="4" stroke-miterlimit="10"/>
                </svg>';

$dm_optin_list_decor = '<svg
                        viewBox="0 0 593 550"
                        fill="none"
                        class="' . $dm_optin_base_class . '__bullet-points_decor"
                        aria-hidden="true"
                        preserveAspectRatio="none"
                >
                <path d="M6 76C6 37.3401 37.3401 6 76 6H516C554.66 6 586 37.3401 586 76V472C586 510.66 554.66 542 516 542H76C37.3401 542 6 510.66 6 472V76Z" fill="white"/>
<path d="M388.992 546.652C342.379 545.654 305.686 550.062 248.871 549.439C192.058 548.816 183.548 546.478 118.482 547.004C104.196 547.12 89.9072 547.133 76 547.093C24.2968 547.297 -0.956777 496.4 1.2759 472C1.23186 469.597 1.17663 467.362 1.10854 465.309C0.147543 436.339 3.05298 433.282 2.40767 392.142C1.76245 351.005 2.14169 326.073 3.08608 290.095C4.03047 254.114 4.83672 143.579 3.67659 103.385C3.41865 94.4481 3.31757 85.2322 3.32159 76C2.55178 41.0327 31.7858 14.5127 52.3783 9.03169C60.6666 6.28476 67.5697 5.68045 72.7699 5.64358C74.9726 5.63946 76.0011 5.85339 76 6.0338C76 6.03392 76 6.03404 76 6.03416C75.9966 6.27214 74.4262 6.45981 71.6376 6.65585C58.3292 7.38006 37.0423 14.1776 22.7976 33.4431C10.7777 50.4752 8.97964 63.0992 8.49767 76C8.36735 91.0572 8.08921 107.598 8.51149 139.646C9.31358 200.517 10.9171 237.09 9.8802 308.713C8.93884 373.739 12.4289 393.288 11.2393 472C11.1188 479.4 12.19 487.418 15.1189 495.601C28.093 528.901 56.4764 538.19 76 537.689C113.166 536.921 140.864 534.975 204.417 534.594C305.168 533.991 432.345 536.495 493.078 536.287C500.424 536.262 508.074 536.232 516 536.2C545.943 537.356 580.473 509.747 579.876 472C579.857 441.418 579.921 409.278 580.15 376.481C580.748 290.383 579.237 184.099 580.305 89.0609C580.353 84.7835 580.402 80.4265 580.451 76C582.231 44.2619 552.435 9.77321 516 10.354C449.849 9.63766 385.317 8.92258 347.549 8.37233C285.478 7.46801 270.348 7.26403 210.602 7.8166C176.259 8.13424 128.948 7.83484 88.9856 6.6667C68.874 6.07881 73.4313 5.26026 93.6742 4.86861C123.276 4.29591 147.576 4.67851 162.828 3.65553C193.306 1.61107 206.26 0.826786 244.736 2.01674C283.21 3.20655 301.339 0.502513 323.767 0.813737C346.196 1.12512 345.827 2.72007 459.868 1.49123C480.147 1.2727 498.798 1.08312 516 0.917436C567.4 1.20894 593.174 46.0782 591.992 76C592.138 97.153 592.243 114.582 592.346 129.656C592.641 172.843 591.257 263.021 591.757 333.405C592.004 368.202 592.017 420.769 592.065 472C593.175 518.479 547.933 550.488 516 548.385C507.528 548.448 499.919 548.524 493.401 548.616C435.721 549.434 435.603 547.649 388.992 546.652Z" fill="#817676"/>
</svg>';
?>

<section
		<?php
        // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
		echo $dm_optin_wrapper_attributes;
		?>
>
	<div class="<?php echo esc_attr( $dm_optin_base_class . '__wrap dm-container' ); ?>">
		<div class="<?php echo esc_attr( $dm_optin_base_class . '__quote' ); ?>">
<!--			--><?php //echo wp_kses( $dm_optin_quote_decor, domca_get_svg_allowed_html() ); ?>

			<?php if ( ! empty( $dm_optin_data_form_id ) ) : ?>
				<div class="<?php echo esc_attr( $dm_optin_base_class . '__quote-form' ); ?>">
                    <div class="ml-embedded" data-form="<?php echo esc_attr($dm_optin_data_form_id); ?>"></div>
				</div>
			<?php endif; ?>
		</div>

		<div class="<?php echo esc_attr( $dm_optin_base_class . '__bullet-points' ); ?>">
			<?php echo wp_kses( $dm_optin_list_decor, domca_get_svg_allowed_html() ); ?>
			<?php if ( ! empty( $dm_optin_points ) ) : ?>
				<div class="<?php echo esc_attr( $dm_optin_base_class . '__bullet-points_items' ); ?>">
					<?php foreach ( $dm_optin_points as $point ) : ?>
						<?php
						$text = is_array( $point ) ? ( $point['text'] ?? '' ) : ( is_string( $point ) ? $point : '' );
						if ( '' === trim( (string) $text ) ) {
							continue;
						}
						?>
						<p class="<?php echo esc_attr( $dm_optin_base_class . '__bullet-points_item' ); ?>">
							<p class="<?php echo esc_attr( $dm_optin_base_class . '__bullet-points_item-text' ); ?>">
								<?php echo wp_kses_post( $text ); ?>
							</p>
						</p>
					<?php endforeach; ?>
				</div>
			<?php endif; ?>

			<?php if ( ! empty( $dm_optin_button ) ) : ?>
				<p class="<?php echo esc_attr( $dm_optin_base_class . '__button dm-button dm-button-primary' ); ?>">
					<?php echo wp_kses_post( $dm_optin_button ); ?>
				</p>
			<?php endif; ?>
		</div>
	</div>
</section>
