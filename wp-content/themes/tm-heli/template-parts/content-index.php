<?php
/**
 * @package thememove
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php if ( has_post_thumbnail() ) { ?>
		<div class="post-thumb">
			<?php if ( has_post_thumbnail() ) { ?>
				<?php the_post_thumbnail( array( 848, 450 ) ); ?>
			<?php } else { ?>
				<img src="http://placehold.it/48x290" alt="thumbnail"/>
			<?php } ?>
		</div>
	<?php } ?>
	<header class="entry-header">
		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
	</header>
	<!-- .entry-header -->
	<?php if (get_post_type() === 'post') : ?>
		<div class="entry-meta">
			<span class="author vcard">
				<i class="fa fa-user"></i> <?php echo esc_html( __( 'Posted by ', 'tm-heli' ) . get_the_author() ); ?>
			</span>
			<span class="categories-links">
				<i class="fa fa-folder"></i> <?php echo esc_html( __( 'In ', 'tm-heli' ) . get_the_category_list( esc_html__( ', ', 'tm-heli' ) ) ) ?>
			</span>
			<span class="comments-counts">
				<i class="fa fa-comment"></i><?php comments_number( '0', '1', '%' ); ?> <?php comments_number( 'comment', 'Comment', 'Comments' ); ?>
			</span>
		</div><!-- .entry-meta -->
	<?php endif; ?>

	<div class="entry-content">
		<?php the_content(); ?>
	</div>
	<!-- .entry-content -->
	<div class="entry-footer">
		<div class="row middle">
			<div class="col-sm-6">
				<a class="read-more" href="<?php the_permalink() ?>">
					<span><?php echo esc_html( __( 'Continue Reading', 'tm-heli' ) ) ?></span>
				</a>
			</div>
			<div class="col-sm-6 end">
				<div class="share">
					<span><i class="fa fa-share-alt"></i> <?php echo esc_html( __( 'Share: ', 'tm-heli' ) ); ?></span>
					<span><a target="_blank"
					         href="http://www.facebook.com/sharer/sharer.php?u=<?php the_permalink() ?>"><i
								class="fa fa-facebook"></i></a></span>
					<span><a target="_blank"
					         href="http://twitter.com/share?text=<?php echo urlencode( the_title() ); ?>&url=<?php echo urlencode( the_permalink() ); ?>&via=twitter&related=<?php echo urlencode( "coderplus:WordPress Tips, jQuery and more" ); ?>"><i
								class="fa fa-twitter"></i></a></span>
					<span><a target="_blank" href="https://plus.google.com/share?url=<?php the_permalink() ?>"><i
								class="fa fa-google-plus"></i></a></span>
				</div>
			</div>
		</div>
	</div>

</article><!-- #post-## -->
