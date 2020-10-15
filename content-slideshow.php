<?php $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), '1600x567' );?>
<div class="item" style="background-image: url(<?php echo $large_image_url[0]; ?>)">
	<h2 class="nome-categoria u-xs-hidden">Cursos em destaque</h2>
	<div class="content u-xs-sizeFull">
		<div class="informacoes Slider-content u-xs-sizeFull">
			<?php
			$id_imagem_auxiliar = get_post_meta( $post->ID, 'slideshow_imagem_logo', true );
			$auxiliar_image = wp_get_attachment_image_src( $id_imagem_auxiliar, '188x188' );
			?>
			<img src="<?php echo $auxiliar_image[0]; ?>" alt="Logo do concurso" />
			<h3 class="Slider-title"><?php the_title(); ?></h3>
			<h4 class="Slider-subtitle"><?php echo get_post_meta( $post->ID, 'slideshow_subtitulo', true ); ?></h4>
			<h5 class="Slider-teaser">Início em <?php echo get_post_meta( $post->ID, 'slideshow_terceiro_titulo', true ); ?></h5>
			<a href="<?php echo get_post_meta( $post->ID, 'slideshow_link', true ); ?>" target="<?php echo get_post_meta( $post->ID, 'slideshow_url_destino', true ); ?>" target="self" class="saiba-mais">Saiba mais sobre o curso</a>
		</div>
	</div>
</div>