<?php
/**
 * Shortcode attributes
 * @var $text
 * @var $url
 * @var $padding
 * @var $margin
 * @var $el_class
 * Shortcode class
 * @var $this WPBakeryShortCode_Thememove_Button
 */
$atts = vc_map_get_attributes( $this->getShortcode(), $atts );
extract( $atts );

$class     = $this->getExtraClass( $el_class );
$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $css, ' ' ), $this->settings['base'], $atts );

?>
<a class="btn <?php echo strlen( $css_class ) > 0 ? ' ' . trim( esc_attr( $css_class ) ) : ''; ?> <?php echo esc_attr( $class ); ?>" href="<?php echo esc_url( $url ); ?>" data-hover="<?php echo esc_attr( $text ); ?>"><span><?php echo '' . $text; ?></span></a>