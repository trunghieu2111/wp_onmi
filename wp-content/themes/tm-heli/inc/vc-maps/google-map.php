<?php
vc_map( array(
	'name'     => esc_html__( 'TM Google Maps', 'tm-heli' ),
	'base'     => 'thememove_gmaps',
	'category' => sprintf( esc_html__( 'by %s', 'tm-heli' ), TM_HELI_PARENT_THEME_NAME ),
	'params'   => array(
		array(
			'type'        => 'textfield',
			'heading'     => esc_html__( 'Google API', 'tm-heli' ),
			'admin_label' => true,
			'param_name'  => 'google_api',
			'value'       => '',
			'description' => esc_html__( 'Enter Google API, get it here https://developers.google.com/maps/documentation/javascript/get-api-key', 'tm-heli' ),
		),
		array(
			'type'        => 'textfield',
			'heading'     => esc_html__( 'Address or Coordinate', 'tm-heli' ),
			'admin_label' => true,
			'param_name'  => 'address',
			'value'       => '40.7590615,-73.969231',
			'description' => esc_html__( 'Enter address or coordinate.', 'tm-heli' ),
		),
		array(
			'type'        => 'attach_image',
			'heading'     => esc_html__( 'Marker icon', 'tm-heli' ),
			'param_name'  => 'marker_icon',
			'description' => esc_html__( 'Choose a image for marker address', 'tm-heli' ),
		),
		array(
			'type'        => 'textarea_html',
			'heading'     => esc_html__( 'Marker Information', 'tm-heli' ),
			'param_name'  => 'content',
			'description' => esc_html__( 'Content for info window', 'tm-heli' ),
		),
		array(
			'type'        => 'textfield',
			'heading'     => esc_html__( 'Height', 'tm-heli' ),
			'param_name'  => 'map_height',
			'value'       => '480',
			'description' => esc_html__( 'Enter map height (in pixels or percentage)', 'tm-heli' ),
		),
		array(
			'type'        => 'textfield',
			'heading'     => esc_html__( 'Width', 'tm-heli' ),
			'param_name'  => 'map_width',
			'value'       => '100%',
			'description' => esc_html__( 'Enter map width (in pixels or percentage)', 'tm-heli' ),
		),
		array(
			'type'        => 'textfield',
			'heading'     => esc_html__( 'Zoom level', 'tm-heli' ),
			'param_name'  => 'zoom',
			'value'       => '16',
			'description' => esc_html__( 'Map zoom level', 'tm-heli' ),
		),
		array(
			'type'       => 'checkbox',
			'heading'    => esc_html__( 'Enable Map zoom', 'tm-heli' ),
			'param_name' => 'zoom_enable',
			'value'      => array(
				esc_html__( 'Enable', 'tm-heli' ) => 'enable'
			),
		),
		array(
			'type'        => 'dropdown',
			'heading'     => esc_html__( 'Map type', 'tm-heli' ),
			'admin_label' => true,
			'param_name'  => 'map_type',
			'description' => esc_html__( 'Choose a map type', 'tm-heli' ),
			'value'       => array(
				esc_html__( 'Roadmap', 'tm-heli' )   => 'roadmap',
				esc_html__( 'Satellite', 'tm-heli' ) => 'satellite',
				esc_html__( 'Hybrid', 'tm-heli' )    => 'hybrid',
				esc_html__( 'Terrain', 'tm-heli' )   => 'terrain',
			),
		),
		array(
			'type'        => 'dropdown',
			'heading'     => esc_html__( 'Map style', 'tm-heli' ),
			'admin_label' => true,
			'param_name'  => 'map_style',
			'description' => esc_html__( 'Choose a map style. This approach changes the style of the Roadmap types (base imagery in terrain and satellite views is not affected, but roads, labels, etc. respect styling rules', 'tm-heli' ),
			'value'       => array(
				esc_html__( 'Default', 'tm-heli' )          => 'default',
				esc_html__( 'Grayscale', 'tm-heli' )        => 'style1',
				esc_html__( 'Subtle Grayscale', 'tm-heli' ) => 'style2',
				esc_html__( 'Apple Maps-esque', 'tm-heli' ) => 'style3',
				esc_html__( 'Pale Dawn', 'tm-heli' )        => 'style4',
				esc_html__( 'Muted Blue', 'tm-heli' )       => 'style5',
				esc_html__( 'Paper', 'tm-heli' )            => 'style6',
				esc_html__( 'Light Dream', 'tm-heli' )      => 'style7',
				esc_html__( 'Retro', 'tm-heli' )            => 'style8',
				esc_html__( 'Avocado World', 'tm-heli' )    => 'style9',
				esc_html__( 'Shades of Grey', 'tm-heli' )   => 'style10',
				esc_html__( 'Custom', 'tm-heli' )           => 'custom'
			)
		),
		array(
			'type'       => 'textarea_raw_html',
			'heading'    => esc_html__( 'Map style snippet', 'tm-heli' ),
			'param_name' => 'map_style_snippet',
			'dependency' => array(
				'element' => 'map_style',
				'value'   => 'custom',
			),
			'value' => '',
		),
		array(
			'type'        => 'textfield',
			'heading'     => esc_html__( 'Extra class name', 'tm-heli' ),
			'param_name'  => 'el_class',
			'description' => esc_html__( 'If you want to use multiple Google Maps in one page, please add a class name for them.', 'tm-heli' ),
		),
	)
) );
