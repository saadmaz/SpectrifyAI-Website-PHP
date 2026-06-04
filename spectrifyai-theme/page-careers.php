<?php
/**
 * Template Name: Careers Page
 *
 * @package spectrifyai-theme
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

$errors  = array();
$success = '';
$name    = '';
$email   = '';
$area    = '';
$message = '';

if ( 'POST' === $_SERVER['REQUEST_METHOD'] && isset( $_POST['spectrifyai_careers_submit'] ) ) {
    $nonce = isset( $_POST['spectrifyai_careers_nonce'] ) ? sanitize_text_field( wp_unslash( $_POST['spectrifyai_careers_nonce'] ) ) : '';

    if ( ! wp_verify_nonce( $nonce, 'spectrifyai_careers_form' ) ) {
        $errors[] = __( 'Security check failed. Please try again.', 'spectrifyai-theme' );
    } else {
        $name    = isset( $_POST['careers_name'] ) ? sanitize_text_field( wp_unslash( $_POST['careers_name'] ) ) : '';
        $email   = isset( $_POST['careers_email'] ) ? sanitize_email( wp_unslash( $_POST['careers_email'] ) ) : '';
        $area    = isset( $_POST['careers_area'] ) ? sanitize_text_field( wp_unslash( $_POST['careers_area'] ) ) : '';
        $message = isset( $_POST['careers_message'] ) ? sanitize_textarea_field( wp_unslash( $_POST['careers_message'] ) ) : '';

        if ( '' === $name || '' === $email || '' === $message ) {
            $errors[] = __( 'Name, email, and message are required.', 'spectrifyai-theme' );
        }

        if ( '' !== $email && ! is_email( $email ) ) {
            $errors[] = __( 'Please enter a valid email address.', 'spectrifyai-theme' );
        }

        if ( empty( $errors ) ) {
            $to      = get_option( 'admin_email' );
            $subject = sprintf( __( 'New Job Application — %s', 'spectrifyai-theme' ), get_bloginfo( 'name' ) );
            $body    = sprintf(
                "Name: %s\nEmail: %s\nArea of Interest: %s\n\nMessage:\n%s",
                $name,
                $email,
                $area,
                $message
            );
            $sanitized_name = str_replace( array( "\r", "\n" ), '', $name );
            $headers        = array( 'Reply-To: ' . $sanitized_name . ' <' . $email . '>' );

            if ( wp_mail( $to, $subject, $body, $headers ) ) {
                $success = __( 'Thanks for your interest. We\'ll be in touch if your profile is a good fit.', 'spectrifyai-theme' );
                $name    = '';
                $email   = '';
                $area    = '';
                $message = '';
            } else {
                $errors[] = __( 'Unable to send your application right now. Please try again later.', 'spectrifyai-theme' );
            }
        }
    }
}

$role_areas = array(
    'ai-ml'        => __( 'AI & Machine Learning', 'spectrifyai-theme' ),
    'hardware'     => __( 'Hardware & Embedded Systems', 'spectrifyai-theme' ),
    'field-ops'    => __( 'Field Deployment & Customer Success', 'spectrifyai-theme' ),
    'biz-dev'      => __( 'Business Development & Partnerships', 'spectrifyai-theme' ),
    'other'        => __( 'Other', 'spectrifyai-theme' ),
);

get_header();
?>
<section class="section" data-animate>
    <div class="container">
        <h1><?php esc_html_e( 'Join SpectrifyAI', 'spectrifyai-theme' ); ?></h1>
        <p class="lead"><?php esc_html_e( 'We\'re a small, focused team building the future of agricultural quality intelligence. If you want your work to have direct impact on one of Sri Lanka\'s most important industries, we\'d like to hear from you.', 'spectrifyai-theme' ); ?></p>
    </div>
</section>

<section class="section section--alt" data-animate>
    <div class="container">
        <h2><?php esc_html_e( 'Areas We Hire In', 'spectrifyai-theme' ); ?></h2>
        <div class="role-areas">

            <article class="role-card">
                <h3><?php esc_html_e( 'AI & Machine Learning', 'spectrifyai-theme' ); ?></h3>
                <p><?php esc_html_e( 'Build and validate spectral models for tea quality parameters. Work with NIR data, chemometrics, and field-collected reference sets. Accuracy matters — our models are TRI-certified.', 'spectrifyai-theme' ); ?></p>
            </article>

            <article class="role-card">
                <h3><?php esc_html_e( 'Hardware & Embedded Systems', 'spectrifyai-theme' ); ?></h3>
                <p><?php esc_html_e( 'Develop and maintain the firmware and hardware integration layer for our NIR spectrometer. Work at the intersection of sensor hardware, Bluetooth connectivity, and field reliability.', 'spectrifyai-theme' ); ?></p>
            </article>

            <article class="role-card">
                <h3><?php esc_html_e( 'Field Deployment & Customer Success', 'spectrifyai-theme' ); ?></h3>
                <p><?php esc_html_e( 'Deploy devices at estates and factories across Sri Lanka, train operators, and ensure clients get measurable results. You\'ll be the face of SpectrifyAI on the ground.', 'spectrifyai-theme' ); ?></p>
            </article>

            <article class="role-card">
                <h3><?php esc_html_e( 'Business Development & Partnerships', 'spectrifyai-theme' ); ?></h3>
                <p><?php esc_html_e( 'Identify and close new customers in the Ceylon tea supply chain. Build relationships with exporters, factory owners, and industry bodies. Understand the product deeply enough to sell it clearly.', 'spectrifyai-theme' ); ?></p>
            </article>

        </div>
    </div>
</section>

<section class="section" data-animate>
    <div class="container grid-2">

        <article>
            <h2><?php esc_html_e( 'What to Expect', 'spectrifyai-theme' ); ?></h2>
            <ul class="expect-list">
                <li><?php esc_html_e( 'Small team — your work ships fast and the impact is visible', 'spectrifyai-theme' ); ?></li>
                <li><?php esc_html_e( 'Direct access to domain experts across tea quality, agronomy, and export', 'spectrifyai-theme' ); ?></li>
                <li><?php esc_html_e( 'Field presence — many roles involve time at estates and factories', 'spectrifyai-theme' ); ?></li>
                <li><?php esc_html_e( 'Based in Sri Lanka, with the tea industry as your day-to-day context', 'spectrifyai-theme' ); ?></li>
                <li><?php esc_html_e( 'Equity participation for early-stage roles', 'spectrifyai-theme' ); ?></li>
            </ul>
        </article>

        <article class="panel" id="apply-form">
            <h2><?php esc_html_e( 'Express Interest', 'spectrifyai-theme' ); ?></h2>
            <p><?php esc_html_e( 'No open listing matches your background? Send us a note — we review talent pool applications on a rolling basis.', 'spectrifyai-theme' ); ?></p>

            <?php if ( '' !== $success ) : ?>
                <p class="form-message form-message--success"><?php echo esc_html( $success ); ?></p>
            <?php endif; ?>

            <?php if ( ! empty( $errors ) ) : ?>
                <div class="form-message form-message--error">
                    <?php foreach ( $errors as $error ) : ?>
                        <p><?php echo esc_html( $error ); ?></p>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>

            <form method="post" action="<?php echo esc_url( get_permalink() ); ?>#apply-form">
                <?php wp_nonce_field( 'spectrifyai_careers_form', 'spectrifyai_careers_nonce' ); ?>

                <label for="careers_name"><?php esc_html_e( 'Name', 'spectrifyai-theme' ); ?></label>
                <input id="careers_name" name="careers_name" type="text" value="<?php echo esc_attr( $name ); ?>" required>

                <label for="careers_email"><?php esc_html_e( 'Email', 'spectrifyai-theme' ); ?></label>
                <input id="careers_email" name="careers_email" type="email" value="<?php echo esc_attr( $email ); ?>" required>

                <label for="careers_area"><?php esc_html_e( 'Area of Interest', 'spectrifyai-theme' ); ?></label>
                <select id="careers_area" name="careers_area">
                    <option value=""><?php esc_html_e( 'Select an area…', 'spectrifyai-theme' ); ?></option>
                    <?php foreach ( $role_areas as $value => $label ) : ?>
                        <option value="<?php echo esc_attr( $value ); ?>"<?php selected( $area, $value ); ?>><?php echo esc_html( $label ); ?></option>
                    <?php endforeach; ?>
                </select>

                <label for="careers_message"><?php esc_html_e( 'Tell us about yourself', 'spectrifyai-theme' ); ?></label>
                <textarea id="careers_message" name="careers_message" rows="5" required placeholder="<?php esc_attr_e( 'Background, what you\'re looking for, and a link to your LinkedIn or portfolio.', 'spectrifyai-theme' ); ?>"><?php echo esc_textarea( $message ); ?></textarea>

                <button class="button" name="spectrifyai_careers_submit" type="submit"><?php esc_html_e( 'Send Application', 'spectrifyai-theme' ); ?></button>
            </form>
        </article>
    </div>
</section>
<?php
get_footer();
