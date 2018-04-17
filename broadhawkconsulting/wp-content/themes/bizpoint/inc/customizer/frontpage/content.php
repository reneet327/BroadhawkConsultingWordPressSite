<?php

/**
* Content Section
*/
bizpoint_Kirki::add_section( 'content_section', array(
    'title'          => __( 'Main Content Section', 'bizpoint' ),
    'description'    => __( 'You will have edit this content on the page that you have selected as a front page.', 'bizpoint' ),
    'panel'          => 'custom_frontpage', // Not typically needed.
    'capability'     => 'edit_theme_options',
    'theme_supports' => '', // Rarely needed.
) );

// Hide Section Checkbox
bizpoint_Kirki::add_field( 'bizpoint_theme', array(
	'type'        => 'checkbox',
	'settings'    => 'hide_content',
	'label'       => esc_attr__( 'Hide Section', 'bizpoint' ),
	'section'     => 'content_section',
	'default'     => false,
) );

// segment title
bizpoint_Kirki::add_field( 'bizpoint_theme', array(
	'type'        => 'custom',
	'settings'    => 'hr_line_content_1',
	'section'     => 'content_section',
	'default'     => '<hr> <h3 style="text-align: center">'. __( 'Content', 'bizpoint') .'</h3>',
) );

// Title
bizpoint_Kirki::add_field( 'bizpoint_theme', array(
	'type'     => 'text',
	'settings' => 'content_title',
	'label'    => __( 'Section Title', 'bizpoint' ),
	'section'  => 'content_section',
    'default'  => __( 'Main Content', 'bizpoint' ),
    'partial_refresh' => array(
        'content_title' => array(
            'selector' => '.bp-section.content-section .section-title',
            'render_callback' => 'bizpoint_get_theme_mod'
        ),
    ),
) );

// Subtitle
bizpoint_Kirki::add_field( 'bizpoint_theme', array(
	'type'     => 'textarea',
	'settings' => 'content_subtitle',
	'label'    => __( 'Section Subtitle', 'bizpoint' ),
	'section'  => 'content_section',
    'default'  => __( 'This is the main content of the page. You can edit this on the page. Section title & subtitle can be changed in Customizer.', 'bizpoint' ),
) );
