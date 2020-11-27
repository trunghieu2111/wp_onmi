<?php
$panel    = 'woo';
$priority = 1;

Kirki::add_section( 'woo_general', array(
	'title'    => esc_html__( 'General', 'tm-heli' ),
	'panel'    => $panel,
	'priority' => $priority ++,
) );

Kirki::add_section( 'woo_color', array(
	'title'    => esc_html__( 'Color', 'tm-heli' ),
	'panel'    => $panel,
	'priority' => $priority ++,
) );
