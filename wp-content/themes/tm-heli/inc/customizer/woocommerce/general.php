<?php
$section  = 'woo_general';
$priority = 1;

Kirki::add_field( 'thememove', array(
	'type'        => 'radio',
	'settings'    => 'woo_layout_category',
	'label'       => esc_html__( 'Category layout', 'tm-heli' ),
	'description' => esc_html__( 'Choose the category product page layout you want', 'tm-heli' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => 'sidebar-content',
	'choices'     => array(
		'full-width'      => esc_html__( 'Full width', 'tm-heli' ),
		'content-sidebar' => esc_html__( 'Content - Sidebar', 'tm-heli' ),
		'sidebar-content' => esc_html__( 'Sidebar - Content', 'tm-heli' ),
	),
) );

Kirki::add_field( 'thememove', array(
	'type'        => 'radio',
	'settings'    => 'woo_layout_single_product',
	'label'       => esc_html__( 'Single layout', 'tm-heli' ),
	'description' => esc_html__( 'Choose the product page layout you want', 'tm-heli' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => 'sidebar-content',
	'choices'     => array(
		'full-width'      => esc_html__( 'Full width', 'tm-heli' ),
		'content-sidebar' => esc_html__( 'Content - Sidebar', 'tm-heli' ),
		'sidebar-content' => esc_html__( 'Sidebar - Content', 'tm-heli' ),
	),
) );
