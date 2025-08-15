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
					<?php domca_render_logo(); ?>
				</figure>
			</a>

			<?php
			if ( has_nav_menu( 'footer-menu' ) ) {
				wp_nav_menu(
					array(
						'theme_location'  => 'footer-menu',
						'menu_id'         => 'dm-footer-menu',
						'menu_class'      => 'dm-nav-menu-footer flex items-center',
						'container'       => 'nav',
						'container_class' => 'dm-footer-menu-container',
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
							'theme_location'  => 'info-menu',
							'menu_id'         => 'dm-info-menu',
							'menu_class'      => 'dm-nav-menu-info flex items-center',
							'container'       => 'nav',
							'container_class' => 'dm-footer-menu-info-container',
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
				&copy;&nbsp;<?php echo esc_html( gmdate( 'Y' ) ); ?>
				&nbsp;<?php echo esc_html__( 'Domča. All Rights Reserved.', 'dm' ); ?>
			</div>
		</div>
	</div>
</footer>

<div class="dm-scroll-top-btn">
	<svg viewBox="0 0 34 34" fill="none">
		<path d="M16.5589 12.7048C15.5612 13.0443 16.4895 15.0253 15.469 15.6346C14.4485 16.2439 13.5548 15.5943 12.7952 16.7012C12.0355 17.808 10.574 18.214 10.4755 18.9466C10.3771 19.6792 9.37449 18.7643 8.99736 19.5673C8.62022 20.3703 8.13746 20.6027 7.30978 20.8072C6.48207 21.0116 4.63056 22.331 4.43687 23.2903C4.24317 24.2497 2.92137 24.243 2.36838 24.4809C2.19613 24.555 2.03204 24.5848 1.88786 24.5892C1.82675 24.5911 1.75023 24.5437 1.68904 24.4825C1.689 24.4825 1.68896 24.4824 1.68892 24.4824C1.61276 24.4062 1.56041 24.3087 1.59125 24.2587C1.74094 24.0155 1.91122 23.5987 1.98176 22.9757C2.11326 21.8141 2.7531 22.3126 3.36154 21.1748C3.96997 20.037 3.96539 18.9833 5.33488 18.2982C6.70432 17.613 5.50844 15.9452 7.77005 15.3065C10.0316 14.6678 8.68673 13.0177 9.9327 11.3735C11.1787 9.7293 13.8291 8.73137 14.6317 7.79174C14.6831 7.73153 14.7353 7.66967 14.7884 7.60633L17.2491 5.83683L18.5484 7.56797C19.4892 8.32419 20.7484 9.25667 21.7464 10.5774C22.8127 11.9884 24.8566 12.9726 25.9019 14.6673C26.9473 16.3621 28.4772 18.7039 29.0933 19.8804C29.7093 21.0568 29.8648 21.338 30.9177 21.9912C31.5229 22.3668 32.1184 23.1322 32.3256 24.0868C32.4299 24.5672 32.0987 24.7788 31.6759 24.6262C31.0577 24.4032 30.8257 23.933 30.2719 24.0632C29.1652 24.3233 28.7222 24.4053 28.5438 23.4643C28.3653 22.5232 27.2261 23.1789 26.9985 22.759C26.7709 22.3391 27.2918 21.8074 25.2259 20.619C23.1599 19.4307 22.1438 18.658 21.4165 18.1507C20.6892 17.6433 19.8169 15.9105 18.6255 15.09C17.5076 14.32 15.7253 12.3669 14.594 11.6871L18.8259 11.6439C18.7798 11.7173 18.7391 11.788 18.7048 11.8556C18.1474 12.9528 17.5566 12.3654 16.5589 12.7048Z" fill="#967376"/>
	</svg>
</div>

</div>

<?php wp_footer(); ?>

</body>
</html>
