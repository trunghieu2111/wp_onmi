<?php
extract( shortcode_atts( array(
	'time'     => '2016/10/20 10:00:00',
	'days'     => 'Days',
	'hours'    => 'Hours',
	'minutes'  => 'Minutes',
	'seconds'  => 'Seconds',
	'el_class' => '',
), $atts ) );
$el_class = $this->getExtraClass( $el_class );
global $countdown_count;
$id = 'countdown-' . (int) $countdown_count ++;
?>
<div id="<?php echo esc_attr( $id ); ?>" class="tm-countdown <?php echo esc_attr( $el_class ); ?>"></div>
<script type="text/javascript">
	jQuery(document).ready(function () {
		jQuery('#<?php echo esc_js( $id ); ?>').countdown("<?php echo esc_js( $time ); ?>", function (event) {
			jQuery(this).html(
				event.strftime('<div class="day"><span class="number">%D</span><span class="text"><?php echo esc_js( $days ); ?></span></div><div class="hour"><span class="number">%H</span><span class="text"><?php echo esc_js( $hours ); ?></span></div><div class="minute"><span class="number">%M</span><span class="text"><?php echo esc_js( $minutes ); ?></span></div><div class="second"><span class="number">%S</span><span class="text"><?php echo esc_js( $seconds ); ?></span></div>')
			);
		});
	});
</script>