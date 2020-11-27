<?php
/**
 * The template for displaying all single posts.
 *
 * @package thememove
 */
$tm_heli_heading_image = Kirki::get_option( 'thememove', 'post_title_bg_image' );
$tm_heli_layout        = Kirki::get_option( 'thememove', 'post_layout' );
get_header(); ?>
	<div class="big-title" style="background-image: url('<?php echo esc_url( $tm_heli_heading_image ); ?>')">
		<div class="container">
			<?php if ( function_exists( 'tm_bread_crumb' ) && Kirki::get_option( 'thememove', 'breadcrumb_enable' ) == 1 ) { ?>
				<div class="breadcrumb">
					<div class="container">
						<?php echo tm_bread_crumb( array( 'home_label' => Kirki::get_option( 'thememove', 'breadcrumb_home_text' ) ) ); ?>
					</div>
				</div>
			<?php } ?>
			<h2 class="entry-title" itemprop="headline">
				<?php echo Kirki::get_option( 'thememove', 'post_title_text' ); ?>
			</h2>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<?php if ( $tm_heli_layout == 'sidebar-content' ) { ?>
				<?php get_sidebar(); ?>
			<?php } ?>
			<?php if ( $tm_heli_layout == 'sidebar-content' || $tm_heli_layout == 'content-sidebar' ) { ?>
				<?php $class = 'col-md-9'; ?>
			<?php } else { ?>
				<?php $class = 'col-md-12'; ?>
			<?php } ?>
			<div class="<?php echo esc_attr( $class ); ?>">
				<div class="content">
					<?php while ( have_posts() ) : the_post(); ?>
						<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> itemscope="itemscope"
						         itemtype="http://schema.org/CreativeWork">
							<div class="entry-content">
								<?php get_template_part( 'template-parts/content', 'single' ); ?>
								<?php //the_post_navigation(); ?>
								<?php
								// If comments are open or we have at least one comment, load up the comment template.
								if ( comments_open() || get_comments_number() ) :
									comments_template();
								endif;
								?>
							</div>
							<!-- .entry-content -->
						</article><!-- #post-## -->
					<?php endwhile; // end of the loop. ?>
				</div>
			</div>
			<?php if ( $tm_heli_layout == 'content-sidebar' ) { ?>
				<?php get_sidebar(); ?>
			<?php } ?>
		</div>
	</div>
<?php get_footer(); ?>