<?php

Bizpoint_Kirki::add_section( 'bp_blog_archive_section', array(
    'title'          => esc_html__( 'Archive Pages', 'bizpoint' ),
    'description'    => esc_html__( 'Settings for posts displyed on archive pages like category, author, month, year etc.', 'bizpoint' ),
    'panel'          => 'bp_blog_panel',
    'capability'     => 'edit_theme_options',
    'theme_supports' => '',
) );


Bizpoint_Kirki::add_field( 'bizpoint_theme', array(
	'type'        => 'toggle',
	'settings'    => 'bp_archive_full_post',
	'section'     => 'bp_blog_archive_section',
	'default'     => '0',
    'label'    => __( 'Display Full Post', 'bizpoint' ),
) );

Bizpoint_Kirki::add_field( 'bizpoint_theme', array(
	'type'        => 'toggle',
	'settings'    => 'bp_archive_thumbnail',
	'section'     => 'bp_blog_archive_section',
	'default'     => '0',
    'label'    => __( 'Hide Featured Image', 'bizpoint' ),
) );
