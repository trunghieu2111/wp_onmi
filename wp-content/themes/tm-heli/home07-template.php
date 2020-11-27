<?php
/*
Template Name: Simple Page
*/
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<?php
	$tm_heli_header_type = Kirki::get_option( 'thememove', 'header_type' );
	require_once TM_HELI_PATH .'/template-parts/' . $tm_heli_header_type . '.php';
	?>
	<?php while ( have_posts() ) : the_post(); ?>
		<article id="post-<?php the_ID(); ?>">
			<div class="entry-content">
				<?php the_content(); ?>
				<?php
				wp_link_pages( array(
					               'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'tm-heli' ),
					               'after'  => '</div>',
				               ) );
				?>
			</div>
			<!-- .entry-content -->
		</article><!-- #post-## -->
		<?php if ( ( comments_open() || get_comments_number() ) && $tm_heli_disable_comment != 'on' ) : comments_template(); endif; ?>
	<?php endwhile; // end of the loop. ?>
</div><!-- #page -->
<nav id="menu">
	<?php Heli::top_menu() ?>
</nav>
<?php wp_footer(); ?>

</body>
</html>


