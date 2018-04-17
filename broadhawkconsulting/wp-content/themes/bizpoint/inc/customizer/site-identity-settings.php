<?php

Bizpoint_Kirki::add_field( 'bizpoint_theme', array(
	'settings' => 'logo_height',
	'label'    => __( 'Logo Height (in px)', 'bizpoint' ),
	'section'  => 'title_tagline',
	'type'     => 'number',
	'priority' => 8,
	'default'     => 50,
    'choices'     => array(
		'min'  => 25,
		'max'  => 100,
		'step' => 1,
	),
    'output' => array(
        array(
			'element'  => '.custom-logo',
			'property' => 'height',
			'units'    => 'px',
		),
        array(
			'element'  => '.custom-logo',
			'property' => 'width',
            'value_pattern' => 'auto',
		)
    )
) );

Bizpoint_Kirki::add_field( 'bizpoint_theme', array(
	'settings' => 'hide_site_title',
	'label'    => __( 'Hide Site Title', 'bizpoint' ),
	'section'  => 'title_tagline',
	'type'     => 'toggle',
	'priority' => 10,
	'default'     => '0',
	'tooltip' => __( 'Select this option to hide site title.', 'bizpoint' ),
) );

Bizpoint_Kirki::add_field( 'bizpoint_theme', array(
	'settings' => 'show_site_description',
	'label'    => __( 'Show Site Description', 'bizpoint' ),
	'section'  => 'title_tagline',
	'type'     => 'toggle',
	'priority' => 11,
	'default'     => '0',
	'tooltip' => __( 'Select this option to show site description below title.', 'bizpoint' ),
) );
