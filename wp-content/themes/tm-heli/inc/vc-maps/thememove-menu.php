<?php
function get_menu() {
	$menus = get_terms( 'nav_menu', array( 'hide_empty' => false ) );
	// Properly format the array.
	$items = array();
	foreach ( $menus as $menu ) {
		$items[ $menu->slug ] = $menu->name;
	}

	return $items;
}

vc_map( array(
	'name'                      => esc_html__( 'TM Better Menu', 'tm-heli' ),
	'base'                      => 'thememove_menu',
	'category'                  => sprintf( esc_html__( 'by %s', 'tm-heli' ), TM_HELI_PARENT_THEME_NAME ),
	'allowed_container_element' => 'vc_row',
	'params'                    => array(
		array(
			'type'        => 'dropdown',
			'heading'     => esc_html__( 'Menu', 'tm-heli' ),
			'value'       => get_menu(),
			'admin_label' => true,
			'param_name'  => 'better_menu',
		),
	),
) );
