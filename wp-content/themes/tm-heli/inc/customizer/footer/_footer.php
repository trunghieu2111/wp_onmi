<?php
$panel    = 'footer';
$priority = 1;

Kirki::add_section( 'footer_general', array(
	'title'    => esc_html__( 'General', 'tm-heli' ),
	'panel'    => $panel,
	'priority' => $priority ++,
	'icon'     => 'dashicons-admin-tools',
) );

Kirki::add_section( 'footer_content', array(
	'title'    => esc_html__( 'Content', 'tm-heli' ),
	'panel'    => $panel,
	'priority' => $priority ++,
	'icon'     => 'dashicons-format-aside',
) );

Kirki::add_section( 'footer_copyright', array(
	'title'    => esc_html__( 'Copyright', 'tm-heli' ),
	'panel'    => $panel,
	'priority' => $priority ++,
	'icon'     => 'dashicons-shield',
) );
Kirki::add_section( 'footer_widget_title', array(
	'title'    => esc_html__( 'Widget title', 'tm-heli' ),
	'panel'    => $panel,
	'priority' => $priority ++,
	'icon'     => 'dashicons-clipboard',
) );

require_once TM_HELI_PATH . '/inc/customizer/footer/general.php';
require_once TM_HELI_PATH . '/inc/customizer/footer/content.php';
require_once TM_HELI_PATH . '/inc/customizer/footer/widget-title.php';
require_once TM_HELI_PATH . '/inc/customizer/footer/copyright.php';
