<?php
/**
 * Shortcode attributes
 * @var $better_menu
 * Shortcode class
 * @var $this WPBakeryShortCode_Thememove_Menu
 */
$output = '';
$atts   = vc_map_get_attributes( $this->getShortcode(), $atts );
extract( $atts );

$nav_menu = wp_get_nav_menu_object( $better_menu ); // Get menu

if ( ! $nav_menu ) {
	return;
}
wp_nav_menu( array( 'fallback_cb' => '', 'menu' => $nav_menu, ) );

?>

