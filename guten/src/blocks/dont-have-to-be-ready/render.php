<?php
/**
 * Template for rendering the don't have to be ready block.
 *
 * @package domca
 */

$domca_dont_have_to_be_ready_title              = $attributes['title'] ?? '';
$domca_dont_have_to_be_ready_subtitle           = $attributes['subtitle'] ?? '';
$domca_dont_have_to_be_ready_text               = $attributes['text'] ?? '';
$domca_dont_have_to_be_ready_emphasized_message = $attributes['emphasizedMessage'] ?? '';
$domca_dont_have_to_be_ready_button             = $attributes['button'] ?? '';

$domca_dont_have_to_be_ready_base_class = 'wp-block-domca-dont-have-to-be-ready';

$domca_dont_have_to_be_ready_wrapper_attributes = get_block_wrapper_attributes(
	array(
		'class' => 'dm-wrap',
	)
);
?>

<section
	<?php
	// phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
	echo $domca_dont_have_to_be_ready_wrapper_attributes;
	?>
>
	<div class="<?php echo esc_attr( $domca_dont_have_to_be_ready_base_class . '__wrap dm-container' ); ?>">
		<?php if ( ! empty( $domca_dont_have_to_be_ready_title ) ) : ?>
			<p class="<?php echo esc_attr( $domca_dont_have_to_be_ready_base_class . '__title dm-heading dm-heading-h2' ); ?>">
				<?php echo wp_kses_post( $domca_dont_have_to_be_ready_title ); ?>
			</p>
		<?php endif; ?>

		<?php if ( ! empty( $domca_dont_have_to_be_ready_subtitle ) ) : ?>
			<p class="<?php echo esc_attr( $domca_dont_have_to_be_ready_base_class . '__subtitle' ); ?>">
				<?php echo wp_kses_post( $domca_dont_have_to_be_ready_subtitle ); ?>
			</p>
		<?php endif; ?>

		<?php if ( ! empty( $domca_dont_have_to_be_ready_text ) ) : ?>
			<p class="<?php echo esc_attr( $domca_dont_have_to_be_ready_base_class . '__text' ); ?>">
				<?php echo wp_kses_post( $domca_dont_have_to_be_ready_text ); ?>
			</p>
		<?php endif; ?>

		<?php if ( ! empty( $domca_dont_have_to_be_ready_emphasized_message ) ) : ?>
			<p class="<?php echo esc_attr( $domca_dont_have_to_be_ready_base_class . '__emphasized-message' ); ?>">
				<?php echo wp_kses_post( $domca_dont_have_to_be_ready_emphasized_message ); ?>
			</p>
		<?php endif; ?>

		<?php if ( ! empty( $domca_dont_have_to_be_ready_button ) ) : ?>
			<p class="<?php echo esc_attr( $domca_dont_have_to_be_ready_base_class . '__button dm-button dm-button-primary' ); ?>">
				<?php echo wp_kses_post( $domca_dont_have_to_be_ready_button ); ?>
			</p>
		<?php endif; ?>
	</div>
</section>
