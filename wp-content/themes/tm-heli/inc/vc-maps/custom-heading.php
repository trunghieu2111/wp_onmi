<?php

vc_add_params( 'vc_custom_heading', array(
	array(
		'type'       => 'textfield',
		'heading'    => esc_html__( 'Font Weight', 'tm-heli' ),
		'param_name' => 'tm_font_weight',
	),
	array(
		'type'       => 'dropdown',
		'heading'    => esc_html__( 'Text Transform', 'tm-heli' ),
		'param_name' => 'tm_text_transform',
		'value'      => array(
			esc_html__( 'None', 'tm-heli' )       => 'none',
			esc_html__( 'Capitalize', 'tm-heli' ) => 'capitalize',
			esc_html__( 'Uppercase', 'tm-heli' )  => 'uppercase',
			esc_html__( 'Lowercase', 'tm-heli' )  => 'lowercase',
			esc_html__( 'Initial', 'tm-heli' )    => 'initial',
			esc_html__( 'Inherit', 'tm-heli' )    => 'inherit',
		),
	),
	array(
		'type'       => 'textfield',
		'heading'    => esc_html__( 'Letter Spacing', 'tm-heli' ),
		'param_name' => 'tm_letter_spacing',
	),
) );
