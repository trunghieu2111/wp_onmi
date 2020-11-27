<?php
vc_map( array(
	'name'     => esc_html__( 'TM Video Player', 'tm-heli' ),
	'base'     => 'thememove_video_player',
	'category' => sprintf( esc_html__( 'by %s', 'tm-heli' ), TM_HELI_PARENT_THEME_NAME ),
	'params'   => array(
		array(
			'type'        => 'textfield',
			'heading'     => 'Video URL',
			'admin_label' => true,
			'param_name'  => 'url',
			'description' => esc_html__( 'Enter your video url (Youtube/Vimeo) here', 'tm-heli' ),
			'value'       => 'http://vimeo.com/92033601',
		),
		array(
			'type'        => 'textfield',
			'heading'     => 'Player Scale',
			'admin_label' => false,
			'param_name'  => 'player_scale',
			'value'       => '1',
		),
		array(
			'type'        => 'colorpicker',
			'heading'     => 'Player Color',
			'admin_label' => false,
			'param_name'  => 'player_color',
			'description' => esc_html__( 'Color of video player', 'tm-heli' ),
		),
		array(
			'type'        => 'colorpicker',
			'heading'     => 'Player Color on hover',
			'admin_label' => false,
			'param_name'  => 'player_color_hover',
			'description' => esc_html__( 'Color of video player on hover', 'tm-heli' ),
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
