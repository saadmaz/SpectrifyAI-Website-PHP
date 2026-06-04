<?php
/**
 * Template Name: Solutions Page
 *
 * @package spectrifyai-theme
 */

get_header();
?>
<section class="section" data-animate>
    <div class="container">
        <h1><?php esc_html_e( 'Precision Tea Quality Control Across the Entire Supply Chain', 'spectrifyai-theme' ); ?></h1>
        <p><?php esc_html_e( 'TRI-certified NIR spectrometry paired with AI models built specifically for Ceylon tea. Deploy in under a day, train operators in hours, and start making data-driven quality decisions immediately.', 'spectrifyai-theme' ); ?></p>
    </div>
</section>

<section class="section section--alt" data-animate>
    <div class="container grid-2">
        <article class="panel">
            <h2><?php esc_html_e( 'Device Specifications', 'spectrifyai-theme' ); ?></h2>
            <ul class="spec-list">
                <li><strong><?php esc_html_e( 'Dimensions:', 'spectrifyai-theme' ); ?></strong> <?php esc_html_e( '82.2 × 66 × 45 mm', 'spectrifyai-theme' ); ?></li>
                <li><strong><?php esc_html_e( 'Spectral Range:', 'spectrifyai-theme' ); ?></strong> <?php esc_html_e( '900–1,700 nm', 'spectrifyai-theme' ); ?></li>
                <li><strong><?php esc_html_e( 'Light Source:', 'spectrifyai-theme' ); ?></strong> <?php esc_html_e( 'Integrated tungsten halogen', 'spectrifyai-theme' ); ?></li>
                <li><strong><?php esc_html_e( 'Connectivity:', 'spectrifyai-theme' ); ?></strong> <?php esc_html_e( 'Bluetooth (Android & iOS)', 'spectrifyai-theme' ); ?></li>
                <li><strong><?php esc_html_e( 'Analysis Type:', 'spectrifyai-theme' ); ?></strong> <?php esc_html_e( 'Non-destructive — no sample preparation required', 'spectrifyai-theme' ); ?></li>
                <li><strong><?php esc_html_e( 'Setup Time:', 'spectrifyai-theme' ); ?></strong> <?php esc_html_e( 'Under 1 day', 'spectrifyai-theme' ); ?></li>
                <li><strong><?php esc_html_e( 'Operator Training:', 'spectrifyai-theme' ); ?></strong> <?php esc_html_e( '1–2 hours', 'spectrifyai-theme' ); ?></li>
            </ul>
        </article>

        <article class="panel">
            <h2><?php esc_html_e( 'vs. Traditional Methods', 'spectrifyai-theme' ); ?></h2>
            <div class="compare-table">
                <div class="compare-table__row compare-table__row--head">
                    <span></span>
                    <span><?php esc_html_e( 'Traditional', 'spectrifyai-theme' ); ?></span>
                    <span><?php esc_html_e( 'SpectrifyAI', 'spectrifyai-theme' ); ?></span>
                </div>
                <div class="compare-table__row">
                    <span><?php esc_html_e( 'Moisture', 'spectrifyai-theme' ); ?></span>
                    <span><?php esc_html_e( '6 hours', 'spectrifyai-theme' ); ?></span>
                    <span class="compare-table__win"><?php esc_html_e( '15 seconds', 'spectrifyai-theme' ); ?></span>
                </div>
                <div class="compare-table__row">
                    <span><?php esc_html_e( 'Polyphenol', 'spectrifyai-theme' ); ?></span>
                    <span><?php esc_html_e( '2 days + lab', 'spectrifyai-theme' ); ?></span>
                    <span class="compare-table__win"><?php esc_html_e( 'Seconds on-site', 'spectrifyai-theme' ); ?></span>
                </div>
                <div class="compare-table__row">
                    <span><?php esc_html_e( 'Grading', 'spectrifyai-theme' ); ?></span>
                    <span><?php esc_html_e( 'Operator-dependent', 'spectrifyai-theme' ); ?></span>
                    <span class="compare-table__win"><?php esc_html_e( 'Objective & consistent', 'spectrifyai-theme' ); ?></span>
                </div>
                <div class="compare-table__row">
                    <span><?php esc_html_e( 'Cost per sample', 'spectrifyai-theme' ); ?></span>
                    <span><?php esc_html_e( 'LKR 15,000', 'spectrifyai-theme' ); ?></span>
                    <span class="compare-table__win"><?php esc_html_e( 'LKR 15', 'spectrifyai-theme' ); ?></span>
                </div>
            </div>
        </article>
    </div>
