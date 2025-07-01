<?php
/**
 * The footer template for the domca theme
 *
 * This file contains the closing body and HTML tags, along with footer content
 * such as widgets, copyright info, and scripts. It is included via get_footer().
 *
 * @package domca
 */

declare( strict_types=1 );
?>
<footer id="dm-footer" class="dm-footer dm-wrap md:pt-17.5 pt-10 md:pb-12.5 pb-8 bg-mauve text-white">
	<div class="dm-container grid gap-7.5">
		<div class="w-full md:flex lg:items-center justify-between">
			<a
					href="<?php echo esc_attr( get_home_url() ); ?>"
					class="dm-footer__logo"
					title="<?php echo esc_html( get_bloginfo( 'name' ) ); ?>"
					aria-label="<?php echo esc_attr__( 'Go to homepage', 'dm' ); ?>"
					itemprop="url"
			>
				<figure itemscope itemtype="https://schema.org/ImageObject">
					<?php get_template_part( '/vector-images/logo' ); ?>
				</figure>
			</a>

			<?php
			if ( has_nav_menu( 'footer-menu' ) ) {
				wp_nav_menu(
					array(
						'theme_location' => 'footer-menu',
						'menu_id'        => 'dm-footer-menu',
						'menu_class'     => 'dm-nav-menu-footer flex items-center',
						'container'      => 'nav',
					)
				);
			}
			?>
		</div>

		<?php get_template_part( '/vector-images/footer-separator' ); ?>

		<div class="w-full md:flex items-center justify-between">
			<div class="flex md:flex-row flex-col items-center gap-7.5 md:order-2">
				<?php
				if ( has_nav_menu( 'info-menu' ) ) {
					wp_nav_menu(
						array(
							'theme_location' => 'info-menu',
							'menu_id'        => 'dm-info-menu',
							'menu_class'     => 'dm-nav-menu-info flex items-center',
							'container'      => 'nav',
						)
					);
				}
				?>

				<?php
				$domca_footer_socials = array(
					array(
						'href' => '#',
						'icon' => 'icon-email',
						'type' => 'email',
					),
					array(
						'href' => '#',
						'icon' => 'icon-fb',
						'type' => 'social',
					),
					array(
						'href' => '#',
						'icon' => 'icon-ig',
						'type' => 'social',
					),
				)
				?>
				<div class="flex items-center md:justify-start justify-center gap-3 md:order-2 order-1">
					<?php if ( ! empty( $domca_footer_socials ) ) : ?>
						<?php foreach ( $domca_footer_socials as $domca_footer_social ) : ?>
							<a
									href="<?php echo esc_url( $domca_footer_social['href'] ); ?>"
									target="_blank"
									rel="noopener noreferrer"
									aria-label="<?php echo esc_attr( $domca_footer_social['type'] ); ?>"
									class="group"
							>
								<?php get_template_part( '/vector-images/' . $domca_footer_social['icon'] ); ?>
							</a>
						<?php endforeach; ?>
					<?php endif; ?>
				</div>
			</div>

			<div class="uppercase text-[10px] leading-[1.2] md:order-1 md:mt-0 mt-10 md:text-left text-center">
				&copy;&nbsp;<?php echo esc_html( date( 'Y' ) ); ?>
				&nbsp;<?php echo esc_html__( 'Domča. All Rights Reserved.', 'dm' ); ?>
			</div>
		</div>
	</div>
</footer>

</div>

<?php wp_footer(); ?>

</body>
</html>
