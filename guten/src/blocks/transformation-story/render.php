<?php
/**
 *
 * @package domca
 */

$domca_transformation_story_title    = $attributes['title'] ?? '';
$domca_transformation_story_subtitle = $attributes['subtitle'] ?? '';
$domca_transformation_story_images   = $attributes['images'] ?? null;

$domca_transformation_story_wrapper_attributes = get_block_wrapper_attributes(
	array(
		'class' => 'dm-wrap',
	)
);

$domca_transformation_story_base_class = 'wp-block-domca-transformation-story';
?>

<section
	<?php echo $domca_transformation_story_wrapper_attributes; ?>
>
    <div class="<?php echo esc_attr( $domca_transformation_story_base_class . '__wrap dm-container' ); ?>">
		<?php if ( $domca_transformation_story_title ) : ?>
            <h2 class="<?php echo esc_attr( $domca_transformation_story_base_class . '__title dm-heading dm-heading-h2' ); ?>">
				<?php echo wp_kses_post( $domca_transformation_story_title ); ?>
            </h2>
		<?php endif; ?>
		<?php if ( $domca_transformation_story_subtitle ) : ?>
            <div class="<?php echo esc_attr( $domca_transformation_story_base_class . '__subtitle' ); ?>">
				<?php echo wp_kses_post( $domca_transformation_story_subtitle ); ?>
            </div>
		<?php endif; ?>

		<?php if ( ! empty( $domca_transformation_story_images ) && count( $domca_transformation_story_images ) ) : ?>
            <div class="<?php echo esc_attr( $domca_transformation_story_base_class . '__gallery' ); ?>">
				<?php foreach ( $domca_transformation_story_images as $domca_transformation_story_image ) : ?>
					<?php if ( ! empty( $domca_transformation_story_image['image']['id'] ) ) : ?>
                        <figure class="<?php echo esc_attr( $domca_transformation_story_base_class . '__gallery-item' ); ?>">
							<?php
							echo wp_get_attachment_image(
								$domca_transformation_story_image['image']['id'],
								'full',
								false,
								array()
							);
							?>
                        </figure>
					<?php endif; ?>
				<?php endforeach; ?>
            </div>
		<?php endif; ?>
    </div>
</section>
