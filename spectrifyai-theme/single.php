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

            <?php if ( has_post_thumbnail() ) : ?>
                <div class="single-post__thumbnail">
                    <?php the_post_thumbnail( 'large', array( 'loading' => 'eager' ) ); ?>
                </div>
            <?php endif; ?>

            <div class="single-post__content">
                <?php the_content(); ?>
                <?php
                wp_link_pages(
                    array(
                        'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'spectrifyai-theme' ),
                        'after'  => '</div>',
                    )
                );
                ?>
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

        <?php
        if ( comments_open() || get_comments_number() ) {
            comments_template();
        }
        ?>

        <?php endwhile; ?>
    </div>
</section>
<?php
get_footer();
