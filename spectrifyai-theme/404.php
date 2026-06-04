<?php
/**
 * 404 template.
 *
 * @package spectrifyai-theme
 */

get_header();
?>
<section class="section">
    <div class="container">
        <h1><?php esc_html_e( 'Page not found', 'spectrifyai-theme' ); ?></h1>
        <p><?php esc_html_e( 'The resource you requested could not be located. Return to the homepage to continue.', 'spectrifyai-theme' ); ?></p>
        <a class="button" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Back to Home', 'spectrifyai-theme' ); ?></a>
    </div>
</section>
<?php
get_footer();
