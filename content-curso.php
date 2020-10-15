<li>
	<header>
		<h3><?php the_title(); ?></h3>
	</header>
	<?php
	$curso_turma = get_field( 'curso_turma', get_the_ID() );
	if ( $curso_turma ):
		?>
		<ul class="caracteristicas">
			<li class="data-do-curso">
				<svg>
				<use xlink:href="#icon-aprovacao" />
				</svg>
				<ul>
					<?php foreach ( $curso_turma as $turma ) : ?>
										<!--<li><?php echo date( "d/m/Y", strtotime( $turma['curso_turma_data_de_inicio'] ) )     ?></li>-->
						<li>
							<?php echo date( "d-m-Y", strtotime( $turma['curso_turma_data_de_inicio'] ) )     ?>
							às 
							<?php echo $turma['curso_turma_horario_da_aula'] ?>h
						</li>
					<?php endforeach; ?>
				</ul>
			</li>
			<li class="duracao-do-curso">
				<svg>
				<use xlink:href="#icon-calendario" />
				</svg>
				<span><?php the_field( 'curso_duracao' ); ?></span>
			</li>
<!--			<li class="horario-do-curso">
				<svg>
				<use xlink:href="#icon-relogio" />
				</svg>
				<ul>
					<?php // foreach ( $curso_turma as $turma ) : ?>
						<li><?php // echo $turma['curso_turma_horario_da_aula'] ?>h</li>	
					<?php // endforeach; ?>
				</ul>
			</li>-->
		</ul>
	<?php endif; ?>
	<a href="<?php echo get_permalink( $post->ID ); ?>" class="ir-curso">
		<svg>
		<use xlink:href="#icon-seta-round" />
		</svg>
	</a>
</li>