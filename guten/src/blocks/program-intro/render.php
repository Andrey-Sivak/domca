<?php
/**
 * Template for rendering the program introduction block.
 *
 * @package domca
 */

$domca_program_intro_title    = $attributes['title'] ?? '';
$domca_program_intro_text     = $attributes['text'] ?? '';
$domca_program_intro_image    = $attributes['image'] ?? array();
$domca_program_intro_image_id = $domca_program_intro_image['id'] ?? null;

$domca_program_intro_base_class = 'wp-block-domca-program-intro';

$domca_program_intro_wrapper_attributes = get_block_wrapper_attributes(
	array(
		'class' => 'dm-wrap',
	)
);

?>

<section
	<?php
	// phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
	echo $domca_program_intro_wrapper_attributes;
	?>
>
	<div class="<?php echo esc_attr( $domca_program_intro_base_class . '__wrap dm-container' ); ?>">
		<?php if ( ! empty( $domca_program_intro_image_id ) ) : ?>
			<figure class="<?php echo esc_attr( $domca_program_intro_base_class . '__image' ); ?>">
				<?php
				echo wp_get_attachment_image(
					$domca_program_intro_image_id,
					'full',
					false,
					array()
				);
				?>
			</figure>
		<?php endif; ?>

		<div class="<?php echo esc_attr( $domca_program_intro_base_class . '__content' ); ?>">
			<?php if ( ! empty( $domca_program_intro_title ) ) : ?>
				<h2 class="<?php echo esc_attr( $domca_program_intro_base_class . '__title dm-heading dm-heading-h2' ); ?>">
					<?php echo wp_kses_post( $domca_program_intro_title ); ?>
				</h2>
			<?php endif; ?>

			<?php if ( ! empty( $domca_program_intro_image_id ) ) : ?>
				<figure class="<?php echo esc_attr( $domca_program_intro_base_class . '__image-mob' ); ?>">
					<?php
					echo wp_get_attachment_image(
						$domca_program_intro_image_id,
						'full',
						false,
						array()
					);
					?>
				</figure>
			<?php endif; ?>

			<?php if ( ! empty( $domca_program_intro_text ) ) : ?>
				<p class="<?php echo esc_attr( $domca_program_intro_base_class . '__text' ); ?>">
					<?php echo wp_kses_post( $domca_program_intro_text ); ?>
				</p>
			<?php endif; ?>
		</div>
	</div>
	<!--  For assets/js/BgBlockWrapper.js.  -->
	<style>
		.<?php echo esc_attr( $domca_program_intro_base_class ); ?> {
			background-image: url('<?php echo get_template_directory_uri() . '/images/bg-logo-pattern.svg'; ?>');
		}
	</style>
</section>
