<?php

/**
 * ThemeMove Instagram Shortcode
 *
 * @version 1.0
 * @package ThemeMove
 */
class WPBakeryShortCode_Thememove_Instagram extends WPBakeryShortCode {

	public function __construct( $settings ) {
		parent::__construct( $settings );
	}

	/**
	 * Quick-and-dirty Instagram web scrape
	 * based on https://gist.github.com/cosmocatalano/4544576
	 *
	 * @param     $username
	 * @param int $slice
	 *
	 * @return array|WP_Error
	 */
	public function scrape_instagram( $username, $slice, $square_media ) {

		$username = strtolower( $username );

		switch ( substr( $username, 0, 1 ) ) {
			case '#':
				$url              = 'https://instagram.com/explore/tags/' . str_replace( '#', '', $username );
				$transient_prefix = 'h';
				break;
			default:
				$url              = 'https://instagram.com/' . str_replace( '@', '', $username );
				$transient_prefix = 'u';
				break;
		}

		if ( false === ( $instagram = get_transient( 'instagram-media-new-' . sanitize_title_with_dashes( $username . '-' . $square_media ) ) ) ) {

			$remote = wp_remote_get( $url );

			if ( is_wp_error( $remote ) ) {
				return new WP_Error( 'site_down', esc_html__( 'Unable to communicate with Instagram.', 'tm-heli' ) );
			}

			if ( 200 != wp_remote_retrieve_response_code( $remote ) ) {
				return new WP_Error( 'invalid_response', esc_html__( 'Instagram did not return a 200.', 'tm-heli' ) );
			}

			$shards      = explode( 'window._sharedData = ', $remote['body'] );
			$insta_json  = explode( ';</script>', $shards[1] );
			$insta_array = json_decode( $insta_json[0], true );

			if ( ! $insta_array ) {
				return new WP_Error( 'bad_json', esc_html__( 'Instagram has returned invalid data.', 'tm-heli' ) );
			}

			if ( isset( $insta_array['entry_data']['ProfilePage'][0]['graphql']['user']['edge_owner_to_timeline_media']['edges'] ) ) {
				$media_arr = $insta_array['entry_data']['ProfilePage'][0]['graphql']['user']['edge_owner_to_timeline_media']['edges'];
			} elseif ( isset( $insta_array['entry_data']['TagPage'][0]['graphql']['hashtag']['edge_hashtag_to_media']['edges'] ) ) {
				$media_arr = $insta_array['entry_data']['TagPage'][0]['graphql']['hashtag']['edge_hashtag_to_media']['edges'];
			} else {
				return new WP_Error( 'bad_json_2', esc_html__( 'Instagram has returned invalid data.', 'tm-heli' ) );
			}
			if ( ! is_array( $media_arr ) ) {
				return new WP_Error( 'bad_array', esc_html__( 'Instagram has returned invalid data.', 'tm-heli' ) );
			}

			$instagram = $this->get_media_new_style( $media_arr, $square_media );

			// do not set an empty transient - should help catch private or empty accounts.
			if ( ! empty( $instagram ) ) {
				$instagram = serialize( $instagram );
				set_transient( 'instagram-media-new-' . sanitize_title_with_dashes( $username . '-' . $square_media ), $instagram, apply_filters( 'null_instagram_cache_time', HOUR_IN_SECONDS * 2 ) );
			}
		}

		if ( ! empty( $instagram ) ) {

			$instagram = unserialize( $instagram );

			return array_slice( $instagram, 0, $slice );

		} else {

			return new WP_Error( 'no_images', esc_html__( 'Instagram did not return any images.', 'tm-heli' ) );

		}
	}

	public function get_media_new_style( $media_arr, $square_media ) {

		$instagram = array();

		foreach ( $media_arr as $media ) {
			$instagram[] = array(
				'link'      => trailingslashit( '//instagram.com/p/' . $media['node']['shortcode'] ),
				'time'      => $media['node']['taken_at_timestamp'],
				'comments'  => $media['node']['edge_media_to_comment']['count'],
				'likes'     => $media['node']['edge_liked_by']['count'],
				'thumbnail' => $square_media ? preg_replace( '/^https?\:/i', '', $media['node']['thumbnail_resources'][0]['src'] ) : preg_replace( '/^https?\:/i', '', $media['node']['display_url'] ),
				'type'      => 'image',
			);
		}

		return $instagram;
	}

	/**
	 * Generate rounded number
	 * Example: 11200 --> 11K
	 *
	 * @param $number
	 *
	 * @return string
	 */
	public function roundNumber( $number ) {
		if ( $number > 999 && $number <= 999999 ) {
			$result = floor( $number / 1000 ) . ' K';
		} elseif ( $number > 999999 ) {
			$result = floor( $number / 1000000 ) . ' M';
		} else {
			$result = $number;
		}

		return $result;
	}
}

