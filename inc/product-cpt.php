<?php
/**
 * Product CPT, taxonomies (topic, tone) and meta fields (link, price, description).
 *
 * @package domca
 */

defined( 'ABSPATH' ) || exit;

add_action( 'init', 'domca_register_product_cpt_and_taxonomies' );

/**
 * Register CPT "product" and taxonomies "topic" (multi) and "tone" (multi).
 */
function domca_register_product_cpt_and_taxonomies(): void {
	register_post_type(
		'product',
		array(
			'labels'       => array(
				'name'               => __( 'Products', 'domca' ),
				'singular_name'      => __( 'Product', 'domca' ),
				'add_new'            => __( 'Add New', 'domca' ),
				'add_new_item'       => __( 'Add New Product', 'domca' ),
				'edit_item'          => __( 'Edit Product', 'domca' ),
				'new_item'           => __( 'New Product', 'domca' ),
				'all_items'          => __( 'All Products', 'domca' ),
				'view_item'          => __( 'View Product', 'domca' ),
				'search_items'       => __( 'Search Products', 'domca' ),
				'not_found'          => __( 'No products found', 'domca' ),
				'not_found_in_trash' => __( 'No products found in Trash', 'domca' ),
			),
			'public'       => true,
			'show_ui'      => true,
			'show_in_rest' => true,
			'menu_icon'    => 'dashicons-cart',
			'supports'     => array( 'title', 'revisions' ),
			'has_archive'  => true,
			'rewrite'      => array(
				'slug'       => 'products',
				'with_front' => false,
			),
		)
	);

	register_taxonomy(
		'topic',
		array( 'product' ),
		array(
			'labels'            => array(
				'name'          => __( 'Topics', 'domca' ),
				'singular_name' => __( 'Topic', 'domca' ),
			),
			'public'            => true,
			'show_ui'           => true,
			'show_in_rest'      => true,
			'hierarchical'      => true,
			'show_admin_column' => true,
			'rewrite'           => array(
				'slug' => 'topic',
			),
		)
	);

	register_taxonomy(
		'tone',
		array( 'product' ),
		array(
			'labels'            => array(
				'name'          => __( 'Tones', 'domca' ),
				'singular_name' => __( 'Tone', 'domca' ),
			),
			'public'            => true,
			'show_ui'           => true,
			'show_in_rest'      => true,
			'hierarchical'      => true,
			'show_admin_column' => true,
			'rewrite'           => array(
				'slug' => 'tone',
			),
		)
	);
}

/**
 * Flush rewrite rules on theme activation.
 */
add_action(
	'after_switch_theme',
	static function () {
		domca_register_product_cpt_and_taxonomies();
		flush_rewrite_rules();
	}
);

/**
 * Meta: register link, price, description for REST and sanitization.
 */
add_action( 'init', 'domca_register_product_meta' );
function domca_register_product_meta(): void {
	register_post_meta(
		'product',
		'domca_product_link',
		array(
			'type'              => 'string',
			'description'       => __( 'Product link (URL)', 'domca' ),
			'single'            => true,
			'show_in_rest'      => true,
			'sanitize_callback' => 'domca_sanitize_product_link',
			'auth_callback'     => 'domca_product_meta_auth_callback',
		)
	);

	register_post_meta(
		'product',
		'domca_product_price',
		array(
			'type'              => 'string',
			'description'       => __( 'Product price', 'domca' ),
			'single'            => true,
			'show_in_rest'      => true,
			'sanitize_callback' => 'domca_sanitize_product_price',
			'auth_callback'     => 'domca_product_meta_auth_callback',
		)
	);

	register_post_meta(
		'product',
		'domca_product_description',
		array(
			'type'              => 'string',
			'description'       => __( 'Product description', 'domca' ),
			'single'            => true,
			'show_in_rest'      => true,
			'sanitize_callback' => 'domca_sanitize_product_description',
			'auth_callback'     => 'domca_product_meta_auth_callback',
		)
	);

	register_post_meta(
		'product',
		'domca_product_length',
		array(
			'type'              => 'string',
			'description'       => __( 'Product length', 'domca' ),
			'single'            => true,
			'show_in_rest'      => true,
			'sanitize_callback' => 'domca_sanitize_product_length',
			'auth_callback'     => 'domca_product_meta_auth_callback',
		)
	);
}

function domca_sanitize_product_link( $value ): string {
	$value = is_string( $value ) ? trim( $value ) : '';
	return esc_url_raw( $value );
}

function domca_sanitize_product_price( $value ): string {
	$value = is_string( $value ) ? $value : (string) $value;

	$value = wp_strip_all_tags( $value, true );

	$value = preg_replace( '/\s+/u', ' ', $value );

	return trim( (string) $value );
}

function domca_sanitize_product_description( $value ): string {
	$value = is_string( $value ) ? $value : '';
	$value = wp_strip_all_tags( $value );
	return trim( $value );
}

function domca_sanitize_product_length( $value ): string {
	$value = is_string( $value ) ? $value : (string) $value;
	$value = wp_strip_all_tags( $value, true );
	$value = preg_replace( '/\s+/u', ' ', $value );
	return trim( $value );
}

function domca_product_meta_auth_callback( $allowed, $meta_key, $post_id, $user_id, $cap, $caps ) {
	unset( $allowed, $meta_key, $user_id, $cap, $caps );
	return current_user_can( 'edit_post', $post_id );
}

/**
 * Metaboxes.
 */
