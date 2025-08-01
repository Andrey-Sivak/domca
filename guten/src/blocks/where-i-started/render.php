<?php
/**
 * Template for rendering the where I started block.
 *
 * @package domca
 */

$domca_where_i_started_title         = $attributes['title'] ?? '';
$domca_where_i_started_head_text     = $attributes['headText'] ?? '';
$domca_where_i_started_image         = $attributes['image'] ?? null;
$domca_where_i_started_text_part_one = $attributes['textPartOne'] ?? '';
$domca_where_i_started_text_part_two = $attributes['textPartTwo'] ?? '';
$domca_where_i_started_bottom_text   = $attributes['bottomText'] ?? '';

$domca_where_i_started_base_class = 'wp-block-domca-where-i-started';

$domca_where_i_started_wrapper_attributes = get_block_wrapper_attributes(
	array(
		'class' => $domca_where_i_started_base_class . ' dm-wrap',
	)
);

?>

<section
	<?php
	// phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
	echo $domca_where_i_started_wrapper_attributes;
	?>
>
	<div class="<?php echo esc_attr( $domca_where_i_started_base_class . '__wrap dm-container' ); ?>">
		<?php if ( ! empty( $domca_where_i_started_title ) ) : ?>
			<h2 class="<?php echo esc_attr( $domca_where_i_started_base_class . '__title dm-heading dm-heading-h2' ); ?>">
				<?php echo wp_kses_post( $domca_where_i_started_title ); ?>
			</h2>
		<?php endif; ?>

		<?php if ( ! empty( $domca_where_i_started_head_text ) ) : ?>
			<p class="<?php echo esc_attr( $domca_where_i_started_base_class . '__head-text' ); ?>">
				<?php echo wp_kses_post( $domca_where_i_started_head_text ); ?>
			</p>
		<?php endif; ?>

		<div class="<?php echo esc_attr( $domca_where_i_started_base_class . '__content' ); ?>">
			<div class="<?php echo esc_attr( $domca_where_i_started_base_class . '__content_text' ); ?>">
				<?php if ( ! empty( $domca_where_i_started_text_part_one ) ) : ?>
					<p>
						<?php echo wp_kses_post( $domca_where_i_started_text_part_one ); ?>
					</p>
				<?php endif; ?>

				<?php if ( ! empty( $domca_where_i_started_text_part_two ) ) : ?>
					<p>
						<?php echo wp_kses_post( $domca_where_i_started_text_part_two ); ?>
					</p>
				<?php endif; ?>
			</div>

			<?php if ( ! empty( $domca_where_i_started_image['url'] ) ) : ?>
				<figure class="<?php echo esc_attr( $domca_where_i_started_base_class . '__image' ); ?>">
					<?php echo wp_get_attachment_image( $domca_where_i_started_image['id'], 'full', false, array() ); ?>
				</figure>
			<?php endif; ?>
		</div>

		<?php if ( ! empty( $domca_where_i_started_bottom_text ) ) : ?>
			<p class="<?php echo esc_attr( $domca_where_i_started_base_class . '__bottom-text' ); ?>">
				<?php echo wp_kses_post( $domca_where_i_started_bottom_text ); ?>
			</p>
		<?php endif; ?>
	</div>
</section>
