<?php
$section  = 'header_general';
$priority = 1;

Kirki::add_field( 'thememove', array(
	'type'            => 'toggle',
	'settings'        => 'header_enable',
	'label'           => __( 'Header', 'tm-heli' ),
	'description'     => __( 'Enabling this option will display header area', 'tm-heli' ),
	'section'         => $section,
	'priority'        => $priority ++,
	'default'         => 1,
	'partial_refresh' => array(
		'header_enable' => array(
			'selector'        => '.header-wrapper',
			'render_callback' => function() {
				if ( Kirki::get_option( 'thememove', 'header_enable' ) == 1 ) {
					require_once TM_HELI_PATH . '/template-parts/' . Kirki::get_option( 'thememove', 'header_type' ) . '.php';
				}
			},
		),
	),
) );

Kirki::add_field( 'thememove', array(
	'type'            => 'select',
	'settings'        => 'header_type',
	'label'           => __( 'Header Type', 'tm-heli' ),
	'description'     => __( 'Choose the header type you want', 'tm-heli' ),
	'section'         => $section,
	'priority'        => $priority ++,
	'default'         => 'header01',
	'choices'         => array(
		'header01' => 'Wide',
		'header02' => 'Transparent',
		'header03' => 'Boxed',
		'header04' => 'Centered',
		'header05' => 'Static',
		'header08' => 'Off Canvas',
		'header09' => 'Simple',
		'header10' => 'Simple 2',
	),
	'partial_refresh' => array(
		'header_type' => array(
			'selector'        => '.header-wrapper',
			'render_callback' => function() {
				require_once TM_HELI_PATH . '/template-parts/' . Kirki::get_option( 'thememove', 'header_type' ) . '.php';
			},
		),
	),
) );

Kirki::add_field( 'thememove', array(
	'type'        => 'toggle',
	'settings'    => 'top_slider_enable',
	'label'       => __( 'Top Slider', 'tm-heli' ),
	'description' => __( 'Enabling this option will display top slider on home page', 'tm-heli' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => 0,
) );

Kirki::add_field( 'thememove', array(
	'type'        => 'toggle',
	'settings'    => 'nav_sticky_enable',
	'label'       => __( 'Sticky Header', 'tm-heli' ),
	'description' => __( 'Enabling this option will sticky header', 'tm-heli' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => 1,
) );

Kirki::add_field( 'thememove', array(
	'type'      => 'color-alpha',
	'settings'  => 'header_bg',
	'label'     => __( 'Header background color', 'tm-heli' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => 'rgba(0,0,0,0)',
	'transport' => 'auto',
	'output'    => array(
		array(
			'element'  => '.site-header,.header05 .left',
			'property' => 'background-color',
		),
	),
) );
