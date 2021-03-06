<?php
$section  = 'portfolio_title';
$priority = 1;

Kirki::add_field( 'thememove', array(
	'type'        => 'typography',
	'settings'    => 'portfolio_title_font',
	'description' => esc_html__( 'Set up font settings for page title', 'tm-heli' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'transport'   => 'auto',
	'default'     => array(
		'font-family'    => TM_HELI_PRIMARY_FONT,
		'variant'        => '300',
		'font-size'      => '32px',
		'line-height'    => '1.5',
		'letter-spacing' => '0.1em',
		'subsets'        => array( 'latin-ext' ),
	),
	'output'      => array(
		array(
			'element' => '.portfolio.big-title .entry-title',
		),
	),
) );

Kirki::add_field( 'thememove', array(
	'type'        => 'color',
	'settings'    => 'portfolio_title_color',
	'label'       => esc_html__( 'Text color', 'tm-heli' ),
	'description' => esc_html__( 'Choose color for big title', 'tm-heli' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => TM_HELI_PRIMARY_COLOR,
	'transport'   => 'auto',
	'output'      => array(
		array(
			'element'  => '.big-title.portfolio .entry-title',
			'property' => 'color',
		),
	),
) );

Kirki::add_field( 'thememove', array(
	'type'      => 'text',
	'settings'  => 'portfolio_title_padding',
	'label'     => esc_html__( 'Padding', 'tm-heli' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => '90px 0px 90px 0px',
	'transport' => 'auto',
	'output'    => array(
		array(
			'element'  => '.portfolio.big-title',
			'property' => 'padding',
		),
	),
) );

Kirki::add_field( 'thememove', array(
	'type'      => 'color',
	'settings'  => 'portfolio_title_bg_color',
	'label'     => esc_html__( 'Background color', 'tm-heli' ),
	'help'      => esc_html__( 'Setup background color for your header', 'tm-heli' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => '#fff',
	'transport' => 'auto',
	'output'    => array(
		array(
			'element'  => '.portfolio.big-title',
			'property' => 'background-color',
		),
	),
) );

Kirki::add_field( 'thememove', array(
	'type'      => 'color-alpha',
	'settings'  => 'portfolio_title_overlay_bg_color',
	'label'     => esc_html__( 'Overlay color', 'tm-heli' ),
	'help'      => esc_html__( 'Setup overlay color for your header', 'tm-heli' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => '#F7F7F7',
	'transport' => 'auto',
	'output'    => array(
		array(
			'element'  => '.portfolio.big-title:after',
			'property' => 'background-color',
		),
	),
) );

Kirki::add_field( 'thememove', array(
	'type'     => 'image',
	'settings' => 'portfolio_title_bg_image',
	'label'    => esc_html__( 'Background image', 'tm-heli' ),
	'help'     => esc_html__( 'Default background image for your header', 'tm-heli' ),
	'section'  => $section,
	'priority' => $priority ++,
	'default'  => 'http://transport.thememove.com/data/images/bg01.jpg',
	'output'   => array(
		array(
			'element'  => '.portfolio.big-title',
			'property' => 'background-image',
		),
	),
) );
