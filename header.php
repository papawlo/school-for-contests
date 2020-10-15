<?php
if ( !defined( 'ABSPATH' ) ) {
	header( 'Location: /' );
	exit;
}
?>
<!DOCTYPE html>
<!--[if IE 7]>
<html class="no-js ie ie7 lt-ie9 lt-ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="no-js ie ie8 lt-ie9" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8) ]><!-->
<html rel="base" class="no-js" <?php language_attributes(); ?>>
	<!--<![endif]-->
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title><?php wp_title( '|', true, 'right' ); ?></title>
		<link rel="profile" href="http://gmpg.org/xfn/11" />
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
		<link href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.ico" rel="shortcut icon" />
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:600,600italic,700,800,400' rel='stylesheet' type='text/css' />
		<link href="https://fontastic.s3.amazonaws.com/x3UHanqWdftcT5pg2oTvZY/icons.css" rel="stylesheet">
		<!--<link href="<?php echo get_template_directory_uri(); ?>/assets/css/woocommerce_style.css" rel="stylesheet">-->
		<link href="<?php echo get_template_directory_uri(); ?>/style.css" rel="stylesheet">

		<!--[if lt IE 9]>
		<script src="<?php echo get_template_directory_uri(); ?>/assets/js/html5.js"></script>
		<![endif]
		<!--[if !IE 7]>
		<style type="text/css">
			#wrap {display:table;height:100%}
		</style>
	<![endif]-->
		<!-- Essa parada aqui acima é pra o Sticky Footer rodar nos IE's. -->
		<?php wp_head(); ?>
		<script type="text/javascript">
			var ajaxurl = "<?php echo admin_url( 'admin-ajax.php' ); ?>";
			var themeurl = "<?php bloginfo( 'template_url' ); ?>";
			var baseurl = "<?php bloginfo( 'url' ); ?>";
		</script>
