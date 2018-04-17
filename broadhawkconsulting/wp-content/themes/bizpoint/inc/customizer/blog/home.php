<?php

Bizpoint_Kirki::add_section( 'bp_blog_home_section', array(
    'title'          => esc_html__( 'Blog Home Page', 'bizpoint' ),
    'description'    => esc_html__( 'Settings for posts displyed on blog home page.', 'bizpoint' ),
    'panel'          => 'bp_blog_panel',
    'capability'     => 'edit_theme_options',
    'theme_supports' => '',
) );

Bizpoint_Kirki::add_field( 'bizpoint_theme', array(
    'type'        => 'custom',
    'settings'    => 'bp_blog_home_notice',
    'section'     => 'bp_blog_home_section',
    'default'     => '<div class="notice notice-error"><h4><em>'. __( 'Navigate to blog homepage on live preview to see effets of these settings.', 'bizpoint') .'<em></h4></div>',
    'active_callback' => 'bizpoint_is_not_home'
) );


Bizpoint_Kirki::add_field( 'bizpoint_theme', array(
	'type'        => 'toggle',
	'settings'    => 'bp_home_full_post',
	'section'     => 'bp_blog_home_section',
	'default'     => '0',
    'label'    => __( 'Display Full Post', 'bizpoint' ),
) );

Bizpoint_Kirki::add_field( 'bizpoint_theme', array(
	'type'        => 'toggle',
	'settings'    => 'bp_home_thumbnail',
	'section'     => 'bp_blog_home_section',
	'default'     => '0',
    'label'    => __( 'Hide Featured Image', 'bizpoint' ),
) );
