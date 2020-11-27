<?php if ( Kirki::get_option( 'thememove', 'top_slider_enable' ) == 1 ) {
	dynamic_sidebar( 'top-slider' );
} ?>
<header <?php header_class(); ?>>
	<div class="row row-xs-center">
		<div class="col-xs-10 col-md-11 col-lg-10 col-xl-10 logo-nav">
			<div class="row row-xs-center">
				<div class="site-branding">
					<?php tm_heli_logo(); ?>
				</div>
				<nav id="site-navigation" class="main-navigation hidden-sm-down">
					<?php Heli::top_menu() ?>
				</nav><!-- #site-navigation -->
			</div>
		</div>
		<div class="col-xs-2 hidden-md-up end">
			<a href="#menu"><div id="open-left" class="menu_button"><span></span></div></a>
		</div>
	</div>
</header><!-- .site-header -->
