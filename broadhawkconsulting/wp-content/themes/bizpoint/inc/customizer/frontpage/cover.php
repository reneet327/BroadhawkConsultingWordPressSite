<?php

/**
* Cover Section
*/
Bizpoint_Kirki::add_section( 'cover_section', array(
    'title'          => __( 'Cover Section', 'bizpoint' ),
    'panel'          => 'custom_frontpage', // Not typically needed.
    'capability'     => 'edit_theme_options',
    'theme_supports' => '', // Rarely needed.
) );

Bizpoint_Kirki::add_field( 'bizpoint_theme', array(
    'type'        => 'custom',
    'settings'    => 'bp_cover_notice',
    'section'     => 'cover_section',
    'default'     => '<div class="notice notice-error"><h4><em>'. __( 'These settings will not work if you don\'t set static homepage.', 'bizpoint') .'<em><br><a href="javascript:wp.customize.control( \'show_on_front\' ).focus();">' . __( 'Change Setting', 'bizpoint' ) . '</a></h4></div>',
    'active_callback' => 'bizpoint_is_not_static_frontpage'
) );

// segment title
Bizpoint_Kirki::add_field( 'bizpoint_theme', array(
	'type'        => 'custom',
	'settings'    => 'hr_line_cover_1',
	'section'     => 'cover_section',
	'default'     => '<hr> <h3 style="text-align: center">'. __( 'Content', 'bizpoint') .'</h3>',
) );

// Title
Bizpoint_Kirki::add_field( 'bizpoint_theme', array(
	'type'     => 'text',
	'settings' => 'cover_title',
	'label'    => __( 'Title', 'bizpoint' ),
	'section'  => 'cover_section',
	'default'  => esc_attr__( 'This is a customizer friendly front page.', 'bizpoint' ),
    'tooltip' => esc_html__( 'Describe your business in one line.', 'bizpoint' ),
    'sanitize_callback' => 'wp_kses_post',
    'partial_refresh' => array(
        'cover_section_title' => array(
            'selector' => '.bp-cover-section h1',
            'render_callback' => 'bizpoint_get_theme_mod'
        ),
    ),
) );

// Subtitle
Bizpoint_Kirki::add_field( 'bizpoint_theme', array(
	'type'     => 'textarea',
	'settings' => 'cover_subtitle',
	'label'    => __( 'Subtitle', 'bizpoint' ),
	'section'  => 'cover_section',
	'default'  => esc_attr__( 'BizPoint is a perfect WordPress theme for your business website. It is fast, secure, search engine friendly and easy to use. It is fully responsive and works well on any device. The theme is optimized for better performance.', 'bizpoint' ),
    'sanitize_callback' => 'wp_kses_post',
) );

// Hide Button Checkbox
Bizpoint_Kirki::add_field( 'bizpoint_theme', array(
	'type'        => 'checkbox',
	'settings'    => 'cover_btn_hide',
	'label'       => esc_attr__( 'Hide Button', 'bizpoint' ),
	'section'     => 'cover_section',
	'default'     => false,
) );

// Button Text
Bizpoint_Kirki::add_field( 'bizpoint_theme', array(
	'type'     => 'text',
	'settings' => 'cover_btn_text',
	'label'    => __( 'Button Text', 'bizpoint' ),
	'section'  => 'cover_section',
	'default'  => esc_attr__( 'Download Now', 'bizpoint' )
) );

// Button Link
Bizpoint_Kirki::add_field( 'bizpoint_theme', array(
	'type'     => 'link',
	'settings' => 'cover_btn_link',
	'label'    => __( 'Button Link', 'bizpoint' ),
	'section'  => 'cover_section',
	'default'  => esc_url( 'https://downloads.wordpress.org/theme/bizpoint.zip', 'bizpoint' )
) );


// segment title
Bizpoint_Kirki::add_field( 'bizpoint_theme', array(
	'type'        => 'custom',
	'settings'    => 'hr_line_cover_2',
	'section'     => 'cover_section',
	'default'     => '<hr> <h3 style="text-align: center">'. __( 'Background', 'bizpoint') .'</h3>',
) );

// Background image
Bizpoint_Kirki::add_field( 'bizpoint_theme', array(
	'type'        => 'background',
	'settings'    => 'cover_background',
	'label'       => esc_attr__( 'Background', 'bizpoint' ),
	'section'     => 'cover_section',
	'default'     => array(
		'background-image'      => get_template_directory_uri() . '/images/default-cover-bg.jpg',
		'background-repeat'     => 'no-repeat',
		'background-position'   => 'center top',
		'background-size'       => 'cover',
		'background-attachment' => 'scroll',
	),
    'output' => array(
        array(
			'element'  => '.bp-cover-section',
			'property' => 'background',
		),
    )
) );

// Background Overlay
Bizpoint_Kirki::add_field( 'bizpoint_theme', array(
	'type'        => 'color',
	'settings'    => 'cover_bg_overlay',
	'label'       => __( 'Overlay Color (With Opacity)', 'bizpoint' ),
	'description' => esc_attr__( 'Set opacity to 1 if you don\'t want image to be displayed.', 'bizpoint' ),
	'section'     => 'cover_section',
	'default'     => 'rgba(50,50,50,0.7)',
	'choices'     => array(
		'alpha' => true,
	),
    'output' => array(
        array(
			'element'  => '.bp-cover-section .cover-overlay',
			'property' => 'background',
		),
    )
) );

if( class_exists( 'Kirki' ) ) {
    // Padding top bottom
    Bizpoint_Kirki::add_field( 'bizpoint_theme', array(
    	'type'        => 'spacing',
    	'settings'    => 'cover_spacing',
    	'label'       => esc_html__( 'Top-Bottom Spacing', 'bizpoint' ),
    	'section'     => 'cover_section',
    	'default'     => array(
    		'top'    => '120px',
            'bottom' => '120px',
            'left'   => '0px',
    		'right'  => '0px',
    	),
        'output' => array(
    		array(
    			'element'  => array( '.bp-cover-section .cover-overlay' ),
    			'property' => 'padding'
    		),
    	),
    ) );
}
