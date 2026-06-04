<?php
/**
 * Front page template.
 *
 * @package spectrifyai-theme
 */

get_header();
?>
<section class="hero section" data-animate>
    <div class="container">
        <h1><?php esc_html_e( 'AI-Powered Quality Intelligence for the Sri Lankan Tea &amp; Agricultural Supply Chain', 'spectrifyai-theme' ); ?></h1>
        <p><?php esc_html_e( 'Instant, TRI-certified tea quality testing. Powered by NIR spectrometry and AI. Trusted by 100+ exporters across Sri Lanka.', 'spectrifyai-theme' ); ?></p>
        <a class="button" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php esc_html_e( 'Request a Demo', 'spectrifyai-theme' ); ?></a>
    </div>
</section>

<section class="section" data-animate>
    <div class="container">
        <h2><?php esc_html_e( 'The Challenge: Traditional Tea Quality Testing Is Holding Sri Lanka\'s Export Industry Back', 'spectrifyai-theme' ); ?></h2>
        <p><?php esc_html_e( 'Manual tea grading is highly dependent on operator experience, resulting in variability across shifts and facilities. Moisture testing takes six hours via oven-drying. Polyphenol lab results take two days and cost LKR 15,000 per sample. SpectrifyAI replaces this with objective, instrument-based measurements in seconds.', 'spectrifyai-theme' ); ?></p>
    </div>
</section>

<section class="section section--alt" data-animate>
    <div class="container grid-2">
        <div>
            <h2><?php esc_html_e( 'How SpectrifyAI Transforms Tea Quality Testing With NIR Spectrometry and AI', 'spectrifyai-theme' ); ?></h2>
            <p><?php esc_html_e( 'Our compact NIR sensing device captures spectral signatures at the point of grading. The AI interprets quality markers — moisture, polyphenol content, leaf grade — and outputs results instantly, without lab access or experienced operators.', 'spectrifyai-theme' ); ?></p>
            <p><?php esc_html_e( 'Every scan is automatically logged to the cloud. Every result is traceable. Every lot is assessed against the same objective benchmark.', 'spectrifyai-theme' ); ?></p>
        </div>
        <div class="panel">
            <ul class="feature-checklist">
                <li><?php esc_html_e( 'Moisture Detection — 15 seconds', 'spectrifyai-theme' ); ?></li>
                <li><?php esc_html_e( 'Total Polyphenol (TPP) Analysis — on-site', 'spectrifyai-theme' ); ?></li>
                <li><?php esc_html_e( 'AI Leaf Quality Grading — consistent, objective', 'spectrifyai-theme' ); ?></li>
                <li><?php esc_html_e( 'Digital Traceability — automatic cloud logging', 'spectrifyai-theme' ); ?></li>
                <li><?php esc_html_e( 'Non-destructive — no sample preparation', 'spectrifyai-theme' ); ?></li>
                <li><?php esc_html_e( 'TRI certified — validated against reference standards', 'spectrifyai-theme' ); ?></li>
                <li><?php esc_html_e( 'Bluetooth — Android & iOS compatible', 'spectrifyai-theme' ); ?></li>
            </ul>
        </div>
    </div>
</section>

<section class="section" data-animate>
    <div class="container">
        <h2><?php esc_html_e( 'By the Numbers', 'spectrifyai-theme' ); ?></h2>
        <div class="stats-grid">
            <article class="stat-card">
                <h3>34,800</h3>
                <p><?php esc_html_e( 'Precision scans delivered across Sri Lanka\'s tea supply chain', 'spectrifyai-theme' ); ?></p>
            </article>
            <article class="stat-card">
                <h3>100+</h3>
                <p><?php esc_html_e( 'Active deployments at estates, factories, and exporters', 'spectrifyai-theme' ); ?></p>
            </article>
            <article class="stat-card">
                <h3>LKR 15</h3>
                <p><?php esc_html_e( 'Per sample — versus LKR 15,000 under traditional lab methods', 'spectrifyai-theme' ); ?></p>
            </article>
        </div>
    </div>
</section>

<section class="section section--alt" data-animate>
    <div class="container">
        <h2><?php esc_html_e( 'How It Works', 'spectrifyai-theme' ); ?></h2>
        <div class="flow-grid">
            <article class="flow-step">
                <span>1</span>
                <h3><?php esc_html_e( 'Scan', 'spectrifyai-theme' ); ?></h3>
                <p><?php esc_html_e( 'Hold the compact NIR device over the tea sample. No preparation required. A scan takes seconds and leaves the sample unchanged.', 'spectrifyai-theme' ); ?></p>
            </article>
            <article class="flow-step">
                <span>2</span>
                <h3><?php esc_html_e( 'Analyse', 'spectrifyai-theme' ); ?></h3>
                <p><?php esc_html_e( 'Spectral data is processed by AI models calibrated and validated against TRI reference standards. Results cover moisture, polyphenol content, and leaf quality grade.', 'spectrifyai-theme' ); ?></p>
            </article>
            <article class="flow-step">
                <span>3</span>
                <h3><?php esc_html_e( 'Decide', 'spectrifyai-theme' ); ?></h3>
                <p><?php esc_html_e( 'Quality results appear instantly in the app. Every scan is automatically logged to the cloud dashboard — audit-ready and exportable for compliance.', 'spectrifyai-theme' ); ?></p>
            </article>
        </div>
    </div>
</section>

<section class="section" data-animate>
    <div class="container">
        <h2><?php esc_html_e( 'What Our Clients Say', 'spectrifyai-theme' ); ?></h2>
        <div class="cards-grid">
            <article class="card testimonial-card">
                <p class="testimonial-card__quote"><?php esc_html_e( '"SpectrifyAI has been a valuable addition to our operations, offering both reliability and innovation."', 'spectrifyai-theme' ); ?></p>
                <footer>
                    <strong><?php esc_html_e( 'Mr. Primraj', 'spectrifyai-theme' ); ?></strong>
                    <span class="testimonial-card__role"><?php esc_html_e( 'Tea Factory', 'spectrifyai-theme' ); ?></span>
                </footer>
            </article>
            <article class="card testimonial-card">
                <p class="testimonial-card__quote"><?php esc_html_e( '"SpectrifyAI\'s NIR machine has transformed our tea testing process."', 'spectrifyai-theme' ); ?></p>
                <footer>
                    <strong><?php esc_html_e( 'Ms. Charitha', 'spectrifyai-theme' ); ?></strong>
                    <span class="testimonial-card__role"><?php esc_html_e( 'Tea Estate', 'spectrifyai-theme' ); ?></span>
                </footer>
            </article>
            <article class="card testimonial-card">
                <p class="testimonial-card__quote"><?php esc_html_e( '"Their futuristic, non-destructive technology has become a trusted part of our tea testing."', 'spectrifyai-theme' ); ?></p>
                <footer>
                    <strong><?php esc_html_e( 'Mr. Chaminda', 'spectrifyai-theme' ); ?></strong>
                    <span class="testimonial-card__role"><?php esc_html_e( 'Tea Exporter', 'spectrifyai-theme' ); ?></span>
                </footer>
            </article>
        </div>
    </div>
</section>

<section class="cta-banner" data-animate>
    <div class="container cta-banner__inner">
        <h2><?php esc_html_e( 'Partner with SpectrifyAI', 'spectrifyai-theme' ); ?></h2>
        <a class="button button--light" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php esc_html_e( 'Contact Us', 'spectrifyai-theme' ); ?></a>
    </div>
</section>
<?php
get_footer();
