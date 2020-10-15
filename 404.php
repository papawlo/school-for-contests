<?php
get_header();
?>
<section id="pagina-404">
	<div class="content" role="main">
		<img src="<?php bloginfo( 'template_url' ); ?>/assets/images/foto-estudante.svg" alt="Foto do estudante da 404" class="foto-estudante" />
		<div class="texto">
			<h2>404</h2>
			<h3><?php _e( 'Página não encontrada', 'nuce' ); ?></h3>
			<h4><?php _e( 'A página que você está procurando não existe ou não foi encontrada', 'odin' ); ?>, <a href="#" onclick="window.history.back();
					return false;" title="">clique aqui para voltar para a página anterior.</a></h4>			
		</div><!-- .texto -->
	</div><!-- .content -->
</section><!-- #pagina-404 -->	
<?php
get_footer();
