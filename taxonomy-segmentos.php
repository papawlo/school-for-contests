<?php
$term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );
get_header();
?>
<section id="cursos" class="listagem">
	<div class="content">
		<header class="header-padrao">
			<svg>
			<use xlink:href="#icon-prancheta-ok" />
			</svg>
			<h2>Cursos</h2>
		</header>

		<?php
		switch ( $term->slug ) {
			case 'cursos-para-concursos':
				?>
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
						if ( have_posts() ):
							while ( have_posts() ): the_post();
								get_template_part( 'content', 'curso' );
							endwhile;
						endif;
						?>
					</ul>
					<a href="javascript:void(0)" class="carregar-mais btn-more-cursos" data-slug="cursos-para-concursos"  data-taxonomy="categoria" data-page="2">				
						Carregar mais
					</a>
				</section>
				<?php
				break;
			case 'cursos-de-testes-para-concursos':
				?>
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
						if ( have_posts() ):
							while ( have_posts() ): the_post();
								get_template_part( 'content', 'curso' );
							endwhile;
						endif;
						?>
					</ul>
					<a href="javascript:void(0)" class="carregar-mais btn-more-cursos" data-slug="cursos-de-testes-para-concursos"  data-taxonomy="categoria" data-page="2">Carregar mais</a> 
				</section><?php
				break;
			case 'aula-unica':
				?>
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
						if ( have_posts() ):
							while ( have_posts() ): the_post();
								get_template_part( 'content', 'curso' );
							endwhile;
						endif;
						?>
					</ul>
					<a href="javascript:void(0)" class="carregar-mais btn-more-cursos" data-slug="aula-unica"  data-taxonomy="categoria" data-page="2">Carregar mais</a> 
				</section><?php
				break;
			case 'isoladas-para-concursos':
				?>
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
						if ( have_posts() ):
							while ( have_posts() ): the_post();
								get_template_part( 'content', 'curso' );
							endwhile;
						endif;
						?>
					</ul>
					<a href="javascript:void(0)" class="carregar-mais btn-more-cursos" data-slug="isoladas-para-concursos"  data-taxonomy="categoria" data-page="2">Carregar mais</a> 
				</section>
				<?php
				break;
			case 'p-r-a-i-a':
				?>
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
						if ( have_posts() ):
							while ( have_posts() ): the_post();
								get_template_part( 'content', 'curso' );
							endwhile;
						endif;
						?>
					</ul>
					<a href="javascript:void(0)" class="carregar-mais btn-more-cursos" data-slug="p-r-a-i-a"  data-taxonomy="categoria" data-page="2">Carregar mais</a> 
				</section>
				<?php
				break;
			case 'nuce-ifpb':
				?>
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
						if ( have_posts() ):
							while ( have_posts() ): the_post();
								get_template_part( 'content', 'curso' );
							endwhile;
						endif;
						?>
					</ul>
					<a href="javascript:void(0)" class="carregar-mais btn-more-cursos" data-slug="nuce-ifpb"  data-taxonomy="categoria" data-page="2">Carregar mais</a> 
				</section>
				<?php
				break;
			default:
				break;
		}
		?>

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
<?php
get_footer();
