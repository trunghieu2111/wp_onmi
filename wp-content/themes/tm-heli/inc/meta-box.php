<?php
/**
 * Include and setup custom metaboxes and fields. (make sure you copy this file to outside the CMB directory)
 *
 * @category YourThemeOrPlugin
 * @package  Metaboxes
 * @license  http://www.opensource.org/licenses/gpl-license.php GPL v2.0 (or later)
 * @link     https://github.com/webdevstudios/Custom-Metaboxes-and-Fields-for-WordPress
 */

/**
 * Get the bootstrap! If using the plugin from wordpress.org, REMOVE THIS!
 */

/**
 * Conditionally displays a field when used as a callback in the 'show_on_cb' field parameter
 *
 * @param CMB2_Field object $field Field object
 *
 * @return bool                     True if metabox should show
 */
function cmb2_hide_if_no_cats( $field ) {
	if ( ! has_tag( 'cats', $field->object_id ) ) {
		return false;
	}

	return true;
}

add_filter( 'tm_heli_page_meta_box_presets', 'tm_heli_page_meta_box_presets' );
function tm_heli_page_meta_box_presets( $presets ) {
	$presets[] = 'preset';

	return $presets;
}

add_action( 'cmb2_admin_init', 'tm_heli_metaboxes' );
function tm_heli_metaboxes() {

	$prefix = 'infinity_';

	$cmb = new_cmb2_box( [
		'id'           => 'page_metabox',
		'title'        => esc_html__( 'Page Settings', 'tm-heli' ),
		'object_types' => [ 'page', ], // Post type
		'context'      => 'normal',
		'priority'     => 'high',
		'show_names'   => true, // Show field names on the left
		// 'cmb_styles' => false, // false to disable the CMB stylesheet
		// 'closed'     => true, // Keep the metabox closed by default
	] );

	$fields = [
		[
			'name'    => esc_html__( 'Page Layout', 'tm-heli' ),
			'desc'    => esc_html__( 'Choose a layout you want', 'tm-heli' ),
			'id'      => $prefix . 'page_layout_private',
			'type'    => 'select',
			'options' => [
				'default'         => esc_html__( 'Default', 'tm-heli' ),
				'full-width'      => esc_html__( 'Full width', 'tm-heli' ),
				'content-sidebar' => esc_html__( 'Content-Sidebar', 'tm-heli' ),
				'sidebar-content' => esc_html__( 'Sidebar-Content', 'tm-heli' ),
			],
		],
		[
			'name'    => esc_html__( 'Page Menu', 'tm-heli' ),
			'desc'    => esc_html__( 'Choose a custom menu for your page', 'tm-heli' ),
			'id'      => $prefix . 'page_menu',
			'type'    => 'select',
			'options' => tm_heli_get_all_menus(),
		],
		[
			'name' => esc_html__( 'Custom Logo', 'tm-heli' ),
			'desc' => esc_html__( 'Upload an image or enter a URL for custom logo', 'tm-heli' ),
			'id'   => $prefix . 'custom_logo',
			'type' => 'file',
		],
		[
			'name' => esc_html__( 'Disable Title', 'tm-heli' ),
			'desc' => esc_html__( 'Check this box to disable the title of the page', 'tm-heli' ),
			'id'   => $prefix . 'disable_title',
			'type' => 'checkbox',
		],
		[
			'name' => esc_html__( 'Custom Title', 'tm-heli' ),
			'desc' => esc_html__( 'Enter custom title for this page', 'tm-heli' ),
			'id'   => $prefix . 'custom_title',
			'type' => 'textarea_small',
		],
		[
			'name' => esc_html__( 'Title Background', 'tm-heli' ),
			'desc' => esc_html__( 'Upload an image or enter a URL for heading title', 'tm-heli' ),
			'id'   => $prefix . 'heading_image',
			'type' => 'file',
		],
		[
			'name' => esc_html__( 'Disable Breadcrumb', 'tm-heli' ),
			'desc' => esc_html__( 'Check this box to disable the breadcrumb of the page', 'tm-heli' ),
			'id'   => $prefix . 'disable_breadcrumb',
			'type' => 'checkbox',
		],
		[
			'name' => esc_html__( 'Disable Comment', 'tm-heli' ),
			'desc' => esc_html__( 'Check this box to disable comment form of the page', 'tm-heli' ),
			'id'   => $prefix . 'disable_comment',
			'type' => 'checkbox',
		],
		[
			'name' => esc_html__( 'Custom Class', 'tm-heli' ),
			'desc' => esc_html__( 'Enter custom class for this page', 'tm-heli' ),
			'id'   => $prefix . 'custom_class',
			'type' => 'text',
		],
	];

	$presets           = apply_filters( 'tm_heli_page_meta_box_presets', [] );
	$preset_meta_boxes = [];

	if ( ! empty( $presets ) ) {
		foreach ( $presets as $preset ) {
			if ( ! empty( Kirki::$fields[ $preset ] ) && ! empty( Kirki::$fields[ $preset ]['choices'] ) ) {
				$kirki_preset = Kirki::$fields[ $preset ];
				$options      = [ 'default' => esc_html__( 'Default', 'tm-heli' ) ];

				$options += $kirki_preset['choices'];

				$preset_meta_boxes[] = [
					'name'    => $kirki_preset['label'],
					'desc'    => ( isset( $kirki_preset['description'] ) ? $kirki_preset['description'] : '' ) . esc_html__( '. If you choose \'Default\' option, then page will load settings in Customizer.', 'tm-heli' ),
					'id'      => $prefix . $preset,
					'type'    => 'select',
					'options' => $options,
				];
			}
		}
	}

	$reverse_preset_meta_boxes = array_reverse( $preset_meta_boxes );

	foreach ( $reverse_preset_meta_boxes as $preset_meta_box ) {
		array_unshift( $fields, $preset_meta_box );
	}

	foreach ( $fields as $field ) {
		$cmb->add_field( $field );
	}
}

add_action( 'cmb2_admin_init', function() {
	$prefix = 'infinity_';

	$cmb = new_cmb2_box( [
		'id'           => 'post_metabox',
		'title'        => esc_html__( 'Post Settings', 'tm-heli' ),
		'object_types' => [ 'post', ], // Post type
		'context'      => 'normal',
		'priority'     => 'high',
		'show_names'   => true, // Show field names on the left
		// 'cmb_styles' => false, // false to disable the CMB stylesheet
		// 'closed'     => true, // Keep the metabox closed by default
	] );

	$fields = [
		[
			'name' => esc_html__( 'Custom Link', 'tm-heli' ),
			'desc' => esc_html__( 'Enter custom link for this post', 'tm-heli' ),
			'id'   => $prefix . 'post_custom_link',
			'type' => 'text',
		],
	];
	foreach ( $fields as $field ) {
		$cmb->add_field( $field );
	}
} );

