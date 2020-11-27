<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package thememove
 */
?>
		</div> <!-- #content -->
		<?php if ( Kirki::get_option( 'thememove', 'header_type' ) === 'header05' && Kirki::get_option( 'thememove', 'header_enable' ) == 1 ) { ?>
			</div></div>
		<?php } ?>
		<?php get_template_part( 'template-parts/footer', '01' ); ?>
        <?php require_once TM_HELI_PATH .'/template-parts/' . Kirki::get_option( 'thememove', 'copyright_type' ) . '.php'; ?>
    </div><!-- #page -->
    <div id="side-box-container">
        <a href="#" class="button-side-box-close pe-7s-close"></a>
        <div class="side-box-inner">
            <?php if ( Kirki::get_option( 'infinity', 'header_type' ) !== 'header08' ) : ?>
                <?php dynamic_sidebar( 'side' ); ?>
            <?php else : ?>
                <?php wp_nav_menu( array( 'theme_location'  => 'primary', 'menu_id' => 'canvas-menu', 'container_class' => 'canvas-menu' ) ); ?>
                <div class="header-column-icon-container">
                    <?php if ( class_exists( 'WooCommerce' ) && Kirki::get_option( 'thememove', 'mini_cart_enable' ) == 1 ) { ?>
                        <div class="header-icon header-icon-cart mini-cart" data-url="<?php echo esc_url( WC()->cart->get_cart_url() ); ?>">
                            <?php echo tm_heli_minicart(); ?>
                            <div class="widget_shopping_cart_content"></div>
                        </div>
                    <?php } ?>
                    <div class="header-icon header-icon-search">
                        <i class="pe-7s-search"></i>
                    </div>
                </div>
            <?php endif; ?>
        </div>
        <ul class="side-box-social-list">
            <?php
            $site_social_control = Kirki::get_option( 'thememove', 'site_social_control' );
            if ( ! empty( $site_social_control ) ) {
                foreach ( $site_social_control as $key => $row_values ) {
                    $site_social_control_icon = $row_values['icon_class'];
                    $site_social_control_url = $row_values['link_url'];
                    ?>
                    <li>
                        <a href="<?php echo esc_url($site_social_control_url) ?>"><i class="fa <?php echo esc_attr($site_social_control_icon); ?>"></i></a>
                    </li>
                <?php }
            }
            ?>
        </ul>
    </div>
<?php if ( Kirki::get_option( 'thememove', 'back_to_top_enable' ) == 1 ) { ?>
    <a class="scrollup"><i class="fa fa-angle-up"></i></a>
<?php } ?>
<nav id="menu">
	<?php Heli::top_menu() ?>
</nav>
<?php wp_footer(); ?>
</body>
</html>
