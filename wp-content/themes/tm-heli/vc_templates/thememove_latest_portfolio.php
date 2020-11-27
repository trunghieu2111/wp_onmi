<?php
/**
 * Shortcode attributes
 * @var $tm_heading
 * @var $el_class
 * @var $category
 * Shortcode class
 * @var $this WPBakeryShortCode_Thememove_Latest_Portfolio
 */
$atts = vc_map_get_attributes( $this->getShortcode(), $atts );
extract( $atts );

$class     = $this->getExtraClass( $el_class );
$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $css, ' ' ), $this->settings['base'], $atts );

?>
<?php
global $wp_query;
$args      = array(
	'post_type' => 'project',
);
$loop = new WP_Query( $args );
?>
<div class="latest-portfolio <?php echo strlen( $css_class ) > 0 ? ' ' . trim( esc_attr( $css_class ) ) : ''; ?> <?php echo esc_attr( $class ); ?>">
	<div class="latest-portfolio-content">
		<?php if ( $loop->have_posts() ) : ?>
			<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
				<div class="row">
					<div class="col-md-6">
						<?php if ( has_post_thumbnail() ) { ?>
							<?php the_post_thumbnail( array( 620, 620, 'bfi_thumb' => true ) ); ?>
						<?php } else { ?>
							<img src="http://placehold.it/620x620" alt="thumbnail"/>
						<?php } ?>
					</div>
					<div class="col-md-6 right">
						<h2 class="title"><?php echo '' . $tm_heading; ?></h2>
						<div>
							<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
							<p class="terms">
								<?php
								global $post;
								$terms = get_the_terms( $post->ID, 'project-category' );
								foreach($terms as $term) {
									echo '<span>'.$term->name.'</span>';
								}
								?>
							</p>
						</div>
					</div>
				</div>
			<?php endwhile; ?>
			<?php wp_reset_postdata(); ?>
		<?php else : ?>
			<p><?php esc_html_e( 'Sorry, no posts matched your criteria.', 'tm-heli' ); ?></p>
		<?php endif; ?>
	</div>
</div>
<script>
	jQuery(document).ready(function ($) {
		$(".latest-portfolio-content").owlCarousel(
			{
				responsive: {
					0: {
						items: 1
					},
					769: {
						items: 1
					}
				},
				navigation: true,
				margin: 30,
				dots: false,
				autoplay: false,
				autoplayHoverPause: true,
				loop: true
			}
		);
	});
</script>