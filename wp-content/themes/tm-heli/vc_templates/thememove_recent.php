<?php
/**
 * Shortcode attributes
 *
 * @var $number
 * @var $show_meta
 * Shortcode class
 * @var $this WPBakeryShortCode_Thememove_Recentposts
 */
$output = '';
$atts   = vc_map_get_attributes( $this->getShortcode(), $atts );
extract( $atts );
$args = array( 'post_type' => 'post', 'posts_per_page' => $number );
$loop = new WP_Query( $args );
?>
<div class="recent-posts">
	<ul>
		<?php while ( $loop->have_posts() ) : $loop->the_post();
			$meta = get_post_meta( get_the_ID() ); ?>
			<li>
				<div class="row">
					<div class="col-sm-9">
						<?php if ( has_post_thumbnail() ) { ?>
							<?php the_post_thumbnail( array( 120, 90, 'bfi_thumb' => true ) ); ?>
						<?php } else { ?>
							<img src="http://placehold.it/120x90" alt="thumbnail"/>
						<?php } ?>
						<h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
						<?php if ( $show_meta ): ?>
							<div class="meta">
								<i class="pe-7s-clock"></i><?php the_time( 'F j, Y' ); ?>
							</div><!-- .entry-meta -->
						<?php endif ?>
					</div>
					<div class="col-sm-3 col-xs-center">
						<a class="btn" href="<?php the_permalink(); ?>">
							<span><?php echo __( 'Read post', 'tm-heli' ); ?></span>
						</a>
					</div>
				</div>
			</li>
		<?php endwhile;
		wp_reset_postdata(); ?>
	</ul>
</div>