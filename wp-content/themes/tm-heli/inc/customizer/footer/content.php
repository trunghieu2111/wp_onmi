<?php
$section  = 'footer_content';
$priority = 1;

Kirki::add_field( 'thememove', array(
	'type'        => 'typography',
	'settings'    => 'footer_font',
	'label'       => __( 'Content Typography', 'tm-heli' ),
	'description' => __( 'Set up font settings for footer text', 'tm-heli' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'transport'   => 'auto',
	'default'     => array(
		'font-family'    => TM_HELI_PRIMARY_FONT,
		'subsets'        => array( 'latin-ext' ),
		'font-size'      => '16px',
		'variant'        => '300',
		'line-height'    => '1.5',
		'letter-spacing' => '0.05em',
	),
	'output'      => array(
		array(
			'element' => '.site-footer',
		),
	),
) );

Kirki::add_field( 'thememove', array(
	'type'        => 'color',
	'settings'    => 'footer_text_color',
	'label'       => __( 'Text color', 'tm-heli' ),
	'description' => __( 'Choose color for footer text', 'tm-heli' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => '#ffffff',
	'transport'   => 'auto',
	'output'      => array(
		array(
			'element'  => '.site-footer',
			'property' => 'color',
		),
	),
) );

Kirki::add_field( 'thememove', array(
	'type'        => 'color',
	'settings'    => 'footer_link_color',
	'label'       => __( 'Link color', 'tm-heli' ),
	'description' => __( 'Choose color for footer text link', 'tm-heli' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => '#ffffff',
	'transport'   => 'auto',
	'output'      => array(
		array(
			'element'  => '.site-footer a',
			'property' => 'color',
		),
	),
) );

Kirki::add_field( 'thememove', array(
	'type'        => 'color',
	'settings'    => 'footer_link_color_hover',
	'description' => __( 'Choose color for footer text link on hover', 'tm-heli' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => '#666666',
	'transport'   => 'auto',
	'output'      => array(
		array(
			'element'  => '.site-footer a:hover',
			'property' => 'color',
		),
	),
) );
