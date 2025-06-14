<?php
/**
 * Template file for page.php
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
			the_post();
			the_content();
		endwhile;
		?>
	</main>

<?php
get_footer();
