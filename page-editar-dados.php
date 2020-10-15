<?php get_header(); ?>
<section id="editar-dados">
	<div class="content">
		<header class="header-padrao">
			<svg>
			<use xlink:href="#icon-lapis" />
			</svg>
			<h2>Editar dados</h2>
		</header>
		<aside class="col1">
			<ul>
				<li>
					<a href="javascript:void(0)" title="Notícias">Notícias</a>
				</li>
				<li>
					<a href="javascript:void(0)" title="Cursos">Cursos</a>
				</li>
				<li>
					<a href="javascript:void(0)" title="Downloads">Downloads</a>
				</li>
			</ul>
		</aside>
		<?php wc_print_notices(); ?>

		<form action="" method="post" class="form-principal">			
			<?php do_action( 'woocommerce_register_form_start' ); ?>
		</form>
	</div>
</section>
<?php get_footer(); ?>