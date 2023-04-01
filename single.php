<?php
/**
 * The template for displaying single posts
 */

get_header();

get_template_part( 'template-parts/section', 'page-header', array(
	'title' => get_the_title(),
	'description' => has_excerpt() ? get_the_excerpt() : '',
) );
?>

	<main id="content" class="site-main">
        <div class="inner medium">
            <div class="container">

                <div class="row justify-content-around">
                    <div class="content-col col-12 col-lg-10 col-xl-9 col-xxl-8">
	                    <?php
	                    while ( have_posts() ) :
		                    the_post();

		                    get_template_part( 'template-parts/content', get_post_type() );

		                    the_post_navigation(
			                    array(
				                    'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', '_s' ) . '</span> <span class="nav-title">%title</span>',
				                    'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', '_s' ) . '</span> <span class="nav-title">%title</span>',
			                    )
		                    );

		                    if ( comments_open() || get_comments_number() ) :
			                    comments_template();
		                    endif;

	                    endwhile;
	                    ?>
                    </div>
                </div>

            </div>
        </div>
	</main>

<?php
get_footer();
