<?php
/**
 * Template file for single.php
 *
 * This file is part of the domca theme.
 *
 * @package domca
 */

declare(strict_types=1);

get_header();
?>

	<main class="site-main">
		<?php
		while ( have_posts() ) :
			the_content();
		endwhile;
		?>
	</main>

<?php
get_footer();
