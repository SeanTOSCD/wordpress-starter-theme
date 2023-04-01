<?php
/**
 * Template part for displaying grid items
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'grid-item' ); ?>>

	<header class="entry-header mb-3 mb-sm-4">
		<?php
		if ( ! is_search() ) {
			wst_post_thumbnail();
		}
		the_title( '<h2 class="entry-title mb-1"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		if ( 'post' === get_post_type() ) :
			?>
			<div class="entry-meta">
				<?php
				wst_posted_on();
				wst_posted_by();
				?>
			</div>
		<?php endif; ?>
	</header>

    <?php if ( ! is_search() ) { ?>
        <div class="entry-content">
            <?php the_excerpt(); ?>
        </div>
    <?php } ?>

</article>
