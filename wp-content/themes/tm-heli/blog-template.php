<?php
/*
Template Name: Blog Page
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
	<div class="big-title <?php echo esc_attr( $tm_heli_page_type ); ?>"
	     style="<?php if ( $tm_heli_heading_image ) { ?> background-image: url('<?php echo esc_url( $tm_heli_heading_image ); ?>') <?php } ?>">
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
		<div class="col-md-9">
			<main class="content" role="main">
				<?php
				// set up or arguments for our custom query
				$paged      = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
				$query_args = array(
					'post_type'      => 'post',
					'posts_per_page' => 5,
					'paged'          => $paged,
				);
				// create a new instance of WP_Query
				$the_query = new WP_Query( $query_args );
				?>
				<?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); // run the loop ?>
					<?php get_template_part( 'template-parts/content', get_post_format() ); ?>
				<?php endwhile; ?>
					<?php if ( $the_query->max_num_pages > 1 ) { // check if the max number of pages is greater than 1  ?>
						<nav class="prev-next-posts">
							<div class="row">
								<div class="col-sm-6">
									<?php echo get_next_posts_link( esc_html__( 'Older Entries', 'tm-heli' ), $the_query->max_num_pages ); // display older posts link ?>
								</div>
								<div class="col-sm-6">
									<?php echo get_previous_posts_link( esc_html__( 'Newer Entries', 'tm-heli' ) ); // display newer posts link ?>
								</div>
							</div>
						</nav>
					<?php } ?>
				<?php else : ?>
					<?php get_template_part( 'content', 'none' ); ?>
				<?php endif; ?>
			</main>
		</div>
		<?php get_sidebar(); ?>
	</div>
</div>

<?php get_footer(); ?>
