<?php

Bizpoint_Kirki::add_config( 'bizpoint_theme', array(
	'capability'    => 'edit_theme_options',
	'option_type'   => 'theme_mod',
) );


// Add settings
include( get_template_directory() . '/inc/customizer/layout-settings.php' );
include( get_template_directory() . '/inc/customizer/site-identity-settings.php' );
include( get_template_directory() . '/inc/customizer/frontpage-settings.php' );
include( get_template_directory() . '/inc/customizer/color-settings.php' );
include( get_template_directory() . '/inc/customizer/typography-settings.php' );
include( get_template_directory() . '/inc/customizer/blog-settings.php' );
// include( get_template_directory() . '/inc/customizer/footer-settings.php');

// include( get_template_directory() . '/inc/customizer/general-option.php');



/**
* Styling Customizer
*/
function bizpoint_customizer_css()
{
	wp_enqueue_style('bizpoint-customizer-css', get_stylesheet_directory_uri() . '/inc/customizer/customizer.css');
}
add_action('customize_controls_print_styles', 'bizpoint_customizer_css');
