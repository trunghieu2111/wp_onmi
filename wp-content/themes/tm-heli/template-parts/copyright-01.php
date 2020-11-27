<div class="copyright-wrapper">
	<?php if ( Kirki::get_option( 'thememove', 'copyright_enable' ) == 1 ) { ?>
		<div <?php copyright_class(); ?>>
			<div class="container">
				<?php echo html_entity_decode( Kirki::get_option( 'thememove', 'copyright_content' ) ); ?>
			</div>
		</div><!-- .copyright -->
	<?php } ?>
</div>
