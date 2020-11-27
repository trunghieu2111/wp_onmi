<?php
$section  = 'header_side_box';
$priority = 1;

Kirki::add_field( 'thememove', array(
	'type'     => 'custom',
	'settings' => 'header_side_box_title_' . $priority ++,
	'section'  => $section,
	'priority' => $priority ++,
	'default'  => '<div class="group_title">' . esc_html__( 'Social Network Icons', 'tm-heli' ) . '</div>',
) );

Kirki::add_field( 'thememove', array(
	'type'     => 'toggle',
	'settings' => 'header_side_box_facebook',
	'label'    => esc_html__( 'Facebook', 'tm-heli' ),
	'section'  => $section,
	'priority' => $priority ++,
	'default'  => 1,
) );

Kirki::add_field( 'thememove', array(
	'type'     => 'toggle',
	'settings' => 'header_side_box_twitter',
	'label'    => esc_html__( 'Twitter', 'tm-heli' ),
	'section'  => $section,
	'priority' => $priority ++,
	'default'  => 1,
) );

Kirki::add_field( 'thememove', array(
	'type'     => 'toggle',
	'settings' => 'header_side_box_pinterest',
	'label'    => esc_html__( 'Pinterest', 'tm-heli' ),
	'section'  => $section,
	'priority' => $priority ++,
	'default'  => 1,
) );

Kirki::add_field( 'thememove', array(
	'type'     => 'toggle',
	'settings' => 'header_side_box_instagram',
	'label'    => esc_html__( 'Instagram', 'tm-heli' ),
	'section'  => $section,
	'priority' => $priority ++,
	'default'  => 1,
) );