</section>

<section class="section" data-animate>
    <div class="container">
        <h2><?php esc_html_e( 'What SpectrifyAI Measures', 'spectrifyai-theme' ); ?></h2>
        <div class="cards-grid">
            <article class="card">
                <h3><?php esc_html_e( 'Total Polyphenol (TPP) Detection', 'spectrifyai-theme' ); ?></h3>
                <p><?php esc_html_e( 'Measure tea\'s flavour and quality indicators on-site in seconds. At LKR 15 per sample, it\'s a fraction of traditional lab analysis cost.', 'spectrifyai-theme' ); ?></p>
            </article>
            <article class="card">
                <h3><?php esc_html_e( 'AI Leaf Quality Grading', 'spectrifyai-theme' ); ?></h3>
                <p><?php esc_html_e( 'Replace manual visual assessment with instrument-based objective scoring. Eliminate operator bias and get consistent results across shifts and facilities.', 'spectrifyai-theme' ); ?></p>
            </article>
            <article class="card">
                <h3><?php esc_html_e( 'Moisture Detection', 'spectrifyai-theme' ); ?></h3>
                <p><?php esc_html_e( 'Get moisture content in 15 seconds. Traditional oven-drying takes 6 hours — that delay costs you throughput and decision speed.', 'spectrifyai-theme' ); ?></p>
            </article>
            <article class="card">
                <h3><?php esc_html_e( 'Digital Traceability & Reporting', 'spectrifyai-theme' ); ?></h3>
                <p><?php esc_html_e( 'Cloud-based automatic logging of every scan. Audit-ready records for compliance, quality trend tracking, and lot-level accountability.', 'spectrifyai-theme' ); ?></p>
            </article>
        </div>
    </div>
</section>

<section class="section" data-animate>
    <div class="container">
        <h2><?php esc_html_e( 'Pricing', 'spectrifyai-theme' ); ?></h2>
        <div class="grid-2">
            <article class="panel pricing-card">
                <p class="pricing-card__label"><?php esc_html_e( 'Per-Sample Testing', 'spectrifyai-theme' ); ?></p>
                <p class="pricing-card__price">LKR 15</p>
                <p><?php esc_html_e( 'Per scan across moisture detection, TPP analysis, and AI grading. No lab fees, no courier costs, no waiting.', 'spectrifyai-theme' ); ?></p>
            </article>
            <article class="panel pricing-card">
                <p class="pricing-card__label"><?php esc_html_e( 'Device Pricing', 'spectrifyai-theme' ); ?></p>
                <p class="pricing-card__price"><?php esc_html_e( 'On Request', 'spectrifyai-theme' ); ?></p>
                <p><?php esc_html_e( 'Device cost, support terms, and deployment scope are scoped per client. Contact us to get a quote tailored to your operation.', 'spectrifyai-theme' ); ?></p>
                <a class="button" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php esc_html_e( 'Request a Quote', 'spectrifyai-theme' ); ?></a>
            </article>
        </div>
    </div>
</section>

<section class="section section--alt" data-animate>
    <div class="container">
        <h2><?php esc_html_e( 'Coming Soon', 'spectrifyai-theme' ); ?></h2>
        <p><?php esc_html_e( 'Our research pipeline is expanding the range of measurable quality parameters.', 'spectrifyai-theme' ); ?></p>
        <div class="badge-row">
            <span class="badge"><?php esc_html_e( 'Caffeine Estimation', 'spectrifyai-theme' ); ?></span>
            <span class="badge"><?php esc_html_e( 'Sugar Content Analysis', 'spectrifyai-theme' ); ?></span>
            <span class="badge"><?php esc_html_e( 'Theaflavin:Thearubigin Ratio', 'spectrifyai-theme' ); ?></span>
            <span class="badge"><?php esc_html_e( 'Pesticide Residue Screening', 'spectrifyai-theme' ); ?></span>
        </div>
    </div>
</section>

<section class="cta-banner" data-animate>
    <div class="container cta-banner__inner">
        <h2><?php esc_html_e( 'Ready to modernise your quality process?', 'spectrifyai-theme' ); ?></h2>
        <a class="button button--light" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php esc_html_e( 'Request a Demo', 'spectrifyai-theme' ); ?></a>
    </div>
</section>
<?php
get_footer();
