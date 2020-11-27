<?php if ( Kirki::get_option( 'thememove', 'top_slider_enable' ) == 1 ) {
	dynamic_sidebar( 'top-slider' );
} ?>
<header <?php header_class(); ?>>
	<div class="row row-xs-center">
		<div class="col-md-1 col-xs-10 site-branding">
			<?php tm_heli_logo(); ?>
		</div>
		<div class="col-md-11 col-lg-9 col-xl-9 hidden-sm-down">
		</div>
		<div class="col-md-3 col-lg-2 col-xl-2 header-column-icon-container hidden-md-down end-lg">
			<div class="header-icon header-icon-canvas menu_button"><span></span></div>
		</div>
		<div class="col-xs-2 hidden-md-up">
			<a href="#menu"><div id="open-left" class="menu_button"><span></span></div></a>
		</div>
	</div>
</header><!-- .site-header -->
