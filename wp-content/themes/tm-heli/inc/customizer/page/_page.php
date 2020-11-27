<?php
$panel    = 'page';
$priority = 1;

Kirki::add_section( 'page_general', array(
	'title'    => __( 'General', 'tm-heli' ),
	'panel'    => $panel,
	'priority' => $priority ++,
	'icon'     => 'dashicons-admin-tools',
) );

Kirki::add_section( 'page_title', array(
	'title'    => __( 'Title', 'tm-heli' ),
	'panel'    => $panel,
	'priority' => $priority ++,
	'icon'     => 'dashicons-clipboard',
) );

Kirki::add_section( 'page_404', array(
	'title'    => __( '404 page', 'tm-heli' ),
	'panel'    => $panel,
	'priority' => $priority ++,
	'icon'     => 'dashicons-sos',
) );

require_once TM_HELI_PATH . '/inc/customizer/page/general.php';
require_once TM_HELI_PATH . '/inc/customizer/page/title.php';
require_once TM_HELI_PATH . '/inc/customizer/page/404.php';
