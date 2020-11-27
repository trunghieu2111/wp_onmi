<?php
$section  = 'header_search';
$priority = 1;

Kirki::add_field( 'thememove', array(
	'type'        => 'toggle',
	'settings'    => 'search_enable',
	'label'       => esc_html__( 'Search', 'tm-heli' ),
	'description' => esc_html__( 'Turn on this option if you want to enable search box in header', 'tm-heli' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => 1,
) );
