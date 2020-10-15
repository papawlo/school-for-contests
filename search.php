<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package Nuce
 * @since 2.2.0
 */
get_header();
?>
<?php
global $wp_query;
$total_results = $wp_query->found_posts;
?>
<section id="resultado-busca">
	<header>
		<div class="content" role="main">
			<form class="searchform" action="<?php bloginfo( 'url' ); ?>" method="get" class="form-busca">
				<input type="hidden" name="type" value="<?php echo get_query_var( 'type' ); ?>" />
				<fieldset>
					<input type="text" name="s" placeholder="Buscar cursos, notícias ou downloads" value="<?php echo get_search_query(); ?>"/>
					<button type="submit">
						<svg>
						<use xlink:href="#icon-busca" />
						</svg>
					</button>
				</fieldset>
			</form>
		</div>
	</header>
	<div class="content">
		<aside class="col1">
			<ul>
				<li>
					<a href="<?php bloginfo( 'url' ) ?>/?s=<?php echo get_search_query() ?>&type=post" title="Notícias">Notícias</a>
				</li>
				<li>
					<a href="<?php bloginfo( 'url' ) ?>/?s=<?php echo get_search_query() ?>&type=cursos" title="Cursos">Cursos</a>
				</li>
				<li>
					<a href="<?php bloginfo( 'url' ) ?>/?s=<?php echo get_search_query() ?>&type=downloads" title="Downloads">Downloads</a>
				</li>
			</ul>
		</aside>
		<div class="col2">
			<header>
				<!--<h3>Exibindo 1 a 10 de 132 resultados.</h3>-->
				<h3><?php printf( _n( 'Exibindo 1 a 10  %d resultado', 'Exibindo 1 a %d resultados.', $total_results, 'tws' ), $total_results ); ?></h3>
				<?php // printf(__('RESULTADO DE BUSCA POR : %s', 'tws'), get_search_query()); ?>
				<!--<h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'odin' ), get_search_query() ); ?></h1>-->
			</header>
			<?php
//			$args4 = array(
//				'post_type' => 'downloads',
//				'posts_per_page' => 1//mudar quando for online
//			);
//			$my_query = new WP_Query( $args4 );
			?>

			<?php
//			if ( $my_query ) :
			if ( have_posts() ) :
				?>
				<ul>
					<?php
					// Start the Loop.
//					while ( $my_query->have_posts() ) : $my_query->the_post();
					while ( have_posts() ) : the_post();
						get_template_part( 'content', 'search' );
					endwhile;
					?>
				</ul>
				<a href="javascript:void(0)" class="carregar-mais btn-more-search" data-page="2" data-term="<?php echo get_search_query(); ?>">Carregar mais</a>
				<?php
			else :
				?>
				<ul>

					<li>
						<h5>Desculpe</h5>
						<h3>Nenhum resultado encontrado</h3>					
					</li>
				</ul>
			<?php endif;
			?>

		</div>
	</div>
</section>
<?php
get_footer();
