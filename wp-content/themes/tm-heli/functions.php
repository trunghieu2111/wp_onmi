<?php
/**
 * thememove functions and definitions
 *
 * @package thememove
 */

/**
 * Heli only works in WordPress 4.3 or later.
 */
if (version_compare($GLOBALS['wp_version'], '4.3', '<')) {
	require get_template_directory() . '/inc/back-compat.php';
}

if (!function_exists('tm_heli_setup')) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 * ===========================================================================
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function tm_heli_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on thememove, use a find and replace
		 * to change 'thememove' to the name of your theme in all the template files
		 */
		load_theme_textdomain('tm-heli', TM_HELI_PATH . '/languages');

		// Add default posts and comments RSS feed links to head.
		add_theme_support('automatic-feed-links');

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support('title-tag');

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
		 */
		add_theme_support('post-thumbnails');

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus([
			'primary' => esc_html__('Primary Menu', 'tm-heli'),
		]);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support('html5', ['search-form', 'comment-form', 'comment-list', 'gallery', 'caption']);

		/*
		 * Enable support for Post Formats.
		 * See http://codex.wordpress.org/Post_Formats
		 */
		add_theme_support('post-formats', ['aside', 'image', 'video', 'quote', 'link']);

		// Set up the WordPress core custom background feature.
		add_theme_support('custom-background', apply_filters('tm_heli_custom_background_args', [
			'default-color' => '#ffffff',
			'default-image' => '',
		]));

		// Support woocommerce
		add_theme_support('woocommerce');
		add_theme_support('wc-product-gallery-zoom');
		add_theme_support('wc-product-gallery-lightbox');
		add_theme_support('wc-product-gallery-slider');

		//support gutenberg
		add_theme_support('align-wide');
		add_theme_support('wp-block-styles');
		add_theme_support('editor-styles');
		add_theme_support('responsive-embeds');

		add_filter('essgrid_set_cpt', '__return_true', 10, 2);
	}
endif; // tm_heli_setup
add_action('after_setup_theme', 'tm_heli_setup');

/**
 * Define Constants
 * ================
 */
define('TM_HELI_THEME_ROOT', esc_url(get_template_directory_uri()));
define('TM_HELI_PATH', get_template_directory());
define('TM_HELI_PARENT_THEME_NAME', wp_get_theme('tm-heli')->get('Name'));
define('TM_HELI_PARENT_THEME_VERSION', wp_get_theme('tm-heli')->get('Version'));
define('TM_HELI_PARENT_THEME_AUTHOR', wp_get_theme('tm-heli')->get('Author'));
define('TM_HELI_PRIMARY_COLOR', '#222222');
define('TM_HELI_PRIMARY_FONT', 'Source Sans Pro');
define('TM_HELI_SECONDARY_COLOR', '#232331');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 * ===========================================================================
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
if (!isset($content_width)) {
	$content_width = 640; /* pixels */
}

/**
 * Register widget area.
 * ====================
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function tm_heli_widgets_init() {

	register_sidebar([
		'name' => esc_html__('Sidebar', 'tm-heli'),
		'id' => 'sidebar-1',
		'description' => esc_html__('Primary Sidebar', 'tm-heli'),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	]);

	register_sidebar([
		'name' => esc_html__('Shop Sidebar', 'tm-heli'),
		'id' => 'sidebar-shop',
		'description' => esc_html__('Shop Sidebar', 'tm-heli'),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	]);

	register_sidebar([
		'name' => esc_html__('Top Slider', 'tm-heli'),
		'id' => 'top-slider',
		'description' => esc_html__('Top slider widget area', 'tm-heli'),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	]);

	register_sidebar([
		'name' => esc_html__('Footer 1 Widget Area', 'tm-heli'),
		'id' => 'footer',
		'description' => esc_html__('Footer widget area 1', 'tm-heli'),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title"><span>',
		'after_title' => '</span></h3>',
	]);

	register_sidebar([
		'name' => esc_html__('Footer 2 Widget Area', 'tm-heli'),
		'id' => 'footer2',
		'description' => esc_html__('Footer widget area 2', 'tm-heli'),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title"><span>',
		'after_title' => '</span></h3>',
	]);

	register_sidebar([
		'name' => esc_html__('Footer 3 Widget Area', 'tm-heli'),
		'id' => 'footer3',
		'description' => esc_html__('Footer widget area 3', 'tm-heli'),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title"><span>',
		'after_title' => '</span></h3>',
	]);

	register_sidebar([
		'name' => esc_html__('Side Panel Widget Area', 'tm-heli'),
		'id' => 'side',
		'description' => esc_html__('Footer widget area 4', 'tm-heli'),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title"><span>',
		'after_title' => '</span></h3>',
	]);
}

add_action('widgets_init', 'tm_heli_widgets_init');

/**
 * Enqueue scripts and styles.
 * ==========================
 */
