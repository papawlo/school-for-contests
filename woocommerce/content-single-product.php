<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * Override this template by copying it to yourtheme/woocommerce/content-single-product.php
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */
if ( !defined( 'ABSPATH' ) )
	exit; // Exit if accessed directly
?>

<?php
/**
 * woocommerce_before_single_product hook
 *
 * @hooked wc_print_notices - 10
 */
do_action( 'woocommerce_before_single_product' );

if ( post_password_required() ) {
	echo get_the_password_form();
	return;
}
?>
<?php global $product; ?>
<div class="col1">
	<div class="detalhes-produto">
		<!--<img src="imagens/temporarias/produto-110-170.png" width="110" height="170" alt="Imagem do produto" />-->

		<?php
		/**
		 * woocommerce_before_single_product_summary hook
		 *
		 * @hooked woocommerce_show_product_sale_flash - 10
		 * @hooked woocommerce_show_product_images - 20
		 */
		do_action( 'woocommerce_before_single_product_summary' );
		?>

<!--		<h3 class="product_title entry-title"><?php the_title(); ?></h3>
		<h4><?php echo $product->get_price_html(); ?></h4>
		<a href="javascript:void(0)" class="comprar-agora">
			<svg>
			<use xlink:href="#icon-sacola" />
			</svg>
			<span>Comprar agora</span>
		</a>-->
		<?php
			/**
			 * woocommerce_single_product_summary hook
			 *
			 * @hooked woocommerce_template_single_title - 5
			 * @hooked woocommerce_template_single_rating - 10
			 * @hooked woocommerce_template_single_price - 10
			 * @hooked woocommerce_template_single_excerpt - 20
			 * @hooked woocommerce_template_single_add_to_cart - 30
			 * @hooked woocommerce_template_single_meta - 40
			 * @hooked woocommerce_template_single_sharing - 50
			 */
			do_action( 'woocommerce_single_product_summary' );
		?>
	</div>
	<div class="conteudo conteudo-padrao">
		<header>
			<h3><?php the_title(); ?></h3>
		</header>
		<?php the_content(); ?>
		<a href="<?php echo get_permalink( woocommerce_get_page_id( 'shop' ) );?>" class="voltar-para-a-lista">Voltar para a lista</a>
	</div>

</div><!-- .col1 -->
<aside class="col2">
	<?php woocommerce_related_products(   array(
        'posts_per_page' => 6,
      ));?>
	
	<a href="<?php echo get_permalink( woocommerce_get_page_id( 'shop' ) );?>" class="mais-produtos" title="Mais produtos">
		<span>Mais produtos</span>
		<svg>
		<use xlink:href="#icon-seta-round" />
		</svg>
	</a>
</aside>

<!-- #product-<?php the_ID(); ?> -->

<?php do_action( 'woocommerce_after_single_product' ); ?>
