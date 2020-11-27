<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package thememove
 */
$tm_heli_layout        = Kirki::get_option( 'thememove', 'archive_layout' );
get_header(); ?>
	<div class="big-title">
		<div class="container">
			<?php if ( function_exists( 'tm_bread_crumb' ) && Kirki::get_option( 'thememove', 'breadcrumb_enable' ) == 1 ) { ?>
				<div class="breadcrumb">
					<div class="container">
						<?php echo tm_bread_crumb( array( 'home_label' => Kirki::get_option( 'thememove', 'breadcrumb_home_text' ) ) ); ?>
					</div>
				</div>
			<?php } ?>
			<?php
			the_archive_title( '<h1 class="entry-title">', '</h1>' );
			the_archive_description( '<div class="taxonomy-description">', '</div>' );
			?>
		</div>
	</div>
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
				<main class="content">
					<?php while ( have_posts() ) : the_post(); ?>
						<?php get_template_part( 'template-parts/content', get_post_format() ); ?>
					<?php endwhile; // end of the loop. ?>
					<?php tm_heli_paging_nav(); ?>
				</main>
			</div>
			<?php if ( $tm_heli_layout == 'content-sidebar' ) { ?>
				<?php get_sidebar(); ?>
			<?php } ?>
		</div>
	</div>
<?php get_footer(); ?>
