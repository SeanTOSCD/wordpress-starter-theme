<?php
/**
 * Functions pertaining to the block editor
 */

/**
 * Add editor styles
 *
 * @return void
 */
function wst_editor_styles() {

	add_editor_style();
	wp_enqueue_style( 'wst-editor-styles', get_theme_file_uri( 'editor-styles.css' ), false, THEME_VERSION, 'all' );

	// Make sure the custom colors are added to the editor
	$custom_colors = '
        :root {
            --body: ' . get_theme_mod( 'body_color', '#002959' ) . ';
            --subdued-body: ' . get_theme_mod( 'subdued_body_color', '#315b82' ) . ';
            --lightest: ' . get_theme_mod( 'lightest_color', '#f7f9fc' ) . ';
            --darkest: ' . get_theme_mod( 'darkest_color', '#002754' ) . ';
            --action: ' . get_theme_mod( 'action_color', '#00bca9' ) . ';
            --subdued-action: ' . get_theme_mod( 'subdued_action_color', '#002754' ) . ';
        }';

	wp_add_inline_style( 'wst-editor-styles', $custom_colors );
}
add_action( 'enqueue_block_editor_assets', 'wst_editor_styles' );


/**
 * Adjust editor styles
 *
 * @param $colors
 * @return mixed
 */
function wst_editor_color_palette() {

	$wst_colors = array(
		array(
			'name'  => __( 'White', 'wst' ),
			'slug'  => 'white',
			'color' => '#fff',
		),
		array(
			'name'  => __( 'Body Text', 'wst' ),
			'slug'  => 'body',
			'color' => get_theme_mod( 'body_color', '#002959' ),
		),
		array(
			'name'  => __( 'Body Text - Subdued', 'wst' ),
			'slug'  => 'subdued-body',
			'color' => get_theme_mod( 'subdued_body_color', '#315b82' ),
		),
		array(
			'name'  => __( 'The Lightest Color', 'wst' ),
			'slug'  => 'the-lightest',
			'color' => get_theme_mod( 'lightest_color', '#f7f9fc' ),
		),
		array(
			'name'  => __( 'The Darkest Color', 'wst' ),
			'slug'  => 'the-darkest',
			'color' => get_theme_mod( 'darkest_color', '#002754' ),
		),
		array(
			'name'  => __( 'Action', 'wst' ),
			'slug'  => 'action',
			'color' => get_theme_mod( 'action_color', '#00bca9' ),
		),
		array(
			'name'  => __( 'Translucent Background - Light', 'wst' ),
			'slug'  => 'translucent-light',
			'color' => 'rgba(255,255,255,0.1)',
		),
		array(
			'name'  => __( 'Translucent Background - Dark', 'wst' ),
			'slug'  => 'translucent-dark',
			'color' => 'rgba(0,0,0,0.1)',
		),
	);

	add_theme_support( 'editor-color-palette', $wst_colors );
}
add_action( 'after_setup_theme', 'wst_editor_color_palette' );