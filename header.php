<?php
/**
 * The header template for the theme
 *
 * This file contains the HTML head section, opening body tag, and top-level site markup
 * such as the site header and navigation. It is included in all front-end pages via get_header().
 *
 * @package domca
 */

declare( strict_types=1 );

$domca_body_class = 'bg-cream text-charcoal';
?>

<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>
<body <?php body_class( $domca_body_class ); ?>>
<?php wp_body_open(); ?>
<div class="flex flex-col justify-between dm-page-wrap">
	<header
			id="dm-header"
			class="dm-wrap md:pt-7.5 pt-5 pb-4 transition-all duration-300 fixed left-0 top-0 z-50 w-full lg:h-auto h-full lg:max-h-none max-h-18 lg:overflow-visible overflow-hidden"
			role="banner"
			itemscope
			itemtype="https://schema.org/WPHeader"
	>
		<div class="dm-container w-full lg:flex grid grid-cols-2 gap-y-5 items-center justify-between">
			<a
					href="<?php echo esc_attr( get_home_url() ); ?>"
					class="dm-header__logo"
					title="<?php echo esc_html( get_bloginfo( 'name' ) ); ?>"
					aria-label="<?php echo esc_attr__( 'Go to homepage', 'dm' ); ?>"
					itemprop="url"
			>
				<figure itemscope itemtype="https://schema.org/ImageObject">
					<?php get_template_part( '/vector-images/logo' ); ?>
				</figure>
			</a>

			<button class="mob-burger-btn"
					type="button"
					aria-expanded="false"
					aria-controls="mobile-menu"
					title="<?php echo esc_attr__( 'Show/hide mobile menu', 'dm' ); ?>">
				<span class="dm-visually-hidden"><?php echo esc_html__( 'Menu', 'dm' ); ?></span>
				<span class="mob-burger-btn-top"></span>
				<span class="mob-burger-btn-center"></span>
				<span class="mob-burger-btn-bottom"></span>
			</button>

			<div class="lg:flex grid lg:items-center lg:justify-end xl:gap-10 lg:gap-5 gap-10 col-span-full">
				<?php
				if ( has_nav_menu( 'header-menu' ) ) {
					wp_nav_menu(
						array(
							'theme_location'  => 'header-menu',
							'menu_id'         => 'dm-header-menu',
							'menu_class'      => 'dm-nav-menu flex items-center',
							'container'       => 'nav',
							'container_class' => 'dm-header-menu-container',
						)
					);
				}
				?>

				<?php get_template_part( '/template-parts/language-switcher' ); ?>
			</div>
		</div>
	</header>
