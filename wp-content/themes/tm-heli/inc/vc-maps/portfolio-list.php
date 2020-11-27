<?php
vc_map( array(
	'name'     => esc_html__( 'TM Portfolio List', 'tm-heli' ),
	'base'     => 'thememove_portfolio2',
	'category' => sprintf( esc_html__( 'by %s', 'tm-heli' ), TM_HELI_PARENT_THEME_NAME ),
	'params'   => array(
		array(
			'type'       => 'dropdown',
			'heading'    => 'Show Share Buttons',
			'param_name' => 'enable_share',
			'value'      => array(
				'No'  => 'false',
				'Yes' => 'true',
			),
		),
	)
) );
