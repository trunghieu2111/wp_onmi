<?php
vc_map( array(
	'name'     => esc_html__( 'TM Vimeo', 'tm-heli' ),
	'base'     => 'thememove_vimeo',
	'category' => sprintf( esc_html__( 'by %s', 'tm-heli' ), TM_HELI_PARENT_THEME_NAME ),
	'params'   => array(
		array(
			'type'        => 'textfield',
			'heading'     => 'Vimeo ID',
			'admin_label' => true,
			'param_name'  => 'url',
			'description' => esc_html__( 'Enter your Vimeo ID here', 'tm-heli' ),
			'value'       => '256081653',
		),
		array(
			'type'        => 'textfield',
			'heading'     => esc_html__( 'Class', 'tm-heli' ),
			'admin_label' => false,
			'param_name'  => 'el_class',
		),
		array(
			'type'       => 'css_editor',
			'heading'    => esc_html__( 'CSS', 'tm-heli' ),
			'param_name' => 'css',
			'group'      => esc_html__( 'Design Options', 'tm-heli' ),
		),
	)
) );
