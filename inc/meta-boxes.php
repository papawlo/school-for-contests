<?php

//function curso_metabox() {

//	$cursos_metabox = new Odin_Metabox(
//			'cursos', // Slug/ID of the Metabox (Required)
//			'Informações', // Metabox name (Required)
//			'curso', // Slug of Post Type (Optional)
//			'normal', // Context (options: normal, advanced, or side) (Optional)
//			'high' // Priority (options: high, core, default or low) (Optional)
//	);
//
//	$cursos_metabox->set_fields(
//			array(
//				array(
//					'id' => 'curso_inicio', // Required
//					'label' => __( 'Início', 'nuce' ), // Required
//					'type' => 'text', // Required
//					'attributes' => array( // Optional (html input elements)
//						'placeholder' => __( '99/99/9999' ),
//						'type' => 'datetime-local'
//					),
//					// 'default'  => 'Default text', // Optional
//					'description' => __( 'Data do início do Curso', 'nuce' ) // Optional
//				),
//				array(
//					'id' => 'curso_final', // Required
//					'label' => __( 'Final', 'nuce' ), // Required
//					'type' => 'text', // Required
//					'attributes' => array( // Optional (html input elements)
//						'placeholder' => __( '99/99/9999' ),
//						'type' => 'datetime-local'
//					),
//					// 'default'  => 'Default text', // Optional
//					'description' => __( 'Data do fim do Curso', 'nuce' ) // Optional
//				),
//				array(
//					'id' => 'curso_duracao', // Required
//					'label' => __( 'Duração', 'nuce' ), // Required
//					'type' => 'text', // Required
//					'attributes' => array( // Optional (html input elements)
//						'placeholder' => __( 'Duração' ),
//					),
//					// 'default'  => 'Default text', // Optional
//					'description' => __( 'Duração do Curso', 'nuce' ) // Optional
//				),
//				array(
//					'id' => 'curso_horario', // Required
//					'label' => __( 'Horário', 'nuce' ), // Required
//					'type' => 'text', // Required
//					'attributes' => array( // Optional (html input elements)
//						'placeholder' => __( 'Horário' ),
//					),
//					// 'default'  => 'Default text', // Optional
//					'description' => __( 'Horário do Curso', 'nuce' ) // Optional
//				),
//				array(
//					'id' => 'curso_grade', // Required
//					'label' => __( 'Grade', 'nuce' ), // Required
//					'type' => 'editor', // Required					
//					// 'default'  => 'Default text', // Optional
//					'description' => __( 'Horário do Curso', 'nuce' ) // Optional
//				),
//				array(
//					'id' => 'curso_investimento', // Required
//					'label' => __( 'Investimento', 'nuce' ), // Required
//					'type' => 'text', // Required					
//					'attributes' => array( // Optional (html input elements)
//						'placeholder' => __( 'Investimento' ),
//					),
//					'description' => __( 'Valor do Curso', 'nuce' ) // Optional
//				),
//				array(
//					'id' => 'curso_material', // Required
//					'label' => __( 'Material Incluso', 'nuce' ), // Required
//					'type' => 'text', // Required					
//					'attributes' => array( // Optional (html input elements)
//						'placeholder' => __( 'Material' ),
//					),
//					'description' => __( 'Material incluso do Curso', 'nuce' ) // Optional
//				),
//				array(
//					'id' => 'curso_video', // Required
//					'label' => __( 'Vídeo', 'nuce' ), // Required
//					'type' => 'input', // Required					
//					'attributes' => array( // Optional (html input elements)
//						'placeholder' => __( 'http://www.youtube.com/' ),
//						'type' => 'url'
//					),
//					'description' => __( 'Vídeo do Curso', 'nuce' ) // Optional
//				)
//			)
//	);
//}
//
//add_action( 'init', 'curso_metabox', 1 );

