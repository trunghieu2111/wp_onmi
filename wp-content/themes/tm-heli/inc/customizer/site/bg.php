<?php
$section  = 'background_image';
$priority = 1;

Kirki::add_field( 'thememove', array(
	'type'      => 'color',
	'settings'  => 'site_bg_color',
	'label'     => esc_attr__( 'Background color', 'tm-heli' ),
	'help'      => esc_attr__( 'Setup background color for your header', 'tm-heli' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => '#999',
	'transport' => 'auto',
	'output'    => array(
		'element'  => 'body.boxed',
		'property' => 'background-color',
	),
) );