<?php
/**
 *
 * @package domca
 */

$domca_simple_shop_block_id    = isset( $attributes['blockId'] ) ? (string) $attributes['blockId'] : '';

$domca_simple_shop_wrapper_attributes = get_block_wrapper_attributes(
	array(
		'class' => 'dm-wrap',
        'id'                => ! empty( $domca_simple_shop_block_id ) ? esc_attr( $domca_simple_shop_block_id ) : null,
	)
);

$domca_simple_shop_base_class = 'wp-block-domca-simple-shop';

$domca_simple_shop_lang = domca_get_current_lang();
?>

<section
	<?php
	// phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
	echo $domca_simple_shop_wrapper_attributes;
	?>
>
    <div class="<?php echo esc_attr( $domca_simple_shop_base_class . '__wrap dm-container' ); ?>">
        <?php if ($domca_simple_shop_lang === 'en') : ?>
        <!-- www.SimpleShop.cz form#128617 start -->
        <div data-SimpleShopForm="b5lOa"><div>The sales form is created in the <a href="https://www.simpleshop.cz/?utm_source=simpleshop&utm_medium=form&utm_campaign=72861" target="_blank">SimpleShop.cz</a> system.</div></div>
        <script>
            (function(i, s, o, g, r, a, m){
                i[r] = i[r] || function(){
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
                a = s.createElement(o),
                    m = s.getElementsByTagName(o)[0];
                a.async = 1;
                a.src = g;
                m.parentNode.insertBefore(a, m)
            })(window, document, "script", "https://form.simpleshop.cz/prj/js/SimpleShopService.js", "sss");
            sss("createForm", "b5lOa");
        </script>
        <!-- www.SimpleShop.cz form#128617 end -->
        <?php elseif ($domca_simple_shop_lang === 'cs') : ?>
            <!-- www.SimpleShop.cz form#128499 start -->
            <div data-SimpleShopForm="KbB7p"><div>Prodejní formulář je vytvořen v systému <a href="https://www.simpleshop.cz/?utm_source=simpleshop&utm_medium=form&utm_campaign=72861" target="_blank">SimpleShop.cz</a>.</div></div>
            <script>
                (function(i, s, o, g, r, a, m){
                    i[r] = i[r] || function(){
                        (i[r].q = i[r].q || []).push(arguments)
                    }, i[r].l = 1 * new Date();
                    a = s.createElement(o),
                        m = s.getElementsByTagName(o)[0];
                    a.async = 1;
                    a.src = g;
                    m.parentNode.insertBefore(a, m)
                })(window, document, "script", "https://form.simpleshop.cz/prj/js/SimpleShopService.js", "sss");
                sss("createForm", "KbB7p");
            </script>
            <!-- www.SimpleShop.cz form#128499 end -->
        <?php elseif ($domca_simple_shop_lang === 'sk') : ?>
            <!-- www.SimpleShop.cz form#128609 start -->
            <div data-SimpleShopForm="zQGLx"><div>Predajný formulár je vytvorený v systéme <a href="https://www.simpleshop.cz/?utm_source=simpleshop&utm_medium=form&utm_campaign=72861" target="_blank">SimpleShop.cz</a>.</div></div>
            <script>
                (function(i, s, o, g, r, a, m){
                    i[r] = i[r] || function(){
                        (i[r].q = i[r].q || []).push(arguments)
                    }, i[r].l = 1 * new Date();
                    a = s.createElement(o),
                        m = s.getElementsByTagName(o)[0];
                    a.async = 1;
                    a.src = g;
                    m.parentNode.insertBefore(a, m)
                })(window, document, "script", "https://form.simpleshop.cz/prj/js/SimpleShopService.js", "sss");
                sss("createForm", "zQGLx");
            </script>
            <!-- www.SimpleShop.cz form#128609 end -->
        <?php endif; ?>
    </div>
</section>
