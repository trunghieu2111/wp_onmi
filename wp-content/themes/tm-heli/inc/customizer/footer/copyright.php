<?php
$section  = 'footer_copyright';
$priority = 1;

Kirki::add_field( 'thememove', array(
	'type'            => 'toggle',
	'settings'        => 'copyright_enable',
	'label'           => esc_html__( 'Copyright', 'tm-heli' ),
	'description'     => esc_html__( 'Enabling this option will display copyright area', 'tm-heli' ),
	'section'         => $section,
	'priority'        => $priority ++,
	'default'         => 1,
	'partial_refresh' => array(
		'copyright_enable' => array(
			'selector'        => '.copyright-wrapper',
			'render_callback' => function() {
				require_once TM_HELI_PATH . '/template-parts/' . Kirki::get_option( 'thememove', 'copyright_type' ) . '.php';
			},
		),
	),
) );

Kirki::add_field( 'thememove', array(
	'type'            => 'select',
	'settings'        => 'copyright_type',
	'label'           => esc_html__( 'Copyright Type', 'tm-heli' ),
	'description'     => esc_html__( 'Choose the copyright type you want', 'tm-heli' ),
	'section'         => $section,
	'priority'        => $priority ++,
	'default'         => 'copyright-01',
	'choices'         => array(
		'copyright-01' => 'Type 01',
		'copyright-02' => 'Type 02',
		'copyright-03' => 'Type 03',
	),
	'partial_refresh' => array(
		'copyright_type' => array(
			'selector'        => '.copyright-wrapper',
			'render_callback' => function() {
				require_once TM_HELI_PATH . '/template-parts/' . Kirki::get_option( 'thememove', 'copyright_type' ) . '.php';
			},
		),
	),
) );

Kirki::add_field( 'thememove', array(
	'type'     => 'custom',
	'settings' => 'copyright_group_title_' . $priority ++,
	'section'  => $section,
	'priority' => $priority ++,
	'default'  => '<div class="group_title">General</div>',
) );

Kirki::add_field( 'thememove', array(
	'type'            => 'textarea',
	'settings'        => 'copyright_content',
	'label'           => esc_html__( 'Content', 'tm-heli' ),
	'description'     => esc_html__( 'Entry the text here', 'tm-heli' ),
	'section'         => $section,
	'priority'        => $priority ++,
	'default'         => 'Made with <i class="pe-7s-like"></i> by <a target="_blank" href="#">ThemeMove.com</a>.',
	'partial_refresh' => array(
		'copyright_content' => array(
			'selector'        => '.copyright-wrapper',
			'render_callback' => function() {
				require_once TM_HELI_PATH . '/template-parts/' . Kirki::get_option( 'thememove', 'copyright_type' ) . '.php';
			},
		),
	),
) );

Kirki::add_field( 'thememove', array(
	'type'     => 'custom',
	'settings' => 'copyright_group_title_' . $priority ++,
	'section'  => $section,
	'priority' => $priority ++,
	'default'  => '<div class="group_title">Style</div>',
) );

Kirki::add_field( 'thememove', array(
	'type'      => 'color',
	'settings'  => 'copyright_style_bg_color',
	'label'     => esc_html__( 'Background Color', 'tm-heli' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => '#ffffff',
	'transport' => 'auto',
	'output'    => array(
		array(
			'element'  => '.copyright',
			'property' => 'background-color',
		),
	),
) );

Kirki::add_field( 'thememove', array(
	'type'      => 'color',
	'settings'  => 'copyright_style_text_color',
	'label'     => esc_html__( 'Text Color', 'tm-heli' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => TM_HELI_PRIMARY_COLOR,
	'transport' => 'auto',
	'output'    => array(
		array(
			'element'  => '.copyright',
			'property' => 'color',
		),
	),
) );

Kirki::add_field( 'thememove', array(
	'type'        => 'color',
	'settings'    => 'copyright_style_link_color',
	'label'       => esc_html__( 'Link Color', 'tm-heli' ),
	'description' => esc_html__( 'Link Color', 'tm-heli' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => TM_HELI_PRIMARY_COLOR,
	'transport'   => 'auto',
	'output'      => array(
		array(
			'element'  => '.copyright a',
			'property' => 'color',
		),
	),
) );

Kirki::add_field( 'thememove', array(
	'type'        => 'color',
	'settings'    => 'copyright_style_link_color_hover',
	'description' => esc_html__( 'Link color on hover', 'tm-heli' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => '#000',
	'transport'   => 'auto',
	'output'      => array(
		array(
			'element'  => '.copyright a:hover',
			'property' => 'color',
		),
	),
) );
