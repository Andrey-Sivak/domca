<?php
/**
 * Template Name: Safe Circle Club
 *
 * @package domca
 */

get_header();
?>

<div class="relative z-20 dm-safe-circle-club-page">
	<?php the_content(); ?>
</div>

<style>
	.dm-safe-circle-club-page {
		background-image: url('<?php echo get_template_directory_uri() . '/images/bg-logo-pattern.svg'; ?>');
		background-position: top center;
		background-repeat: repeat;
		background-size: 100% auto;
	}
</style>

<?php get_footer(); ?>
