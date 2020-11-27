<?php

/**
 * Custom Projects
 * ======================
 */

// Remove admin notification of Projects.
if ( class_exists( 'Projects' ) ) {
	global $projects;
	remove_action( 'admin_notices', array( $projects->admin, 'configuration_admin_notice' ) );
	remove_action( 'admin_menu', array( $projects->admin, 'meta_box_setup' ), 20 );
	add_action( 'wp_enqueue_scripts', 'tm_heli_dequeue_projects_css', 999 );
	function tm_heli_dequeue_projects_css() {
		wp_dequeue_style( 'projects-styles' );
		wp_dequeue_style( 'projects-handheld' );
	}
}

function pro_single() {
	$a = 'Portfolio';

	return $a;
}

add_filter( 'projects_post_type_singular_name', 'pro_single' );

function pro_plural() {
	$a = 'Portfolios';

	return $a;
}

add_filter( 'projects_post_type_plural_name', 'pro_plural' );

function pro_url() {
	$a = 'portfolio/';

	return $a;
}

add_filter( 'projects_template_url', 'pro_url' );

function pro_rewrite() {
	$a = array(
		'slug' => 'portfolio'
	);

	return $a;
}

add_filter( 'projects_post_type_rewrite', 'pro_rewrite' );


remove_action( 'projects_before_single_project_summary', 'projects_template_single_title', 10 );
remove_action( 'projects_after_single_project', 'projects_single_pagination', 5 );
remove_action( 'projects_sidebar', 'projects_get_sidebar', 10 );
add_action( 'projects_before_main_content', 'tm_heli_projects_before_main_content', 5 );
add_action( 'projects_after_main_content', 'tm_heli_projects_after_main_content', 5 );


if ( ! function_exists( 'tm_heli_projects_before_main_content' ) ) {
	function tm_heli_projects_before_main_content() {
		$tm_heli_heading_image = Kirki::get_option( 'thememove', 'portfolio_single_bg_image' );
		?>
		<div class="big-title" style="background-image: url('<?php echo esc_url( $tm_heli_heading_image ); ?>')">
			<div class="container">
				<?php if ( function_exists( 'tm_bread_crumb' ) && Kirki::get_option( 'thememove', 'breadcrumb_enable' ) == 1 ) { ?>
					<div class="breadcrumb">
						<div class="container">
							<?php echo tm_bread_crumb_project(); ?>
						</div>
					</div>
				<?php } ?>
				<?php if ( is_projects_archive() ) { ?>
					<h1 class="entry-title"><?php projects_page_title(); ?></h1>
					<p>
						<?php do_action( 'projects_archive_description' ); ?>
					</p>
				<?php } else { ?>
					<h1 class="entry-title"><?php the_title(); ?></h1>
				<?php } ?>
			</div>
		</div>
		<div class="container">
	<?php }
}

if ( ! function_exists( 'tm_heli_projects_after_main_content' ) ) {
	function tm_heli_projects_after_main_content() {
		?>
		</div>
	<?php }
}
