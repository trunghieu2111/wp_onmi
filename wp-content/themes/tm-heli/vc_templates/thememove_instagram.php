<?php
/**
 * Shortcode attributes
 *
 * @var $atts
 * @var $username
 * @var $number_items
 * @var $item_width_md
 * @var $show_follow_text
 * @var $spacing
 * @var $show_likes_comments
 * @var $link_new_page
 * @var $square_media
 * @var $responsive
 * @var $el_class
 * Shortcode class
 * @var $this WPBakeryShortCode_Thememove_Instagram
 */
$output = '';
$atts   = vc_map_get_attributes( $this->getShortcode(), $atts );
extract( $atts );

$el_class = $this->getExtraClass( $el_class );

$class = 'col-md-' . $item_width_md;

if ( '' != $responsive ) {
  $class .= ' ' . $responsive;
}
// if hidden on device, find [class*=col] and replace to '', use only vc_hidden
$class_container = ' ' . preg_replace( '/col\-(lg|md|sm|xs)[^\s]*/', '', $class );
?>

<div class="tm-instagram <?php echo esc_attr( $el_class );
echo trim( $class_container ); ?>">
  <?php if ( ! empty( $username ) ) {
    $media_array = $this->scrape_instagram( $username, $number_items, $square_media );

    if ( is_wp_error( $media_array ) ) { ?>
      <div class="tm-instagram--error"><p><?php echo esc_attr( $media_array->get_error_message() ); ?></p></div>
    <?php } else { ?>
      <ul class="tm-instagram-pics row">
        <?php foreach ( $media_array as $item ) { ?>
          <li class="item<?php echo ' ' . $class; ?>" style="padding: 0 <?php echo esc_attr( $spacing ); ?>px <?php echo esc_attr( $spacing ); ?>px 0;">
            <?php if ( 1 == $show_likes_comments ) { ?>
              <ul class="item-info" style="width:calc(100% - <?php echo esc_attr( $spacing ) . 'px'; ?>);">
                <li class="likes">
                  <a href="<?php echo esc_url( $item['link'] ) ?>" target="<?php echo esc_attr( $link_new_page == 1 ? '_blank' : '_self' ); ?>"><span><?php echo esc_attr( $item['likes'] ); ?>
                  </a></span></li>
                <li class="comments">
                  <a href="<?php echo esc_url( $item['link'] ) ?>" target="<?php echo esc_attr( $link_new_page == 1 ? '_blank' : '_self' ); ?>"><span><?php echo esc_attr( $item['comments'] ); ?>
                  </a></span></li>
              </ul>
            <?php } ?>

            <img src="<?php echo esc_url( $item['thumbnail'] ); ?>" alt="<?php echo esc_attr( $item['description'] ); ?>" class="item-image" />
            <?php if ( 'video' == $item['type'] ) { ?>
              <span class="play-button"></span>
            <?php } ?>

            <div class="overlay" style="margin: 0 <?php echo esc_attr( $spacing ); ?>px <?php echo esc_attr( $spacing ); ?>px 0;">
              <a href="<?php echo esc_url( $item['link'] ) ?>" target="<?php echo esc_attr( $link_new_page == 1 ? '_blank' : '_self' ); ?>">See on Instagram</a>
            </div>

           </li>
        <?php } ?>
      </ul>
    <?php } ?>
    <?php if ( 1 == $show_follow_text ) { ?>
      <div class="tm-instagram-follow-links">
        <?php echo ''.$content; ?>
      </div>
    <?php }
  } ?>
</div>
