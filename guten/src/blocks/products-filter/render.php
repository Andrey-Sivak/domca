<?php
/**
 * Server-side renderer for the "Products Filter" block.
 *
 * @package domca
 */

defined( 'ABSPATH' ) || exit;

$base_class   = 'wp-block-domca-products-filter';
$current_lang = apply_filters( 'wpml_current_language', '' );

$domca_products_filter_title       = isset( $attributes['title'] ) ? (string) $attributes['title'] : '';
$domca_products_filter_tone_title  = isset( $attributes['toneButtonsTitle'] ) ? (string) $attributes['toneButtonsTitle'] : '';
$domca_products_filter_topic_title = isset( $attributes['topicButtonsTitle'] ) ? (string) $attributes['topicButtonsTitle'] : '';

$topics = get_terms(
	array(
		'taxonomy'   => 'topic',
		'hide_empty' => false,
		'orderby'    => 'name',
		'order'      => 'ASC',
		'lang'       => $current_lang,
	)
);

$tones = get_terms(
	array(
		'taxonomy'   => 'tone',
		'hide_empty' => false,
		'orderby'    => 'name',
		'order'      => 'ASC',
		'lang'       => $current_lang,
	)
);

// Determine default active topic (first in list).
$active_topic_slug = '';
if ( ! empty( $topics ) && ! is_wp_error( $topics ) ) {
	$active_topic_slug = (string) $topics[0]->slug;
}

// Products: load all published products.
$products = get_posts(
	array(
		'post_type'        => 'product',
		'post_status'      => 'publish',
		'posts_per_page'   => - 1,
		'orderby'          => 'menu_order title',
		'order'            => 'ASC',
		'no_found_rows'    => true,
		'suppress_filters' => false,
		'lang'             => $current_lang,
	)
);

$wrapper_attributes = get_block_wrapper_attributes(
	array(
		'class'             => $base_class . ' dm-wrap',
		'data-active-topic' => $active_topic_slug,
		'data-active-tones' => '', // none active by default => all tones visible
	)
);

$domca_products_filter_render_decor_svg = static function () use ( $base_class ) {
	ob_start();
	?>
	<svg
			preserveAspectRatio="none"
			aria-hidden="true"
			viewBox="0 0 471 645"
			fill="none"
			class="<?php echo esc_attr( "{$base_class}__product-decor" ); ?>"
	>
		<path d="M6 56C6 28.3858 28.3858 6 56 6H414C441.614 6 464 28.3858 464 56V587C464 614.614 441.614 637 414 637H56C28.3858 637 6 614.614 6 587V56Z"
			  fill="white"/>
		<path d="M288.175 641.652C241.996 640.654 205.644 645.062 149.359 644.439C105.583 643.955 90.7554 642.433 56 642.027C45.1936 641.904 31.9611 638.757 19.8833 628.486C7.79437 618.247 0.735173 602.411 0.909128 587C1.05588 538.288 1.85502 494.377 1.10854 472.076C0.147543 443.376 3.05298 440.347 2.40767 399.591C1.76245 358.837 2.14169 334.137 3.08608 298.494C4.03047 262.849 4.83672 153.342 3.67659 113.523C3.13008 94.7646 3.28772 74.7645 3.65728 56C3.86398 33.359 19.7118 16.4769 32.8869 10.5338C40.7252 6.73465 47.6438 5.79733 52.7928 5.67117C54.9866 5.63118 55.9996 5.85536 56 6.0338C56 6.03392 56 6.03404 56 6.03416C55.9934 6.27494 54.4516 6.44741 51.6941 6.70587C38.7051 7.44547 17.2424 17.6518 10.4261 40.4919C8.73267 46.1588 8.24579 51.3422 8.34568 56C9.0081 86.647 7.81958 97.4244 8.51149 149.446C9.31358 209.751 10.9171 245.982 9.8802 316.938C8.84336 387.893 13.1825 404.191 10.7234 504.352C9.82458 540.963 9.86066 565.6 10.2977 587C11.1484 610.151 28.2757 630.207 56 630.31C69.9506 629.976 85.9549 629.711 105.319 629.594C205.131 628.991 331.124 631.495 391.292 631.287C398.569 631.262 406.148 631.232 414 631.2C435.208 631.915 458.397 612.516 457.921 587C457.832 547.931 457.844 505.539 458.15 461.978C458.748 376.682 457.237 271.387 458.305 177.234C458.721 140.556 459.18 97.9658 459.639 56C460.577 30.6916 437.332 8.93625 414 9.48687C378.507 9.0803 347.133 8.69752 325.019 8.37233C263.526 7.46801 248.538 7.26403 189.348 7.8166C155.325 8.13424 108.455 7.83484 68.8646 6.6667C48.9404 6.07881 53.4552 5.26026 73.5096 4.86861C102.836 4.29591 126.909 4.67851 142.02 3.65553C172.214 1.61107 185.046 0.826786 223.164 2.01674C261.28 3.20655 279.24 0.502513 301.459 0.813737C322.11 1.10312 323.253 2.50115 414 1.71081C421.467 1.64337 429.617 3.12232 437.512 6.81006C457.886 16.2165 469.205 37.1035 469.089 56C469.85 134.414 470.104 182.37 470.346 217.451C470.641 260.236 469.257 349.574 469.757 419.303C470.053 460.728 470.012 527.576 470.102 587C470.684 621.364 438.353 644.658 414 643.385C405.607 643.448 398.069 643.524 391.611 643.616C334.469 644.434 334.352 642.649 288.175 641.652Z"
			  fill="#817676"/>
	</svg>
	<?php
	return (string) ob_get_clean();
}

