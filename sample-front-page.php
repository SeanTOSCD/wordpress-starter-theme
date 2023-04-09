<?php
/**
 * The template for displaying the front page
 *
 * Supports block editor page sections.
 */

get_header();

$front_page_post_content = new WP_Query( array(
	'page_id' => get_option( 'page_on_front' ),
) );

if ( $front_page_post_content->have_posts() ) {
	while ( $front_page_post_content->have_posts() ) {
		$front_page_post_content->the_post();
		?>
        <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <div class="entry-content page-sections-content">
				<?php the_content(); ?>
            </div>
        </div>
		<?php
	}
} wp_reset_postdata();

get_footer();
