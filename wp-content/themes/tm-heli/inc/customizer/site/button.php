<?php
$section  = 'site_button';
$priority = 1;

Kirki::add_field( 'thememove', array(
	'type'        => 'typography',
	'settings'    => 'button_font',
	'description' => esc_html__( 'Set up font settings for body text', 'tm-heli' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'transport'   => 'auto',
	'default'     => array(
		'font-family'    => TM_HELI_PRIMARY_FONT,
		'variant'        => 'regular',
		'font-size'      => '12px',
		'line-height'    => '1.5',
		'letter-spacing' => '0.1em',
		'subsets'        => array( 'latin-ext' ),
	),
	'output'      => array(
		array(
			'element' => '.btn',
		),
	),
) );

Kirki::add_field( 'thememove', array(
	'type'        => 'color',
	'settings'    => 'button_color',
	'label'       => esc_html__( 'Link Color', 'tm-heli' ),
	'description' => esc_html__( 'Link Color', 'tm-heli' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => TM_HELI_PRIMARY_COLOR,
	'transport'   => 'auto',
	'output'      => array(
		array(
			'element'  => 'a.btn',
			'property' => 'color',
		),
	),
) );

Kirki::add_field( 'thememove', array(
	'type'        => 'color',
	'settings'    => 'button_color_hover',
	'description' => esc_html__( 'Link Color on hover', 'tm-heli' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => TM_HELI_PRIMARY_COLOR,
	'transport'   => 'auto',
	'output'      => array(
		array(
			'element'  => 'a.btn:hover',
			'property' => 'color',
		),
	),
) );

Kirki::add_field( 'thememove', array(
	'type'      => 'text',
	'settings'  => 'button_padding',
	'label'     => esc_html__( 'Padding', 'tm-heli' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => '5px 0px 5px 0px',
	'transport' => 'auto',
	'output'    => array(
		array(
			'element'  => '.btn',
			'property' => 'padding',
		),
	),
) );

Kirki::add_field( 'thememove', array(
	'type'      => 'text',
	'settings'  => 'button_margin',
	'label'     => esc_html__( 'Margin', 'tm-heli' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => '0px 0px 0px 0px',
	'transport' => 'auto',
	'output'    => array(
		array(
			'element'  => '.btn',
			'property' => 'margin',
		),
	),
) );
