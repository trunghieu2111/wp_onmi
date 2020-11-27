<?php
vc_map( array(
	'name'                      => esc_html__( 'TM Testimonials', 'tm-heli' ),
	'base'                      => 'thememove_testi',
	'category'                  => sprintf( esc_html__( 'by %s', 'tm-heli' ), TM_HELI_PARENT_THEME_NAME ),
	'allowed_container_element' => 'vc_row',
	'params'                    => array(
		array(
			'type'       => 'dropdown',
			'heading'    => esc_html__( 'Enable Carousel', 'tm-heli' ),
			'param_name' => 'enable_carousel',
			'value'      => array(
				esc_html__( 'No', 'tm-heli' )  => 'false',
				esc_html__( 'Yes', 'tm-heli' ) => 'true',
			),
		),
		array(
			'type'       => 'dropdown',
			'heading'    => esc_html__( 'Show Bullets', 'tm-heli' ),
			'param_name' => 'display_bullets',
			'value'      => array(
				esc_html__( 'No', 'tm-heli' )  => 'false',
				esc_html__( 'Yes', 'tm-heli' ) => 'true',
			),
			'dependency' => array(
				'element' => 'enable_carousel',
				'value'   => array( 'true' )
			)
		),
		array(
			'type'       => 'dropdown',
			'heading'    => esc_html__( 'Enable Autoplay', 'tm-heli' ),
			'param_name' => 'enable_autoplay',
			'value'      => array(
				esc_html__( 'No', 'tm-heli' )  => 'false',
				esc_html__( 'Yes', 'tm-heli' ) => 'true',
			),
			'dependency' => array(
				'element' => 'enable_carousel',
				'value'   => array( 'true' )
			)
		),
		array(
			'type'        => 'textfield',
			'heading'     => esc_html__( 'Slides to display', 'tm-heli' ),
			'param_name'  => 'slides_to_display',
			'value'       => '',
			'description' => esc_html__( 'Number of Slides to display (default: 2)', 'tm-heli' ),
			'dependency'  => array(
				'element' => 'enable_carousel',
				'value'   => array( 'true' )
			)
		),
		array(
			'type'        => 'textfield',
			'heading'     => esc_html__( 'Number', 'tm-heli' ),
			'param_name'  => 'limit',
			'value'       => '2',
			'description' => esc_html__( 'Number of Testimonials', 'tm-heli' ),
		),
		array(
			'type'        => 'dropdown',
			'heading'     => esc_html__( 'Order by', 'tm-heli' ),
			'param_name'  => 'orderby',
			'value'       => array(
				esc_html__( 'None', 'tm-heli' )       => 'none',
				esc_html__( 'ID', 'tm-heli' )         => 'ID',
				esc_html__( 'Title', 'tm-heli' )      => 'title',
				esc_html__( 'Date', 'tm-heli' )       => 'date',
				esc_html__( 'Menu Order', 'tm-heli' ) => 'menu_order',
			),
			'description' => esc_html__( 'How to order the items', 'tm-heli' ),
		),
		array(
			'type'        => 'dropdown',
			'heading'     => esc_html__( 'Order', 'tm-heli' ),
			'param_name'  => 'order',
			'value'       => array(
				esc_html__( 'DESC', 'tm-heli' ) => 'DESC',
				esc_html__( 'ASC', 'tm-heli' )  => 'ASC',
			),
			'description' => esc_html__( 'How to order the items', 'tm-heli' ),
		),
		array(
			'type'        => 'dropdown',
			'heading'     => esc_html__( 'Show Author Info', 'tm-heli' ),
			'param_name'  => 'display_author',
			'value'       => array(
				esc_html__( 'No', 'tm-heli' )  => 'false',
				esc_html__( 'Yes', 'tm-heli' ) => 'true',
			),
			'description' => esc_html__( 'Choose yes to show author name and byline', 'tm-heli' ),
		),
		array(
			'type'        => 'dropdown',
			'heading'     => esc_html__( 'Show URL', 'tm-heli' ),
			'param_name'  => 'display_url',
			'value'       => array(
				esc_html__( 'No', 'tm-heli' )  => 'false',
				esc_html__( 'Yes', 'tm-heli' ) => 'true',
			),
			'description' => esc_html__( 'Choose yes to show author url', 'tm-heli' ),
			'dependency'  => array(
				'element' => 'display_author',
				'value'   => array( 'true' )
			)
		),
		array(
			'type'        => 'dropdown',
			'heading'     => esc_html__( 'Show Author Image', 'tm-heli' ),
			'param_name'  => 'display_avatar',
			'value'       => array(
				esc_html__( 'No', 'tm-heli' )  => false,
				esc_html__( 'Yes', 'tm-heli' ) => true,
			),
			'description' => esc_html__( 'Choose yes to show author avatar', 'tm-heli' ),
		),
		array(
			'type'        => 'textfield',
			'heading'     => esc_html__( 'Avatar Size', 'tm-heli' ),
			'param_name'  => 'size',
			'value'       => '',
			'description' => esc_html__( 'Size of Avatar', 'tm-heli' ),
		),
		array(
			'type'       => 'textfield',
			'heading'    => esc_html__( 'Extra class name', 'tm-heli' ),
			'param_name' => 'el_class',
		),
	)
) );
