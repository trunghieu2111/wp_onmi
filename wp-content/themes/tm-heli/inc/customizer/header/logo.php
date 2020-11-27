<?php
$section  = 'header_logo';
$priority = 1;

Kirki::add_field( 'thememove', array(
	'type'            => 'image',
	'settings'        => 'logo',
	'label'           => esc_html__( 'Normal Logo', 'tm-heli' ),
	'description'     => esc_html__( 'Choose a default logo image to display', 'tm-heli' ),
	'section'         => $section,
	'priority'        => $priority ++,
	'default'         => 'http://heli.thememove.com/data/images/logo.svg',
	'partial_refresh' => array(
		'logo' => array(
			'selector'        => '.site-branding',
			'render_callback' => 'tm_heli_logo',
		),
	),
) );

Kirki::add_field( 'thememove', array(
	'type'            => 'image',
	'settings'        => 'logo_sticky',
	'label'           => esc_html__( 'Sticky Logo', 'tm-heli' ),
	'description'     => esc_html__( 'Choose a logo image for sticky menu', 'tm-heli' ),
	'section'         => $section,
	'priority'        => $priority ++,
	'partial_refresh' => array(
		'logo' => array(
			'selector'        => '.site-branding',
			'render_callback' => 'tm_heli_logo',
		),
	),
) );

Kirki::add_field( 'thememove', array(
	'type'        => 'image',
	'settings'    => 'logo_retina',
	'label'       => esc_html__( 'Retina Logo', 'tm-heli' ),
	'description' => esc_html__( 'Choose a image for retina logo', 'tm-heli' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => '',
) );
