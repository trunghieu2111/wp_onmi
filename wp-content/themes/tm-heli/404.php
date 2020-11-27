<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package thememove
 */

get_header(); ?>
<div class="top align-center">
	<div class="container">
		<img src="<?php echo Kirki::get_option( 'thememove', 'page_404_image' ); ?>" alt="404">
	</div>
</div>

<div class="content align-center">
	<div class="container">
		<h1 class="page-title"><?php echo Kirki::get_option( 'thememove', 'page_404_big_title' ); ?></h1>
		<p><?php echo Kirki::get_option( 'thememove', 'page_404_sub_title' ); ?></p>
		<h2>404</h2>
	</div>
</div>
<?php get_footer(); ?>
