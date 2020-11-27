<?php
$section  = 'navigation_desktop_menu';
$priority = 1;

Kirki::add_field( 'thememove', array(
	'type'     => 'typography',
	'settings' => 'main_menu_font',
	'section'  => $section,
	'priority' => $priority ++,
	'transport'   => 'auto',
	'default'  => array(
		'font-family'    => TM_HELI_PRIMARY_FONT,
		'variant'        => 'regular',
		'font-size'      => '14px',
		'line-height'    => '1.5',
		'letter-spacing' => '0.1em',
		'subsets'        => array( 'latin-ext' ),
	),
	'output'   => array(
		array(
			'element' => '#site-navigation',
		),
	),
) );

Kirki::add_field( 'thememove', array(
	'type'     => 'custom',
	'settings' => 'main_menu_title_' . $priority ++,
	'section'  => $section,
	'priority' => $priority ++,
	'default'  => '<div class="group_title">Level 1</div>',
) );

Kirki::add_field( 'thememove', array(
	'type'        => 'color',
	'settings'    => 'main_menu_color',
	'label'       => esc_html__( 'Item color', 'tm-heli' ),
	'description' => esc_html__( 'Choose color for level 1 menu item', 'tm-heli' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => '#222',
	'transport'   => 'auto',
	'output'      => array(
		array(
			'element'  => '#site-navigation .menu > ul > li > a, #site-navigation .menu > li > a,.header-column-icon-container .header-icon',
			'property' => 'color',
		),
		array(
			'element'  => '.menu_button:after,.menu_button:before,.menu_button span',
			'property' => 'background-color',
		),
	),
) );

Kirki::add_field( 'thememove', array(
	'type'        => 'color',
	'settings'    => 'main_menu_hover_color',
	'description' => esc_html__( 'Color for level 1 menu item on hover', 'tm-heli' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => '#aaa',
	'transport'   => 'auto',
	'output'      => array(
		array(
			'element'  => '#site-navigation .menu > li.current-menu-item > a,#site-navigation .menu > ul > li > a:hover, #site-navigation .menu > li > a:hover',
			'property' => 'color',
		),
	),
) );

Kirki::add_field( 'thememove', array(
	'type'        => 'text',
	'label'       => esc_html__( 'Item padding', 'tm-heli' ),
	'settings'    => 'main_menu_padding',
	'description' => esc_html__( 'Set up padding for menu item', 'tm-heli' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => '27px 20px 27px 20px',
	'transport'   => 'auto',
	'output'      => array(
		array(
			'element'  => '#site-navigation .menu > ul > li, #site-navigation .menu > li',
			'property' => 'padding',
		),
	),
) );

Kirki::add_field( 'thememove', array(
	'type'     => 'custom',
	'settings' => 'main_menu_title_' . $priority ++,
	'section'  => $section,
	'priority' => $priority ++,
	'default'  => '<div class="group_title">Level 2</div>',
) );

Kirki::add_field( 'thememove', array(
	'type'        => 'color',
	'settings'    => 'main_menu_color_level_2',
	'label'       => esc_html__( 'Item color', 'tm-heli' ),
	'description' => esc_html__( 'Choose color for level 1 menu item', 'tm-heli' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => '#666',
	'transport'   => 'auto',
	'output'      => array(
		array(
			'element'  => '#site-navigation .sub-menu a, #site-navigation .children a',
			'property' => 'color',
		),
	),
) );

Kirki::add_field( 'thememove', array(
	'type'        => 'color',
	'settings'    => 'main_menu_hover_color_level_2',
	'description' => esc_html__( 'Color for level 1 menu item on hover', 'tm-heli' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => '#aaa',
	'transport'   => 'auto',
	'output'      => array(
		array(
			'element'  => '#site-navigation .sub-menu a:hover, #site-navigation .children a:hover',
			'property' => 'color',
		),
	),
) );

Kirki::add_field( 'thememove', array(
	'type'        => 'text',
	'label'       => esc_html__( 'Item padding', 'tm-heli' ),
	'settings'    => 'main_menu_padding_level_2',
	'description' => esc_html__( 'Set up padding for menu item', 'tm-heli' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => '27px 15px 27px 15px',
	'transport'   => 'auto',
	'output'      => array(
		array(
			'element'  => '#site-navigation .menu > ul > li, #site-navigation .menu > li',
			'property' => 'padding',
		),
	),
) );
