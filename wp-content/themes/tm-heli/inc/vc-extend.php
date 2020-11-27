<?php
/**
 * Initial setup
 * =============
 */

if ( class_exists( 'WPBakeryShortCode' ) ) {

	locate_template( '/inc/vc-params/thememove-responsive/thememove_responsive.php', true );

	class WPBakeryShortCode_Thememove_Recentposts extends WPBakeryShortCode {
	}

	class WPBakeryShortCode_Thememove_Testi extends WPBakeryShortCode {
	}

	class WPBakeryShortCode_Thememove_Button extends WPBakeryShortCode {
	}

	class WPBakeryShortCode_Thememove_Portfolio2 extends WPBakeryShortCode {
	}

	class WPBakeryShortCode_Thememove_Services extends WPBakeryShortCode {
	}

	class WPBakeryShortCode_Thememove_Recent extends WPBakeryShortCode {
	}

	class WPBakeryShortCode_Thememove_Portfolio extends WPBakeryShortCode {
	}

	class WPBakeryShortCode_Thememove_Countdown extends WPBakeryShortCode {
	}

	class WPBakeryShortCode_Thememove_RestaurantMenu extends WPBakeryShortCode {
	}

	class WPBakeryShortCode_Thememove_Icon extends WPBakeryShortCode {
	}

	class WPBakeryShortCode_Thememove_Pricing_Box extends WPBakeryShortCode {
	}

	class WPBakeryShortCode_Thememove_Menu extends WPBakeryShortCode {
	}

	class WPBakeryShortCode_Thememove_Gmaps extends WPBakeryShortCode {
		public function __construct( $settings ) {
			parent::__construct( $settings );
			$this->jsScripts();
		}

		public function jsScripts() {
			$key = 'AIzaSyCwAq_RDWPBbKWITpsF1TH5V3tRgrrNX9w';
			wp_enqueue_script( 'tm-heli-js-maps', 'https://maps.google.com/maps/api/js?key=' . $key . '&amp;language=en');
			wp_enqueue_script( 'tm-heli-js-gmap3', TM_HELI_THEME_ROOT . '/assets/libs/gmap3/gmap3.min.js' );
		}
	}

	class WPBakeryShortCode_Thememove_Project_Details extends WPBakeryShortCode {
	}

	class WPBakeryShortCode_Thememove_Latest_Portfolio extends WPBakeryShortCode {
	}

	class WPBakeryShortCode_Thememove_Video_Player extends WPBakeryShortCode {
	}
	class WPBakeryShortCode_Thememove_Vimeo extends WPBakeryShortCode {
	}
}
require_once 'vc-maps/bar-chart.php';
require_once TM_HELI_PATH . '/inc/vc-maps/latest-portfolio.php';
require_once TM_HELI_PATH . '/inc/vc-maps/services.php';
require_once TM_HELI_PATH . '/inc/vc-maps/portfolio.php';
require_once TM_HELI_PATH . '/inc/vc-maps/pricing-box.php';
require_once TM_HELI_PATH . '/inc/vc-maps/button.php';
require_once TM_HELI_PATH . '/inc/vc-maps/google-map.php';
require_once TM_HELI_PATH . '/inc/vc-maps/testimonial.php';
require_once TM_HELI_PATH . '/inc/vc-maps/thememove-icon.php';
require_once TM_HELI_PATH . '/inc/vc-maps/row.php';
require_once TM_HELI_PATH . '/inc/vc-maps/custom-heading.php';
require_once TM_HELI_PATH . '/inc/vc-maps/recent-post.php';
require_once TM_HELI_PATH . '/inc/vc-maps/portfolio-list.php';
require_once TM_HELI_PATH . '/inc/vc-maps/video-player.php';
require_once TM_HELI_PATH . '/inc/vc-maps/thememove-instagram.php';
require_once TM_HELI_PATH . '/inc/vc-maps/thememove-countdown.php';
require_once TM_HELI_PATH . '/inc/vc-maps/thememove-restaurantmenu.php';
require_once TM_HELI_PATH . '/inc/vc-maps/thememove-menu.php';
require_once TM_HELI_PATH . '/inc/vc-maps/thememove-vimeo.php';

// disable auto update of VC.
add_action( 'vc_before_init', 'disable_updater' );
function disable_updater() {
	vc_manager()->disableUpdater();
}
