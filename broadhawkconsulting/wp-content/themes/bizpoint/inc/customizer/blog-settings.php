<?php

Bizpoint_Kirki::add_panel( 'bp_blog_panel', array(
    'priority'    => 40,
    'title'       => esc_html__( 'Blog Settings', 'bizpoint' ),
) );

include( get_template_directory() . '/inc/customizer/blog/home.php');
include( get_template_directory() . '/inc/customizer/blog/single.php');
include( get_template_directory() . '/inc/customizer/blog/archive.php');
