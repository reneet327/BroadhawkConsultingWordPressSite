<?php

Bizpoint_Kirki::add_panel( 'custom_layout', array(
    'priority'    => 21,
    'title'       => esc_html__( 'Layout Settings', 'bizpoint' ),
) );

include( get_template_directory() . '/inc/customizer/layout/site.php');
include( get_template_directory() . '/inc/customizer/layout/header.php');
include( get_template_directory() . '/inc/customizer/layout/footer.php');