<!--		<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
		<script type="text/javascript">stLight.options({publisher: "1960dd99-0674-431b-bdfd-f92d2a42b020", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>-->
		<link href="<?php echo get_template_directory_uri(); ?>/mobile/assets/css/main.css" rel="stylesheet">
	</head>

	<body <?php body_class(); ?>>
		<div id="wrap">
			<header id="header" class="Header" role="banner">
				<div class="primeira-parte">
					<div class="content u-xs-sizeFull">
						<h1 class="logo">
							<a href="<?php echo home_url(); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
								<img src="<?php bloginfo( 'template_url' ); ?>/assets/images/temporarias/logo-nuce.png" alt="Logo da Nuce Concursos" />
							</a>
						</h1>
						<ul class="links-principais u-xs-hidden">
							<li class="atendimento-online offline">
								<a href="javascript:$zopim.livechat.window.show()" title="Atendimento online">
									<svg>
									<use xlink:href="#icon-atendimento" />
									</svg>
									<span>Atendimento online</span>
								</a>
							</li>

							<?php
							global $user_ID, $user_identity;
							get_currentuserinfo();
							if ( !$user_ID ) {
								?>
								<li class="area-restrita inativo">
									<a href="javascript:void(0)" title="Área restrita">
										<svg class="icon-cadeado">
										<use xlink:href="#icon-cadeado" />
										</svg>
										<span>Área restrita</span>
									</a>
									<form method="post" action="<?php bloginfo( 'url' ) ?>/wp-login.php" class="form-login wp-user-form">
										<fieldset>
											<input type="text" placeholder="Login" name="log"/>
										</fieldset>
										<fieldset class="fieldset-senha-input">
											<input type="password" placeholder="Senha" name="pwd"/>
										</fieldset>
										<fieldset class="fieldset-bt-entrar-check">
											<fieldset class="field-check-logado">
												<input id="check-logado" type="checkbox" name="rememberme" value="forever" checked="checked"/>
												<label for="check-logado">Manter-me conectado</label>
											</fieldset>
											<input type="submit" name="user-submit" value="<?php _e( 'Login' ); ?>"  class="user-submit" />
											<?php
											$parts = explode( '?', $_SERVER['REQUEST_URI'] );
											$referer = $parts[0];
											?>
											<input type="hidden" name="redirect_to" value="<?php echo $referer; ?>" />
											<input type="hidden" name="user-cookie" value="1" />
										</fieldset>
										<fieldset class="fieldset-esqueci-senha-cadastro">
											<a href="<?php bloginfo( 'url' ) ?>/esqueci-a-senha/" class="esqueci-minha-senha">Esqueci minha senha</a>
											<a href="<?php bloginfo( 'url' ) ?>/cadastrar/" class="cadastre-se">Quero me cadastrar</a>
										</fieldset>
									</form>
								</li>
							<?php } else { // is logged in     ?>
								<li class="usuario-logado inativo">
									<a href="javascript:void(0)" title="Área restrita">
										<svg class="icon-usuario-logado">
										<use xlink:href="#icon-usuario-logado" />
										</svg>
										<span>Olá, <?php echo $user_identity; ?></span>
									</a>
									<ul class="lista-opcoes">
										<li><a href="<?php echo get_site_url() ?>/meus-dados/" title="Editar dados">Editar dados</a></li>
										<!--<li><a href="javascript:void(0)" title="Meus cursos">Meus cursos</a></li>-->
										<li><a href="<?php echo get_site_url() ?>/meus-pedidos/" title="Meus Pedidos">Meus pedidos</a></li>
										<li><a href="<?php echo wp_logout_url( home_url() ); ?>" title="Sair">Sair</a></li>
									</ul>
								</li>
								<?php
							}
							?>
						</ul>
						<ul class="redes-sociais u-xs-hidden">
							<li class="li-facebook">
								<a href="https://www.facebook.com/nuceconcursos" target="_blank" title="Facebook">
									<svg class="icon-facebook">
									<use xlink:href="#icon-facebook" />
									</svg>
								</a>
							</li>
							<li class="li-twitter">
								<a href="https://twitter.com/nuceconcursos" target="_blank" title="Twitter">
									<svg class="icon-twitter">
									<use xlink:href="#icon-twitter" />
									</svg>
								</a>
							</li>
							<!-- <li class="li-instagram">
								<a href="javascript:void(0)" target="_blank" title="Instagram">
									<svg class="icon-instagram">
									<use xlink:href="#icon-instagram" />
									</svg>
								</a>
							</li> -->
						</ul>
					</div>
				</div>
				<div class="segunda-parte u-xs-hidden">
					<div class="content">
						<nav role="navigation">
							<?php
							wp_nav_menu();
							?>
						</nav>
						<form action="<?php echo esc_url( home_url( '/' ) ); ?>" class="form-busca" role="search" method="get">
							<fieldset>
								<input type="text" placeholder="Busca" name="s" id="s"/>
								<button type="submit" title="<?php _e( 'Search', 'odin' ); ?>">
									<svg>
									<use xlink:href="#icon-busca" />
									</svg>
								</button>
							</fieldset>
						</form>
						<!--						<div class="cart-contents">
						<?php // echo sprintf( '%d', WC()->cart->get_cart_contents_count() ); ?>
												</div>
						<?php // the_widget( 'WC_Widget_Cart', 'title=' ); ?>		-->
						<?php
						/**
						 * @hooked storefront_header_cart - 60
						 */
//			do_action( 'nuce_header' );
						?>

						<div class="cart-header">
							<span class="carrinho inativo">
								<svg>
								<?php if ( WC()->cart->get_cart_contents_count() ): ?>
									<use xlink:href="#icon-carrinho-cheio" />
								<?php else: ?>
									<use xlink:href="#icon-carrinho-vazio" />
								<?php endif; ?>
								</svg>
							</span>
							<?php // global $woocommerce; ?>
							<div class="cart-totals">
								<?php echo sprintf( '%d', WC()->cart->get_cart_contents_count() ); ?>
							</div>
						</div>
						<div class="carrinho-container">
							<header>
								<h2>Itens que você escolheu</h2>
								<button class="bt-fechar icon-fechar ativo"></button>
							</header>
							<?php // global $woocommerce;    ?>
							<div class="widget_shopping_cart_content">
								<?php woocommerce_get_template( 'cart/mini-cart.php' ); ?>
							</div>
						</div>

					</div>
				</div>
			</header><!-- /header -->
