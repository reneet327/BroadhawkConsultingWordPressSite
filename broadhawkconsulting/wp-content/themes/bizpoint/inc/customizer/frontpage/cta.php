<?php

/**
* Features Section
*/
Bizpoint_Kirki::add_section( 'cta_section', array(
    'title'          => __( 'Call-to-action Section', 'bizpoint' ),
    'panel'          => 'custom_frontpage', // Not typically needed.
    'capability'     => 'edit_theme_options',
    'theme_supports' => '', // Rarely needed.
) );

// Hide Section Checkbox
Bizpoint_Kirki::add_field( 'bizpoint_theme', array(
	'type'        => 'checkbox',
	'settings'    => 'show_cta',
	'label'       => esc_attr__( 'Display Section', 'bizpoint' ),
	'section'     => 'cta_section',
	'default'     => false,
) );

// segment title
Bizpoint_Kirki::add_field( 'bizpoint_theme', array(
	'type'        => 'custom',
	'settings'    => 'hr_line_cta_1',
	'section'     => 'cta_section',
	'default'     => '<hr> <h3 style="text-align: center">'. __( 'Content', 'bizpoint') .'</h3>',
) );

// Title
Bizpoint_Kirki::add_field( 'bizpoint_theme', array(
	'type'     => 'text',
	'settings' => 'cta_text',
	'label'    => __( 'CTA Text', 'bizpoint' ),
	'section'  => 'cta_section',
    'partial_refresh' => array(
        'cta_text' => array(
            'selector' => '.bp-cta-section h5',
            'render_callback' => 'bizpoint_get_theme_mod'
        ),
    ),
) );

// Button Text
Bizpoint_Kirki::add_field( 'bizpoint_theme', array(
	'type'     => 'text',
	'settings' => 'cta_btn_text',
	'label'    => __( 'Button Text', 'bizpoint' ),
	'section'  => 'cta_section',
) );

// Button Link
Bizpoint_Kirki::add_field( 'bizpoint_theme', array(
	'type'     => 'link',
	'settings' => 'cta_btn_link',
	'label'    => __( 'Button Link', 'bizpoint' ),
	'section'  => 'cta_section',
) );



// segment title
Bizpoint_Kirki::add_field( 'bizpoint_theme', array(
	'type'        => 'custom',
	'settings'    => 'hr_line_cta_2',
	'section'     => 'cta_section',
	'default'     => '<hr> <h3 style="text-align: center">'. __( 'Background', 'bizpoint') .'</h3>',
) );

// Background image
Bizpoint_Kirki::add_field( 'bizpoint_theme', array(
	'type'        => 'background',
	'settings'    => 'cta_background',
	'label'       => esc_attr__( 'Background', 'bizpoint' ),
	'section'     => 'cta_section',
	'default'     => array(
		'background-image'      => get_template_directory_uri() . '/images/default-cover-bg.jpg',
		'background-repeat'     => 'no-repeat',
		'background-position'   => 'center top',
		'background-size'       => 'cover',
		'background-attachment' => 'scroll',
	),
    'output' => array(
        array(
			'element'  => '.bp-cta-section',
			'property' => 'background',
		),
    )
) );

// Background Overlay
Bizpoint_Kirki::add_field( 'bizpoint_theme', array(
	'type'        => 'color',
	'settings'    => 'cta_bg_overlay',
	'label'       => __( 'Overlay Color (With Opacity)', 'bizpoint' ),
	'description' => esc_attr__( 'Set opacity to 1 if you don\'t want image to be displayed.', 'bizpoint' ),
	'section'     => 'cta_section',
	'default'     => 'rgba(50,50,50,0.7)',
	'choices'     => array(
		'alpha' => true,
	),
    'output' => array(
        array(
			'element'  => '.bp-cta-section .cta-overlay',
			'property' => 'background',
		),
    )
) );

if( class_exists( 'Kirki' ) ) {
    // Padding top bottom
    Bizpoint_Kirki::add_field( 'bizpoint_theme', array(
    	'type'        => 'spacing',
    	'settings'    => 'cta_spacing',
    	'label'       => esc_html__( 'Top-Bottom Spacing', 'bizpoint' ),
    	'section'     => 'cta_section',
    	'default'     => array(
    		'top'    => '60px',
    		'bottom' => '60px',
            'left'   => '0px',
            'right'  => '0px',
    	),
        'output' => array(
    		array(
    			'element'  => array( '.bp-cta-section .cta-overlay' ),
    			'property' => 'padding'
    		),
    	),
    ) );
}
