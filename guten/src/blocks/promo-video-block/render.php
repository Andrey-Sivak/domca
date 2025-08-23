<?php
/**
 * Render callback for domca/promo-video-block
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/** @var array    $attributes */
/** @var string   $content */
/** @var WP_Block $block */

$base_class = 'wp-block-domca-promo-video-block';

$top_text = $attributes['topText'] ?? '';
$title    = $attributes['title'] ?? '';
$text     = $attributes['text'] ?? '';
$button   = $attributes['button'] ?? '';
$video    = isset( $attributes['video'] ) && is_array( $attributes['video'] ) ? $attributes['video'] : array();

$video_id  = isset( $video['id'] ) ? (int) $video['id'] : 0;
$video_url = ! empty( $video['url'] ) ? $video['url'] : '';

$mime = '';
if ( $video_id ) {
	$mime = get_post_mime_type( $video_id ) ?: '';
}
if ( ! $mime && $video_url ) {
	$filetype = wp_check_filetype( $video_url );
	$mime     = $filetype['type'] ?? '';
}

$wrapper_attrs = get_block_wrapper_attributes(
	array(
		'class' => $base_class . ' dm-wrap',
	)
);
?>
<section <?php echo $wrapper_attrs; ?>>
	<div class="<?php echo esc_attr( $base_class ); ?>__wrap dm-container">
		<?php if ( ! empty( $top_text ) ) : ?>
			<p class="<?php echo esc_attr( $base_class ); ?>__top-text">
				<?php echo wp_kses_post( $top_text ); ?>
			</p>
		<?php endif; ?>

		<div class="<?php echo esc_attr( $base_class ); ?>__video">
			<?php if ( $video_url ) : ?>
				<video class="<?php echo esc_attr( $base_class ); ?>__video-el" controls playsinline preload="metadata">
					<source src="<?php echo esc_url( $video_url ); ?>"<?php echo $mime ? ' type="' . esc_attr( $mime ) . '"' : ''; ?> />
				</video>
			<?php endif; ?>
		</div>

		<?php if ( ! empty( $title ) ) : ?>
			<h2 class="<?php echo esc_attr( $base_class ); ?>__title dm-heading dm-heading-h2">
				<?php echo wp_kses_post( $title ); ?>
			</h2>
		<?php endif; ?>

		<?php if ( ! empty( $text ) ) : ?>
			<p class="<?php echo esc_attr( $base_class ); ?>__text">
				<?php echo wp_kses_post( $text ); ?>
			</p>
		<?php endif; ?>

		<?php if ( ! empty( $button ) ) : ?>
			<p class="<?php echo esc_attr( $base_class ); ?>__button dm-button dm-button-primary">
				<?php echo wp_kses_post( $button ); ?>
			</p>
		<?php endif; ?>
	</div>
</section>
