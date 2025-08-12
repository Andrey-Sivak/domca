<?php
/**
 * Template for rendering the Holiday Support Section block.
 *
 * @package domca
 */

$domca_holiday_support_image  = $attributes['image'] ?? array();
$domca_holiday_support_title  = $attributes['title'] ?? '';
$domca_holiday_support_text   = $attributes['text'] ?? '';
$domca_holiday_support_button = $attributes['button'] ?? '';

$domca_holiday_support_image_id  = $domca_holiday_support_image['id'] ?? null;
$domca_holiday_support_image_url = $domca_holiday_support_image['url'] ?? '';

$domca_holiday_support_base_class = 'wp-block-domca-holiday-support';

$domca_holiday_support_wrapper_attributes = get_block_wrapper_attributes(
	array(
		'class' => 'dm-wrap',
	)
);
?>

<section
		<?php
        // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
		echo $domca_holiday_support_wrapper_attributes;
		?>
>
	<div class="<?php echo esc_attr( $domca_holiday_support_base_class . '__wrap dm-container' ); ?>">
		<?php if ( $domca_holiday_support_image_id ) : ?>
			<div class="<?php echo esc_attr( $domca_holiday_support_base_class . '__img' ); ?>">
				<?php echo wp_get_attachment_image( $domca_holiday_support_image_id, 'full', false, array() ); ?>
			</div>
		<?php endif; ?>

		<?php if ( ! empty( $domca_holiday_support_title ) ) : ?>
			<h2 class="<?php echo esc_attr( $domca_holiday_support_base_class . '__title dm-heading dm-heading-h2' ); ?>">
				<?php echo wp_kses_post( $domca_holiday_support_title ); ?>
			</h2>
		<?php endif; ?>

		<?php if ( ! empty( $domca_holiday_support_text ) ) : ?>
			<p class="<?php echo esc_attr( $domca_holiday_support_base_class . '__text' ); ?>">
				<?php echo wp_kses_post( $domca_holiday_support_text ); ?>
			</p>
		<?php endif; ?>

		<?php if ( ! empty( $domca_holiday_support_button ) ) : ?>
			<p class="<?php echo esc_attr( $domca_holiday_support_base_class . '__button dm-button dm-button-primary' ); ?>">
				<?php echo wp_kses_post( $domca_holiday_support_button ); ?>
			</p>
		<?php endif; ?>
	</div>
</section>

<style>
	.<?php echo esc_attr( $domca_holiday_support_base_class ); ?> {
		background-image: url('<?php echo get_template_directory_uri() . '/images/bg-logo-pattern.svg'; ?>');
	}
</style>
