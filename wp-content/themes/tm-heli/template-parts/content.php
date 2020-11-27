<?php
/**
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
	<!-- .entry-header -->
	<?php if ( 'post' == get_post_type() ) : ?>
		<div class="entry-meta">
			<div class="container row row-xs-center">
				<div class="info col-sm-9 col-md-10">
					<span class="author vcard"><i class="fa fa-user"></i> <?php echo esc_html__( 'Posted by ', 'tm-heli' ) . get_the_author(); ?></span>
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
	<header class="entry-header">
		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
	</header>
	<div class="entry-content">
		<?php the_excerpt(); ?>
	</div>
	<!-- .entry-content -->
	<a class="btn" href="<?php echo get_permalink() ?>"><span><?php echo esc_html__( 'Continue Reading', 'tm-heli' ) ?></span></a>

</article><!-- #post-## -->
