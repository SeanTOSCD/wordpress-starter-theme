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
			'name'  => __( 'Light Gray', 'wst' ),
			'slug'  => 'light-gray',
			'color' => '#f5f5f5',
		),
		array(
			'name'  => __( 'Dark Gray', 'wst' ),
			'slug'  => 'dark-gray',
			'color' => '#222222',
		),
		array(
			'name'  => __( 'Blue', 'wst' ),
			'slug'  => 'blue',
			'color' => '#0073aa',
		)
	);

	add_theme_support( 'editor-color-palette', $wst_colors );
}
add_action( 'after_setup_theme', 'wst_editor_color_palette' );