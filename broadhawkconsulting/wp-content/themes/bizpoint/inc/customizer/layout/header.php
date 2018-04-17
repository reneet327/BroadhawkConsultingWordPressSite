<?php

Bizpoint_Kirki::add_section( 'header_layout', array(
    'title'          => esc_html__( 'Header Layout', 'bizpoint' ),
    'description'    => esc_html__( 'Customize your website header layout here.', 'bizpoint' ),
    'panel'          => 'custom_layout',
    'capability'     => 'edit_theme_options',
    'theme_supports' => '',
) );


Bizpoint_Kirki::add_field( 'bizpoint_theme', array(
	'type'        => 'radio-image',
	'settings'    => 'bp_header_layout',
	'section'     => 'header_layout',
	'default'     => '1',
    'label'    => __( 'Select Header & Navbar Layout', 'bizpoint' ),
    'description'    => __( 'You can change colors in "Customize > Color Settings"', 'bizpoint' ),
    'choices'     => array(
		'1' => get_template_directory_uri() . '/images/header-layout-1.jpg',
		'2' => get_template_directory_uri() . '/images/header-layout-2.jpg',
		'3' => get_template_directory_uri() . '/images/header-layout-3.jpg',
	),
) );

Bizpoint_Kirki::add_field( 'bizpoint_theme', array(
	'type'        => 'checkbox',
	'settings'    => 'show_search_in_nav',
	'label'       => esc_attr__( 'Show search icon in navbar', 'bizpoint' ),
	'section'     => 'header_layout',
	'default'     => false,
) );


if( class_exists( 'Kirki' ) ) {
    Bizpoint_Kirki::add_field( 'bizpoint_theme', array(
    	'settings' => 'disable_header_sticky',
    	'label'    => __( 'Disable Sticky Header', 'bizpoint' ),
    	'section'  => 'header_layout',
    	'type'     => 'toggle',
    	'default'     => '0',
        'output' => array(
    		array(
    			'element'  => array( '.site-header' ),
    			'property' => 'position',
                'value_pattern' => 'relative',
                'exclude' => array( false ),
    		),
            array(
    			'element'  => array( '.admin-bar .bp-header-3' ),
    			'property' => 'top',
                'value_pattern' => '0px',
                'exclude' => array( false ),
    		),
            array(
    			'element'  => array( '.nav-bg' ),
    			'property' => 'position',
                'value_pattern' => 'relative',
                'exclude' => array( false ),
    		),
            array(
    			'element'  => array( '.admin-bar .nav-bg' ),
    			'property' => 'top',
                'value_pattern' => '0px',
                'exclude' => array( false ),
    		),
    	),
    ) );

    Bizpoint_Kirki::add_field( 'bizpoint_theme', array(
    	'type'        => 'spacing',
    	'settings'    => 'bp_header__spacing',
    	'label'       => esc_html__( 'Top-Bottom Spacing', 'bizpoint' ),
    	'section'     => 'header_layout',
    	'default'     => array(
    		'top'    => '10px',
            'bottom' => '10px',
            'left' => '0px',
    		'right' => '0px',
    	),
        'output' => array(
    		array(
    			'element'  => array( '.site-header' ),
    			'property' => 'padding'
    		),
    	),
    ) );
}



// segment title
Bizpoint_Kirki::add_field( 'bizpoint_theme', array(
	'type'        => 'custom',
	'settings'    => 'hr_line_header_lay_2',
	'section'     => 'header_layout',
	'default'     => '<hr> <h3 style="text-align: center">'. __( 'Background', 'bizpoint') .'</h3>',
) );

// Background
Bizpoint_Kirki::add_field( 'bizpoint_theme', array(
	'type'        => 'background',
	'settings'    => 'bp_header_background',
	'section'     => 'header_layout',
	'default'     => array(
        'background-image'      => '',
        'background-color'      => '#fff',
    ),
    'output' => array(
        array(
			'element'  => '.site-header',
			'property' => 'background',
		),
    ),
) );
