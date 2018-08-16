<?php
/**
 * The template for displaying product content within loops.
 *
 * Override this template by copying it to yourtheme/woocommerce/content-product.php
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.5.0
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
global $product, $woocommerce_loop;

// Store loop count we're currently on
if ( empty( $woocommerce_loop['loop'] ) )
	$woocommerce_loop['loop'] = 0;

// Store column count for displaying the grid
if ( empty( $woocommerce_loop['columns'] ) )
	$woocommerce_loop['columns'] = apply_filters( 'loop_shop_columns', 3 );

// Ensure visibility
if ( ! $product || ! $product->is_visible() )
	return;

// Increase loop count
$woocommerce_loop['loop']++;

// Extra post classes
$classes = array();
$woo_col = round(12/$woocommerce_loop['columns']);
$classes[] = 'col-xs-12 col-sm-6 col-md-' . $woo_col;


if( $woocommerce_loop['themeum_increment'] == 1 ){
	echo '<div class="row">';
}



?>
<div <?php post_class( $classes ); ?>>

	<?php do_action( 'woocommerce_before_shop_loop_item' ); ?>

	<div class="product-thumbnail-outer">
		<div class="product-thumbnail-outer-inner">
			<a href="<?php the_permalink(); ?>">
			<?php
			/**
			 * woocommerce_before_shop_loop_item_title hook
			 *
			 * @hooked woocommerce_show_product_loop_sale_flash - 10
			 * @hooked woocommerce_template_loop_product_thumbnail - 10
			 */
			do_action( 'woocommerce_before_shop_loop_item_title' );
			?>
			</a>
			<div class="addtocart-btn"><i class="fa fa-shopping-cart"></i><?php do_action( 'woocommerce_after_shop_loop_item' ); ?></div>
		</div>
		<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
		<?php
		/**
		 * woocommerce_after_shop_loop_item_title hook
		 *
		 * @hooked woocommerce_template_loop_rating - 5
		 * @hooked woocommerce_template_loop_price - 10
		 */
		remove_action( 'woocommerce_after_shop_loop_item_title','woocommerce_template_loop_rating',5 );
		do_action( 'woocommerce_after_shop_loop_item_title' );
		?>
	</div>

</div>

<?php

//echo 'loop'.$woocommerce_loop['themeum_increment'];

if( $woocommerce_loop['themeum_increment']%$woocommerce_loop['columns'] == 0 ){
		echo '</div>'; //row
		$woocommerce_loop['themeum_increment'] = 0;
	}
$woocommerce_loop['themeum_increment'] = $woocommerce_loop['themeum_increment']+1;






