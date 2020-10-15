<?php
/**
 * Checkout Form
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.0.0
 */
if ( !defined( 'ABSPATH' ) )
	exit; // Exit if accessed directly
?>
<section id="checkout">
	<div class="content">
		<header class="header-padrao">
			<svg>
			<use xlink:href="#icon-pasta-download" />
			</svg>
			<h2>Checkout</h2>
		</header>
		<section id="ja-esta-cadastrado">
			<h3>Já está cadastrado? <span>Clique aqui para entrar</span></h3>
			<form action="#">
				<fieldset class="field-grande field-grande-inputs">
					<legend>Visando oferecer mais conforto para nossos alunos, e maior agilidade na entrega de conteúdos, disponibilizamos para downloads algumas aulas, provas e editais de concursos.</legend>
					<fieldset class="field-email">
						<label for="field-email">E-mail de acesso</label>
						<input type="text" id="field-email" />
					</fieldset>
					<fieldset class="field-senha">
						<label for="field-senha">Senha</label>
						<input type="text" id="field-senha" />
					</fieldset>
				</fieldset>
				<fieldset class="field-grande field-grande-esqueci-senha">
					<a href="javascript:void(0)" title="Esqueci a senha">Esqueci a senha</a>
				</fieldset>
				<fieldset class="field-grande field-grande-botoes">
					<input type="submit" value="Entrar"/>
					<input type="checkbox" id="checkbox-lembrar" />
					<label for="checkbox-lembrar" class="label-checkbox">Lembrar-me</label>
				</fieldset>
			</form>
		</section>
		<?php
		wc_print_notices();

		do_action( 'woocommerce_before_checkout_form', $checkout );

// If checkout registration is disabled and not logged in, the user cannot checkout
		if ( !$checkout->enable_signup && !$checkout->enable_guest_checkout && !is_user_logged_in() ) {
			echo apply_filters( 'woocommerce_checkout_must_be_logged_in_message', __( 'You must be logged in to checkout.', 'woocommerce' ) );
			return;
		}

// filter hook for include new pages inside the payment method
		$get_checkout_url = apply_filters( 'woocommerce_get_checkout_url', WC()->cart->get_checkout_url() );
		?>

		<form name="checkout" method="post" class="checkout" action="<?php echo esc_url( $get_checkout_url ); ?>" enctype="multipart/form-data"  id="form-principal">

			<?php if ( sizeof( $checkout->checkout_fields ) > 0 ) : ?>

				<?php do_action( 'woocommerce_checkout_before_customer_details' ); ?>

				<div id="coluna-esquerda">

					<?php do_action( 'woocommerce_checkout_billing' ); ?>

				</div>
				<div id="coluna-direita">

					<?php // do_action( 'woocommerce_checkout_shipping' ); ?>


					<?php do_action( 'woocommerce_checkout_after_customer_details' ); ?>
					<header>
						<h3 id="order_review_heading"><?php _e( 'Your order', 'woocommerce' ); ?></h3>
					</header>
				<?php endif; ?>

				<?php do_action( 'woocommerce_checkout_order_review' ); ?>
			</div>
		</form>

		<?php do_action( 'woocommerce_after_checkout_form', $checkout ); ?>


	</div>
</section>