<?php
/**
 * Theme functions.
 *
 * @package spectrifyai-theme
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Set up theme defaults and support options.
 */
function spectrifyai_theme_setup(): void {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support(
        'html5',
        array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
            'style',
            'script',
        )
    );
    add_theme_support(
        'custom-logo',
        array(
            'height'      => 80,
            'width'       => 240,
            'flex-height' => true,
            'flex-width'  => true,
        )
    );

    register_nav_menus(
        array(
            'primary' => __( 'Primary Menu', 'spectrifyai-theme' ),
            'footer'  => __( 'Footer Menu', 'spectrifyai-theme' ),
        )
    );
}
add_action( 'after_setup_theme', 'spectrifyai_theme_setup' );

/**
 * Register widget areas.
 */
function spectrifyai_register_sidebars(): void {
    register_sidebar(
        array(
            'name'          => __( 'Sidebar', 'spectrifyai-theme' ),
            'id'            => 'sidebar-1',
            'description'   => __( 'Main sidebar area.', 'spectrifyai-theme' ),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        )
    );

    register_sidebar(
        array(
            'name'          => __( 'Footer Widget Area', 'spectrifyai-theme' ),
            'id'            => 'footer-1',
            'description'   => __( 'Widgets displayed in the footer.', 'spectrifyai-theme' ),
            'before_widget' => '<section id="%1$s" class="footer-widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h3 class="footer-widget-title">',
            'after_title'   => '</h3>',
        )
    );
}
add_action( 'widgets_init', 'spectrifyai_register_sidebars' );

/**
 * Enqueue theme assets.
 */
function spectrifyai_enqueue_assets(): void {
    wp_enqueue_style(
        'spectrifyai-google-fonts',
        'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Playfair+Display:wght@600;700&display=swap',
        array(),
        null
    );

    wp_enqueue_style(
        'spectrifyai-style',
        get_stylesheet_uri(),
        array( 'spectrifyai-google-fonts' ),
        wp_get_theme()->get( 'Version' )
    );

    wp_enqueue_style(
        'spectrifyai-main',
        get_template_directory_uri() . '/assets/css/main.css',
        array( 'spectrifyai-style' ),
        wp_get_theme()->get( 'Version' )
    );

    wp_enqueue_script(
        'spectrifyai-main',
        get_template_directory_uri() . '/assets/js/main.js',
        array(),
        wp_get_theme()->get( 'Version' ),
        true
    );
}
add_action( 'wp_enqueue_scripts', 'spectrifyai_enqueue_assets' );

/**
 * Redirect /product to /solutions for any old links.
 */
function spectrifyai_redirect_product(): void {
    global $wp;
    if ( rtrim( $wp->request, '/' ) === 'product' ) {
        wp_redirect( home_url( '/solutions/' ), 301 );
        exit;
    }
}
add_action( 'template_redirect', 'spectrifyai_redirect_product' );

/**
 * Trim blog excerpt to 30 words.
 */
function spectrifyai_excerpt_length(): int {
    return 30;
}
add_filter( 'excerpt_length', 'spectrifyai_excerpt_length', 999 );

/**
 * Strip the default […] from excerpts.
 */
function spectrifyai_excerpt_more(): string {
    return '&hellip;';
}
add_filter( 'excerpt_more', 'spectrifyai_excerpt_more' );
