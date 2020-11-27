<?php
vc_map( array(
	'name'                      => esc_html__( 'TM Countdown', 'tm-heli' ),
	'base'                      => 'thememove_countdown',
	'category'                  => sprintf( esc_html__( 'by %s', 'tm-heli' ), TM_HELI_PARENT_THEME_NAME ),
	'allowed_container_element' => 'vc_row',
	'params'                    => array(
		array(
			'type'        => 'textfield',
			'heading'     => esc_html__( 'Date time', 'tm-heli' ),
			'param_name'  => 'time',
			'value'       => '2016/10/20 10:00:00',
			'admin_label' => true,
			'description' => esc_html__( 'Full date time, example "2016/10/20 10:00:00"', 'tm-heli' )
		),
		array(
			'type'       => 'textfield',
			'heading'    => esc_html__( '"Days" text', 'tm-heli' ),
			'param_name' => 'days',
			'value'      => 'Days'
		),
		array(
			'type'       => 'textfield',
			'heading'    => esc_html__( '"Hours" text', 'tm-heli' ),
			'param_name' => 'hours',
			'value'      => 'Hours'
		),
		array(
			'type'       => 'textfield',
			'heading'    => esc_html__( '"Minutes" text', 'tm-heli' ),
			'param_name' => 'minutes',
			'value'      => 'Minutes'
		),
		array(
			'type'       => 'textfield',
			'heading'    => esc_html__( '"Seconds" text', 'tm-heli' ),
			'param_name' => 'seconds',
			'value'      => 'Seconds'
		),
		array(
			'type'       => 'textfield',
			'heading'    => esc_html__( 'Extra class name', 'tm-heli' ),
			'param_name' => 'el_class',
		),
	)
) );
