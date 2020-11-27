<?php if ( Kirki::get_option( 'thememove', 'top_slider_enable' ) == 1 ) {
	dynamic_sidebar( 'top-slider' );
} ?>
<header <?php header_class(); ?>>
	<div class="container">
		<div class="row row-xs-center">
			<div class="col-md-1 col-xs-10 hidden-md-up site-branding">
				<?php tm_heli_logo(); ?>
			</div>
			<div class="col-md-12 hidden-sm-down align-center">
				<nav id="site-navigation" class="main-navigation">
					<div class="container">
						<div class="row row-md-center">
							<div class="col-md-12 col-xs-center">
								<?php Heli::top_menu() ?>
							</div>
						</div>
					</div>
					<div class="header-column-icon-container">
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
				</nav><!-- #site-navigation -->
			</div>
			<div class="col-xs-2 hidden-md-up end">
				<a href="#menu"><div id="open-left" class="menu_button"><span></span></div></a>
			</div>
		</div>
	</div>
</header><!-- .site-header -->
