<?php
/**
 * Sample implementation of the Custom Header feature
 * http://codex.wordpress.org/Custom_Headers
 *
 * You can add an optional custom header image to header.php like so ...
 *
 * <?php if ( get_header_image() ) : ?>
 * <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
 * <img src="<?php header_image(); ?>" width="<?php echo esc_attr( get_custom_header()->width ); ?>" height="<?php echo esc_attr( get_custom_header()->height ); ?>" alt="">
 * </a>
 * <?php endif; // End header image check. ?>
 *
 * @package thememove
 */

/**
 * Set up the WordPress core custom header feature.
 *
 * @uses tm_heli_header_style()
 * @uses tm_heli_admin_header_style()
 * @uses tm_heli_admin_header_image()
 */
function tm_heli_custom_header_setup() {
	add_theme_support( 'custom-header', apply_filters( 'tm_heli_custom_header_args', array(
		'default-image'          => '',
		'default-text-color'     => '000000',
		'width'                  => 1000,
		'height'                 => 250,
		'flex-height'            => true,
	) ) );
}

add_action( 'after_setup_theme', 'tm_heli_custom_header_setup' );
