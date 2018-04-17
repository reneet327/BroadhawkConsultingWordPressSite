<?php

Bizpoint_Kirki::add_section( 'bp_blog_single_section', array(
    'title'          => esc_html__( 'Single Post', 'bizpoint' ),
    'description'    => esc_html__( 'Settings for post displyed on singular page.', 'bizpoint' ),
    'panel'          => 'bp_blog_panel',
    'capability'     => 'edit_theme_options',
    'theme_supports' => '',
) );


Bizpoint_Kirki::add_field( 'bizpoint_theme', array(
	'type'        => 'toggle',
	'settings'    => 'bp_single_thumbnail',
	'section'     => 'bp_blog_single_section',
	'default'     => '0',
    'label'    => __( 'Hide Featured Image', 'bizpoint' ),
) );
