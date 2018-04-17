<?php

Bizpoint_Kirki::add_panel( 'custom_colors', array(
    'priority'    => 23,
    'title'       => esc_html__( 'Color Settings', 'bizpoint' ),
) );




/**
* SECTION FOR NAV & LINK COLORS
*/
Bizpoint_Kirki::add_section( 'custom_nav_colors', array(
    'title'          => __( 'Navigation & Link Colors', 'bizpoint' ),
    'panel'          => 'custom_colors',
    'capability'     => 'edit_theme_options',
    'theme_supports' => '',
) );

Bizpoint_Kirki::add_field( 'bizpoint_theme', array(
	'type'        => 'custom',
	'settings'    => 'hr_line_1',
	'section'     => 'custom_nav_colors',
	'default'     => '<hr> <h3 style="text-align: center">'. __( 'Main Navbar Link Colors', 'bizpoint') .'</h3>',
	'priority'    => 1,
) );

Bizpoint_Kirki::add_field( 'bizpoint_theme', array(
	'settings' => 'nav_bg_color',
	'label'    => __( 'Navbar Background', 'bizpoint' ),
	'section'  => 'custom_nav_colors',
	'type'     => 'color',
	'priority' => 2,
    'default'     => '#fff',
	'choices'     => array(
		'alpha' => false,
	),
    'output' => array(
		array(
			'element'  => array( '.nav-bg', '.slicknav_nav' ),
			'property' => 'background-color',
		),
        array(
			'element'  => '.main-navigation ul ul',
			'property' => 'background-color',
		),
	),
    'active_callback' => array(
        array(
            'setting'  		=> 'bp_header_layout',
            'operator' 		=> '!=',
            'value'    		=> '1',
        ),
    ),
) );

Bizpoint_Kirki::add_field( 'bizpoint_theme', array(
	'settings' => 'nav_link_color',
	'label'    => __( 'Navbar Link Color', 'bizpoint' ),
	'section'  => 'custom_nav_colors',
	'type'     => 'color',
	'priority' => 3,
    'default'     => '#212529',
	'choices'     => array(
		'alpha' => true,
	),
    'output' => array(
		array(
			'element'  => array( '.main-navigation a', '.main-navigation a:hover', '.slicknav_nav a', '.bp-search-nav-icon' ),
			'property' => 'color',
		),
	),
) );

Bizpoint_Kirki::add_field( 'bizpoint_theme', array(
	'settings' => 'active_nav_link_color',
	'label'    => __( 'Active Nav Link Color', 'bizpoint' ),
	'section'  => 'custom_nav_colors',
	'type'     => 'color',
	'priority' => 4,
    'default'     => '#3454D1',
	'choices'     => array(
		'alpha' => true,
	),
    'output' => array(
		array(
			'element'  => array( '.current-menu-item > a', '.main-navigation a:hover' ),
			'property' => 'color',
		),
	),
) );

Bizpoint_Kirki::add_field( 'bizpoint_theme', array(
	'type'        => 'custom',
	'settings'    => 'hr_line_2',
	'section'     => 'custom_nav_colors',
	'default'     => '<hr> <h3 style="text-align: center">'. __( 'Other Links & Button Colors', 'bizpoint') .'</h3>',
	'priority'    => 5,
) );

Bizpoint_Kirki::add_field( 'bizpoint_theme', array(
	'settings' => 'link_color',
	'label'    => __( 'Primary Color', 'bizpoint' ),
	'section'  => 'custom_nav_colors',
	'type'     => 'color',
	'priority' => 6,
    'default'     => '#3454D1',
	'choices'     => array(
		'alpha' => false,
	),
    'output' => array(
		array(
			'element'  => array( 'a' ),
			'property' => 'color',
		),
        array(
			'element'  => array( '.btn-primary' ),
			'property' => 'background-color',
		),
        array(
			'element'  => array( '.btn-primary' ),
			'property' => 'border-color',
		),
	),
) );

Bizpoint_Kirki::add_field( 'bizpoint_theme', array(
	'settings' => 'link_hover_color',
	'label'    => __( 'Hover Color', 'bizpoint' ),
	'section'  => 'custom_nav_colors',
	'type'     => 'color',
	'priority' => 7,
    'default'     => '#16309B',
	'choices'     => array(
		'alpha' => false,
	),
    'output' => array(
		array(
			'element'  => array( 'a:hover', 'a:focus', 'a:active' ),
			'property' => 'color',
		),
        array(
			'element'  => array( '.btn-primary:hover' ),
			'property' => 'background-color',
		),
        array(
			'element'  => array( '.btn-primary:hover' ),
			'property' => 'border-color',
		),
	),
) );





/**
* SECTION FOR OTHER COLOR SETTINGS
*/
Bizpoint_Kirki::add_section( 'custom_body_colors', array(
    'title'          => __( 'Other Colors', 'bizpoint' ),
    'panel'          => 'custom_colors',
    'capability'     => 'edit_theme_options',
    'theme_supports' => '',
) );

Bizpoint_Kirki::add_field( 'bizpoint_theme', array(
	'settings' => 'content_bg_color',
	'label'    => __( 'Default Content Background', 'bizpoint' ),
	'section'  => 'custom_body_colors',
	'type'     => 'color',
    'default'     => '#e9e9e9',
    'description' => __( 'This is default background color for the content. Check blog pages to see how this works.', 'bizpoint' ),
	'choices'     => array(
		'alpha' => true,
	),
    'output' => array(
		array(
			'element'  => '.bp-content-bg',
			'property' => 'background-color',
		),
	),
) );

// FOOTER BG COLOR
Bizpoint_Kirki::add_field( 'bizpoint_theme', array(
	'settings' => 'footer_bg_color',
	'label'    => __( 'Footer Background Color', 'bizpoint' ),
	'section'  => 'custom_body_colors',
	'type'     => 'color',
    'default'     => '#212529',
	'choices'     => array(
		'alpha' => true,
	),
    'output' => array(
		array(
			'element'  => '.bp-footer-bg',
			'property' => 'background-color',
		),
	),
) );

// FOOTER TEXT COLOR
Bizpoint_Kirki::add_field( 'bizpoint_theme', array(
	'settings' => 'footer_text_color',
	'label'    => __( 'Footer Text Color', 'bizpoint' ),
	'section'  => 'custom_body_colors',
	'type'     => 'color',
    'default'     => '#868e96',
	'choices'     => array(
		'alpha' => true,
	),
    'output' => array(
		array(
			'element'  => '.bp-footer-bg',
			'property' => 'color',
		),
	),
) );

// FOOTER LINK COLOR
Bizpoint_Kirki::add_field( 'bizpoint_theme', array(
	'settings' => 'footer_link_color',
	'label'    => __( 'Footer Link Color', 'bizpoint' ),
	'section'  => 'custom_body_colors',
	'type'     => 'color',
    'default'     => '#fff',
	'choices'     => array(
		'alpha' => true,
	),
    'output' => array(
		array(
			'element'  => '.bp-footer-bg a',
			'property' => 'color',
		),
	),
) );
