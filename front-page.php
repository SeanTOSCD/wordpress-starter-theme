<?php
/**
 * The template for displaying the front page
 */

get_header();

$title = get_bloginfo( 'description' );
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

<section class="generic-section">
	<div class="inner">
		<div class="container">
			<p>Where it all begins.</p>
		</div>
	</div>
</section>

<?php
get_footer();
