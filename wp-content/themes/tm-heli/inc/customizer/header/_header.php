<?php
$panel    = 'header';
$priority = 1;

Kirki::add_section( 'header_general', array(
	'title'    => esc_html__( 'General', 'tm-heli' ),
	'panel'    => $panel,
	'priority' => $priority ++,
	'icon'     => 'dashicons-admin-tools',
) );

Kirki::add_section( 'header_logo', array(
	'title'    => esc_html__( 'Logo', 'tm-heli' ),
	'panel'    => $panel,
	'priority' => $priority ++,
	'icon'     => 'dashicons-lightbulb',
) );

Kirki::add_section( 'header_search', array(
	'title'    => esc_html__( 'Search', 'tm-heli' ),
	'panel'    => $panel,
	'priority' => $priority ++,
	'icon'     => 'dashicons-search',
) );

Kirki::add_section( 'header_mini_cart', array(
	'title'    => esc_html__( 'Mini cart', 'tm-heli' ),
	'panel'    => $panel,
	'priority' => $priority ++,
	'icon'     => 'dashicons-cart',
) );

Kirki::add_section( 'header_side_box', array(
	'title'    => esc_html__( 'Side box', 'tm-heli' ),
	'panel'    => $panel,
	'priority' => $priority ++,
	'icon'     => 'dashicons-index-card',
) );

require_once TM_HELI_PATH . '/inc/customizer/header/general.php';
require_once TM_HELI_PATH . '/inc/customizer/header/logo.php';
if ( class_exists( 'WooCommerce' ) ) {
	require_once TM_HELI_PATH . '/inc/customizer/header/mini-cart.php';
}
//require_once TM_HELI_PATH . '/inc/customizer/header/side-box.php';
