<?php
/**
 * The Template for displaying all single posts.
 *
 * @package Odin
 * @since 2.2.0
 */
get_header();
the_post();
?>
<section id="noticias" class="interna Notice">
	<div class="content u-xs-sizeFull">
		<div class="col1 u-xs-sizeFull">
			<header class="Notice-header">
				<h4>
					<svg>
					<use xlink:href="#icon-calendario-preto" />
					</svg>
					<span><?php echo esc_html( get_the_date( 'd/m/Y' ) ) ?></span>
				</h4>
				<h3><?php the_title(); ?></h3>
<!--				<h5><?php the_excerpt(); ?></h5>-->
			</header>
			<div class="fonte-compartilhe">

				<div class="addthis">
					<span class='st__hcount' displayText=''></span>
					<span class='st_facebook_hcount' displayText='Facebook'></span>
					<span class='st_twitter_hcount' displayText='Tweet'></span>
				</div>
			</div>
			<div class="conteudo conteudo-padrao Notice-text">
				<?php the_content(); ?>
			</div>
			<h6 class="fonte Notice-font">Fonte: <?php the_field('post_font'); ?></h6>
			<h6 class="tags Notice-tags"><span class="span-title">Tags: </span><?php the_tags( '<footer class="entry-meta"><span class="tag-links">', ' , ', '</span></footer>' ); ?></h6>
		</div>
		<aside class="col2 Notice-others u-xs-sizeFull">
			<header>
				<svg>
				<use xlink:href="#icon-jornal-dobrado" />
				</svg>
				<h3>Outras notícias</h3>
			</header>
			<ul>
				<?php
				$test = wp_get_archives( array( 'type' => 'postbypost', 'limit' => 6, 'format' => 'html' ) );
				?>
				<li>
					<a href="<?php bloginfo( 'url' ) ?>/noticias/" class="mais-noticias" title="Mais notícias">
						<span>Mais notícias</span>
						<svg>
						<use xlink:href="#icon-seta-round" />
						</svg>
					</a>
				</li>
			</ul>

		</aside>
	</div>
</section>
<?php
get_footer();
