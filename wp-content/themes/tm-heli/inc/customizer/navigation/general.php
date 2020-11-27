<?php
$section  = 'navigation_general';
$priority = 1;

Kirki::add_field( 'thememove', array(
	'type'        => 'color-alpha',
	'settings'    => 'nav_level_2_bg',
	'label'       => esc_html__( 'Sub menu background', 'tm-heli' ),
	'description' => esc_html__( 'Choose background color for sub menu', 'tm-heli' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => '#f7f7f7',
	'transport'   => 'auto',
	'output'      => array(
		array(
			'element'  => '#site-navigation .sub-menu, #site-navigation .children',
			'property' => 'background-color',
		),
	),
) );