function download_metabox() {

	$downloads_metabox = new Odin_Metabox(
			'downloads', // Slug/ID of the Metabox (Required)
			'Informações', // Metabox name (Required)
			'downloads', // Slug of Post Type (Optional)
			'normal', // Context (options: normal, advanced, or side) (Optional)
			'high' // Priority (options: high, core, default or low) (Optional)
	);

	$downloads_metabox->set_fields(
			array(
				/**
				 * Default input examples.
				 */
				// Text Field.
				array(
					'id' => 'download_arquivo', // Required
					'label' => __( 'Arquivo', 'nuce' ), // Required
					'type' => 'upload', // Required					
					// 'default'  => 'Default text', // Optional
					'description' => __( 'Arquivo de download', 'nuce' ) // Optional
				),
				array(
					'id' => 'download_ano', // Required
					'label' => __( 'Ano', 'nuce' ), // Required
					'type' => 'input', // Required
					'attributes' => array( // Optional (html input elements)
						'type' => 'number',
						'max' => 2014,
						'min' => 2000
					),
					// 'default'  => 'Default text', // Optional
					'description' => __( 'Ano do arquivo de download', 'nuce' ) // Optional
				),
				array(
					'id' => 'download_visibilidade', // Required
					'label' => __( 'Visibilidade', 'nuce' ), // Required
					'type' => 'radio', // Required					
					// 'default'  => 'Default text', // Optional
					'description' => __( '(Privado será visto apenas para usuarios registrados)', 'nuce' ), // Optional
					'options' => array( // Required (id => title)
						'publico' => 'Público',
						'privado' => 'Privado'
					),
				)
			)
	);
}

add_action( 'init', 'download_metabox', 1 );

function slideshow_metabox() {

	$downloads_metabox = new Odin_Metabox(
			'slideshow', // Slug/ID of the Metabox (Required)
			'Dados', // Metabox name (Required)
			'slideshow', // Slug of Post Type (Optional)
			'normal', // Context (options: normal, advanced, or side) (Optional)
			'high' // Priority (options: high, core, default or low) (Optional)
	);

	$downloads_metabox->set_fields(
			array(
				/**
				 * Default input examples.
				 */
				array(
					'id' => 'slideshow_orelha', // Required
					'label' => __( 'Orelha', 'nuce' ), // Required
					'type' => 'text', // Required										
					'description' => __( 'Orelha do lado esquerdo', 'nuce' ) // Optional
				),
				array(
					'id' => 'slideshow_subtitulo', // Required
					'label' => __( 'Subtítulo', 'nuce' ), // Required
					'type' => 'text', // Required					
					'attributes' => array( // Optional (html input elements)
						'placeholder' => __( 'Subtítulo' ),
					),
					'description' => __( 'Subtítulo do slideshow', 'nuce' ) // Optional
				),
				array(
					'id' => 'slideshow_terceiro_titulo', // Required
					'label' => __( 'Terceiro título', 'nuce' ), // Required
					'type' => 'text', // Required					
					'description' => __( 'Terceiro título do slideshow', 'nuce' ) // Optional
				),
				array(
					'id' => 'slideshow_imagem_logo', // Required
					'label' => __( 'Imagem de Logotipo', 'nuce' ), // Required
					'type' => 'image', // Required										
					'description' => __( 'Imagem menos que terá destaque com o logo do assunto', 'nuce' ) // Optional
				),
				array(
					'id' => 'slideshow_link', // Required
					'label' => __( 'Url do link', 'nuce' ), // Required
					'type' => 'input', // Required									
					'attributes' => array( // Optional (html input elements)
						'type' => 'url'
					),
					'description' => __( 'Link do endereço onde o usuário é direcionado com o click', 'nuce' ) // Optional
				),
				array(
					'id' => 'slideshow_url_destino', // Required
					'label' => __( 'Janela onde abre o link', 'nuce' ), // Required
					'type' => 'radio', // Required
					'options' => array( // Obrigatório (adicione aque os ids e títulos)
						'self' => 'Mesma janela',
						'_blanck' => 'Nova janela',
					),
					'description' => __( 'Destino da janela onde o usuário é direcionado com o click', 'nuce' ) // Optional
				),
			)
	);
}

add_action( 'init', 'slideshow_metabox', 1 );


$post_metabox = new Odin_Metabox(
    'post', // Slug/ID do Metabox (obrigatório)
    'Extras', // Nome do Metabox  (obrigatório)
    'post', // Slug do Post Type, sendo possível enviar apenas um valor ou um array com vários (opcional)
    'normal', // Contexto (opções: normal, advanced, ou side) (opcional)
    'high' // Prioridade (opções: high, core, default ou low) (opcional)
);

$post_metabox->set_fields(
    array(
        array(
            'id'          => 'post_font',
            'label'       => __( 'Fonte', 'nuce' ),
            'type'        => 'text',
            'description' => __( 'Fonte da notícia', 'nuce' )
        )
    )
);
