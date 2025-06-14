<?php
/**
 * Template file for search.php
 *
 * This file is part of the domca theme.
 *
 * @package domca
 */

declare(strict_types=1);

get_header();
?>

<main class="site-main">
	<header class="">
		<form class="">
			<button class="" type="submit"></button>
			<?php get_search_form(); ?>
		</form>
	</header>
	<?php
	if ( have_posts() ) :
		while ( have_posts() ) :
			get_template_part( '/template-parts/post', 'card' );
			endwhile;
		endif;
	?>
</main>

<?php
get_footer();
