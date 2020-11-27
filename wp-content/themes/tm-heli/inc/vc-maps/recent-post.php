<?php
vc_map( array(
	'name'     => esc_html__( 'TM Recent Posts', 'tm-heli' ),
	'base'     => 'thememove_recent',
	'category' => sprintf( esc_html__( 'by %s', 'tm-heli' ), TM_HELI_PARENT_THEME_NAME ),
	'params'   => array(
		array(
			'type'       => 'checkbox',
			'param_name' => 'show_meta',
			'value'      => array(
				esc_html__( 'Show Meta', 'tm-heli' ) => true
			)
		),
		array(
			'type'       => 'textfield',
			'heading'    => esc_html__( 'Enter numbers of articles', 'tm-heli' ),
			'param_name' => 'number',
		),
	)
) );

