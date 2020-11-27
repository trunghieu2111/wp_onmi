<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package thememove
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php if(Kirki::get_option( 'thememove', 'header_enable' ) == 1){ ?>
    <div class="search-form-container-full">
        <div class="container">
            <div class="row">
                <div class="col-xs-7 col-xs-center center">
                    <form name="search-form" role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
                        <input type="search" class="search-field" value="<?php echo get_search_query(); ?>" name="s" placeholder="<?php echo esc_attr_x( 'What are you searching for?', 'label', 'tm-heli' ); ?>" title="<?php echo esc_attr_x( 'What are you searching for?', 'label', 'tm-heli' ); ?>" />
                        <button class="button-search">
                            <i class="pe-7s-search"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
	<?php } ?>
	<div id="page" class="hfeed site">
		<?php if ( Kirki::get_option( 'thememove', 'header_type' ) == 'header05' && Kirki::get_option( 'thememove', 'header_enable' ) == 1 ){ ?>
			<?php get_template_part( 'template-parts/' . Kirki::get_option( 'thememove', 'header_type' ) ); ?>
		<?php }else{ ?>
			<div class="header-wrapper">
				<?php
					if(Kirki::get_option( 'thememove', 'header_enable' ) == 1){
						get_template_part( 'template-parts/' . Kirki::get_option( 'thememove', 'header_type' ) );
					}
				?>
			</div>
		<?php } ?>
		<?php
		$tm_heli_page_layout_private = get_post_meta( wc_get_page_id('shop'), "infinity_page_layout_private", true );
		$tm_heli_page_type           = get_post_meta( wc_get_page_id('shop'), "infinity_page_type", true );
		$tm_heli_heading_image       = get_post_meta( wc_get_page_id('shop'), "infinity_heading_image", true );
		$tm_heli_custom_logo         = get_post_meta( wc_get_page_id('shop'), "infinity_custom_logo", true );
		$tm_heli_custom_title        = get_post_meta( wc_get_page_id('shop'), "infinity_custom_title", true );
		$tm_heli_disable_breadcrumb  = get_post_meta( wc_get_page_id('shop'), "infinity_disable_breadcrumb", true );
		$tm_heli_disable_comment     = get_post_meta( wc_get_page_id('shop'), "infinity_disable_comment", true );
		$tm_heli_disable_title       = get_post_meta( wc_get_page_id('shop'), "infinity_disable_title", true );
		$tm_heli_custom_class        = get_post_meta( wc_get_page_id('shop'), "infinity_custom_class", true );
		if ( $tm_heli_page_layout_private != 'default' && class_exists( 'cmb2_bootstrap_205' ) ) {
			$tm_heli_layout = get_post_meta( wc_get_page_id('shop'), "tm_heli_page_layout_private", true );
		} else {
			$tm_heli_layout = Kirki::get_option( 'thememove', 'page_layout' );
		}
		if ( $tm_heli_heading_image ) {
			$tm_heli_heading_image = get_post_meta( wc_get_page_id('shop'), "infinity_heading_image", true );
		} else {
			$tm_heli_heading_image = Kirki::get_option( 'thememove', 'page_bg_image' );
		}
		?>
		<div class="big-title <?php echo esc_attr( $tm_heli_page_type ); ?>" style="<?php if ($tm_heli_heading_image) { ?> background-image: url('<?php echo esc_url( $tm_heli_heading_image ); ?>') <?php } ?>">
			<div class="container">
				<?php if ( function_exists( 'tm_bread_crumb' ) && Kirki::get_option( 'thememove', 'breadcrumb_enable' ) == 1 && $tm_heli_disable_breadcrumb != 'on' ) { ?>
					<div class="breadcrumb">
						<div class="container">
							<?php echo tm_bread_crumb( array( 'home_label' => Kirki::get_option( 'thememove', 'breadcrumb_home_text' ) ) ); ?>
						</div>
					</div>
				<?php } ?>
				<?php
				if ( $tm_heli_custom_title ) {
					echo '<h1 class="entry-title" itemprop="headline">' . $tm_heli_custom_title . '</h1>';
				} else {
					echo '<h1 class="entry-title" itemprop="headline">' . woocommerce_page_title( false ) . '</h1>';
				}
				?>
			</div>
		</div>
		<div id="content" class="site-content">
