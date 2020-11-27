<?php
/**
 * Shortcode attributes
 * @var $url
 * @var $player_scale
 * @var $player_color
 * @var $player_color_hover
 * @var $el_class
 * Shortcode class
 * @var $this WPBakeryShortCode_Thememove_Video_Player
 */
$atts   = vc_map_get_attributes( $this->getShortcode(), $atts );
extract( shortcode_atts( array(
    'url'                => '',
    'player_scale'       => 1,
    'player_color'       => '#111111',
    'player_color_hover' => '',
    'el_class'           => '',
    'css'                => '',
), $atts ) );

$el_class  = $this->getExtraClass( $el_class );
$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $css, ' ' ), $this->settings['base'], $atts );

global $tm_video_player_id;
$tm_video_player_id = uniqid();

?>
<style type="text/css">
    #tm_video-player-<?php echo esc_attr( $tm_video_player_id ); ?> .svg-video-player {
        transition: 0.5s;
        transform: scale(<?php echo esc_attr( $player_scale); ?>, <?php echo esc_attr( $player_scale ); ?>);
    }

    #tm_video-player-<?php echo esc_attr( $tm_video_player_id); ?> a:hover .svg-video-player {
        transform: scale(<?php echo esc_attr( $player_scale * 1.2 ); ?>, <?php echo esc_attr( $player_scale * 1.2 ); ?>);
    }

    <?php if ( $player_color ) : ?>
    #tm_video-player-<?php echo esc_attr( $tm_video_player_id ); ?> .svg-video-player .svg-video-player-border {
        stroke: <?php echo esc_attr( $player_color ); ?>;
    }

    #tm_video-player-<?php echo esc_attr( $tm_video_player_id ); ?> .svg-video-player .svg-video-player-icon {
        fill: <?php echo esc_attr( $player_color ); ?>;
    }

    <?php endif; ?>

    <?php if ( $player_color_hover ) : ?>
    #tm_video-player-<?php echo esc_attr( $tm_video_player_id ); ?> a:hover .svg-video-player .svg-video-player-border {
        stroke: <?php echo esc_attr( $player_color_hover ); ?>;
    }

    #tm_video-player-<?php echo esc_attr( $tm_video_player_id ); ?> a:hover .svg-video-player .svg-video-player-icon {
        fill: <?php echo esc_attr( $player_color_hover ); ?>;
    }

    <?php endif; ?>
</style>

<div id="tm_video-player-<?php echo esc_attr( $tm_video_player_id ); ?>"
     class="tm_video-player <?php echo esc_attr( $css_class . ' ' . $el_class ); ?>">
    <a href="<?php echo esc_url( $url ); ?>">
        <svg class="svg-video-player" viewBox="0 0 82 82" version="1.1"
             xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve"
             x="0px" y="0px" width="82px" height="82px"
        >
            <path class="svg-video-player-border" d="M 3 41 C 3 20.013 20.013 3 41 3 C 61.987 3 79 20.013 79 41 C 79 61.987 61.987 79 41 79 C 20.013 79 3 61.987 3 41 Z" stroke="#ffffff" stroke-width="1" fill="none"/>
            <path class="svg-video-player-icon" d="M 33.4 28.65 L 33.4 54.3 L 54.3 41.95 L 33.4 28.65 Z" stroke="#ffffff" stroke-width="1" fill="none"/>
        </svg>
    </a>
</div>
<?php
echo "" . $this->endBlockComment( 'thememove_video_player' );
?>

<script>
    jQuery(document).ready(function ($) {
        $('#tm_video-player-<?php echo esc_attr( $tm_video_player_id ); ?> a').magnificPopup({
            type: 'iframe'
        });
    });
</script>