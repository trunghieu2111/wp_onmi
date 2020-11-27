<?php
/**
 * @package thememove
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="row row-md-center">
		<div class="col-md-6">
			<div class="row">
				<div class="col-md-5"></div>
				<div class="col-md-7">
					<div class="cat">
						<p>
							<?php
							global $post;
							$terms = get_the_terms($post->id, 'project-category');

							foreach ( $terms as $term ) {
								echo '<span>' . $term->name.',</span> ';
							}
							?>
						</p>
					</div>
					<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
					<a href="<?php echo esc_url( get_permalink() ); ?>" onmouseleave="this.style.borderColor='#222222'; this.style.backgroundColor='transparent'; this.style.color='#222222'" onmouseenter="this.style.borderColor='#222222'; this.style.backgroundColor='#222222'; this.style.color='#ffffff';" style="border-color: rgb(34, 34, 34); color: rgb(34, 34, 34); background-color: transparent;" class="vc_general vc_btn3 vc_btn3-size-sm vc_btn3-shape-rounded vc_btn3-style-outline-custom">
						<?php echo esc_html('VIEW DETAIL','tm-heli'); ?>
					</a>
				</div>
			</div>
		</div>
		<div class="col-md-6">
			<?php if ( has_post_thumbnail() ) { ?>
				<?php the_post_thumbnail( array( 945, 5700 ) ); ?>
			<?php } else { ?>
				<img src="http://placehold.it/945x570" alt="thumbnail"/>
			<?php } ?>
		</div>
	</div>
</article><!-- #post-## -->
