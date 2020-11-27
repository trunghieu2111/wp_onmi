<?php
/**
 * Custom functions that act independently of the theme templates
 *
 * Eventually, some of the functionality here could be replaced by core features
 *
 * @package thememove
 */

/**
 * Heli Logo
 * ================================================
 */
function tm_heli_logo() {
	global $tm_heli_custom_logo;
	$tm_heli_logo        = Kirki::get_option( 'thememove', 'logo' );
	$tm_heli_logo_sticky = Kirki::get_option( 'thememove', 'logo_sticky' );
	$tm_heli_logo_retina = Kirki::get_option( 'thememove', 'logo_retina' );
	?>
	<?php if ( $tm_heli_custom_logo ) { ?>
		<a class="normal_logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
			<img src="<?php echo esc_url( $tm_heli_custom_logo ); ?>" alt="<?php bloginfo( 'name' ); ?>"/>
		</a>
		<?php if ( $tm_heli_logo_sticky ) {
			?>
			<a class="sticky_logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
				<img src="<?php echo esc_url( $tm_heli_logo_sticky ); ?>" alt="<?php bloginfo( 'name' ); ?>"/>
			</a>
			<?php
		} ?>
	<?php } elseif ( $tm_heli_logo ) { ?>
		<a class="normal_logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
			<img
				src="<?php echo esc_url( $tm_heli_logo ); ?>" <?php if ( $tm_heli_logo_retina ) { ?> srcset="<?php echo esc_url( $tm_heli_logo_retina ); ?> 2x" <?php } ?>
				alt="<?php bloginfo( 'name' ); ?>"/>
		</a>
		<?php if ( $tm_heli_logo_sticky ) {
			?>
			<a class="sticky_logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
				<img src="<?php echo esc_url( $tm_heli_logo_sticky ); ?>" alt="<?php bloginfo( 'name' ); ?>"/>
			</a>
			<?php
		} ?>
	<?php } else { ?>
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
	<?php }
}

/**
 * Heli Social Icons
 * =================
 *
 */
function tm_heli_social_icons() {
	$site_social_control = Kirki::get_option( 'thememove', 'site_social_control' );
	if ( ! empty( $site_social_control ) ) {
		foreach ( $site_social_control as $key => $row_values ) {
			$site_social_control_icon = $row_values['icon_class'];
			$site_social_control_url  = $row_values['link_url'];
			?>
			<a href="<?php echo esc_url($site_social_control_url) ?>"><i class="fa <?php echo esc_attr($site_social_control_icon); ?>"></i></a>
		<?php }
	}
}


/**
 * Adds custom classes to the array of header classes.
 * =====================================================
 */
function header_class( $class = '' ) {
	// Separates classes with a single space, collates classes for header element
	echo 'class="' . join( ' ', tm_heli_get_header_class( $class ) ) . '"';
}

function tm_heli_get_header_class( $class = '' ) {
	$classes   = array();
	$classes[] = 'site-header';
	if ( Kirki::get_option( 'thememove', 'header_type' ) == 'header05' ) {
		$classes[] = 'left';
	}
	$classes[] = Kirki::get_option( 'thememove', 'header_type' );
	$classes   = array_map( 'esc_attr', $classes );
	$classes   = apply_filters( 'header_class', $classes, $class );

	return array_unique( $classes );
}

/**
 * Adds custom classes to the array of copyright classes.
 * =====================================================
 */
function copyright_class( $class = '' ) {
	// Separates classes with a single space, collates classes for copyright element
	echo 'class="' . join( ' ', tm_heli_get_copyright_class( $class ) ) . '"';
}

function tm_heli_get_copyright_class( $class = '' ) {
	$classes   = array();
	$classes[] = 'copyright';
	$classes[] = Kirki::get_option( 'thememove', 'copyright_type' );
	$classes   = array_map( 'esc_attr', $classes );
	$classes   = apply_filters( 'copyright_class', $classes, $class );

	return array_unique( $classes );
}

/**
 * Adds custom classes to the array of body classes.
 * ================================================
 *
 * @param array $classes Classes for the body element.
 *
 * @return array
 */
function tm_heli_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	global $tm_heli_custom_class;
	if ( $tm_heli_custom_class ) {
		$classes[] = $tm_heli_custom_class;
	}

	if ( Kirki::get_option( 'thememove', 'site_general_boxed' ) == 1 ) {
		$classes[] = 'boxed';
	}
	if ( Kirki::get_option( 'thememove', 'header_type' ) == 'header05' || Kirki::get_option( 'thememove', 'header_type' ) == 'header07' || Kirki::get_option( 'thememove', 'header_type' ) == 'header08' ) {
		$classes[] = Kirki::get_option( 'thememove', 'header_type' );
	}

	global $tm_heli_page_layout_private;
	if ( $tm_heli_page_layout_private != 'default' && class_exists( 'cmb2_bootstrap_205' ) ) {
		$tm_heli_layout = get_post_meta( get_the_ID(), "tm_heli_page_layout_private", true );
	} else {
		$tm_heli_layout = Kirki::get_option( 'thememove', 'page_layout' );
	}

	$classes[] = $tm_heli_layout;

	if ( function_exists('is_woocommerce') && is_woocommerce() ) {
		$classes[] = get_post_meta( get_option( 'woocommerce_shop_page_id' ), 'infinity_page_layout_private', true ) ? : 'sidebar-content';
	}

	if ( defined( 'TM_CORE_VERSION' ) ) {
		$classes[] = 'core_' . str_replace( ".", "", TM_CORE_VERSION );
	}

	return $classes;
}

