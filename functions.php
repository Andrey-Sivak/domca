<?php
/**
 * Theme functions and definitions
 *
 * This file sets up the theme by registering features, enqueuing assets, and defining
 * utility functions. It is loaded automatically by WordPress on every page load.
 *
 * @package domca
 */

declare(strict_types=1);

/**
 * The domca functions and definitions
 */

define( 'DOMCA_VERSION', '1.0.112' );

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function domca_setup(): void {
	// Make theme available for translation.
	load_theme_textdomain( 'dm', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	// Let WordPress manage the document title.
	add_theme_support( 'title-tag' );

	// Enable support for Post Thumbnails.
	add_theme_support( 'post-thumbnails' );

	// Register navigation menus.
	register_nav_menus(
		array(
			'header-menu' => esc_html__( 'Header Menu', 'dm' ),
			'footer-menu' => esc_html__( 'Footer Menu', 'dm' ),
			'info-menu'   => esc_html__( 'Info Menu', 'dm' ),
		),
	);

	// Switch core markup to HTML5.
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		),
	);

	add_theme_support(
		'editor-color-palette',
		array(
			array(
				'name'  => 'Green',
				'slug'  => 'green',
				'color' => '#1B873B',
			),
			array(
				'name'  => 'Black',
				'slug'  => 'black',
				'color' => '#000000',
			),
			array(
				'name'  => 'Cyan Bluish Gray',
				'slug'  => 'cyan-bluish-gray',
				'color' => '#abb8c3',
			),
			array(
				'name'  => 'White',
				'slug'  => 'white',
				'color' => '#ffffff',
			),
			array(
				'name'  => 'Pale Pink',
				'slug'  => 'pale-pink',
				'color' => '#f78da7',
			),
			array(
				'name'  => 'Vivid Red',
				'slug'  => 'vivid-red',
				'color' => '#cf2e2e',
			),
			array(
				'name'  => 'Luminous Vivid Orange',
				'slug'  => 'luminous-vivid-orange',
				'color' => '#ff6900',
			),
			array(
				'name'  => 'Luminous Vivid Amber',
				'slug'  => 'luminous-vivid-amber',
				'color' => '#fcb900',
			),
			array(
				'name'  => 'Light Green Cyan',
				'slug'  => 'light-green-cyan',
				'color' => '#7bdcb5',
			),
			array(
				'name'  => 'Vivid Green Cyan',
				'slug'  => 'vivid-green-cyan',
				'color' => '#00d084',
			),
			array(
				'name'  => 'Pale Cyan Blue',
				'slug'  => 'pale-cyan-blue',
				'color' => '#8ed1fc',
			),
			array(
				'name'  => 'Vivid Cyan Blue',
				'slug'  => 'vivid-cyan-blue',
				'color' => '#0693e3',
			),
			array(
				'name'  => 'Vivid Purple',
				'slug'  => 'vivid-purple',
				'color' => '#9b51e0',
			),
			array(
				'name'  => 'Dark Black',
				'slug'  => 'dark-black',
				'color' => '#141416',
			),
			array(
				'name'  => 'Mauve',
				'slug'  => 'mauve',
				'color' => '#967376',
			),
			array(
				'name'  => 'Dusty Rose',
				'slug'  => 'dusty-rose',
				'color' => '#CBA2A2',
			),
			array(
				'name'  => 'Charcoal',
				'slug'  => 'charcoal',
				'color' => '#393E41',
			),
			array(
				'name'  => 'Warm Gray',
				'slug'  => 'warm-gray',
				'color' => '#817676',
			),
			array(
				'name'  => 'Blush',
				'slug'  => 'blush',
				'color' => '#FFE7E7',
			),
			array(
				'name'  => 'Cream',
				'slug'  => 'cream',
				'color' => '#FFF6F6',
			),
		)
	);
}
add_action( 'after_setup_theme', 'domca_setup' );

/**
 * Get ajax url
 *
 * @return string
 */
function domca_get_ajax_url(): string {
	return get_template_directory_uri() . '/inc/front-ajax.php';
}

/**
 * Enqueue scripts and styles.
 */
function domca_scripts(): void {
	$ajax_url = domca_get_ajax_url();

	$domca_options = array(
		'ajax_url' => $ajax_url,
		'home_url' => get_home_url(),
	);

	wp_dequeue_style( 'select2' );
	wp_dequeue_script( 'select2' );
	wp_deregister_script( 'select2' );

	wp_dequeue_script( 'jquery' );
	wp_deregister_script( 'jquery' );

	wp_enqueue_style( 'domca-style', get_stylesheet_uri(), array(), DOMCA_VERSION );
	wp_enqueue_style( 'domca-main-style', get_template_directory_uri() . '/dist/css/style.min.css', array(), DOMCA_VERSION );
	wp_enqueue_style( 'fonts-style', get_template_directory_uri() . '/fonts/fonts.css', array(), DOMCA_VERSION );

	$manifest_path = get_template_directory() . '/dist/js/manifest.json';

	if ( file_exists( $manifest_path ) ) {
		// phpcs:ignore WordPress.WP.AlternativeFunctions.file_get_contents_file_get_contents
		$manifest = json_decode( file_get_contents( $manifest_path ), true );

		if ( is_array( $manifest ) && ! empty( $manifest ) ) {
			foreach ( $manifest as $file ) {
				if ( str_contains( $file, '.js' ) ) {
					$chunk_handle = 'app-chunk-' . basename( $file, '.js' );
					$chunk_handle = str_replace( '.chunk', '', $chunk_handle );

					wp_enqueue_script( $chunk_handle, get_template_directory_uri() . $file, array(), DOMCA_VERSION, true );

					if ( str_contains( $file, 'app.min.js' ) ) {
						wp_localize_script( $chunk_handle, 'options', $domca_options );
					}
				}
			}
		}
	}
}
add_action( 'wp_enqueue_scripts', 'domca_scripts' );

add_action(
	'enqueue_block_assets',
	function () {
		wp_enqueue_style( 'domca-admin-style', get_template_directory_uri() . '/dist/css/admin-styles.min.css', array(), DOMCA_VERSION );
		wp_enqueue_style( 'fonts-style', get_template_directory_uri() . '/fonts/fonts.css', array(), DOMCA_VERSION );
	}
);

require get_template_directory() . '/guten/guten.php';

/**
 * Get allowed HTML for SVG output
 *
 * @return array Allowed HTML tags and attributes for SVG
 */
function domca_get_svg_allowed_html() {
	return array(
		'svg'    => array(
			'viewBox'             => true,
			'viewbox'             => true,
			'fill'                => true,
			'class'               => true,
			'preserveAspectRatio' => true,
			'preserveaspectratio' => true,
			'aria-hidden'         => true,
			'width'               => true,
			'height'              => true,
			'xmlns'               => true,
		),
		'circle' => array(
			'cx'           => true,
			'cy'           => true,
			'r'            => true,
			'class'        => true,
			'fill'         => true,
			'stroke'       => true,
			'stroke-width' => true,
		),
		'path'   => array(
			'd'            => true,
			'class'        => true,
			'fill'         => true,
			'stroke'       => true,
			'stroke-width' => true,
		),
	);
}
