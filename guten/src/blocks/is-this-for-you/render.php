<?php
/**
 * Template for rendering the is this for you block.
 *
 * @package domca
 */

$domca_is_this_for_you_title = $attributes['title'] ?? '';
$domca_is_this_for_you_card1 = $attributes['card1'] ?? '';
$domca_is_this_for_you_card2 = $attributes['card2'] ?? '';
$domca_is_this_for_you_card3 = $attributes['card3'] ?? '';
$domca_is_this_for_you_card4 = $attributes['card4'] ?? '';
$domca_is_this_for_you_card5 = $attributes['card5'] ?? '';
$domca_is_this_for_you_card6 = $attributes['card6'] ?? '';

$domca_is_this_for_you_base_class = 'wp-block-domca-is-this-for-you';

$domca_is_this_for_you_wrapper_attributes = get_block_wrapper_attributes(
	array(
		'class' => 'dm-wrap',
	)
);

$domca_is_this_for_you_cards = array(
	$domca_is_this_for_you_card1,
	$domca_is_this_for_you_card2,
	$domca_is_this_for_you_card3,
	$domca_is_this_for_you_card4,
	$domca_is_this_for_you_card5,
	$domca_is_this_for_you_card6,
);

$domca_card_colors = array(
	'#694F52',
	'#DCD0D2',
	'#967376',
	'#CAB9BB',
	'#9F7F83',
	'#B09699',
);

$domca_visible_card_index = 0;

?>

<section
	<?php
	// phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
	echo $domca_is_this_for_you_wrapper_attributes;
	?>
>
    <div class="<?php echo esc_attr( $domca_is_this_for_you_base_class . '__wrap dm-container' ); ?>">
		<?php if ( ! empty( $domca_is_this_for_you_title ) ) : ?>
            <h2 class="<?php echo esc_attr( $domca_is_this_for_you_base_class . '__title dm-heading dm-heading-h2' ); ?>">
				<?php echo wp_kses_post( $domca_is_this_for_you_title ); ?>
            </h2>
		<?php endif; ?>

        <div class="<?php echo esc_attr( $domca_is_this_for_you_base_class . '__cards' ); ?>">
			<?php foreach ( $domca_is_this_for_you_cards as $domca_card_index => $domca_card_text ) : ?>
				<?php if ( ! empty( $domca_card_text ) ) : ?>
                    <div
                            class="<?php echo esc_attr( $domca_is_this_for_you_base_class . '__card' ); ?>"
                            data-card-index="<?php echo esc_attr( $domca_visible_card_index + 1 ); ?>"
                    >
                        <svg
                                preserveAspectRatio="none"
                                viewBox="0 0 403 269"
                                fill="none"
                                class="<?php echo esc_attr( $domca_is_this_for_you_base_class . '__card-bg-layer-two' ); ?>"
                                aria-hidden="true"
                        >
                            <path
                                    d="M1.98931 219.889C3.49731 251.505 20.4779 270.121 38.7039 267.937C149.672 255.639 260.614 248.515 371.579 236.217C389.831 234.033 403.146 214.975 402.155 193.603C400.338 155.669 400.338 117.631 402.155 79.6713C403.039 60.5613 392.486 43.2973 377.195 38.3053C375.404 37.7073 373.503 37.2913 371.579 37.0573C260.611 24.7593 149.669 12.4353 38.7039 0.137313C29.5233 -0.954686 20.6859 4.53132 13.9519 14.2813C7.31935 23.9013 2.74334 37.6813 1.98674 53.3853C-0.662664 108.843 -0.662685 164.434 1.98931 219.889Z"
                                    fill="<?php echo esc_attr( $domca_card_colors[ $domca_visible_card_index ] ); ?>"
                            />
                        </svg>
                        <svg
                                viewBox="0 0 376 251"
                                fill="none"
                                preserveAspectRatio="none"
                                class="<?php echo esc_attr( $domca_is_this_for_you_base_class . '__card-bg-layer-one' ); ?>"
                                aria-hidden="true"
                        >
                            <path
                                    d="M0.0210254 198.423C-0.618575 227.506 13.4214 250.787 30.2616 250.386C132.642 248.829 235.022 247.274 337.402 245.717C354.261 245.322 367.669 229.04 368.103 209.379C368.86 174.469 371.278 139.639 375.349 105.046C377.629 85.5619 366.644 66.9512 350.059 63.3554C249.249 42.376 148.432 21.394 47.6166 0.411957C31.0572 -3.18124 13.9882 17.1248 10.6082 45.9484C4.662 96.5002 1.12343 147.406 0.0210254 198.423Z"
                                    fill="#fff"
                            />
                        </svg>
                        <p class="<?php echo esc_attr( $domca_is_this_for_you_base_class . '__card-text' ); ?>">
							<?php echo wp_kses_post( $domca_card_text ); ?>
                        </p>
                    </div>
					<?php ++ $domca_visible_card_index; ?>
				<?php endif; ?>
			<?php endforeach; ?>
        </div>
    </div>
</section>

<style>
    .<?php echo esc_attr( $domca_is_this_for_you_base_class ); ?> {
        background-image: url('<?php echo get_template_directory_uri() . '/images/bg-logo-pattern.svg'; ?>');
        background-position: top center;
        background-repeat: repeat;
        background-size: 100% auto;
    }
</style>