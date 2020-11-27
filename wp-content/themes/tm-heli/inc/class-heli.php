<?php

class Heli {
	/**
	 * Top menu
	 */
	static function top_menu() {
		if ( class_exists( 'TM_Walker_Nav_Menu' ) && has_nav_menu( 'primary' ) ) {
			wp_nav_menu( array(
				'theme_location'  => 'primary',
				'menu'            => get_post_meta( get_the_ID(), "infinity_page_menu", true ),
				'menu_id'         => 'primary-menu',
				'container_class' => 'primary-menu',
				'walker'          => new TM_Walker_Nav_Menu
			) );
		} else {
			wp_nav_menu( array(
				'theme_location'  => 'primary',
				'menu'            => get_post_meta( get_the_ID(), "infinity_page_menu", true ),
				'menu_id'         => 'primary-menu',
				'container_class' => 'primary-menu'
			) );
		}
	}

	/**
	 * Mobile menu
	 */
	static function mobile_menu() {
		if ( class_exists( 'TM_Walker_Nav_Menu' ) && has_nav_menu( 'primary' ) ) {
			wp_nav_menu( array(
				'theme_location'  => 'primary',
				'menu_id'         => 'mobile-menu',
				'container_class' => 'mobile-menu',
				'walker'          => new TM_Walker_Nav_Menu
			) );
		} else {
			wp_nav_menu( array(
				'theme_location'  => 'primary',
				'menu_id'         => 'mobile-menu',
				'container_class' => 'mobile-menu'
			) );
		}
	}
}