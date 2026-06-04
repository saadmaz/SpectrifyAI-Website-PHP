<?php
/**
 * Template part for displaying page content.
 *
 * @package spectrifyai-theme
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class( 'content-article' ); ?>>
    <header class="entry-header">
        <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
    </header>

    <?php if ( has_post_thumbnail() ) : ?>
        <div class="entry-thumbnail">
            <?php the_post_thumbnail( 'large', array( 'loading' => 'eager' ) ); ?>
        </div>
    <?php endif; ?>

    <div class="entry-content">
        <?php the_content(); ?>
    </div>
</article>
