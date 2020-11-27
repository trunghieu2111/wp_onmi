<?php
/**
 * Heli back compat functionality
 *
 * Prevents Heli from running on WordPress versions prior to 4.3,
 * since this theme is not meant to be backward compatible beyond that and
 * relies on many newer functions and markup changes introduced in 4.3.
 *
 * @package WordPress
 * @subpackage TM_Heli
 * @since Heli 1.0
 */

/**
 * Prevent switching to Heli on old versions of WordPress.
 *
 * Switches to the default theme.
 *
 * @since Heli 1.0
 */
function tm_heli_switch_theme() {
	switch_theme( WP_DEFAULT_THEME, WP_DEFAULT_THEME );

	unset( $_GET['activated'] );

	add_action( 'admin_notices', 'tm_heli_upgrade_notice' );
}
add_action( 'after_switch_theme', 'tm_heli_switch_theme' );

/**
 * Adds a message for unsuccessful theme switch.
 *
 * Prints an update nag after an unsuccessful attempt to switch to
 * Heli on WordPress versions prior to 4.3.
 *
 * @since Heli 1.0
 *
 * @global string $wp_version WordPress version.
 */
function tm_heli_upgrade_notice() {
	$message = sprintf( esc_html__( 'Heli requires at least WordPress version 4.3. You are running version %s. Please upgrade and try again.', 'tm-heli' ), $GLOBALS['wp_version'] );
	printf( '<div class="error"><p>%s</p></div>', $message );
}

/**
 * Prevents the Customizer from being loaded on WordPress versions prior to 4.3.
 *
 * @since Heli 1.0
 *
 * @global string $wp_version WordPress version.
 */
function tm_heli_customize() {
	wp_die( sprintf( esc_html__( 'Heli requires at least WordPress version 4.3. You are running version %s. Please upgrade and try again.', 'tm-heli' ), $GLOBALS['wp_version'] ), '', array(
		'back_link' => true,
	) );
}
add_action( 'load-customize.php', 'tm_heli_customize' );

/**
 * Prevents the Theme Preview from being loaded on WordPress versions prior to 4.3.
 *
 * @since Heli 1.0
 *
 * @global string $wp_version WordPress version.
 */
function tm_heli_preview() {
	if ( isset( $_GET['preview'] ) ) {
		wp_die( sprintf( esc_html__( 'Heli requires at least WordPress version 4.3. You are running version %s. Please upgrade and try again.', 'tm-heli' ), $GLOBALS['wp_version'] ) );
	}
}
add_action( 'template_redirect', 'tm_heli_preview' );
