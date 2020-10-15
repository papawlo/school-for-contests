<?php get_header(); ?>

<section id="cadastro" class="Page">
	<div class="content u-xs-sizeFull">
		<header class="header-padrao Page-header">
			<svg class="Section-icon">
			<use xlink:href="#icon-prancheta-ok" />
			</svg>
			<h2 class="Section--multiRow-title">Formulário de cadastro</h2>
		</header>

		<?php // wc_print_notices();  ?>

		<?php do_action( 'woocommerce_before_customer_login_form' ); ?>
		<form class="form-principal register Form Form--cadastrar u-xs-sizeFull" method="post" id="form-registeruser">
			<input type="hidden" name="billing_country" value="BR">
			<?php do_action( 'woocommerce_register_form_start' ); ?>
			<!-- Spam Trap -->
			<div style="<?php echo ( ( is_rtl() ) ? 'right' : 'left' ); ?>: -999em; position: absolute;"><label for="trap"><?php _e( 'Anti-spam', 'woocommerce' ); ?></label><input type="text" name="email_2" id="trap" tabindex="-1" /></div>

			<?php do_action( 'woocommerce_register_form' ); ?>
			<?php do_action( 'register_form' ); ?>
			<fieldset>
				<?php wp_nonce_field( 'woocommerce-register' ); ?>

				<button class="u-xs-blockCenter" type="submit"  name="register" value="1">
					<span>Finalizar cadastro</span>
					<svg>
					<use xlink:href="#icon-aviao" />
					</svg>
				</button>
			</fieldset>
			<?php // $referer = isset( $_GET['referer'] ) ? $_GET['referer'] : $_SERVER['REQUEST_URI'];   ?>
			<!--<input type="hidden" name="referer" value="<?php // echo bloginfo( 'url' ) . $referer;    ?>" />-->
			<?php do_action( 'woocommerce_register_form_end' ); ?>
		</form>
		<?php do_action( 'woocommerce_after_customer_login_form' ); ?>
	</div>
</section>
<?php
get_footer();
