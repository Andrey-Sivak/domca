<?php
/**
 *  Template for rendering the testimonial gallery block.
 *
 * @package domca
 */

$domca_testimonial_gallery_title       = $attributes['title'] ?? '';
$domca_testimonial_gallery_description = $attributes['description'] ?? '';
$domca_testimonial_gallery_images      = $attributes['images'] ?? null;
$domca_testimonial_gallery_button      = $attributes['button'] ?? '';

$domca_testimonial_gallery_wrapper_attributes = get_block_wrapper_attributes();

$domca_testimonial_gallery_base_class = 'wp-block-domca-testimonial-gallery';
?>

<section
	<?php
	// phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
	echo $domca_testimonial_gallery_wrapper_attributes;
	?>
>
	<div class="dm-wrap">
		<div class="<?php echo esc_attr( $domca_testimonial_gallery_base_class . '__wrap dm-container' ); ?>">
			<?php if ( $domca_testimonial_gallery_title ) : ?>
				<h2 class="<?php echo esc_attr( $domca_testimonial_gallery_base_class . '__title dm-heading dm-heading-h2 dm-animate' ); ?>">
					<?php echo wp_kses_post( $domca_testimonial_gallery_title ); ?>
				</h2>
			<?php endif; ?>
			<?php if ( $domca_testimonial_gallery_description ) : ?>
				<div class="<?php echo esc_attr( $domca_testimonial_gallery_base_class . '__description dm-animate' ); ?>">
					<?php echo wp_kses_post( $domca_testimonial_gallery_description ); ?>
				</div>
			<?php endif; ?>
		</div>
	</div>

	<?php if ( ! empty( $domca_testimonial_gallery_images ) && count( $domca_testimonial_gallery_images ) ) : ?>

		<div class="<?php echo esc_attr( $domca_testimonial_gallery_base_class . '__gallery' ); ?>">

			<div class="swiper-wrapper" role="list">

				<?php foreach ( $domca_testimonial_gallery_images as $domca_testimonial_gallery_image ) : ?>
					<?php
					if ( ! empty( $domca_testimonial_gallery_image['image']['id'] ) ) :
						?>
						<figure class="<?php echo esc_attr( $domca_testimonial_gallery_base_class . '__gallery-item swiper-slide' ); ?>">
							<?php
							echo wp_get_attachment_image(
								$domca_testimonial_gallery_image['image']['id'],
								'full',
								false,
								array()
							);
							?>
						</figure>
					<?php endif; ?>
				<?php endforeach; ?>


			</div>
			<div class="<?php echo esc_attr( $domca_testimonial_gallery_base_class . '__pagination swiper-pagination' ); ?>"></div>
		</div>
	<?php endif; ?>

	<?php if ( ! empty( $domca_testimonial_gallery_button ) ) : ?>
		<p class="<?php echo esc_attr( $domca_testimonial_gallery_base_class . '__button dm-button dm-button-primary dm-animate' ); ?>">
			<?php echo wp_kses_post( $domca_testimonial_gallery_button ); ?>
		</p>
	<?php endif; ?>
</section>