// Mapping shortcode.
vc_map( array(
	'name'        => esc_html__( 'TM Instagram', 'tm-heli' ),
	'description' => esc_html__( 'Displays latest Instagram photos', 'tm-heli' ),
	'base'        => 'thememove_instagram',
	'category'    => sprintf( esc_html__( 'by %s', 'tm-heli' ), TM_HELI_PARENT_THEME_NAME ),
	'params'      => array(
		array(
			'group'       => esc_html__( 'General', 'tm-heli' ),
			'type'        => 'textfield',
			'heading'     => esc_html__( 'Instagram Username', 'tm-heli' ),
			'admin_label' => true,
			'param_name'  => 'username',
			'value'       => '',
			'description' => esc_html__( 'Enter Instagram username (not include @). Example: <b>thememove</b>', 'tm-heli' ),
		),
		array(
			'group'       => esc_html__( 'General', 'tm-heli' ),
			'type'        => 'textfield',
			'heading'     => esc_html__( 'Number of items', 'tm-heli' ),
			'admin_label' => true,
			'param_name'  => 'number_items',
			'value'       => '6',
		),
		array(
			'group'       => esc_html__( 'General', 'tm-heli' ),
			'type'        => 'dropdown',
			'heading'     => esc_html__( 'Item Width', 'tm-heli' ),
			'description' => esc_html__( 'Enter item width in a row (has 12 columns)', 'tm-heli' ),
			'admin_label' => true,
			'param_name'  => 'item_width_md',
			'value'       => array(
				esc_html__( 'Default (2 columns - 1/6 - 6 items in a row)', 'tm-heli' ) => 2,
				esc_html__( '1 columns - 1/1 - 12 items in a row', 'tm-heli' )          => 1,
				esc_html__( '2 columns - 1/6 - 6 items in a row', 'tm-heli' )           => 2,
				esc_html__( '3 columns - 1/4 - 4 items in a row', 'tm-heli' )           => 3,
				esc_html__( '4 columns - 1/3 - 3 items in a row', 'tm-heli' )           => 4,
				esc_html__( '6 columns - 1/2 - 2 items in a row', 'tm-heli' )           => 6,
				esc_html__( '12 columns - 1/1 - 1 item in a row', 'tm-heli' )           => 12,
			),
		),
		array(
			'group'      => esc_html__( 'General', 'tm-heli' ),
			'type'       => 'textfield',
			'heading'    => esc_html__( 'Item spacing', 'tm-heli' ),
			'param_name' => 'spacing',
			'value'      => '0',
		),
		array(
			'group'      => esc_html__( 'General', 'tm-heli' ),
			'type'       => 'checkbox',
			'param_name' => 'show_likes_comments',
			'value'      => array(
				esc_html__( 'Show likes and comments', 'tm-heli' ) => true,
			),
		),
		array(
			'group'      => esc_html__( 'General', 'tm-heli' ),
			'type'       => 'checkbox',
			'param_name' => 'show_follow_text',
			'value'      => array(
				esc_html__( 'Show follow text', 'tm-heli' ) => true,
			),
		),
		array(
			'group'      => esc_html__( 'General', 'tm-heli' ),
			'type'       => 'textarea_html',
			'heading'    => esc_html__( 'Text', 'tm-heli' ),
			'param_name' => 'content',
			'value'      => esc_html__( 'Follow us on Instagram', 'tm-heli' ),
			'dependency' => array( 'element' => 'show_follow_text', 'not_empty' => true ),
		),
		array(
			'group'      => esc_html__( 'General', 'tm-heli' ),
			'type'       => 'checkbox',
			'param_name' => 'link_new_page',
			'value'      => array(
				esc_html__( 'Open links in new page', 'tm-heli' ) => true,
			),
		),
		array(
			'group'      => esc_html__( 'General', 'tm-heli' ),
			'type'       => 'checkbox',
			'param_name' => 'square_media',
			'value'      => array(
				esc_html__( 'Show square media', 'tm-heli' ) => true,
			),
		),
		array(
			'group'       => esc_html__( 'General', 'tm-heli' ),
			'type'        => 'textfield',
			'heading'     => esc_html__( 'Extra class name', 'tm-heli' ),
			'param_name'  => 'el_class',
			'description' => esc_html__( 'Style particular content element differently - add a class name and refer to it in custom CSS.', 'tm-heli' ),
		),
		array(
			'group'       => esc_html__( 'Responsive Options', 'tm-heli' ),
			'type'        => 'thememove_responsive',
			'heading'     => esc_html__( 'Responsiveness', 'tm-heli' ),
			'param_name'  => 'responsive',
			'description' => esc_html__( 'Adjust Number of items in a row for different screen sizes.', 'tm-heli' ),
		),
	),
) );
