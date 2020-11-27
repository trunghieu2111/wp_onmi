<?php
$section  = 'site_content';
$priority = 1;

Kirki::add_field( 'thememove', array(
	'type'        => 'typography',
	'settings'    => 'body_font',
	'description' => esc_html__( 'Set up font settings for body text', 'tm-heli' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'transport'   => 'auto',
	'default'     => array(
		'font-family'    => TM_HELI_PRIMARY_FONT,
		'variant'        => '300',
		'font-size'      => '16px',
		'line-height'    => '1.5',
		'letter-spacing' => '0.05em',
		'subsets'        => array( 'latin-ext' ),
	),
	'output'      => array(
		array(
			'element' => '.vc_btn3,body',
		),
	),
) );

Kirki::add_field( 'thememove', array(
	'type'        => 'color',
	'settings'    => 'body_color',
	'label'       => esc_html__( 'Text color', 'tm-heli' ),
	'description' => esc_html__( 'Choose color for body text', 'tm-heli' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => '#222',
	'transport'   => 'auto',
	'output'      => array(
		array(
			'element'  => 'body',
			'property' => 'color',
		),
	),
) );

Kirki::add_field( 'thememove', array(
	'type'        => 'color',
	'settings'    => 'link_color',
	'label'       => esc_html__( 'Link color', 'tm-heli' ),
	'description' => esc_html__( 'Choose color for text link', 'tm-heli' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => TM_HELI_SECONDARY_COLOR,
	'transport'   => 'auto',
	'output'      => array(
		array(
			'element'  => 'a,a:visited',
			'property' => 'color',
		),
	),
) );

Kirki::add_field( 'thememove', array(
	'type'        => 'color',
	'settings'    => 'link_color_hover',
	'description' => esc_html__( 'Choose color for text link on hover', 'tm-heli' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => TM_HELI_PRIMARY_COLOR,
	'transport'   => 'auto',
	'output'      => array(
		array(
			'element'  => 'a:hover',
			'property' => 'color',
		),
	),
) );
