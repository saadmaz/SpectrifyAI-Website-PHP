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

    add_theme_support( 'customize-selective-refresh-widgets' );
}
add_action( 'after_setup_theme', 'spectrifyai_theme_setup' );

/**
 * Fallback nav: list all published pages when no primary menu is assigned.
 */
function spectrifyai_nav_fallback(): void {
    $pages = get_pages( array( 'sort_column' => 'menu_order', 'number' => 10 ) );
    if ( ! $pages ) {
        return;
    }
    echo '<ul class="primary-menu">';
    foreach ( $pages as $page ) {
        $current = is_page( $page->ID ) ? ' aria-current="page"' : '';
        echo '<li><a href="' . esc_url( get_permalink( $page ) ) . '"' . $current . '>' . esc_html( $page->post_title ) . '</a></li>';
    }
    echo '</ul>';
}

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

/**
 * Preconnect to Google Fonts origin for faster font loading.
 */
function spectrifyai_preconnect(): void {
    echo '<link rel="preconnect" href="https://fonts.googleapis.com">' . "\n";
    echo '<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>' . "\n";
}
add_action( 'wp_head', 'spectrifyai_preconnect', 1 );

/**
 * Output meta description, canonical URL, Open Graph, and Twitter Card tags.
 * Skipped automatically when Yoast SEO or Rank Math is active.
 */
function spectrifyai_seo_meta(): void {
    if ( defined( 'WPSEO_VERSION' ) || defined( 'RANK_MATH_VERSION' ) || defined( 'AIOSEOP_VERSION' ) ) {
        return;
    }

    global $post;

    $site_name = get_bloginfo( 'name' );

    if ( is_front_page() ) {
        $title     = $site_name . ' — AI-Powered Tea Quality Intelligence';
        $desc      = 'TRI-certified NIR spectrometry and AI grading for Ceylon tea. Instant moisture, polyphenol, and leaf quality results. Trusted by 100+ exporters across Sri Lanka.';
        $canonical = home_url( '/' );
        $og_type   = 'website';
    } elseif ( is_singular() && $post ) {
        $title     = get_the_title( $post ) . ' — ' . $site_name;
        $desc      = has_excerpt( $post ) ? wp_strip_all_tags( get_the_excerpt( $post ) ) : get_bloginfo( 'description' );
        $canonical = get_permalink( $post );
        $og_type   = 'article';
    } elseif ( is_archive() ) {
        $title     = 'Blog — ' . $site_name;
        $desc      = 'Insights on tea quality, NIR spectrometry, and the Ceylon tea industry from the SpectrifyAI team.';
        $canonical = get_pagenum_link( get_query_var( 'paged' ) );
        $og_type   = 'website';
    } else {
        $title     = $site_name;
        $desc      = get_bloginfo( 'description' );
        $canonical = false;
        $og_type   = 'website';
    }

    $title = wp_strip_all_tags( $title );
    $desc  = wp_strip_all_tags( $desc );

    if ( $canonical ) {
        echo '<link rel="canonical" href="' . esc_url( $canonical ) . '">' . "\n";
    }
    echo '<meta name="description" content="' . esc_attr( $desc ) . '">' . "\n";
    echo '<meta property="og:type" content="' . esc_attr( $og_type ) . '">' . "\n";
    echo '<meta property="og:site_name" content="' . esc_attr( $site_name ) . '">' . "\n";
    echo '<meta property="og:title" content="' . esc_attr( $title ) . '">' . "\n";
    echo '<meta property="og:description" content="' . esc_attr( $desc ) . '">' . "\n";
    if ( $canonical ) {
        echo '<meta property="og:url" content="' . esc_url( $canonical ) . '">' . "\n";
    }
    echo '<meta name="twitter:card" content="summary">' . "\n";
    echo '<meta name="twitter:title" content="' . esc_attr( $title ) . '">' . "\n";
    echo '<meta name="twitter:description" content="' . esc_attr( $desc ) . '">' . "\n";
}
add_action( 'wp_head', 'spectrifyai_seo_meta', 5 );

/**
 * Output Organization JSON-LD schema on every page.
 * Output Product JSON-LD schema on the Solutions page.
 */
function spectrifyai_schema_markup(): void {
    $org = array(
        '@context'     => 'https://schema.org',
        '@type'        => 'Organization',
        'name'         => 'SpectrifyAI',
        'url'          => home_url( '/' ),
        'email'        => 'info@spectrifyai.com',
        'telephone'    => '+94-77-793-0353',
        'address'      => array(
            '@type'           => 'PostalAddress',
            'addressLocality' => 'Colombo',
            'addressCountry'  => 'LK',
        ),
        'areaServed'   => 'LK',
        'knowsAbout'   => array( 'NIR Spectrometry', 'Tea Quality Assessment', 'AI Grading', 'AgriTech' ),
    );
    echo '<script type="application/ld+json">' . wp_json_encode( $org, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE ) . '</script>' . "\n";

    if ( is_page( 'solutions' ) ) {
        $product = array(
            '@context'    => 'https://schema.org',
            '@type'       => 'Product',
            'name'        => 'SpectrifyAI NIR Spectrometer',
            'description' => 'TRI-certified portable NIR spectrometer for Ceylon tea quality assessment. Measures moisture content, total polyphenol, and AI-based leaf quality grading in seconds.',
            'brand'       => array(
                '@type' => 'Brand',
                'name'  => 'SpectrifyAI',
            ),
            'offers'      => array(
                '@type'         => 'Offer',
                'priceCurrency' => 'LKR',
                'price'         => '15',
                'seller'        => array(
                    '@type' => 'Organization',
                    'name'  => 'SpectrifyAI',
                ),
            ),
        );
        echo '<script type="application/ld+json">' . wp_json_encode( $product, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE ) . '</script>' . "\n";
    }
}
add_action( 'wp_head', 'spectrifyai_schema_markup', 10 );
