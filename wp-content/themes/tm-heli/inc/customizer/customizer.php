<?php
/**
 * thememove Theme Customizer
 *
 * @package thememove
 */

/**
 * Configuration for the Kirki Customizer
 * ======================================
 */
function tm_heli_config() {
	$args = array(
		'styles_priority' => 999,
		'width'           => '300px',
		'url_path'        => TM_HELI_THEME_ROOT . '/core/kirki/',
	);

	return $args;
}

add_filter( 'kirki/config', 'tm_heli_config' );

/**
 * General setups
 * ==============
 */
Kirki::add_config( 'thememove', array(
	'option_type' => 'theme_mod',
	'capability'  => 'edit_theme_options',
) );

require_once TM_HELI_PATH . '/inc/customizer/panels.php';
require_once TM_HELI_PATH . '/inc/customizer/site/_site.php';
require_once TM_HELI_PATH . '/inc/customizer/header/_header.php';
require_once TM_HELI_PATH . '/inc/customizer/navigation/_nav.php';
require_once TM_HELI_PATH . '/inc/customizer/footer/_footer.php';
require_once TM_HELI_PATH . '/inc/customizer/page/_page.php';
require_once TM_HELI_PATH . '/inc/customizer/post/_post.php';
require_once TM_HELI_PATH . '/inc/customizer/portfolio/_portfolio.php';
if ( class_exists( 'WooCommerce' ) ) {
	require_once TM_HELI_PATH . '/inc/customizer/woocommerce/_woo.php';
}

/**
 * Add custom css
 * ==============
 */
function tm_heli_customize_preview_css() {
	wp_enqueue_style( 'tm-heli-kirki-custom-css', TM_HELI_THEME_ROOT . '/core/custom.css' );
}

add_action( 'customize_controls_init', 'tm_heli_customize_preview_css' );

/**
 * Force load all variants and subsets
 * ===================================
 */
function tm_heli_load_all_variants_and_subsets() {
	if ( class_exists( 'Kirki_Fonts_Google' ) ) {
		Kirki_Fonts_Google::$force_load_all_variants = true;
	}
}

add_action( 'after_setup_theme', 'tm_heli_load_all_variants_and_subsets' );

/**
 * Build URL for customizer
 * ========================
 */
add_filter( 'kirki/values/get_value', 'tm_heli_kirki_db_get_theme_mod_value', 10, 2 );

function tm_heli_kirki_db_get_theme_mod_value( $value, $setting ) {
	static $settings;

	if ( is_page() ) {

		$presets = apply_filters( 'tm_heli_page_meta_box_presets', array() );

		if ( ! empty( $presets ) ) {
			foreach ( $presets as $preset ) {
				$page_preset_value = get_post_meta( get_the_ID(), 'infinity_' . $preset, true );

				if ( $page_preset_value && 'default' !== $page_preset_value ) {
					$_GET[ $preset ] = $page_preset_value;
				}
			}
		}
	}

	if ( is_null( $settings ) ) {
		$settings = array();

		if ( ! empty( $_GET ) ) {
			foreach ( $_GET as $key => $query_value ) {
				if ( class_exists( 'Kirki' ) && ! empty( Kirki::$fields[ $key ] ) ) {

					if ( is_array( Kirki::$fields[ $key ] ) &&
					     ( 'kirki-preset' == Kirki::$fields[ $key ]['type'] || 'kirki-select' == Kirki::$fields[ $key ]['type'] ) &&
					     ! empty( Kirki::$fields[ $key ]['args']['choices'] ) &&
					     ! empty( Kirki::$fields[ $key ]['args']['choices'][ $query_value ] ) &&
					     ! empty( Kirki::$fields[ $key ]['args']['choices'][ $query_value ]['settings'] )
					) {
						$field_choice = Kirki::$fields[ $key ]['args']['choices'];
						foreach ( $field_choice[ $query_value ]['settings'] as $kirki_setting => $kirki_value ) {
							$settings[ $kirki_setting ] = $kirki_value;
						}
					}
				}
			}
		}
	}

	if ( isset ( $settings[ $setting ] ) ) {
		return $settings[ $setting ];
	}

	return $value;
}
