<?php $term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) ); ?>
<section id="downloads-pagina">
	<div class="content">
		<header class="header-padrao">
			<h2 class="icon-pasta-download">Downloads</h2>
		</header>
		<div class="col1">
			<form action="#" method="#">
				<fieldset>
					<legend>Filtre sua<br/>pesquisa</legend>
					<?php
					$args = array(
						'orderby' => 'name',
						'order' => 'ASC',
						'hide_empty' => false,
						'exclude' => array(),
						'exclude_tree' => array(),
						'include' => array(),
						'number' => '',
						'fields' => 'all',
						'slug' => '',
						'parent' => '',
						'hierarchical' => true,
						'child_of' => 0,
						'get' => '',
						'name__like' => '',
						'description__like' => '',
						'pad_counts' => false,
						'offset' => '',
						'search' => '',
						'cache_domain' => 'core'
					);
					$areas = get_terms( 'area', $args );
					?>
					<select id="area-de-interesse">
						<?php
						if ( $areas ) {
							foreach ( $areas as $area ) {
								$area_link = get_term_link( $area );
								// If there was an error, continue to the next term.
								if ( is_wp_error( $area_link ) ) {
									continue;
								}
								echo '<option value="' . esc_url( $area_link ) . '">' . $area->name . '</option>' . "\n";
							}
						}
						?>											
					</select>
					<?php
					$args2 = array(
						'orderby' => 'name',
						'order' => 'ASC',
						'hide_empty' => false,
						'exclude' => array(),
						'exclude_tree' => array(),
						'include' => array(),
						'number' => '',
						'fields' => 'all',
						'slug' => '',
						'parent' => '',
						'hierarchical' => true,
						'child_of' => 0,
						'get' => '',
						'name__like' => '',
						'description__like' => '',
						'pad_counts' => false,
						'offset' => '',
						'search' => '',
						'cache_domain' => 'core'
					);
					$tipos = get_terms( 'tipo', $args2 );
					?>
					<select id="tipo-de-arquivo">
						<?php
						if ( $tipos ) {
							foreach ( $tipos as $tipo ) {
								$tipo_link = get_term_link( $tipo );
								// If there was an error, continue to the next term.
								if ( is_wp_error( $tipo_link ) ) {
									continue;
								}
								echo '<option value="' . esc_url( $tipo_link ) . '">' . $tipo->name . '</option>' . "\n";
							}
						}
						?>						
					</select>
				</fieldset>
			</form>
			<div class="detalhe-escolha">
				<div class="arquivo">
					<h3 class="todos icon-pasta-download">Todos</h3>
				</div>
				<h4>Visando oferecer mais conforto para nossos alunos, e maior agilidade na entrega de conteúdos, disponibilizamos para downloads algumas aulas, provas e editais de concursos.</h4>
			</div>
			<div class="coluna-tabela">
				<table>
					<?php
					global $current_user;
					$userRole = $current_user->roles;
					if ( have_posts() ):
						while ( have_posts() ) : the_post();
							?>
							<tr>
								<?php
								if ( is_user_logged_in() && $userRole[0] == 'customer' ) {
									?>
									<td><a href="<?php echo get_post_meta( get_the_ID(), 'download_arquivo', true ); ?>" title=""><?php the_title(); ?></a></td>
									<td><a href="<?php echo get_post_meta( get_the_ID(), 'download_arquivo', true ); ?>" class="icon-quadrado-download"></a></td> 
									<?php
								} else {
									?>
									<td><a href="#" title=""><?php the_title(); ?></a></td>
									<td><a href="#" class="icon-quadrado-download"></a></td> 
								<?php } ?>
							</tr>		
							<?php
						endwhile; // end while
					endif // end if
					?>
				</table>
				<a href="javascript:void(0)" title="Carregar mais" class="carregar-mais btn-more-downloads">Carregar mais</a>
			</div>
		</div>
		<aside class="col2">
			<header>
				<h3 class="icon-pasta-download">Outros downloads</h3>
			</header>
			<ul>
				<li>
					<a href="<?php
					$term1 = get_term_by( 'slug', 'provas', 'tipo' );
					echo get_term_link( $term1 );
					?>" title="Provas">
						<h4 class="provas icon-papel-dobrado">Provas</h4>
					</a>
				</li>
				<li>
					<a href="<?php
					$term2 = get_term_by( 'slug', 'editais', 'tipo' );
					echo get_term_link( $term2 );
					?>" title="Editais">
						<h4 class="editais icon-jornal-duplo">Editais</h4>
					</a>
				</li>
				<li>
					<a href="<?php
					$term3 = get_term_by( 'slug', 'gabaritos', 'tipo' );
					echo get_term_link( $term3 );
					?>" title="Gabaritos">
						<h4 class="gabaritos icon-gabarito-marcado">Gabaritos</h4>
					</a>
				</li>
				<li>
					<a href="<?php
					$term4 = get_term_by( 'slug', 'outros', 'tipo' );
					echo get_term_link( $term4 );
					?>" title="Outros">
						<h4 class="outros icon-lapis-regua-caneta">Outros</h4>
					</a>
				</li>
			</ul>
		</aside>
	</div>
</section>