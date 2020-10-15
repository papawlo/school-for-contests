<?php 
/*
 * Template Name: O Nuce
 */
get_header(); ?>
<section id="o-nuce">
	<div class="content">
		<aside>
			<ul>
				<li><a class="active" href="#historia" title="História">História</a></li>
				<li><a href="#estrutura" title="Estrutura">Estrutura</a></li>
				<li><a href="#equipe" title="Equipe">Equipe</a></li>
			</ul>
		</aside>
		<div class="conteudo">

			<section id="historia">
				<?php
				$page_slug = 'o-nuce/historia/';
				$page_data = get_page_by_path( $page_slug );
				?>
				<?php echo apply_filters( 'the_content', $page_data->post_content ); ?>
			</section>

			<section id="estrutura">
				<?php
				$page_slug = 'o-nuce/estrutura/';
				$page_data = get_page_by_path( $page_slug );
				?>

				<?php
				$images = get_field( 'estrutura_galeria', $page_data->ID );

				if ( $images ):
					?>
					<ul class="lista-imagens-estrutura">
						<?php foreach ( $images as $image ): ?>
							<li>
								<a href="<?php echo $image['url']; ?>" class="lightbox" rel="lightbox[gallery]">
									<img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt']; ?>" />
								</a>
								<p><?php echo $image['caption']; ?></p>
							</li>
						<?php endforeach; ?>
					</ul>
				<?php endif; ?>
				<?php echo apply_filters( 'the_content', $page_data->post_content ); ?>
			</section>
			<section id="equipe">
				<?php
				$page_slug = 'o-nuce/equipe/';
				$page_data = get_page_by_path( $page_slug );
				$page_id = $page_data->ID;
				?>
				<div class="limitador">
					<header>
						<h2 class="tit-padrao-pagina">A equipe NUCE</h2>
						<?php echo apply_filters( 'the_content', $page_data->post_content ); ?>
					</header>
				</div>
				<section id="professores-equipe">
					<h2 class="tit-padrao-pagina">Professores</h2>
					<?php
					if ( get_field( 'equipe', $page_id ) ):
						?>
						<ul class="lista-equipe">
							<?php
							while ( has_sub_field( 'equipe', $page_id ) ):
								if ( get_sub_field( "equipe_tipo_de_empregado" ) == "professor" ):
									?>
									<li>
										<?php
										$image = get_sub_field( "equipe_foto" );
										$size = '156x156'; // (thumbnail, medium, large, full or custom size)
										if ( $image ) {
											echo wp_get_attachment_image( $image, $size );
										}
										?>
										<h3><?php the_sub_field( "equipe_nome" ); ?></h3>
										<h4><?php the_sub_field( "equipe_materia" ); ?></h4>
										<a href="javascript:void(0)" title="Ver perfil" class="ver-perfil">Ver perfil</a>
										<div class="flutuante-informacao">
											<?php
											$image = get_sub_field( "equipe_foto" );
											$size = '156x156'; // (thumbnail, medium, large, full or custom size)
											if ( $image ) {
												echo wp_get_attachment_image( $image, $size );
											}
											?>
											<h3><?php the_sub_field( "equipe_nome" ); ?></h3>
											<h4><?php the_sub_field( "equipe_materia" ); ?></h4>
											<p><?php the_sub_field( "equipe_descricao" ); ?></p>
											<button class="bt-fechar">
												<svg>
												<use xlink:href="#icon-fechar" />
												</svg>
											</button>
										</div>
									</li>
								<?php endif; ?>
							<?php endwhile; ?>
						</ul>
					<?php endif; // get_field('equipe', $page_id):          ?>
					<a href="javascript:void(0)" class="carregar-mais equipe">Carregar mais</a>
				</section>
				<section id="funcionarios-equipe">
					<h2 class="tit-padrao-pagina">Funcionários</h2>
					<?php
					if ( get_field( 'equipe', $page_id ) ):
						?>
						<ul class="lista-equipe">
							<?php
							while ( has_sub_field( 'equipe', $page_id ) ):
								if ( get_sub_field( "equipe_tipo_de_empregado" ) == "funcionario" ):
									?>
									<li>
										<?php
										$image = get_sub_field( "equipe_foto" );
										$size = '156x156'; // (thumbnail, medium, large, full or custom size)
										if ( $image ) {
											echo wp_get_attachment_image( $image, $size );
										}
										?>									
										<h3><?php the_sub_field( "equipe_nome" ); ?></h3>
										<h4><?php the_sub_field( "equipe_materia" ); ?></h4>
										<a href="javascript:void(0)" title="Ver perfil" class="ver-perfil">Ver perfil</a>
										<div class="flutuante-informacao">
											<?php
											$image = get_sub_field( "equipe_foto" );
											$size = '156x156'; // (thumbnail, medium, large, full or custom size)
											if ( $image ) {
												echo wp_get_attachment_image( $image, $size );
											}
											?>
											<h3><?php the_sub_field( "equipe_nome" ); ?></h3>
											<h4><?php the_sub_field( "equipe_materia" ); ?></h4>
											<p><?php the_sub_field( "equipe_descricao" ); ?></p>
											<button class="bt-fechar">
												<svg>
												<use xlink:href="#icon-fechar" />
												</svg>
											</button>
										</div>
									</li>
									<?php
								endif;
							endwhile;
							?>
						</ul>
					<?php endif; // get_field('equipe', $page_id)   ?>
					<a href="javascript:void(0)" class="carregar-mais equipe">Carregar mais</a>
				</section>
			</section>
		</div>
	</div>
</section>

<?php get_footer(); ?>