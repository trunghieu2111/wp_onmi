<?php
$panel    = 'post';
$priority = 1;

Kirki::add_section( 'post_general', array(
	'title'    => esc_html__( 'General', 'tm-heli' ),
	'panel'    => $panel,
	'priority' => $priority ++,
	'icon'     => 'dashicons-admin-tools',
) );

Kirki::add_section( 'post_title', array(
	'title'    => esc_html__( 'Title', 'tm-heli' ),
	'panel'    => $panel,
	'priority' => $priority ++,
	'icon'     => 'dashicons-clipboard',
) );

require_once TM_HELI_PATH . '/inc/customizer/post/general.php';
require_once TM_HELI_PATH . '/inc/customizer/post/title.php';
