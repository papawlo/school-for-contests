<?php
if ( isset( $_POST["matricular"] ) ):
	if ( matricula_aluno() ):
		wp_redirect( $_POST["_wp_http_referer"] );
		exit;
	endif;
endif;

get_header();
?>
<?php
if ( isset( $_POST["matricular"] ) ):
	$result = matricula_aluno();
endif;
?>
<section id="cursos" class="interna">
	<div class="content">
		<div class="col1">
			<header class="header-padrao">
				<h2><?php the_title(); ?></h2>
				<div class="addthis">
					<span class='st__hcount' displayText=''></span>
					<span class='st_facebook_hcount' displayText='Facebook'></span>
					<span class='st_twitter_hcount' displayText='Tweet'></span>
				</div>
			</header>
			<section id="dados-gerais">
				<?php
				$curso_turma = get_field( 'curso_turma', get_the_ID() );
				if ( $curso_turma ):
					?>
					<ul>
						<li class="li-inicio">
							<svg>
							<use xlink:href="#icon-aprovacao" />
							</svg>
							<h3><span>Início:</span></h3>
							<ul>
								<?php foreach ( $curso_turma as $turma ) : ?>
									<li>
										<?php echo date( "d/m/Y", strtotime( $turma['curso_turma_data_de_inicio'] ) ) ?> às 
										<?php echo $turma['curso_turma_horario_da_aula'] ?>h
									</li>
								<?php endforeach; ?>
							</ul>							
						</li>
						<li class="li-final">
							<svg>
							<use xlink:href="#icon-fechar-circulo" />
							</svg>
							<h3><span>Final:</span></h3>
							<ul>
								<?php foreach ( $curso_turma as $turma ) : ?>
									<li>
										<?php echo date( "d/m/Y", strtotime( $turma['curso_turma_data_de_finalizacao'] ) ) ?>
									</li>
								<?php endforeach; ?>
							</ul>
						</li>
						<li class="li-duracao">
							<svg>
							<use xlink:href="#icon-calendario" />
							</svg>
							<h3><span>Duração:</span><?php the_field( 'curso_duracao' ); ?></h3>
						</li>
						<!--						<li class="li-horarios">
													<svg>
													<use xlink:href="#icon-relogio" />
													</svg>
													<h3><span>Horários:</span></h3>
													<ul>
						<?php // foreach ( $curso_turma as $turma ) :  ?>
															<li><?php // echo $turma['curso_turma_horario_da_aula']                             ?>h</li>	
						<?php // endforeach;   ?>
													</ul>
												</li>-->
					</ul>
				<?php endif; ?>
			</section>
			<?php if ( get_field( 'curso_video' ) ) { ?>
				<section id="video">
					<header class="header-padrao-curso">
						<svg>
						<use xlink:href="#icon-camera" />
						</svg>
						<h2>Vídeo</h2>
					</header>

					<div class="conteudo">
						<?php the_field( 'curso_video' ); ?>
					</div>
				</section>
			<?php } ?>
			<?php if ( get_field( 'curso_grade_de_aula' ) ) { ?>
				<section id="grade-curso">
					<header class="header-padrao-curso">
						<svg>
						<use xlink:href="#icon-prancheta" />
						</svg>
						<h2>Grade do curso</h2>
					</header>
					<div class="conteudo">
						<?php the_field( 'curso_grade_de_aula' ); ?>
					</div>
				</section>
			<?php } ?>
			<section id="investimento">
				<header class="header-padrao-curso">
					<svg>
					<use xlink:href="#icon-cifrao" />
					</svg>
					<h2>Investimento</h2>
				</header>
				<div class="conteudo">
					<?php the_field( 'curso_investimento' ); ?>
				</div>
			</section>
			<section id="material">
				<header class="header-padrao-curso">
					<svg>
					<use xlink:href="#icon-mapa" />
					</svg>
					<h2>Material incluso</h2>
				</header>
				<div class="conteudo">
					<?php the_field( "curso_material_incluso" ) ?>
				</div>
			</section>

			<?php if ( nuce_check_user_role( 'customer' ) ) { ?>
				<form action="<?php echo site_url( 'matricular' ); ?>" method="post">
					<input type="hidden" name="id_curso" value="<?php the_ID(); ?>">
					<input type="hidden" name="id_aluno" value="<?php echo $user_ID; ?>">

					<select name="turma">
						<?php foreach ( $curso_turma as $turma ) : ?>						
							<option value="<?php echo $turma["curso_turma_codigo_do_mentoria"]; ?>"><?php echo $turma["curso_turma_codigo_do_mentoria"] . "[" . $turma["curso_turma_data_de_inicio"] . " - " . $turma["curso_turma_horario_da_aula"] . "]" ?></option>						
						<?php endforeach; ?>
					</select>
					<select name="tipo_de_aluno">
						<?php foreach ( $curso_turma as $turma ) : //	print_r( $turma );break?>						
							<?php
							foreach ( $turma["curso_turma_valores_repeater"] as $valores ) :
//								print_r( $valores );
								?>							
								<option value="<?php echo $valores["curso_turma_valores_repeater_tipo_de_aluno"] ?>"><?php echo $turma["curso_turma_codigo_do_mentoria"] . "[" . $valores["curso_turma_valores_repeater_tipo_de_aluno"] . " - " . $valores["curso_turma_valores_repeater_valor"] . "]"; ?></option>						
							<?php endforeach; ?>
						<?php endforeach; ?>
					</select>
					<button type="submit" title="Inscrição online" class="inscricao-online">
						<svg>
						<use xlink:href="#icon-lapis-risco" />
						</svg>
						<span>Inscrição online</span>
					</button>	
					<?php wp_nonce_field( 'matricula-nonce' ); ?>
					<input type="hidden" name="matricular" value="true">
				</form>

				<?php
			} else {
				?>
				<a href="<?php echo site_url() ?>/login/" title="Inscrição online" class="inscricao-online">
					<svg>
					<use xlink:href="#icon-lapis-risco" />
					</svg>
					<span>Inscrição online</span>
				</a>
			<?php } ?>
		</div>
		<div class="col2">
			<form action="#" method="#">
				<fieldset>
					<select id="select-cursos">
						<option value="1">1</option>
					</select>
				</fieldset>
			</form>
		</div>
	</div>
</section>

<?php
get_footer();
