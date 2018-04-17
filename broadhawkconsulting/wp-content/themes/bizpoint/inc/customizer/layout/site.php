<?php

Bizpoint_Kirki::add_section( 'site_layout', array(
    'title'          => esc_html__( 'Site Layout', 'bizpoint' ),
    'description'    => esc_html__( 'Customize your site layout here.', 'bizpoint' ),
    'panel'          => 'custom_layout',
    'capability'     => 'edit_theme_options',
    'theme_supports' => '',
) );



// segment title
Bizpoint_Kirki::add_field( 'bizpoint_theme', array(
	'type'        => 'custom',
	'settings'    => 'hr_line_layout_1',
	'section'     => 'site_layout',
	'default'     => '<hr> <h3 style="text-align: center">'. __( 'Width Settings', 'bizpoint') .'</h3>',
) );

Bizpoint_Kirki::add_field( 'bizpoint_theme', array(
	'settings' => 'boxed_site',
	'label'    => esc_html__( 'Boxed Layout', 'bizpoint' ),
	'section'  => 'site_layout',
	'type'     => 'toggle',
	'default'  => '0',
    'tooltip' => esc_html__( 'Select this option to display site within a box.', 'bizpoint' ),
    'description' => esc_html__( 'Depending on your screen size, you might need to hide controls to see effects of this change. Click on the "Hide Controls" button at bottom left corner. ', 'bizpoint' ),
) );



Bizpoint_Kirki::add_field( 'bizpoint_theme', array(
	'settings' => 'container_width',
	'label'    => __( 'Container Width (in px)', 'bizpoint' ),
	'section'  => 'site_layout',
	'type'     => 'slider',
    'tooltip' => esc_html__( 'You can increase or decrease container\'s width using this slider.', 'bizpoint' ),
    'default'     => 1140,
	'choices'     => array(
		'min'  => '1080',
		'max'  => '1400',
		'step' => '10',
	),
    'output' => array(
		array(
			'element'  => '.container',
			'property' => 'max-width',
			'units'    => 'px',
		),
        array(
			'element'  => '.elementor-section.elementor-section-boxed>.elementor-container',
			'property' => 'max-width',
			'units'    => 'px',
		),
	),
) );

// Sidebar width
Bizpoint_Kirki::add_field( 'bizpoint_theme', array(
	'settings' => 'sidebar_width',
	'label'    => esc_html__( 'Sidebar Width (in %)', 'bizpoint' ),
	'section'  => 'site_layout',
	'type'     => 'slider',
    'tooltip' => esc_html__( 'Check your blog page for this setting. Sidebars are not displyed everywhere.', 'bizpoint' ),
    'default'     => 25,
	'choices'     => array(
		'min'  => '20',
		'max'  => '50',
		'step' => '1',
	),
    'output' => array(
		array(
			'element'  => '.widget-area.col-md-3',
			'property' => 'max-width',
			'units'    => '%',
		),
        array(
			'element'  => '.widget-area.col-md-3',
			'property' => 'flex-basis',
			'units'    => '%',
		),
        array(
			'element'  => '.content-area.col-md-9',
			'property' => 'max-width',
            'value_pattern' => 'calc(100% - $%)'
		),
        array(
			'element'  => '.content-area.col-md-9',
			'property' => 'flex-basis',
            'value_pattern' => 'calc(100% - $%)'
		),
	),
) );


// segment title
Bizpoint_Kirki::add_field( 'bizpoint_theme', array(
	'type'        => 'custom',
	'settings'    => 'hr_line_layout_2',
	'section'     => 'site_layout',
	'default'     => '<hr> <h3>'. __( 'Background Settings', 'bizpoint') .'</h3><p><em>'. __( 'Remove background image if you want just a background color to be displayed.', 'bizpoint') .'</em></p>',
    'active_callback' => array(
        array(
            'setting'  		=> 'boxed_site',
            'operator' 		=> '==',
            'value'    		=> '1',
        ),
    ),
) );

// Background image
Bizpoint_Kirki::add_field( 'bizpoint_theme', array(
	'type'        => 'background',
	'settings'    => 'boxed_site_background',
	'section'     => 'site_layout',
	'default'     => array(
		'background-image'      => get_template_directory_uri() . '/images/default-body-bg.png',
        'background-repeat'     => 'repeat',
		'background-color'     => '#424242',
	),
    'output' => array(
        array(
			'element'  => 'body',
			'property' => 'background',
		),
    ),
    'active_callback' => array(
        array(
            'setting'  		=> 'boxed_site',
            'operator' 		=> '==',
            'value'    		=> '1',
        ),
    ),
) );
