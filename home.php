<?php
/**
 * The template for displaying the blog (home) page
 */

get_header();

$title = get_the_title( get_option( 'page_for_posts' ) );
$description = get_the_excerpt( get_option( 'page_for_posts' ) );

if ( class_exists( 'acf' ) ) {

	if ( get_field( 'page_header_title', get_option( 'page_for_posts' ) ) ) {
		$title = get_field( 'page_header_title', get_option( 'page_for_posts' ) );
	}

	if ( get_field( 'page_header_description', get_option( 'page_for_posts' ) ) ) {
		$description = get_field( 'page_header_description', get_option( 'page_for_posts' ) );
	}
}

get_template_part( 'template-parts/section', 'page-header', array(
	'title' => $title,
	'description' => $description,
) );
?>

	<main id="content" class="site-main">
		<div class="inner medium">
			<div class="container">

				<?php
				if ( have_posts() ) :
                    ?>
                    <div class="grid-items-row row gy-5 gx-sm-5">
                        <?php
                        while ( have_posts() ) :
                            the_post();
                            ?>
                            <div class="col-12 col-lg-6">
                                <?php get_template_part( 'template-parts/content', 'grid-item' ); ?>
                            </div>
                            <?php
                        endwhile;
                        the_posts_navigation();
                        ?>
                    </div>
                    <?php
				else :
					get_template_part( 'template-parts/content', 'none' );
				endif;
				?>

			</div>
		</div>
	</main>

<?php
get_footer();
