<?php
/*
  Template Name: Home
 */
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme and one of the
 * two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Nuce
 * @since 2.2.0
 */
get_header();
?>
<section id="index">
	<div id="slideshow-container">
		<button class="prev">
			<svg>
			<use xlink:href="#icon-seta-quadrada" />
			</svg>
		</button>
		<button class="next">
			<svg>
			<use xlink:href="#icon-seta-quadrada" />
			</svg>
		</button>
		<div id="slideshow-destaques" class="Slider">
			<?php
			$args = array(
				'numberposts' => -1,
				'orderby' => 'post_date',
				'order' => 'DESC',
				'post_type' => 'slideshow',
				'post_status' => 'publish',
			);

			$query = new WP_Query( $args );


			if ( $query->have_posts() ) :
				while ( $query->have_posts() ) : $query->the_post();
					get_template_part( "content", "slideshow" );
				endwhile;
			else :
				echo wpautop( 'Desculpe, nenhum curso foi encontrado' );
			endif;
			?>
		</div>
		<div class="navi"></div>
	</div> <!-- #slideshow-containet -->
	<section id="cursos-agenda">
		<div class="content u-xs-sizeFull">
			<div class="col1 u-xs-sizeFull u-xs-noPadding">
				<section id="cursos" class="Section">
					<header>
						<svg class="Section-icon">
						<use xlink:href="#icon-prancheta-ok" />
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
							<?php
							$args = array(
								'numberposts' => 1,
								'offset' => 0,
								'tax_query' => array(
									array(
										'taxonomy' => 'segmentos',
										'field' => 'slug',
										'terms' => 'cursos-para-concursos',
									),
								),
								'orderby' => 'post_date',
								'order' => 'DESC',
								'post_type' => 'cursos',
								'post_status' => 'publish',
								'suppress_filters' => true );

							$recent_posts = wp_get_recent_posts( $args );
							?>
							<div class="informacoes">
								<div class="texto">
									<h4><?php echo $recent_posts[0]["post_title"]; ?></h4>
									<h5>
										<svg>
										<use xlink:href="#icon-seta-round" />
										</svg>
										<span>Início: <?php echo get_post_meta( $recent_posts[0]["ID"], 'curso_inicio', true ); ?></span>
									</h5>
								</div>
							</div>
							<?php
							$term = get_term_by( 'slug', 'cursos-para-concursos', 'segmentos' );
							?>
							<a href="<?php echo get_term_link( $term ); ?>" class="veja-mais Card-button u-xs-blockCenter">
								<span>Veja mais</span>
								<svg>
								<use xlink:href="#icon-seta-round" />
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
							<?php
							$args = array(
								'numberposts' => 1,
								'offset' => 0,
								'tax_query' => array(
									array(
										'taxonomy' => 'segmentos',
										'field' => 'slug',
										'terms' => 'p-r-a-i-a',
									),
								),
								'orderby' => 'post_date',
								'order' => 'DESC',
								'post_type' => 'cursos',
								'post_status' => 'publish',
								'suppress_filters' => true );

							$recent_posts = wp_get_recent_posts( $args );
							?>
							<div class="informacoes">
								<div class="texto">
									<h4><?php echo $recent_posts[0]["post_title"]; ?></h4>
									<h5>
										<svg>
										<use xlink:href="#icon-seta-round" />
										</svg>
										<span>
											Início: <?php echo get_post_meta( $recent_posts[0]["ID"], 'curso_inicio', true ); ?>
										</span>
									</h5>
								</div>
							</div>
							<?php
							$term = get_term_by( 'slug', 'p-r-a-i-a', 'segmentos' );
							?>
							<a href="<?php echo get_term_link( $term ); ?>" class="veja-mais  Card-button u-xs-blockCenter">
								<span>Veja mais</span>
								<svg>
								<use xlink:href="#icon-seta-round" />
								</svg>
							</a>
						</li>
						<li class="li-isoladas-para-concursos  Card u-xs-sizeFull u-xs-noMargin">
							<header class="Card-header">
								<h3 class="Card-title">Isoladas para concursos</h3>
								<svg class="Card-icon">
								<use xlink:href="#icon-agenda"/>
								</svg>
							</header>
							<?php
							$args = array(
								'numberposts' => 1,
								'offset' => 0,
								'tax_query' => array(
									array(
										'taxonomy' => 'segmentos',
										'field' => 'slug',
										'terms' => 'isoladas-para-concursos',
									),
								),
								'orderby' => 'post_date',
								'order' => 'DESC',
								'post_type' => 'cursos',
								'post_status' => 'publish',
								'suppress_filters' => true );

							$recent_posts = wp_get_recent_posts( $args );
							?>
							<div class="informacoes ">
								<div class="texto">
									<h4><?php echo $recent_posts[0]["post_title"]; ?></h4>
									<h5>
										<svg>
										<use xlink:href="#icon-seta-round" />
										</svg>
										<span>Início: <?php echo get_post_meta( $recent_posts[0]["ID"], 'curso_inicio', true ); ?></span></h5>
								</div>
							</div>
							<?php
							$term = get_term_by( 'slug', 'isoladas-para-concursos', 'segmentos' );
							?>
							<a href="<?php echo get_term_link( $term ); ?>" class="veja-mais Card-button u-xs-blockCenter">
								<span>Veja mais</span>
								<svg>
								<use xlink:href="#icon-seta-round" />
								</svg>
							</a>
						</li>
						<li class="li-aula-unica  Card u-xs-sizeFull u-xs-noMargin">
							<header class="Card-header">
								<h3 class="Card-title">Aula Única</h3>
								<svg class="Card-icon">
								<use xlink:href="#icon-papel-dobrado"/>
								</svg>
							</header>
							<?php
							$args = array(
								'numberposts' => 1,
								'offset' => 0,
								'tax_query' => array(
									array(
										'taxonomy' => 'segmentos',
										'field' => 'slug',
										'terms' => 'aula-unica',
									),
								),
								'orderby' => 'post_date',
								'order' => 'DESC',
								'post_type' => 'cursos',
								'post_status' => 'publish',
								'suppress_filters' => true );

							$recent_posts = wp_get_recent_posts( $args );
							?>
							<div class="informacoes">
								<div class="texto">
									<h4><?php echo $recent_posts[0]["post_title"]; ?></h4>
									<h5>
										<svg>
										<use xlink:href="#icon-seta-round" />
										</svg>
										<span>Início: <?php echo get_post_meta( $recent_posts[0]["ID"], 'curso_inicio', true ); ?></span>
									</h5>
								</div>
							</div>
							<?php
							$term = get_term_by( 'slug', 'aula-unica', 'segmentos' );
							?>
							<a href="<?php echo get_term_link( $term ); ?>" class="veja-mais Card-button u-xs-blockCenter">
								<span>Veja mais</span>
								<svg>
								<use xlink:href="#icon-seta-round" />
								</svg>
							</a>
						</li>
						<li class="li-cursos-de-testes-para-concursos  Card u-xs-sizeFull u-xs-noMargin">
							<header class="Card-header">
								<h3 class="Card-title">Cursos de testes para concursos</h3>
								<svg class="Card-icon">
								<use xlink:href="#icon-agenda-lapis"/>
								</svg>
							</header>
							<?php
							$args = array(
								'numberposts' => 1,
								'offset' => 0,
								'tax_query' => array(
									array(
										'taxonomy' => 'segmentos',
										'field' => 'slug',
										'terms' => 'cursos-de-testes-para-concursos',
									),
								),
								'orderby' => 'post_date',
								'order' => 'DESC',
								'post_type' => 'cursos',
								'post_status' => 'publish',
								'suppress_filters' => true );

							$recent_posts = wp_get_recent_posts( $args );
							?>
							<div class="informacoes">
								<div class="texto">
									<h4><?php echo $recent_posts[0]["post_title"]; ?></h4>
									<h5>
										<svg>
										<use xlink:href="#icon-seta-round" />
										</svg>
										<span>Início: <?php echo get_post_meta( $recent_posts[0]["ID"], 'curso_inicio', true ); ?></span>
									</h5>
								</div>
							</div>
							<?php
							$term = get_term_by( 'slug', 'cursos-de-testes-para-concursos', 'segmentos' );
							?>
							<a href="<?php echo get_term_link( $term ); ?>" class="veja-mais Card-button u-xs-blockCenter"><span>Veja mais</span>
								<svg>
								<use xlink:href="#icon-seta-round" />
								</svg></a>
						</li>
						<li class="li-nuce-ifpe  Card u-xs-sizeFull u-xs-noMargin">
							<header class="Card-header">
								<h3 class="Card-title">Nuce IFPE</h3>
								<svg class="Card-icon">
								<use xlink:href="#icon-jornal-aberto"/>
								</svg>
							</header>
							<?php
							$args = array(
								'numberposts' => 1,
								'offset' => 0,
								'tax_query' => array(
									array(
										'taxonomy' => 'segmentos',
										'field' => 'slug',
										'terms' => 'nuce-ifpb',
									),
								),
								'orderby' => 'post_date',
								'order' => 'DESC',
								'post_type' => 'cursos',
								'post_status' => 'publish',
								'suppress_filters' => true );

							$recent_posts = wp_get_recent_posts( $args );
							?>
							<div class="informacoes">
								<div class="texto">
									<h4><?php echo $recent_posts[0]["post_title"]; ?></h4>
									<h5>
										<svg>
										<use xlink:href="#icon-seta-round" />
										</svg>
										<span>Início: <?php echo get_post_meta( $recent_posts[0]["ID"], 'curso_inicio', true ); ?></span></h5>
								</div>
							</div>
							<?php
							$term = get_term_by( 'slug', 'nuce-ifpb', 'segmentos' );
							?>
							<a href="<?php echo get_term_link( $term ); ?>" class="veja-mais Card-button u-xs-blockCenter"><span>Veja mais</span>
								<svg>
								<use xlink:href="#icon-seta-round" />
								</svg></a>
						</li>
					</ul>					
					<a href="<?php bloginfo( "url" ) ?>/cursos/" class="ver-todos  Section-button u-xs-blockCenter" title="Ver todos">Ver todos</a>
				</section>
			</div>
			<div class="col2">
				<header>
					<svg>
					<use xlink:href="#icon-calendario" />
					</svg>
					<h2>Agenda de cursos</h2>
				</header>
				<div id="datepicker"></div>
				<div id="slideshow-datepicker">
					<div class="container">
						<svg class="prev">
						<use xlink:href="#icon-seta-sharp" />
						</svg>
						<svg class="next">
						<use xlink:href="#icon-seta-sharp" />
						</svg>
						<div class="slideshow">
							<?php
							$startDate = date( 'Y' ) . '-' . date( 'm' ) . '-01';
							$startDateTime = strtotime( $startDate );

							$endDateTime = date( 'Y' ) . '-' . date( 'm' ) . '-' . date( 't', strtotime( 'today' ) );


							$cursoDates = array();
							$args_cursos_do_mes = array(
								'post_type' => 'cursos',
								'posts_per_page' => -1,
								'meta_query' => array(
									array(
										'key' => 'curso_turma_%_curso_turma_data_de_inicio',
										'type' => 'DATE',
										'value' => array( $startDate, $endDateTime ),
										'compare' => 'BETWEEN'
									),
								),
							);

							$query_cursos_do_mes = new WP_Query( $args_cursos_do_mes );

							while ( $query_cursos_do_mes->have_posts() ): $query_cursos_do_mes->the_post();
								$cursos_do_mes = get_field( 'curso_turma' );

								if ( count( $cursos_do_mes ) ):
									foreach ( $cursos_do_mes as $turma ) :
										?>
										<div class="item">
											<h3><?php echo date_i18n( 'd \d\e F', strtotime( $turma['curso_turma_data_de_inicio'] ) ); ?></h3>											
											<h4><?php the_title(); ?> • <?php echo date_i18n( 'd\/m', strtotime( $turma['curso_turma_data_de_inicio'] ) ) ?> a <?php echo date_i18n( 'd\/m', strtotime( $turma['curso_turma_data_de_finalizacao'] ) ) ?></h4>
											<h5><?php the_excerpt() ?></h5>
										</div>

										<?php
									endforeach;
								endif;
							endWhile;
							?>

						</div>
					</div>
				</div>
			</div>
		</div>
	</section> <!-- #cursos-agenda -->
	<section id="cadastre-agora" class="Promo">
		<div class="content u-xs-sizeFull">
			<div class="texto u-xs-sizeFull">
				<header>
					<h2 class="Promo-title u-xs-blockCenter">Cadastre-se agora <span class="regular">e tenha acesso</span><span class="bold">ao conteúdo exclusivo</span></h2>
				</header>
				<h3 class="u-xs-sizeFull u-xs-hidden">Fique ainda mais próximo do sucesso através dos nossos materiais exclusivos.</h3>
				<a href="<?php site_url( "/cadastrar" ) ?>" class="saiba-mais"><span>Veja mais</span>
					<svg>
					<use xlink:href="#icon-seta-round" />
					</svg>
				</a>
			</div>
		</div>
	</section> <!-- #cadastre-agora-->
	<section id="noticias-home" class="Section u-xs-noMargin">
		<div class="content u-xs-sizeFull">
			<header>
				<svg class="Section-icon">
				<use xlink:href="#icon-jornal-dobrado" />
				</svg>
				<h2>Notícias</h2>
			</header>
			<ul class="News u-xs-noMargin">
				<?php
				// WP_Query arguments
				$args1 = array(
					'post_type' => 'post',
					'posts_per_page' => '6',
				);

				// The Query
				$query2 = new WP_Query( $args1 );

				// The Loop
				if ( $query2->have_posts() ) :
					while ( $query2->have_posts() ) : $query2->the_post();

						/*
						 * Include the post format-specific template for the content. If you want to
						 * use this in a child theme, then include a file called called content-___.php
						 * (where ___ is the post format) and that will be used instead.
						 */
						get_template_part( 'content' );

					endwhile;


				else :
					// If no content, include the "No posts found" template.
					get_template_part( 'content', 'none' );

				endif;
				// Restore original Post Data
				?>				
			</ul>
			<a href="listagem-noticias.php" class="mais-noticias"><span>Mais notícias</span>
				<svg>
				<use xlink:href="#icon-seta-round" />
				</svg>
			</a>
		</div>
	</section> <!-- #noticias-home-->
	<section id="downloads-home"  class="Section">
		<div class="content u-xs-sizeFull">
			<header>
				<svg class="Section-icon">
				<use xlink:href="#icon-pasta-download" />
				</svg>
				<h2>Downloads</h2>
				<a href="<?php bloginfo( "url" ) ?>/downloads/" class="ver-todos  u-xs-hidden" title="Ver todos"><span>Ver todos</span>
					<svg>
					<use xlink:href="#icon-seta-round" />
					</svg>
				</a>
				<h3>O Nuce Concursos preparou para você os melhores materiais de apoio aos estudos. São provas, editais, gabaritos e outros conteúdos para a sua aprovação.</h3>
			</header>
			<ul class="Download">
				<li class="provas Download-item">
					<a href="<?php
					$term = get_term_by( 'slug', 'provas', 'tipo' );
					echo get_term_link( $term );
					?>" title="<?php echo $term->name ?>" class="active">
						<svg class="Download-icon">
						<use xlink:href="#icon-papel-dobrado" />
						</svg>
						<span>Provas</span>	
					</a>
				</li>
				<li class="editais  Download-item">
					<a href="<?php
					$term = get_term_by( 'slug', 'editais', 'tipo' );
					echo get_term_link( $term );
					?>" title="<?php echo $term->name ?>">
						<svg class="Download-icon">
						<use xlink:href="#icon-papel-sobre" />
						</svg>
						<span>Editais</span>
					</a>
				</li>
				<li class="gabaritos  Download-item">
					<a href="<?php
					$term = get_term_by( 'slug', 'gabaritos', 'tipo' );
					echo get_term_link( $term );
					?>" title="<?php echo $term->name ?>">
						<svg class="Download-icon">
						<use xlink:href="#icon-checklist-marcado" />
						</svg>
						<span>Gabaritos</span>		
					</a>
				</li>
				<li class="outros  Download-item">
					<a href="<?php
					$term = get_term_by( 'slug', 'outros', 'tipo' );
					echo get_term_link( $term );
					?>" title="<?php echo $term->name ?>">					
						<svg class="Download-icon">
						<use xlink:href="#icon-lapis-regua" />
						</svg>
						<span>Outros</span>	
					</a>
				</li>
			</ul>
		</div>
	</section> <!-- #downloads-home-->
	<section id="produtos-home" class="Section">
		<div class="content u-xs-sizeFull">
			<header class="Section-header Section--product-header">
				<svg>
				<use xlink:href="#icon-sacola" />
				</svg>
				<h2>Produtos</h2>
				<a href="<?php bloginfo( 'url' ) ?>/produtos/" class="ver-todos  u-xs-hidden" title="Ver todos">
					<span>Ver todos</span>
					<svg>
					<use xlink:href="#icon-seta-round" />
					</svg></a>
			</header>
			<ul class="productshome" class="Product">
				<?php
				$args = array( 'post_type' => 'product', 'stock' => 1, 'posts_per_page' => 6, 'orderby' => 'date', 'order' => 'DESC' );
				$loop = new WP_Query( $args );
				while ( $loop->have_posts() ) : $loop->the_post();
					global $product;
					?>

					<li class="producthome Product-item u-xs-sizeFull u-xs-noMargin">

						<a id="id-<?php the_id(); ?>" title="<?php echo esc_attr( $loop->post->post_title ? $loop->post->post_title : $loop->post->ID  ); ?>">
							<?php
							if ( has_post_thumbnail( $loop->post->ID ) )
								echo get_the_post_thumbnail( $loop->post->ID, 'shop_catalog' );
							else
								echo '<img src="' . woocommerce_placeholder_img_src() . '" alt="Placeholder" width="110px" height="170px" />';
							?>							
						</a>
						<h3><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>

						<h4 class="price"><?php echo $product->get_price_html(); ?></h4>

						<?php woocommerce_template_loop_add_to_cart( $loop->post, $product ); ?>
					</li>
				<?php endwhile; ?>
				<?php wp_reset_query(); ?>
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
	</section> <!-- #produtos-home -->
</section><!-- #index -->

<?php
get_footer();
