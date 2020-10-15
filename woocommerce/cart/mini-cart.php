<?php
/**
 * Mini-cart
 *
 * Contains the markup for the mini-cart, used by the cart widget
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.1.0
 */
if ( !defined( 'ABSPATH' ) )
	exit; // Exit if accessed directly
?>
<?php global $woocommerce ?>
<?php do_action( 'woocommerce_before_mini_cart' ); ?>
<ul class="cart_list product_list_widget">

	<?php if ( sizeof( WC()->cart->get_cart() ) > 0 ) : ?>

		<?php
		foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) {
			$_product = apply_filters( 'woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key );
			$product_id = apply_filters( 'woocommerce_cart_item_product_id', $cart_item['product_id'], $cart_item, $cart_item_key );

			if ( $_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters( 'woocommerce_widget_cart_item_visible', true, $cart_item, $cart_item_key ) ) {

				$product_name = apply_filters( 'woocommerce_cart_item_name', $_product->get_title(), $cart_item, $cart_item_key );

				$thumbnail = apply_filters( 'woocommerce_cart_item_thumbnail', $_product->get_image(), $cart_item, $cart_item_key );

				$product_price = apply_filters( 'woocommerce_cart_item_price', WC()->cart->get_product_price( $_product ), $cart_item, $cart_item_key );
				?>
				<li>
					<?php
					echo apply_filters( 'woocommerce_cart_item_remove_link', sprintf( '<a href="%s" data-item-key="' . $cart_item_key . '" class="remove bt-excluir" title="%s">
									<svg>
										<use xlink:href="#icon-lixo" />
									</svg></a>', esc_url( WC()->cart->get_remove_url( $cart_item_key ) ), __( 'Remove this item', 'woocommerce' ) ), $cart_item_key );
					?>
					<?php if ( !$_product->is_visible() ) { ?>
						<?php echo str_replace( array( 'http:', 'https:' ), '', $thumbnail ); ?>
					<?php } else { ?>
						<a href="<?php echo get_permalink( $product_id ); ?>">
							<?php echo str_replace( array( 'http:', 'https:' ), '', $thumbnail ); ?>
						</a>
						<h3>
							<a href="<?php echo get_permalink( $product_id ); ?>">
								<?php echo $product_name ?>
							</a>
						</h3>
					<?php } ?>

					<?php echo WC()->cart->get_item_data( $cart_item ); ?>
								<!--<h4><?php // echo $product_price; ?></h4>-->

					<?php echo apply_filters( 'woocommerce_widget_cart_item_quantity', '<div class="quantidade-preco">' . sprintf( '<span class="quantity">%s &times;<h4><span class="amount">%s</span></h4></span>', $cart_item['quantity'], $product_price ) . '</div>', $cart_item, $cart_item_key ); ?>
				</li>
				<?php
			}
		}
		?>

	<?php else : ?>

		<li class="empty"><?php _e( 'No products in the cart.', 'woocommerce' ); ?></li>

	<?php endif; ?>

</ul><!-- end product list -->

<?php if ( sizeof( WC()->cart->get_cart() ) > 0 ) : ?>

	<h3 class="preco"><?php _e( 'Subtotal', 'woocommerce' ); ?>:<span><?php echo WC()->cart->get_cart_subtotal(); ?></span></h3>

	<?php do_action( 'woocommerce_widget_shopping_cart_before_buttons' ); ?>

	<p class="buttons">
		<a href="<?php echo WC()->cart->get_cart_url(); ?>" class="ver-carrinho-bt  button wc-forward" title="Ver Carrinho compra">
			<svg>
			<use xlink:href="#icon-carrinho-cheio" />
			</svg>
			<span><?php _e( 'View Cart', 'woocommerce' ); ?></span>
		</a>
	</p>
	<p class="buttons">
		<a href="<?php echo WC()->cart->get_checkout_url(); ?>" class="finalizar-compra button checkout wc-forward" title="Finalizar compra">
	<!--			<svg>
			<use xlink:href="#icon-carrinho-cheio" />
			</svg>-->
			<span><?php _e( 'Checkout', 'woocommerce' ); ?></span>
		</a>
	</p>


<?php endif; ?>

<?php do_action( 'woocommerce_after_mini_cart' ); ?>
