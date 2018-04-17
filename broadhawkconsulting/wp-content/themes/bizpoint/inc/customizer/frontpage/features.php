<?php

/**
* Features Section
*/
Bizpoint_Kirki::add_section( 'features_section', array(
    'title'          => __( 'Features Section', 'bizpoint' ),
    'panel'          => 'custom_frontpage', // Not typically needed.
    'capability'     => 'edit_theme_options',
    'theme_supports' => '', // Rarely needed.
) );

// Hide Section Checkbox
Bizpoint_Kirki::add_field( 'bizpoint_theme', array(
	'type'        => 'checkbox',
	'settings'    => 'show_features',
	'label'       => esc_attr__( 'Display Section', 'bizpoint' ),
	'section'     => 'features_section',
	'default'     => false,
) );

// segment title
Bizpoint_Kirki::add_field( 'bizpoint_theme', array(
	'type'        => 'custom',
	'settings'    => 'hr_line_features_1',
	'section'     => 'features_section',
	'default'     => '<hr> <h3 style="text-align: center">'. __( 'Content', 'bizpoint') .'</h3>',
) );

// Title
Bizpoint_Kirki::add_field( 'bizpoint_theme', array(
	'type'     => 'text',
	'settings' => 'features_title',
	'label'    => __( 'Section Title', 'bizpoint' ),
	'section'  => 'features_section',
    'partial_refresh' => array(
        'features_title' => array(
            'selector' => '.bp-section.features-section .section-title',
            'render_callback' => 'bizpoint_get_theme_mod'
        ),
    ),
) );

// Subtitle
Bizpoint_Kirki::add_field( 'bizpoint_theme', array(
	'type'     => 'textarea',
	'settings' => 'features_subtitle',
	'label'    => __( 'Section Subtitle', 'bizpoint' ),
	'section'  => 'features_section',
) );

// Add & Select Pages
Bizpoint_Kirki::add_field( 'bizpoint_theme', array(
	'type'        => 'repeater',
    'label'       => esc_attr__( 'Features', 'bizpoint' ),
	'section'     => 'features_section',
	'row_label' => array(
		'type' => 'text',
		'value' => esc_attr__('Feature Page', 'bizpoint' ),
	),
	'settings'    => 'feature_page_ids',
	'fields' => array(
		'feature_page' => array(
			'type'        => 'dropdown-pages',
			'label'       => esc_html__( 'Select Page', 'bizpoint' ),
			'default'     => '',
		),
	)
) );

Bizpoint_Kirki::add_field( 'bizpoint_theme', array(
	'type'     => 'toggle',
	'settings' => 'feature_title_link',
	'label'    => __( 'Link title to the page', 'bizpoint' ),
	'section'  => 'features_section',
) );

Bizpoint_Kirki::add_field( 'bizpoint_theme', array(
	'type'     => 'toggle',
	'settings' => 'feature_read_more_link',
	'label'    => __( 'Show read more link', 'bizpoint' ),
	'section'  => 'features_section',
) );
