<?php
/**
 * Template Name: Page Sections
 *
 * A blank canvas to be painted in the block editor (Gutenberg).
 */

get_header();

while ( have_posts() ) :
	the_post();
	?>
	<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="entry-content page-sections-content">
			<?php the_content(); ?>
		</div>
	</div>
	<?php
endwhile; // End of the loop.

get_footer();