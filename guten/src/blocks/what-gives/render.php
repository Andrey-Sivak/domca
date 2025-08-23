<?php
/**
 * Template for rendering the What Gives block.
 *
 * @package domca
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$domca_wg_title  = $attributes['title'] ?? '';
$domca_wg_items  = ( isset( $attributes['items'] ) && is_array( $attributes['items'] ) ) ? $attributes['items'] : array();
$domca_wg_button = $attributes['button'] ?? '';

$domca_wg_base_class = 'wp-block-domca-what-gives';

$domca_wg_wrapper_attributes = get_block_wrapper_attributes(
	array(
		'class' => 'dm-wrap',
	)
);
?>

<section
	<?php
	// phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
	echo $domca_wg_wrapper_attributes;
	?>
>
	<div class="<?php echo esc_attr( $domca_wg_base_class . '__wrap dm-container' ); ?>">
		<?php if ( ! empty( $domca_wg_title ) ) : ?>
			<h2 class="<?php echo esc_attr( $domca_wg_base_class . '__title dm-heading dm-heading-h2' ); ?>">
				<?php echo wp_kses_post( $domca_wg_title ); ?>
			</h2>
		<?php endif; ?>

		<?php if ( ! empty( $domca_wg_items ) ) : ?>
			<div class="<?php echo esc_attr( $domca_wg_base_class . '__slides' ); ?>">

				<?php
				if ( count( $domca_wg_items ) > 3 ) {
					echo '<div class="swiper-wrapper" role="list">';
				}
				?>

				<?php foreach ( $domca_wg_items as $domca_item ) : ?>
					<?php
					$slide_title = is_array( $domca_item ) ? ( $domca_item['title'] ?? '' ) : '';
					$slide_text  = is_array( $domca_item ) ? ( $domca_item['text'] ?? '' ) : '';
					$image_id    = 0;

					if ( is_array( $domca_item ) && isset( $domca_item['image'] ) ) {
						if ( is_array( $domca_item['image'] ) ) {
							$image_id = isset( $domca_item['image']['id'] ) ? (int) $domca_item['image']['id'] : 0;
						}
					}

					// Skip rendering if slide is completely empty.
					if ( '' === trim( (string) $slide_title ) && '' === trim( (string) $slide_text ) && ! $image_id ) {
						continue;
					}
					?>
					<div class="<?php echo esc_attr( $domca_wg_base_class . '__slide ' . ( count( $domca_wg_items ) > 3 ? ' swiper-slide' : '' ) ); ?>">
						<?php if ( $image_id ) : ?>
						<figure class="<?php echo esc_attr( $domca_wg_base_class . '__slide-image' ); ?>">
							<?php echo wp_get_attachment_image( $image_id, 'full', false, array() ); ?>
						</figure>
						<?php endif; ?>

						<?php if ( ! empty( $slide_title ) ) : ?>
							<p class="<?php echo esc_attr( $domca_wg_base_class . '__slide-title' ); ?>">
								<?php echo wp_kses_post( $slide_title ); ?>
							</p>
						<?php endif; ?>

						<?php if ( ! empty( $slide_text ) ) : ?>
							<p class="<?php echo esc_attr( $domca_wg_base_class . '__slide-text' ); ?>">
								<?php echo wp_kses_post( $slide_text ); ?>
							</p>
						<?php endif; ?>
					</div>
				<?php endforeach; ?>

				<?php
				if ( count( $domca_wg_items ) > 3 ) {
					echo '</div>';
					echo '<div class="' . esc_attr( $domca_wg_base_class ) . '__pagination swiper-pagination"></div>';
				}
				?>

			</div>
		<?php endif; ?>

		<?php if ( ! empty( $domca_wg_button ) ) : ?>
			<p class="<?php echo esc_attr( $domca_wg_base_class . '__button dm-button dm-button-primary' ); ?>">
				<?php echo wp_kses_post( $domca_wg_button ); ?>
			</p>
		<?php endif; ?>
	</div>
</section>