function tm_heli_scripts() {
	wp_enqueue_style('tm-heli-style', TM_HELI_THEME_ROOT . '/style.css');
	wp_enqueue_style('tm-heli-main', TM_HELI_THEME_ROOT . '/assets/css/output/main-ltr.css');
	wp_enqueue_style('font-awesome', TM_HELI_THEME_ROOT . '/assets/libs/font-awesome/css/font-awesome.min.css');
	wp_enqueue_style('onepage-scroll', TM_HELI_THEME_ROOT . '/assets/libs/onepage-scroll/onepage-scroll.css');
	wp_enqueue_style('multiscroll', TM_HELI_THEME_ROOT . '/assets/libs/multiscroll/jquery.multiscroll.css');
	wp_enqueue_style('datepicker', TM_HELI_THEME_ROOT . '/assets/libs/datepicker/bootstrap-datepicker.css');
	wp_enqueue_style('animate', TM_HELI_THEME_ROOT . '/assets/libs/animate/animate.min.css');
	wp_enqueue_style('wordrotator', TM_HELI_THEME_ROOT . '/assets/libs/wordrotator/jquery.wordrotator.min.css');

	wp_enqueue_style('wow-css', TM_HELI_THEME_ROOT . '/assets/libs/wow/css/animate.css');
	wp_enqueue_script('wow-js', TM_HELI_THEME_ROOT . '/assets/libs/wow/js/wow.min.js', ['jquery'], TM_HELI_PARENT_THEME_VERSION, true);

	wp_enqueue_style('jquery.menu-css', TM_HELI_THEME_ROOT . '/assets/libs/jQuery.mmenu/css/jquery.mmenu.all.css');
	wp_enqueue_script('jquery.menu-js', TM_HELI_THEME_ROOT . '/assets/libs/jQuery.mmenu/js/jquery.mmenu.all.min.js', ['jquery'], TM_HELI_PARENT_THEME_VERSION, true);

	if (Kirki::get_option('thememove', 'nav_sticky_enable') == 1) {
		wp_enqueue_script('head-room-jquery', TM_HELI_THEME_ROOT . '/assets/libs/headroom/jQuery.headroom.min.js',
			['jquery'], TM_HELI_PARENT_THEME_VERSION, true);
		wp_enqueue_script('head-room', TM_HELI_THEME_ROOT . '/assets/libs/headroom/headroom.min.js', ['jquery'],
			TM_HELI_PARENT_THEME_VERSION, true);
	}
	if (Kirki::get_option('thememove', 'smooth_scroll_enable') == 1) {
		wp_enqueue_script('smooth-scroll', TM_HELI_THEME_ROOT . '/assets/libs/smoothscroll/smoothscroll.js', [],
			TM_HELI_PARENT_THEME_VERSION, true);
	}

	wp_enqueue_script('sidr', TM_HELI_THEME_ROOT . '/assets/libs/sidr/jquery.sidr.min.js');

	wp_enqueue_style('magnific-popup', TM_HELI_THEME_ROOT . '/assets/libs/magnific-popup/magnific-popup.css');
	wp_enqueue_script('magnific-popup',
		TM_HELI_THEME_ROOT . '/assets/libs/magnific-popup/jquery.magnific-popup.min.js');
	wp_enqueue_script('countdown', TM_HELI_THEME_ROOT . '/assets/libs/countdown/jquery.countdown.min.js');

	wp_enqueue_script('isotope', TM_HELI_THEME_ROOT . '/assets/libs/isotope.pkgd.min.js');

	wp_enqueue_script('owl-carousel', TM_HELI_THEME_ROOT . '/assets/libs/owl-carousel/owl.carousel.min.js', ['jquery'],
		TM_HELI_PARENT_THEME_VERSION, true);
	wp_enqueue_script('counterup', TM_HELI_THEME_ROOT . '/assets/libs/waypoint/jquery.counterup.min.js');
	wp_enqueue_script('waypoints', TM_HELI_THEME_ROOT . '/assets/libs/waypoint/waypoints.min.js');
	wp_enqueue_script('slidx', TM_HELI_THEME_ROOT . '/assets/libs/slidx/slidx.js');
	wp_enqueue_script('onepage-scroll',
		TM_HELI_THEME_ROOT . '/assets/libs/onepage-scroll/jquery.onepage-scroll.min.js');
	wp_enqueue_script('easings', TM_HELI_THEME_ROOT . '/assets/libs/multiscroll/jquery.easings.min.js', ['jquery'],
		TM_HELI_PARENT_THEME_VERSION, true);
	wp_enqueue_script('multiscroll', TM_HELI_THEME_ROOT . '/assets/libs/multiscroll/jquery.multiscroll.js',
		TM_HELI_PARENT_THEME_VERSION, true);
	wp_enqueue_script('datepicker', TM_HELI_THEME_ROOT . '/assets/libs/datepicker/bootstrap-datepicker.js',
		TM_HELI_PARENT_THEME_VERSION, true);
	wp_enqueue_script('wordrotator', TM_HELI_THEME_ROOT . '/assets/libs/wordrotator/jquery.wordrotator.min.js',
		TM_HELI_PARENT_THEME_VERSION, true);
	wp_enqueue_script('typed', TM_HELI_THEME_ROOT . '/assets/libs/typed/typed.js', TM_HELI_PARENT_THEME_VERSION, true);
	wp_enqueue_script('tm-heli-js-main', TM_HELI_THEME_ROOT . '/assets/js/main.js', ['jquery'],
		TM_HELI_PARENT_THEME_VERSION, true);
	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
	wp_dequeue_script('vc_jquery_skrollr_js');
}

