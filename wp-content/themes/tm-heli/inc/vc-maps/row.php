<?php

$advanced_tab = esc_html__( 'Advanced Design Options', 'tm-heli' );

vc_add_params( 'vc_row', array(
	array(
		'group'       => $advanced_tab,
		'type'        => 'colorpicker',
		'heading'     => 'Background overlay',
		'param_name'  => 'row_bg_overlay',
		'description' => esc_html__( 'Choose an overlay color for background. Leave blank for none.', 'tm-heli' ),
	),
	array(
		'group'       => $advanced_tab,
		'type'        => 'dropdown',
		'heading'     => 'Map background',
		'param_name'  => 'row_bg_map',
		'description' => esc_html__( 'Use Google map as background for row.', 'tm-heli' ),
		'value'       => array(
			'None'       => 'none',
			'Google map' => 'google'
		)
	),
	array(
		'group'       => $advanced_tab,
		'type'        => 'textfield',
		'heading'     => 'Coordinate',
		'param_name'  => 'rbm_coordinates',
		'value'       => '40.7590615,-73.969231',
		'description' => esc_html__( 'To learn how to get coordinates, visit https://support.google.com/maps/answer/18539?hl=en', 'tm-heli' ),
		'dependency'  => array(
			'element' => 'row_bg_map',
			'value'   => 'google',
		)
	),
	array(
		'group'       => $advanced_tab,
		'type'        => 'textfield',
		'heading'     => 'Map zoom',
		'param_name'  => 'rbm_zoom',
		'value'       => '13',
		'description' => esc_html__( 'Map zoom level', 'tm-heli' ),
		'dependency'  => array(
			'element' => 'row_bg_map',
			'value'   => 'google',
		)
	),
	array(
		'group'       => $advanced_tab,
		'type'        => 'dropdown',
		'heading'     => 'Map type',
		'param_name'  => 'rbm_type',
		'description' => esc_html__( 'Choose a map type or a custom style map', 'tm-heli' ),
		'value'       => array(
			'Roadmap'    => 'roadmap',
			'Satellite'  => 'satellite',
			'Hybrid'     => 'hybrid',
			'Terrain'    => 'terrain',
			'Custom ...' => 'custom'
		),
		'dependency'  => array(
			'element' => 'row_bg_map',
			'value'   => 'google',
		)
	),
	array(
		'group'       => $advanced_tab,
		'type'        => 'textarea_raw_html',
		'heading'     => 'Map style',
		'param_name'  => 'rbm_style',
		'description' => esc_html__( 'To get the style snippet, visit https://snazzymaps.com.', 'tm-heli' ),
		'dependency'  => array(
			'element' => 'rbm_type',
			'value'   => 'custom',
		),
		'value'       => '',
	),
) );
