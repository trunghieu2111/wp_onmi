<?php
/**
 * Shortcode attributes
 * @var $date
 * @var $client
 * @var $share
 * @var $link
 * Shortcode class
 * @var $this WPBakeryShortCode_Thememove_Portfolio
 */
$atts = vc_map_get_attributes( $this->getShortcode(), $atts );
extract( $atts );

$class     = $this->getExtraClass( $el_class );
$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $css, ' ' ), $this->settings['base'], $atts );

?>

<div
	class="<?php echo strlen( $css_class ) > 0 ? ' ' . trim( esc_attr( $css_class ) ) : ''; ?> <?php echo esc_attr( $class ); ?> portfolio-info">
	<ul>
		<?php if ( $date ) { ?>
			<li>
				<span><?php echo __( 'Date', 'tm-heli' ) ?>:</span> <?php echo '' . $date; ?>
			</li>
		<?php } ?>
		<?php if ( $client ) { ?>
			<li>
				<span><?php echo __( 'Client', 'tm-heli' ) ?>:</span> <?php echo '' . $client; ?>
			</li>
		<?php } ?>
		<?php
		global $post;
		// Categories
		$categories = get_the_term_list( $post->ID, 'project-category', '', ', ', '' );

		if ( $categories ) { ?>
			<li>
				<span><?php echo __( 'Category', 'tm-heli' ) ?>:</span> <?php echo '' . $categories; ?>
			</li>
		<?php } ?>
		<?php if ( $share == 'yes' ) { ?>
			<li>
				<div class="share">
					<span><?php echo esc_html( __( 'Share: ', 'tm-heli' ) ); ?></span>
					<a class="social" target="_blank" href="http://www.facebook.com/sharer/sharer.php?u=<?php the_permalink() ?>"><i class="fa fa-facebook"></i> </a>
					<a class="social" target="_blank" href="http://twitter.com/share?text=<?php echo urlencode( the_title() ); ?>&url=<?php echo urlencode( the_permalink() ); ?>&via=twitter ); ?>"><i class="fa fa-twitter"></i></a>
					<a class="social" target="_blank" href="https://plus.google.com/share?url=<?php the_permalink() ?>"><i class="fa fa-google-plus"></i></a>
				</div>
			</li>
		<?php } ?>
		<li>
			<div class="vc_btn3-container  clearfix vc_btn3-left">
				<a class="vc_general vc_btn3 vc_btn3-size-sm vc_btn3-shape-rounded vc_btn3-style-outline vc_btn3-color-black" href="<?php echo '' . $link ?>" target="_self"><?php echo esc_html( __( 'Visit Website', 'tm-heli' ) ) ?></a>
			</div>
		</li>
	</ul>
</div>
