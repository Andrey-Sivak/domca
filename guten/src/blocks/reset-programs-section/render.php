<?php
/**
 *
 * @package domca
 */

$domca_reset_programs_section_title_left     = $attributes['leftProgramTitle'] ?? '';
$domca_reset_programs_section_title_right    = $attributes['rightProgramTitle'] ?? '';
$domca_reset_programs_section_features_left  = $attributes['leftProgramFeatures'] ?? array();
$domca_reset_programs_section_features_right = $attributes['rightProgramFeatures'] ?? array();

$domca_reset_programs_section_wrapper_attributes = get_block_wrapper_attributes(
	array(
		'class' => 'dm-wrap',
	)
);

$domca_reset_programs_section_base_class = 'wp-block-domca-reset-programs-section';
?>

<section
	<?php
	// phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
	echo $domca_reset_programs_section_wrapper_attributes;
	?>
>
	<div class="<?php echo esc_attr( $domca_reset_programs_section_base_class . '__wrap dm-container' ); ?>">
		<div class="<?php echo esc_attr( $domca_reset_programs_section_base_class . '__program left' ); ?>">
			<svg
					viewBox="0 0 715 656"
					fill="none"
					class="<?php echo esc_attr( $domca_reset_programs_section_base_class . '__program-decor' ); ?>"
					preserveAspectRatio="none"
					aria-hidden="true"
			>
				<path
						d="M6 76C6 37.3401 37.3401 6 76 6H638C676.66 6 708 37.3401 708 76V578C708 616.66 676.66 648 638 648H76C37.3401 648 6 616.66 6 578V76Z"
						fill="#FDDFDF"
				/>
				<path
						d="M483.568 652.652C426.89 651.654 382.273 656.062 313.192 655.439C244.11 654.816 233.764 652.478 154.648 653.004C127.869 653.182 101.084 653.117 76 652.989C23.5859 652.761 -0.761122 602.332 1.2206 578C1.18791 576.289 1.15069 574.659 1.10854 573.113C0.147543 537.889 3.05298 534.171 2.40767 484.149C1.76245 434.129 2.14169 403.813 3.08608 360.066C4.03047 316.317 4.83672 181.914 3.67659 133.041C3.23616 114.487 3.25305 94.9427 3.46964 76C3.38301 42.8996 28.1819 18.1911 47.5439 10.9401C57.3441 6.83848 65.7537 5.8324 72.074 5.67841C74.7528 5.62927 76.0006 5.8558 76 6.0338C76 6.03392 76 6.03404 76 6.03416C75.9938 6.27568 74.0929 6.44401 70.6966 6.72049C54.6261 7.61571 28.3777 18.0457 15.597 44.4616C9.82997 56.4831 8.49879 66.9706 8.51809 76C8.73161 104.334 7.90926 121.558 8.51149 177.132C9.31358 251.147 10.9171 295.616 9.8802 382.704C8.94959 460.869 12.3498 484.991 11.2783 578C11.1498 587.82 13.1912 598.607 18.5779 609.072C32.2678 635.003 57.1253 644.239 76 643.979C137.089 643.706 167.375 641.046 259.139 640.594C381.644 639.991 536.282 642.495 610.129 642.287C619.06 642.262 628.362 642.232 638 642.2C668.466 643.312 702.535 615.388 701.899 578C701.837 533.862 701.872 486.578 702.15 438.113C702.748 333.425 701.237 204.19 702.305 88.6315C702.344 84.4806 702.382 80.268 702.421 76C704.03 44.2502 674.625 10.071 638 10.5939C548.512 9.79951 457.238 8.98406 406.183 8.37233C330.709 7.46801 312.313 7.26403 239.666 7.8166C197.907 8.13424 140.381 7.83484 91.7895 6.6667C67.3353 6.07881 72.8766 5.26026 97.4906 4.86861C133.484 4.29591 163.031 4.67851 181.577 3.65553C218.636 1.61107 234.386 0.826786 281.17 2.01674C327.951 3.20655 349.995 0.502513 377.266 0.813737C404.538 1.12512 404.089 2.72007 542.755 1.49123C578.427 1.17509 609.953 0.919537 638 0.709287C688.018 0.820628 715.23 44.751 714.011 76C714.147 100.264 714.248 120.441 714.346 137.992C714.641 190.505 713.257 300.154 713.757 385.735C714.035 433.45 714.016 508.645 714.086 578C714.961 624.669 670.531 656.283 638 654.385C627.699 654.448 618.447 654.524 610.521 654.616C540.387 655.434 540.243 653.649 483.568 652.652Z"
						fill="#817676"
				/>
			</svg>
			<div class="<?php echo esc_attr( $domca_reset_programs_section_base_class . '__program-content' ); ?>">
				<?php if ( $domca_reset_programs_section_title_left ) : ?>
					<h2 class="<?php echo esc_attr( $domca_reset_programs_section_base_class . '__title dm-heading dm-heading-h3' ); ?>">
						<?php echo wp_kses_post( $domca_reset_programs_section_title_left ); ?>
					</h2>
				<?php endif; ?>
				<?php if ( $domca_reset_programs_section_features_left ) : ?>
					<ul class="<?php echo esc_attr( $domca_reset_programs_section_base_class . '__program-features' ); ?>">
						<?php foreach ( $domca_reset_programs_section_features_left as $domca_reset_programs_section_feature_left ) : ?>
							<li class="<?php echo esc_attr( $domca_reset_programs_section_base_class . '__program-feature' ); ?>">
								<?php echo wp_kses_post( $domca_reset_programs_section_feature_left ); ?>
							</li>
						<?php endforeach; ?>
					</ul>
				<?php endif; ?>
			</div>
		</div>

		<div class="<?php echo esc_attr( $domca_reset_programs_section_base_class . '__program right' ); ?>">
			<svg
					viewBox="0 0 716 655"
					fill="none"
					class="<?php echo esc_attr( $domca_reset_programs_section_base_class . '__program-decor' ); ?>"
					preserveAspectRatio="none"
					aria-hidden="true"
			>
				<path
						d="M6 76C6 37.3401 37.3401 6 76 6H638C676.66 6 708 37.3401 708 76V578C708 616.66 676.66 648 638 648H76C37.3401 648 6 616.66 6 578V76Z"
						fill="#E0BEBE"
				/>
				<path
						d="M703.348 533.528C704.346 476.85 699.938 432.234 700.561 363.152C701.184 294.07 703.522 283.724 702.996 204.608C702.692 158.933 703.097 113.242 703.308 76C703.544 50.0108 688.267 31.5084 677.084 23.9219C661.075 13.4216 651.664 11.2159 638 10.0924C627.633 9.66773 614.852 9.32473 594.109 9.59233C544.089 10.2376 513.773 9.85831 470.027 8.91392C426.277 7.96953 291.874 7.16328 243.001 8.32341C194.128 9.48354 138.385 7.47056 104.862 6.99315C94.4201 6.84444 86.2027 6.64092 79.9026 6.42918C77.234 6.3394 76.0008 6.15159 76 5.9662C76 5.96608 76 5.96596 76 5.96584C76.001 5.735 77.9125 5.50803 81.3425 5.47887C97.9924 5.33728 122.876 4.96376 152.273 4.12663C207.086 2.5657 213.076 4.2906 287.092 3.48851C361.107 2.68642 405.576 1.08287 492.664 2.1198C554.661 2.85792 582.66 0.871528 638 0.552885C661.381 0.0579865 694.385 13.2433 707.923 49.5968C711.149 58.6437 712.403 67.6294 712.292 76C710.907 176.133 714.847 195.547 715.406 309.099C715.834 395.999 714.698 499.069 714.076 578C713.959 614.09 688.508 639.489 667.363 647.807C658.473 651.589 648.427 653.778 638 653.8C567.952 654.032 480.179 654.377 388.153 653.85C294.61 653.315 181.47 654.465 76 653.954C62.365 653.921 48.8969 650.089 37.5124 643.193C16.3673 630.788 0.463429 605.447 0.962175 578C1.88695 474.261 2.90104 356.868 3.62767 296.223C4.53199 220.749 4.73597 202.353 4.1834 129.705C4.06138 113.664 4.03042 95.2951 4.10478 76C3.22594 43.6268 30.0053 12.2419 60.189 7.10897C72.3667 4.86393 77.1868 6.16925 75.7603 6.30634C74.3939 6.73585 66.7285 6.56121 55.1812 10.3338C20.5395 22.0153 7.8319 54.4599 8.47505 71.7606C8.46805 73.2138 8.5075 74.6122 8.58563 76C10.449 109.996 11.1252 126.313 9.98326 171.21C8.79345 217.991 11.4975 240.035 11.1863 267.306C10.8749 294.578 9.27993 294.129 10.5088 432.794C11.0282 491.403 11.384 538.819 11.6441 578C12.9229 622.86 51.4716 642.905 76 641.72C80.1493 641.697 84.1547 641.676 88.032 641.654C140.544 641.359 250.194 642.743 335.775 642.243C411.686 641.8 557.149 642.11 638 641.615C647.401 641.559 655.674 639.415 662.252 636.58C698.976 616.999 699.892 595.746 702.146 578C702.546 566.512 702.996 553.546 703.348 533.528Z"
						fill="#817676"
				/>
			</svg>
			<div class="<?php echo esc_attr( $domca_reset_programs_section_base_class . '__program-content' ); ?>">
				<?php if ( $domca_reset_programs_section_title_right ) : ?>
					<h2 class="<?php echo esc_attr( $domca_reset_programs_section_base_class . '__title dm-heading dm-heading-h3' ); ?>">
						<?php echo wp_kses_post( $domca_reset_programs_section_title_right ); ?>
					</h2>
				<?php endif; ?>
				<?php if ( $domca_reset_programs_section_features_right ) : ?>
					<ul class="<?php echo esc_attr( $domca_reset_programs_section_base_class . '__program-features' ); ?>">
						<?php foreach ( $domca_reset_programs_section_features_right as $domca_reset_programs_section_feature_right ) : ?>
							<li class="<?php echo esc_attr( $domca_reset_programs_section_base_class . '__program-feature' ); ?>">
								<?php echo wp_kses_post( $domca_reset_programs_section_feature_right ); ?>
							</li>
						<?php endforeach; ?>
					</ul>
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>
