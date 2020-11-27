<?php
$section  = 'site_general';
$priority = 1;

Kirki::add_field( 'thememove', array(
	'type'        => 'toggle',
	'settings'    => 'smooth_scroll_enable',
	'label'       => esc_html__( 'Smooth Scroll', 'tm-heli' ),
	'description' => esc_html__( 'Enabling this option will make your site smooth scroll', 'tm-heli' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => 0,
) );
Kirki::add_field( 'thememove', array(
	'type'        => 'toggle',
	'settings'    => 'back_to_top_enable',
	'label'       => esc_html__( 'Back to top', 'tm-heli' ),
	'description' => esc_html__( 'Enabling this option will display back to top button on bottom right of the site', 'tm-heli' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => 1,
) );
