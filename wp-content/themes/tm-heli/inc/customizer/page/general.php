<?php
$section  = 'page_general';
$priority = 1;

Kirki::add_field( 'thememove', array(
	'type'        => 'radio',
	'settings'    => 'page_layout',
	'label'       => esc_html__( 'Page layout', 'tm-heli' ),
	'description' => esc_html__( 'Choose the site layout you want', 'tm-heli' ),
	'help'        => esc_html__( 'Choose the site layout you want', 'tm-heli' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => 'full-width',
	'choices'     => array(
		'full-width'      => esc_html__( 'Full width', 'tm-heli' ),
		'content-sidebar' => esc_html__( 'Content - Sidebar', 'tm-heli' ),
		'sidebar-content' => esc_html__( 'Sidebar Content', 'tm-heli' ),
	),
) );

Kirki::add_field( 'thememove', array(
	'type'        => 'radio',
	'settings'    => 'archive_layout',
	'label'       => esc_html__( 'Archive layout', 'tm-heli' ),
	'description' => esc_html__( 'Choose the archive layout you want', 'tm-heli' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => 'content-sidebar',
	'choices'     => array(
		'full-width'      => esc_html__( 'Full width', 'tm-heli' ),
		'content-sidebar' => esc_html__( 'Content - Sidebar', 'tm-heli' ),
		'sidebar-content' => esc_html__( 'Sidebar Content', 'tm-heli' ),
	),
) );

Kirki::add_field( 'thememove', array(
	'type'        => 'radio',
	'settings'    => 'search_layout',
	'label'       => esc_html__( 'Search layout', 'tm-heli' ),
	'description' => esc_html__( 'Choose the search layout you want', 'tm-heli' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => 'sidebar-content',
	'choices'     => array(
		'full-width'      => esc_html__( 'Full width', 'tm-heli' ),
		'content-sidebar' => esc_html__( 'Content - Sidebar', 'tm-heli' ),
		'sidebar-content' => esc_html__( 'Sidebar Content', 'tm-heli' ),
	),
) );
