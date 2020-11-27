<?php
/**
 * Shortcode attributes
 * @var $url
 * @var $el_class
 * Shortcode class
 * @var $this WPBakeryShortCode_Thememove_Vimeo
 */
$atts   = vc_map_get_attributes( $this->getShortcode(), $atts );
extract( shortcode_atts( array(
    'url'                => '',
    'el_class'           => '',
    'css'                => '',
), $atts ) );

$el_class  = $this->getExtraClass( $el_class );
$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $css, ' ' ), $this->settings['base'], $atts );

?>

<div class="tm-vimeo <?php echo esc_attr( $css_class . ' ' . $el_class ); ?>" style="text-align: center">
	<iframe src="https://player.vimeo.com/video/<?php echo esc_html( $url ); ?>" width="640" height="360" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
</div>
