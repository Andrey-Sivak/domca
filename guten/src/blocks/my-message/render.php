<?php
/**
 * Template for rendering the "My Message" block.
 *
 * @package domca
 */

$domca_my_message_title = $attributes['title'] ?? '';
$domca_my_message_text  = $attributes['text'] ?? '';

$domca_my_message_base_class = 'wp-block-domca-my-message';

$domca_my_message_wrapper_attributes = get_block_wrapper_attributes(
	array(
		'class' => 'dm-wrap',
	)
);
?>

<section
		<?php
        // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
		echo $domca_my_message_wrapper_attributes;
		?>
>
	<div class="<?php echo esc_attr( $domca_my_message_base_class . '__wrap dm-container' ); ?>">
		<?php if ( ! empty( $domca_my_message_title ) ) : ?>
			<h2 class="<?php echo esc_attr( $domca_my_message_base_class . '__title' ); ?>">
				<?php echo wp_kses_post( $domca_my_message_title ); ?>
			</h2>
		<?php endif; ?>

		<?php if ( ! empty( $domca_my_message_text ) ) : ?>
			<p class="<?php echo esc_attr( $domca_my_message_base_class . '__text' ); ?>">
				<?php echo wp_kses_post( $domca_my_message_text ); ?>
			</p>
		<?php endif; ?>

		<div class="<?php echo esc_attr( $domca_my_message_base_class . '__decor' ); ?>">
			<svg
					viewBox="0 0 1152 554"
					fill="none"
					aria-hidden="true"
					preserveAspectRatio="none"
					class="<?php echo esc_attr( $domca_my_message_base_class . '__decor_line' ); ?>"
			>
				<path
						d="M975.197 4.29714C1020.48 -9.40479 1067.94 17.9561 1078.77 64.0134L1148.99 362.66C1160.4 411.178 1126.25 458.569 1076.61 463.092L89.5093 553.042C37.6374 557.768 -5.43944 513.565 0.625497 461.832L14.1396 346.56C17.9396 314.148 40.5982 287.073 71.8346 277.622L228.551 230.206L229.709 234.035L72.9932 281.451C43.2805 290.441 21.7267 316.194 18.1121 347.026L4.59802 462.298C-1.17108 511.507 39.8043 553.554 89.1457 549.058L1076.25 459.108C1123.46 454.806 1155.95 409.727 1145.1 363.576L1074.87 64.9291C1064.57 21.1184 1019.43 -4.90751 976.356 8.12605L815.709 56.7323L814.551 52.9032L975.197 4.29714ZM613.709 117.85L413.71 178.363L412.551 174.534L612.551 114.022L613.709 117.85Z"
						fill="#CBA2A2"
				/>
			</svg>
			<svg
					viewBox="0 0 80 54"
					fill="none"
					aria-hidden="true"
					preserveAspectRatio="none"
					class="<?php echo esc_attr( $domca_my_message_base_class . '__decor_quote dm-top' ); ?>"
			>
				<path d="M62.6471 27.7638C69.4604 29.8623 73.5882 35.4223 72.2793 42.8207C71.1991 48.9262 65.2678 52.6391 58.5042 51.8352C44.6654 50.1899 40.5048 37.9816 43.6114 27.1334C46.1488 18.2727 52.8949 11.8023 62.1821 7.89014C66.3367 6.14158 70.3522 4.62778 74.7047 3.5702C75.6169 3.34857 76.535 3.89704 76.6614 4.73522C77.0445 7.27515 78.4979 10.6321 75.5913 11.71C59.5125 17.6731 54.341 25.2059 62.6471 27.7638Z" stroke="#CBA2A2" stroke-width="4" stroke-miterlimit="10"/>
				<path d="M22.734 26.3365C29.5473 28.4351 33.6751 33.9951 32.3663 41.3935C31.286 47.4993 25.3547 51.2119 18.5912 50.4079C4.75231 48.7627 0.591744 36.5544 3.69833 25.7061C6.23573 16.8455 12.9818 10.3751 22.269 6.46289C26.4237 4.71433 30.4391 3.20053 34.7916 2.14295C35.7039 1.92132 36.6219 2.4698 36.7483 3.30798C37.1315 5.84792 38.5848 9.2045 35.6782 10.2827C19.5993 16.2458 14.4279 23.7783 22.734 26.3365Z" stroke="#CBA2A2" stroke-width="4" stroke-miterlimit="10"/>
			</svg>
			<svg
					viewBox="0 0 80 54"
					fill="none"
					aria-hidden="true"
					preserveAspectRatio="none"
					class="<?php echo esc_attr( $domca_my_message_base_class . '__decor_quote dm-bottom' ); ?>"
			>
				<path d="M62.6471 27.7638C69.4604 29.8623 73.5882 35.4223 72.2793 42.8207C71.1991 48.9262 65.2678 52.6391 58.5042 51.8352C44.6654 50.1899 40.5048 37.9816 43.6114 27.1334C46.1488 18.2727 52.8949 11.8023 62.1821 7.89014C66.3367 6.14158 70.3522 4.62778 74.7047 3.5702C75.6169 3.34857 76.535 3.89704 76.6614 4.73522C77.0445 7.27515 78.4979 10.6321 75.5913 11.71C59.5125 17.6731 54.341 25.2059 62.6471 27.7638Z" stroke="#CBA2A2" stroke-width="4" stroke-miterlimit="10"/>
				<path d="M22.734 26.3365C29.5473 28.4351 33.6751 33.9951 32.3663 41.3935C31.286 47.4993 25.3547 51.2119 18.5912 50.4079C4.75231 48.7627 0.591744 36.5544 3.69833 25.7061C6.23573 16.8455 12.9818 10.3751 22.269 6.46289C26.4237 4.71433 30.4391 3.20053 34.7916 2.14295C35.7039 1.92132 36.6219 2.4698 36.7483 3.30798C37.1315 5.84792 38.5848 9.2045 35.6782 10.2827C19.5993 16.2458 14.4279 23.7783 22.734 26.3365Z" stroke="#CBA2A2" stroke-width="4" stroke-miterlimit="10"/>
			</svg>
		</div>
	</div>
</section>
