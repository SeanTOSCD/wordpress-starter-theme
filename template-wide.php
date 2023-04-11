<?php
/**
 * Template Name: Wide
 *
 * Displays the page with a page-width content column. Good for Gutenberg fun.
 */

get_header();

$title = get_the_title();
$description = has_excerpt() ? get_the_excerpt() : '';

if ( class_exists( 'acf' ) ) {

	if ( get_field( 'page_header_title' ) ) {
		$title = get_field( 'page_header_title' );
	}

	if ( get_field( 'page_header_description' ) ) {
		$description = get_field( 'page_header_description' );
	}
}

get_template_part( 'template-parts/section', 'page-header', array(
	'title' => $title,
	'description' => $description,
) );
?>

	<main id="content" class="site-main">
		<div class="inner">
			<div class="container">

				<div class="row">
					<div class="content-col col-12">
						<?php
						while ( have_posts() ) :
							the_post();
							get_template_part( 'template-parts/content', 'page' );
						endwhile;
						?>
					</div>
				</div>

			</div>
		</div>
	</main>

<?php
get_footer();
