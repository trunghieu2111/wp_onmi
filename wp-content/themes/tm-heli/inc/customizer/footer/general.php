<?php
$section  = 'footer_general';
$priority = 1;

Kirki::add_field( 'thememove', array(
	'type'        => 'preset',
	'settings'    => 'footer_preset',
	'description' => __( 'Choose a preset you want for your footer', 'tm-heli' ),
	'label'       => __( 'Preset', 'tm-heli' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => 'dark',
	'multiple'    => 3,
	'choices'     => array(
		'dark'     => array(
			'label'    => __( 'Standard Dark', 'tm-heli' ),
			'settings' => array(
				'footer_enable'                    => 1,
				'footer_bg_color'                  => TM_HELI_PRIMARY_COLOR,
				'footer_text_color'                => '#ffffff',
				'footer_link_color'                => '#ffffff',
				'footer_link_color_hover'          => '#666666',
				'footer_widget_title_color'        => '#ffffff',
				'copyright_enable'                 => 1,
				'copyright_type'                   => 'copyright-01',
				'copyright_style_bg_color'         => '#ffffff',
				'copyright_style_text_color'       => TM_HELI_PRIMARY_COLOR,
				'copyright_style_link_color'       => TM_HELI_PRIMARY_COLOR,
				'copyright_style_link_color_hover' => '#000000',
			),
		),
		'light'    => array(
			'label'    => __( 'Standard Light', 'tm-heli' ),
			'settings' => array(
				'footer_enable'                    => 1,
				'footer_bg_color'                  => '#f7f7f7',
				'footer_text_color'                => '#444444',
				'footer_link_color'                => '#444444',
				'footer_link_color_hover'          => '#666666',
				'footer_widget_title_color'        => '#222222',
				'copyright_type'                   => 'copyright-01',
				'copyright_enable'                 => 1,
				'copyright_style_bg_color'         => '#222222',
				'copyright_style_text_color'       => '#ffffff',
				'copyright_style_link_color'       => '#ffffff',
				'copyright_style_link_color_hover' => '#666666',
			),
		),
		'simple'   => array(
			'label'    => __( 'Simple', 'tm-heli' ),
			'settings' => array(
				'footer_enable'                    => 0,
				'footer_bg_color'                  => '#f7f7f7',
				'footer_text_color'                => '#444444',
				'footer_link_color'                => '#444444',
				'footer_link_color_hover'          => '#666666',
				'footer_widget_title_color'        => '#222222',
				'copyright_type'                   => 'copyright-02',
				'copyright_enable'                 => 1,
				'copyright_style_bg_color'         => '#222222',
				'copyright_style_text_color'       => '#ffffff',
				'copyright_style_link_color'       => '#ffffff',
				'copyright_style_link_color_hover' => '#666666',
			),
		),
		'centered' => array(
			'label'    => __( 'Centered', 'tm-heli' ),
			'settings' => array(
				'footer_enable'                    => 0,
				'footer_bg_color'                  => '#f7f7f7',
				'footer_text_color'                => '#444444',
				'footer_link_color'                => '#444444',
				'footer_link_color_hover'          => '#666666',
				'footer_widget_title_color'        => '#222222',
				'copyright_type'                   => 'copyright-03',
				'copyright_enable'                 => 1,
				'copyright_style_bg_color'         => '#222222',
				'copyright_style_text_color'       => '#ffffff',
				'copyright_style_link_color'       => '#ffffff',
				'copyright_style_link_color_hover' => '#666666',
			),
		),
	),
) );

Kirki::add_field( 'thememove', array(
	'type'            => 'toggle',
	'settings'        => 'footer_enable',
	'label'           => __( 'Footer', 'tm-heli' ),
	'description'     => __( 'Enabling this option will display footer', 'tm-heli' ),
	'section'         => $section,
	'priority'        => $priority ++,
	'default'         => 1,
	'partial_refresh' => array(
		'footer_enable' => array(
			'selector'        => '.footer-wrapper',
			'render_callback' => function() {
				get_template_part( 'template-parts/footer', '01' );
			},
		),
	),
) );

Kirki::add_field( 'thememove', array(
	'type'        => 'color-alpha',
	'settings'    => 'footer_bg_color',
	'label'       => __( 'Background color', 'tm-heli' ),
	'description' => __( 'Setup background color for your footer', 'tm-heli' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => TM_HELI_PRIMARY_COLOR,
	'transport'   => 'auto',
	'output'      => array(
		array(
			'element'  => '.site-footer',
			'property' => 'background-color',
		),
	),
) );

Kirki::add_field( 'thememove', array(
	'type'        => 'text',
	'settings'    => 'footer_padding',
	'label'       => __( 'Padding', 'tm-heli' ),
	'description' => __( 'Setup padding for your footer', 'tm-heli' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => '80px 0px 80px 0px',
	'transport'   => 'auto',
	'output'      => array(
		array(
			'element'  => '.site-footer',
			'property' => 'padding',
		),
	),
) );
