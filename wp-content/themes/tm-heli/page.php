<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package thememove
 */

$tm_heli_page_layout_private = get_post_meta( get_the_ID(), "infinity_page_layout_private", true );
$tm_heli_page_type           = get_post_meta( get_the_ID(), "infinity_page_type", true );
$tm_heli_heading_image       = get_post_meta( get_the_ID(), "infinity_heading_image", true );
$tm_heli_custom_logo         = get_post_meta( get_the_ID(), "infinity_custom_logo", true );
$tm_heli_custom_title        = get_post_meta( get_the_ID(), "infinity_custom_title", true );
$tm_heli_disable_breadcrumb  = get_post_meta( get_the_ID(), "infinity_disable_breadcrumb", true );
$tm_heli_disable_comment     = get_post_meta( get_the_ID(), "infinity_disable_comment", true );
$tm_heli_disable_title       = get_post_meta( get_the_ID(), "infinity_disable_title", true );
$tm_heli_custom_class        = get_post_meta( get_the_ID(), "infinity_custom_class", true );
if ( $tm_heli_page_layout_private != 'default' && class_exists( 'cmb2_bootstrap_205' ) ) {
	$tm_heli_layout = get_post_meta( get_the_ID(), "tm_heli_page_layout_private", true );
} else {
	$tm_heli_layout = Kirki::get_option( 'thememove', 'page_layout' );
}
if ( $tm_heli_heading_image ) {
	$tm_heli_heading_image = get_post_meta( get_the_ID(), "infinity_heading_image", true );
} else {
	$tm_heli_heading_image = Kirki::get_option( 'thememove', 'page_bg_image' );
}
get_header(); ?>
<?php if ( $tm_heli_disable_title != 'on' ) { ?>
	<div class="big-title <?php echo esc_attr( $tm_heli_page_type ); ?>" style="<?php if ($tm_heli_heading_image) { ?> background-image: url('<?php echo esc_url( $tm_heli_heading_image ); ?>') <?php } ?>">
		<div class="container">
			<?php if ( function_exists( 'tm_bread_crumb' ) && Kirki::get_option( 'thememove', 'breadcrumb_enable' ) == 1 && $tm_heli_disable_breadcrumb != 'on' ) { ?>
				<div class="breadcrumb">
					<div class="container">
						<?php echo tm_bread_crumb( array( 'home_label' => Kirki::get_option( 'thememove', 'breadcrumb_home_text' ) ) ); ?>
					</div>
				</div>
			<?php } ?>
			<?php
			if ( $tm_heli_custom_title ) {
				echo '<h1 class="entry-title" itemprop="headline">' . $tm_heli_custom_title . '</h1>';
			} else {
				the_title( '<h1 class="entry-title" itemprop="headline">', '</h1>' );
			}
			?>
		</div>
	</div>
<?php } ?>
<div class="container">
	<div class="row">
		<?php if ( $tm_heli_layout == 'sidebar-content' ) { ?>
			<?php get_sidebar(); ?>
		<?php } ?>
		<?php if ( $tm_heli_layout == 'sidebar-content' || $tm_heli_layout == 'content-sidebar' ) { ?>
			<?php $class = 'col-md-8'; ?>
		<?php } else { ?>
			<?php $class = 'col-md-12'; ?>
		<?php } ?>
		<div class="<?php echo esc_attr( $class ); ?>">
			<div class="content">
				<?php while ( have_posts() ) : the_post(); ?>
					<article id="post-<?php the_ID(); ?>">
						<div class="entry-content">
							<?php the_content(); ?>
							<?php
							wp_link_pages( array(
								'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'tm-heli' ),
								'after'  => '</div>',
							) );
							?>
						</div>
						<!-- .entry-content -->
					</article><!-- #post-## -->
					<?php if ( ( comments_open() || get_comments_number() ) && $tm_heli_disable_comment != 'on' ) : comments_template(); endif; ?>
				<?php endwhile; // end of the loop. ?>
			</div>
		</div>
		<?php if ( $tm_heli_layout == 'content-sidebar' ) { ?>
			<?php get_sidebar(); ?>
		<?php } ?>
	</div>
</div>
<?php get_footer(); ?>
