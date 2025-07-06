<?php
/**
 *  Template for rendering the home testimonial lead magnet block.
 *
 * @package domca
 */

$domca_home_testimonial_lead_magnet_quote       = $attributes['quote'] ?? '';
$domca_home_testimonial_lead_magnet_title       = $attributes['leadMagnetTitle'] ?? '';
$domca_home_testimonial_lead_magnet_subtitle    = $attributes['leadMagnetSubtitle'] ?? '';
$domca_home_testimonial_lead_magnet_description = $attributes['leadMagnetDescription'] ?? '';
$domca_home_testimonial_lead_magnet_text        = $attributes['disclaimerText'] ?? '';
$domca_home_testimonial_lead_magnet_button      = $attributes['button'] ?? null;

$domca_home_testimonial_lead_magnet_wrapper_attributes = get_block_wrapper_attributes(
	array(
		'class' => 'dm-wrap',
	)
);

$domca_home_testimonial_lead_magnet_base_class = 'wp-block-domca-home-testimonial-lead-magnet';
?>

<section
	<?php
	// phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
	echo $domca_home_testimonial_lead_magnet_wrapper_attributes;
	?>
>
	<div class="<?php echo esc_attr( $domca_home_testimonial_lead_magnet_base_class . '__wrap dm-container' ); ?>">
		<div class="<?php echo esc_attr( $domca_home_testimonial_lead_magnet_base_class . '__quote dm-animate' ); ?>">

			<svg
					viewBox="0 0 782 720"
					fill="none"
					class="<?php echo esc_attr( $domca_home_testimonial_lead_magnet_base_class . '__quote-decor' ); ?>"
					aria-hidden="true"
					preserveAspectRatio="none"
			>
				<path
						d="M92.6152 530.17L393.227 645.74C448.674 681.201 522.656 660.85 552.338 601.972L724.4 260.675C757.072 195.868 720.086 117.687 649.349 102.031L205.719 48.7734C154.085 42.5747 106.087 76.5173 94.6359 127.329L30.2001 413.237C19.1288 462.361 45.6949 512.132 92.6152 530.17Z"
						fill="#CBA2A2"
				/>
				<path
						d="M189.022 59.3115L600.634 58.6961C631.831 58.6496 660.1 71.0309 680.81 91.1353" stroke="#393E41"
						stroke-width="4"
						stroke-miterlimit="10"
				/>
				<path
						d="M712.313 468.137L702.832 416.217L770.08 331.719C775.748 324.597 769.404 314.44 760.196 315.894L686.634 327.504L652.511 140.619C654.45 72.7398 594.995 17.9044 524.641 22.6856L116.825 50.3998C39.3874 55.6624 -11.9017 129.737 12.7494 200.712L208.55 622.104C231.339 671.149 288.928 695.772 341.832 679.09L639.514 585.22C690.661 569.091 721.647 519.257 712.313 468.137Z"
						fill="white"
				/>
				<path
						d="M111.153 62.7783C51.128 77.6747 11.5986 139.453 27.7699 202.717L125.473 584.979C142.326 650.922 212.5 687.838 276.386 664.365L565.615 558.123"
						stroke="#393E41"
						stroke-width="4"
						stroke-miterlimit="10"
				/>
				<path
						d="M680.809 91.1354C702.754 112.439 716.211 142.414 715.669 175.464L711.55 426.208C710.783 473.102 681.592 514.753 637.932 531.548"
						stroke="#393E41"
						stroke-width="4"
						stroke-miterlimit="10"
				/>
				<path
						d="M167.207 49.6661C172.676 50.1887 176.853 54.0471 177.373 60.3893C177.803 65.6232 174.158 69.743 168.986 70.2806C158.406 71.3802 152.865 62.0375 152.982 52.5269C153.077 44.7589 156.77 38.2172 162.861 33.3367C165.585 31.1547 168.255 29.1912 171.265 27.5447C171.896 27.1996 172.687 27.4895 172.949 28.1592C173.744 30.1887 175.497 32.7027 173.561 34.1092C162.853 41.8898 160.54 49.0292 167.207 49.6661Z"
						stroke="#393E41"
						stroke-width="4"
						stroke-miterlimit="10"
				/>
				<path
						d="M137.311 55.6229C142.78 56.1455 146.956 60.0039 147.477 66.3461C147.907 71.5803 144.261 75.6998 139.09 76.2373C128.509 77.337 122.969 67.9943 123.085 58.4837C123.18 50.7157 126.873 44.174 132.964 39.2934C135.689 37.1114 138.358 35.148 141.369 33.5015C142 33.1564 142.79 33.4463 143.053 34.116C143.848 36.1454 145.6 38.6592 143.665 40.0659C132.957 47.8466 130.644 54.9857 137.311 55.6229Z"
						stroke="#393E41"
						stroke-width="4"
						stroke-miterlimit="10"
				/>
				<path
						d="M586.404 558.598C580.911 558.677 576.337 555.298 575.126 549.051C574.127 543.895 577.3 539.401 582.382 538.302C592.779 536.052 599.307 544.733 600.231 554.199C600.986 561.931 598.03 568.837 592.51 574.354C590.04 576.821 587.601 579.065 584.789 581.031C584.199 581.443 583.382 581.241 583.047 580.604C582.035 578.674 580.018 576.366 581.789 574.757C591.581 565.852 593.101 558.503 586.404 558.598Z"
						stroke="#393E41"
						stroke-width="4"
						stroke-miterlimit="10"
				/>
				<path
						d="M615.47 549.409C609.977 549.488 605.403 546.109 604.193 539.862C603.193 534.706 606.367 530.212 611.448 529.113C621.845 526.863 628.373 535.544 629.298 545.01C630.052 552.742 627.096 559.648 621.576 565.165C619.106 567.632 616.667 569.876 613.855 571.842C613.265 572.254 612.448 572.052 612.114 571.415C611.101 569.485 609.084 567.177 610.855 565.568C620.648 556.663 622.167 549.314 615.47 549.409Z"
						stroke="#393E41"
						stroke-width="4"
						stroke-miterlimit="10"
				/>
			</svg>

			<?php if ( $domca_home_testimonial_lead_magnet_quote ) : ?>
				<h2 class="<?php echo esc_attr( $domca_home_testimonial_lead_magnet_base_class . '__title' ); ?>">
					“<?php echo wp_kses_post( $domca_home_testimonial_lead_magnet_quote ); ?>”
				</h2>
			<?php endif; ?>
		</div>

		<div class="<?php echo esc_attr( $domca_home_testimonial_lead_magnet_base_class . '__lead-magnet dm-animate' ); ?>">
			<svg
					viewBox="0 0 593 664"
					fill="none"
					class="<?php echo esc_attr( $domca_home_testimonial_lead_magnet_base_class . '__lead-magnet-decor' ); ?>"
					aria-hidden="true"
					preserveAspectRatio="none"
			>
				<path
						d="M6 76C6 37.3401 37.3401 6 76 6H516C554.66 6 586 37.3401 586 76V586C586 624.66 554.66 656 516 656H76C37.3401 656 6 624.66 6 586V76Z"
						fill="white"
				/>
				<path
						d="M375.28 660.652C323.635 659.654 282.98 664.062 220.031 663.439C157.211 662.818 147.694 660.487 76 661.001C75.8442 661.002 75.6883 661.003 75.5322 661.003C32.5903 662.152 -0.842403 620.836 1.25868 586C1.44826 557.759 1.55566 534.15 1.10854 519.211C0.147543 487.114 3.05298 483.726 2.40767 438.146C1.76245 392.567 2.14169 364.943 3.08608 325.081C4.03047 285.216 4.83672 162.746 3.67659 118.213C3.31879 104.478 3.26281 90.148 3.37052 76C3.03528 41.8687 29.9614 16.3635 49.943 9.94154C59.0021 6.54841 66.6588 5.75279 72.4233 5.66007C74.861 5.6347 76.0014 5.85451 76 6.0338C76 6.03392 76 6.03404 76 6.03416C75.9952 6.27382 74.2597 6.45229 71.1667 6.68661C56.4797 7.49758 32.7155 15.9877 18.9307 38.7786C10.2829 53.3975 8.70895 65.3909 8.55418 76C8.53995 96.7872 7.98846 114.409 8.51149 158.389C9.31358 225.832 10.9171 266.353 9.8802 345.708C8.84336 425.063 13.1825 443.29 10.7234 555.307C10.4784 566.467 10.3029 576.632 10.186 586C12.3043 633.271 46.6822 650.924 76 650.38C100.514 649.616 128.478 648.823 170.778 648.594C282.406 647.991 423.313 650.495 490.604 650.287C498.742 650.262 507.218 650.232 516 650.2C546.221 651.332 580.505 623.56 579.886 586C579.844 548.604 579.895 508.905 580.15 468.297C580.748 372.904 579.237 255.145 580.305 149.846C580.538 126.876 580.785 101.833 581.037 76C582.535 41.584 550.556 9.10148 516 9.88624C460.377 9.33299 409.567 8.80233 376.866 8.37233C308.093 7.46801 291.331 7.26403 225.134 7.8166C187.083 8.13424 134.664 7.83484 90.3875 6.6667C68.1046 6.07881 73.1539 5.26026 95.5824 4.86861C128.38 4.29591 155.303 4.67851 172.203 3.65553C205.971 1.61107 220.323 0.826786 262.953 2.01674C305.581 3.20655 325.667 0.502513 350.516 0.813737C375.367 1.12512 374.958 2.72007 501.311 1.49123C506.296 1.44275 511.191 1.3957 516 1.35002C563.827 1.01623 592.759 43.4303 591.588 76C591.981 128.825 592.167 165.772 592.346 194.824C592.641 242.674 591.257 342.587 591.757 420.57C592.021 461.818 592.017 525.603 592.076 586C593.047 632.627 548.231 664.373 516 662.385C506.614 662.448 498.183 662.524 490.961 662.616C427.054 663.434 426.923 661.649 375.28 660.652Z"
						fill="#393E41"
				/>
			</svg>
			<div class="<?php echo esc_attr( $domca_home_testimonial_lead_magnet_base_class . '__lead-magnet-content' ); ?>">
				<?php if ( $domca_home_testimonial_lead_magnet_title ) : ?>
					<h3 class="<?php echo esc_attr( $domca_home_testimonial_lead_magnet_base_class . '__lead-magnet-title' ); ?>">
						<?php echo wp_kses_post( $domca_home_testimonial_lead_magnet_title ); ?>
					</h3>
				<?php endif; ?>
				<?php if ( $domca_home_testimonial_lead_magnet_subtitle ) : ?>
					<p class="<?php echo esc_attr( $domca_home_testimonial_lead_magnet_base_class . '__lead-magnet-subtitle' ); ?>">
						<?php echo wp_kses_post( $domca_home_testimonial_lead_magnet_subtitle ); ?>
					</p>
				<?php endif; ?>
				<?php if ( $domca_home_testimonial_lead_magnet_description ) : ?>
					<p class="<?php echo esc_attr( $domca_home_testimonial_lead_magnet_base_class . '__lead-magnet-description' ); ?>">
						<?php echo wp_kses_post( $domca_home_testimonial_lead_magnet_description ); ?>
					</p>
				<?php endif; ?>
				<?php if ( $domca_home_testimonial_lead_magnet_text ) : ?>
					<p class="<?php echo esc_attr( $domca_home_testimonial_lead_magnet_base_class . '__lead-magnet-text' ); ?>">
						<?php echo wp_kses_post( $domca_home_testimonial_lead_magnet_text ); ?>
					</p>
				<?php endif; ?>
				<?php
				if ( ! empty( $domca_home_testimonial_lead_magnet_button ) ) :
					?>
					<a
							href="<?php echo esc_url( $domca_home_testimonial_lead_magnet_button['url'] ); ?>"
							target="<?php echo esc_attr( $domca_home_testimonial_lead_magnet_button['target'] ); ?>"
							class="<?php echo esc_attr( $domca_home_testimonial_lead_magnet_base_class . '__button dm-button dm-button-primary' ); ?>"
							aria-label=""
							title="<?php echo esc_attr( $domca_home_testimonial_lead_magnet_button['text'] ); ?>"
					>
						<span><?php echo esc_html( $domca_home_testimonial_lead_magnet_button['text'] ); ?></span>
					</a>
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>
