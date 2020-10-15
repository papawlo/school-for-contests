<?php
get_header();
?>
<section id="noticias" class="listagem">
	<div class="content" role="main">
		<header class="header-padrao">
			<h2 class="icon-jornal-dobrado">Notícias</h2>
		</header>

		<?php if ( have_posts() ) : ?>
			<ul class="lista-noticias">

				<?php
				// Start the Loop.
				while ( have_posts() ) : the_post();
				
					get_template_part( 'content' );

				endwhile;

				// Page navigation.
				odin_paging_nav();
				?>
			</ul>
			<a href="listagem-noticias.php" title="Carregar mais" class="carregar-mais">Carregar mais</a>
			<?php
		else :
			// If no content, include the "No posts found" template.
			get_template_part( 'content', 'none' );
		endif;
		?>
	</div><!-- #content -->
	<?php get_sidebar( "cadastre-se" ) ?>
</section><!-- #primary -->

<?php
get_footer();
