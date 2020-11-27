<?php
$panel    = 'navigation';
$priority = 1;
Kirki::add_section( 'navigation_general', array(
	'title'    => __( 'General', 'tm-heli' ),
	'panel'    => $panel,
	'priority' => $priority ++,
	'icon'     => 'dashicons-admin-tools',
) );

Kirki::add_section( 'navigation_mobile_menu', array(
	'title'    => __( 'Mobile menu', 'tm-heli' ),
	'panel'    => $panel,
	'priority' => $priority ++,
	'icon'     => 'dashicons-smartphone',
) );

Kirki::add_section( 'navigation_desktop_menu', array(
	'title'    => __( 'Desktop menu', 'tm-heli' ),
	'panel'    => $panel,
	'priority' => $priority ++,
	'icon'     => 'dashicons-desktop',
) );

require_once TM_HELI_PATH . '/inc/customizer/navigation/general.php';
require_once TM_HELI_PATH . '/inc/customizer/navigation/mobile-menu.php';
require_once TM_HELI_PATH . '/inc/customizer/navigation/desktop-menu.php';
