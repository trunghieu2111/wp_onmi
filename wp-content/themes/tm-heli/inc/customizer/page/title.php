<?php
$section  = 'page_title';
$priority = 1;

Kirki::add_field( 'thememove', array(
	'type'        => 'typography',
	'settings'    => 'page_title_font',
	'description' => __( 'Set up font settings for page title', 'tm-heli' ),
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
			'element' => '.big-title .entry-title',
		),
	),
) );

Kirki::add_field( 'thememove', array(
	'type'        => 'color',
	'settings'    => 'page_title_color',
	'label'       => __( 'Text color', 'tm-heli' ),
	'description' => __( 'Choose color for body text', 'tm-heli' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => '#fff',
	'transport'   => 'auto',
	'output'      => array(
		array(
			'element'  => '.big-title .entry-title',
			'property' => 'color',
		),
	),
) );

Kirki::add_field( 'thememove', array(
	'type'      => 'text',
	'settings'  => 'page_title_padding',
	'label'     => __( 'Padding', 'tm-heli' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => '90px 0px 90px 0px',
	'transport' => 'auto',
	'output'    => array(
		array(
			'element'  => '.big-title',
			'property' => 'padding',
		),
	),
) );

Kirki::add_field( 'thememove', array(
	'type'      => 'color',
	'settings'  => 'page_title_bg_color',
	'label'     => __( 'Background color', 'tm-heli' ),
	'help'      => __( 'Setup background color for your header', 'tm-heli' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => '#fff',
	'transport' => 'auto',
	'output'    => array(
		array(
			'element'  => '.big-title',
			'property' => 'background-color',
		),
	),
) );

Kirki::add_field( 'thememove', array(
	'type'      => 'color-alpha',
	'settings'  => 'page_title_overlay_bg_color',
	'label'     => __( 'Overlay color', 'tm-heli' ),
	'help'      => __( 'Setup overlay color for your header', 'tm-heli' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => 'rgba(0,0,0,0.01)',
	'transport' => 'auto',
	'output'    => array(
		array(
			'element'  => '.big-title:after',
			'property' => 'background-color',
		),
	),
) );

Kirki::add_field( 'thememove', array(
	'type'     => 'image',
	'settings' => 'page_title_bg_image',
	'label'    => __( 'Background image', 'tm-heli' ),
	'help'     => __( 'Default background image for your header', 'tm-heli' ),
	'section'  => $section,
	'priority' => $priority ++,
	'default'  => 'http://heli.thememove.com/data/images/bg04.jpg',
	'output'   => array(
		array(
			'element'  => '.big-title',
			'property' => 'background-image',
		),
	),
) );
