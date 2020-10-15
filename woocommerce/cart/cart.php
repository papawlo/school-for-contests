<?php
/**
 * Cart Page
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.1.0
 */
if ( !defined( 'ABSPATH' ) )
	exit; // Exit if accessed directly

wc_print_notices();

do_action( 'woocommerce_before_cart' ); 
?>

<form action="<?php echo esc_url( WC()->cart->get_cart_url() ); ?>" method="post">
	<fieldset>
		<?php do_action( 'woocommerce_before_cart_table' ); ?>


		<table class="shop_table cart" cellspacing="0">
			<thead>
				<tr>
					<th class="th-produto">Produto</th>
					<th class="th-quantidade">Quantidade</th>
					<th class="th-valor">Valor</th>
					<th class="th-total">Total</th>
				</tr>
			</thead>
			<tbody>
				<?php do_action( 'woocommerce_before_cart_contents' ); ?>

				<?php
				foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) {
					$_product = apply_filters( 'woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key );
					$product_id = apply_filters( 'woocommerce_cart_item_product_id', $cart_item['product_id'], $cart_item, $cart_item_key );

					if ( $_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters( 'woocommerce_cart_item_visible', true, $cart_item, $cart_item_key ) ) {
						?>
						<tr class="<?php echo esc_attr( apply_filters( 'woocommerce_cart_item_class', 'cart_item', $cart_item, $cart_item_key ) ); ?>">
							<td class="col1">
								<?php
								echo apply_filters( 'woocommerce_cart_item_remove_link', sprintf( '<a href="%s" class="remove bt-excluir" title="%s">
									<svg>
										<use xlink:href="#icon-lixo" />
									</svg></a>', esc_url( WC()->cart->get_remove_url( $cart_item_key ) ), __( 'Remove this item', 'woocommerce' ) ), $cart_item_key );
								?>
								<!--<button class="bt-excluir icon-lixo product-remove"></button>-->
								<?php
								$thumbnail = apply_filters( 'woocommerce_cart_item_thumbnail', $_product->get_image(), $cart_item, $cart_item_key );

								if ( !$_product->is_visible() )
									echo $thumbnail;
								else
									printf( '<a href="%s" class="link-img">%s</a>', $_product->get_permalink(), $thumbnail );
								?>

								<h3>
									<?php
									if ( !$_product->is_visible() )
										echo apply_filters( 'woocommerce_cart_item_name', $_product->get_title(), $cart_item, $cart_item_key );
									else
										echo apply_filters( 'woocommerce_cart_item_name', sprintf( '<a href="%s">%s</a>', $_product->get_permalink(), $_product->get_title() ), $cart_item, $cart_item_key );

									// Meta data
									echo WC()->cart->get_item_data( $cart_item );

									// Backorder notification
									if ( $_product->backorders_require_notification() && $_product->is_on_backorder( $cart_item['quantity'] ) )
										echo '<p class="backorder_notification">' . __( 'Available on backorder', 'woocommerce' ) . '</p>';
									?>
								</h3>
							</td>
							<td class="col2">

								<?php
								if ( $_product->is_sold_individually() ) {
									$product_quantity = sprintf( '1 <input type="hidden" name="cart[%s][qty]" value="1" />', $cart_item_key );
								} else {
									$product_quantity = woocommerce_quantity_input( array(
										'input_name' => "cart[{$cart_item_key}][qty]",
										'input_value' => $cart_item['quantity'],
										'max_value' => $_product->backorders_allowed() ? '' : $_product->get_stock_quantity(),
										'min_value' => '0'
											), $_product, false );
								}

								echo apply_filters( 'woocommerce_cart_item_quantity', $product_quantity, $cart_item_key );
								?>

							</td>
							<td class="col3">
								<h4>
									<?php
									echo apply_filters( 'woocommerce_cart_item_price', WC()->cart->get_product_price( $_product ), $cart_item, $cart_item_key );
									?>
								</h4>
							</td>
							<td class="col4">
								<?php
								echo apply_filters( 'woocommerce_cart_item_subtotal', WC()->cart->get_product_subtotal( $_product, $cart_item['quantity'] ), $cart_item, $cart_item_key );
								?>
							</td>
						</tr>

						<?php
					}
				}

				do_action( 'woocommerce_cart_contents' );
				?>


				<?php do_action( 'woocommerce_after_cart_contents' ); ?>
				<tr class="last-tr">
					<td colspan="2">
						<!--						<div id="frete">
													<header>
														<h3>Calcular frete</h3>
													</header>
													<select id="select-pais">
														<option value="Brasil">Brasil</option>
													</select>
													<select id="select-estado">
														<option value="Paraíba">Paraíba</option>
													</select>
													<input type="text" placeholder="CEP:" />
												</div>-->
					</td>
					<td colspan="2">
						<ul>
							<li>
								<div class="limitador">
									<h3 class="total-titulo"><?php _e( 'Order Total', 'woocommerce' ); ?></h3>
								</div>
							</li>
							<li>
								<div class="limitador">
									<h5 class="subtotal"><?php wc_cart_totals_order_total_html(); ?></h5>
								</div>
							</li>
							<li>
								<div class="limitador">
									<?php do_action( 'woocommerce_proceed_to_checkout' ); ?>
									<button type="submit" class="button atualizar-carrinho-bt" name="update_cart" value="<?php _e( 'Update Cart', 'woocommerce' ); ?>">
										<svg>
										<use xlink:href="#icon-carrinho-cheio" />
										</svg>
										<span><?php _e( 'Update Cart', 'woocommerce' ); ?></span>
									</button>
									<!--									<button type="submit" class="checkout-button button alt wc-forward finalizar-compra" name="proceed">
																			<span><?php _e( 'Proceed to Checkout', 'woocommerce' ); ?></span>
																		</button>-->
																		<!--<input type="submit" class=" atualizar-carrinho-bt" name="update_cart" value="<?php _e( 'Update Cart', 'woocommerce' ); ?>" />-->
									<input type="submit" class="checkout-button button alt wc-forward finalizar-compra icon-carrinho-cheio" name="proceed" value="<?php _e( 'Proceed to Checkout', 'woocommerce' ); ?>" />
									<!--<button type="submit" class="finalizar-compra icon-carrinho-cheio">Finalizar compra</button>-->
									<?php wp_nonce_field( 'woocommerce-cart' ); ?>
								</div>
							</li>
						</ul>
					</td>
				</tr>
			</tbody>
		</table>

		<?php do_action( 'woocommerce_after_cart_table' ); ?>
	</fieldset>
</form>

<!--<div class="cart-collaterals">

<?php // do_action( 'woocommerce_cart_collaterals' ); ?>

<?php // woocommerce_cart_totals(); ?>

<?php // woocommerce_shipping_calculator(); ?>

</div>-->

<?php do_action( 'woocommerce_after_cart' ); ?>
