<?php
/**
 * Template Name: Research Roadmap Page
 *
 * @package spectrifyai-theme
 */

get_header();
?>
<section class="section" data-animate>
    <div class="container">
        <h1><?php esc_html_e( 'Research Pipeline', 'spectrifyai-theme' ); ?></h1>
        <p class="lead"><?php esc_html_e( 'SpectrifyAI\'s current platform measures moisture, total polyphenol, and AI leaf quality grade. Our research team is validating the next generation of quality parameters — each one replacing a costly, slow lab process with an instant on-site result.', 'spectrifyai-theme' ); ?></p>
    </div>
</section>

<section class="section section--alt" data-animate>
    <div class="container">
        <h2><?php esc_html_e( 'In Development', 'spectrifyai-theme' ); ?></h2>
        <p><?php esc_html_e( 'These capabilities are in active validation against reference lab standards.', 'spectrifyai-theme' ); ?></p>

        <div class="pipeline-grid">

            <article class="pipeline-card">
                <div class="pipeline-card__header">
                    <h3><?php esc_html_e( 'Caffeine Estimation', 'spectrifyai-theme' ); ?></h3>
                    <span class="pipeline-badge pipeline-badge--active"><?php esc_html_e( 'In Development', 'spectrifyai-theme' ); ?></span>
                </div>
                <p><?php esc_html_e( 'Caffeine content is a key quality and physiological indicator. Buyers use it as a proxy for strength and stimulant effect. Conventional measurement requires HPLC — a laboratory process that takes days and costs significantly per sample.', 'spectrifyai-theme' ); ?></p>
                <div class="pipeline-card__detail">
                    <h4><?php esc_html_e( 'Why it matters', 'spectrifyai-theme' ); ?></h4>
                    <p><?php esc_html_e( 'Ceylon tea\'s reputation for briskness and strength is partly driven by caffeine levels. On-site caffeine readings would let factories and exporters profile and sort lots by stimulant content — a capability no Sri Lankan estate currently has at the point of production.', 'spectrifyai-theme' ); ?></p>
                    <h4><?php esc_html_e( 'Current method', 'spectrifyai-theme' ); ?></h4>
                    <p><?php esc_html_e( 'HPLC (High-Performance Liquid Chromatography). Lab-based, 2–5 days, expensive per sample.', 'spectrifyai-theme' ); ?></p>
                </div>
            </article>

            <article class="pipeline-card">
                <div class="pipeline-card__header">
                    <h3><?php esc_html_e( 'Sugar Content Analysis', 'spectrifyai-theme' ); ?></h3>
                    <span class="pipeline-badge pipeline-badge--active"><?php esc_html_e( 'In Development', 'spectrifyai-theme' ); ?></span>
                </div>
                <p><?php esc_html_e( 'Reducing sugars influence fermentation quality, sweetness profile, and caramelisation during drying. Sugar content is directly correlated with leaf freshness, withering efficiency, and harvest timing — all of which determine final cup quality.', 'spectrifyai-theme' ); ?></p>
                <div class="pipeline-card__detail">
                    <h4><?php esc_html_e( 'Why it matters', 'spectrifyai-theme' ); ?></h4>
                    <p><?php esc_html_e( 'Understanding sugar levels at intake gives factory managers a reliable indicator of green leaf quality before withering begins. This reduces the risk of processing poor-quality leaf through full production cycles.', 'spectrifyai-theme' ); ?></p>
                    <h4><?php esc_html_e( 'Current method', 'spectrifyai-theme' ); ?></h4>
                    <p><?php esc_html_e( 'Spectrophotometric methods or HPLC. Requires sample preparation and laboratory access.', 'spectrifyai-theme' ); ?></p>
                </div>
            </article>

        </div>
    </div>
</section>

