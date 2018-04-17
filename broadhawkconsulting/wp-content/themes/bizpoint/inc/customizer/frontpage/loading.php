<?php

/**
* Loading Animation Section
*/
Bizpoint_Kirki::add_section( 'loading_section', array(
    'title'          => __( 'Loading Animation', 'bizpoint' ),
    'panel'          => 'custom_frontpage', // Not typically needed.
    'capability'     => 'edit_theme_options',
    'theme_supports' => '', // Rarely needed.
) );

// Hide Section Checkbox
Bizpoint_Kirki::add_field( 'bizpoint_theme', array(
	'type'        => 'checkbox',
	'settings'    => 'disable_loading_animation',
	'label'       => esc_attr__( 'Disable loading animation', 'bizpoint' ),
    'tooltip'     => __( 'Check this box to disable the loading screen disaplyed on the front page. Check preview directly on website.', 'bizpoint' ),
	'section'     => 'loading_section',
	'default'     => false,
) );
