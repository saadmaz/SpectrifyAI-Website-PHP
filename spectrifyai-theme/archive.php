<?php
/**
 * Blog archive template.
 *
 * @package spectrifyai-theme
 */

get_header();
?>
<section class="section" data-animate>
    <div class="container">
        <header class="archive-header">
            <h1>
                <?php
                if ( is_category() ) {
                    single_cat_title( '', true );
                } elseif ( is_tag() ) {
                    single_tag_title( '', true );
                } elseif ( is_author() ) {
                    the_author();
                } elseif ( is_date() ) {
                    the_date();
                } else {
                    esc_html_e( 'Blog', 'spectrifyai-theme' );
                }
                ?>
            </h1>
        </header>

        <?php if ( have_posts() ) : ?>
            <div class="post-list">
                <?php
                while ( have_posts() ) :
                    the_post();
                    $cats = get_the_category();
                ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class( 'post-card' ); ?>>
                    <header>
                        <?php the_title( '<h2 class="post-card__title"><a href="' . esc_url( get_permalink() ) . '">', '</a></h2>' ); ?>
                        <div class="entry-meta">
                            <time datetime="<?php echo esc_attr( get_the_date( 'c' ) ); ?>"><?php echo esc_html( get_the_date() ); ?></time>
                            <span class="entry-meta__sep">&middot;</span>
                            <span><?php the_author(); ?></span>
                            <?php if ( ! empty( $cats ) ) : ?>
                                <span class="entry-meta__sep">&middot;</span>
                                <a href="<?php echo esc_url( get_category_link( $cats[0]->term_id ) ); ?>"><?php echo esc_html( $cats[0]->name ); ?></a>
                            <?php endif; ?>
                        </div>
                    </header>
                    <div class="post-card__excerpt">
                        <?php the_excerpt(); ?>
                    </div>
                    <a class="button" href="<?php echo esc_url( get_permalink() ); ?>"><?php esc_html_e( 'Read More', 'spectrifyai-theme' ); ?></a>
                </article>
                <?php endwhile; ?>
            </div>

            <nav class="pagination" aria-label="<?php esc_attr_e( 'Posts navigation', 'spectrifyai-theme' ); ?>">
                <?php
                the_posts_pagination(
                    array(
                        'prev_text' => '&larr; ' . esc_html__( 'Newer', 'spectrifyai-theme' ),
                        'next_text' => esc_html__( 'Older', 'spectrifyai-theme' ) . ' &rarr;',
                    )
                );
                ?>
            </nav>

        <?php else : ?>
            <p><?php esc_html_e( 'No posts found.', 'spectrifyai-theme' ); ?></p>
        <?php endif; ?>
    </div>
</section>
<?php
get_footer();
