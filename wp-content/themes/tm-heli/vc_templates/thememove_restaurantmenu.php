<?php
if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}
$atts = vc_map_get_attributes( $this->getShortcode(), $atts );
extract( $atts );
$menus = (array) vc_param_group_parse_atts( $menus );
$col   = 12 / $column;
if ( count( $menus ) > 0 ) {
	?>
	<div
		class="tm-restaurant-menu <?php echo ''.$el_class; ?>">
		<div class="row">
			<?php
			$i = 1;
			foreach ( $menus as $menu ) {
				echo '<div class="col-md-' . $col . '">';
				echo '<div class="tm-restaurant-menu-title">' . $menu['title'] . '</div>';
				echo '<div class="tm-restaurant-menu-desc">' . $menu['desc'] . '</div>';
				echo '<div class="tm-restaurant-menu-price">' . $menu['price'] . '</div>';
				echo '</div>';
				if ( ( $i % $column == 0 ) && ( $i != count( $menus ) ) ) {
					echo '</div><div class="row">';
				}
				$i ++;
			}
			?>
		</div>
	</div>
	<?php
}
?>

