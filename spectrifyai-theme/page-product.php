<?php
/**
 * Template Name: Product Page
 *
 * @package spectrifyai-theme
 */

get_header();
?>
<section class="section" data-animate>
    <div class="container">
        <h1><?php esc_html_e( 'Product Platform', 'spectrifyai-theme' ); ?></h1>
        <div class="grid-2">
            <article class="panel">
                <h2><?php esc_html_e( 'Device Specifications', 'spectrifyai-theme' ); ?></h2>
                <!-- PLACEHOLDER -->
                <ul>
                    <li><?php esc_html_e( 'Portable NIR spectrometer with rugged enclosure', 'spectrifyai-theme' ); ?></li>
                    <li><?php esc_html_e( 'Rapid scan cycle for high-throughput grading lines', 'spectrifyai-theme' ); ?></li>
                    <li><?php esc_html_e( 'Edge-ready data transfer to cloud analytics', 'spectrifyai-theme' ); ?></li>
                </ul>
            </article>
            <article class="panel">
                <h2><?php esc_html_e( 'Software & Model Capabilities', 'spectrifyai-theme' ); ?></h2>
                <!-- PLACEHOLDER -->
                <ul>
                    <li><?php esc_html_e( 'Spectral feature extraction with CV-assisted signals', 'spectrifyai-theme' ); ?></li>
                    <li><?php esc_html_e( 'Grade prediction and confidence intervals', 'spectrifyai-theme' ); ?></li>
                    <li><?php esc_html_e( 'Batch-level historical analytics and trend tracking', 'spectrifyai-theme' ); ?></li>
                </ul>
            </article>
        </div>
    </div>
</section>

<section class="section section--alt" data-animate>
    <div class="container grid-2">
        <article>
            <h2><?php esc_html_e( 'Integration Options', 'spectrifyai-theme' ); ?></h2>
            <!-- PLACEHOLDER -->
            <p><?php esc_html_e( 'Deploy as a standalone grading station or connect with existing QA workflows through exportable reports and API-ready pipelines.', 'spectrifyai-theme' ); ?></p>
        </article>
        <article class="panel">
            <h2><?php esc_html_e( 'System Diagram', 'spectrifyai-theme' ); ?></h2>
            <!-- PLACEHOLDER -->
            <p><?php esc_html_e( 'Visual architecture placeholder: Device → Model Service → Grading Dashboard.', 'spectrifyai-theme' ); ?></p>
        </article>
    </div>
</section>
<?php
get_footer();
