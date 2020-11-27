<?php
vc_map( array(
	'name'     => esc_html__( 'TM Button', 'tm-heli' ),
	'base'     => 'thememove_button',
	'category' => sprintf( esc_html__( 'by %s', 'tm-heli' ), TM_HELI_PARENT_THEME_NAME ),
	'params'   => array(
		array(
			'type'        => 'textfield',
			'heading'     => esc_html__( 'Text', 'tm-heli' ),
			'admin_label' => true,
			'param_name'  => 'text',
		),
		array(
			'type'        => 'textfield',
			'heading'     => esc_html__( 'Url', 'tm-heli' ),
			'admin_label' => true,
			'param_name'  => 'url',
			'description' => esc_html__( 'Entry your url here', 'tm-heli' ),
		),
		array(
			'type'        => 'textfield',
			'heading'     => esc_html__( 'Class', 'tm-heli' ),
			'admin_label' => true,
			'param_name'  => 'el_class',
		),
		array(
			'type'       => 'css_editor',
			'heading'    => esc_html__( 'CSS', 'tm-heli' ),
			'param_name' => 'css',
			'group'      => esc_html__( 'Design Options', 'tm-heli' ),
		),
	),
) );