add_action('wp_enqueue_scripts', 'tm_heli_scripts');

add_action('enqueue_block_editor_assets', function () {
	wp_enqueue_style('google-font', 'https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700');
	wp_enqueue_style('editor-style', TM_HELI_THEME_ROOT . '/editor-style.css');
});

/**
 * Setup custom css.
 * ================
 */
function tm_heli_custom_css() {
	$tm_heli_custom_css = Kirki::get_option('thememove', 'custom_css');
	$heading_font = Kirki::get_option('thememove', 'heading_font');
	$extra_style = '
	.esg-grid,.eg-heli-portfolio-01-element-3,.eg-heli-news-01-content,.eg-heli-portfolio-01-element-5,.wpcf7-form select, .wpcf7-form textarea, .wpcf7-form input{font-family: ' . $heading_font['font-family'] . ' !important}
	.header04 .heli-center-logo:before{content: url(' . Kirki::get_option('thememove', 'logo') . ')}
	';
	wp_add_inline_style('tm-heli-main', $tm_heli_custom_css . $extra_style);
}

add_action('wp_enqueue_scripts', 'tm_heli_custom_css');

/**
 * Implement other setup.
 * ======================
 */
// Load core
require_once TM_HELI_PATH . '/core/core.php';
require_once TM_HELI_PATH . '/inc/oneclick.php';
require_once TM_HELI_PATH . '/inc/project-extend.php';
require_once TM_HELI_PATH . '/inc/woo-extend.php';
require_once TM_HELI_PATH . '/inc/class-heli.php';

// Load tmg
require_once TM_HELI_PATH . '/inc/tgm-plugin-activation.php';
require_once TM_HELI_PATH . '/inc/tgm-plugin-registration.php';

// Load metabox
require_once TM_HELI_PATH . '/inc/meta-box.php';

