<?php
$section  = 'navigation_mobile_menu';
$priority = 1;

Kirki::add_field( 'thememove', array(
	'type'        => 'color',
	'settings'    => 'mobile_menu_icon_color',
	'label'       => esc_html__( 'Color', 'tm-heli' ),
	'description' => esc_html__( 'Choose color for mobile menu icon', 'tm-heli' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => '#222',
	'transport'   => 'auto',
	'output'      => array(
		array(
			'element'     => '#open-left.menu_button:after, #open-left.menu_button:before, #open-left.menu_button span',
			'property'    => 'background-color',
			'media_query' => '@media ( max-width: 480px )',
		),
	),
) );

Kirki::add_field( 'thememove', array(
	'type'        => 'color',
	'settings'    => 'mobile_menu_bg_color',
	'label'       => esc_html__( 'Background', 'tm-heli' ),
	'description' => esc_html__( 'Choose background color for mobile menu', 'tm-heli' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => '#fff',
	'transport'   => 'auto',
	'output'      => array(
		array(
			'element'     => '.site-header',
			'property'    => 'background-color',
			'media_query' => '@media ( max-width: 480px )',
		),
	),
) );
