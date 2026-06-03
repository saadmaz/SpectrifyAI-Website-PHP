<?php
/**
 * Main index template.
 *
 * @package spectrifyai-theme
 */

get_header();
?>
<section class="section">
    <div class="container">
        <?php if ( have_posts() ) : ?>
            <?php
            while ( have_posts() ) :
                the_post();
                get_template_part( 'template-parts/content/content', get_post_type() );
            endwhile;
            ?>
        <?php else : ?>
            <h1><?php esc_html_e( 'No content found', 'spectrifyai-theme' ); ?></h1>
        <?php endif; ?>
    </div>
</section>
<?php
get_footer();
