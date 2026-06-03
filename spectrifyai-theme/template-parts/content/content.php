<?php
/**
 * Template part for generic content.
 *
 * @package spectrifyai-theme
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class( 'content-article' ); ?>>
    <header class="entry-header">
        <?php the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '">', '</a></h2>' ); ?>
    </header>
    <div class="entry-content">
        <?php the_excerpt(); ?>
    </div>
</article>
