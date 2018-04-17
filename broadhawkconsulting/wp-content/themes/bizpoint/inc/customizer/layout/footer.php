<?php

Bizpoint_Kirki::add_section( 'footer_layout', array(
    'title'          => esc_html__( 'Footer Layout', 'bizpoint' ),
    'description'    => esc_html__( 'Customize your website footer layout here.', 'bizpoint' ),
    'panel'          => 'custom_layout',
    'capability'     => 'edit_theme_options',
    'theme_supports' => '',
) );


Bizpoint_Kirki::add_field( 'bizpoint_theme', array(
	'type'        => 'radio-buttonset',
	'settings'    => 'bp_footer_layout',
	'section'     => 'footer_layout',
	'default'     => '1',
    'label'    => __( 'Select Footer Layout', 'bizpoint' ),
    'choices'     => array(
		'1' => __( 'Center', 'bizpoint' ),
		'2' => __( 'Left / Right', 'bizpoint' ),
	),
) );
