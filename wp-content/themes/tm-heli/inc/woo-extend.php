<?php
remove_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_rating', 5 );
remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20, 0 );
remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10 );
remove_action( 'woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_product_thumbnail', 10 );
//remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar', 10 );
//add_filter( 'woocommerce_product_description_heading', 'disable_title', 10 );

add_filter( 'woocommerce_show_page_title', '__return_false', 10 );

add_action( 'woocommerce_before_shop_loop_item_title', 'tm_heli_woo_extra', 10 );
function tm_heli_woo_extra() {
	?>
	<div class="thumb">
		<?php woocommerce_template_loop_product_thumbnail(); ?>
		<div class="extra">
			<div>
				<p><i class="pe-7s-cart"></i><?php wc_get_template( 'loop/add-to-cart.php' ); ?></p>

				<p><i class="pe-7s-search"></i><a class="btn"
				                                  href="<?php the_permalink(); ?>"><?php echo esc_html__( 'View item', 'tm-heli' ) ?></a>
				</p>
			</div>
		</div>
	</div>
<?php }
