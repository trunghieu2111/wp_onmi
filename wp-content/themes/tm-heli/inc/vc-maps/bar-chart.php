<?php
vc_map( array(
	'name'        => esc_html__( 'TM Progress Bar', 'tm-heli' ),
	'base'        => 'vc_progress_bar',
	'icon'        => 'icon-wpb-graph',
	'category'    => esc_html__( 'Content', 'tm-heli' ),
	'description' => esc_html__( 'Animated progress bar', 'tm-heli' ),
	'params'      => array(
		array(
			'type'        => 'textfield',
			'heading'     => esc_html__( 'Widget title', 'tm-heli' ),
			'param_name'  => 'title',
			'description' => esc_html__( 'Enter text used as widget title (Note: located above content element).', 'tm-heli' )
		),
		array(
			'type'        => 'param_group',
			'heading'     => esc_html__( 'Values', 'tm-heli' ),
			'param_name'  => 'values',
			'description' => esc_html__( 'Enter values for graph - value, title and color.', 'tm-heli' ),
			'value'       => urlencode( json_encode( array(
				array(
					'label' => esc_html__( 'Development', 'tm-heli' ),
					'value' => '90',
				),
				array(
					'label' => esc_html__( 'Design', 'tm-heli' ),
					'value' => '80',
				),
				array(
					'label' => esc_html__( 'Marketing', 'tm-heli' ),
					'value' => '70',
				),
			) ) ),
			'params'      => array(
				array(
					'type'        => 'textfield',
					'heading'     => esc_html__( 'Label', 'tm-heli' ),
					'param_name'  => 'label',
					'description' => esc_html__( 'Enter text used as title of bar.', 'tm-heli' ),
					'admin_label' => true,
				),
				array(
					'type'        => 'textfield',
					'heading'     => esc_html__( 'Icon class', 'tm-heli' ),
					'param_name'  => 'icon_class',
					'description' => esc_html__( 'Enter icon class.', 'tm-heli' ),
					'admin_label' => true,
				),
				array(
					'type'        => 'textfield',
					'heading'     => esc_html__( 'Value', 'tm-heli' ),
					'param_name'  => 'value',
					'description' => esc_html__( 'Enter value of bar.', 'tm-heli' ),
					'admin_label' => true,
				),
				array(
					'type'               => 'dropdown',
					'heading'            => esc_html__( 'Color', 'tm-heli' ),
					'param_name'         => 'color',
					'value'              => array(
						                        esc_html__( 'Default', 'tm-heli' ) => ''
					                        ) + array(
						                        esc_html__( 'Classic Grey', 'tm-heli' )      => 'bar_grey',
						                        esc_html__( 'Classic Blue', 'tm-heli' )      => 'bar_blue',
						                        esc_html__( 'Classic Turquoise', 'tm-heli' ) => 'bar_turquoise',
						                        esc_html__( 'Classic Green', 'tm-heli' )     => 'bar_green',
						                        esc_html__( 'Classic Orange', 'tm-heli' )    => 'bar_orange',
						                        esc_html__( 'Classic Red', 'tm-heli' )       => 'bar_red',
						                        esc_html__( 'Classic Black', 'tm-heli' )     => 'bar_black',
					                        ) + array(
						                        esc_html__( 'Custom Color', 'tm-heli' ) => 'custom'
					                        ),
					'description'        => esc_html__( 'Select single bar background color.', 'tm-heli' ),
					'admin_label'        => true,
					'param_holder_class' => 'vc_colored-dropdown'
				),
				array(
					'type'        => 'colorpicker',
					'heading'     => esc_html__( 'Custom color', 'tm-heli' ),
					'param_name'  => 'customcolor',
					'description' => esc_html__( 'Select custom single bar background color.', 'tm-heli' ),
					'dependency'  => array(
						'element' => 'color',
						'value'   => array( 'custom' )
					),
				),
				array(
					'type'        => 'colorpicker',
					'heading'     => esc_html__( 'Custom text color', 'tm-heli' ),
					'param_name'  => 'customtxtcolor',
					'description' => esc_html__( 'Select custom single bar text color.', 'tm-heli' ),
					'dependency'  => array(
						'element' => 'color',
						'value'   => array( 'custom' )
					),
				),
			),
		),
		array(
			'type'        => 'textfield',
			'heading'     => esc_html__( 'Units', 'tm-heli' ),
			'param_name'  => 'units',
			'description' => esc_html__( 'Enter measurement units (Example: %, px, points, etc. Note: graph value and units will be appended to graph title).', 'tm-heli' )
		),
		array(
			'type'               => 'dropdown',
			'heading'            => esc_html__( 'Color', 'tm-heli' ),
			'param_name'         => 'bgcolor',
			'value'              => array(
				                        esc_html__( 'Classic Grey', 'tm-heli' )      => 'bar_grey',
				                        esc_html__( 'Classic Blue', 'tm-heli' )      => 'bar_blue',
				                        esc_html__( 'Classic Turquoise', 'tm-heli' ) => 'bar_turquoise',
				                        esc_html__( 'Classic Green', 'tm-heli' )     => 'bar_green',
				                        esc_html__( 'Classic Orange', 'tm-heli' )    => 'bar_orange',
				                        esc_html__( 'Classic Red', 'tm-heli' )       => 'bar_red',
				                        esc_html__( 'Classic Black', 'tm-heli' )     => 'bar_black',
			                        ) + array(
				                        esc_html__( 'Custom Color', 'tm-heli' ) => 'custom'
			                        ),
			'description'        => esc_html__( 'Select bar background color.', 'tm-heli' ),
			'admin_label'        => true,
			'param_holder_class' => 'vc_colored-dropdown',
		),
		array(
			'type'        => 'colorpicker',
			'heading'     => esc_html__( 'Bar custom background color', 'tm-heli' ),
			'param_name'  => 'custombgcolor',
			'description' => esc_html__( 'Select custom background color for bars.', 'tm-heli' ),
			'dependency'  => array( 'element' => 'bgcolor', 'value' => array( 'custom' ) )
		),
		array(
			'type'        => 'colorpicker',
			'heading'     => esc_html__( 'Bar custom text color', 'tm-heli' ),
			'param_name'  => 'customtxtcolor',
			'description' => esc_html__( 'Select custom text color for bars.', 'tm-heli' ),
			'dependency'  => array( 'element' => 'bgcolor', 'value' => array( 'custom' ) )
		),
		array(
			'type'       => 'checkbox',
			'heading'    => esc_html__( 'Options', 'tm-heli' ),
			'param_name' => 'options',
			'value'      => array(
				esc_html__( 'Add stripes', 'tm-heli' )                                          => 'striped',
				esc_html__( 'Add animation (Note: visible only with striped bar).', 'tm-heli' ) => 'animated'
			)
		),
		array(
			'type'        => 'textfield',
			'heading'     => esc_html__( 'Extra class name', 'tm-heli' ),
			'param_name'  => 'el_class',
			'description' => esc_html__( 'Style particular content element differently - add a class name and refer to it in custom CSS.', 'tm-heli' )
		),
		array(
			'type'       => 'css_editor',
			'heading'    => esc_html__( 'CSS box', 'tm-heli' ),
			'param_name' => 'css',
			'group'      => esc_html__( 'Design Options', 'tm-heli' )
		),
	)
) );
