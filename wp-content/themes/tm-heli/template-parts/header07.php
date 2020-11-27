<?php if ( Kirki::get_option( 'thememove', 'top_slider_enable' ) == 1 ) {
	dynamic_sidebar( 'top-slider' );
} ?>
<header <?php header_class(); ?>>
	<div class="row row-xs-center">
		<div class="col-md-1 col-xs-10 hidden-md-up site-branding">
			<?php tm_heli_logo(); ?>
		</div>
		<div class="col-md-12 hidden-sm-down">
			<nav id="site-navigation" class="main-navigation">
				<div class="row row-md-center">
					<div class="col-md-12">
						<?php wp_nav_menu( array(
							'theme_location'  => 'primary',
							'menu'            => get_post_meta( get_the_ID(), "infinity_page_menu", true ),
							'menu_id'         => 'primary-menu',
							'container_class' => 'primary-menu',
							'depth'           => 1,
						) ); ?>
					</div>
				</div>
			</nav><!-- #site-navigation -->
		</div>
		<div class="col-xs-2 hidden-md-up end">
			<a href="#menu"><div id="open-left" class="menu_button"><span></span></div></a>
		</div>
	</div>
</header><!-- .site-header -->
