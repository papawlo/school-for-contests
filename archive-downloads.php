<?php get_header(); ?>
<?php
$tipo_var = get_query_var( 'tipo' );
$area_var = get_query_var( 'area' );
?>
<section id="downloads-pagina">
	<div class="content">
		<header class="header-padrao">
			<svg>
			<use xlink:href="#icon-pasta-download" />
			</svg>
			<h2>Downloads</h2>
		</header>
		<div class="col1">
			<form action="<?php bloginfo( 'url' ) ?>/downloads" method="get" id="form-download-taxonomy">
				<fieldset>
					<legend>Filtre sua<br/>pesquisa</legend>
					<?php
					$areas = get_terms( 'area', array(
						'hide_empty' => 0,
							)
					);
					?>
					<select id="area-de-interesse" name="area">
						<option value="">ÁREA DE INTERESSE</option>
						<?php
						if ( $areas && !is_wp_error( $areas ) ) :
							foreach ( $areas as $area ) {
								$selected = $area_var == $area->slug ? " selected='selected'" : "";
								echo '<option value="' . $area->slug . '"' . $selected . '>' . $area->name . '</option>' . "\n";
							}
						endif;
						?>											
					</select>
					<?php
					$tipos = get_terms( 'tipo', array(
						'hide_empty' => 0,
							) );
					?>
					<select id="tipo-de-arquivo" name="tipo">
						<option value="">TIPO DE ARQUIVO</option>
						<?php
//						if ( $tipo && !is_wp_error( $tipo ) ) :
						foreach ( $tipos as $tipo ) {
							$selected = $tipo_var == $tipo->slug ? " selected='selected'" : "";
							echo '<option value="' . $tipo->slug . '"' . $selected . '>' . $tipo->name . '</option>' . "\n";
						}
//						endif;
						?>						
					</select>
					<button type="submit">
						<span>Buscar</span>												
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
					$userRole = $current_user->roles;
					/*
					 * 
					 * Para teste descomente
					 * 					
					 * */
					$args4 = array(
						'post_type' => 'downloads',
//						'posts_per_page' => 1//mudar quando for online
					);
					$my_query = new WP_Query( $args4 );

					if ( $my_query ) :
						$logado = nuce_check_user_role( 'customer' );
						while ( $my_query->have_posts() ) : $my_query->the_post();
//					if ( have_posts() ):
//						while ( have_posts() ): the_post();
							?>
							<tr>
								<?php
								if ( $logado ) {
									?>
									<td><a href="<?php echo get_post_meta( get_the_ID(), 'download_arquivo', true ); ?>" title=""><?php the_title(); ?></a></td>

									<td class="td-download"><a href="<?php echo get_post_meta( get_the_ID(), 'download_arquivo', true ); ?>" target="_blank">
											<svg>
											<use xlink:href="#icon-quadrado-download" />
											</svg>
										</a>
									</td> 
									<?php
								} else {
									?>
									<?php if (get_post_meta( get_the_ID(), 'download_visibilidade', true )): ?>
									<td class="td-first-restrita"><a href="<?php bloginfo( 'url' ) ?>/my-account/" title="Acesso restrito para usuários registrados"><?php the_title(); ?></a></td>									
									<td class="td-download">
										<a href="<?php bloginfo( 'url' ) ?>/my-account/"  title="Acesso restrito para usuários registrados">
											<svg>
											<use xlink:href="#icon-cadeado" />
											</svg>
										</a>
									</td> 
									<?php else: ?>
									<td><a href="<?php echo get_post_meta( get_the_ID(), 'download_arquivo', true ); ?>" title=""><?php the_title(); ?></a></td>

									<td class="td-download"><a href="<?php echo get_post_meta( get_the_ID(), 'download_arquivo', true ); ?>" >
											<svg>
											<use xlink:href="#icon-quadrado-download" />
											</svg>
										</a>
									</td> 
									<?php endif; ?>
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
				<?php /* <li class="gabaritos">
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
				  </li> */ ?>
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