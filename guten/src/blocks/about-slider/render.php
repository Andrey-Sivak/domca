<?php
/**
 * Template for rendering the About Slider block.
 *
 * @package domca
 */

$domca_about_slider_name        = $attributes['name'] ?? '';
$domca_about_slider_credentials = $attributes['credentials'] ?? '';
$domca_about_slider_location    = $attributes['location'] ?? '';
$domca_about_slider_email       = $attributes['email'] ?? '';
$domca_about_slider_instagram   = $attributes['instagram'] ?? '';
$domca_about_slider_images      = $attributes['images'] ?? array();

$domca_about_slider_base_class = 'wp-block-domca-about-slider';

$domca_about_slider_wrapper_attributes = get_block_wrapper_attributes();
?>

<section
		<?php
        // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
		echo $domca_about_slider_wrapper_attributes;
		?>
>
	<div class="<?php echo esc_attr( $domca_about_slider_base_class . '__wrap' ); ?>">
		<div class="<?php echo esc_attr( $domca_about_slider_base_class . '__info' ); ?>">
			<?php if ( ! empty( $domca_about_slider_name ) ) : ?>
				<h2 class="<?php echo esc_attr( $domca_about_slider_base_class . '__name' ); ?>">
					<?php echo wp_kses_post( $domca_about_slider_name ); ?>
				</h2>
			<?php endif; ?>

			<?php if ( ! empty( $domca_about_slider_credentials ) ) : ?>
				<p class="<?php echo esc_attr( $domca_about_slider_base_class . '__credentials' ); ?>">
					<?php echo wp_kses_post( $domca_about_slider_credentials ); ?>
				</p>
			<?php endif; ?>

			<?php if ( ! empty( $domca_about_slider_location ) ) : ?>
				<p class="<?php echo esc_attr( $domca_about_slider_base_class . '__location' ); ?>">
					<?php echo wp_kses_post( $domca_about_slider_location ); ?>
				</p>
			<?php endif; ?>

			<?php if ( ! empty( $domca_about_slider_email ) ) : ?>
				<p class="<?php echo esc_attr( $domca_about_slider_base_class . '__email' ); ?>">
					<?php echo wp_kses_post( $domca_about_slider_email ); ?>
				</p>
			<?php endif; ?>

			<?php if ( ! empty( $domca_about_slider_instagram ) ) : ?>
				<p class="<?php echo esc_attr( $domca_about_slider_base_class . '__instagram' ); ?>">
					<?php echo wp_kses_post( $domca_about_slider_instagram ); ?>
				</p>
			<?php endif; ?>
		</div>

		<?php if ( ! empty( $domca_about_slider_images ) && is_array( $domca_about_slider_images ) ) : ?>
			<div class="<?php echo esc_attr( $domca_about_slider_base_class . '__images' ); ?>">
				<div class="swiper-wrapper" role="list">
					<?php
					foreach ( $domca_about_slider_images as $domca_image_item ) :

						$domca_img_obj = $domca_image_item['image'] ?? array();
						$domca_img_id  = $domca_img_obj['id'] ?? null;

						if ( ! empty( $domca_img_id ) ) :
							?>
							<figure class="<?php echo esc_attr( $domca_about_slider_base_class . '__image swiper-slide' ); ?>">
								<?php
								echo wp_get_attachment_image(
									$domca_img_id,
									'full',
									false,
									array()
								);
								?>
							</figure>
						<?php endif; ?>
					<?php endforeach; ?>
				</div>

                <div class="<?php echo esc_attr( $domca_about_slider_base_class . '__pagination swiper-pagination' ); ?>"></div>
			</div>
		<?php endif; ?>
	</div>
</section>
