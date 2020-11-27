<?php
/**
 * Site General
 * ================
 */
$section  = 'site_breadcrumb';
$priority = 1;

Kirki::add_field( 'thememove', array(
	'type'        => 'toggle',
	'settings'    => 'breadcrumb_enable',
	'label'       => esc_attr__( 'Breadcrumb', 'tm-heli' ),
	'description' => esc_attr__( 'Enabling this option will display breadcrumb on every page', 'tm-heli' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => 1,
) );

Kirki::add_field( 'thememove', array(
	'type'            => 'text',
	'settings'        => 'breadcrumb_home_text',
	'label'           => esc_attr__( '"Home" text', 'tm-heli' ),
	'section'         => $section,
	'priority'        => $priority ++,
	'default'         => 'Home',
	'active_callback' => array(
		array(
			'settings' => 'breadcrumb_enable',
			'operator' => '==',
			'value'    => 1,
		),
	),
) );

Kirki::add_field( 'thememove', array(
	'type'            => 'color',
	'settings'        => 'breadcrumb_text',
	'label'           => esc_attr__( 'Text', 'tm-heli' ),
	'description'     => esc_attr__( 'Choose a color for link', 'tm-heli' ),
	'section'         => $section,
	'priority'        => $priority ++,
	'default'         => '#A6A6AC',
	'transport'       => 'auto',
	'output'          => array(
		array(
			'element'  => '.tm_bread_crumb',
			'property' => 'color',
		),
	),
	'active_callback' => array(
		array(
			'settings' => 'breadcrumb_enable',
			'operator' => '==',
			'value'    => 1,
		),
	),
) );

Kirki::add_field( 'thememove', array(
	'type'            => 'color',
	'settings'        => 'breadcrumb_link',
	'label'           => esc_attr__( 'Link', 'tm-heli' ),
	'description'     => esc_attr__( 'Choose a color for link', 'tm-heli' ),
	'section'         => $section,
	'priority'        => $priority ++,
	'default'         => '#A6A6AC',
	'transport'       => 'auto',
	'output'          => array(
		array(
			'element'  => '.tm_bread_crumb a',
			'property' => 'color',
		),
	),
	'active_callback' => array(
		array(
			'settings' => 'breadcrumb_enable',
			'operator' => '==',
			'value'    => 1,
		),
	),
) );

Kirki::add_field( 'thememove', array(
	'type'            => 'color',
	'settings'        => 'breadcrumb_link_hover',
	'description'     => esc_attr__( 'Choose a color for link on hover', 'tm-heli' ),
	'section'         => $section,
	'priority'        => $priority ++,
	'default'         => '#ffffff',
	'transport'       => 'auto',
	'output'          => array(
		array(
			'element'  => '.tm_bread_crumb a:hover',
			'property' => 'color',
		),
	),
	'active_callback' => array(
		array(
			'settings' => 'breadcrumb_enable',
			'operator' => '==',
			'value'    => 1,
		),
	),
) );