// Load custom js
require_once TM_HELI_PATH . '/inc/custom-js.php';

// Load custom header
require_once TM_HELI_PATH . '/inc/custom-header.php';

// Custom template tags for this theme.
require_once TM_HELI_PATH . '/inc/template-tags.php';

// Custom functions that act independently of the theme templates.
require_once TM_HELI_PATH . '/inc/extras.php';

require_once TM_HELI_PATH . '/inc/integration.php';

// Load Jetpack compatibility file.
require_once TM_HELI_PATH . '/inc/jetpack.php';

// Load customizer
require_once TM_HELI_PATH . '/inc/customizer/customizer.php';

// Remove admin notification of Projects
if (class_exists('Projects_Admin')) {
	global $projects;
	remove_action('admin_notices', [$projects->admin, 'configuration_admin_notice']);
}

// Extend VC
if (class_exists('WPBakeryVisualComposerAbstract')) {
	function tm_heli_require_vc_extend() {
		require TM_HELI_PATH . '/inc/vc-extend.php';
	}

	add_action('init', 'tm_heli_require_vc_extend', 2);
}

//remove woo first last class
add_filter('post_class', 'woo_first_last_class');
function woo_first_last_class($classes) {
	if ('product' === get_post_type()) {
		$classes = array_diff($classes, ['first', 'last']);
	}

	return $classes;
}

function tm_heli_get_all_menus() {
	$args = [
		'hide_empty' => true,
		'fields' => 'id=>name',
		'slug' => '',
	];
	$menus = get_terms('nav_menu', $args);
	$menus[''] = esc_html__('Default Menu', 'tm-heli');

	return $menus;
}


function tm_get_page_url_by_slug($slug, $post_type = 'page') {
	// Initialize the permalink value
	$permalink = null;

	// Build the arguments for WP_Query
	$args = [
		'name' => $slug,
		'max_num_posts' => 1,
	];

	// If the optional argument is set, add it to the arguments array
	if ('' != $post_type) {
		$args = array_merge($args, ['post_type' => $post_type]);
	}

	// Run the query (and reset it)
	$query = new WP_Query($args);
	if ($query->have_posts()) {
		$query->the_post();
		$permalink = get_permalink(get_the_ID());
		wp_reset_postdata();
	}

	return $permalink;
}

function tm_bread_crumb_project() {
	?>
	<ul class="tm_bread_crumb">
		<li class="level-1 top"><a
				href="<?php echo esc_url(home_url()); ?>"><?php echo esc_html__('Home', 'tm-heli'); ?></a>
		</li>
		<?php if (tm_get_page_url_by_slug(get_theme_mod('portfolio_archive_page_slug', 'portfolio-page')) != '') { ?>
			<li class="level-2 sub"><a
					href="<?php echo tm_get_page_url_by_slug(get_theme_mod('portfolio_archive_page_slug',
						'all-projects')); ?>"><?php echo esc_html__('Our Projects', 'tm-heli'); ?></a>
			</li>
		<?php } ?>
		<?php
		$pcterms = wp_get_post_terms(get_the_ID(), 'project-category');
		if (count($pcterms) > 0) {
			foreach ($pcterms as $pcterm) {
				echo sprintf(
					'<li class="level-3 sub"><a href="%s#%s">%s</a></li>',
					tm_get_page_url_by_slug(get_theme_mod('portfolio_archive_page_slug', 'all-projects')),
					$pcterm->slug,
					$pcterm->name
				);
			}
		}
		?>
		<li class="level-4 sub tail current"><?php the_title(); ?></li>
	</ul>
	<?php
}

