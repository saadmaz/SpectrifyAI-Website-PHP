<?php
/**
 * Template Name: Contact Page
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
$org     = '';
$message = '';

if ( 'POST' === $_SERVER['REQUEST_METHOD'] && isset( $_POST['spectrifyai_contact_submit'] ) ) {
    $nonce = isset( $_POST['spectrifyai_contact_nonce'] ) ? sanitize_text_field( wp_unslash( $_POST['spectrifyai_contact_nonce'] ) ) : '';

    if ( ! wp_verify_nonce( $nonce, 'spectrifyai_contact_form' ) ) {
        $errors[] = __( 'Security check failed. Please try again.', 'spectrifyai-theme' );
    } else {
        $name    = isset( $_POST['contact_name'] ) ? sanitize_text_field( wp_unslash( $_POST['contact_name'] ) ) : '';
        $email   = isset( $_POST['contact_email'] ) ? sanitize_email( wp_unslash( $_POST['contact_email'] ) ) : '';
        $org     = isset( $_POST['contact_org'] ) ? sanitize_text_field( wp_unslash( $_POST['contact_org'] ) ) : '';
        $message = isset( $_POST['contact_message'] ) ? sanitize_textarea_field( wp_unslash( $_POST['contact_message'] ) ) : '';

        if ( '' === $name || '' === $email || '' === $message ) {
            $errors[] = __( 'Name, email, and message are required.', 'spectrifyai-theme' );
        }

        if ( '' !== $email && ! is_email( $email ) ) {
            $errors[] = __( 'Please enter a valid email address.', 'spectrifyai-theme' );
        }

        if ( empty( $errors ) ) {
            $to      = get_option( 'admin_email' );
            $subject = __( 'New SpectrifyAI Demo Request', 'spectrifyai-theme' );
            $body    = sprintf(
                "Name: %s\nEmail: %s\nOrganization: %s\n\nMessage:\n%s",
                $name,
                $email,
                $org,
                $message
            );
            $sanitized_name = preg_replace( '/[\r\n<>"]+/', '', $name );
            $sanitized_name = is_string( $sanitized_name ) ? sanitize_text_field( $sanitized_name ) : '';
            $reply_to       = '' !== $sanitized_name ? $sanitized_name . ' <' . $email . '>' : $email;
            $headers        = array( 'Reply-To: ' . $reply_to );

            if ( wp_mail( $to, $subject, $body, $headers ) ) {
                $success = __( 'Thanks for reaching out. Our team will contact you shortly.', 'spectrifyai-theme' );
                $name    = '';
                $email   = '';
                $org     = '';
                $message = '';
            } else {
                $errors[] = __( 'Unable to send your message right now. Please try again later.', 'spectrifyai-theme' );
            }
        }
    }
}

get_header();
?>
<section class="section" data-animate>
    <div class="container grid-2">
        <article>
            <h1><?php esc_html_e( 'Contact SpectrifyAI', 'spectrifyai-theme' ); ?></h1>
            <!-- PLACEHOLDER -->
            <p><?php esc_html_e( 'Based in Sri Lanka, we collaborate with tea factories, estates, and exporters to modernize quality workflows.', 'spectrifyai-theme' ); ?></p>
            <a class="button" href="#contact-form"><?php esc_html_e( 'Request a Demo', 'spectrifyai-theme' ); ?></a>
        </article>

        <article class="panel" id="contact-form">
            <h2><?php esc_html_e( 'Send an Inquiry', 'spectrifyai-theme' ); ?></h2>

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

            <form method="post" action="<?php echo esc_url( get_permalink() ); ?>">
                <?php wp_nonce_field( 'spectrifyai_contact_form', 'spectrifyai_contact_nonce' ); ?>

                <label for="contact_name"><?php esc_html_e( 'Name', 'spectrifyai-theme' ); ?></label>
                <input id="contact_name" name="contact_name" type="text" value="<?php echo esc_attr( $name ); ?>" required>

                <label for="contact_email"><?php esc_html_e( 'Email', 'spectrifyai-theme' ); ?></label>
                <input id="contact_email" name="contact_email" type="email" value="<?php echo esc_attr( $email ); ?>" required>

                <label for="contact_org"><?php esc_html_e( 'Organization', 'spectrifyai-theme' ); ?></label>
                <input id="contact_org" name="contact_org" type="text" value="<?php echo esc_attr( $org ); ?>">

                <label for="contact_message"><?php esc_html_e( 'Message', 'spectrifyai-theme' ); ?></label>
                <textarea id="contact_message" name="contact_message" rows="5" required><?php echo esc_textarea( $message ); ?></textarea>

                <button class="button" name="spectrifyai_contact_submit" type="submit"><?php esc_html_e( 'Submit', 'spectrifyai-theme' ); ?></button>
            </form>
        </article>
    </div>
</section>
<?php
get_footer();
