<?php
/**
 * Template Name: About Page
 *
 * @package spectrifyai-theme
 */

get_header();
?>
<section class="section" data-animate>
    <div class="container">
        <h1><?php esc_html_e( 'About SpectrifyAI', 'spectrifyai-theme' ); ?></h1>
        <!-- PLACEHOLDER -->
        <p><?php esc_html_e( 'Our mission is to modernize tea quality assessment with transparent, repeatable intelligence grounded in spectral sensing and practical field deployment.', 'spectrifyai-theme' ); ?></p>
    </div>
</section>

<section class="section section--alt" data-animate>
    <div class="container">
        <h2><?php esc_html_e( 'Team', 'spectrifyai-theme' ); ?></h2>
        <div class="cards-grid cards-grid--team">
            <article class="card"><!-- PLACEHOLDER --><h3><?php esc_html_e( 'Team Member 1', 'spectrifyai-theme' ); ?></h3><p><?php esc_html_e( 'AI Systems', 'spectrifyai-theme' ); ?></p></article>
            <article class="card"><!-- PLACEHOLDER --><h3><?php esc_html_e( 'Team Member 2', 'spectrifyai-theme' ); ?></h3><p><?php esc_html_e( 'Hardware Engineering', 'spectrifyai-theme' ); ?></p></article>
            <article class="card"><!-- PLACEHOLDER --><h3><?php esc_html_e( 'Team Member 3', 'spectrifyai-theme' ); ?></h3><p><?php esc_html_e( 'Product & Operations', 'spectrifyai-theme' ); ?></p></article>
            <article class="card"><!-- PLACEHOLDER --><h3><?php esc_html_e( 'Team Member 4', 'spectrifyai-theme' ); ?></h3><p><?php esc_html_e( 'Industry Partnerships', 'spectrifyai-theme' ); ?></p></article>
        </div>
    </div>
</section>

<section class="section" data-animate>
    <div class="container grid-2">
        <article>
            <h2><?php esc_html_e( 'Origin Story', 'spectrifyai-theme' ); ?></h2>
            <!-- PLACEHOLDER -->
            <p><?php esc_html_e( 'SpectrifyAI began as a response to inconsistent quality outcomes in tea value chains, combining local domain knowledge with applied machine intelligence.', 'spectrifyai-theme' ); ?></p>
        </article>
        <article>
            <h2><?php esc_html_e( 'Recognition', 'spectrifyai-theme' ); ?></h2>
            <div class="badge-row">
                <span class="badge"><?php esc_html_e( 'Hult Prize', 'spectrifyai-theme' ); ?></span>
                <span class="badge"><?php esc_html_e( 'Innovation Program', 'spectrifyai-theme' ); ?></span>
                <span class="badge"><?php esc_html_e( 'AgriTech Showcase', 'spectrifyai-theme' ); ?></span>
            </div>
            <!-- PLACEHOLDER -->
        </article>
    </div>
</section>
<?php
get_footer();
