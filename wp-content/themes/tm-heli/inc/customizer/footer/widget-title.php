<?php
$section  = 'footer_widget_title';
$priority = 1;

Kirki::add_field( 'thememove', array(
	'type'        => 'typography',
	'settings'    => 'footer_widget_title_font',
	'description' => esc_html__( 'Set up font settings for widget heading', 'tm-heli' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'transport'   => 'auto',
	'default'     => array(
		'font-family'    => TM_HELI_PRIMARY_FONT,
		'subsets'        => array( 'latin-ext' ),
		'font-size'      => '16px',
		'variant'        => 'regular',
		'line-height'    => '1.5',
		'letter-spacing' => '0.2em',
	),
	'output'      => array(
		array(
			'element' => '.site-footer .widget-title',
		),
	),
) );

Kirki::add_field( 'thememove', array(
	'type'        => 'color',
	'settings'    => 'footer_widget_title_color',
	'label'       => esc_html__( 'Text color', 'tm-heli' ),
	'description' => esc_html__( 'Choose color for footer widget title', 'tm-heli' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => '#ffffff',
	'transport'   => 'auto',
	'output'      => array(
		array(
			'element'  => '.site-footer .widget-title',
			'property' => 'color',
		),
	),
) );

Kirki::add_field( 'thememove', array(
	'type'      => 'text',
	'settings'  => 'footer_widget_title_padding',
	'label'     => esc_html__( 'Padding', 'tm-heli' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => '0px 0px 20px 0px',
	'transport' => 'auto',
	'output'    => array(
		array(
			'element'  => '.site-footer .widget-title',
			'property' => 'padding',
		),
	),
) );
