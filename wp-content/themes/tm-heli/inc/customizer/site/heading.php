<?php
$section  = 'site_heading';
$priority = 1;

Kirki::add_field( 'thememove', array(
	'type'        => 'typography',
	'settings'    => 'heading_font',
	'description' => esc_html__( 'Set up font settings for heading tag', 'tm-heli' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => array(
		'font-family'    => TM_HELI_PRIMARY_FONT,
		'variant'        => '300',
		'line-height'    => '1.3',
		'letter-spacing' => '0.1em',
		'subsets'        => array( 'latin-ext' ),
	),
	'output'      => array(
		array(
			'element' => 'h1,h2,h3,h4,h5,h6',
		),
	),
) );

Kirki::add_field( 'thememove', array(
	'type'        => 'slider',
	'settings'    => 'h1_font_size',
	'label'       => esc_html__( 'Font size', 'tm-heli' ),
	'description' => esc_html__( 'H1', 'tm-heli' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => 28,
	'choices'     => array(
		'min'  => 10,
		'max'  => 90,
		'step' => 1,
	),
	'transport'   => 'auto',
	'output'      => array(
		array(
			'element'  => 'h1',
			'property' => 'font-size',
			'units'    => 'px',
		),
	),
) );

Kirki::add_field( 'thememove', array(
	'type'        => 'slider',
	'settings'    => 'h2_font_size',
	'description' => esc_html__( 'H2', 'tm-heli' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => 24,
	'choices'     => array(
		'min'  => 10,
		'max'  => 90,
		'step' => 1,
	),
	'transport'   => 'auto',
	'output'      => array(
		array(
			'element'  => 'h2',
			'property' => 'font-size',
			'units'    => 'px',
		),
	),
) );

Kirki::add_field( 'thememove', array(
	'type'        => 'slider',
	'settings'    => 'h3_font_size',
	'description' => esc_html__( 'H3', 'tm-heli' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => 20,
	'choices'     => array(
		'min'  => 10,
		'max'  => 90,
		'step' => 1,
	),
	'transport'   => 'auto',
	'output'      => array(
		array(
			'element'  => 'h3',
			'property' => 'font-size',
			'units'    => 'px',
		),
	),
) );

Kirki::add_field( 'thememove', array(
	'type'        => 'slider',
	'settings'    => 'h4_font_size',
	'description' => esc_html__( 'H4', 'tm-heli' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => 16,
	'choices'     => array(
		'min'  => 10,
		'max'  => 90,
		'step' => 1,
	),
	'transport'   => 'auto',
	'output'      => array(
		array(
			'element'  => 'h4',
			'property' => 'font-size',
			'units'    => 'px',
		),
	),
) );

Kirki::add_field( 'thememove', array(
	'type'        => 'slider',
	'settings'    => 'h5_font_size',
	'description' => esc_html__( 'H5', 'tm-heli' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => 14,
	'choices'     => array(
		'min'  => 10,
		'max'  => 90,
		'step' => 1,
	),
	'transport'   => 'auto',
	'output'      => array(
		array(
			'element'  => 'h5',
			'property' => 'font-size',
			'units'    => 'px',
		),
	),
) );

Kirki::add_field( 'thememove', array(
	'type'        => 'slider',
	'settings'    => 'h6_font_size',
	'description' => esc_html__( 'H6', 'tm-heli' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => 12,
	'choices'     => array(
		'min'  => 10,
		'max'  => 90,
		'step' => 1,
	),
	'transport'   => 'auto',
	'output'      => array(
		array(
			'element'  => 'h6',
			'property' => 'font-size',
			'units'    => 'px',
		),
	),
) );

Kirki::add_field( 'thememove', array(
	'type'      => 'color',
	'settings'  => 'heading_color',
	'label'     => esc_html__( 'Color', 'tm-heli' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => '#111',
	'transport' => 'auto',
	'output'    => array(
		array(
			'element'  => 'h1,h2,h3,h4,h5,h6',
			'property' => 'color',
		),
	),
) );
