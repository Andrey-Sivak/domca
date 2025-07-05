<?php
/**
 *
 * @package domca
 */

$domca_home_transformation_journey_testimonial_quote = $attributes['testimonialQuote'] ?? '';
$domca_home_transformation_journey_subtitle          = $attributes['subtitle'] ?? '';
$domca_home_transformation_journey_button            = $attributes['button'] ?? null;
$domca_home_transformation_journey_title             = $attributes['title'] ?? '';
$domca_home_transformation_journey_items             = $attributes['items'] ?? array();

$domca_home_transformation_journey_wrapper_attributes = get_block_wrapper_attributes(
	array(
		'class' => 'dm-wrap',
	)
);

$domca_home_transformation_journey_base_class = 'wp-block-domca-home-transformation-journey';
?>

<section
	<?php echo $domca_home_transformation_journey_wrapper_attributes; ?>
>
	<div class="<?php echo esc_attr( $domca_home_transformation_journey_base_class . '__wrap dm-container' ); ?>">
		<h2 class="<?php echo esc_attr( $domca_home_transformation_journey_base_class . '__title dm-heading dm-heading-h2 dm-animate' ); ?>">
			<?php echo wp_kses_post( $domca_home_transformation_journey_title ); ?>
		</h2>

		<?php if ( $domca_home_transformation_journey_subtitle ) : ?>
			<p class="<?php echo esc_attr( $domca_home_transformation_journey_base_class . '__subtitle dm-animate' ); ?>">
				<?php echo wp_kses_post( $domca_home_transformation_journey_subtitle ); ?>
			</p>
		<?php endif; ?>

		<?php if ( ! empty( $domca_home_transformation_journey_items ) && is_array( $domca_home_transformation_journey_items ) ) : ?>
			<div class="<?php echo esc_attr( $domca_home_transformation_journey_base_class . '__items' ); ?>">
				<?php
				foreach (
					$domca_home_transformation_journey_items

					as $domca_home_transformation_journey_item
				) :
					$domca_home_transformation_journey_item_image = $domca_home_transformation_journey_item['image'] ?? null;
					$domca_home_transformation_journey_item_text  = $domca_home_transformation_journey_item['text'] ?? '';
					$domca_home_transformation_journey_item_title = $domca_home_transformation_journey_item['title'] ?? '';
					?>
					<div class="<?php echo esc_attr( $domca_home_transformation_journey_base_class . '__item dm-animate' ); ?>">
						<?php if ( ! empty( $domca_home_transformation_journey_item_image ) ) : ?>
							<figure
									class="<?php echo esc_attr( $domca_home_transformation_journey_base_class . '__item-image' ); ?>"
									itemscope
									itemtype="https://schema.org/ImageObject"
							>
								<?php
								echo wp_get_attachment_image(
									$domca_home_transformation_journey_item_image['id'],
									'full',
									false,
									array()
								);
								?>
							</figure>
						<?php endif; ?>

						<?php if ( ! empty( $domca_home_transformation_journey_item_title ) ) : ?>
							<h3 class="<?php echo esc_attr( $domca_home_transformation_journey_base_class . '__item-title dm-heading dm-heading-h4' ); ?>">
								<?php echo wp_kses_post( $domca_home_transformation_journey_item_title ); ?>
							</h3>
						<?php endif; ?>

						<?php if ( ! empty( $domca_home_transformation_journey_item_text ) ) : ?>
							<div class="<?php echo esc_attr( $domca_home_transformation_journey_base_class . '__item-text' ); ?>">
								<?php echo wp_kses_post( $domca_home_transformation_journey_item_text ); ?>
							</div>
						<?php endif; ?>
					</div>
				<?php endforeach; ?>
			</div>
		<?php endif; ?>

		<?php
		if ( ! empty( $domca_home_transformation_journey_button ) ) :
			?>
			<a
					href="<?php echo esc_url( $domca_home_transformation_journey_button['url'] ); ?>"
					target="<?php echo esc_attr( $domca_home_transformation_journey_button['target'] ); ?>"
					class="<?php echo $domca_home_transformation_journey_base_class . '__button dm-button dm-button-primary dm-animate'; ?>"
					aria-label=""
					title="<?php echo esc_attr( $domca_home_transformation_journey_button['text'] ); ?>"
			>
				<span><?php echo esc_html( $domca_home_transformation_journey_button['text'] ); ?></span>
			</a>
		<?php endif; ?>

		<?php if ( ! empty( $domca_home_transformation_journey_testimonial_quote ) ) : ?>
			<blockquote
					class="<?php echo esc_attr( $domca_home_transformation_journey_base_class . '__testimonial-quote dm-animate' ); ?>">
				<p><?php echo wp_kses_post( $domca_home_transformation_journey_testimonial_quote ); ?></p>
				<svg
						viewBox="0 0 1238 212"
						fill="none"
						class="<?php echo esc_attr( $domca_home_transformation_journey_base_class . '__testimonial-quote_decor' ); ?>"
						preserveAspectRatio="none"
						aria-hidden="true"
				>
					<path d="M1025.13 209.721C963.516 208.923 915.016 212.45 839.921 211.952C764.827 211.453 753.58 209.582 667.578 210.003C581.581 210.424 495.535 209.145 457.243 209.913C418.952 210.682 414.911 208.358 360.535 208.874C306.161 209.39 273.207 209.087 225.653 208.331C191.734 207.792 107.69 207.31 43 207.414C15.2995 207.593 0.197057 181.41 1.16333 166C1.15608 165.561 1.14873 165.129 1.14127 164.702C0.445823 124.893 1.17569 80.8909 1.74601 46C1.89118 33.8643 7.51995 23.5425 14.185 17.1229C22.5705 8.99671 31.9337 6.42676 38.7285 5.88013C41.6495 5.66263 42.9989 5.89431 43 6.02704C43 6.02714 43 6.02724 43 6.02733C42.9962 6.23395 40.9187 6.29486 37.2704 6.82849C23.7549 8.14756 3.65936 22.4157 4.11306 46C4.22539 52.4337 4.3533 59.14 4.49869 66.0775C5.44995 111.466 4.87581 126.057 4.83192 166C4.65324 177.615 10.9367 193.535 28.0246 200.926C32.8838 202.967 38.0114 203.903 43 203.85C114.137 203.182 162.118 202.123 250.261 202.896C344.928 203.725 366.672 200.254 500.304 202.221C633.933 204.188 647.998 200.558 781.164 200.075C914.331 199.593 1082.43 201.596 1162.7 201.43C1172.41 201.409 1182.52 201.386 1193 201.36C1210.58 201.896 1228.62 185.942 1228.21 166C1228.13 128.574 1228.08 88.16 1228.11 46C1228.63 27.6864 1212.1 10.4098 1193 10.7747C1184.4 10.7482 1175.76 10.7169 1167.08 10.6803C1053.28 10.2012 912.793 11.4107 787.176 10.5558C661.561 9.701 483.967 8.62133 401.921 7.89786C319.878 7.17441 299.881 7.01123 220.91 7.45328C175.517 7.70739 112.984 7.46787 60.1637 6.53336C33.5811 6.06305 39.6048 5.40821 66.361 5.09489C105.487 4.63673 137.606 4.94281 157.766 4.12443C198.05 2.48886 215.171 1.86143 266.027 2.81339C316.881 3.76524 340.843 1.60201 370.487 1.85099C400.133 2.10009 399.645 3.37605 550.379 2.39298C701.116 1.40987 783.75 1.15902 840.833 0.923011C897.916 0.686997 1017.11 1.7944 1110.14 1.39469C1132.99 1.29651 1161.65 1.24455 1193 1.21232C1215.8 0.454307 1238.38 21.2938 1237.83 46C1237.85 86.8017 1237.87 128.66 1237.93 166C1238.33 192.951 1213.61 211.968 1193 211.108C1181.8 211.158 1171.74 211.219 1163.13 211.293C1086.89 211.947 1086.73 210.519 1025.13 209.721Z"/>
				</svg>
			</blockquote>
		<?php endif; ?>
	</div>
</section>
