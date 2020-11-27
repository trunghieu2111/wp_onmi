<?php
vc_map( array(
	'name'     => esc_html__( 'TM Services', 'tm-heli' ),
	'base'     => 'thememove_services',
	'category' => sprintf( esc_html__( 'by %s', 'tm-heli' ), TM_HELI_PARENT_THEME_NAME ),
	'params'   => array(
		array(
			'type'       => 'param_group',
			'heading'    => esc_html__( 'Services', 'tm-heli' ),
			'param_name' => 'services',
			'params'     => array(
				array(
					'type'        => 'attach_image',
					'heading'     => esc_html__( 'Photo', 'tm-heli' ),
					'param_name'  => 'photo',
					'admin_label' => true,
					'description' => esc_html__( 'History photo', 'tm-heli' ),
				),
				array(
					'type'        => 'textfield',
					'heading'     => esc_html__( 'Title', 'tm-heli' ),
					'param_name'  => 'title',
					'value'       => '',
					'description' => esc_html__( 'Enter title.', 'tm-heli' ),
					'admin_label' => true,
				),
				array(
					'type'        => 'textarea',
					'heading'     => esc_html__( 'Content', 'tm-heli' ),
					'param_name'  => 'content',
					'value'       => '',
					'description' => esc_html__( 'Enter content.', 'tm-heli' ),
					'admin_label' => false,
				),
				array(
					'type'        => 'textfield',
					'heading'     => esc_html__( 'Read more text', 'tm-heli' ),
					'param_name'  => 'rm_text',
					'value'       => 'Read more',
					'admin_label' => false,
				),
				array(
					'type'        => 'textfield',
					'heading'     => esc_html__( 'Read more link', 'tm-heli' ),
					'param_name'  => 'rm_link',
					'value'       => '',
					'admin_label' => false,
				),
			),
		),
		array(
			'type'       => 'checkbox',
			'heading'    => esc_html__( 'Auto play', 'tm-heli' ),
			'param_name' => 'autoplay',
			'value'      => array( 'Enable' => 'enable' ),
		),
		array(
			'type'        => 'textfield',
			'heading'     => esc_html__( 'Extra class name', 'tm-heli' ),
			'param_name'  => 'el_class',
			'description' => esc_html__( 'If you want to use multiple Google Maps in one page, please add a class name for them.', 'tm-heli' ),
		),
	),
) );
