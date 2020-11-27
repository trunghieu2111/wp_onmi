<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package thememove
 */
$tm_heli_heading_image = Kirki::get_option( 'thememove', 'post_title_bg_image' );
$post_disable_title_blog_page = Kirki::get_option( 'thememove', 'post_disable_title_blog_page' );
get_header(); ?>
<?php if ( $post_disable_title_blog_page == 1 ) { ?>
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
			<?php echo html_entity_decode( Kirki::get_option( 'thememove', 'post_title_text' ) ); ?>
		</h2>
	</div>
</div>
<?php } ?>
<div class="container">
	<div class="row">
		<div class="col-md-9">
			<main class="content" role="main">
				<?php if ( have_posts() ) : ?>
					<?php /* Start the Loop */ ?>
					<?php while ( have_posts() ) : the_post(); ?>
						<?php
						/* Include the Post-Format-specific template for the content.
						 * If you want to override this in a child theme, then include a file
						 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
						 */
						get_template_part( 'template-parts/content', get_post_format() );
						?>
					<?php endwhile; ?>
					<?php tm_heli_paging_nav(); ?>
				<?php else : ?>
					<?php get_template_part( 'content', 'none' ); ?>
				<?php endif; ?>
			</main>
		</div>
		<?php get_sidebar(); ?>
	</div>
</div>

<?php get_footer(); ?>
