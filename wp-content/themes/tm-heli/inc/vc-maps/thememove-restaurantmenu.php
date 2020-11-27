<?php
vc_map( array(
	'name'                      => esc_html__( 'TM Restaurant Menu', 'tm-heli' ),
	'base'                      => 'thememove_restaurantmenu',
	'category'                  => sprintf( esc_html__( 'by %s', 'tm-heli' ), TM_HELI_PARENT_THEME_NAME ),
	'allowed_container_element' => 'vc_row',
	'params'                    => array(
		array(
			'type'        => 'dropdown',
			'heading'     => esc_html__( 'Column', 'tm-heli' ),
			'param_name'  => 'column',
			'admin_label' => true,
			'value'       => array(
				esc_html__( '1', 'tm-heli' ) => '1',
				esc_html__( '2', 'tm-heli' ) => '2',
				esc_html__( '3', 'tm-heli' ) => '3',
				esc_html__( '4', 'tm-heli' ) => '4'
			),
		),
		array(
			'type'       => 'param_group',
			'heading'    => esc_html__( 'Menus', 'tm-heli' ),
			'param_name' => 'menus',
			'params'     => array(
				array(
					'type'        => 'textfield',
					'heading'     => esc_html__( 'Title', 'tm-heli' ),
					'param_name'  => 'title',
					'value'       => '',
					'description' => esc_html__( 'Enter text used as title.', 'tm-heli' ),
					'admin_label' => true,
				),
				array(
					'type'        => 'textfield',
					'heading'     => esc_html__( 'Description', 'tm-heli' ),
					'param_name'  => 'desc',
					'value'       => '',
					'description' => esc_html__( 'Enter text used as description.', 'tm-heli' ),
					'admin_label' => false,
				),
				array(
					'type'        => 'textfield',
					'heading'     => esc_html__( 'Price', 'tm-heli' ),
					'param_name'  => 'price',
					'value'       => '',
					'description' => esc_html__( 'Enter price.', 'tm-heli' ),
					'admin_label' => true,
				),
			),
		),
		array(
			'type'       => 'textfield',
			'heading'    => esc_html__( 'Extra class name', 'tm-heli' ),
			'param_name' => 'el_class',
		),
	)
) );
