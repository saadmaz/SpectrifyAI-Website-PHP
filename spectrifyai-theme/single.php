<?php
/**
 * Single post template.
 *
 * @package spectrifyai-theme
 */

get_header();
?>
<section class="section" data-animate>
    <div class="container">
        <?php while ( have_posts() ) : the_post(); ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class( 'single-post' ); ?>>

            <header class="single-post__header">
                <?php the_title( '<h1>', '</h1>' ); ?>
                <div class="entry-meta">
                    <time datetime="<?php echo esc_attr( get_the_date( 'c' ) ); ?>"><?php echo esc_html( get_the_date() ); ?></time>
                    <span class="entry-meta__sep">&middot;</span>
                    <span><?php esc_html_e( 'By', 'spectrifyai-theme' ); ?> <?php the_author(); ?></span>
                    <?php
                    $cats = get_the_category();
                    if ( ! empty( $cats ) ) :
                    ?>
                        <span class="entry-meta__sep">&middot;</span>
                        <a href="<?php echo esc_url( get_category_link( $cats[0]->term_id ) ); ?>"><?php echo esc_html( $cats[0]->name ); ?></a>
                    <?php endif; ?>
                </div>
            </header>

            <div class="single-post__content">
                <?php the_content(); ?>
            </div>

            <footer class="single-post__footer">
                <?php
                the_tags(
                    '<div class="tag-row"><span>' . esc_html__( 'Tags:', 'spectrifyai-theme' ) . '</span>',
                    '',
                    '</div>'
                );
                ?>
            </footer>
        </article>

        <nav class="post-nav" aria-label="<?php esc_attr_e( 'Post navigation', 'spectrifyai-theme' ); ?>">
            <div class="post-nav__prev">
                <?php previous_post_link( '%link', '&larr; %title' ); ?>
            </div>
            <div class="post-nav__next">
                <?php next_post_link( '%link', '%title &rarr;' ); ?>
            </div>
        </nav>

        <?php endwhile; ?>
    </div>
</section>
<?php
get_footer();
