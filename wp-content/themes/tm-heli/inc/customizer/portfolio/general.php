<?php
$section  = 'portfolio_general';
$priority = 1;

Kirki::add_field( 'thememove', array(
	'type'        => 'text',
	'settings'    => 'portfolio_archive_page_slug',
	'label'       => esc_html__( 'Portfolio Slug', 'tm-heli' ),
	'description' => esc_html__( 'Enter your page slug you want use as portfolio main page', 'tm-heli' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => 'portfolio-page',
) );
