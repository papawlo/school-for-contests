<?php get_header(); the_post();?>
<section id="carrinho-pagina">
	<div class="content">
		<header class="header-padrao">
			<h2 class="icon-carrinho-vazio">Carrinho</h2>
		</header>	
		<?php echo the_content();?>
	</div>
</section>
<?php get_footer(); ?>