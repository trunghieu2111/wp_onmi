<?php
/**
 * Template part for displaying single posts.
 *
 * @package thememove
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="post-thumb">
		<div class="dates">
			<div>
				<span class="date"><?php the_time( 'd' ); ?></span>
				<span class="month"><?php the_time( 'M' ); ?></span>
				<span class="year"><?php the_time( 'Y' ); ?></span>
			</div>
		</div>
		<?php if ( has_post_thumbnail() ) { ?>
			<?php the_post_thumbnail( array( 848, 450 ) ); ?>
		<?php } else { ?>
			<img src="http://placehold.it/848x450" alt="thumbnail"/>
		<?php } ?>
	</div>
	<?php if ( 'post' == get_post_type() ) : ?>
		<div class="entry-meta">
			<div class="container row row-xs-center">
				<div class="info col-sm-9 col-md-10">
					<span class="author vcard"><i class="fa fa-user"></i> <?php echo esc_html( __( 'Posted by ', 'tm-heli' ) . get_the_author() ); ?></span>
					<span class="categories-links"><i class="fa fa-folder"></i> <?php echo esc_html__( 'In ', 'tm-heli' ) . get_the_category_list( ',') ?> </span>
					<span class="comments-counts"><i class="fa fa-comment"></i><?php comments_number( '0', '1', '%' ); ?> <?php comments_number( 'comment', 'Comment', 'Comments' ); ?></span>
				</div>
				<div class="share col-sm-3 col-md-2">
					<span><a target="_blank" href="http://www.facebook.com/sharer/sharer.php?u=<?php the_permalink() ?>"><i class="fa fa-facebook"></i></a></span>
					<span><a target="_blank" href="http://twitter.com/share?text=<?php echo urlencode( the_title() ); ?>&url=<?php echo urlencode( the_permalink() ); ?>&via=twitter&related=<?php echo urlencode( "coderplus:WordPress Tips, jQuery and more" ); ?>"><i class="fa fa-twitter"></i></a></span>
					<span><a target="_blank" href="https://plus.google.com/share?url=<?php the_permalink() ?>"><i class="fa fa-google-plus"></i></a></span>
				</div>
			</div>
		</div><!-- .entry-meta -->
	<?php endif; ?>

	<?php the_title( '<h1 class="entry-title" itemprop="headline">', '</h1>' ); ?>

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html( __( 'Pages:', 'tm-heli' ) ),
			'after'  => '</div>',
		) );
		?>
	</div>
	<!-- .entry-content -->
	<div class="entry-footer">
		<?php the_tags( 'TAGS: ', '' ); ?>
	</div>

	<div class="author-info">
		<div class="row">
			<div class="col-sm-3 align-center">
				<?php echo get_avatar( get_the_author_meta( 'user_email' ), $size = '120' ); ?>
			</div>
			<div class="col-sm-9">
				<h3><?php the_author_meta( 'user_nicename' ); ?></h3>

				<p><?php the_author_meta( 'description' ); ?></p>
			</div>
		</div>
	</div>

</article><!-- #post-## -->