add_action( 'add_meta_boxes', 'domca_add_product_meta_boxes' );
function domca_add_product_meta_boxes(): void {
	add_meta_box(
		'domca_product_details',
		__( 'Product Details', 'domca' ),
		'domca_render_product_details_metabox',
		'product',
		'normal',
		'default'
	);

	add_meta_box(
		'domca_product_description_box',
		__( 'Product Description', 'domca' ),
		'domca_render_product_description_metabox',
		'product',
		'normal',
		'default'
	);
}

/**
 * Render Details metabox (link, price).
 *
 * @param WP_Post $post
 */
function domca_render_product_details_metabox( $post ): void {
	wp_nonce_field( 'domca_product_meta', 'domca_product_meta_nonce' );

	$link   = get_post_meta( $post->ID, 'domca_product_link', true );
	$price  = get_post_meta( $post->ID, 'domca_product_price', true );
	$length = get_post_meta( $post->ID, 'domca_product_length', true );
	?>
	<p>
		<label for="domca_product_link"><strong><?php echo esc_html__( 'Link (URL):', 'domca' ); ?></strong></label><br />
		<input type="url" style="width:100%" id="domca_product_link" name="domca_product_link" value="<?php echo esc_attr( (string) $link ); ?>" placeholder="<?php echo esc_attr__( 'https://example.com/product', 'domca' ); ?>" />
	</p>
	<p>
		<label for="domca_product_length"><strong><?php echo esc_html__( 'Length:', 'domca' ); ?></strong></label><br />
		<input type="text" style="width:100%" id="domca_product_length" name="domca_product_length" value="<?php echo esc_attr( (string) $length ); ?>" placeholder="<?php echo esc_attr__( 'e.g. 10 days', 'domca' ); ?>" />
	</p>

	<p>
		<label for="domca_product_price"><strong><?php echo esc_html__( 'Price:', 'domca' ); ?></strong></label><br />
		<input type="text" style="width:100%" id="domca_product_price" name="domca_product_price" value="<?php echo esc_attr( (string) $price ); ?>" placeholder="<?php echo esc_attr__( 'e.g. €9.60 / $10.50', 'domca' ); ?>" />
		<small><?php echo esc_html__( 'Any plain text is allowed (stored as-is without numeric validation).', 'domca' ); ?></small>

	</p>
	<?php
}

/**
 * Render Description metabox (textarea).
 *
 * @param WP_Post $post
 */
function domca_render_product_description_metabox( $post ): void {
	wp_nonce_field( 'domca_product_description', 'domca_product_description_nonce' );

	$desc = get_post_meta( $post->ID, 'domca_product_description', true );
	?>
	<p>
		<label for="domca_product_description"><strong><?php echo esc_html__( 'Description:', 'domca' ); ?></strong></label><br />
		<textarea id="domca_product_description" name="domca_product_description" rows="8" style="width:100%" placeholder="<?php echo esc_attr__( 'Enter product description…', 'domca' ); ?>"><?php echo esc_textarea( (string) $desc ); ?></textarea>
	</p>
	<small><?php echo esc_html__( 'Plain text is stored; line breaks are preserved.', 'domca' ); ?></small>
	<?php
}

/**
 * Save Product meta (link, price, description).
 */
add_action( 'save_post_product', 'domca_save_product_meta' );
function domca_save_product_meta( int $post_id ): void {
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return;
	}
	if ( ! current_user_can( 'edit_post', $post_id ) ) {
		return;
	}

	if (
		isset( $_POST['domca_product_meta_nonce'] ) &&
		wp_verify_nonce( (string) $_POST['domca_product_meta_nonce'], 'domca_product_meta' )
	) {
		if ( isset( $_POST['domca_product_link'] ) ) {
			$sanitized = domca_sanitize_product_link( wp_unslash( (string) $_POST['domca_product_link'] ) );
			if ( $sanitized ) {
				update_post_meta( $post_id, 'domca_product_link', $sanitized );
			} else {
				delete_post_meta( $post_id, 'domca_product_link' );
			}
		}

		if ( isset( $_POST['domca_product_price'] ) ) {
			$raw       = (string) wp_unslash( $_POST['domca_product_price'] );
			$sanitized = domca_sanitize_product_price( $raw );

			if ( $sanitized !== '' ) {
				update_post_meta( $post_id, 'domca_product_price', $sanitized );
			} else {
				delete_post_meta( $post_id, 'domca_product_price' );
			}
		}

		if ( isset( $_POST['domca_product_length'] ) ) {
			$raw       = (string) wp_unslash( $_POST['domca_product_length'] );
			$sanitized = domca_sanitize_product_length( $raw );

			if ( $sanitized !== '' ) {
				update_post_meta( $post_id, 'domca_product_length', $sanitized );
			} else {
				delete_post_meta( $post_id, 'domca_product_length' );
			}
		}
	}

	if (
		isset( $_POST['domca_product_description_nonce'] ) &&
		wp_verify_nonce( (string) $_POST['domca_product_description_nonce'], 'domca_product_description' )
	) {
		if ( isset( $_POST['domca_product_description'] ) ) {
			$sanitized = domca_sanitize_product_description( wp_unslash( (string) $_POST['domca_product_description'] ) );
			if ( $sanitized !== '' ) {
				update_post_meta( $post_id, 'domca_product_description', $sanitized );
			} else {
				delete_post_meta( $post_id, 'domca_product_description' );
			}
		}
	}
}
