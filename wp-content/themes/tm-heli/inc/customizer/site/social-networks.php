<?php
$section  = 'site_social';
$priority = 1;
Kirki::add_field( 'thememove', array(
	'type'        => 'repeater',
	'settings'    => 'site_social_control',
	'label'       => esc_html__( 'Social Networks', 'tm-heli' ),
	'description' => esc_html__( 'You can find icon class <a target="_blank" href="http://fontawesome.io/cheatsheet/">here</a>.', 'tm-heli' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => array(
		array(
			'icon_class' => 'fa-facebook',
			'link_url'   => 'https://facebook.com',
		),
		array(
			'icon_class' => 'fa-twitter',
			'link_url'   => 'https://twitter.com',
		),
		array(
			'icon_class' => 'fa-pinterest',
			'link_url'   => 'https://pinterest.com',
		),
		array(
			'icon_class' => 'fa-instagram',
			'link_url'   => 'https://www.instagram.com',
		),
	),
	'fields'      => array(
		'icon_class' => array(
			'type'        => 'text',
			'label'       => esc_html__( 'Font Awesome Class', 'tm-heli' ),
			'description' => esc_html__( 'This will be the icon class for your link', 'tm-heli' ),
			'default'     => '',
		),
		'link_url'   => array(
			'type'        => 'text',
			'label'       => esc_html__( 'Link URL', 'tm-heli' ),
			'description' => esc_html__( 'This will be the link URL', 'tm-heli' ),
			'default'     => '',
		),
	),
) );
