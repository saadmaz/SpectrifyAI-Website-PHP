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
        <!-- PLACEHOLDER -->
        <h1>Spectral Intelligence for Sri Lanka's Tea Industry</h1>
        <!-- PLACEHOLDER -->
        <p>SpectrifyAI combines NIR sensing hardware and computer vision models to make tea grading faster, more consistent, and data-driven.</p>
        <a class="button" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php esc_html_e( 'Request a Demo', 'spectrifyai-theme' ); ?></a>
    </div>
</section>

<section class="section" data-animate>
    <div class="container">
        <h2><?php esc_html_e( 'Why Traditional Grading Falls Short', 'spectrifyai-theme' ); ?></h2>
        <!-- PLACEHOLDER -->
        <p>Manual tea grading is highly dependent on operator experience, resulting in variability across shifts and facilities. It also slows decision cycles and limits traceable quality insights. SpectrifyAI introduces objective measurements to improve confidence and throughput.</p>
    </div>
</section>

<section class="section section--alt" data-animate>
    <div class="container grid-2">
        <div>
            <h2><?php esc_html_e( 'Hardware + Intelligence Platform', 'spectrifyai-theme' ); ?></h2>
            <!-- PLACEHOLDER -->
            <p>Our compact NIR sensing device captures spectral signatures at the point of grading, while our software interprets quality markers and outputs grade recommendations instantly.</p>
        </div>
        <div class="panel">
            <!-- PLACEHOLDER -->
            <p><?php esc_html_e( 'Device image and dashboard preview placeholder.', 'spectrifyai-theme' ); ?></p>
        </div>
    </div>
</section>

<section class="section" data-animate>
    <div class="container">
        <h2><?php esc_html_e( 'Key Performance Indicators', 'spectrifyai-theme' ); ?></h2>
        <div class="stats-grid">
            <article class="stat-card">
                <!-- PLACEHOLDER -->
                <h3>99%</h3>
                <p><?php esc_html_e( 'Model grading accuracy', 'spectrifyai-theme' ); ?></p>
            </article>
            <article class="stat-card">
                <!-- PLACEHOLDER -->
                <h3>12+</h3>
                <p><?php esc_html_e( 'Estates served', 'spectrifyai-theme' ); ?></p>
            </article>
            <article class="stat-card">
                <!-- PLACEHOLDER -->
                <h3>8</h3>
                <p><?php esc_html_e( 'Grade profiles detected', 'spectrifyai-theme' ); ?></p>
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
                <!-- PLACEHOLDER -->
                <p><?php esc_html_e( 'Capture NIR readings from tea samples in seconds.', 'spectrifyai-theme' ); ?></p>
            </article>
            <article class="flow-step">
                <span>2</span>
                <h3><?php esc_html_e( 'Analyze', 'spectrifyai-theme' ); ?></h3>
                <!-- PLACEHOLDER -->
                <p><?php esc_html_e( 'Apply calibrated spectral and visual models to assess quality factors.', 'spectrifyai-theme' ); ?></p>
            </article>
            <article class="flow-step">
                <span>3</span>
                <h3><?php esc_html_e( 'Grade', 'spectrifyai-theme' ); ?></h3>
                <!-- PLACEHOLDER -->
                <p><?php esc_html_e( 'Receive standardized grade output with confidence indicators.', 'spectrifyai-theme' ); ?></p>
            </article>
        </div>
    </div>
</section>

<section class="section" data-animate>
    <div class="container">
        <h2><?php esc_html_e( 'Industry Feedback', 'spectrifyai-theme' ); ?></h2>
        <div class="cards-grid">
            <article class="card">
                <!-- PLACEHOLDER -->
                <p>"SpectrifyAI reduced grading disputes and improved our lot-level consistency."</p>
                <strong><?php esc_html_e( 'Factory QA Lead', 'spectrifyai-theme' ); ?></strong>
            </article>
            <article class="card">
                <!-- PLACEHOLDER -->
                <p>"The spectral dashboard gives us fast confidence before auction submissions."</p>
                <strong><?php esc_html_e( 'Estate Operations Manager', 'spectrifyai-theme' ); ?></strong>
            </article>
            <article class="card">
                <!-- PLACEHOLDER -->
                <p>"We can now benchmark tea profiles with measurable indicators, not just visual checks."</p>
                <strong><?php esc_html_e( 'Exporter Quality Team', 'spectrifyai-theme' ); ?></strong>
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
