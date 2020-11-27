<?php
$section  = 'post_title';
$priority = 1;

Kirki::add_field( 'thememove', array(
	'type'        => 'typography',
	'settings'    => 'post_title_font',
	'description' => esc_html__( 'Set up font settings for post title', 'tm-heli' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'transport'   => 'auto',
	'default'     => array(
		'font-family'    => TM_HELI_PRIMARY_FONT,
		'variant'        => '300',
		'font-size'      => '32px',
		'line-height'    => '1.5',
		'letter-spacing' => '0.1em',
		'subsets'        => array( 'latin-ext' ),
	),
	'output'      => array(
		array(
			'element' => '.single .big-title .entry-title',
		),
	),
) );

Kirki::add_field( 'thememove', array(
	'type'        => 'text',
	'settings'    => 'post_title_text',
	'label'       => esc_html__( 'Text', 'tm-heli' ),
	'description' => esc_html__( 'Entry your title of blog here', 'tm-heli' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => '<b>OUR</b> BLOG',
) );

Kirki::add_field( 'thememove', array(
	'type'        => 'color',
	'settings'    => 'post_title_color',
	'label'       => esc_html__( 'Text color', 'tm-heli' ),
	'description' => esc_html__( 'Choose color for body text', 'tm-heli' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => '#fff',
	'transport'   => 'auto',
	'output'      => array(
		array(
			'element'  => '.single .big-title .entry-title',
			'property' => 'color',
		),
	),
) );

Kirki::add_field( 'thememove', array(
	'type'      => 'text',
	'settings'  => 'post_title_padding',
	'label'     => esc_html__( 'Padding', 'tm-heli' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => '90px 0px 90px 0px',
	'transport' => 'auto',
	'output'    => array(
		array(
			'element'  => '.single .big-title',
			'property' => 'padding',
		),
	),
) );

Kirki::add_field( 'thememove', array(
	'type'      => 'color',
	'settings'  => 'post_title_bg_color',
	'label'     => esc_html__( 'Background color', 'tm-heli' ),
	'help'      => esc_html__( 'Setup background color for your header', 'tm-heli' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => '#fff',
	'transport' => 'auto',
	'output'    => array(
		array(
			'element'  => '.single .big-title',
			'property' => 'background-color',
		),
	),
) );

Kirki::add_field( 'thememove', array(
	'type'      => 'color-alpha',
	'settings'  => 'post_title_overlay_bg_color',
	'label'     => esc_html__( 'Overlay color', 'tm-heli' ),
	'help'      => esc_html__( 'Setup overlay color for your header', 'tm-heli' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => 'rgba(0,0,0,0.01)',
	'transport' => 'auto',
	'output'    => array(
		array(
			'element'  => '.single .big-title:after',
			'property' => 'background-color',
		),
	),
) );

Kirki::add_field( 'thememove', array(
	'type'     => 'image',
	'settings' => 'post_title_bg_image',
	'label'    => esc_html__( 'Background image', 'tm-heli' ),
	'help'     => esc_html__( 'Default background image for your header', 'tm-heli' ),
	'section'  => $section,
	'priority' => $priority ++,
	'default'  => 'http://heli.thememove.com/data/images/bg04.jpg',
	'output'   => array(
		array(
			'element'  => '.single .big-title',
			'property' => 'background-image',
		),
	),
) );
