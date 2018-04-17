<?php

// Register widget area.
function bizpoint_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'bizpoint' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here for sidebar.', 'bizpoint' ),
		'before_widget' => '<section id="%1$s" class="widget bizp-panel %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h5 class="widget-title">',
		'after_title'   => '</h5>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Header Right', 'bizpoint' ),
		'id'            => 'sidebar-header-right',
		'description'   => esc_html__( 'You can use this area for search bar, an advertisement, social icons or contact information.', 'bizpoint' ),
		'before_widget' => '<section id="%1$s" class="bizp-header-widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h5 class="widget-title">',
		'after_title'   => '</h5>',
	) );
}
add_action( 'widgets_init', 'bizpoint_widgets_init' );
