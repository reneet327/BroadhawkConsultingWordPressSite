<?php

Bizpoint_Kirki::add_section( 'custom_typography', array(
    'title'          => __( 'Typography Settings', 'bizpoint' ),
    'description'    => __( 'Customize your website\'s typography here.', 'bizpoint' ),
    'panel'          => '', // Not typically needed.
    'priority'       => 22,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '', // Rarely needed.
) );


if( defined( 'ELEMENTOR_VERSION' ) ) {
    if( get_option( 'elementor_disable_typography_schemes' ) != 'yes' ) {
        Bizpoint_Kirki::add_field( 'bizpoint_theme', array(
        	'type'        => 'custom',
        	'settings'    => 'typo_elementor',
        	'section'     => 'custom_typography',
        	'default'     => '<div class="notice notice-error"><h4><em>'. __( 'Go to "Elementor > Settings" page on admin dashboard and check "Disable Default Fonts" setting. Otherwise, following typography settings will not work on the page built using Elementor. ', 'bizpoint') .'<em></h4></div>',
        ) );
    }
}

Bizpoint_Kirki::add_field( 'bizpoint_theme', array(
	'settings' => 'body_typography',
	'label'    => __( 'Body Typography', 'bizpoint' ),
	'section'  => 'custom_typography',
	'type'     => 'typography',
    'default'     => array(
		'font-family'    => 'Open Sans',
		'variant'        => 'regular',
		// 'color'          => '#212529',
	),
	'output'      => array(
		array(
			'element' => array( 'body', 'button', 'input', 'optgroup', 'select', 'textarea' ),
		),
	),
) );

Bizpoint_Kirki::add_field( 'bizpoint_theme', array(
	'settings' => 'heading_typography',
	'label'    => __( 'Heading Typography', 'bizpoint' ),
	'section'  => 'custom_typography',
	'type'     => 'typography',
    'default'     => array(
		'font-family'    => 'Montserrat',
		'variant'        => '500',
		'color'          => '#212529',
	),
	'output'      => array(
		array(
			'element' => array( 'h1', 'h2', 'h3', 'h4', 'h5', 'h6', '.h1', '.h2', '.h3', '.h4', '.h5', '.h6', '.main-navigation li', '.slicknav_menu' ),
		),
	),
) );
