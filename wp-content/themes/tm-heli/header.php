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
		<div id="content" class="site-content">
