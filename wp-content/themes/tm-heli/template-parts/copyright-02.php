<div class="copyright-wrapper">
	<?php if ( Kirki::get_option( 'thememove', 'copyright_enable' ) == 1 ) { ?>
		<div <?php copyright_class(); ?>>
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="social-icons">
							<?php tm_heli_social_icons(); ?>
						</div>
					</div>
					<div class="col-md-6 right">
						<?php echo html_entity_decode( Kirki::get_option( 'thememove', 'copyright_content' ) ); ?>
					</div>
				</div>
			</div>
		</div><!-- .copyright -->
	<?php } ?>
</div>