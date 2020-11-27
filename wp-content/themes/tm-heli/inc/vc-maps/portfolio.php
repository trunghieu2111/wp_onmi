<?php
vc_map( array(
	'name'     => esc_html__( 'TM Porfolio Info', 'tm-heli' ),
	'base'     => 'thememove_portfolio',
	'category' => sprintf( esc_html__( 'by %s', 'tm-heli' ), TM_HELI_PARENT_THEME_NAME ),
	'params'   => array(
		array(
			'type'       => 'textfield',
			'heading'    => esc_html__( 'Date', 'tm-heli' ),
			'param_name' => 'date',
		),
		array(
			'type'       => 'textfield',
			'heading'    => esc_html__( 'Client', 'tm-heli' ),
			'param_name' => 'client',
		),
		array(
			'type'       => 'dropdown',
			'heading'    => esc_html__( 'Enable share', 'tm-heli' ),
			'param_name' => 'share',
			'value'      => array(
				esc_html__( 'Yes', 'tm-heli' ) => 'yes',
				esc_html__( 'No', 'tm-heli' )  => 'no'
			),
		),
		array(
			'type'       => 'textfield',
			'heading'    => esc_html__( 'Website link', 'tm-heli' ),
			'param_name' => 'link',
		),
		array(
			'type'       => 'textfield',
			'heading'    => esc_html__( 'Custom class', 'tm-heli' ),
			'param_name' => 'el_class',
		),
		array(
			'type'       => 'css_editor',
			'heading'    => esc_html__( 'CSS', 'tm-heli' ),
			'param_name' => 'css',
			'group'      => esc_html__( 'Design Options', 'tm-heli' ),
		),
	)
) );

