<?php
/**
 * Registers and initializes a custom Gutenberg block.
 *
 * This function sets up the custom Gutenberg block by registering
 * its scripts, styles, and other necessary assets for proper rendering
 * and functionality within the WordPress block editor.
 *
 * @package domca
 */

/**
 * Initializes the custom Gutenberg block for domca.
 *
 * Registers and enqueues all necessary assets and configurations
 * required for the custom Gutenberg block functionality.
 *
 * @return void
 */
function domca_custom_gutenberg_block_init(): void {
	register_block_type( __DIR__ . '/build/test-block' );
	register_block_type( __DIR__ . '/build/hero-section' );
	register_block_type( __DIR__ . '/build/home-transformation-journey' );
	register_block_type( __DIR__ . '/build/home-testimonial-lead-magnet' );
	register_block_type( __DIR__ . '/build/home-comparison-block' );
	register_block_type( __DIR__ . '/build/home-cta-features' );
	register_block_type( __DIR__ . '/build/testimonial-gallery' );
	register_block_type( __DIR__ . '/build/reviews-slider' );
	register_block_type( __DIR__ . '/build/transformation-story' );
	register_block_type( __DIR__ . '/build/faq-about-section' );
	register_block_type( __DIR__ . '/build/reset-programs-section' );
	register_block_type( __DIR__ . '/build/three-cards-section' );
	register_block_type( __DIR__ . '/build/countdown-to-change' );
	register_block_type( __DIR__ . '/build/seasonal-resets-section' );
	register_block_type( __DIR__ . '/build/anti-detox-statement' );
	register_block_type( __DIR__ . '/build/two-phases-system' );
	register_block_type( __DIR__ . '/build/package-contents' );
	register_block_type( __DIR__ . '/build/community-support' );
	register_block_type( __DIR__ . '/build/new-year-reset' );
	register_block_type( __DIR__ . '/build/choose-path-pricing' );
	register_block_type( __DIR__ . '/build/why-timing-matters' );
	register_block_type( __DIR__ . '/build/dont-have-to-be-ready' );
	register_block_type( __DIR__ . '/build/is-this-for-you' );
	register_block_type( __DIR__ . '/build/where-i-started' );
	register_block_type( __DIR__ . '/build/professional-background' );
	register_block_type( __DIR__ . '/build/whats-pulled-me-forward' );
	register_block_type( __DIR__ . '/build/personal-story' );
	register_block_type( __DIR__ . '/build/personal-journey' );
	register_block_type( __DIR__ . '/build/program-intro' );
	register_block_type( __DIR__ . '/build/what-i-do-today' );
	register_block_type( __DIR__ . '/build/personal-facts' );
	register_block_type( __DIR__ . '/build/join-us' );
}

add_action( 'init', 'domca_custom_gutenberg_block_init' );

// phpcs:ignore Squiz.PHP.CommentedOutCode.Found
// function domca_enqueue_regenerator_runtime()
// {
// wp_enqueue_script(
// 'regenerator-runtime',
// 'https://cdnjs.cloudflare.com/ajax/libs/regenerator-runtime/0.13.7/regenerator-runtime.min.js',
// array('wp-polyfill'),
// '0.13.7',
// true
// );
// }

// phpcs:ignore Squiz.PHP.CommentedOutCode.Found
// add_action('wp_enqueue_scripts', 'domca_enqueue_regenerator_runtime');
