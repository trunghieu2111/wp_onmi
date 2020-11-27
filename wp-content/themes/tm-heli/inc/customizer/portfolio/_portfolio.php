<?php
$panel    = 'portfolio';
$priority = 1;

Kirki::add_section( 'portfolio_general', array(
	'title'    => __( 'General', 'tm-heli' ),
	'panel'    => $panel,
	'priority' => $priority ++,
) );

Kirki::add_section( 'portfolio_title', array(
	'title'    => __( 'Page title', 'tm-heli' ),
	'panel'    => $panel,
	'priority' => $priority ++,
) );

Kirki::add_section( 'portfolio_title_single', array(
	'title'    => __( 'Single title', 'tm-heli' ),
	'panel'    => $panel,
	'priority' => $priority ++,
) );

require_once TM_HELI_PATH . '/inc/customizer/portfolio/general.php';
require_once TM_HELI_PATH . '/inc/customizer/portfolio/title.php';
require_once TM_HELI_PATH . '/inc/customizer/portfolio/title-single.php';
