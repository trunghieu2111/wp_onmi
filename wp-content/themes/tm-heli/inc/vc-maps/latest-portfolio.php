<?php
vc_map( array(
	'name'     => esc_html__( 'TM Latest Portfolio', 'tm-heli' ),
	'base'     => 'thememove_latest_portfolio',
	'category' => sprintf( esc_html__( 'by %s', 'tm-heli' ), TM_HELI_PARENT_THEME_NAME ),
	'params'   => array(
		array(
			'type'       => 'textfield',
			'heading'    => esc_html__( 'Heading', 'tm-heli' ),
			'param_name' => 'tm_heading',
		),
		array(
			'type'        => 'textfield',
			'heading'     => esc_html__( 'Extra class name', 'tm-heli' ),
			'param_name'  => 'el_class',
			'description' => esc_html__( 'If you want to use multiple Google Maps in one page, please add a class name for them.', 'tm-heli' ),
		),
		array(
			'type'       => 'css_editor',
			'heading'    => esc_html__( 'CSS', 'tm-heli' ),
			'param_name' => 'css',
			'group'      => esc_html__( 'Design Options', 'tm-heli' ),
		),
	),
) );
