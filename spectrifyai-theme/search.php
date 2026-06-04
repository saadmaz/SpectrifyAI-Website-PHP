<?php
/**
 * Search results template.
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
                printf(
                    /* translators: %s: search query */
                    esc_html__( 'Search results for: %s', 'spectrifyai-theme' ),
                    '<span>' . esc_html( get_search_query() ) . '</span>'
                );
                ?>
            </h1>
        </header>

        <form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
            <label for="search-input" class="screen-reader-text"><?php esc_html_e( 'Search', 'spectrifyai-theme' ); ?></label>
            <div class="search-form__inner">
                <input
                    id="search-input"
                    type="search"
                    name="s"
                    value="<?php echo esc_attr( get_search_query() ); ?>"
                    placeholder="<?php esc_attr_e( 'Search…', 'spectrifyai-theme' ); ?>"
                >
                <button type="submit" class="button"><?php esc_html_e( 'Search', 'spectrifyai-theme' ); ?></button>
            </div>
        </form>

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
                            <span><?php echo esc_html( ucfirst( get_post_type() ) ); ?></span>
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

            <nav class="pagination" aria-label="<?php esc_attr_e( 'Search results navigation', 'spectrifyai-theme' ); ?>">
                <?php
                the_posts_pagination(
                    array(
                        'prev_text' => '&larr; ' . esc_html__( 'Previous', 'spectrifyai-theme' ),
                        'next_text' => esc_html__( 'Next', 'spectrifyai-theme' ) . ' &rarr;',
                    )
                );
                ?>
            </nav>

        <?php else : ?>
            <div class="search-no-results">
                <p><?php esc_html_e( 'No results found. Try a different search term, or browse the site using the navigation above.', 'spectrifyai-theme' ); ?></p>
            </div>
        <?php endif; ?>
    </div>
</section>
<?php
get_footer();
