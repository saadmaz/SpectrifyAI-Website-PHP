<?php
/**
 * Template Name: FAQ Page
 *
 * @package spectrifyai-theme
 */

get_header();

$faq_sections = array(
    array(
        'heading' => __( 'The Device', 'spectrifyai-theme' ),
        'items'   => array(
            array(
                'q' => __( 'What does SpectrifyAI measure?', 'spectrifyai-theme' ),
                'a' => __( 'The current device measures moisture content, total polyphenol (TPP), and provides AI-based leaf quality grading. In development: caffeine estimation, sugar content analysis, Theaflavin:Thearubigin ratio, and pesticide residue screening.', 'spectrifyai-theme' ),
            ),
            array(
                'q' => __( 'Is the analysis non-destructive?', 'spectrifyai-theme' ),
                'a' => __( 'Yes. NIR (near-infrared) spectrometry is fully non-destructive. No sample preparation is needed and the tea is unchanged after a scan. You can test the same sample repeatedly without any degradation.', 'spectrifyai-theme' ),
            ),
            array(
                'q' => __( 'What are the device dimensions and connectivity?', 'spectrifyai-theme' ),
                'a' => __( 'The device measures 82.2 × 66 × 45 mm — compact enough for bench or field use. It connects to your Android or iOS device over Bluetooth. The spectral range is 900–1,700 nm with an integrated tungsten halogen light source.', 'spectrifyai-theme' ),
            ),
            array(
                'q' => __( 'How long does setup take?', 'spectrifyai-theme' ),
                'a' => __( 'Under one day from delivery to live testing. Operator training takes 1–2 hours. SpectrifyAI handles all configuration and initial calibration before the device ships.', 'spectrifyai-theme' ),
            ),
        ),
    ),
    array(
        'heading' => __( 'Accuracy & Calibration', 'spectrifyai-theme' ),
        'items'   => array(
            array(
                'q' => __( 'Is SpectrifyAI TRI-certified?', 'spectrifyai-theme' ),
                'a' => __( 'Yes. SpectrifyAI holds TRI (Tea Research Institute of Sri Lanka) certification. All models are validated against TRI reference standards before deployment. We do not release a model until accuracy is independently verified.', 'spectrifyai-theme' ),
            ),
            array(
                'q' => __( 'How does calibration work?', 'spectrifyai-theme' ),
                'a' => __( 'Models are calibrated by SpectrifyAI\'s research team against TRI reference standards and field-collected data from Sri Lankan estates. The device is pre-calibrated before delivery. Ongoing model maintenance is managed remotely by our team.', 'spectrifyai-theme' ),
            ),
            array(
                'q' => __( 'What happens if the model needs updating?', 'spectrifyai-theme' ),
                'a' => __( 'Model updates are pushed remotely — no physical visit or device return is required. The app receives updated models automatically. You\'ll be notified when a material accuracy improvement is deployed.', 'spectrifyai-theme' ),
            ),
        ),
    ),
    array(
        'heading' => __( 'Pricing & Contracts', 'spectrifyai-theme' ),
        'items'   => array(
            array(
                'q' => __( 'How much does a scan cost?', 'spectrifyai-theme' ),
                'a' => __( 'LKR 15 per sample across moisture detection, TPP analysis, and AI grading. Traditional lab polyphenol testing costs around LKR 15,000 per sample and takes two days. Traditional oven-drying for moisture takes six hours.', 'spectrifyai-theme' ),
            ),
            array(
                'q' => __( 'What is the device purchase price?', 'spectrifyai-theme' ),
                'a' => __( 'Device pricing, support terms, and deployment scope are structured per client. Contact us to discuss your operation size and get a tailored quote.', 'spectrifyai-theme' ),
            ),
            array(
                'q' => __( 'Is there an ongoing subscription fee?', 'spectrifyai-theme' ),
                'a' => __( 'The full pricing structure — including any software or support fees alongside device cost — is covered in your client agreement. Contact us for the details relevant to your operation.', 'spectrifyai-theme' ),
            ),
        ),
    ),
    array(
        'heading' => __( 'Data & Infrastructure', 'spectrifyai-theme' ),
        'items'   => array(
            array(
                'q' => __( 'Where is scan data stored?', 'spectrifyai-theme' ),
                'a' => __( 'All scan data is automatically logged to a cloud-based platform. Data is owned by the client. Contact us for specific details on data residency, retention policy, and security architecture.', 'spectrifyai-theme' ),
            ),
            array(
                'q' => __( 'Can we export or access raw scan data?', 'spectrifyai-theme' ),
                'a' => __( 'Yes. The dashboard provides exportable reports for compliance, audit trails, and quality trend analysis. API access for integration with existing systems is available — contact us to discuss your requirements.', 'spectrifyai-theme' ),
            ),
            array(
                'q' => __( 'Can SpectrifyAI be deployed across multiple sites?', 'spectrifyai-theme' ),
                'a' => __( 'Yes. Many clients deploy across multiple estates or factory sites. Each site requires its own device. Scan data from all locations is visible in a unified cloud dashboard, enabling cross-site quality benchmarking.', 'spectrifyai-theme' ),
            ),
        ),
    ),
    array(
        'heading' => __( 'Support', 'spectrifyai-theme' ),
        'items'   => array(
            array(
                'q' => __( 'What support is included after deployment?', 'spectrifyai-theme' ),
                'a' => __( 'Deployment support and operator training are included for all clients. Ongoing support SLAs and warranty terms are defined per client agreement. Contact us for details specific to your deployment.', 'spectrifyai-theme' ),
            ),
            array(
                'q' => __( 'What if the device is damaged or stops working?', 'spectrifyai-theme' ),
                'a' => __( 'Warranty coverage and hardware replacement procedures are covered in your client agreement. Contact info@spectrifyai.com or call +94 77 793 0353 to reach the support team directly.', 'spectrifyai-theme' ),
            ),
        ),
    ),
);
?>
<section class="section" data-animate>
    <div class="container">
        <h1><?php esc_html_e( 'Frequently Asked Questions', 'spectrifyai-theme' ); ?></h1>
        <p class="lead"><?php esc_html_e( 'Common questions from factories, estates, and exporters evaluating SpectrifyAI. If your question isn\'t here, contact us directly.', 'spectrifyai-theme' ); ?></p>
    </div>
</section>

<section class="section section--alt" data-animate>
    <div class="container faq-container">
        <?php foreach ( $faq_sections as $section ) : ?>
        <div class="faq-section">
            <h2 class="faq-section__heading"><?php echo esc_html( $section['heading'] ); ?></h2>
            <div class="faq-list">
                <?php foreach ( $section['items'] as $item ) : ?>
                <details class="faq-item">
                    <summary class="faq-question"><?php echo esc_html( $item['q'] ); ?></summary>
                    <div class="faq-answer">
                        <p><?php echo esc_html( $item['a'] ); ?></p>
                    </div>
                </details>
                <?php endforeach; ?>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</section>

<section class="cta-banner" data-animate>
    <div class="container cta-banner__inner">
        <h2><?php esc_html_e( 'Still have questions?', 'spectrifyai-theme' ); ?></h2>
        <a class="button button--light" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php esc_html_e( 'Ask Us Directly', 'spectrifyai-theme' ); ?></a>
    </div>
</section>
<?php
get_footer();
