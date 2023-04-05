<?php
/**
 * Template Name: Gutenberg
 *
 * A blank canvas to be painted in the block editor (Gutenberg).
 */

get_header();

while ( have_posts() ) :
	the_post();
	?>
	<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="entry-content">
			<?php the_content(); ?>
		</div>
	</div>
	<?php
endwhile; // End of the loop.

get_footer();