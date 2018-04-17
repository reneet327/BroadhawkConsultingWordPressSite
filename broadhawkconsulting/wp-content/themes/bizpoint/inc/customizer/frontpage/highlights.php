<?php

/**
* Highlights Section
*/
Bizpoint_Kirki::add_section( 'highlights_section', array(
    'title'          => __( 'Highlights Section', 'bizpoint' ),
    'panel'          => 'custom_frontpage', // Not typically needed.
    'capability'     => 'edit_theme_options',
    'theme_supports' => '', // Rarely needed.
) );

// Hide Section Checkbox
Bizpoint_Kirki::add_field( 'bizpoint_theme', array(
	'type'        => 'checkbox',
	'settings'    => 'show_highlights',
	'label'       => esc_attr__( 'Display Section', 'bizpoint' ),
	'section'     => 'highlights_section',
	'default'     => false,
) );

// segment title
Bizpoint_Kirki::add_field( 'bizpoint_theme', array(
	'type'        => 'custom',
	'settings'    => 'hr_line_high_1',
	'section'     => 'highlights_section',
	'default'     => '<hr> <h3 style="text-align: center">'. __( 'Content', 'bizpoint') .'</h3>',
) );

// Title
Bizpoint_Kirki::add_field( 'bizpoint_theme', array(
	'type'     => 'text',
	'settings' => 'highlight_title',
	'label'    => __( 'Section Title', 'bizpoint' ),
	'section'  => 'highlights_section',
    'partial_refresh' => array(
        'highlight_title' => array(
            'selector' => '.bp-section.high-section .section-title',
            'render_callback' => 'bizpoint_get_theme_mod'
        ),
    ),
) );

// Subtitle
Bizpoint_Kirki::add_field( 'bizpoint_theme', array(
	'type'     => 'textarea',
	'settings' => 'highlight_subtitle',
	'label'    => __( 'Section Subtitle', 'bizpoint' ),
	'section'  => 'highlights_section',
) );

Bizpoint_Kirki::add_field( 'bizpoint_theme', array(
	'type'        => 'dropdown-pages',
	'settings'    => 'high_page_1',
	'label'       => esc_attr__( 'Select Highlight Page 1', 'bizpoint' ),
	'section'     => 'highlights_section',
) );

Bizpoint_Kirki::add_field( 'bizpoint_theme', array(
	'type'        => 'dropdown-pages',
	'settings'    => 'high_page_2',
	'label'       => esc_attr__( 'Select Highlight Page 2', 'bizpoint' ),
	'section'     => 'highlights_section',
) );

Bizpoint_Kirki::add_field( 'bizpoint_theme', array(
	'type'        => 'dropdown-pages',
	'settings'    => 'high_page_3',
	'label'       => esc_attr__( 'Select Highlight Page 3', 'bizpoint' ),
	'section'     => 'highlights_section',
) );

Bizpoint_Kirki::add_field( 'bizpoint_theme', array(
	'type'     => 'toggle',
	'settings' => 'highlight_title_link',
	'label'    => __( 'Link title to the page', 'bizpoint' ),
	'section'  => 'highlights_section',
) );

Bizpoint_Kirki::add_field( 'bizpoint_theme', array(
	'type'     => 'toggle',
	'settings' => 'highlight_read_more_link',
	'label'    => __( 'Show read more link', 'bizpoint' ),
	'section'  => 'highlights_section',
) );
