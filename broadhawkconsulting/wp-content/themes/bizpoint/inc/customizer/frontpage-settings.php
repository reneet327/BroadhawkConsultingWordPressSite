<?php

Bizpoint_Kirki::add_panel( 'custom_frontpage', array(
    'priority'    => 22,
    'title'       => esc_html__( 'Frontpage Settings', 'bizpoint' ),
    'active_callback' => 'bizpoint_is_default_frontpage'
) );


include( get_template_directory() . '/inc/customizer/frontpage/cover.php');
include( get_template_directory() . '/inc/customizer/frontpage/highlights.php');
include( get_template_directory() . '/inc/customizer/frontpage/features.php');
include( get_template_directory() . '/inc/customizer/frontpage/content.php');
include( get_template_directory() . '/inc/customizer/frontpage/cta.php');
include( get_template_directory() . '/inc/customizer/frontpage/loading.php');
