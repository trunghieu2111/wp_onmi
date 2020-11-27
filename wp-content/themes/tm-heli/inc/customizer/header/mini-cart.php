<?php
$section  = 'header_mini_cart';
$priority = 1;

Kirki::add_field( 'thememove', array(
	'type'        => 'toggle',
	'settings'    => 'mini_cart_enable',
	'label'       => __( 'Mini Cart', 'tm-heli' ),
	'description' => __( 'Turn on this option if you want to enable mini cart in header', 'tm-heli' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => 1,
) );

Kirki::add_field( 'thememove', array(
	'type'            => 'color',
	'settings'        => 'minicart_icon_color',
	'label'           => __( 'Cart Icon Color', 'tm-heli' ),
	'section'         => $section,
	'priority'        => $priority ++,
	'default'         => TM_HELI_PRIMARY_COLOR,
	'output'          => array(
		array(
			'element'  => '.mini-cart .mini-cart__button .mini-cart-icon:before',
			'property' => 'color',
		),
	),
	'active_callback' => array(
		array(
			'settings' => 'mini_cart_enable',
			'operator' => '==',
			'value'    => 1,
		),
	),
) );

Kirki::add_field( 'thememove', array(
	'type'            => 'color',
	'settings'        => 'minicart_number_color',
	'label'           => __( 'Cart Number Color', 'tm-heli' ),
	'section'         => $section,
	'priority'        => $priority ++,
	'default'         => '#ffffff',
	'output'          => array(
		array(
			'element'  => '.mini-cart .mini-cart__button .mini-cart-icon:after',
			'property' => 'color',
		),
	),
	'active_callback' => array(
		array(
			'settings' => 'mini_cart_enable',
			'operator' => '==',
			'value'    => 1,
		),
	),
) );

Kirki::add_field( 'thememove', array(
	'type'            => 'color-alpha',
	'settings'        => 'minicart_number_bg',
	'label'           => __( 'Number Background Color', 'tm-heli' ),
	'section'         => $section,
	'priority'        => $priority ++,
	'default'         => TM_HELI_PRIMARY_COLOR,
	'output'          => array(
		array(
			'element'  => '.mini-cart .mini-cart__button .mini-cart-icon:after',
			'property' => 'background-color',
		),
	),
	'active_callback' => array(
		array(
			'settings' => 'mini_cart_enable',
			'operator' => '==',
			'value'    => 1,
		),
	),
) );
