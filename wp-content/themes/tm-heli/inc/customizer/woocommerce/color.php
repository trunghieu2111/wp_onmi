<?php
$section  = 'woo_color';
$priority = 1;

Kirki::add_field( 'thememove', array(
	'type'      => 'color',
	'settings'  => 'woo_color_primary',
	'label'     => esc_html__( 'Primary color', 'tm-heli' ),
	'help'      => esc_html__( 'Action buttons/price slider/layered nav UI', 'tm-heli' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => TM_HELI_PRIMARY_COLOR,
	'transport' => 'auto',
) );

Kirki::add_field( 'thememove', array(
	'type'      => 'color',
	'settings'  => 'woo_color_secondary',
	'label'     => esc_html__( 'Secondary color', 'tm-heli' ),
	'help'      => esc_html__( 'Buttons and tabs', 'tm-heli' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => TM_HELI_SECONDARY_COLOR,
	'transport' => 'auto',
) );

Kirki::add_field( 'thememove', array(
	'type'      => 'color',
	'settings'  => 'woo_color_high_light',
	'label'     => esc_html__( 'High Light Color', 'tm-heli' ),
	'help'      => esc_html__( 'Price labels and sale flashes', 'tm-heli' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => '#000',
	'transport' => 'auto',
) );

Kirki::add_field( 'thememove', array(
	'type'      => 'color',
	'settings'  => 'woo_color_content_bg',
	'label'     => esc_html__( 'Content Background Color', 'tm-heli' ),
	'help'      => esc_html__( 'Your themes page background - used for tab active states', 'tm-heli' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => '#000',
	'transport' => 'auto',
) );

Kirki::add_field( 'thememove', array(
	'type'      => 'color',
	'settings'  => 'woo_color_subtext',
	'label'     => esc_html__( 'Subtext Color', 'tm-heli' ),
	'help'      => esc_html__( 'Used for certain text and asides - breadcrumbs, small text etc', 'tm-heli' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => '#000',
	'transport' => 'auto',
) );

Kirki::add_field( 'thememove', array(
	'type'        => 'color',
	'settings'    => 'woo_button_color',
	'label'       => esc_html__( 'Button Color', 'tm-heli' ),
	'description' => esc_html__( 'Color for button', 'tm-heli' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => '#111',
	'transport'   => 'auto',
) );

Kirki::add_field( 'thememove', array(
	'type'        => 'color',
	'settings'    => 'woo_button_color_hover',
	'description' => esc_html__( 'Hover color for button', 'tm-heli' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => '#ffffff',
	'transport'   => 'auto',
) );

Kirki::add_field( 'thememove', array(
	'type'        => 'color',
	'settings'    => 'woo_button_bg_color',
	'label'       => esc_html__( 'Button Background Color', 'tm-heli' ),
	'description' => esc_html__( 'Color for button', 'tm-heli' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => '#dddddd',
	'transport'   => 'auto',
) );

Kirki::add_field( 'thememove', array(
	'type'        => 'color',
	'settings'    => 'woo_button_bg_color_hover',
	'description' => esc_html__( 'Hover background color for button', 'tm-heli' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => TM_HELI_PRIMARY_COLOR,
	'transport'   => 'auto',
) );
