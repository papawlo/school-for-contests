<?php get_header();?>
<section id="cursos" class="listagem">
	<div class="content">
		<header class="header-padrao">
			<svg>
			<use xlink:href="#icon-prancheta-ok" />
			</svg>
			<h2>Cursos</h2>
		</header>
		<section class="section-cursos">
			<ul class="lista-cursos cursos-concursos" id="ul-cursos-para-concursos">
				<li>
					<svg class="icon-first-li">
					<use xlink:href="#icon-agenda-lapis" />
					</svg>
					<h3>Cursos para concursos</h3>
					<svg class="icon-seta-round">
					<use xlink:href="#icon-seta-round" />
					</svg>
				</li>
				<?php
				$args = array(
					'numberposts' => 1,
					'offset' => 0,
					'tax_query' => array(
						array(
							'taxonomy' => 'segmento',
							'field' => 'slug',
							'terms' => 'cursos-para-concursos',
						),
					),
					'orderby' => 'post_date',
					'order' => 'DESC',
					'post_type' => 'cursos',
					'post_status' => 'publish',
					'suppress_filters' => true );

				$cursos_para_concursos = new WP_Query( $args );
				if ( $cursos_para_concursos ) :
					while ( $cursos_para_concursos->have_posts() ) : $cursos_para_concursos->the_post();
						get_template_part( 'content', 'curso' );
					endwhile;
				endif;
				?>
			</ul>
			<a href="javascript:void(0)" class="carregar-mais btn-more-cursos" data-slug="cursos-para-concursos"  data-taxonomy="categoria" data-page="2">				
				Carregar mais
			</a>
		</section>

		<section class="section-cursos">
			<ul class="lista-cursos cursos-testes" id="ul-cursos-de-testes-para-concursos">
				<li>
					<svg class="icon-first-li">
					<use xlink:href="#icon-agenda-lapis" />
					</svg>
					<h3>Cursos de testes para concursos</h3>
					<svg class="icon-seta-round">
					<use xlink:href="#icon-seta-round" />
					</svg>
				</li>
				<?php
				$args = array(
					'numberposts' => 7,
					'offset' => 0,
					'tax_query' => array(
						array(
							'taxonomy' => 'segmento',
							'field' => 'slug',
							'terms' => 'cursos-de-testes-para-concursos',
						),
					),
					'orderby' => 'post_date',
					'order' => 'DESC',
					'post_type' => 'cursos',
					'post_status' => 'publish',
					'suppress_filters' => true );

				$cursos_de_testes_para_concursos = new WP_Query( $args );
				if ( $cursos_de_testes_para_concursos ) :
					while ( $cursos_de_testes_para_concursos->have_posts() ) : $cursos_de_testes_para_concursos->the_post();
						get_template_part( 'content', 'curso' );
					endwhile;
				endif;
				?>
			</ul>
			<a href="javascript:void(0)" class="carregar-mais btn-more-cursos" data-slug="cursos-de-testes-para-concursos"  data-taxonomy="categoria" data-page="2">Carregar mais</a> 
		</section>
		<section class="section-cursos">
			<ul class="lista-cursos aula-unica" id="ul-aula-unica">
				<li>
					<svg class="icon-first-li">
					<use xlink:href="#icon-papel-dobrado" />
					</svg>
					<h3>Aula única</h3>
					<svg class="icon-seta-round">
					<use xlink:href="#icon-seta-round" />
					</svg>
				</li>
				<?php
				$args = array(
					'numberposts' => 7,
					'tax_query' => array(
						array(
							'taxonomy' => 'segmento',
							'field' => 'slug',
							'terms' => 'aula-unica',
						),
					),
					'orderby' => 'post_date',
					'order' => 'DESC',
					'post_type' => 'cursos',
					'post_status' => 'publish' );

				$cursos_aula_unica = new WP_Query( $args );

				if ( $cursos_aula_unica ) :
					while ( $cursos_aula_unica->have_posts() ) : $cursos_aula_unica->the_post();
						get_template_part( 'content', 'curso' );
					endwhile;
				endif;
				?>
			</ul>
			<a href="javascript:void(0)" class="carregar-mais btn-more-cursos" data-slug="aula-unica"  data-taxonomy="categoria" data-page="2">Carregar mais</a> 
		</section>

		<section class="section-cursos">
			<ul class="lista-cursos isoladas-concursos" id="ul-isoladas-para-concursos">
				<li>
					<svg class="icon-first-li">
					<use xlink:href="#icon-agenda" />
					</svg>
					<h3>Isoladas para concursos</h3>
					<svg class="icon-seta-round">
					<use xlink:href="#icon-seta-round" />
					</svg>
				</li>
				<?php
				$args = array(
					'numberposts' => 7,
					'tax_query' => array(
						array(
							'taxonomy' => 'segmento',
							'field' => 'slug',
							'terms' => 'isoladas-para-concursos',
						),
					),
					'orderby' => 'post_date',
					'order' => 'DESC',
					'post_type' => 'cursos',
					'post_status' => 'publish' );

				$cursos_isoladas_para_concursos = new WP_Query( $args );

				if ( $cursos_isoladas_para_concursos ) :
					while ( $cursos_isoladas_para_concursos->have_posts() ) : $cursos_isoladas_para_concursos->the_post();
						get_template_part( 'content', 'curso' );
					endwhile;
				endif;
				?>
			</ul>
			<a href="javascript:void(0)" class="carregar-mais btn-more-cursos" data-slug="isoladas-para-concursos"  data-taxonomy="categoria" data-page="2">Carregar mais</a> 
		</section>

		<section class="section-cursos">
			<ul class="lista-cursos cursos-praia" id="ul-p-r-a-i-a">
				<li>
					<svg class="icon-first-li">
					<use xlink:href="#icon-lapis" />
					</svg>
					<h3>P.R.A.I.A</h3>
					<svg class="icon-seta-round">
					<use xlink:href="#icon-seta-round" />
					</svg>
				</li>
				<?php
				$args = array(
					'numberposts' => 1,
					'tax_query' => array(
						array(
							'taxonomy' => 'segmento',
							'field' => 'slug',
							'terms' => 'p-r-a-i-a',
						),
					),
					'orderby' => 'post_date',
					'order' => 'DESC',
					'post_type' => 'cursos',
					'post_status' => 'publish' );

				$cursos_praia = new WP_Query( $args );

				if ( $cursos_praia ) :
					while ( $cursos_praia->have_posts() ) : $cursos_praia->the_post();
						get_template_part( 'content', 'curso' );
					endwhile;
				endif;
				?>
			</ul>
			<a href="javascript:void(0)" class="carregar-mais btn-more-cursos" data-slug="p-r-a-i-a"  data-taxonomy="categoria" data-page="2">Carregar mais</a> 
		</section>

		<section class="section-cursos">
			<ul class="lista-cursos nuce-ifpe" id="ul-nuce-ifpb">
				<li>
					<svg class="icon-first-li">
					<use xlink:href="#icon-jornal-aberto" />
					</svg>
					<h3>NUCE IFPE</h3>
					<svg class="icon-seta-round">
					<use xlink:href="#icon-seta-round" />
					</svg>	
				</li>
				<?php
				$args = array(
					'numberposts' => 7,
					'tax_query' => array(
						array(
							'taxonomy' => 'segmento',
							'field' => 'slug',
							'terms' => 'nuce-ifpb',
						),
					),
					'orderby' => 'post_date',
					'order' => 'DESC',
					'post_type' => 'cursos',
					'post_status' => 'publish' );

				$cursos_nuce_ifpb = new WP_Query( $args );

				if ( $cursos_nuce_ifpb ) :
					while ( $cursos_nuce_ifpb->have_posts() ) : $cursos_nuce_ifpb->the_post();
						get_template_part( 'content', 'curso' );
					endwhile;
				endif;
				?>
			</ul>
			<a href="javascript:void(0)" class="carregar-mais btn-more-cursos" data-slug="nuce-ifpb"  data-taxonomy="categoria" data-page="2">Carregar mais</a> 
		</section>
	</div>
	<section id="cadastre-agora">
		<div class="content">
			<div class="texto">
				<header>
					<h2>Cadastre-se agora <span class="regular">e tenha acesso</span><span class="bold">ao conteúdo exclusivo</span></h2>
				</header>
				<h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi leo turpis, accumsan in consequat ut, tincidunt eget felis. Etiam eu pulvinar augue.</h3>
				<a href="javascript:void(0)" title="Saiba mais" class="saiba-mais">
					<span>Saiba mais</span>
					<svg>
					<use xlink:href="#icon-seta-sharp" />
					</svg>
				</a>
			</div>
		</div>
	</section>
</section>
<?php include ("footer.php"); ?>