<?php
$term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );
get_header();
?>
<section id="downloads-pagina">
	<div class="content">
		<header class="header-padrao">
			<svg>
			<use xlink:href="#icon-pasta-download" />
			</svg>
			<h2>Downloads por Área de Interesse</h2>
		</header>
		<div class="col1">
			<form action="<?php bloginfo('url')?>/downloads" method="get" id="form-download-taxonomy">
				<fieldset>
					<legend>Filtre sua<br/>pesquisa</legend>
					<?php
					$areas = get_terms( 'area', array(
						'hide_empty' => 0,
							)
					);
					?>
					<select id="area-de-interesse" name="area">
						<option value="">Nenhuma área selecionado</option>
						<?php
						if ( $areas ) {
							foreach ( $areas as $area ) {	
								$selected = $area->slug == $area->slug ? " selected='selected'" : "";	
								echo '<option value="' .  $area->slug . '"' . $selected . '>' . $area->name . '</option>' . "\n";
							}
						}
						?>											
					</select>
					<?php
					$tipos = get_terms( 'tipo', array(
						'hide_empty' => 0,
							) );
					?>
					<select id="tipo-de-arquivo" name="tipo">
						<option value="">Nenhum tipo selecionado</option>
						<?php
						if ( $tipos ) {
							foreach ( $tipos as $tipo ) {							
								echo '<option value="' . $tipo->slug . '">' . $tipo->name . '</option>' . "\n";
							}
						}
						?>						
					</select>
					<button type="submit" style="height: 20px;">
						<span>Buscar</span>						
						<svg style="height: 20px;width: 20px;">
						<use xlink:href="#icon-aviao"/>
						</svg>
					</button>
				</fieldset>
			</form>
			<div class="detalhe-escolha">
				<div class="arquivo outros">
					<div class="container-icone">
						<svg>
						<use xlink:href="#icon-lapis-regua" />
						</svg>
						<h3>Todos</h3>
					</div>
				</div>
				<h4>Visando oferecer mais conforto para nossos alunos, e maior agilidade na entrega de conteúdos, disponibilizamos para downloads algumas aulas, provas e editais de concursos.</h4>
			</div>
			<div class="coluna-tabela">
				<table>
					<?php
					$args = array(
						'post_type' => 'downloads',
//						'posts_per_page' => 1, //mudar quando for online
						'tax_query' => array(
							array(
								'taxonomy' => 'area',
								'field' => 'slug',
								'terms' => $term->slug
							)
						)
					);
					$areas_loop = new WP_Query( $args );
					$userRole = $current_user->roles;
					if ( $areas_loop ) :
						while ( $areas_loop->have_posts() ) : $areas_loop->the_post();
							?>
							<tr>
								<?php
								if ( is_user_logged_in() && $userRole[0] == 'customer' ) {
									?>
									<td><a href="<?php echo get_post_meta( get_the_ID(), 'download_arquivo', true ); ?>" title=""><?php the_title(); ?></a></td>
									<td><a href="<?php echo get_post_meta( get_the_ID(), 'download_arquivo', true ); ?>">
											<svg>
											<use xlink:href="#icon-quadrado-download">
											</svg>
										</a>
									</td>
									<?php
								} else {
									?>
									<td><a href="#" title=""><?php the_title(); ?></a></td>
									<td>
										<a href="javascript:void(0)">
											<svg>
											<use xlink:href="#icon-quadrado-download">
											</svg>
										</a>
									</td> 
								<?php } ?>
							</tr>		
							<?php
						endwhile; // end while
					endif // end if
					?>
				</table>
				<a href="javascript:void(0)" title="Carregar mais" class="carregar-mais btn-more-downloads" data-slug="">Carregar mais</a>
			</div>
		</div>
		<aside class="col2">
			<header>
				<svg>
				<use xlink:href="#icon-pasta-download" />
				</svg>
				<h3>Outros downloads</h3>
			</header>
			<ul>
				<li class="provas">
					<a href="<?php
					$term = get_term_by( 'slug', 'provas', 'tipo' );
					echo get_term_link( $term );
					?>" title="Provas">
						<div class="container-icone">
							<svg>
							<use xlink:href="#icon-lapis-regua" />
							</svg>
							<h3>Provas</h3>
						</div>
					</a>
				</li>
				<li class="editais">
					<a href="<?php
					$term = get_term_by( 'slug', 'editais', 'tipo' );
					echo get_term_link( $term );
					?>" title="Editais">
						<div class="container-icone">
							<svg>
							<use xlink:href="#icon-papel-sobre" />
							</svg>
							<h3>Editais</h3>
						</div>
					</a>
				</li>
				<li class="gabaritos">
					<a href="<?php
					$term = get_term_by( 'slug', 'gabaritos', 'tipo' );
					echo get_term_link( $term );
					?>" title="Gabaritos">
						<div class="container-icone">
							<svg>
							<use xlink:href="#icon-papel-dobrado" />
							</svg>
							<h3>Gabaritos</h3>
						</div>
					</a>
				</li>
				<li class="outros">
					<a href="<?php
					$term = get_term_by( 'slug', 'outros', 'tipo' );
					echo get_term_link( $term );
					?>" title="Outros">
						<div class="container-icone">
							<svg>
							<use xlink:href="#icon-lapis-regua" />
							</svg>
							<h3>Outros</h3>
						</div>
					</a>
				</li>
			</ul>
		</aside>
	</div>
</section>

<?php get_footer(); ?>