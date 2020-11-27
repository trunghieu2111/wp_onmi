<?php
$panel    = 'site';
$priority = 1;

Kirki::add_section( 'site_skin', array(
	'title'       => esc_html__( 'Preset', 'tm-heli' ),
	'panel'       => $panel,
	'description' => esc_html__( 'Choose a preset for your site', 'tm-heli' ),
	'priority'    => $priority ++,
	'icon'        => 'dashicons-art',
	//'type'        => 'expanded',
) );

Kirki::add_section( 'site_general', array(
	'title'    => esc_html__( 'General', 'tm-heli' ),
	'panel'    => $panel,
	'priority' => $priority ++,
	'icon'     => 'dashicons-admin-tools',
) );

Kirki::add_section( 'site_content', array(
	'title'    => esc_html__( 'Content', 'tm-heli' ),
	'panel'    => $panel,
	'priority' => $priority ++,
	'icon'     => 'dashicons-format-aside',
) );

Kirki::add_section( 'site_heading', array(
	'title'    => esc_html__( 'Heading', 'tm-heli' ),
	'panel'    => $panel,
	'priority' => $priority ++,
	'icon'     => 'dashicons-admin-customizer',
) );

Kirki::add_section( 'site_breadcrumb', array(
	'title'    => esc_html__( 'Breadcrumb', 'tm-heli' ),
	'panel'    => $panel,
	'priority' => $priority ++,
	'icon'     => 'dashicons-filter',
) );

Kirki::add_section( 'site_social', array(
	'title'    => esc_html__( 'Social Networks', 'tm-heli' ),
	'panel'    => $panel,
	'priority' => $priority ++,
	'icon'     => 'dashicons-share',
) );

require_once TM_HELI_PATH . '/inc/customizer/site/skin.php';
require_once TM_HELI_PATH . '/inc/customizer/site/general.php';
require_once TM_HELI_PATH . '/inc/customizer/site/content.php';
require_once TM_HELI_PATH . '/inc/customizer/site/heading.php';
if ( function_exists( 'tm_bread_crumb' ) ) {
	require_once TM_HELI_PATH . '/inc/customizer/site/breadcrumb.php';
}
require_once TM_HELI_PATH . '/inc/customizer/site/social-networks.php';
