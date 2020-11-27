<?php function tm_heli_js_custom_code() { ?>
	<?php if ( Kirki::get_option( 'thememove', 'custom_js_enable' ) == 1 ): ?>
		<?php echo html_entity_decode( Kirki::get_option( 'thememove', 'custom_js' ) ); ?>
	<?php endif ?>
	<?php if ( Kirki::get_option( 'thememove', 'nav_sticky_enable' ) == 1 && has_nav_menu( 'primary' ) ): ?>
		<script>
			jQuery( document ).ready( function( $ ) {
				$( ".site-header" ).headroom(
					{
						offset: 0
					}
				);
			} );
		</script>
	<?php endif ?>
	<?php if ( Kirki::get_option( 'thememove', 'back_to_top_enable' ) == 1 ) { ?>
		<script>
			jQuery( document ).ready( function( $ ) {
				var $window = $( window );
				// Scroll up
				var $scrollup = $( '.scrollup' );

				$window.scroll( function() {
					if ( $window.scrollTop() > 100 ) {
						$scrollup.addClass( 'show' );
					} else {
						$scrollup.removeClass( 'show' );
					}
				} );

				$scrollup.on( 'click', function( evt ) {
					$( "html, body" ).animate( { scrollTop: 0 }, 600 );
					evt.preventDefault();
				} );
			} );
		</script>
	<?php } ?>
<?php }

add_action( 'wp_footer', 'tm_heli_js_custom_code' );