add_filter( 'body_class', 'tm_heli_body_classes' );

if ( version_compare( $GLOBALS['wp_version'], '4.1', '<' ) ) :
	/**
	 * Filters wp_title to print a neat <title> tag based on what is being viewed.
	 * ==========================================================================
	 *
	 * @param string $title Default title text for current view.
	 * @param string $sep   Optional separator.
	 *
	 * @return string The filtered title.
	 */
	function tm_heli_wp_title( $title, $sep ) {
		if ( is_feed() ) {
			return $title;
		}

		global $page, $paged;

		// Add the blog name.
		$title .= get_bloginfo( 'name', 'display' );

		// Add the blog description for the home/front page.
		$site_description = get_bloginfo( 'description', 'display' );
		if ( $site_description && ( is_home() || is_front_page() ) ) {
			$title .= " $sep $site_description";
		}

		// Add a page number if necessary.
		if ( ( $paged >= 2 || $page >= 2 ) && ! is_404() ) {
			$title .= " $sep " . sprintf( esc_html__( 'Page %s', 'tm-heli' ), max( $paged, $page ) );
		}

		return $title;
	}

	add_filter( 'wp_title', 'tm_heli_wp_title', 10, 2 );

	/**
	 * Title shim for sites older than WordPress 4.1.
	 *
	 * @link https://make.wordpress.org/core/2014/10/29/title-tags-in-4-1/
	 * @todo Remove this function when WordPress 4.3 is released.
	 */
	function tm_heli_render_title() {
		?>
		<title><?php wp_title( '|', true, 'right' ); ?></title>
		<?php
	}

	add_action( 'wp_head', 'tm_heli_render_title' );
endif;

/***
 * Get mini cart HTML
 * ==================
 *
 * @return string
 */
if ( class_exists( 'WooCommerce' ) ) {
	function tm_heli_minicart() {
		$cart_html = '';
		$qty       = WC()->cart->get_cart_contents_count();
		$cart_html .= '<div class="mini-cart__button" title="' . esc_html__( 'View your shopping cart', 'tm-heli' ) . '">';
		$cart_html .= '<span class="mini-cart-icon"' . ' data-count="' . $qty . '"></span>';
		$cart_html .= '</div>';

		return $cart_html;
	}
}

/**
 * Ensure cart contents update when products are added to the cart via AJAX
 * ========================================================================
 *
 * @param $fragments
 *
 * @return mixed
 */
if ( class_exists( 'WooCommerce' ) ) {
	add_filter( 'woocommerce_add_to_cart_fragments', 'tm_heli_header_add_to_cart_fragment' );
	function tm_heli_header_add_to_cart_fragment( $fragments ) {
		ob_start();
		$cart_html = tm_heli_minicart();
		echo '' . $cart_html;
		$fragments['.mini-cart__button'] = ob_get_clean();

		return $fragments;
	}
}

/**
 * Custom Comment Form
 * ========================================================================
 */
function tm_heli_comment( $comment, $args, $depth ) {
	$GLOBALS['comment'] = $comment; ?>
<li <?php comment_class(); ?> id="li-comment-<?php comment_ID() ?>">
	<div id="comment-<?php comment_ID(); ?>">
		<div class="comment-author vcard">
			<?php echo get_avatar( $comment, $size = '100' ); ?>
		</div>
		<div class="comment-content">
			<?php if ( $comment->comment_approved == '0' ) : ?>
				<em><?php esc_html_e( 'Your comment is awaiting moderation.', 'tm-heli' ) ?></em>
				<br/>
			<?php endif; ?>
			<div class="metadata">
				<?php printf( esc_html__( '<cite class="fn">%s</cite>', 'tm-heli' ), get_comment_author_link() ) ?> <br/>
				<a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ) ?>">
					<?php printf( esc_html__( '%1$s', 'tm-heli' ), get_comment_date(), get_comment_time() ) ?></a>
				<?php edit_comment_link( esc_html__( '(Edit)', 'tm-heli' ), '  ', '' ) ?>
			</div>
			<?php comment_text() ?>
			<?php comment_reply_link( array_merge( $args, array(
				'depth'     => $depth,
				'max_depth' => $args['max_depth'],
			) ) ) ?>
		</div>
	</div>
	<?php
}

add_action( 'init', 'tm_heli_add_wc_get_screen_ids' );
function tm_heli_add_wc_get_screen_ids() {
	if ( ! function_exists( 'wc_get_screen_ids' ) ) {
		function wc_get_screen_ids() {

			$wc_screen_id = sanitize_title( esc_html__( 'WooCommerce', 'tm-heli' ) );
			$screen_ids   = array(
				'toplevel_page_' . $wc_screen_id,
				$wc_screen_id . '_page_wc-reports',
				$wc_screen_id . '_page_wc-settings',
				$wc_screen_id . '_page_wc-status',
				$wc_screen_id . '_page_wc-addons',
				'toplevel_page_wc-reports',
				'product_page_product_attributes',
				'edit-product',
				'product',
				'edit-shop_coupon',
				'shop_coupon',
				'edit-product_cat',
				'edit-product_tag',
				'edit-product_shipping_class',
				'profile',
				'user-edit',
			);

			foreach ( wc_get_order_types() as $type ) {
				$screen_ids[] = $type;
				$screen_ids[] = 'edit-' . $type;
			}

			return apply_filters( 'woocommerce_screen_ids', $screen_ids );
		}
	}
}
