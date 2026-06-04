<?php
/**
 * Header template.
 *
 * @package spectrifyai-theme
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<a class="skip-link" href="#content"><?php esc_html_e( 'Skip to content', 'spectrifyai-theme' ); ?></a>
<header class="site-header">
    <div class="container site-header__inner">
        <div class="site-branding">
            <?php if ( has_custom_logo() ) : ?>
                <?php the_custom_logo(); ?>
            <?php else : ?>
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="site-title"><?php bloginfo( 'name' ); ?></a>
            <?php endif; ?>
        </div>

        <button class="nav-toggle js-nav-toggle" aria-expanded="false" aria-controls="site-navigation">
            <span class="screen-reader-text"><?php esc_html_e( 'Toggle navigation', 'spectrifyai-theme' ); ?></span>
            <svg width="24" height="24" viewBox="0 0 24 24" aria-hidden="true" focusable="false">
                <path d="M4 7h16M4 12h16M4 17h16" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
            </svg>
        </button>

        <nav id="site-navigation" class="site-navigation" aria-label="<?php esc_attr_e( 'Primary Menu', 'spectrifyai-theme' ); ?>">
            <?php
            wp_nav_menu(
                array(
                    'theme_location' => 'primary',
                    'container'      => false,
                    'menu_class'     => 'primary-menu',
                    'fallback_cb'    => false,
                )
            );
            ?>
        </nav>
    </div>
</header>
<main id="content" class="site-main">
