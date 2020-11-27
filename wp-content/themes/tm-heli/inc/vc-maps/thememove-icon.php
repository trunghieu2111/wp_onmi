<?php
require_once TM_HELI_PATH . '/inc/pe7stroke.php';

vc_map( array(
	'name'        => esc_html__( 'TM Icon', 'tm-heli' ),
	'base'        => 'thememove_icon',
	'category'    => sprintf( esc_html__( 'by %s', 'tm-heli' ), TM_HELI_PARENT_THEME_NAME ),
	'description' => esc_html__( 'Eye catching icons from libraries', 'tm-heli' ),
	'params'      => array(
		array(
			'type'        => 'dropdown',
			'heading'     => esc_html__( 'Icon library', 'tm-heli' ),
			'value'       => array(
				esc_html__( 'Font Awesome', 'tm-heli' ) => 'fontawesome',
				esc_html__( 'Open Iconic', 'tm-heli' )  => 'openiconic',
				esc_html__( 'Typicons', 'tm-heli' )     => 'typicons',
				esc_html__( 'Entypo', 'tm-heli' )       => 'entypo',
				esc_html__( 'Linecons', 'tm-heli' )     => 'linecons',
				esc_html__( 'P7 Stroke', 'tm-heli' )    => 'pe7stroke',
			),
			'admin_label' => true,
			'param_name'  => 'type',
			'description' => esc_html__( 'Select icon library.', 'tm-heli' ),
		),
		array(
			'type'        => 'iconpicker',
			'heading'     => esc_html__( 'Icon', 'tm-heli' ),
			'param_name'  => 'icon_fontawesome',
			'value'       => 'fa fa-adjust',
			'settings'    => array(
				'emptyIcon'    => false,
				'iconsPerPage' => 4000,
			),
			'dependency'  => array(
				'element' => 'type',
				'value'   => 'fontawesome',
			),
			'description' => esc_html__( 'Select icon from library.', 'tm-heli' ),
		),
		array(
			'type'        => 'iconpicker',
			'heading'     => esc_html__( 'Icon', 'tm-heli' ),
			'param_name'  => 'icon_openiconic',
			'value'       => 'vc-oi vc-oi-dial',
			'settings'    => array(
				'emptyIcon'    => false,
				'type'         => 'openiconic',
				'iconsPerPage' => 4000,
			),
			'dependency'  => array(
				'element' => 'type',
				'value'   => 'openiconic',
			),
			'description' => esc_html__( 'Select icon from library.', 'tm-heli' ),
		),
		array(
			'type'        => 'iconpicker',
			'heading'     => esc_html__( 'Icon', 'tm-heli' ),
			'param_name'  => 'icon_typicons',
			'value'       => 'typcn typcn-adjust-brightness',
			'settings'    => array(
				'emptyIcon'    => false,
				'type'         => 'typicons',
				'iconsPerPage' => 4000,
			),
			'dependency'  => array(
				'element' => 'type',
				'value'   => 'typicons',
			),
			'description' => esc_html__( 'Select icon from library.', 'tm-heli' ),
		),
		array(
			'type'       => 'iconpicker',
			'heading'    => esc_html__( 'Icon', 'tm-heli' ),
			'param_name' => 'icon_entypo',
			'value'      => 'entypo-icon entypo-icon-note',
			'settings'   => array(
				'emptyIcon'    => false,
				'type'         => 'entypo',
				'iconsPerPage' => 4000,
			),
			'dependency' => array(
				'element' => 'type',
				'value'   => 'entypo',
			),
		),
		array(
			'type'        => 'iconpicker',
			'heading'     => esc_html__( 'Icon', 'tm-heli' ),
			'param_name'  => 'icon_linecons',
			'value'       => 'vc_li vc_li-heart',
			'settings'    => array(
				'emptyIcon'    => false,
				'type'         => 'linecons',
				'iconsPerPage' => 4000,
			),
			'dependency'  => array(
				'element' => 'type',
				'value'   => 'linecons',
			),
			'description' => esc_html__( 'Select icon from library.', 'tm-heli' ),
		),
		array(
			'type'        => 'iconpicker',
			'heading'     => esc_html__( 'Icon', 'tm-heli' ),
			'param_name'  => 'icon_pe7stroke',
			'value'       => 'pe-7s-album',
			'settings'    => array(
				'emptyIcon'    => false,
				'type'         => 'pe7stroke',
				'iconsPerPage' => 400,
			),
			'dependency'  => array(
				'element' => 'type',
				'value'   => 'pe7stroke',
			),
			'description' => esc_html__( 'Select icon from library.', 'tm-heli' ),
		),
		array(
			'type'        => 'textfield',
			'heading'     => 'Size',
			'admin_label' => true,
			'param_name'  => 'size',
		),
		array(
			'type'        => 'colorpicker',
			'heading'     => esc_html__( 'Custom color', 'tm-heli' ),
			'param_name'  => 'custom_color',
			'description' => esc_html__( 'Select custom icon color.', 'tm-heli' ),
		),
		array(
			'type'        => 'dropdown',
			'heading'     => esc_html__( 'Background shape', 'tm-heli' ),
			'param_name'  => 'background_style',
			'value'       => array(
				esc_html__( 'None', 'tm-heli' )            => '',
				esc_html__( 'Circle', 'tm-heli' )          => 'rounded',
				esc_html__( 'Square', 'tm-heli' )          => 'boxed',
				esc_html__( 'Rounded', 'tm-heli' )         => 'rounded-less',
				esc_html__( 'Outline Circle', 'tm-heli' )  => 'rounded-outline',
				esc_html__( 'Outline Square', 'tm-heli' )  => 'boxed-outline',
				esc_html__( 'Outline Rounded', 'tm-heli' ) => 'rounded-less-outline',
			),
			'description' => esc_html__( 'Select background shape and style for icon.', 'tm-heli' ),
		),
		array(
			'type'        => 'colorpicker',
			'heading'     => esc_html__( 'Custom background color', 'tm-heli' ),
			'param_name'  => 'custom_background_color',
			'description' => esc_html__( 'Select custom icon background color.', 'tm-heli' ),
		),
		array(
			'type'        => 'dropdown',
			'heading'     => esc_html__( 'Icon alignment', 'tm-heli' ),
			'param_name'  => 'align',
			'value'       => array(
				esc_html__( 'Left', 'tm-heli' )   => 'left',
				esc_html__( 'Right', 'tm-heli' )  => 'right',
				esc_html__( 'Center', 'tm-heli' ) => 'center',
			),
			'description' => esc_html__( 'Select icon alignment.', 'tm-heli' ),
		),
		array(
			'type'        => 'vc_link',
			'heading'     => esc_html__( 'URL (Link)', 'tm-heli' ),
			'param_name'  => 'link',
			'description' => esc_html__( 'Add link to icon.', 'tm-heli' ),
		),
		array(
			'type'        => 'textfield',
			'heading'     => esc_html__( 'Extra class name', 'tm-heli' ),
			'param_name'  => 'el_class',
			'description' => esc_html__( 'Style particular content element differently - add a class name and refer to it in custom CSS.', 'tm-heli' ),
		),
		array(
			'type'       => 'css_editor',
			'heading'    => esc_html__( 'CSS', 'tm-heli' ),
			'param_name' => 'css',
			'group'      => esc_html__( 'Design Options', 'tm-heli' ),
		),
	),
	'js_view'     => 'VcIconElementView_Backend',
) );