add_filter('image_downsize', function ($out, $id, $size) {
	global $all_image_sizes;

	if (!isset($all_image_sizes)) {
		global $_wp_additional_image_sizes;

		$all_image_sizes = [];
		$interim_sizes = get_intermediate_image_sizes();

		foreach ($interim_sizes as $size_name) {
			if (in_array($size_name, ['thumbnail', 'medium', 'large'], true)) {
				$all_image_sizes[$size_name]['width'] = get_option($size_name . '_size_w');
				$all_image_sizes[$size_name]['height'] = get_option($size_name . '_size_h');
				$all_image_sizes[$size_name]['crop'] = (bool)get_option($size_name . '_crop');
			} elseif (isset($_wp_additional_image_sizes[$size_name])) {
				$all_image_sizes[$size_name] = $_wp_additional_image_sizes[$size_name];
			}
		}
	}

	$all_sizes = $all_image_sizes;

	$image_data = wp_get_attachment_metadata($id);

	if (!is_array($image_data)) {
		return false;
	}

	if (is_string($size)) {
		if (empty($all_sizes[$size])) {
			return false;
		}

		if (!empty($image_data['sizes'][$size]) && !empty($all_sizes[$size])) {
			if (
				$all_sizes[$size]['width'] === $image_data['sizes'][$size]['width'] &&
				$all_sizes[$size]['height'] === $image_data['sizes'][$size]['height']
			) {
				return false;
			}

			if (!empty($image_data['sizes'][$size]['width_query']) && !empty($image_data['sizes'][$size]['height_query'])) {
				if (
					$image_data['sizes'][$size]['width_query'] === $all_sizes[$size]['width'] &&
					$image_data['sizes'][$size]['height_query'] === $all_sizes[$size]['height']
				) {
					return false;
				}
			}
		}

		$resized = image_make_intermediate_size(
			get_attached_file($id),
			$all_sizes[$size]['width'],
			$all_sizes[$size]['height'],
			$all_sizes[$size]['crop']
		);

		if (!$resized) {
			return false;
		}

		$image_data['sizes'][$size] = $resized;

		$image_data['sizes'][$size]['width_query'] = $all_sizes[$size]['width'];
		$image_data['sizes'][$size]['height_query'] = $all_sizes[$size]['height'];

		wp_update_attachment_metadata($id, $image_data);

		$att_url = wp_get_attachment_url($id);

		return [dirname($att_url) . '/' . $resized['file'], $resized['width'], $resized['height'], true];
	} elseif (is_array($size)) {
		$image_path = get_attached_file($id);
		$crop = array_key_exists(2, $size) ? $size[2] : true;
		$new_width = $size[0];
		$new_height = $size[1];

		if (!$crop) {
			if (class_exists('Jetpack') && Jetpack::is_module_active('photon')) {
				add_filter('jetpack_photon_override_image_downsize', '__return_true');
				$true_data = wp_get_attachment_image_src($id, 'large');
			} else {
				$true_data = wp_get_attachment_image_src($id, 'large');
			}

			if ($true_data[1] > $true_data[2]) {
				$ratio = $true_data[1] / $size[0];
				$new_height = round($true_data[2] / $ratio);
				$new_width = $size[0];
			} else {
				$ratio = $true_data[2] / $size[1];
				$new_height = $size[1];
				$new_width = round($true_data[1] / $ratio);
			}
		}

		$image_ext = pathinfo($image_path, PATHINFO_EXTENSION);
		$image_path = preg_replace(
			'/^(.*)\.' . $image_ext . '$/',
			sprintf('$1-%sx%s.%s', $new_width, $new_height, $image_ext),
			$image_path
		);
		$att_url = wp_get_attachment_url($id);

		if (file_exists($image_path)) {
			return [dirname($att_url) . '/' . basename($image_path), $new_width, $new_height, $crop];
		}

		$resized = image_make_intermediate_size(get_attached_file($id), $size[0], $size[1], $crop);

		$image_data = wp_get_attachment_metadata($id);

		$image_data['sizes'][$size[0] . 'x' . $size[1]] = $resized;

		wp_update_attachment_metadata($id, $image_data);

		if (!$resized) {
			return false;
		}

		return [dirname($att_url) . '/' . $resized['file'], $resized['width'], $resized['height'], $crop];
	}

	return false;
}
	, 10, 3);

function heli_write_log( $log ) {
	if ( true === WP_DEBUG ) {
		if ( is_array( $log ) || is_object( $log ) ) {
			error_log( print_r( $log, true ) );
		} else {
			error_log( $log );
		}
	}
}
