<?php
$section  = 'portfolio_title_single';
$priority = 1;

Kirki::add_field( 'thememove', array(
	'type'        => 'typography',
	'settings'    => 'portfolio_title_single_font',
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
			'element' => '.single-project .big-title .entry-title',
		),
	),
) );

Kirki::add_field( 'thememove', array(
	'type'        => 'color',
	'settings'    => 'portfolio_title_single_color',
	'label'       => __( 'Text color', 'tm-heli' ),
	'description' => __( 'Choose color for body text', 'tm-heli' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => '#fff',
	'transport'   => 'auto',
	'output'      => array(
		array(
			'element'  => '.single-project .big-title .entry-title',
			'property' => 'color',
		),
	),
) );

Kirki::add_field( 'thememove', array(
	'type'      => 'text',
	'settings'  => 'portfolio_title_single_padding',
	'label'     => __( 'Padding', 'tm-heli' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => '100px 0px 100px 0px',
	'transport' => 'auto',
	'output'    => array(
		array(
			'element'  => '.single-project .big-title',
			'property' => 'padding',
		),
	),
) );

Kirki::add_field( 'thememove', array(
	'type'      => 'color',
	'settings'  => 'portfolio_title_single_bg_color',
	'label'     => __( 'Background color', 'tm-heli' ),
	'help'      => __( 'Setup background color for your header', 'tm-heli' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => '#fff',
	'transport' => 'auto',
	'output'    => array(
		array(
			'element'  => '.single-project .big-title',
			'property' => 'background-color',
		),
	),
) );

Kirki::add_field( 'thememove', array(
	'type'      => 'color-alpha',
	'settings'  => 'portfolio_title_single_overlay_bg_color',
	'label'     => __( 'Overlay color', 'tm-heli' ),
	'help'      => __( 'Setup overlay color for your header', 'tm-heli' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => 'rgba(0,0,0,0.9)',
	'transport' => 'auto',
	'output'    => array(
		array(
			'element'  => '.single-project .big-title:after, .tax-project-category .big-title:after',
			'property' => 'background-color',
		),
	),
) );

Kirki::add_field( 'thememove', array(
	'type'     => 'image',
	'settings' => 'portfolio_title_single_bg_image',
	'label'    => __( 'Background image', 'tm-heli' ),
	'help'     => __( 'Default background image for your header', 'tm-heli' ),
	'section'  => $section,
	'priority' => $priority ++,
	'default'  => 'http://transport.thememove.com/data/images/bg01.jpg',
	'output'   => array(
		array(
			'element'  => '.single-project .big-title',
			'property' => 'background-image',
		),
	),
) );
