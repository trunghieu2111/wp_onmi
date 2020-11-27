<?php
$priority = 1;
Kirki::add_panel( 'site', array(
	'priority'    => $priority ++,
	'title'       => esc_html__( 'Site', 'tm-heli' ),
	'description' => esc_html__( 'My Description', 'tm-heli' ),
	'icon'        => 'dashicons-admin-site',
) );

Kirki::add_panel( 'top', array(
	'priority'    => $priority ++,
	'title'       => esc_html__( 'Top', 'tm-heli' ),
	'description' => esc_html__( 'Top area above header with break news and social icons', 'tm-heli' ),
	'icon'        => 'dashicons-schedule',
) );

Kirki::add_panel( 'header', array(
	'priority'    => $priority ++,
	'title'       => esc_html__( 'Header', 'tm-heli' ),
	'description' => esc_html__( 'Top area above header with break news and social icons', 'tm-heli' ),
	'icon'        => 'dashicons-archive',
) );

Kirki::add_panel( 'navigation', array(
	'priority'    => $priority ++,
	'title'       => esc_html__( 'Navigation', 'tm-heli' ),
	'description' => esc_html__( 'My Description', 'tm-heli' ),
	'icon'        => 'dashicons-menu',
) );

Kirki::add_panel( 'footer', array(
	'priority'    => $priority ++,
	'title'       => esc_html__( 'Footer', 'tm-heli' ),
	'description' => esc_html__( 'My Description', 'tm-heli' ),
	'icon'        => 'dashicons-screenoptions',
) );

Kirki::add_panel( 'page', array(
	'priority'    => $priority ++,
	'title'       => esc_html__( 'Page', 'tm-heli' ),
	'description' => esc_html__( 'My Description', 'tm-heli' ),
	'icon'        => 'dashicons-admin-page',
) );

Kirki::add_panel( 'post', array(
	'priority'    => $priority ++,
	'title'       => esc_html__( 'Post', 'tm-heli' ),
	'description' => esc_html__( 'My Description', 'tm-heli' ),
	'icon'        => 'dashicons-edit',
) );

Kirki::add_panel( 'portfolio', array(
	'priority'    => $priority ++,
	'title'       => esc_html__( 'Portfolio', 'tm-heli' ),
	'description' => esc_html__( 'My Description', 'tm-heli' ),
	'icon'        => 'dashicons-feedback',
) );

Kirki::add_panel( 'woo', array(
	'priority'    => $priority ++,
	'title'       => esc_html__( 'Woocommerce', 'tm-heli' ),
	'description' => esc_html__( 'My Description', 'tm-heli' ),
	'icon'        => 'dashicons-cart',
) );

Kirki::add_panel( 'custom', array(
	'priority'    => $priority ++,
	'title'       => esc_html__( 'Custom', 'tm-heli' ),
	'description' => esc_html__( 'You can add custom CSS and Javascript here', 'tm-heli' ),
	'icon'        => 'dashicons-admin-generic',
) );
