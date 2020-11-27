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
		<div class="col-lg-2 col-xl-2 hidden-md-down end-lg header-column-icon-container ">
			<?php if ( class_exists( 'WooCommerce' ) && Kirki::get_option( 'thememove', 'mini_cart_enable' ) == 1 ) { ?>
				<div class="header-icon header-icon-cart mini-cart">
					<?php echo tm_heli_minicart(); ?>
					<div class="widget_shopping_cart_content"></div>
				</div>
			<?php } ?>
			<div class="header-icon header-icon-search">
				<i class="pe-7s-search"></i>
			</div>
			<div class="header-icon header-icon-canvas menu_button"><span></span></div>
		</div>
		<div class="col-xs-2 hidden-md-up end">
			<a href="#menu"><div id="open-left" class="menu_button"><span></span></div></a>
		</div>
	</div>
</header><!-- .site-header -->
