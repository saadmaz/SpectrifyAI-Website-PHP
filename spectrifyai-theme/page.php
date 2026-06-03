<?php
/**
 * Default page template.
 *
 * @package spectrifyai-theme
 */

get_header();
?>
<section class="section">
    <div class="container">
        <?php
        while ( have_posts() ) :
            the_post();
            get_template_part( 'template-parts/content/content', 'page' );
        endwhile;
        ?>
    </div>
</section>
<?php
get_footer();
