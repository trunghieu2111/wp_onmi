<?php
$section  = 'page_404';
$priority = 1;

Kirki::add_field( 'thememove', array(
	'type'        => 'image',
	'settings'    => 'page_404_image',
	'label'       => __( 'Top image', 'tm-heli' ),
	'description' => __( 'Choose a default logo image to display', 'tm-heli' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => 'http://heli.thememove.com/data/images/404.png',
) );

Kirki::add_field( 'thememove', array(
	'type'     => 'text',
	'settings' => 'page_404_big_title',
	'label'    => __( 'Title', 'tm-heli' ),
	'section'  => $section,
	'priority' => $priority ++,
	'default'  => '<b>PAGE</b> NOT FOUND',
) );

Kirki::add_field( 'thememove', array(
	'type'     => 'text',
	'settings' => 'page_404_sub_title',
	'label'    => __( 'Sub title', 'tm-heli' ),
	'section'  => $section,
	'priority' => $priority ++,
	'default'  => 'Sorry, the page you requested could not be found.',
) );

Kirki::add_field( 'thememove', array(
	'type'      => 'text',
	'label'     => __( 'Logo Padding', 'tm-heli' ),
	'settings'  => 'page_404_top_padding',
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => '100px 0px 0px 0px',
	'transport' => 'auto',
	'output'    => array(
		array(
			'element'  => '.error404 .top',
			'property' => 'padding',
		),
	),
) );

Kirki::add_field( 'thememove', array(
	'type'      => 'color',
	'settings'  => 'page_404_top_bg',
	'label'     => __( 'Top background', 'tm-heli' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => '#eee',
	'transport' => 'auto',
	'output'    => array(
		array(
			'element'  => '.error404 .top',
			'property' => 'background-color',
		),
	),
) );
