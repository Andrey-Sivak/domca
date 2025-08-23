<?php
/**
 * Render callback for domca/understanding-benefits
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/** @var array $attributes */
/** @var string $content */
/** @var WP_Block $block */

$base_class = 'wp-block-domca-understanding-benefits';

$title = $attributes['title'] ?? '';
$items = ( isset( $attributes['items'] ) && is_array( $attributes['items'] ) ) ? $attributes['items'] : array();

$wrapper_attrs = get_block_wrapper_attributes(
	array(
		'class' => $base_class . ' dm-wrap',
	)
);
?>
<section <?php echo $wrapper_attrs; ?>>
	<div class="<?php echo esc_attr( $base_class ); ?>__wrap dm-container">
		<?php if ( ! empty( $title ) ) : ?>
			<h2 class="<?php echo esc_attr( $base_class ); ?>__title dm-heading dm-heading-h2">
				<?php echo wp_kses_post( $title ); ?>
			</h2>
		<?php endif; ?>

		<?php if ( ! empty( $items ) ) : ?>
			<div class="<?php echo esc_attr( $base_class ); ?>__items-wrap">
				<div class="<?php echo esc_attr( $base_class ); ?>__items-inner">
					<?php get_template_part( '/vector-images/understanding-benefits-bg' ); ?>
					<div class="<?php echo esc_attr( $base_class ); ?>__items">
						<?php
						foreach ( $items as $item ) {
							$text = '';
							if ( is_array( $item ) && isset( $item['text'] ) ) {
								$text = (string) $item['text'];
							} elseif ( is_string( $item ) ) {
								$text = $item;
							}

							if ( '' === trim( $text ) ) {
								continue;
							}
							?>
							<div class="<?php echo esc_attr( $base_class ); ?>__item">
								<p class="<?php echo esc_attr( $base_class ); ?>__item-text">
									<?php echo wp_kses_post( $text ); ?>
								</p>
							</div>
							<?php
						}
						?>
					</div>
				</div>
			</div>
		<?php endif; ?>
	</div>
</section>
