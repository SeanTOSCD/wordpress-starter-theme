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
}
add_action( 'admin_init', 'wst_editor_styles' );

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
			'color' => get_theme_mod( 'body_color', '#222222' ),
		),
		array(
			'name'  => __( 'Body Text - Subdued', 'wst' ),
			'slug'  => 'subdued-body',
			'color' => get_theme_mod( 'subdued_body_color', '#555555' ),
		),
		array(
			'name'  => __( 'The Lightest Color', 'wst' ),
			'slug'  => 'the-lightest',
			'color' => get_theme_mod( 'lightest_color', '#f5f5f5' ),
		),
		array(
			'name'  => __( 'The Darkest Color', 'wst' ),
			'slug'  => 'the-darkest',
			'color' => get_theme_mod( 'darkest_color', '#222222' ),
		),
		array(
			'name'  => __( 'Action', 'wst' ),
			'slug'  => 'action',
			'color' => get_theme_mod( 'action_color', '#0073aa' ),
		),
		array(
			'name'  => __( 'Action - Subdued', 'wst' ),
			'slug'  => 'subdued-action',
			'color' => get_theme_mod( 'subdued_action_color', '#666666' ),
		),
	);

	add_theme_support( 'editor-color-palette', $wst_colors );
}
add_action( 'after_setup_theme', 'wst_editor_color_palette' );