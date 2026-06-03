<?php
/**
 * Footer template.
 *
 * @package spectrifyai-theme
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}
?>
</main>
<footer class="site-footer">
    <div class="container site-footer__grid">
        <div>
            <h2 class="site-footer__title"><?php bloginfo( 'name' ); ?></h2>
            <!-- PLACEHOLDER -->
            <p><?php esc_html_e( 'Precision tea quality intelligence powered by spectral sensing and AI.', 'spectrifyai-theme' ); ?></p>
        </div>

        <div>
            <h3><?php esc_html_e( 'Navigation', 'spectrifyai-theme' ); ?></h3>
            <?php
            wp_nav_menu(
                array(
                    'theme_location' => 'footer',
                    'container'      => false,
                    'menu_class'     => 'footer-menu',
                    'fallback_cb'    => false,
                )
            );
            ?>
        </div>

        <div>
            <h3><?php esc_html_e( 'Connect', 'spectrifyai-theme' ); ?></h3>
            <?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
                <?php dynamic_sidebar( 'footer-1' ); ?>
            <?php else : ?>
                <!-- PLACEHOLDER -->
                <p><?php esc_html_e( 'Add contact details or social links in Footer Widget Area.', 'spectrifyai-theme' ); ?></p>
            <?php endif; ?>
        </div>
    </div>
    <div class="site-footer__bottom">
        <p>&copy; <?php echo esc_html( gmdate( 'Y' ) ); ?> <?php bloginfo( 'name' ); ?>. <?php esc_html_e( 'All rights reserved.', 'spectrifyai-theme' ); ?></p>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