<section class="section" data-animate>
    <div class="container">
        <h2><?php esc_html_e( 'In Research', 'spectrifyai-theme' ); ?></h2>
        <p><?php esc_html_e( 'These capabilities are in early-stage feasibility research and spectral data collection.', 'spectrifyai-theme' ); ?></p>

        <div class="pipeline-grid">

            <article class="pipeline-card pipeline-card--research">
                <div class="pipeline-card__header">
                    <h3><?php esc_html_e( 'Theaflavin:Thearubigin Ratio', 'spectrifyai-theme' ); ?></h3>
                    <span class="pipeline-badge pipeline-badge--research"><?php esc_html_e( 'Research Phase', 'spectrifyai-theme' ); ?></span>
                </div>
                <p><?php esc_html_e( 'The TF:TR ratio is the most important quality parameter for black tea brightness, colour, and briskness. High theaflavin (TF) means bright, brisk tea; high thearubigin (TR) means deeper colour and body. Most grading disputes in orthodox tea ultimately come back to this ratio.', 'spectrifyai-theme' ); ?></p>
                <div class="pipeline-card__detail">
                    <h4><?php esc_html_e( 'Why it matters', 'spectrifyai-theme' ); ?></h4>
                    <p><?php esc_html_e( 'Real-time TF:TR data at the estate or factory level would transform orthodox tea grading. Buyers could compare lots against objective spectral fingerprints. Producers could adjust fermentation conditions based on live quality feedback — something not currently possible anywhere in the industry.', 'spectrifyai-theme' ); ?></p>
                    <h4><?php esc_html_e( 'Current method', 'spectrifyai-theme' ); ?></h4>
                    <p><?php esc_html_e( 'Spectrophotometric analysis in accredited labs. Results take 2–3 days. Not practical for lot-by-lot production decisions.', 'spectrifyai-theme' ); ?></p>
                </div>
            </article>

            <article class="pipeline-card pipeline-card--research">
                <div class="pipeline-card__header">
                    <h3><?php esc_html_e( 'Pesticide Residue Screening', 'spectrifyai-theme' ); ?></h3>
                    <span class="pipeline-badge pipeline-badge--research"><?php esc_html_e( 'Research Phase', 'spectrifyai-theme' ); ?></span>
                </div>
                <p><?php esc_html_e( 'Export markets — particularly the EU, Japan, and the United States — enforce strict MRL (Maximum Residue Level) requirements for tea. Compliance testing is expensive, slow, and currently applied only to a fraction of export lots. A screening tool that flags high-risk samples would dramatically reduce compliance costs.', 'spectrifyai-theme' ); ?></p>
                <div class="pipeline-card__detail">
                    <h4><?php esc_html_e( 'Why it matters', 'spectrifyai-theme' ); ?></h4>
                    <p><?php esc_html_e( 'A failed pesticide test after export causes shipment rejection, financial loss, and reputational damage. NIR-based pre-screening cannot replace full compliance testing, but a reliable triage tool — flagging suspect lots for priority lab testing — could protect exporters from the costliest failures.', 'spectrifyai-theme' ); ?></p>
                    <h4><?php esc_html_e( 'Current method', 'spectrifyai-theme' ); ?></h4>
                    <p><?php esc_html_e( 'GC-MS / LC-MS in accredited laboratories. High cost, multi-day turnaround. Most lots are not tested.', 'spectrifyai-theme' ); ?></p>
                </div>
            </article>

        </div>
    </div>
</section>

<section class="section section--alt" data-animate>
    <div class="container">
        <h2><?php esc_html_e( 'Current Capabilities', 'spectrifyai-theme' ); ?></h2>
        <p><?php esc_html_e( 'Already live and TRI-certified across 100+ deployments in Sri Lanka.', 'spectrifyai-theme' ); ?></p>
        <div class="current-caps">
            <div class="current-cap">
                <span class="pipeline-badge pipeline-badge--live"><?php esc_html_e( 'Live', 'spectrifyai-theme' ); ?></span>
                <span><?php esc_html_e( 'Moisture Detection — 15 seconds', 'spectrifyai-theme' ); ?></span>
            </div>
            <div class="current-cap">
                <span class="pipeline-badge pipeline-badge--live"><?php esc_html_e( 'Live', 'spectrifyai-theme' ); ?></span>
                <span><?php esc_html_e( 'Total Polyphenol (TPP) — on-site, seconds', 'spectrifyai-theme' ); ?></span>
            </div>
            <div class="current-cap">
                <span class="pipeline-badge pipeline-badge--live"><?php esc_html_e( 'Live', 'spectrifyai-theme' ); ?></span>
                <span><?php esc_html_e( 'AI Leaf Quality Grading — consistent, objective', 'spectrifyai-theme' ); ?></span>
            </div>
            <div class="current-cap">
                <span class="pipeline-badge pipeline-badge--live"><?php esc_html_e( 'Live', 'spectrifyai-theme' ); ?></span>
                <span><?php esc_html_e( 'Digital Traceability — automatic cloud logging', 'spectrifyai-theme' ); ?></span>
            </div>
        </div>
    </div>
</section>

<section class="cta-banner" data-animate>
    <div class="container cta-banner__inner">
        <h2><?php esc_html_e( 'Interested in early access to new capabilities?', 'spectrifyai-theme' ); ?></h2>
        <a class="button button--light" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php esc_html_e( 'Talk to Our Research Team', 'spectrifyai-theme' ); ?></a>
    </div>
</section>
<?php
get_footer();
