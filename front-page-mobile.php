<?php
/*
 * Template Name: Front Page
 */
?>
<!DOCTYPE html>
<!--[if IE 7]>
<html rel="base" class="no-js ie ie7 lt-ie9 lt-ie8" lang="pt-BR">
<![endif]-->
<!--[if IE 8]>
<html rel="base" class="no-js ie ie8 lt-ie9" lang="pt-BR">
<![endif]-->
<!--[if !(IE 7) | !(IE 8) ]><!-->
<html rel="base" class="no-js" lang="pt-BR">
<!--<![endif]-->
<head>
	<meta charset="UTF-8"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
	<title>NUCE Concursos</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
	<link rel="profile" href="http://gmpg.org/xfn/11"/>
	<link rel="pingback" href="http://jobs.qualitare.com/nuce/xmlrpc.php"/>
	<link href="http://jobs.qualitare.com/nuce/wp-content/themes/nuce/assets/images/favicon.ico" rel="shortcut icon"/>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:600,600italic,700,800,400' rel='stylesheet'
		  type='text/css'/>
	<link href="https://fontastic.s3.amazonaws.com/x3UHanqWdftcT5pg2oTvZY/icons.css" rel="stylesheet">
	<!--<link href="http://jobs.qualitare.com/nuce/wp-content/themes/nuce/assets/css/woocommerce_style.css" rel="stylesheet">-->
	<link href="http://jobs.qualitare.com/nuce/wp-content/themes/nuce/style.css" rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="http://jobs.qualitare.com/nuce/wp-content/themes/nuce/assets/js/html5.js"></script>
	<![endif]-->
	<!--[if !IE 7]>
	<style type="text/css">
		#wrap {
			display: table;
			height: 100%
		}
	</style>
	<![endif]-->
	<!-- Essa parada aqui acima Ã© pra o Sticky Footer rodar nos IE's. -->
	<meta name='robots' content='noindex,follow'/>
	<link rel="alternate" type="application/rss+xml" title="Feed de Nuce Concursos &raquo;"
		  href="http://jobs.qualitare.com/nuce/feed/"/>
	<link rel="alternate" type="application/rss+xml" title="Nuce Concursos &raquo;  Feed de comentÃ¡rios"
		  href="http://jobs.qualitare.com/nuce/comments/feed/"/>
	<link rel='stylesheet' id='nuce-style-css'
		  href='http://jobs.qualitare.com/nuce/wp-content/themes/nuce/assets/css/style.css' type='text/css'
		  media='all'/>
	<link rel='stylesheet' id='jquery-ui-structure-css'
		  href='http://jobs.qualitare.com/nuce/wp-content/themes/nuce/assets/css/libs/jquery-ui.structure.min.css'
		  type='text/css' media='all'/>
	<link rel='stylesheet' id='jquery-ui-css'
		  href='http://jobs.qualitare.com/nuce/wp-content/themes/nuce/assets/css/libs/jquery-ui.min.css' type='text/css'
		  media='all'/>
	<script type='text/javascript'
			src='http://jobs.qualitare.com/nuce/wp-includes/js/jquery/jquery.js?ver=1.11.1'></script>
	<script type='text/javascript'
			src='http://jobs.qualitare.com/nuce/wp-includes/js/jquery/jquery-migrate.js?ver=1.2.1'></script>
	<link rel="EditURI" type="application/rsd+xml" title="RSD" href="http://jobs.qualitare.com/nuce/xmlrpc.php?rsd"/>
	<link rel="wlwmanifest" type="application/wlwmanifest+xml"
		  href="http://jobs.qualitare.com/nuce/wp-includes/wlwmanifest.xml"/>
	<meta name="generator" content="WordPress 4.0.1"/>
	<meta name="generator" content="WooCommerce 2.2.9"/>
	<style type="text/css">.recentcomments a {
		display: inline !important;
		padding: 0 !important;
		margin: 0 !important;
	}</style>
	<script type="text/javascript">
		var ajaxurl = "http://jobs.qualitare.com/nuce/wp-admin/admin-ajax.php";
		var themeurl = "http://jobs.qualitare.com/nuce/wp-content/themes/nuce";
		var baseurl = "http://jobs.qualitare.com/nuce";
	</script>
	<!-- Mobile -->
	<link href="<?php echo get_template_directory_uri(); ?>/assets/css/nuce-main.css" rel="stylesheet">
	<!--		<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
			<script type="text/javascript">stLight.options({publisher: "1960dd99-0674-431b-bdfd-f92d2a42b020", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>-->
</head>

<body class="home blog">
<div id="wrap">
	<header id="header" class="Header" role="banner">
		<div class="primeira-parte">
			<div class="content u-xs-sizeFull">
				<h1 class="logo Header-logo">
					<a href="http://jobs.qualitare.com/nuce" title="Nuce Concursos" rel="home">
						<img
							src="http://jobs.qualitare.com/nuce/wp-content/themes/nuce/assets/images/temporarias/logo-nuce.png"
							alt="Logo da Nuce Concursos"/>
					</a>
				</h1>
				<ul class="links-principais u-xs-hidden">
					<li class="atendimento-online">
						<a href="javascript:$zopim.livechat.window.show()" title="Atendimento online">
							<svg>
								<use xlink:href="#icon-atendimento"/>
							</svg>
							<span>Atendimento online</span>
						</a>
					</li>

					<li class="area-restrita inativo">
						<a href="javascript:void(0)" title="Ãrea restrita">
							<svg class="icon-cadeado">
								<use xlink:href="#icon-cadeado"/>
							</svg>
							<span>Ãrea restrita</span>
						</a>

						<form method="post" action="http://jobs.qualitare.com/nuce/wp-login.php"
							  class="form-login wp-user-form">
							<fieldset>
								<input type="text" placeholder="Login" name="log"/>
							</fieldset>
							<fieldset class="fieldset-senha-input">
								<input type="password" placeholder="Senha" name="pwd"/>
							</fieldset>
							<fieldset class="fieldset-bt-entrar-check">
								<fieldset class="field-check-logado">
									<input id="check-logado" type="checkbox" name="rememberme" value="forever"
										   checked="checked"/>
									<label for="check-logado">Manter-me conectado</label>
								</fieldset>
								<input type="submit" name="user-submit" value="Login" class="user-submit"/>
								<input type="hidden" name="redirect_to" value="/nuce/"/>
								<input type="hidden" name="user-cookie" value="1"/>
							</fieldset>
							<fieldset class="fieldset-esqueci-senha-cadastro">
								<a href="http://jobs.qualitare.com/nuce/esqueci-a-senha/" class="esqueci-minha-senha">Esqueci
									minha senha</a>
								<a href="http://jobs.qualitare.com/nuce/cadastrar/" class="cadastre-se">Quero me
									cadastrar</a>
							</fieldset>
						</form>
					</li>

				</ul>
				<ul class="redes-sociais u-xs-hidden">
					<li class="li-facebook">
						<a href="https://www.facebook.com/nuceconcursos" target="_blank" title="Facebook">
							<svg class="icon-facebook">
								<use xlink:href="#icon-facebook"/>
							</svg>
						</a>
					</li>
					<li class="li-twitter">
						<a href="https://twitter.com/nuceconcursos" target="_blank" title="Twitter">
							<svg class="icon-twitter">
								<use xlink:href="#icon-twitter"/>
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
					<div class="menu-menu-header-container">
						<ul id="menu-menu-header" class="menu">
							<li id="menu-item-237"
								class="menu-item menu-item-type-post_type menu-item-object-page menu-item-237"><a
								href="http://jobs.qualitare.com/nuce/o-nuce/">O Nuce</a></li>
							<li id="menu-item-229"
								class="menu-item menu-item-type-post_type menu-item-object-page menu-item-229"><a
								href="http://jobs.qualitare.com/nuce/cursos/">Cursos</a></li>
							<li id="menu-item-236"
								class="menu-item menu-item-type-post_type menu-item-object-page menu-item-236"><a
								href="http://jobs.qualitare.com/nuce/noticias/">NotÃ­cias</a></li>
							<li id="menu-item-231"
								class="menu-item menu-item-type-post_type menu-item-object-page menu-item-231"><a
								href="http://jobs.qualitare.com/nuce/downloads/">Downloads</a></li>
							<li id="menu-item-244"
								class="menu-item menu-item-type-post_type menu-item-object-page menu-item-244"><a
								href="http://jobs.qualitare.com/nuce/produtos/">Produtos</a></li>
							<li id="menu-item-228"
								class="menu-item menu-item-type-post_type menu-item-object-page menu-item-228"><a
								href="http://jobs.qualitare.com/nuce/contato/">Contato</a></li>
						</ul>
					</div>
				</nav>
				<form action="http://jobs.qualitare.com/nuce/" class="form-busca" role="search" method="get">
					<fieldset>
						<input type="text" placeholder="Busca" name="s" id="s"/>
						<button type="submit" title="Search">
							<svg>
								<use xlink:href="#icon-busca"/>
							</svg>
						</button>
					</fieldset>
				</form>

						<span class="carrinho inativo">
							<svg>
								<use xlink:href="#icon-carrinho-vazio"/>
							</svg>
						</span>

				<div class="carrinho-container">
					<header>
						<h2>Itens que vocÃª escolheu</h2>
						<button class="bt-fechar icon-fechar ativo"></button>
					</header>
					<div class="widget_shopping_cart_content">

						<ul class="cart_list product_list_widget">


							<li class="empty">Nenhum produto no carrinho.</li>


						</ul>
						<!-- end product list -->


					</div>
				</div>
			</div>
		</div>
	</header>
	<!-- /header -->
	<section id="index">
		<div id="slideshow-container">
			<button class="prev">
				<svg>
					<use xlink:href="#icon-seta-quadrada"/>
				</svg>
			</button>
			<button class="next">
				<svg>
					<use xlink:href="#icon-seta-quadrada"/>
				</svg>
			</button>
			<div id="slideshow-destaques" class="Slider">
				<div class="item"
					 style="background-image: url(http://jobs.qualitare.com/nuce/wp-content/uploads/2014/11/concurso-1600x567.jpeg)">
					<h2 class="nome-categoria u-xs-hidden">Cursos em destaque</h2>

					<div class="content u-xs-sizeFull">
						<div class="informacoes Slider-content u-xs-sizeFull">
							<img src="http://jobs.qualitare.com/nuce/wp-content/uploads/2014/11/bombeiro-188x188.png"
								 alt="Logo do concurso"/>

							<h3 class="Slider-title">Bombeiro Militar Pernambuco</h3>
							<h4 class="Slider-subtitle">Turnos manhÃ£ e noite</h4>
							<h5 class="Slider-teaser">InÃ­cio em inÃ­cio 19/12</h5>
							<a href="http://localhost/nuce14/curso/portugues-e-direito-constitucional-para-gmr/"
							   target="self" class="saiba-mais">Saiba mais sobre o curso</a>
						</div>
					</div>
				</div>
				<div class="item"
					 style="background-image: url(http://jobs.qualitare.com/nuce/wp-content/uploads/2014/11/slide-home.jpg)">
					<h2 class="nome-categoria u-xs-hidden">Cursos em destaque</h2>

					<div class="content u-xs-sizeFull">
						<div class="informacoes Slider-content u-xs-sizeFull">
							<img src="http://jobs.qualitare.com/nuce/wp-content/uploads/2014/11/logo-nuce-07.png"
								 alt="Logo do concurso"/>

							<h3 class="Slider-title">IFPE Integrado 2014</h3>
							<h4 class="Slider-subtitle">NÃ­vel superior</h4>
							<h5 class="Slider-teaser">InÃ­cio em InÃ­cio em 25/08 (noite)</h5>
							<a href="http://localhost/nuce14/curso/ifpe-integrado-2014/" target="_blanck"
							   class="saiba-mais">Saiba mais sobre o curso</a>
						</div>
					</div>
				</div>
			</div>
			<div class="navi"></div>
		</div>
		<!-- #slideshow-containet -->
		<section id="cursos-agenda">
			<div class="content u-xs-sizeFull">
				<div class="col1 u-xs-sizeFull u-xs-noPadding">
					<section id="cursos" class="Section">
						<header>
							<svg class="Section-icon">
								<use xlink:href="#icon-prancheta-ok"/>
							</svg>
							<h2>
								<span>Cursos</span>
							</h2>
						</header>
						<ul class="u-xs-noMargin">
							<li class="li-cursos-para-concursos Card u-xs-sizeFull u-xs-noMargin">
								<header class="Card-header">
									<h3 class="Card-title">Cursos para concursos</h3>
									<svg class="Card-icon">
										<use xlink:href="#icon-agenda-lapis"/>
									</svg>
								</header>
								<div class="informacoes">
									<div class="texto">
										<h4>Titulo de teste</h4>
										<h5>
											<svg>
												<use xlink:href="#icon-seta-round"/>
											</svg>
											<span>InÃ­cio: </span>
										</h5>
									</div>
								</div>
								<a href="http://jobs.qualitare.com/nuce/segmentos/cursos-para-concursos/"
								   class="veja-mais Card-button u-xs-blockCenter">
									<span>Veja mais</span>
									<svg>
										<use xlink:href="#icon-seta-round"/>
									</svg>
								</a>
							</li>
							<li class="li-praia Card u-xs-sizeFull u-xs-noMargin">
								<header class="Card-header">
									<h3 class="Card-title">P|R|A|I|A</h3>
									<svg class="Card-icon">
										<use xlink:href="#icon-lapis"/>
									</svg>
								</header>
								<div class="informacoes">
									<div class="texto">
										<h4>Praia de matemÃ¡tica sem segredos</h4>
										<h5>
											<svg>
												<use xlink:href="#icon-seta-round"/>
											</svg>
										<span>
											InÃ­cio: InÃ­cio 16/08 (SÃ¡bado)										</span>
										</h5>
									</div>
								</div>
								<a href="http://jobs.qualitare.com/nuce/segmentos/p-r-a-i-a/"
								   class="veja-mais Card-button u-xs-blockCenter">
									<span>Veja mais</span>
									<svg>
										<use xlink:href="#icon-seta-round"/>
									</svg>
								</a>
							</li>
							<li class="li-isoladas-para-concursos Card u-xs-sizeFull u-xs-noMargin">
								<header class="Card-header">
									<h3 class="Card-title">Isoladas para concursos</h3>
									<svg class="Card-icon">
										<use xlink:href="#icon-agenda"/>
									</svg>
								</header>
								<div class="informacoes">
									<div class="texto">
										<h4>Curso de redaÃ§Ã£o - Soltando o verbo</h4>
										<h5>
											<svg>
												<use xlink:href="#icon-seta-round"/>
											</svg>
											<span>InÃ­cio: 18/08 (SÃ¡bado)</span></h5>
									</div>
								</div>
								<a href="http://jobs.qualitare.com/nuce/segmentos/isoladas-para-concursos/"
								   class="veja-mais Card-button u-xs-blockCenter">
									<span>Veja mais</span>
									<svg>
										<use xlink:href="#icon-seta-round"/>
									</svg>
								</a>
							</li>
							<li class="li-aula-unica Card u-xs-sizeFull u-xs-noMargin">
								<header class="Card-header">
									<h3 class="Card-title">Aula Ãºnica</h3>
									<svg class="Card-icon">
										<use xlink:href="#icon-papel-dobrado"/>
									</svg>
								</header>
								<div class="informacoes">
									<div class="texto">
										<h4>PortuguÃªs e Direito Constitucional para GMR</h4>
										<h5>
											<svg>
												<use xlink:href="#icon-seta-round"/>
											</svg>
											<span>InÃ­cio: 25/08 (noite)</span>
										</h5>
									</div>
								</div>
								<a href="http://jobs.qualitare.com/nuce/segmentos/aula-unica/"
								   class="veja-mais Card-button u-xs-blockCenter">
									<span>Veja mais</span>
									<svg>
										<use xlink:href="#icon-seta-round"/>
									</svg>
								</a>
							</li>
							<li class="li-cursos-de-testes-para-concursos Card u-xs-sizeFull u-xs-noMargin">
								<header class="Card-header">
									<h3 class="Card-title">Cursos de testes para concursos</h3>
									<svg class="Card-icon">
										<use xlink:href="#icon-agenda-lapis"/>
									</svg>
								</header>
								<div class="informacoes">
									<div class="texto">
										<h4>RESIDÃŠNCIA MULTIPROFISSIONAL EM SAÃšDE</h4>
										<h5>
											<svg>
												<use xlink:href="#icon-seta-round"/>
											</svg>
											<span>InÃ­cio: 18/08 (SÃ¡bado)</span>
										</h5>
									</div>
								</div>
								<a href="http://jobs.qualitare.com/nuce/segmentos/cursos-de-testes-para-concursos/"
								   class="veja-mais Card-button u-xs-blockCenter"><span>Veja mais</span>
									<svg>
										<use xlink:href="#icon-seta-round"/>
									</svg>
								</a>
							</li>
							<li class="li-nuce-ifpe Card u-xs-sizeFull u-xs-noMargin">
								<header class="Card-header">
									<h3 class="Card-title">Nuce IFPE</h3>
									<svg class="Card-icon">
										<use xlink:href="#icon-jornal-aberto"/>
									</svg>
								</header>
								<div class="informacoes">
									<div class="texto">
										<h4>IFPE Integrado 2014</h4>
										<h5>
											<svg>
												<use xlink:href="#icon-seta-round"/>
											</svg>
											<span>InÃ­cio: 25/08 (noite)</span></h5>
									</div>
								</div>
								<a href="http://jobs.qualitare.com/nuce/segmentos/nuce-ifpb/"
								   class="veja-mais Card-button u-xs-blockCenter"><span>Veja mais</span>
									<svg>
										<use xlink:href="#icon-seta-round"/>
									</svg>
								</a>
							</li>
						</ul>
						<a href="http://jobs.qualitare.com/nuce/cursos/"
						   class="ver-todos Section-button u-xs-blockCenter" title="Ver todos">Ver
							todos</a>
					</section>
				</div>
				<!--
				<div class="col2">
					<header>
						<svg>
							<use xlink:href="#icon-calendario"/>
						</svg>
						<h2>Agenda de cursos</h2>
					</header>
					<div id="datepicker"></div>
					<div id="slideshow-datepicker">
						<div class="container">
							<svg class="prev">
								<use xlink:href="#icon-seta-sharp"/>
							</svg>
							<svg class="next">
								<use xlink:href="#icon-seta-sharp"/>
							</svg>
							<div class="slideshow">

								<!--
									<div class="item">
										<h3>18 de Outubro</h3>
										<h4>CBD â€¢ 18/08 a 25/11</h4>
										<h5>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas volutpat odio a volutpat faucibus. Pellentesque tellus nunc, placerat a sapien et, tempus luctus neque. Nam fermentum, ex id rhoncus interdum, nisl neque placerat nunc, in scelerisque libero tellus sodales nibh.</h5>
									</div>
								->
							</div>
						</div>
					</div>
				</div>
				-->
			</div>
		</section>
		<!-- #cursos-agenda -->
		<section id="cadastre-agora" class="Promo">
			<div class="content u-xs-sizeFull">
				<div class="texto u-xs-sizeFull">
					<header>
						<h2 class="Promo-title u-xs-blockCenter">Cadastre-se agora <span
							class="regular">e tenha acesso</span><span class="bold">ao conteÃºdo exclusivo</span>
						</h2>
					</header>
					<h3 class="u-xs-sizeFull u-xs-hidden">Fique ainda mais prÃ³ximo do sucesso atravÃ©s dos nossos
						materiais exclusivos.</h3>
					<a href="javascript:void(0)" class="saiba-mais"><span>Veja mais</span>
						<svg>
							<use xlink:href="#icon-seta-round"/>
						</svg>
					</a>
				</div>
			</div>
		</section>
		<!-- #cadastre-agora-->
		<section id="noticias-home" class="Section u-xs-noMargin">
			<div class="content u-xs-sizeFull">
				<header>
					<svg class="Section-icon">
						<use xlink:href="#icon-jornal-dobrado"/>
					</svg>
					<h2>NotÃ­cias</h2>
				</header>
				<ul class="News u-xs-noMargin">
					<li class="entry-meta News-item u-xs-sizeFull">
						<time class="entry-date" datetime="2014-11-19T11:40:43+00:00">
							<svg>
								<use xlink:href="#icon-calendario-preto"/>
							</svg>
							<span>19/11/2014</span>
						</time>
						<h3>
							<a href="http://jobs.qualitare.com/nuce/pf-cespeunb-oficializado-como-organizador-do-concurso/"
							   title="PF: Cespe/UnB oficializado como organizador do concurso." rel="bookmark">PF:
								Cespe/UnB oficializado como organizador do concurso.</a></h3>
						<h4 class="u-xs-hidden">Enfim, avanÃ§os. O Departamento de PolÃ­cia Federal (PF) anunciou, por&#8230;</h4>
					</li>
					<li class="entry-meta News-item u-xs-sizeFull">
						<time class="entry-date" datetime="2014-11-19T11:40:12+00:00">
							<svg>
								<use xlink:href="#icon-calendario-preto"/>
							</svg>
							<span>19/11/2014</span>
						</time>
						<h3><a href="http://jobs.qualitare.com/nuce/ans-pretende-abrir-concurso-com-102-oportunidades/"
							   title="ANS pretende abrir concurso com 102 oportunidades." rel="bookmark">ANS pretende
							abrir concurso com 102 oportunidades.</a></h3>
						<h4 class="u-xs-hidden">Concursandos que pleiteiam uma vaga em um Ã³rgÃ£o pÃºblico na&#8230;</h4>
					</li>
					<li class="entry-meta News-item u-xs-sizeFull">
						<time class="entry-date" datetime="2014-11-19T11:39:57+00:00">
							<svg>
								<use xlink:href="#icon-calendario-preto"/>
							</svg>
							<span>19/11/2014</span>
						</time>
						<h3><a href="http://jobs.qualitare.com/nuce/patospb-abre-100-vagas-em-area-de-saude/"
							   title="Patos/PB abre 100 vagas em Ã¡rea de saÃºde" rel="bookmark">Patos/PB abre 100 vagas
							em Ã¡rea de saÃºde</a></h3>
						<h4 class="u-xs-hidden">A Secretaria Municipal de SaÃºde de Patos, municÃ­pio localizado
							no&#8230;</h4>
					</li>
					<li class="entry-meta News-item u-xs-sizeFull">
						<time class="entry-date" datetime="2014-11-19T11:39:26+00:00">
							<svg>
								<use xlink:href="#icon-calendario-preto"/>
							</svg>
							<span>19/11/2014</span>
						</time>
						<h3><a href="http://jobs.qualitare.com/nuce/policia-civil-do-ceara-edital-publicado/"
							   title="PolÃ­cia Civil do CearÃ¡: Edital publicado!" rel="bookmark">PolÃ­cia Civil do CearÃ¡:
							Edital publicado!</a></h3>
						<h4 class="u-xs-hidden">A PolÃ­cia Civil do Estado do CearÃ¡ (PC/CE), divulgou no&#8230;</h4>
					</li>
					<li class="entry-meta News-item u-xs-sizeFull">
						<time class="entry-date" datetime="2014-11-19T11:39:17+00:00">
							<svg>
								<use xlink:href="#icon-calendario-preto"/>
							</svg>
							<span>19/11/2014</span>
						</time>
						<h3><a href="http://jobs.qualitare.com/nuce/inss-recomendacao-do-tcu-deve-agilizar-o-concurso/"
							   title="INSS: RECOMENDAÃ‡ÃƒO DO TCU DEVE AGILIZAR O CONCURSO" rel="bookmark">INSS:
							RECOMENDAÃ‡ÃƒO DO TCU DEVE AGILIZAR O CONCURSO</a></h3>
						<h4 class="u-xs-hidden">e concurso no Instituto Nacional do Seguro Social (INSS)
							comeÃ§a&#8230;</h4>
					</li>
					<li class="entry-meta News-item u-xs-sizeFull">
						<time class="entry-date" datetime="2014-11-19T11:38:49+00:00">
							<svg>
								<use xlink:href="#icon-calendario-preto"/>
							</svg>
							<span>19/11/2014</span>
						</time>
						<h3><a href="http://jobs.qualitare.com/nuce/policia-federal-edital-para-agente-sai-amanha/"
							   title="POLÃCIA FEDERAL: EDITAL PARA AGENTE SAÃ AMANHÃƒ" rel="bookmark">POLÃCIA FEDERAL:
							EDITAL PARA AGENTE SAÃ AMANHÃƒ</a></h3>
						<h4 class="u-xs-hidden">A espera estÃ¡ chegando ao fim para quem pretende ingressar&#8230;</h4>
					</li>
				</ul>
				<a href="listagem-noticias.php" class="mais-noticias Section-button"><span>Mais notÃ­cias</span>
					<svg>
						<use xlink:href="#icon-seta-round"/>
					</svg>
				</a>
			</div>
		</section>
		<!-- #noticias-home-->
		<section id="downloads-home" class="Section">
			<div class="content u-xs-sizeFull">
				<header>
					<svg class="Section-icon">
						<use xlink:href="#icon-pasta-download"/>
					</svg>
					<h2>Downloads</h2>
					<a href="http://jobs.qualitare.com/nuce/downloads/" class="ver-todos u-xs-hidden" title="Ver todos"><span>Ver todos</span>
						<svg>
							<use xlink:href="#icon-seta-round"/>
						</svg>
					</a>

					<h3 class="u-xs-hidden">O Nuce Concursos preparou para vocÃª os melhores materiais de apoio aos
						estudos. SÃ£o provas,
						editais, gabaritos e outros conteÃºdos para a sua aprovaÃ§Ã£o.</h3>
				</header>
				<ul class="Download">
					<li class="provas Download-item">
						<a href="http://jobs.qualitare.com/nuce/downloads/tipo/provas/" title="Provas" class="active">
							<svg class="Download-icon">
								<use xlink:href="#icon-papel-dobrado"/>
							</svg>
							<span class="Download-title">Provas</span>
						</a>
					</li>
					<li class="editais Download-item">
						<a href="http://jobs.qualitare.com/nuce/downloads/tipo/editais/" title="Editais">
							<svg class="Download-icon">
								<use xlink:href="#icon-papel-sobre"/>
							</svg>
							<span class="Download-title">Editais</span>
						</a>
					</li>
					<li class="gabaritos Download-item">
						<a href="http://jobs.qualitare.com/nuce/downloads/tipo/gabaritos/" title="Gabaritos">
							<svg class="Download-icon">
								<use xlink:href="#icon-checklist-marcado"/>
							</svg>
							<span class="Download-title">Gabaritos</span>
						</a>
					</li>
					<li class="outros Download-item">
						<a href="http://jobs.qualitare.com/nuce/downloads/tipo/outros/" title="Outros">
							<svg class="Download-icon">
								<use xlink:href="#icon-lapis-regua"/>
							</svg>
							<span class="Download-title">Outros</span>
						</a>
					</li>
				</ul>
				<a href="http://jobs.qualitare.com/nuce/downloads/"
				   class="ver-todos Section-button Section--download-button u-xs-blockCenter u-xs-visible"
				   title="Ver todos"><span>Ver todos</span>
					<svg>
						<use xlink:href="#icon-seta-round"/>
					</svg>
				</a>
			</div>
		</section>
		<!-- #downloads-home-->
		<section id="produtos-home" class="Section">
			<div class="content u-xs-sizeFull">
				<header class="Section-header Section--product-header">
					<svg class="Section-icon">
						<use xlink:href="#icon-sacola"/>
					</svg>
					<h2>Produtos</h2>
					<a href="http://jobs.qualitare.com/nuce/produtos/" class="ver-todos u-xs-hidden" title="Ver todos">
						<span>Ver todos</span>
						<svg>
							<use xlink:href="#icon-seta-round"/>
						</svg>
					</a>
				</header>
				<ul class="productshome" class="Product">

					<li class="producthome Product-item u-xs-sizeFull u-xs-noMargin">

						<a id="id-36" title="Apostila PolÃ­cia Militar e Bombeiro/PE + Caderno de testes">
							<img width="110" height="170"
								 src="http://jobs.qualitare.com/nuce/wp-content/uploads/2014/11/produto-110-170.png"
								 class="attachment-shop_catalog wp-post-image" alt="produto-110-170"/>
						</a>

						<h3>
							<a href="http://jobs.qualitare.com/nuce/produto/apostila-policia-militar-e-bombeirope-caderno-de-testes/"
							   title="Apostila PolÃ­cia Militar e Bombeiro/PE + Caderno de testes">Apostila PolÃ­cia
								Militar e Bombeiro/PE + Caderno de testes</a></h3>

						<h4 class="price">
							<del class="u-xs-hidden"><span class="amount">&#82;&#36;44,00</span></del>
							<ins><span class="amount">&#82;&#36;33,00</span></ins>
						</h4>

						<a href="/nuce/?add-to-cart=36" rel="nofollow" data-product_id="36" data-product_sku=""
						   data-quantity="1" class="button comprar add_to_cart_button product_type_simple">
							<svg>
								<use xlink:href="#icon-sacola"/>
							</svg>
							<span>Comprar</span></a></li>

					<li class="producthome Product-item u-xs-sizeFull u-xs-noMargin">

						<a id="id-37" title="IFPE Integrado 2014">
							<img width="110" height="170"
								 src="http://jobs.qualitare.com/nuce/wp-content/uploads/2014/11/slide-home-110x170.jpg"
								 class="attachment-shop_catalog wp-post-image" alt="slide-home"/>
						</a>

						<h3><a href="http://jobs.qualitare.com/nuce/produto/ifpe-integrado-2014/"
							   title="IFPE Integrado 2014">IFPE Integrado 2014</a></h3>

						<h4 class="price"><span class="amount">&#82;&#36;33,00</span></h4>

						<a href="" rel="nofollow" data-product_id="37" data-product_sku="" data-quantity="1"
						   class="button comprar  product_type_external">
							<svg>
								<use xlink:href="#icon-sacola"/>
							</svg>
							<span>Comprar</span></a></li>

					<li class="producthome Product-item u-xs-sizeFull u-xs-noMargin">

						<a id="id-204" title="Woo Single #2">
							<img width="110" height="170"
								 src="http://jobs.qualitare.com/nuce/wp-content/uploads/2013/06/cd_6_angle-110x170.jpg"
								 class="attachment-shop_catalog wp-post-image" alt="cd_6_angle"/>
						</a>

						<h3><a href="http://jobs.qualitare.com/nuce/produto/woo-single-2/" title="Woo Single #2">Woo
							Single #2</a></h3>

						<h4 class="price">
							<del class="u-xs-hidden"><span class="amount">&#82;&#36;3,00</span></del>
							<ins><span class="amount">&#82;&#36;2,50</span></ins>
						</h4>

						<a href="http://jobs.qualitare.com/nuce/produto/woo-single-2/" rel="nofollow"
						   data-product_id="204" data-product_sku="" data-quantity="1"
						   class="button comprar  product_type_simple">
							<svg>
								<use xlink:href="#icon-sacola"/>
							</svg>
							<span>Saiba mais</span></a></li>

					<li class="producthome Product-item u-xs-sizeFull u-xs-noMargin">

						<a id="id-203" title="Woo Album #4">
							<img width="110" height="170"
								 src="http://jobs.qualitare.com/nuce/wp-content/uploads/2013/06/cd_5_angle-110x170.jpg"
								 class="attachment-shop_catalog wp-post-image" alt="cd_5_angle"/>
						</a>

						<h3><a href="http://jobs.qualitare.com/nuce/produto/woo-album-4/" title="Woo Album #4">Woo Album
							#4</a></h3>

						<h4 class="price"><span class="amount">&#82;&#36;9,00</span></h4>

						<a href="/nuce/?add-to-cart=203" rel="nofollow" data-product_id="203" data-product_sku=""
						   data-quantity="1" class="button comprar add_to_cart_button product_type_simple">
							<svg>
								<use xlink:href="#icon-sacola"/>
							</svg>
							<span>Comprar</span></a></li>

					<li class="producthome Product-item u-xs-sizeFull u-xs-noMargin">

						<a id="id-202" title="Woo Single #1">
							<img width="110" height="170"
								 src="http://jobs.qualitare.com/nuce/wp-content/uploads/2013/06/cd_4_angle-110x170.jpg"
								 class="attachment-shop_catalog wp-post-image" alt="cd_4_angle"/>
						</a>

						<h3><a href="http://jobs.qualitare.com/nuce/produto/woo-single-1/" title="Woo Single #1">Woo
							Single #1</a></h3>

						<h4 class="price"><span class="amount">&#82;&#36;3,00</span></h4>

						<a href="/nuce/?add-to-cart=202" rel="nofollow" data-product_id="202" data-product_sku=""
						   data-quantity="1" class="button comprar add_to_cart_button product_type_simple">
							<svg>
								<use xlink:href="#icon-sacola"/>
							</svg>
							<span>Comprar</span></a></li>

					<li class="producthome Product-item u-xs-sizeFull u-xs-noMargin">

						<a id="id-201" title="Woo Album #3">
							<img width="110" height="170"
								 src="http://jobs.qualitare.com/nuce/wp-content/uploads/2013/06/cd_3_angle-110x170.jpg"
								 class="attachment-shop_catalog wp-post-image" alt="cd_3_angle"/>
						</a>

						<h3><a href="http://jobs.qualitare.com/nuce/produto/woo-album-3/" title="Woo Album #3">Woo Album
							#3</a></h3>

						<h4 class="price"><span class="amount">&#82;&#36;9,00</span></h4>

						<a href="/nuce/?add-to-cart=201" rel="nofollow" data-product_id="201" data-product_sku=""
						   data-quantity="1" class="button comprar add_to_cart_button product_type_simple">
							<svg>
								<use xlink:href="#icon-sacola"/>
							</svg>
							<span>Comprar</span></a></li>
				</ul>
				<a href="http://jobs.qualitare.com/nuce/produtos/"
				   class="ver-todos Section-button Section--product-button u-xs-blockCenter u-xs-visible"
				   title="Ver todos">
					<span>Ver todos</span>
					<svg>
						<use xlink:href="#icon-seta-round"/>
					</svg>
				</a>
			</div>
		</section>
		<!-- #produtos-home -->
	</section>
	<!-- #index -->

</div>
<!-- /wrap -->
<footer id="footer" class="Footer" role="contentinfo">
	<div id="newsletter" class="Mail">
		<div class="content u-xs-sizeFull">
			<form action="http://jobs.qualitare.com/nuce/wp-admin/admin-ajax.php" method="post"
				  class="form-newsletter Mail-form u-xs-sizeFull">
				<input type="hidden" name="action" value="enviarNewsletter"/>
				<fieldset class="field-legend Mail-header">
					<svg class="Mail-icon">
						<use xlink:href="#icon-envelope"/>
					</svg>
					<legend class="Mail-title">Newsletter<span class="Mail-description">Cadastre seu e-mail para receber nossos informativos.</span>
					</legend>
				</fieldset>
				<fieldset class="field-email u-xs-sizeFull">
					<input class="Mail-fieldEmail u-xs-blockCenter" type="email" placeholder="Seu e-mail" name="email"/>
					<button class="Mail-btnSend u-xs-blockCenter" type="submit"><span>Enviar</span>
						<svg>
							<use xlink:href="#icon-aviao"/>
						</svg>
					</button>
				</fieldset>
			</form>
		</div>
	</div>
	<!-- #newsletter -->
	<div id="endereco">
		<div class="content u-xs-sizeFull">
			<h5>&copy; 2015 NUCE - NÃºcleo de Concursos Especial</h5>
			<h6>Rua Joaquim Felipe, 60 Boa Vista (ao lado da Celpe) â€¢ Recife - PE â€¢ contato@nuceconcursos.com.br â€¢ Fone:
				(81) 3198 1414</h6>
		</div>
	</div>
	<!-- #endereco -->
</footer>
<!-- #footer -->
<div id="mensagens-de-retorno" class="none">
	<div class="overlay"></div>
	<div class="box">
		<h3>Mensagem enviada com sucesso</h3>
		<!-- <p></p> -->
		<button class="bt-fechar" type="button">
			<svg>
				<use xlink:href="#icon-fechar"/>
			</svg>
		</button>
	</div>
</div>
<script type="text/javascript">
	jQuery('.product_list_widget').on('click', '.bt-excluir', (function () {

		var product_id = jQuery(this).data("item-key");
		console.log(product_id);
		jQuery.ajax({
			type: 'POST',
			dataType: 'json',
			url: "/wp-admin/admin-ajax.php",
			data: {
				action: "product_remove",
				product_id: product_id
			}, success: function (data) {
				console.log(data);
			}
		});
		return false;
	}));
</script>
<script type='text/javascript'
		src='http://jobs.qualitare.com/nuce/wp-content/themes/nuce/assets/js/libs/jquery-ddslick.js'></script>
<script type='text/javascript'
		src='http://jobs.qualitare.com/nuce/wp-content/themes/nuce/assets/js/libs/jquery-touchswipe.js'></script>
<script type='text/javascript'
		src='http://jobs.qualitare.com/nuce/wp-content/themes/nuce/assets/js/libs/jquery.carouFredSel-6.2.1-packed.js'></script>
<script type='text/javascript'
		src='http://jobs.qualitare.com/nuce/wp-content/themes/nuce/assets/js/libs/jquery.fitvids.js'></script>
<script type='text/javascript'
		src='http://jobs.qualitare.com/nuce/wp-content/themes/nuce/assets/js/libs/jquery.form.js'></script>
<script type='text/javascript'
		src='http://jobs.qualitare.com/nuce/wp-content/themes/nuce/assets/js/libs/jquery.sticky.js'></script>
<script type='text/javascript'
		src='http://jobs.qualitare.com/nuce/wp-content/themes/nuce/assets/js/libs/waypoints.min.js'></script>
<script type='text/javascript'
		src='http://jobs.qualitare.com/nuce/wp-content/themes/nuce/assets/js/libs/jquery.validate.js'></script>
<script type='text/javascript'
		src='http://jobs.qualitare.com/nuce/wp-content/themes/nuce/assets/js/libs/localization/messages_pt_BR.js'></script>
<script type='text/javascript'
		src='http://jobs.qualitare.com/nuce/wp-includes/js/jquery/ui/jquery.ui.core.min.js?ver=1.10.4'></script>
<script type='text/javascript'
		src='http://jobs.qualitare.com/nuce/wp-includes/js/jquery/ui/jquery.ui.datepicker.min.js?ver=1.10.4'></script>
<script type='text/javascript'
		src='http://jobs.qualitare.com/nuce/wp-content/themes/nuce/assets/js/libs/jquery.mask.js'></script>
<script type='text/javascript' src='http://jobs.qualitare.com/nuce/wp-content/themes/nuce/assets/js/main.js'></script>
<script type='text/javascript'>
	/* <![CDATA[ */
	var wc_add_to_cart_params = {
		"ajax_url": "\/nuce\/wp-admin\/admin-ajax.php",
		"ajax_loader_url": "\/\/jobs.qualitare.com\/nuce\/wp-content\/plugins\/woocommerce\/assets\/images\/ajax-loader@2x.gif",
		"i18n_view_cart": "Ver carrinho",
		"cart_url": "http:\/\/jobs.qualitare.com\/nuce\/carrinho\/",
		"is_cart": "",
		"cart_redirect_after_add": "no"
	};
	var wc_add_to_cart_params = {
		"ajax_url": "\/nuce\/wp-admin\/admin-ajax.php",
		"ajax_loader_url": "\/\/jobs.qualitare.com\/nuce\/wp-content\/plugins\/woocommerce\/assets\/images\/ajax-loader@2x.gif",
		"i18n_view_cart": "Ver carrinho",
		"cart_url": "http:\/\/jobs.qualitare.com\/nuce\/carrinho\/",
		"is_cart": "",
		"cart_redirect_after_add": "no"
	};
	/* ]]> */
</script>
<script type='text/javascript'
		src='//jobs.qualitare.com/nuce/wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart.js?ver=2.2.9'></script>
<script type='text/javascript'
		src='//jobs.qualitare.com/nuce/wp-content/plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.js?ver=2.60'></script>
<script type='text/javascript'>
	/* <![CDATA[ */
	var woocommerce_params = {
		"ajax_url": "\/nuce\/wp-admin\/admin-ajax.php",
		"ajax_loader_url": "\/\/jobs.qualitare.com\/nuce\/wp-content\/plugins\/woocommerce\/assets\/images\/ajax-loader@2x.gif"
	};
	var woocommerce_params = {
		"ajax_url": "\/nuce\/wp-admin\/admin-ajax.php",
		"ajax_loader_url": "\/\/jobs.qualitare.com\/nuce\/wp-content\/plugins\/woocommerce\/assets\/images\/ajax-loader@2x.gif"
	};
	/* ]]> */
</script>
<script type='text/javascript'
		src='//jobs.qualitare.com/nuce/wp-content/plugins/woocommerce/assets/js/frontend/woocommerce.js?ver=2.2.9'></script>
<script type='text/javascript'
		src='http://jobs.qualitare.com/nuce/wp-content/themes/nuce/assets/js/libs/jquery_cookie.js?ver=1.3.1'></script>
<script type='text/javascript'>
	/* <![CDATA[ */
	var wc_cart_fragments_params = {"ajax_url": "\/nuce\/wp-admin\/admin-ajax.php", "fragment_name": "wc_fragments"};
	var wc_cart_fragments_params = {"ajax_url": "\/nuce\/wp-admin\/admin-ajax.php", "fragment_name": "wc_fragments"};
	/* ]]> */
</script>
<script type='text/javascript'
		src='//jobs.qualitare.com/nuce/wp-content/plugins/woocommerce/assets/js/frontend/cart-fragments.js?ver=2.2.9'></script>
<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">

	<symbol id="icone-barrinhas-menu" viewBox="0 0 38 29">
		<path fill-rule="evenodd" clip-rule="evenodd" d="M2.5,5h33C36.881,5,38,3.881,38,2.5C38,1.12,36.881,0,35.5,0h-33
			C1.119,0,0,1.12,0,2.5C0,3.881,1.119,5,2.5,5z M35.5,12h-33C1.119,12,0,13.119,0,14.5S1.119,17,2.5,17h33
			c1.381,0,2.5-1.119,2.5-2.5S36.881,12,35.5,12z M35.5,24h-33C1.119,24,0,25.119,0,26.5S1.119,29,2.5,29h33
			c1.381,0,2.5-1.119,2.5-2.5S36.881,24,35.5,24z"/>
	</symbol>

	<symbol id="icon-usuario-logado" viewBox="2 0 96 100">
		<circle cx="50" cy="27" r="27"/>
		<path d="M98,100v-7c0-16.5-13.5-30-30-30H32C15.5,63,2,76.5,2,93v7H98z"/>
	</symbol>

	<symbol id="icon-agenda" viewBox="0 0 25 32">
		<path d="M4,32h19c1.103,0,2-0.896,2-2V2c0-1.103-0.897-2-2-2H4C2.897,0,2,0.897,2,2v3H1
      C0.448,5,0,5.448,0,6c0,0.552,0.448,1,1,1h1v2H1c-0.552,0-1,0.448-1,1c0,0.552,0.448,1,1,1h1v2H1C0.448,13,0,13.448,0,14
      c0,0.552,0.448,1,1,1h1v2H1c-0.552,0-1,0.447-1,1s0.448,1,1,1h1v2H1c-0.552,0-1,0.447-1,1s0.448,1,1,1h1v2H1c-0.552,0-1,0.447-1,1
      s0.448,1,1,1h1v3C2,31.104,2.897,32,4,32z M23,30h-4V2h4V30z M4,23h1c0.552,0,1-0.447,1-1s-0.448-1-1-1H4v-2h1
      c0.552,0,1-0.447,1-1s-0.448-1-1-1H4v-2h1c0.552,0,1-0.448,1-1C6,13.448,5.552,13,5,13H4v-2h1c0.552,0,1-0.448,1-1
      c0-0.553-0.448-1-1-1H4V7h1c0.552,0,1-0.448,1-1c0-0.553-0.448-1-1-1H4V2h13v28H4v-3h1c0.552,0,1-0.447,1-1s-0.448-1-1-1H4V23z"/>
	</symbol>

	<symbol id="icon-agenda-lapis" viewBox="0 0 35.016 32">
		<path d="M32.998,0.763h-2.016c-1.111,0-2.016,0.897-2.016,2v23c0,0.704,0.238,1.711,0.557,2.342
      l1.113,2.211c0.297,0.586,0.789,0.922,1.354,0.922s1.059-0.336,1.354-0.922l1.113-2.211c0.318-0.631,0.559-1.638,0.559-2.342v-23
      C35.016,1.661,34.109,0.763,32.998,0.763z M32.998,2.763v3h-2.016v-3H32.998z M32.654,27.211l-0.664,1.316l-0.664-1.316
      c-0.176-0.352-0.344-1.055-0.344-1.447v-18h2.016v18C32.998,26.156,32.832,26.859,32.654,27.211z"/>
		<path d="M4.032,32h19.153c1.111,0,2.018-0.896,2.018-2V2c0-1.103-0.906-2-2.018-2H4.032
      C2.921,0,2.016,0.897,2.016,2v3H1.008C0.451,5,0,5.449,0,6c0,0.553,0.451,1,1.008,1h1.008v2H1.008C0.451,9,0,9.449,0,10
      c0,0.553,0.451,1,1.008,1h1.008v2H1.008C0.451,13,0,13.449,0,14c0,0.553,0.451,1,1.008,1h1.008v2H1.008C0.451,17,0,17.449,0,18
      c0,0.553,0.451,1,1.008,1h1.008v2H1.008C0.451,21,0,21.448,0,22c0,0.553,0.451,1,1.008,1h1.008v2H1.008C0.451,25,0,25.449,0,26
      c0,0.553,0.451,1,1.008,1h1.008v3C2.016,31.104,2.921,32,4.032,32z M23.186,30h-4.031V2h4.031V30z M4.032,23h1.008
      c0.557,0,1.008-0.447,1.008-1c0-0.552-0.451-1-1.008-1H4.032v-2h1.008c0.557,0,1.008-0.447,1.008-1c0-0.551-0.451-1-1.008-1H4.032
      v-2h1.008c0.557,0,1.008-0.447,1.008-1c0-0.552-0.451-1-1.008-1H4.032v-2h1.008c0.557,0,1.008-0.447,1.008-1
      c0-0.552-0.451-1-1.008-1H4.032V7h1.008c0.557,0,1.008-0.447,1.008-1c0-0.552-0.451-1-1.008-1H4.032V2h13.105v28H4.032v-3h1.008
      c0.557,0,1.008-0.447,1.008-1c0-0.551-0.451-1-1.008-1H4.032V23z"/>
	</symbol>

	<symbol id="icon-aprovacao" viewBox="0 0 28.763 28.763">
		<path d="M14.381,28.763c3.841,0,7.453-1.496,10.169-4.213c2.716-2.716,4.212-6.327,4.212-10.169
      s-1.496-7.453-4.212-10.168C21.834,1.496,18.223,0,14.381,0C10.54,0,6.928,1.496,4.212,4.213C1.496,6.928,0,10.539,0,14.381
      s1.496,7.453,4.212,10.169C6.928,27.267,10.54,28.763,14.381,28.763z M5.483,5.483c2.377-2.377,5.537-3.687,8.898-3.687
      c3.361,0,6.521,1.31,8.898,3.688c2.377,2.375,3.686,5.535,3.686,8.896c0,3.362-1.309,6.521-3.686,8.897
      c-2.377,2.378-5.537,3.687-8.898,3.687c-3.361,0-6.521-1.309-8.898-3.687c-2.377-2.376-3.686-5.535-3.686-8.897
      C1.797,11.02,3.106,7.859,5.483,5.483z"/>
		<path d="M10.757,21.571c0.009,0,0.019,0,0.028,0c0.244,0,0.479-0.099,0.648-0.275L22.669,9.611
      c0.345-0.357,0.333-0.928-0.024-1.271s-0.927-0.332-1.271,0.025L10.829,19.332l-4.3-5.082c-0.321-0.379-0.889-0.426-1.267-0.105
      c-0.379,0.32-0.426,0.889-0.106,1.267l4.944,5.843C10.264,21.448,10.503,21.571,10.757,21.571z"/>
	</symbol>

	<symbol id="icon-atendimento" viewBox="0 0 512 512">
		<path
			d="m403 161l0-29c0-1-1-132-147-132-146 0-147 131-147 132l0 29c-49 0-89 40-89 88 0 49 40 88 89 88l15 0c8 0 14-6 14-15l0-190c0-4 2-103 118-103 116 0 118 99 118 103l0 190c0 1 0 1 0 2l-53 87c-8-15-16-27-30-35-35-21-80-9-101 25-21 35-9 80 25 101 35 20 81 9 101-26l84-139 3 0c49 0 89-39 89-88 0-48-40-88-89-88z m-294 37l0 110c-33 0-59-27-59-59 0-32 26-58 59-58z m182 263c-12 21-40 28-60 16-21-13-28-40-16-61 13-21 40-27 61-15 21 13 28 40 15 60z m112-153l0-117c33 0 59 26 59 58 0 32-26 59-59 59z"/>
	</symbol>

	<symbol id="icon-aviao" viewBox="0 0 17.655 17.657">
		<path d="M0.235,11.686L16.789,0.098h0.001c0.004-0.002,0.008-0.002,0.012-0.006
      c0.015-0.008,0.03-0.014,0.045-0.021c0.017-0.01,0.033-0.018,0.05-0.025c0.021-0.01,0.043-0.018,0.066-0.023
      c0.02-0.006,0.038-0.008,0.059-0.01c0.015-0.004,0.027-0.008,0.04-0.008C17.068,0.004,17.075,0,17.082,0
      c0.024-0.002,0.049,0.004,0.073,0.006c0.021,0.002,0.039,0.002,0.06,0.008c0.017,0.002,0.033,0.006,0.05,0.014
      c0.019,0.004,0.035,0.012,0.053,0.02c0.022,0.01,0.046,0.014,0.067,0.027c0.004,0.002,0.006,0.006,0.01,0.008
      c0.002,0.002,0.005,0.002,0.007,0.002c0.008,0.006,0.012,0.014,0.019,0.02c0.01,0.006,0.02,0.014,0.028,0.021
      s0.02,0.008,0.028,0.016c0.003,0.006,0.006,0.01,0.01,0.016c0.02,0.018,0.036,0.039,0.053,0.061
      c0.011,0.014,0.021,0.029,0.031,0.045c0.011,0.018,0.022,0.031,0.031,0.049c0.005,0.012,0.007,0.023,0.012,0.035
      c0.008,0.02,0.015,0.041,0.021,0.061c0.002,0.01,0.009,0.02,0.012,0.031c0.003,0.02,0.003,0.037,0.005,0.057
      s0.002,0.039,0.002,0.061c0,0.018,0.005,0.033,0.002,0.051l-1.65,16.555c-0.019,0.184-0.128,0.346-0.291,0.434
      c-0.164,0.086-0.36,0.084-0.522-0.004l-6.072-3.312c-0.013-0.008-0.021-0.02-0.033-0.029L7.09,17.4
      c-0.019,0.029-0.041,0.051-0.063,0.076c-0.007,0.008-0.012,0.016-0.02,0.023c-0.045,0.045-0.098,0.078-0.153,0.104
      c-0.013,0.006-0.026,0.01-0.039,0.014c-0.062,0.023-0.125,0.039-0.19,0.039H6.623l0,0l0,0c-0.064,0-0.128-0.016-0.189-0.037
      c-0.019-0.008-0.035-0.016-0.053-0.023c-0.018-0.01-0.036-0.014-0.054-0.023c-0.017-0.012-0.025-0.029-0.041-0.043
      c-0.03-0.021-0.058-0.047-0.082-0.076c-0.022-0.027-0.041-0.055-0.058-0.086c-0.017-0.029-0.03-0.061-0.042-0.094
      c-0.011-0.037-0.018-0.072-0.021-0.111c-0.002-0.02-0.012-0.037-0.012-0.057v-4.416H0.551c-0.24,0-0.453-0.156-0.525-0.387
      C-0.047,12.074,0.037,11.822,0.235,11.686z M7.175,15.201l6.018-9.502l-6.018,6.65V15.201z M14.988,16.223l1.337-13.408
      L9.672,13.322L14.988,16.223z M6.378,11.586l7.036-7.779L2.303,11.586H6.378z"/>
	</symbol>

	<symbol id="icon-busca" viewBox="0 0 24.721 24.72">
		<path d="M21.797,17.057c3.897-3.896,3.897-10.238,0-14.134c-3.896-3.897-10.236-3.897-14.134,0
  C4.005,6.58,3.781,12.392,6.992,16.314l-6.699,6.699c-0.391,0.391-0.391,1.022,0,1.414c0.39,0.389,1.022,0.389,1.413,0l6.699-6.7
  C12.327,20.938,18.139,20.715,21.797,17.057z M9.077,15.643c-3.118-3.117-3.118-8.189,0-11.308c3.117-3.118,8.189-3.118,11.307,0
  c3.117,3.117,3.118,8.189,0,11.308C17.267,18.76,12.194,18.76,9.077,15.643z"/>
	</symbol>

	<symbol id="icon-cadeado" viewBox="0 0 18.166 23.057">
		<path d="M2.795,6.289v3.144H0.698C0.312,9.433,0,9.746,0,10.132v12.227c0,0.386,0.312,0.698,0.698,0.698
      h16.769c0.387,0,0.699-0.312,0.699-0.698V10.132c0-0.386-0.312-0.699-0.699-0.699h-2.096V6.289C15.371,2.821,12.551,0,9.083,0
      S2.795,2.821,2.795,6.289z M16.77,21.66H1.397V10.83H16.77V21.66z M9.083,1.398c2.696,0,4.892,2.194,4.892,4.891v3.144H4.192
      V6.289C4.192,3.592,6.386,1.398,9.083,1.398z"/>
	</symbol>

	<symbol id="icon-calculadora" viewBox="0 0 512 512">
		<path
			d="m416 0l-320 0c-26 0-48 22-48 48l0 416c0 26 22 48 48 48l320 0c26 0 48-22 48-48l0-416c0-26-22-48-48-48z m-336 48c0-9 7-16 16-16l320 0c9 0 16 7 16 16l0 48c0 9-7 16-16 16l-320 0c-9 0-16-7-16-16z m336 432l-320 0c-9 0-16-7-16-16l0-323c5 2 10 3 16 3l320 0c6 0 11-1 16-3l0 323c0 9-7 16-16 16z m-208-256l-16 0 0-16c0-9-7-16-16-16-9 0-16 7-16 16l0 16-16 0c-9 0-16 7-16 16 0 9 7 16 16 16l16 0 0 16c0 9 7 16 16 16 9 0 16-7 16-16l0-16 16 0c9 0 16-7 16-16 0-9-7-16-16-16z m160 0l-64 0c-9 0-16 7-16 16 0 9 7 16 16 16l64 0c9 0 16-7 16-16 0-9-7-16-16-16z m0 112l-64 0c-9 0-16 7-16 16 0 9 7 16 16 16l64 0c9 0 16-7 16-16 0-9-7-16-16-16z m0 64l-64 0c-9 0-16 7-16 16 0 9 7 16 16 16l64 0c9 0 16-7 16-16 0-9-7-16-16-16z m-149-59c-6-7-16-7-22 0l-21 20-21-20c-6-7-16-7-22 0-7 6-7 16 0 22l20 21-20 21c-7 6-7 16 0 22 3 3 7 5 11 5 4 0 8-2 11-5l21-20 21 20c3 3 7 5 11 5 4 0 8-2 11-5 7-6 7-16 0-22l-20-21 20-21c7-6 7-16 0-22z"/>
	</symbol>

	<symbol id="icon-calendario" viewBox="0 0 44.316 44.316">
		<path d="M19.389,34.623h5.539v-4.156h-5.539V34.623z"/>
		<path d="M9.693,20.773h5.54v-4.155h-5.54V20.773z"/>
		<path d="M19.389,27.697h5.539v-4.154h-5.539V27.697z"/>
		<path d="M9.693,34.623h5.54v-4.156h-5.54V34.623z"/>
		<path d="M9.693,27.697h5.54v-4.154h-5.54V27.697z"/>
		<path d="M19.389,20.773h5.539v-4.155h-5.539V20.773z"/>
		<path d="M29.083,34.623h5.54v-4.156h-5.54V34.623z"/>
		<path d="M40.625,4.154h-6.002v-2.77c0-0.766-0.62-1.385-1.386-1.385c-0.765,0-1.385,0.619-1.385,1.385v2.77
      h-8.31v-2.77c0-0.766-0.62-1.385-1.385-1.385s-1.385,0.619-1.385,1.385v2.77h-8.31v-2.77C12.464,0.619,11.843,0,11.079,0
      c-0.765,0-1.386,0.619-1.386,1.385v2.77h-6C1.652,4.154,0,5.804,0,7.847v32.774c0,2.043,1.652,3.695,3.693,3.695h36.932
      c2.039,0,3.691-1.652,3.691-3.695V7.847C44.316,5.804,42.664,4.154,40.625,4.154z M41.547,40.621c0,0.512-0.414,0.926-0.922,0.926
      H3.693c-0.51,0-0.924-0.414-0.924-0.926V7.847c0-0.509,0.414-0.923,0.924-0.923h6v2.77c0,0.766,0.621,1.385,1.386,1.385
      c0.764,0,1.385-0.619,1.385-1.385v-2.77h8.31v2.77c0,0.766,0.62,1.385,1.385,1.385s1.385-0.619,1.385-1.385v-2.77h8.31v2.77
      c0,0.766,0.62,1.385,1.385,1.385c0.766,0,1.386-0.619,1.386-1.385v-2.77h6.002c0.508,0,0.922,0.414,0.922,0.923V40.621z"/>
		<path d="M29.083,20.773h5.54v-4.155h-5.54V20.773z"/>
		<path d="M29.083,27.697h5.54v-4.154h-5.54V27.697z"/>
	</symbol>

	<symbol id="icon-calendario-preto" viewBox="0.785 0 23.027 23.538">
		<path d="M21.893,2.608h-3.201V1.399c0-0.771-0.628-1.399-1.4-1.399c-0.773,0-1.4,0.628-1.4,1.399v1.209H8.707V1.399
    C8.707,0.628,8.079,0,7.305,0c-0.771,0-1.4,0.628-1.4,1.399v1.209H2.705c-1.062,0-1.92,0.856-1.92,1.92v17.089
    c0,1.062,0.857,1.921,1.92,1.921h19.189c1.061,0,1.918-0.859,1.918-1.921V4.528C23.811,3.466,22.951,2.608,21.893,2.608z
     M8.756,18.615H5.818v-2.102h2.938V18.615z M8.756,14.613H5.818v-2.158h2.938V14.613z M8.756,10.555H5.818V8.568h2.938V10.555z
     M13.735,18.615h-2.937v-2.102h2.937V18.615z M13.735,14.613h-2.937v-2.158h2.937V14.613z M13.735,10.555h-2.937V8.568h2.937
    V10.555z M18.773,18.615h-2.938v-2.102h2.938V18.615z M18.773,14.613h-2.938v-2.158h2.938V14.613z M18.773,10.555h-2.938V8.568
    h2.938V10.555z"/>
	</symbol>

	<symbol id="icon-camera" viewBox="0 0 25 23">
		<path d="M24.607,8.036c-0.244-0.141-0.543-0.14-0.785,0.005l-5.463,3.263V8.724
      c0-0.438-0.35-0.793-0.781-0.793h-1.984c0.746-0.843,1.203-1.953,1.203-3.173C16.797,2.135,14.693,0,12.109,0
      C9.891,0,8.031,1.575,7.548,3.68C7.06,3.36,6.481,3.172,5.859,3.172c-1.723,0-3.125,1.424-3.125,3.172
      c0,0.579,0.156,1.119,0.423,1.587H0.781C0.35,7.931,0,8.286,0,8.724v9.518c0,0.367,0.25,0.689,0.604,0.771L17.4,22.98
      C17.461,22.994,17.52,23,17.578,23c0.176,0,0.346-0.059,0.486-0.172c0.186-0.15,0.295-0.379,0.295-0.621v-2.578l5.463,3.262
      c0.242,0.145,0.541,0.146,0.785,0.006C24.85,22.754,25,22.492,25,22.207V8.724C25,8.44,24.85,8.176,24.607,8.036z M12.109,1.586
      c1.723,0,3.125,1.423,3.125,3.172c0,1.75-1.402,3.173-3.125,3.173c-1.724,0-3.125-1.423-3.125-3.173
      C8.984,3.009,10.386,1.586,12.109,1.586z M8.625,7.931H8.562C8.57,7.917,8.579,7.903,8.587,7.889
      C8.6,7.903,8.613,7.917,8.625,7.931z M4.297,6.344c0-0.874,0.701-1.586,1.562-1.586S7.422,5.47,7.422,6.344
      c0,0.875-0.701,1.587-1.562,1.587S4.297,7.219,4.297,6.344z M23.438,20.82l-5.463-3.262c-0.242-0.145-0.541-0.146-0.783-0.006
      c-0.244,0.143-0.395,0.404-0.395,0.689v2.967L1.562,17.611V9.517h15.234v3.172c0,0.285,0.15,0.547,0.395,0.689
      c0.242,0.141,0.541,0.141,0.783-0.006l5.463-3.262V20.82z"/>
	</symbol>

	<symbol id="icon-carrinho-cheio" viewBox="0 0 64 62">
		<path d="M0,8c0,1.104,0.896,2,2,2h6.165L12,54.173c0,0.003,0,0.005,0,0.007c0,4.328,3.645,7.82,7.996,7.82
      c3.719,0,6.849-2.556,7.739-6h8.528c0.892,3.444,4.017,6,7.736,6c4.411,0,8-3.589,8-8s-3.589-8-8-8c-3.72,0-6.845,2.556-7.736,6
      h-8.528c-0.891-3.444-4.016-6-7.735-6c-1.696,0-3.269,0.534-4.563,1.438l-0.561-6.45C14.917,40.99,14.956,41,14.998,41
      c0.033,0,0.066-0.001,0.1-0.002l41-2c0.854-0.042,1.59-0.625,1.825-1.448l6-21c0.173-0.604,0.052-1.253-0.326-1.754
      C63.218,14.295,62.628,14,62,14h-6.491L51.923,1.45C51.678,0.592,50.893,0,50,0H36c-0.53,0-1.039,0.211-1.415,0.586L29.172,6H20
      c-0.918,0-1.718,0.625-1.94,1.515L16.438,14h-3.909l-0.537-6.173C11.902,6.793,11.036,6,10,6H2C0.896,6,0,6.896,0,8z M44,50
      c2.206,0,4,1.794,4,4s-1.794,4-4,4s-4-1.794-4-4S41.794,50,44,50z M20,50c2.206,0,4,1.794,4,4s-1.794,4-4,4s-4-1.794-4-4
      S17.794,50,20,50z M36.828,4h11.663l2.857,10H33.562l-1.347-5.387L36.828,4z M21.562,10h6.877l1,4h-8.877L21.562,10z M53.993,18
      h0.006h0.007h5.343l-4.878,17.072l-39.568,1.93c-0.127,0.006-0.249,0.027-0.368,0.056L12.877,18H53.993z"/>
	</symbol>

	<symbol id="icon-carrinho-vazio" viewBox="0 0 64 56">
		<path d="M0,2c0,1.105,0.896,2,2,2h6.165L12,48.174c0,0.002,0,0.004,0,0.006c0,4.328,3.645,7.82,7.996,7.82
      c3.719,0,6.849-2.555,7.739-6h8.528c0.892,3.445,4.017,6,7.736,6c4.411,0,8-3.588,8-8c0-4.41-3.589-8-8-8
      c-3.72,0-6.845,2.557-7.736,6h-8.528c-0.891-3.443-4.016-6-7.735-6c-1.696,0-3.269,0.535-4.563,1.439l-0.561-6.451
      C14.917,34.99,14.956,35,14.998,35c0.033,0,0.066,0,0.1-0.002l41-2c0.854-0.041,1.59-0.625,1.825-1.447l6-21
      c0.173-0.604,0.052-1.254-0.326-1.754C63.218,8.295,62.628,8,62,8H12.529l-0.537-6.172C11.902,0.793,11.037,0,10,0H2
      C0.896,0,0,0.896,0,2z M44,44c2.206,0,4,1.795,4,4c0,2.207-1.794,4-4,4s-4-1.793-4-4C40,45.795,41.794,44,44,44z M20,44
      c2.206,0,4,1.795,4,4c0,2.207-1.794,4-4,4s-4-1.793-4-4C16,45.795,17.794,44,20,44z M59.349,12l-4.878,17.072l-39.568,1.93
      c-0.127,0.006-0.249,0.027-0.368,0.057L12.877,12H59.349z"/>
	</symbol>

	<symbol id="icon-checklist-marcado" viewBox="0 0 48 64">
		<path d="M44,64c2.205,0,4-1.794,4-4V4c0-2.206-1.795-4-4-4H18c-1.639,0-3.668,0.841-4.828,2L2,13.171
      C0.842,14.33,0,16.36,0,18v42c0,2.206,1.795,4,4,4H44z M44,4v56l0,0H4V18h10c2.205,0,4-1.794,4-4V4H44z M14,6.828V14H6.828
      L14,6.828z"/>
		<path d="M20.566,27.337h19.686"/>
		<path d="M40.252,28.427H20.566c-0.604,0-1.092-0.487-1.092-1.09c0-0.604,0.488-1.092,1.092-1.092h19.686
      c0.602,0,1.092,0.487,1.092,1.092C41.344,27.939,40.854,28.427,40.252,28.427z"/>
		<path d="M20.566,31.187h19.686"/>
		<path d="M40.252,32.276H20.566c-0.604,0-1.092-0.487-1.092-1.09c0-0.604,0.488-1.092,1.092-1.092h19.686
      c0.602,0,1.092,0.488,1.092,1.092C41.344,31.789,40.854,32.276,40.252,32.276z"/>
		<path d="M18.281,22.096c-0.269-0.218-0.666-0.176-0.885,0.095l-5.863,7.248l-3.852-3.115
      c-0.271-0.219-0.666-0.178-0.884,0.094c-0.22,0.27-0.178,0.664,0.093,0.884l4.355,3.522c0.136,0.11,0.306,0.152,0.467,0.132
      c0.162-0.014,0.317-0.09,0.428-0.228l6.238-7.711c0.113-0.141,0.152-0.314,0.131-0.48C18.497,22.371,18.422,22.209,18.281,22.096z
      "/>
		<path d="M10.131,27.953v-0.944h3.018l1.137-1.404H9.43c-0.389,0-0.703,0.315-0.703,0.703v0.51
      L10.131,27.953z"/>
		<path d="M14.434,28.327v2.984h-4.303v-1.04l-1.404-1.136v2.879c0,0.388,0.314,0.701,0.703,0.701h5.706
      c0.388,0,0.702-0.313,0.702-0.701v-5.423L14.434,28.327z"/>
		<path d="M20.566,38.247h19.686"/>
		<path d="M40.252,39.339H20.566c-0.604,0-1.092-0.488-1.092-1.092c0-0.603,0.488-1.09,1.092-1.09h19.686
      c0.602,0,1.092,0.487,1.092,1.09C41.344,38.851,40.854,39.339,40.252,39.339z"/>
		<path d="M20.566,42.097h19.686"/>
		<path d="M40.252,43.188H20.566c-0.604,0-1.092-0.488-1.092-1.092c0-0.603,0.488-1.09,1.092-1.09h19.686
      c0.602,0,1.092,0.487,1.092,1.09C41.344,42.7,40.854,43.188,40.252,43.188z"/>
		<path d="M18.281,33.007c-0.269-0.217-0.666-0.176-0.885,0.095l-5.863,7.249l-3.852-3.117
      c-0.271-0.218-0.666-0.176-0.884,0.094c-0.22,0.27-0.178,0.666,0.093,0.885l4.355,3.521c0.136,0.111,0.306,0.152,0.467,0.134
      c0.162-0.014,0.317-0.091,0.428-0.229l6.238-7.711c0.113-0.141,0.152-0.314,0.131-0.479
      C18.497,33.282,18.422,33.119,18.281,33.007z"/>
		<path d="M10.131,38.864v-0.943h3.018l1.137-1.404H9.43c-0.389,0-0.703,0.313-0.703,0.701v0.511
      L10.131,38.864z"/>
		<path d="M14.434,39.238v2.985h-4.303v-1.04l-1.404-1.137v2.878c0,0.388,0.314,0.703,0.703,0.703h5.706
      c0.388,0,0.702-0.315,0.702-0.703v-5.423L14.434,39.238z"/>
		<path d="M20.566,49.607h19.686"/>
		<path d="M40.252,50.699H20.566c-0.604,0-1.092-0.487-1.092-1.092c0-0.603,0.488-1.09,1.092-1.09h19.686
      c0.602,0,1.092,0.487,1.092,1.09C41.344,50.212,40.854,50.699,40.252,50.699z"/>
		<path d="M20.566,53.458h19.686"/>
		<path d="M40.252,54.549H20.566c-0.604,0-1.092-0.487-1.092-1.091s0.488-1.091,1.092-1.091h19.686
      c0.602,0,1.092,0.487,1.092,1.091S40.854,54.549,40.252,54.549z"/>
		<path d="M18.281,44.368c-0.269-0.218-0.666-0.176-0.885,0.095l-5.863,7.248l-3.852-3.115
      c-0.271-0.22-0.666-0.178-0.884,0.094c-0.22,0.27-0.178,0.664,0.093,0.884l4.355,3.521c0.136,0.111,0.306,0.152,0.467,0.133
      c0.162-0.014,0.317-0.091,0.428-0.228l6.238-7.712c0.113-0.14,0.152-0.313,0.131-0.479C18.497,44.644,18.422,44.481,18.281,44.368
      z"/>
		<path d="M10.131,50.226v-0.944h3.018l1.137-1.404H9.43c-0.389,0-0.703,0.313-0.703,0.702v0.51
      L10.131,50.226z"/>
		<path d="M14.434,50.599v2.985h-4.303v-1.04l-1.404-1.136v2.877c0,0.39,0.314,0.703,0.703,0.703h5.706
      c0.388,0,0.702-0.313,0.702-0.703v-5.421L14.434,50.599z"/>
		<path d="M26,18.472h12c1.104,0,2-0.896,2-2s-0.896-2-2-2H26c-1.104,0-2,0.896-2,2S24.896,18.472,26,18.472z
      "/>
	</symbol>

	<symbol id="icon-cifrao" viewBox="0 0 12.186 26.001">
		<path d="M11.729,15.665c-0.168-0.465-0.436-0.953-0.811-1.475c-0.195-0.254-0.406-0.512-0.631-0.775
      c-0.242-0.284-0.525-0.578-0.826-0.856c-0.301-0.297-0.613-0.576-0.93-0.832c-0.258-0.21-0.498-0.401-0.789-0.632
      c-0.531-0.426-0.971-0.798-1.323-1.114c-0.308-0.279-0.556-0.542-0.753-0.8C5.468,8.936,5.34,8.727,5.23,8.453
      C5.183,8.36,5.163,8.264,5.163,8.142c0-0.099,0.018-0.188,0.054-0.266c0.071-0.152,0.171-0.263,0.331-0.364
      c0.305-0.198,0.625-0.201,0.885-0.097c0.184,0.072,0.333,0.181,0.4,0.258c0.111,0.167,0.16,0.312,0.16,0.469
      c0,0.675,0.27,1.283,0.786,1.759c0.982,0.911,2.58,0.914,3.568-0.001c0.512-0.476,0.783-1.083,0.783-1.758
      c0-0.79-0.156-1.55-0.482-2.291c-0.502-1.015-1.24-1.841-2.199-2.455C8.676,2.906,7.822,2.607,6.904,2.493V0.812
      C6.904,0.364,6.541,0,6.092,0C5.643,0,5.279,0.364,5.279,0.812v1.677C4.735,2.555,4.22,2.682,3.752,2.877
      C2.701,3.279,1.798,3.958,1.035,4.934c-0.316,0.46-0.569,0.961-0.75,1.488C0.096,6.967,0,7.546,0,8.142
      c0,0.735,0.161,1.493,0.48,2.254c0.372,0.877,0.974,1.731,1.761,2.514c0.342,0.376,0.719,0.736,1.124,1.076l1.088,0.904
      c0.552,0.43,0.977,0.789,1.303,1.102c0.312,0.295,0.585,0.584,0.778,0.816c0.184,0.232,0.311,0.441,0.416,0.709
      c0.047,0.094,0.071,0.197,0.071,0.316c0,0.113-0.021,0.213-0.049,0.277c-0.072,0.15-0.184,0.275-0.332,0.377
      c-0.151,0.096-0.312,0.139-0.521,0.139c-0.145,0-0.284-0.023-0.379-0.057c-0.172-0.072-0.318-0.182-0.392-0.27
      c-0.142-0.213-0.159-0.354-0.159-0.439c0-0.691-0.271-1.309-0.785-1.787c-0.983-0.91-2.58-0.912-3.574,0.006
      c-0.509,0.479-0.778,1.094-0.778,1.781c0,0.777,0.157,1.525,0.472,2.244c0.483,1.027,1.228,1.859,2.205,2.471
      c0.786,0.504,1.641,0.812,2.55,0.93v1.684c0,0.449,0.363,0.812,0.812,0.812c0.449,0,0.812-0.363,0.812-0.812v-1.682
      c0.52-0.068,1.042-0.195,1.571-0.398c1.076-0.459,1.959-1.143,2.623-2.033c0.723-0.975,1.088-2.057,1.088-3.215
      C12.186,17.126,12.027,16.374,11.729,15.665z M9.793,20.106c-0.488,0.654-1.146,1.162-1.926,1.494
      c-1.512,0.578-3.021,0.4-4.268-0.396c-0.716-0.449-1.255-1.051-1.595-1.771c-0.217-0.492-0.326-1.021-0.326-1.572
      c0-0.24,0.082-0.424,0.261-0.592c0.195-0.18,0.412-0.266,0.683-0.266c0.27,0,0.485,0.084,0.678,0.262
      c0.183,0.172,0.264,0.355,0.264,0.596c0,0.459,0.145,0.91,0.473,1.396c0.289,0.361,0.651,0.635,1.11,0.824
      c0.779,0.287,1.676,0.217,2.39-0.24c0.4-0.273,0.705-0.619,0.914-1.053c0.129-0.297,0.193-0.619,0.193-0.955
      c0-0.369-0.078-0.717-0.205-0.969c-0.139-0.355-0.344-0.703-0.641-1.076c-0.248-0.301-0.559-0.631-0.922-0.975
      c-0.364-0.348-0.829-0.742-1.403-1.189l-1.068-0.888c-0.346-0.29-0.67-0.601-0.99-0.949c-0.665-0.663-1.149-1.344-1.438-2.022
      C1.744,9.207,1.625,8.661,1.625,8.142c0-0.415,0.065-0.813,0.197-1.188c0.133-0.391,0.319-0.76,0.522-1.058
      c0.549-0.7,1.218-1.205,2.013-1.51c0.511-0.214,1.086-0.323,1.707-0.323c0.928,0,1.776,0.238,2.515,0.704
      c0.701,0.45,1.244,1.058,1.598,1.769c0.219,0.501,0.33,1.041,0.33,1.606c0,0.224-0.082,0.397-0.262,0.565
      C9.852,9.069,9.268,9.065,8.883,8.709c-0.184-0.17-0.264-0.344-0.264-0.567c0-0.476-0.145-0.935-0.475-1.427
      C7.854,6.355,7.48,6.083,7.035,5.905C6.292,5.609,5.398,5.672,4.671,6.143c-0.415,0.264-0.726,0.614-0.929,1.05
      C3.607,7.487,3.538,7.806,3.538,8.142c0,0.372,0.08,0.723,0.207,0.967C3.884,9.469,4.1,9.827,4.39,10.186
      c0.245,0.32,0.551,0.646,0.938,0.999c0.374,0.337,0.837,0.73,1.427,1.202c0.262,0.207,0.499,0.396,0.752,0.602
      c0.275,0.223,0.549,0.467,0.83,0.745c0.271,0.252,0.512,0.5,0.713,0.738c0.207,0.24,0.4,0.479,0.562,0.689
      c0.273,0.379,0.471,0.734,0.602,1.094c0.229,0.547,0.346,1.088,0.346,1.605C10.561,18.663,10.303,19.419,9.793,20.106z"/>
	</symbol>

	<symbol id="icon-envelope" viewBox="0 0 43.792 43.793">
		<path d="M42.932,16.52l-5.982-2.393V1.369C36.949,0.613,36.337,0,35.581,0H8.211
      C7.455,0,6.843,0.613,6.843,1.369v12.758L0.86,16.52C0.325,16.734,0.002,17.248,0,17.791h0v24.633
      c0,0.756,0.613,1.369,1.369,1.369h41.055c0.756,0,1.368-0.613,1.368-1.369V17.791h-0.001C43.79,17.248,43.467,16.734,42.932,16.52
      z M39.655,18.157l-2.706,1.681v-2.762L39.655,18.157z M34.213,2.737v12.338c0,0.003,0,0.006,0,0.008v6.453l-12.317,7.646
      L9.58,21.536v-6.453c0-0.002,0-0.005,0-0.008V2.737H34.213z M6.843,19.838l-2.706-1.681l2.706-1.081V19.838z M2.737,41.056V20.511
      l18.438,11.443c0.221,0.137,0.471,0.206,0.722,0.206c0.25,0,0.5-0.069,0.721-0.206l18.438-11.443v20.545H2.737z"/>
		<path d="M24.633,8.212h5.475c0.756,0,1.368-0.613,1.368-1.369s-0.612-1.368-1.368-1.368h-5.475
      c-0.756,0-1.368,0.612-1.368,1.368S23.877,8.212,24.633,8.212z"/>
		<path d="M13.685,13.686h16.422c0.756,0,1.368-0.613,1.368-1.369c0-0.755-0.612-1.368-1.368-1.368H13.685
      c-0.756,0-1.369,0.613-1.369,1.368C12.316,13.072,12.929,13.686,13.685,13.686z"/>
		<path d="M13.685,19.159h16.422c0.756,0,1.368-0.612,1.368-1.368s-0.612-1.368-1.368-1.368H13.685
      c-0.756,0-1.369,0.612-1.369,1.368S12.929,19.159,13.685,19.159z"/>
	</symbol>

	<symbol id="icon-facebook" viewBox="0 0 15.819 30.323">
		<path d="M14.934,16.492l0.697-5.39h-5.363V7.66c0-1.56,0.438-2.624,2.687-2.624l2.865-0.002V0.212C15.326,0.147,13.624,0,11.642,0
  C7.507,0,4.677,2.513,4.677,7.126v3.976H0v5.39h4.677v13.831h5.591V16.492H14.934z"/>
	</symbol>

	<symbol id="icon-fechar" viewBox="0 0 37.086 37.086">
		<path d="M22.703,18.543L36.224,5.022c1.149-1.149,1.149-3.013,0-4.159c-1.147-1.15-3.011-1.15-4.159,0
    L18.543,14.384L5.021,0.863c-1.148-1.15-3.012-1.15-4.159,0c-1.149,1.146-1.149,3.01,0,4.159l13.521,13.521L0.862,32.064
    c-1.149,1.149-1.149,3.013,0,4.159c1.147,1.15,3.011,1.15,4.159,0l13.521-13.521l13.521,13.521c1.148,1.15,3.012,1.15,4.159,0
    c1.149-1.146,1.149-3.01,0-4.159L22.703,18.543z"/>
	</symbol>

	<symbol id="icon-instagram" viewBox="0 0 29.27 29.004">
		<path d="M3.758-0.126h21.755c2.067,0,3.757,1.682,3.757,3.739v21.653c0,2.058-1.689,3.737-3.757,3.737H3.758
  C1.691,29.004,0,27.324,0,25.267V3.613C0,1.556,1.691-0.126,3.758-0.126z M21.321,3.109c-0.725,0-1.316,0.591-1.316,1.313v3.139
  c0,0.722,0.592,1.312,1.316,1.312h3.309c0.725,0,1.317-0.59,1.317-1.312V4.423c0-0.722-0.593-1.313-1.317-1.313H21.321z
   M25.961,12.192h-2.576c0.244,0.795,0.377,1.632,0.377,2.502c0,4.846-4.074,8.774-9.1,8.774c-5.023,0-9.098-3.928-9.098-8.774
  c0-0.87,0.134-1.707,0.376-2.502H3.254V24.5c0,0.638,0.522,1.155,1.163,1.155h20.382c0.64,0,1.162-0.518,1.162-1.155V12.192z
   M14.662,8.708c-3.244,0-5.877,2.538-5.877,5.67c0,3.129,2.633,5.668,5.877,5.668c3.247,0,5.879-2.539,5.879-5.668
  C20.541,11.245,17.909,8.708,14.662,8.708z"/>
	</symbol>

	<symbol id="icon-jornal-aberto" viewBox="0 0 38 32.001">
		<path d="M36.655,0.011L19,2.276L1.345,0.011C1.003-0.034,0.663,0.066,0.405,0.283
      C0.147,0.501,0,0.814,0,1.144v27.429c0,0.572,0.44,1.057,1.03,1.133l17.812,2.285c0.053,0.007,0.104,0.011,0.157,0.011
      c0.052,0,0.104-0.004,0.157-0.011l17.812-2.285c0.59-0.076,1.03-0.561,1.03-1.133V1.144c0-0.329-0.147-0.643-0.405-0.86
      C37.336,0.066,36.998-0.031,36.655,0.011z M2.375,2.449l15.438,1.98v25.122l-15.438-1.98V2.449z M35.625,27.571l-15.438,1.98V4.43
      l15.438-1.98V27.571z"/>
		<path d="M5.79,7.991l9.5,1.143c0.05,0.006,0.1,0.009,0.149,0.009c0.59,0,1.102-0.423,1.176-1.001
      c0.082-0.626-0.38-1.198-1.03-1.276l-9.5-1.143C5.436,5.644,4.84,6.09,4.759,6.716C4.678,7.342,5.14,7.914,5.79,7.991z"/>
		<path d="M15.585,12.581l-9.5-1.143c-0.649-0.082-1.245,0.366-1.326,0.993
      c-0.081,0.626,0.381,1.197,1.031,1.275l9.5,1.143c0.05,0.006,0.1,0.009,0.149,0.009c0.59,0,1.102-0.423,1.176-1.001
      C16.697,13.23,16.235,12.659,15.585,12.581z"/>
		<path d="M15.585,18.296l-9.5-1.144c-0.649-0.081-1.245,0.366-1.326,0.992s0.381,1.197,1.031,1.276
      l9.5,1.143c0.05,0.006,0.1,0.009,0.149,0.009c0.59,0,1.102-0.423,1.176-1.001C16.697,18.944,16.235,18.373,15.585,18.296z"/>
		<path d="M15.585,24.01l-9.5-1.143c-0.649-0.081-1.245,0.365-1.326,0.992
      c-0.081,0.626,0.381,1.197,1.031,1.275l9.5,1.143c0.05,0.006,0.1,0.009,0.149,0.009c0.59,0,1.102-0.423,1.176-1.001
      C16.697,24.659,16.235,24.088,15.585,24.01z"/>
		<path d="M22.561,9.144c0.05,0,0.1-0.003,0.149-0.009l9.5-1.143c0.65-0.078,1.112-0.649,1.03-1.275
      c-0.081-0.626-0.682-1.073-1.325-0.993l-9.5,1.143c-0.65,0.078-1.112,0.65-1.031,1.276C21.459,8.72,21.971,9.144,22.561,9.144z"/>
		<path d="M22.561,14.858c0.05,0,0.1-0.003,0.149-0.009l9.5-1.143c0.65-0.078,1.112-0.649,1.03-1.275
      c-0.081-0.627-0.682-1.074-1.325-0.993l-9.5,1.143c-0.65,0.078-1.112,0.649-1.031,1.275
      C21.459,14.435,21.971,14.858,22.561,14.858z"/>
		<path d="M22.561,20.572c0.05,0,0.1-0.003,0.149-0.009l9.5-1.143c0.65-0.079,1.112-0.65,1.03-1.276
      c-0.081-0.626-0.682-1.073-1.325-0.992l-9.5,1.144c-0.65,0.077-1.112,0.648-1.031,1.275
      C21.459,20.149,21.971,20.572,22.561,20.572z"/>
		<path d="M31.915,22.867l-9.5,1.143c-0.65,0.078-1.112,0.649-1.031,1.275
      c0.075,0.578,0.587,1.001,1.177,1.001c0.05,0,0.1-0.003,0.149-0.009l9.5-1.143c0.65-0.078,1.112-0.649,1.03-1.275
      C33.159,23.232,32.559,22.786,31.915,22.867z"/>
	</symbol>

	<symbol id="icon-jornal-dobrado" viewBox="0 0 44.07 44.07">
		<path d="M39.94,0H9.641c-2.284,0-4.132,1.85-4.132,4.132v2.756H4.132C1.848,6.887,0,8.734,0,11.018v27.544
      c0,3.042,2.467,5.509,5.509,5.509h33.054c3.042,0,5.508-2.467,5.508-5.509V4.132C44.071,1.849,42.221,0,39.94,0z M41.317,38.562
      c0,1.519-1.235,2.754-2.754,2.754H5.509c-1.521,0-2.754-1.235-2.754-2.754V11.018c0-0.759,0.616-1.377,1.377-1.377h1.377v27.545
      c0,0.762,0.616,1.377,1.377,1.377s1.377-0.615,1.377-1.377V4.132c0-0.759,0.616-1.377,1.377-1.377h30.3
      c0.76,0,1.377,0.618,1.377,1.377V38.562L41.317,38.562z M26.854,17.912c-0.381,0-0.688-0.31-0.688-0.688
      c0-0.383,0.309-0.688,0.688-0.688h11.02c0.381,0,0.688,0.307,0.688,0.688c0,0.379-0.308,0.688-0.688,0.688H26.854z M26.854,13.781
      c-0.381,0-0.688-0.311-0.688-0.689c0-0.382,0.309-0.688,0.688-0.688h11.02c0.381,0,0.688,0.308,0.688,0.688
      s-0.308,0.689-0.688,0.689H26.854z M26.854,9.649c-0.381,0-0.688-0.311-0.688-0.688c0-0.382,0.309-0.688,0.688-0.688h11.02
      c0.381,0,0.688,0.307,0.688,0.688c0,0.379-0.308,0.688-0.688,0.688H26.854z M22.724,37.19c0.38,0,0.688,0.311,0.688,0.688
      c0,0.383-0.311,0.688-0.688,0.688H11.707c-0.379,0-0.688-0.307-0.688-0.688c0-0.379,0.312-0.688,0.688-0.688H22.724z
       M22.724,33.059c0.38,0,0.688,0.311,0.688,0.688c0,0.382-0.311,0.688-0.688,0.688H11.707c-0.379,0-0.688-0.307-0.688-0.688
      c0-0.38,0.312-0.688,0.688-0.688H22.724z M22.724,28.928c0.38,0,0.688,0.309,0.688,0.688c0,0.382-0.311,0.688-0.688,0.688H11.707
      c-0.379,0-0.688-0.308-0.688-0.688s0.312-0.688,0.688-0.688H22.724z M37.874,37.19c0.379,0,0.688,0.311,0.688,0.688
      c0,0.383-0.311,0.688-0.688,0.688H26.856c-0.383,0-0.688-0.307-0.688-0.688c0-0.379,0.306-0.688,0.688-0.688H37.874z
       M37.874,33.059c0.379,0,0.688,0.311,0.688,0.688c0,0.382-0.311,0.688-0.688,0.688H26.856c-0.383,0-0.688-0.307-0.688-0.688
      c0-0.38,0.306-0.688,0.688-0.688H37.874z M37.874,28.928c0.379,0,0.688,0.309,0.688,0.688c0,0.382-0.311,0.688-0.688,0.688H26.856
      c-0.383,0-0.688-0.308-0.688-0.688s0.306-0.688,0.688-0.688H37.874z M37.874,20.664c0.379,0,0.688,0.31,0.688,0.688
      c0,0.382-0.311,0.688-0.688,0.688H11.707c-0.379,0-0.688-0.308-0.688-0.688c0-0.379,0.312-0.688,0.688-0.688H37.874z
       M37.874,24.796c0.379,0,0.688,0.311,0.688,0.688c0,0.383-0.311,0.688-0.688,0.688H11.707c-0.379,0-0.688-0.307-0.688-0.688
      c0-0.379,0.312-0.688,0.688-0.688H37.874z M12.395,17.904h9.643c0.761,0,1.377-0.615,1.377-1.377V6.892
      c0-0.762-0.616-1.377-1.377-1.377h-9.643c-0.761,0-1.377,0.615-1.377,1.377v9.635C11.018,17.289,11.634,17.904,12.395,17.904z
       M13.772,8.264h6.888v6.886h-6.888V8.264z"/>
	</symbol>

	<symbol id="icon-lapis" viewBox="0 0 29.997 30.013">
		<path d="M1.223,30.013c0.226,0,0.464-0.056,0.709-0.164l6.879-3.061c0.592-0.264,1.384-0.808,1.843-1.267
      L29.437,6.719c0.361-0.362,0.561-0.844,0.561-1.358s-0.199-0.996-0.561-1.357l-3.439-3.443C25.636,0.199,25.155,0,24.642,0
      s-0.994,0.199-1.357,0.561L4.022,19.844c-0.464,0.463-1.002,1.272-1.252,1.88l-2.627,6.384c-0.284,0.693-0.083,1.162,0.062,1.379
      C0.43,29.821,0.8,30.013,1.223,30.013z M9.297,24.163L9.297,24.163l-3.438-3.442L21.765,4.799l3.439,3.442L9.297,24.163z
       M24.642,1.918l3.439,3.443L26.56,6.884L23.12,3.441L24.642,1.918z M4.544,22.454c0.028-0.067,0.066-0.146,0.108-0.224
      l2.979,2.981L2.465,27.51L4.544,22.454z"/>
	</symbol>

	<symbol id="icon-lapis-regua" viewBox="0 0 58 64">
		<path d="M32,64c2.206,0,4-1.794,4-4V4c0-2.205-1.794-4-4-4H20c-2.206,0-4,1.795-4,4v56c0,2.206,1.794,4,4,4
      H32z M20,4h12v6h-6c-1.104,0-2,0.896-2,2s0.896,2,2,2h6v6.001h-1c-1.104,0-2,0.895-2,1.999s0.896,2,2,2h1v6h-6
      c-1.104,0-2,0.896-2,2s0.896,2,2,2h6v6h-1c-1.104,0-2,0.896-2,2s0.896,2,2,2h1v6h-6c-1.104,0-2,0.896-2,2s0.896,2,2,2h6v6H20V4z"
			/>
		<path d="M6,62.949c1.12,0,2.098-0.672,2.683-1.844l2.212-4.422C11.524,55.423,12,53.409,12,52V6
      c0-2.205-1.794-4-4-4H4C1.794,2,0,3.795,0,6v46c0,1.409,0.476,3.423,1.105,4.684l2.21,4.422C3.902,62.277,4.881,62.949,6,62.949z
       M7.315,54.895L6,57.527l-1.317-2.633C4.332,54.192,4,52.785,4,52V16h4v36C8,52.785,7.668,54.192,7.315,54.895z M8,6v6H4V6H8z"/>
		<path d="M50.895,7.316l-2.212-4.422C48.098,1.723,47.12,1.051,46,1.051c-1.119,0-2.098,0.672-2.685,1.844
      l-2.21,4.422C40.476,8.577,40,10.592,40,12v46c0,2.206,1.794,4,4,4h4c2.206,0,4-1.794,4-4h2c2.206,0,4-1.794,4-4v-8
      c0-1.104-0.896-2-2-2s-2,0.896-2,2v8h-2V12C52,10.592,51.524,8.577,50.895,7.316z M48,58h-4V12c0-0.785,0.332-2.192,0.683-2.895
      L46,6.473l1.315,2.633C47.668,9.808,48,11.215,48,12V58z"/>
	</symbol>

	<symbol id="icon-lapis-risco" viewBox="0 0 21.094 21.886">
		<path d="M0.95,20.989c0.158,0,0.325-0.039,0.496-0.115l4.815-2.141c0.415-0.184,0.969-0.564,1.29-0.887
      L20.701,4.698c0.254-0.253,0.393-0.59,0.393-0.949S20.955,3.052,20.701,2.8l-2.408-2.408C18.041,0.14,17.703,0,17.344,0
      s-0.695,0.14-0.949,0.393L2.91,13.876c-0.324,0.326-0.701,0.891-0.877,1.316l-1.838,4.465c-0.199,0.484-0.059,0.811,0.043,0.963
      C0.396,20.854,0.654,20.989,0.95,20.989z M6.603,16.897L6.603,16.897l-2.407-2.406L15.33,3.355l2.408,2.407L6.603,16.897z
       M17.344,1.342l2.408,2.407l-1.064,1.064l-2.408-2.407L17.344,1.342z M3.275,15.702c0.02-0.047,0.047-0.102,0.076-0.156
      l2.085,2.086L1.82,19.237L3.275,15.702z"/>
		<path d="M0,21.886v-1h20.02v1H0z"/>
	</symbol>

	<symbol id="icon-lixo" viewBox="0 0 48 64">
		<path d="M31,0H17c-1.104,0-2,0.896-2,2v6H2c-1.104,0-2,0.896-2,2s0.896,2,2,2h2v50c0,1.104,0.896,2,2,2h36c1.105,0,2-0.896,2-2V12
      h2c1.105,0,2-0.896,2-2s-0.895-2-2-2H33V2C33,0.896,32.105,0,31,0z M40,12v48H8V12H40z M19,8V4h10v4H19z"/>
		<path d="M18,56c1.105,0,2-0.896,2-2V20c0-1.104-0.895-2-2-2c-1.104,0-2,0.896-2,2v34C16,55.104,16.896,56,18,56z"/>
		<path d="M30,56c1.105,0,2-0.896,2-2V20c0-1.104-0.895-2-2-2c-1.104,0-2,0.896-2,2v34C28,55.104,28.896,56,30,56z"/>
	</symbol>

	<symbol id="icon-mapa" viewBox="0 0 27.659 25.066">
		<path d="M27.279,0.148c-0.237-0.16-0.539-0.193-0.806-0.086l-8.322,3.328L9.829,0.062
    c-0.207-0.082-0.436-0.082-0.642,0L0.543,3.52C0.215,3.65,0,3.969,0,4.322v19.879c0,0.287,0.143,0.555,0.38,0.717
    c0.146,0.098,0.314,0.148,0.484,0.148c0.109,0,0.218-0.021,0.321-0.062l8.322-3.328l8.322,3.328c0.207,0.082,0.436,0.082,0.643,0
    l8.644-3.457c0.327-0.131,0.543-0.449,0.543-0.803V0.865C27.659,0.578,27.517,0.309,27.279,0.148z M8.644,20.158l-6.915,2.766
    V4.906l6.915-2.766V20.158z M17.287,22.924l-6.915-2.766V2.141l6.915,2.766V22.924z M25.931,20.158l-6.915,2.766V4.906l6.915-2.766
    V20.158z"/>
	</symbol>

	<symbol id="icon-martelo" viewBox="0 0 512 512">
		<path
			d="m244 423c1-2 1-4 1-6 0-32-62-43-115-43-54 0-116 11-116 43 0 2 0 4 1 6-9 7-15 14-15 24 0 37 81 47 130 47 48 0 129-10 129-47 0-10-5-17-15-24z m-114-23c51 0 81 11 88 17-7 6-37 17-88 17-52 0-81-11-89-17 8-6 37-17 89-17z m0 68c-64 0-98-14-103-21 1-1 3-3 6-4 23 12 62 17 97 17 35 0 73-5 96-17 3 1 6 3 7 4-6 7-40 21-103 21z m373-113l-121-121c-9-9-24-9-33 0l-17 17-27-27 21-21c14 10 34 8 47-5l28-28c15-15 15-39 0-54l-86-87c-15-15-40-15-55 0l-28 28c-13 14-14 35-4 50l-61 61c-15-10-36-9-50 4l-28 28c-15 15-15 40 0 55l87 86c15 15 39 15 54 0l28-28c13-13 15-33 5-47l21-21 27 27-17 17c-9 9-9 24 0 33l121 121c10 10 25 10 34 0l54-54c10-9 10-24 0-34z m-250-277l28-28c3-4 9-4 13 0l87 86c3 4 3 10 0 14l-28 28c-4 3-10 3-14 0l-86-87c-4-4-4-10 0-13z m-15 215l-28 28c-4 3-10 3-14 0l-86-87c-4-4-4-10 0-13l28-28c3-4 9-4 13 0l87 86c3 4 3 10 0 14z m6-49l-56-56 60-61 57 57z m188 175l-114-114 48-47 113 114z"/>
	</symbol>

	<symbol id="icon-menu" viewBox="0 0 512 512">
		<path
			d="m16 176l49 0c8 0 16-7 16-16 0-9-8-16-16-16l-49 0c-9 0-16 7-16 16 0 9 7 16 16 16z m484-32l-322 0c-9 0-17 7-17 16 0 9 8 16 17 16l322 0c9 0 16-7 16-16 0-9-7-16-16-16z m-484 129l49 0c8 0 16-7 16-16 0-9-8-16-16-16l-49 0c-9 0-16 7-16 16 0 9 7 16 16 16z m484-32l-322 0c-9 0-17 7-17 16 0 9 8 16 17 16l322 0c9 0 16-7 16-16 0-9-7-16-16-16z m-484 129l49 0c8 0 16-7 16-16 0-9-8-16-16-16l-49 0c-9 0-16 7-16 16 0 9 7 16 16 16z m484-32l-322 0c-9 0-17 7-17 16 0 9 8 16 17 16l322 0c9 0 16-7 16-16 0-9-7-16-16-16z"/>
	</symbol>

	<symbol id="icon-papel-dobrado" viewBox="0 0 24 32">
		<path d="M22,32c1.103,0,2-0.897,2-2V2c0-1.103-0.897-2-2-2H9C8.181,0,7.166,0.42,6.586,1L1,6.585
      C0.421,7.165,0,8.18,0,9v21c0,1.103,0.897,2,2,2H22z M22,2v28l0,0H2V9h5c1.103,0,2-0.897,2-2V2H22z M7,3.414V7H3.414L7,3.414z"/>
		<path d="M12,10.236h6c0.552,0,1-0.448,1-1s-0.448-1-1-1h-6c-0.553,0-1,0.447-1,1S11.447,10.236,12,10.236z"
			/>
		<path d="M18,13.235H6c-0.553,0-1,0.448-1,1c0,0.552,0.447,1,1,1h12c0.552,0,1-0.448,1-1
      C19,13.683,18.552,13.235,18,13.235z"/>
		<path d="M18,18.234H6c-0.553,0-1,0.449-1,1.002c0,0.551,0.447,0.999,1,0.999h12c0.552,0,1-0.448,1-0.999
      C19,18.684,18.552,18.234,18,18.234z"/>
		<path d="M18,23.236H6c-0.553,0-1,0.447-1,0.999s0.447,1.001,1,1.001h12c0.552,0,1-0.449,1-1.001
      S18.552,23.236,18,23.236z"/>
	</symbol>

	<symbol id="icon-papel-sobre" viewBox="0 0 53 63.066">
		<path d="M16.764,0H7C5.895,0,5,0.896,5,2v54c0,1.105,0.895,2,2,2h44c1.104,0,2-0.895,2-2V2
      c0-1.104-0.896-2-2-2h-9.766 M43.234,4H49v50H9V4h5.764"/>
		<path d="M43,28.898H25c-1.105,0-2,0.896-2,2c0,1.105,0.895,2,2,2h18c1.105,0,2-0.895,2-2
      C45,29.795,44.105,28.898,43,28.898z"/>
		<path d="M43,36.369H25c-1.105,0-2,0.896-2,2c0,1.105,0.895,2,2,2h18c1.105,0,2-0.895,2-2
      C45,37.266,44.105,36.369,43,36.369z"/>
		<path d="M43,43.648H25c-1.105,0-2,0.896-2,2s0.895,2,2,2h18c1.105,0,2-0.896,2-2S44.105,43.648,43,43.648z"
			/>
		<path d="M17,28.898h-2c-1.105,0-2,0.896-2,2c0,1.105,0.895,2,2,2h2c1.104,0,2-0.895,2-2
      C19,29.795,18.104,28.898,17,28.898z"/>
		<path d="M43,21.523H25c-1.105,0-2,0.896-2,2c0,1.105,0.895,2,2,2h18c1.105,0,2-0.895,2-2
      C45,22.42,44.105,21.523,43,21.523z"/>
		<path d="M43,9.678H15c-1.105,0-2,0.896-2,2c0,1.105,0.895,2,2,2h28c1.105,0,2-0.895,2-2
      C45,10.574,44.105,9.678,43,9.678z"/>
		<path d="M17,21.523h-2c-1.105,0-2,0.896-2,2c0,1.105,0.895,2,2,2h2c1.104,0,2-0.895,2-2
      C19,22.42,18.104,21.523,17,21.523z"/>
		<path d="M17,36.369h-2c-1.105,0-2,0.896-2,2c0,1.105,0.895,2,2,2h2c1.104,0,2-0.895,2-2
      C19,37.266,18.104,36.369,17,36.369z"/>
		<path d="M17,43.648h-2c-1.105,0-2,0.896-2,2s0.895,2,2,2h2c1.104,0,2-0.896,2-2S18.104,43.648,17,43.648z"
			/>
		<path d="M44,54.167v4.899L3.5,59.033v-50l3.334,0.033v-4H2c-1.104,0-2,0.896-2,2v54c0,1.105,0.896,2,2,2h44
      c1.105,0,2-0.895,2-2v-6.899H44z"/>
	</symbol>

	<symbol id="icon-pasta-download" viewBox="0 0 47 47">
		<path d="M0,33.781c0,0.812,0.658,1.469,1.469,1.469h16.156c0.811,0,1.469-0.656,1.469-1.469
      c0-0.811-0.658-1.469-1.469-1.469H2.938V2.938h12.61l5.444,5.444c0.276,0.275,0.649,0.431,1.039,0.431h22.031v23.5H29.375
      c-0.811,0-1.469,0.658-1.469,1.469c0,0.812,0.658,1.469,1.469,1.469h16.156c0.811,0,1.469-0.656,1.469-1.469V7.344
      c0-0.812-0.658-1.47-1.469-1.47H22.639l-5.444-5.443C16.919,0.155,16.546,0,16.156,0H1.469C0.658,0,0,0.658,0,1.468V33.781z"/>
		<path d="M23.5,20.563c-0.811,0-1.469,0.657-1.469,1.469v19.953l-3.368-3.367
      c-0.573-0.572-1.504-0.572-2.078,0c-0.573,0.574-0.573,1.504,0,2.078l5.875,5.875C22.748,46.857,23.124,47,23.5,47
      s0.752-0.143,1.039-0.43l5.875-5.875c0.572-0.574,0.572-1.504,0-2.078c-0.574-0.572-1.504-0.572-2.078,0l-3.367,3.367V22.032
      C24.969,21.22,24.311,20.563,23.5,20.563z"/>
	</symbol>

	<symbol id="icon-play" viewBox="0 0 512 512">
		<path
			d="m256 0c-68 0-133 27-181 75-48 48-75 113-75 181 0 68 27 133 75 181 48 48 113 75 181 75 68 0 133-27 181-75 48-48 75-113 75-181 0-68-27-133-75-181-48-48-113-75-181-75z m158 414c-42 43-98 66-158 66-60 0-116-23-158-66-43-42-66-98-66-158 0-60 23-116 66-158 42-43 98-66 158-66 60 0 116 23 158 66 43 42 66 98 66 158 0 60-23 116-66 158z m-76-171l-112-88c-5-3-11-4-17-1-5 2-9 8-9 14l0 176c0 6 4 12 9 14 2 1 5 2 7 2 4 0 7-1 10-3l112-88c4-3 6-8 6-13 0-5-2-10-6-13z m-106 68l0-110 70 55z"/>
	</symbol>

	<symbol id="icon-prancheta" viewBox="0 0 19.822 26.43">
		<path d="M14.965,2.478l-1.011-2.021C13.814,0.177,13.527,0,13.215,0H6.607C6.295,0,6.009,0.177,5.869,0.456
      l-1.01,2.021H0.826C0.37,2.478,0,2.848,0,3.304v22.3c0,0.456,0.37,0.826,0.826,0.826h18.17c0.457,0,0.826-0.37,0.826-0.826v-22.3
      c0-0.456-0.369-0.826-0.826-0.826H14.965z M7.118,1.651h5.587l1.651,3.305H5.466L7.118,1.651z M18.17,24.778H1.652V4.13h2.38
      L3.391,5.412c-0.128,0.257-0.115,0.56,0.036,0.804C3.578,6.459,3.844,6.607,4.13,6.607h11.563h0.008
      c0.456,0,0.825-0.37,0.825-0.825c0-0.174-0.052-0.334-0.143-0.467L15.79,4.13h2.38V24.778z"/>
		<path d="M15.693,9.675H8.26c-0.457,0-0.826,0.369-0.826,0.826c0,0.455,0.37,0.826,0.826,0.826h7.434
      c0.455,0,0.826-0.371,0.826-0.826C16.52,10.044,16.148,9.675,15.693,9.675z"/>
		<path d="M15.693,14.722H8.26c-0.457,0-0.826,0.369-0.826,0.826c0,0.455,0.37,0.826,0.826,0.826h7.434
      c0.455,0,0.826-0.371,0.826-0.826C16.52,15.091,16.148,14.722,15.693,14.722z"/>
		<path d="M15.693,19.638H8.26c-0.457,0-0.826,0.369-0.826,0.826c0,0.455,0.37,0.825,0.826,0.825h7.434
      c0.455,0,0.826-0.37,0.826-0.825C16.52,20.007,16.148,19.638,15.693,19.638z"/>
		<path d="M4.956,9.675H4.13c-0.456,0-0.826,0.369-0.826,0.826c0,0.455,0.37,0.826,0.826,0.826h0.826
      c0.456,0,0.826-0.371,0.826-0.826C5.782,10.044,5.412,9.675,4.956,9.675z"/>
		<path d="M4.956,14.722H4.13c-0.456,0-0.826,0.369-0.826,0.826c0,0.455,0.37,0.826,0.826,0.826h0.826
      c0.456,0,0.826-0.371,0.826-0.826C5.782,15.091,5.412,14.722,4.956,14.722z"/>
		<path d="M4.956,19.638H4.13c-0.456,0-0.826,0.369-0.826,0.826c0,0.455,0.37,0.825,0.826,0.825h0.826
      c0.456,0,0.826-0.37,0.826-0.825C5.782,20.007,5.412,19.638,4.956,19.638z"/>
		>
	</symbol>

	<symbol id="icon-prancheta-ok" viewBox="0 0 35.84 47.787">
		<path d="M34.348,47.787c0.824,0,1.492-0.669,1.492-1.493V5.974c0-0.825-0.668-1.494-1.492-1.494h-7.291
      l-1.828-3.655C24.977,0.319,24.459,0,23.893,0H11.947c-0.566,0-1.083,0.319-1.336,0.825L8.784,4.48H1.493
      C0.668,4.48,0,5.148,0,5.974v40.32c0,0.824,0.668,1.493,1.493,1.493H34.348z M12.869,2.987h10.102l2.986,5.973H9.882L12.869,2.987
      z M2.987,7.467H7.29L6.131,9.786c-0.231,0.463-0.207,1.013,0.065,1.453c0.272,0.44,0.753,0.708,1.271,0.708h20.906h0.014
      c0.826,0,1.494-0.668,1.494-1.494c0-0.312-0.096-0.602-0.258-0.841l-1.074-2.146h4.305v37.334H2.987V7.467z"/>
		<path d="M22.836,21.345l-6.409,6.41l-3.424-3.424c-0.583-0.583-1.528-0.583-2.113,0
      c-0.583,0.584-0.583,1.528,0,2.111l4.48,4.48c0.292,0.291,0.675,0.438,1.057,0.438c0.382,0,0.764-0.146,1.056-0.438l7.466-7.467
      c0.584-0.583,0.584-1.528,0-2.111C24.365,20.761,23.422,20.761,22.836,21.345z"/>
	</symbol>

	<symbol id="icon-quadrado-download" viewBox="0 0 32 28">
		<path d="M16,10c-0.552,0-1,0.448-1,1v13.586l-2.293-2.293c-0.391-0.391-1.021-0.391-1.413,0
      c-0.391,0.391-0.391,1.023,0,1.414l4,4C15.489,27.902,15.745,28,16,28c0.257,0,0.513-0.098,0.708-0.293l4-4
      c0.391-0.391,0.391-1.023,0-1.414c-0.392-0.391-1.022-0.391-1.414,0L17,24.588V11C16.999,10.5,16.553,10,16,10z"/>
		<path d="M31,0H1C0.447,0,0,0.448,0,1v18c0,0.553,0.447,1,1,1h11c0.553,0,1-0.447,1-1c0-0.552-0.447-1-1-1H2
      V2h28v16H20c-0.553,0-1,0.448-1,1c0,0.553,0.447,1,1,1h11c0.552,0,1-0.447,1-1V1C32,0.448,31.552,0,31,0z"/>
	</symbol>

	<symbol id="icon-relogio" viewBox="0 0 28.953 28.953">
		<path d="M14.477,0C10.61,0,6.975,1.506,4.24,4.24S0,10.609,0,14.477c0,3.866,1.506,7.502,4.24,10.235
      c2.734,2.735,6.37,4.241,10.236,4.241c3.867,0,7.502-1.506,10.236-4.241c2.734-2.733,4.24-6.369,4.24-10.235
      c0-3.867-1.506-7.502-4.24-10.236S18.344,0,14.477,0z M23.434,23.433c-2.393,2.394-5.574,3.71-8.957,3.71s-6.564-1.316-8.957-3.71
      c-2.393-2.392-3.71-5.573-3.71-8.956c0-3.384,1.317-6.564,3.71-8.957c2.393-2.393,5.574-3.711,8.957-3.711
      s6.564,1.318,8.957,3.711s3.711,5.573,3.711,8.957C27.145,17.859,25.826,21.041,23.434,23.433z"/>
		<path d="M21.166,16.359l-5.785-2.48V4.523c0-0.5-0.405-0.904-0.904-0.904s-0.905,0.404-0.905,0.904v9.953
      c0,0.361,0.216,0.689,0.549,0.831l6.334,2.714c0.115,0.051,0.236,0.074,0.355,0.074c0.352,0,0.686-0.206,0.832-0.549
      C21.84,17.088,21.627,16.556,21.166,16.359z"/>
		<path d="M5.429,13.571H4.524c-0.5,0-0.905,0.405-0.905,0.905s0.405,0.904,0.905,0.904h0.905
      c0.5,0,0.905-0.404,0.905-0.904S5.929,13.571,5.429,13.571z"/>
		<path d="M22.619,14.477c0,0.5,0.406,0.904,0.906,0.904h0.904c0.5,0,0.904-0.404,0.904-0.904
      s-0.404-0.905-0.904-0.905h-0.904C23.025,13.571,22.619,13.977,22.619,14.477z"/>
		<path d="M14.477,22.619c-0.5,0-0.905,0.405-0.905,0.904v0.905c0,0.499,0.405,0.905,0.905,0.905
      s0.904-0.406,0.904-0.905v-0.905C15.381,23.024,14.976,22.619,14.477,22.619z"/>
	</symbol>

	<symbol id="icon-sacola" viewBox="0 0 37.222 42.54">
		<path d="M34.559,11.846c-0.062-0.686-0.637-1.211-1.325-1.211h-2.658h-3.987V7.978
      C26.588,3.578,23.01,0,18.611,0c-4.398,0-7.976,3.578-7.976,7.978v2.657H6.647H3.988c-0.688,0-1.262,0.525-1.324,1.211
      L0.005,41.091c-0.033,0.371,0.091,0.74,0.343,1.015C0.6,42.383,0.956,42.54,1.33,42.54h34.563c0.374,0,0.729-0.157,0.981-0.435
      c0.252-0.274,0.376-0.644,0.343-1.015L34.559,11.846z M13.294,7.978c0-2.934,2.386-5.317,5.317-5.317
      c2.932,0,5.317,2.384,5.317,5.317v2.657H13.294V7.978z M2.786,39.881l2.416-26.587h1.445h3.988v3.027
      c-0.792,0.461-1.33,1.309-1.33,2.29c0,1.468,1.191,2.658,2.659,2.658s2.659-1.19,2.659-2.658c0-0.981-0.538-1.829-1.329-2.29
      v-3.027h10.634v3.027c-0.791,0.461-1.328,1.309-1.328,2.29c0,1.468,1.189,2.658,2.658,2.658s2.658-1.19,2.658-2.658
      c0-0.981-0.537-1.829-1.328-2.29v-3.027h3.987h1.444l2.416,26.587H2.786z"/>
	</symbol>

	<symbol id="icon-seta-baixo" viewBox="0 0 512 512">
		<path
			d="m491 120c-16-16-41-16-57 0l-183 183-182-183c-16-16-41-16-57-1-16 16-16 42 0 58l210 212c7 7 18 12 28 12 1 0 1 0 1 0 10 0 21-5 28-12l212-212c16-16 16-42 0-57z"/>
	</symbol>

	<symbol id="icon-seta-quadrada" viewBox="0 0 55 55.001">
		<path d="M50,0H5C2.239,0,0,2.239,0,5v45c0,2.762,2.239,5.001,5,5.001h45c2.76,0,5-2.239,5-5.001V5
      C55,2.239,52.76,0,50,0z M38.672,28.603l-7.871,7.799c-0.291,0.289-0.674,0.434-1.055,0.434c-0.387,0-0.773-0.147-1.066-0.443
      c-0.582-0.589-0.577-1.539,0.01-2.121l5.352-5.303H17.383c-0.828,0-1.5-0.672-1.5-1.5s0.672-1.5,1.5-1.5h16.543l-5.24-5.242
      c-0.586-0.585-0.586-1.534,0-2.12c0.586-0.587,1.535-0.587,2.121,0l7.871,7.871c0.281,0.283,0.439,0.665,0.439,1.064
      C39.115,27.939,38.957,28.321,38.672,28.603z"/>
	</symbol>

	<symbol id="icon-seta-round" viewBox="0 0 13.99 12.01">
		<path d="M13.727,5.347l-4.74-5.063c-0.354-0.377-0.924-0.377-1.277,0c-0.353,0.377-0.353,0.987,0,1.364
      l3.156,3.372H0.903C0.404,5.019,0,5.451,0,5.983c0,0.533,0.404,0.966,0.903,0.966h10.032l-3.224,3.41
      c-0.354,0.375-0.357,0.985-0.006,1.364c0.176,0.19,0.409,0.286,0.642,0.286c0.23,0,0.459-0.094,0.637-0.279l4.738-5.017
      c0.172-0.181,0.268-0.427,0.268-0.683C13.992,5.774,13.896,5.528,13.727,5.347z"/>
	</symbol>

	<symbol id="icon-seta-sharp" viewBox="0 0 21.493 17.08">
		<path d="M21.21,7.893l-7.609-7.61c-0.377-0.376-0.988-0.376-1.365,0c-0.377,0.377-0.377,0.988,0,1.365
      l5.894,5.894H0.966C0.433,7.542,0,7.975,0,8.508s0.433,0.965,0.966,0.965h17.283l-6.011,5.956
      c-0.379,0.375-0.382,0.986-0.007,1.365c0.189,0.19,0.438,0.286,0.687,0.286c0.245,0,0.491-0.094,0.68-0.279l7.609-7.541
      c0.183-0.18,0.285-0.426,0.286-0.682C21.493,8.32,21.392,8.074,21.21,7.893z"/>
	</symbol>

	<symbol id="icon-twitter" viewBox="0 0 33.011 26.701">
		<path d="M33.011,3.159C31.795,3.697,30.49,4.06,29.12,4.222c1.398-0.835,2.475-2.154,2.979-3.729
  c-1.307,0.773-2.757,1.334-4.3,1.636C26.563,0.819,24.802,0,22.854,0c-3.739,0-6.772,3.019-6.772,6.74
  c0,0.531,0.06,1.045,0.175,1.537C10.629,7.995,5.639,5.314,2.298,1.233c-0.582,0.996-0.917,2.153-0.917,3.39
  c0,2.338,1.196,4.403,3.013,5.611C3.283,10.2,2.239,9.895,1.325,9.389v0.086c0,3.265,2.335,5.991,5.432,6.61
  c-0.566,0.153-1.166,0.237-1.782,0.237c-0.437,0-0.861-0.043-1.275-0.122c0.862,2.68,3.362,4.626,6.326,4.684
  c-2.317,1.807-5.236,2.885-8.411,2.885c-0.546,0-1.085-0.033-1.614-0.096c2.996,1.912,6.557,3.028,10.384,3.028
  c12.455,0,19.268-10.271,19.268-19.178c0-0.292-0.008-0.583-0.02-0.875C30.953,5.7,32.102,4.513,33.011,3.159z"/>
	</symbol>

	<symbol id="icon-fechar-circulo" viewBox="0 0 64 64">
		<path d="M17.585,46.414C17.977,46.805,18.488,47,19,47s1.023-0.195,1.414-0.586L32,34.828l11.585,11.586
    C43.977,46.805,44.488,47,45,47s1.023-0.195,1.414-0.586c0.781-0.781,0.781-2.047,0-2.828L34.828,32l11.586-11.586
    c0.781-0.781,0.781-2.047,0-2.828c-0.781-0.781-2.047-0.781-2.829,0L32,29.172L20.414,17.586c-0.781-0.781-2.047-0.781-2.829,0
    c-0.78,0.781-0.78,2.047,0,2.828L29.172,32L17.585,43.586C16.805,44.367,16.805,45.633,17.585,46.414z"/>
		<path d="M32,64c8.547,0,16.583-3.329,22.626-9.373C60.671,48.583,64,40.547,64,32s-3.329-16.583-9.374-22.626
    C48.583,3.329,40.547,0,32,0C23.452,0,15.417,3.329,9.374,9.373C3.329,15.417,0,23.453,0,32s3.329,16.583,9.374,22.626
    C15.417,60.671,23.452,64,32,64z M12.202,12.202C17.49,6.913,24.521,4,32,4s14.51,2.913,19.798,8.202C57.087,17.49,60,24.521,60,32
    s-2.913,14.51-8.202,19.798C46.51,57.087,39.479,60,32,60s-14.51-2.913-19.798-8.202C6.913,46.51,4,39.479,4,32
    S6.913,17.49,12.202,12.202z"/>
	</symbol>
	<symbol id="icon-youtube" viewBox="0 0 49.047 47.974">
		<path d="M40.088,22.849H8.959C4.01,22.849,0,26.865,0,31.811v7.201c0,4.947,4.011,8.961,8.959,8.961h31.129
          c4.947,0,8.959-4.014,8.959-8.961v-7.201C49.047,26.865,45.035,22.849,40.088,22.849z M15.499,28.456h-2.894v14.38H9.808v-14.38
          H6.917V26.01h8.582V28.456z M23.674,42.836h-2.479v-1.36c-0.461,0.503-0.937,0.888-1.433,1.146c-0.496,0.27-0.975,0.396-1.44,0.396
          c-0.576,0-1.004-0.183-1.297-0.555c-0.288-0.371-0.436-0.921-0.436-1.664V30.422h2.48v9.523c0,0.294,0.055,0.505,0.153,0.636
          c0.107,0.135,0.277,0.197,0.511,0.197c0.18,0,0.411-0.087,0.69-0.261c0.281-0.176,0.537-0.396,0.771-0.668v-9.429h2.479V42.836z
           M32.677,40.272c0,0.877-0.194,1.552-0.584,2.021c-0.387,0.47-0.953,0.701-1.686,0.701c-0.488,0-0.922-0.088-1.299-0.271
          c-0.379-0.18-0.736-0.457-1.062-0.841v0.951h-2.51V26.01h2.51v5.419c0.336-0.375,0.691-0.666,1.062-0.86
          c0.379-0.199,0.76-0.296,1.146-0.296c0.785,0,1.383,0.263,1.797,0.791c0.416,0.529,0.623,1.305,0.623,2.32v6.889H32.677z
           M41.281,36.927h-4.746v2.339c0,0.652,0.08,1.106,0.242,1.359c0.166,0.254,0.444,0.378,0.842,0.378
          c0.412,0,0.697-0.107,0.863-0.321c0.159-0.216,0.245-0.686,0.245-1.416v-0.564h2.554v0.637c0,1.272-0.31,2.231-0.937,2.878
          c-0.617,0.641-1.547,0.959-2.783,0.959c-1.112,0-1.989-0.339-2.627-1.021c-0.635-0.679-0.959-1.619-0.959-2.815v-5.576
          c0-1.073,0.354-1.956,1.058-2.633c0.701-0.677,1.604-1.015,2.715-1.015c1.137,0,2.01,0.312,2.619,0.94
          c0.608,0.629,0.914,1.529,0.914,2.706V36.927z"/>
		<path d="M37.642,32.286c-0.396,0-0.678,0.11-0.85,0.343c-0.176,0.218-0.258,0.591-0.258,1.112v1.255h2.192v-1.255
          c0-0.521-0.088-0.896-0.262-1.112C38.299,32.397,38.019,32.286,37.642,32.286z"/>
		<path d="M29.086,32.244c-0.176,0-0.354,0.039-0.525,0.12c-0.174,0.079-0.344,0.21-0.512,0.38v7.732
          c0.199,0.2,0.396,0.354,0.588,0.442c0.191,0.085,0.39,0.133,0.601,0.133c0.305,0,0.526-0.088,0.67-0.266
          c0.141-0.176,0.213-0.457,0.213-0.854V33.52c0-0.422-0.084-0.737-0.26-0.955C29.677,32.351,29.42,32.244,29.086,32.244z"/>
		<polygon points="13.035,18.538 16.178,18.538 16.178,10.847 19.84,0 16.643,0 14.698,7.41 14.5,7.41 12.457,0 9.29,0
          13.035,11.194   "/>
		<path d="M24.099,18.883c1.271,0,2.267-0.333,2.992-0.999c0.722-0.669,1.082-1.582,1.082-2.752V8.068
          c0-1.041-0.369-1.898-1.104-2.56c-0.74-0.659-1.688-0.991-2.845-0.991c-1.27,0-2.28,0.314-3.032,0.941
          c-0.75,0.627-1.127,1.468-1.127,2.531v7.088c0,1.163,0.366,2.083,1.1,2.772C21.899,18.538,22.879,18.883,24.099,18.883z
           M22.942,7.885c0-0.297,0.106-0.537,0.315-0.725c0.217-0.185,0.492-0.273,0.834-0.273c0.369,0,0.668,0.089,0.896,0.273
          c0.227,0.188,0.34,0.428,0.34,0.725v7.451c0,0.365-0.111,0.655-0.336,0.864c-0.224,0.21-0.523,0.312-0.9,0.312
          c-0.369,0-0.653-0.1-0.854-0.31c-0.197-0.205-0.297-0.493-0.297-0.868L22.942,7.885L22.942,7.885z"/>
		<path d="M32.39,18.738c0.525,0,1.064-0.15,1.619-0.438c0.562-0.292,1.099-0.719,1.609-1.276v1.516h2.793V4.864h-2.793v10.38
          c-0.26,0.297-0.549,0.541-0.859,0.734c-0.315,0.192-0.576,0.288-0.781,0.288c-0.262,0-0.454-0.071-0.567-0.221
          c-0.115-0.143-0.18-0.377-0.18-0.698V4.864h-2.789v11.429c0,0.814,0.164,1.424,0.487,1.828
          C31.26,18.531,31.742,18.738,32.39,18.738z"/>
	</symbol>

</svg>
<!--Start of Zopim Live Chat Script-->
<script type="text/javascript">
	//window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=
	//d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
	//_.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute('charset','utf-8');
	//$.src='//v2.zopim.com/?2eb5i3NO6cN56cZIqCYNrrorKInxw5XM';z.t=+new Date;$.
	//type='text/javascript';e.parentNode.insertBefore($,e)})(document,'script');
</script>
<!--End of Zopim Live Chat Script-->
</body>
</html>