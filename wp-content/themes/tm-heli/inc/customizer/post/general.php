<?php
$section  = 'post_general';
$priority = 1;

Kirki::add_field( 'thememove', array(
	'type'        => 'radio',
	'settings'    => 'post_layout',
	'label'       => esc_html__( 'Post layout', 'tm-heli' ),
	'description' => esc_html__( 'Choose the site layout you want', 'tm-heli' ),
	'help'        => esc_html__( 'Choose the site layout you want', 'tm-heli' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => 'full-width',
	'choices'     => array(
		'full-width'      => esc_html__( 'Full width', 'tm-heli' ),
		'content-sidebar' => esc_html__( 'Content - Sidebar', 'tm-heli' ),
		'sidebar-content' => esc_html__( 'Sidebar - Content', 'tm-heli' ),
	),
) );

Kirki::add_field( 'thememove', array(
	'type'     => 'toggle',
	'settings' => 'post_disable_title_blog_page',
	'label'    => esc_html__( 'Disable title on main blog page', 'tm-heli' ),
	'section'  => $section,
	'priority' => $priority ++,
	'default'  => 1,
) );
