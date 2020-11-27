<div class="footer-wrapper">
	<?php if ( Kirki::get_option( 'thememove', 'footer_enable' ) == 1 ) { ?>
		<?php if ( is_active_sidebar( 'footer' ) ) { ?>
			<footer class="site-footer">
				<div class="container">
					<div class="row">
						<div class="col-md-7 col-sm-12">
							<?php dynamic_sidebar( 'footer' ); ?>
							<div class="social-icons">
								<?php tm_heli_social_icons(); ?>
							</div>
						</div>
						<div class="col-md-2 col-sm-6">
							<?php dynamic_sidebar( 'footer2' ); ?>
						</div>
						<div class="col-md-3 col-sm-6">
							<?php dynamic_sidebar( 'footer3' ); ?>
						</div>
					</div>
				</div>
			</footer><!-- .site-footer -->
		<?php } ?>
	<?php } ?>
</div>