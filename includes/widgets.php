<?php
/**
 * Build widgetized areas
 */

// Register all fat footer areas
function wst_fat_footer_areas() {

	// Unique fat footer area data
	$fat_footer_areas = array(

		// Fat Footer Areas
		'ff_a1' => array(
			'name'        => esc_html__( 'Fat Footer - Area One', 'wst' ),
			'id'          => 'fat-footer-area-one',
			'location'    => 'fat-footer-area',
			'description' => esc_html__( 'The first fat footer widgetized area. Wider than the rest.', 'wst' ),
		),
		'ff_a2' => array(
			'name'        => esc_html__( 'Fat Footer - Area Two', 'wst' ),
			'id'          => 'fat-footer-area-two',
			'location'    => 'fat-footer-area',
			'description' => esc_html__( 'The second fat footer widgetized area. Designed for menus.', 'wst' ),
		),
		'ff_a3' => array(
			'name'        => esc_html__( 'Fat Footer - Area Three', 'wst' ),
			'id'          => 'fat-footer-area-three',
			'location'    => 'fat-footer-area',
			'description' => esc_html__( 'The third fat footer widgetized area. Designed for menus.', 'wst' ),
		),
		'ff_a4' => array(
			'name'        => esc_html__( 'Fat Footer - Area Four', 'wst' ),
			'id'          => 'fat-footer-area-four',
			'location'    => 'fat-footer-area',
			'description' => esc_html__( 'The fourth fat footer widgetized area. Designed for menus.', 'wst' ),
		),
	);

	foreach ( $fat_footer_areas as $key => $value ) {
		register_sidebar( array(
			'name'           => $value['name'],
			'id'             => $value['id'],
			'description'    => $value['description'],
			'class'          => $value['location'],
			'before_sidebar' => '<div class="%2$s %1$s">',
			'after_sidebar'  => '</div>',
			'before_widget'  => '<section class="widget %2$s">',
			'after_widget'   => '</section>',
			'before_title'   => '<h5 class="widget-title">',
			'after_title'    => '</h5>',
		) );
	}
}
add_action( 'widgets_init', 'wst_fat_footer_areas' );

/**
 * Limit the depth of menus in the fat footer widget areas
 *
 * @param $nav_menu_args
 * @param $nav_menu
 * @param $args
 * @param $instance
 * @return mixed
 */
function wst_limit_menu_depth_by_widget_area( $nav_menu_args, $nav_menu, $args, $instance ) {

	// The widget areas to limit
	$fat_footer_widget_areas = array(
		'fat-footer-area-one',
		'fat-footer-area-two',
		'fat-footer-area-three',
		'fat-footer-area-four'
	);

	// Only modify the menu widget in the specified widget area
	if ( in_array( $args['id'], $fat_footer_widget_areas ) ) {
		$nav_menu_args['depth'] = 1;
	}
	return $nav_menu_args;
}
add_filter( 'widget_nav_menu_args', 'wst_limit_menu_depth_by_widget_area', 10, 4 );


