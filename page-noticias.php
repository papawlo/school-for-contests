<?php
/*
  Template Name: Page Of Posts
 */
/**
 * The template for displaying Archive pages.
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each specific one. For example, Twenty Thirteen
 * already has tag.php for Tag archives, category.php for Category archives,
 * and author.php for Author archives.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Odin
 * @since 2.2.0
 */
get_header();
?>
<section id="noticias" class="listagem Section u-xs-noMargin">
	<div class="content u-xs-sizeFull u-xs-noMargin" role="main">
		<header class="header-padrao Section-header">
			<svg class="Section-icon">
				<use xlink:href="#icon-jornal-dobrado" />
			</svg>
			<h2>Notícias</h2>
		</header>

		<?php
		// WP_Query arguments
		$args = array(
			'posts_per_page' => 6,
			'post_type' => 'post',
		);

		// The Query
		$query = new WP_Query( $args );

		// The Loop
		if ( $query->have_posts() ) :
			?>
			<ul class="lista-noticias News u-xs-noMargin">

				<?php
				// Start the Loop.
				$i = 1;
				$j = 0;
				while ( $query->have_posts() ) : $query->the_post();

					/*
					 * Include the post format-specific template for the content. If you want to
					 * use this in a child theme, then include a file called called content-___.php
					 * (where ___ is the post format) and that will be used instead.
					 */
					include(locate_template( 'content.php' ));

				endwhile;
				?>
			</ul>

			<a href="#" title="Carregar mais" class="carregar-mais btn-more-noticias Section-button">
				<span>Carregar mais</span>
<!--				<svg>
				<use xlink:href="#icon-seta-sharp" />
				</svg>-->
			</a>
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
