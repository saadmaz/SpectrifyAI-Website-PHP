<?php
/**
 * Template Name: Press Page
 *
 * @package spectrifyai-theme
 */

get_header();
?>
<section class="section" data-animate>
    <div class="container">
        <h1><?php esc_html_e( 'Press & Recognition', 'spectrifyai-theme' ); ?></h1>
        <p class="lead"><?php esc_html_e( 'SpectrifyAI has been recognised by industry programmes, innovation competitions, and regulatory bodies for its contribution to agricultural technology in Sri Lanka.', 'spectrifyai-theme' ); ?></p>
        <p>
            <?php esc_html_e( 'For media enquiries, interview requests, or press assets, contact ', 'spectrifyai-theme' ); ?>
            <a href="mailto:info@spectrifyai.com">info@spectrifyai.com</a>.
        </p>
    </div>
</section>

<section class="section section--alt" data-animate>
    <div class="container">
        <h2><?php esc_html_e( 'Awards & Certifications', 'spectrifyai-theme' ); ?></h2>
        <div class="press-grid">

            <article class="press-card press-card--award">
                <div class="press-card__icon" aria-hidden="true">&#9670;</div>
                <h3><?php esc_html_e( 'Hult Prize', 'spectrifyai-theme' ); ?></h3>
                <p><?php esc_html_e( 'Recognised by the Hult Prize — the world\'s largest student social enterprise competition — for SpectrifyAI\'s impact on agricultural quality and food systems in emerging markets.', 'spectrifyai-theme' ); ?></p>
            </article>

            <article class="press-card press-card--award">
                <div class="press-card__icon" aria-hidden="true">&#9670;</div>
                <h3><?php esc_html_e( 'Innovation Programme', 'spectrifyai-theme' ); ?></h3>
                <p><?php esc_html_e( 'Selected for a competitive innovation programme recognising technology-driven solutions with measurable impact on Sri Lanka\'s agricultural and export industries.', 'spectrifyai-theme' ); ?></p>
            </article>

            <article class="press-card press-card--award">
                <div class="press-card__icon" aria-hidden="true">&#9670;</div>
                <h3><?php esc_html_e( 'AgriTech Showcase', 'spectrifyai-theme' ); ?></h3>
                <p><?php esc_html_e( 'Featured at the AgriTech Showcase as a leading example of precision agriculture technology built for developing market deployment — compact, affordable, and field-ready.', 'spectrifyai-theme' ); ?></p>
            </article>

            <article class="press-card press-card--cert">
                <div class="press-card__icon" aria-hidden="true">&#10003;</div>
                <h3><?php esc_html_e( 'TRI Certification', 'spectrifyai-theme' ); ?></h3>
                <p><?php esc_html_e( 'Certified by the Tea Research Institute of Sri Lanka (TRI). All SpectrifyAI quality models are validated against TRI reference standards before deployment — the benchmark for Ceylon tea quality assessment.', 'spectrifyai-theme' ); ?></p>
            </article>

        </div>
    </div>
</section>

<section class="section" data-animate>
    <div class="container">
        <h2><?php esc_html_e( 'Milestones', 'spectrifyai-theme' ); ?></h2>
        <div class="milestone-list">

            <div class="milestone">
                <span class="milestone__value">34,800</span>
                <div>
                    <p class="milestone__label"><?php esc_html_e( 'Scans completed', 'spectrifyai-theme' ); ?></p>
                    <p class="milestone__context"><?php esc_html_e( 'Precision NIR scans delivered across Sri Lanka\'s tea supply chain — each one replacing a subjective visual check or an expensive lab submission.', 'spectrifyai-theme' ); ?></p>
                </div>
            </div>

            <div class="milestone">
                <span class="milestone__value">100+</span>
                <div>
                    <p class="milestone__label"><?php esc_html_e( 'Active deployments', 'spectrifyai-theme' ); ?></p>
                    <p class="milestone__context"><?php esc_html_e( 'Devices live at estates, factories, and export operations across Sri Lanka — from single-estate pilots to multi-site enterprise deployments.', 'spectrifyai-theme' ); ?></p>
                </div>
            </div>

            <div class="milestone">
                <span class="milestone__value">2025</span>
                <div>
                    <p class="milestone__label"><?php esc_html_e( 'A year of transformation', 'spectrifyai-theme' ); ?></p>
                    <p class="milestone__context"><?php esc_html_e( 'SpectrifyAI\'s most significant growth year — expanding across the Ceylon tea sector with new capabilities, new partnerships, and a growing body of validated quality data.', 'spectrifyai-theme' ); ?></p>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="section section--alt" data-animate>
    <div class="container">
        <h2><?php esc_html_e( 'In the News', 'spectrifyai-theme' ); ?></h2>
        <p><?php esc_html_e( 'Press coverage and media features will appear here. For enquiries, reach us at ', 'spectrifyai-theme' ); ?><a href="mailto:info@spectrifyai.com">info@spectrifyai.com</a>.</p>

        <div class="press-placeholder">
            <p><?php esc_html_e( 'No press items added yet.', 'spectrifyai-theme' ); ?></p>
            <p class="press-placeholder__note"><?php esc_html_e( 'Add press coverage by creating Press posts in WordPress admin and assigning them the "Press" category.', 'spectrifyai-theme' ); ?></p>
        </div>
    </div>
</section>
<?php
get_footer();
