<?php
get_header();
the_post();
?>
<section id="produtos" class="interna">
	<div class="content">
		<header class="header-padrao">
			<h2 class="icon-sacola">Produtos</h2>
		</header>
		<div class="col1">
			<div class="detalhes-produto">
				<?php the_post_thumbnail( '170x170' ) ?>
				<!--<img src="imagens/temporarias/produto-110-170.png" width="110" height="170" alt="Imagem do produto" />-->
				<h3><?php the_title(); ?></h3>
				<h4>R$ <?php the_field( 'produto_valor' ) ?></h4>
				<a href="javascript:void(0)" class="comprar-agora"><span class="icon-sacola">Comprar agora</span></a>
			</div>
			<div class="conteudo conteudo-padrao">
				<header>
					<h3><?php the_title(); ?></h3>
				</header>
				<?php the_content(); ?>
				<a href="javascript:void(0)" class="voltar-para-a-lista">Voltar para a lista</a>
			</div>
		</div>
		<aside class="col2">
			<header>
				<h2 class="icon-sacola">Outros produtos</h2>
			</header>
			<?php
//			echo get_the_ID();/
			// WP_Query arguments
			$args_produtos = array(
				'post_type' => 'produto',
				'posts_per_page' => '5',
				'post__not_in' => array(get_the_ID())
			);

			// The Query
			$query_produto = new WP_Query( $args_produtos );

			// The Loop
			if ( $query_produto->have_posts() ) :
				?>
				<ul>
					<?php
					while ( $query_produto->have_posts() ) : $query_produto->the_post();
						get_template_part( 'content', 'produto' );
					endwhile;
					?>
				</ul>
			<?php endif; ?>
			<a href="javascript:void(0)" class="mais-produtos"><span class="icon-seta-simples">Mais produtos</span></a>
		</aside>
	</div>
</section>
<?php get_footer(); ?>