?>
<section
		<?php
        // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
		echo $wrapper_attributes;
		?>
>
	<div class="<?php echo esc_attr( $base_class . '__wrap dm-container' ); ?>">

		<h2 class="<?php echo esc_attr( $base_class . '__title dm-heading dm-heading-h2' ); ?>">
			<?php echo wp_kses_post( $domca_products_filter_title ); ?>
		</h2>

		<?php if ( ! empty( $topics ) && ! is_wp_error( $topics ) ) : ?>
			<div class="<?php echo esc_attr( $base_class . '__filters-group ' . $base_class . '__filters-group--topics' ); ?>">
				<h3 class="<?php echo esc_attr( $base_class . '__filters-title dm-heading dm-heading-h4' ); ?>">
					<?php echo wp_kses_post( $domca_products_filter_topic_title ); ?>
				</h3>
				<ul class="<?php echo esc_attr( $base_class . '__filters-list' ); ?>" role="list">
					<?php foreach ( $topics as $idx => $term ) : ?>
						<li class="<?php echo esc_attr( $base_class . '__topics-item' ); ?>">
							<button
									type="button"
									class="<?php echo esc_attr( $base_class . '__filter-btn ' . $base_class . '__topic-btn' . ( 0 === $idx ? ' is-active' : '' ) ); ?>"
									data-filter-topic="<?php echo esc_attr( (string) $term->slug ); ?>"
									aria-pressed="<?php echo 0 === $idx ? 'true' : 'false'; ?>"
							>
								<?php echo esc_html( $term->name ); ?>
							</button>
						</li>
					<?php endforeach; ?>
				</ul>
			</div>
		<?php endif; ?>

		<?php if ( ! empty( $tones ) && ! is_wp_error( $tones ) ) : ?>
			<div class="<?php echo esc_attr( $base_class . '__filters-group ' . $base_class . '__filters-group--tones' ); ?>">
				<h3 class="<?php echo esc_attr( $base_class . '__filters-title dm-heading dm-heading-h4' ); ?>">
					<?php echo wp_kses_post( $domca_products_filter_tone_title ); ?>
				</h3>
				<ul class="<?php echo esc_attr( $base_class . '__filters-list' ); ?>" role="list">
					<?php foreach ( $tones as $term ) : ?>
						<li class="<?php echo esc_attr( $base_class . '__tones-item' ); ?>">
							<button
									type="button"
									class="<?php echo esc_attr( $base_class . '__filter-btn ' . $base_class . '__tone-btn' ); ?>"
									data-filter-tone="<?php echo esc_attr( (string) $term->slug ); ?>"
									aria-pressed="false"
									aria-checked="false"
									role="checkbox"
							>
								<?php echo esc_html( $term->name ); ?>
							</button>
						</li>
					<?php endforeach; ?>
				</ul>
			</div>
		<?php endif; ?>
	</div>

	<div class="<?php echo esc_attr( $base_class . '__results dm-container' ); ?>">
		<div class="<?php echo esc_attr( $base_class . '__grid' ); ?>" data-products-grid="1">
			<?php
			if ( ! empty( $products ) ) :
				foreach (
						$products

						as $post
				) :
					// Get meta once.
					$meta        = get_post_meta( $post->ID );
					$link        = isset( $meta['domca_product_link'][0] ) ? (string) $meta['domca_product_link'][0] : '';
					$price       = isset( $meta['domca_product_price'][0] ) ? (string) $meta['domca_product_price'][0] : '';
					$length      = isset( $meta['domca_product_length'][0] ) ? (string) $meta['domca_product_length'][0] : '';
					$description = isset( $meta['domca_product_description'][0] ) ? (string) $meta['domca_product_description'][0] : '';

					// Terms for this product.
					$post_topics = wp_get_object_terms(
						$post->ID,
						'topic',
						array(
							'fields' => 'all',
						)
					);
					$post_tones  = wp_get_object_terms(
						$post->ID,
						'tone',
						array(
							'fields' => 'all',
						)
					);

					// Prepare topics: slugs for filtering and names for display.
					$topic_slugs = array();
					$topic_names = array();
					if ( ! is_wp_error( $post_topics ) && ! empty( $post_topics ) ) {
						foreach ( $post_topics as $t ) {
							$topic_slugs[] = (string) $t->slug;
							$topic_names[] = (string) $t->name;
						}
					}
					$topic_slugs     = array_unique( $topic_slugs );
					$topic_names     = array_unique( $topic_names );
					$topic_slugs_str = implode( ' ', $topic_slugs );

					// Tones: unique by term_id. If none assigned, single "unspecified" instance.
					if ( ! is_wp_error( $post_tones ) && ! empty( $post_tones ) ) {
						$unique_tones = array();
						foreach ( $post_tones as $tt ) {
							$unique_tones[ (int) $tt->term_id ] = $tt;
						}
						$tones_for_loop = array_values( $unique_tones );
					} else {
						$tones_for_loop = array( null );
					}

					foreach (
							$tones_for_loop

							as $tone_term
					) :
						$tone_slug = $tone_term instanceof WP_Term ? (string) $tone_term->slug : '';
						$tone_name = $tone_term instanceof WP_Term ? (string) $tone_term->name : '';

						// Default visibility: only products that have the default topic are considered active initially.
						$visible_default = $active_topic_slug ? ( in_array( $active_topic_slug, $topic_slugs, true ) ? '1' : '0' ) : '1';
						?>
						<article
								class="<?php echo esc_attr( $base_class . '__product' ); ?>"
								data-product="1"
								data-product-id="<?php echo esc_attr( (string) $post->ID ); ?>"
								data-topics="<?php echo esc_attr( $topic_slugs_str ); ?>"
								data-tone="<?php echo esc_attr( $tone_slug ); ?>"
								data-visible-default="<?php echo esc_attr( $visible_default ); ?>"
						>
							<?php
                            // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
							echo $domca_products_filter_render_decor_svg();
							?>
							<div class="<?php echo esc_attr( $base_class . '__product-content' ); ?>">
								<h3 class="<?php echo esc_attr( $base_class . '__product-title' ); ?>">
									<?php echo esc_html( get_the_title( $post ) ); ?>
								</h3>

								<?php if ( $description ) : ?>
									<p class="<?php echo esc_attr( $base_class . '__product-description' ); ?>">
										<?php
										// Preserve newlines as <br>, keep plain text safe.
										echo wp_kses_post( nl2br( esc_html( $description ) ) );
										?>
									</p>
								<?php endif; ?>

								<div class="<?php echo esc_attr( $base_class . '__product-meta' ); ?>">
									<p class="<?php echo esc_attr( $base_class . '__product-meta-title' ); ?>">
										<?php echo esc_html__( 'Topic:', 'domca' ); ?>
									</p>
									<?php if ( ! empty( $topic_names ) ) : ?>
										<ul class="<?php echo esc_attr( $base_class . '__product-meta-list' ); ?>"
											role="list">
											<?php foreach ( $topic_names as $tn ) : ?>
												<li class="<?php echo esc_attr( $base_class . '__product-meta-item' ); ?>">
													<?php echo esc_html( $tn ); ?>
												</li>
											<?php endforeach; ?>
										</ul>
									<?php endif; ?>
								</div>

								<?php if ( $tone_name ) : ?>
									<div class="<?php echo esc_attr( $base_class . '__product-meta' ); ?>">
										<p class="<?php echo esc_attr( $base_class . '__product-meta-title' ); ?>">
											<?php echo esc_html__( 'Tone:', 'domca' ); ?>
										</p>
										<ul class="<?php echo esc_attr( $base_class . '__product-meta-list' ); ?>"
											role="list">
											<li class="<?php echo esc_attr( $base_class . '__product-meta-item' ); ?>">
												<?php echo esc_html( $tone_name ); ?>
											</li>
										</ul>
									</div>
								<?php endif; ?>

								<?php if ( $length ) : ?>
									<div class="<?php echo esc_attr( $base_class . '__product-info' ); ?>">
										<span class="<?php echo esc_attr( $base_class . '__product-info-title' ); ?>">
											<?php echo esc_html__( 'Length:', 'domca' ); ?>
										</span>
										<span class="<?php echo esc_attr( $base_class . '__product-info-value' ); ?>">
											<?php echo esc_html( $length ); ?>
										</span>
									</div>
								<?php endif; ?>

								<?php if ( $price ) : ?>
									<div class="<?php echo esc_attr( $base_class . '__product-info' ); ?>">
										<span class="<?php echo esc_attr( $base_class . '__product-info-title' ); ?>">
											<?php echo esc_html__( 'Price:', 'domca' ); ?>
										</span>
										<span class="<?php echo esc_attr( $base_class . '__product-info-value' ); ?>">
											<?php echo esc_html( $price ); ?>
										</span>
									</div>
								<?php endif; ?>

								<?php if ( $link ) : ?>
									<p class="<?php echo esc_attr( $base_class . '__product-link' ); ?>">
										<a href="<?php echo esc_url( $link ); ?>" target="_blank"
										   rel="noopener nofollow">
											<?php echo esc_html__( 'Open', 'domca' ); ?>
										</a>
									</p>
								<?php endif; ?>
							</div>
						</article>
						<?php
					endforeach;
				endforeach;
			else :
				?>
				<p class="<?php echo esc_attr( $base_class . '__empty' ); ?>">
					<?php echo esc_html__( 'No products found.', 'domca' ); ?>
				</p>
			<?php endif; ?>
		</div>
	</div>
</section>
