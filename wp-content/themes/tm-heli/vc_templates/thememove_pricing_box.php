<?php
$atts = vc_map_get_attributes( $this->getShortcode(), $atts );
extract( $atts );
$class = $this->getExtraClass( $el_class );
// General
$container_classes = array( $el_class );
if ( $package_featured ) {
	$container_classes[] = 'featured';
}
$container_classes = implode( ' ', $container_classes );
$link              = vc_build_link( $package_link );
?>
<div class="pricing-table-container<?php echo esc_attr( $container_classes ); ?>">
	<div class="pricing-table">
		<div class="pricing-table-heading-container">
			<h3><?php echo esc_html( $package_heading ); ?></h3>
			<?php if ( $package_sub_heading ) : ?>
				<h5><?php echo esc_html( $package_sub_heading ); ?></h5>
			<?php endif; ?>
		</div>

		<div class="pricing-table-price-container">
			<span class="pricing-table-term"><?php echo esc_html( $package_unit ); ?></span>
			<span class="pricing-table-figure"><?php echo esc_html( $package_price ); ?></span>
		</div>

		<?php if ( $package_image ) : ?>
			<div class="pricing-table-image">
				<?php echo wp_get_attachment_image( $package_image, 'full' ) ?>
			</div>
		<?php endif; ?>

		<div class="pricing-table-features">
			<?php echo wpb_js_remove_wpautop( do_shortcode( $content ), true ); ?>
		</div>

	</div>
	<?php if ( $package_btn_text ) : ?>
		<div class="pricing-table-button">
			<a class="btn2"
			   href="<?php echo esc_url( $link['url'] ); ?>" <?php echo 'target="' . $link['target'] . '"'; ?>><?php echo '' . $package_btn_text; ?></a>
		</div>
	<?php endif; ?>
</div>