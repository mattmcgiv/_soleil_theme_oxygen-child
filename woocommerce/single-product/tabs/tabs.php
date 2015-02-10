<?php
/**
 * Single Product tabs
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.0.0
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/**
 * Filter tabs and allow third parties to add their own
 *
 * Each tab is an array containing title, callback and priority.
 * @see woocommerce_default_product_tabs()
 */
$tabs = apply_filters( 'woocommerce_product_tabs', array() );

if ( ! empty( $tabs ) ) : ?>

	<div class="woocommerce-tabs">
		<div class="soleil-tabs">
				
			<?php foreach ( $tabs as $key => $tab ) : ?>
				<div class="soleil-product-more-info" id="soleil-product-info-<?php echo $key ?>">
					<span class="soleil-product-more-info-title">
						<a href="#tab-<?php echo $key ?>"><?php echo apply_filters( 'woocommerce_product_' . $key . '_tab_title', $tab['title'], $key ) ?></a>
					</span>
									<?php call_user_func( $tab['callback'], $key, $tab ) ?>
				</div><?php //end class soleil-product-more-info ?>
			<?php endforeach; ?>
				
		</div>
		<?php foreach ( $tabs as $key => $tab ) : ?>

			<?php /*<div class="panel entry-content" id="tab-<?php echo $key ?>">*/ ?>
			

		<?php endforeach; ?>
	</div>

<?php endif; ?>