<?php
/**
 * An array that stores a list of languages.
 *
 * This variable is used to hold a collection of language names,
 * which can be utilized for functionalities such as language selection,
 * displaying supported languages, or performing language-specific
 * operations.
 *
 * @package domca
 */

// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedHooknameFound
$domca_languages = apply_filters( 'wpml_active_languages', null, array( 'skip_missing' => 0 ) );

$domca_languages_base_class = 'dm-languages';

if ( ! empty( $domca_languages ) ) :
	?>
	<div
			class="<?php echo esc_attr( $domca_languages_base_class ); ?>"
			aria-label="<?php echo esc_attr__( 'Language switcher', 'dm' ); ?>"
	>
		<div class="<?php echo esc_attr( $domca_languages_base_class . '-active' ); ?>">
			<?php foreach ( $domca_languages as $domca_lang ) : ?>
				<?php
				if ( $domca_lang['active'] ) {
					if ( ! empty( $domca_lang['country_flag_url'] ) ) {
						$display_code = domca_get_display_language_code( $domca_lang['language_code'] );
						echo '<span class="wpml-lang-code" lang="' . esc_attr( $domca_lang['language_code'] ) . '">' . esc_html( strtoupper( $display_code ) ) . '</span>';
						echo '<img src="' . esc_url( $domca_lang['country_flag_url'] ) . '" width="18" height="12" loading="lazy" alt="' . esc_attr( $domca_lang['translated_name'] ) . '" class="wpml-flag">';
					}
				}
			endforeach;
			?>
		</div>
		<div class="<?php echo esc_attr( $domca_languages_base_class . '-list-wrap' ); ?>">
			<ul class="<?php echo esc_attr( $domca_languages_base_class . '-list' ); ?>">
				<?php
				foreach ( $domca_languages as $domca_lang ) :
					if ( ! $domca_lang['active'] ) :
						if ( ! empty( $domca_lang['country_flag_url'] ) ) :
							$display_code = domca_get_display_language_code( $domca_lang['language_code'] );
							?>
							<li>
								<a
										href="<?php echo esc_url( $domca_lang['url'] ); ?>"
										title="<?php echo esc_attr( $domca_lang['translated_name'] ); ?>"
										lang="<?php echo esc_attr( $domca_lang['language_code'] ); ?>"
								>
									<span><?php echo esc_html( strtoupper( $display_code ) ); ?></span>
									<img
											src="<?php echo esc_url( $domca_lang['country_flag_url'] ); ?>"
											alt="<?php echo esc_attr( $domca_lang['translated_name'] ); ?>"
											loading="lazy"
											width="18"
											height="12"
											class="wpml-flag"
									>
								</a>
							</li>
							<?php
						endif;
					endif;
				endforeach;
				?>
			</ul>
		</div>
	</div>
<?php endif; ?>
