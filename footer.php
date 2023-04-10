<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 */

?>

	<footer id="colophon" class="site-footer">
        <div class="inner tiny">
            <div class="container">
                <div class="site-info">
                    <?php $home_link = '<a href="' . esc_url( home_url( '/' ) ) . '" rel="home">' . esc_html( get_bloginfo( 'name' ) ) . '</a>'; ?>
                    <span class="site-copyright"><?php echo '&copy ' . $home_link . ' ' . date( 'Y' ); ?></span>
                    <?php if ( ! empty( get_bloginfo( 'description' ) ) ) { ?>
                        <span class="site-description"> - <?php echo get_bloginfo( 'description' ); ?></span>
                    <?php } ?>
                </div>
            </div>
        </div>
	</footer>
</div>

<?php wp_footer(); ?>

</body>
</html>
