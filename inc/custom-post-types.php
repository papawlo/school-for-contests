<?php

function nuce_curso_cpt() {
	$curso = new Odin_Post_Type(
			'Curso', // Nome (Singular) do Post Type.
			'cursos' // Slug do Post Type.
	);

	$curso->set_labels(
			array(
				'menu_name' => __( 'Cursos', 'nuce' )
			)
	);

	$curso->set_arguments(
			array(
				'supports' => array( 'title', 'thumbnail', 'excerpt' )
			)
	);
}

add_action( 'init', 'nuce_curso_cpt', 1 );

function nuce_curso_taxonomy() {
	$curso = new Odin_Taxonomy(
			'Segmento', // Nome (Singular) da nova Taxonomia.
			'segmentos', // Slug do Taxonomia.
			'cursos' // Nome do tipo de conteúdo que a taxonomia irá fazer parte.
	);

	$curso->set_labels(
			array(
				'menu_name' => __( 'Tipos de cursos', 'nuce' )
			)
	);

	$curso->set_arguments(
			array(
				'hierarchical' => true,
//				'rewrite' => array(
//					'with_front' => false, // Don't display the category base before "/locations/"		
//					'slug' => 'segmento', // This controls the base slug that will display before each term
//				),
			)
	);
}

add_action( 'init', 'nuce_curso_taxonomy', 1 );

function nuce_slideshow_cpt() {
	$download = new Odin_Post_Type(
			'Slideshow', // Nome (Singular) do Post Type.
			'slideshow' // Slug do Post Type.
	);

	$download->set_labels(
			array(
				'menu_name' => __( 'Slideshow', 'nuce' )
			)
	);

	$download->set_arguments(
			array(
				'supports' => array( 'title', 'thumbnail' ),
				'exclude_from_search' => true
			)
	);
}

add_action( 'init', 'nuce_slideshow_cpt', 1 );

//CPT DOWNLOAD

/**
 * Custom post download
 */
add_action( 'init', 'register_cpt_download' );

function register_cpt_download() {

	$labels = array(
		'name' => _x( 'Downloads', 'download' ),
		'singular_name' => _x( 'Download', 'download' ),
		'add_new' => _x( 'Adicionar Novo', 'download' ),
		'all_items' => _x( 'Downloads', 'download' ),
		'add_new_item' => _x( 'Adicionar Download', 'download' ),
		'edit_item' => _x( 'Editar Download', 'download' ),
		'new_item' => _x( 'Novo Download', 'download' ),
		'view_item' => _x( 'Ver Download', 'download' ),
		'search_items' => _x( 'Procurar Downloads', 'download' ),
		'not_found' => _x( 'Nenhum download encontrado', 'download' ),
		'not_found_in_trash' => _x( 'Nenhum download encontrado na lixeira', 'download' ),
		'parent_item_colon' => _x( 'Download Pai:', 'download' ),
		'menu_name' => _x( 'Downloads', 'download' ),
	);

	$args = array(
		'labels' => $labels,
		'taxonomies' => array( 'tipo', 'area' ),
		'hierarchical' => false,
		'exclude_from_search' => true,
//		'rewrite' => array( 'slug' => 'downloads' ),
		'query_var' => true,
		'publicly_queryable' => true,
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'has_archive' => true
	);

	register_post_type( 'downloads', $args );
}

//***              ***//
function taxonomy_tipo() {
	$labels = array(
		'name' => _x( 'Tipos', 'nuce' ),
		'singular_name' => _x( 'Tipo', 'nuce' ),
		'search_items' => __( 'Pesquisar Tipo' ),
		'all_items' => __( 'Todos os Tipos' ),
		'parent_item' => __( 'Tipo Pai' ),
		'parent_item_colon' => __( 'Tipo Pai:' ),
		'edit_item' => __( 'Editar Tipo' ),
		'update_item' => __( 'Atualizar Tipo' ),
		'add_new_item' => __( 'Adicionar Novo Tipo' ),
		'new_item_name' => __( 'Novo Tipo' ),
		'menu_name' => __( 'Tipo' ),
	);
	$args = array(
		'labels' => $labels,
		'public' => true,
		'hierarchical' => true,
		'show_in_nav_menus' => true,
		'has_archive' => true,
		'query_var' => true,
		'rewrite' => array( 'slug' => 'downloads/tipo'),
	);
	register_taxonomy( 'tipo', 'downloads', $args );
}

add_action( 'init', 'taxonomy_tipo', 0 );

function taxonomy_area() {
	$labels = array(
		'name' => _x( 'Áreas de Interesse', 'nuce' ),
		'singular_name' => _x( 'Área de Interesse', 'nuce' ),
		'search_items' => __( 'Pesquisar Área de Interesse' ),
		'all_items' => __( 'Todos os Áreas' ),
		'parent_item' => __( 'Área Pai' ),
		'parent_item_colon' => __( 'Área Pai:' ),
		'edit_item' => __( 'Editar Área' ),
		'update_item' => __( 'Atualizar Área' ),
		'add_new_item' => __( 'Adicionar Nova Área' ),
		'new_item_name' => __( 'Novo Área' ),
		'menu_name' => __( 'Área' ),
	);
	$args = array(
		'labels' => $labels,
		'public' => true,
		'hierarchical' => true,
		'show_in_nav_menus' => true,
		'has_archive' => true,
		'query_var' => true,
		'rewrite' => array( 'slug' => 'downloads/area'),
	);
	register_taxonomy( 'area', 'downloads', $args );
}

add_action( 'init', 'taxonomy_area', 0 );


// CPT PRODUTO


/**
 * Custom post produto
 */
//add_action( 'init', 'register_cpt_produto' );

//function register_cpt_produto() {
//
//	$labels = array(
//		'name' => _x( 'Produtos', 'produto' ),
//		'singular_name' => _x( 'Produto', 'produto' ),
//		'add_new' => _x( 'Adicionar Novo', 'produto' ),
//		'all_items' => _x( 'Produtos', 'produto' ),
//		'add_new_item' => _x( 'Adicionar Produto', 'produto' ),
//		'edit_item' => _x( 'Editar Produto', 'produto' ),
//		'new_item' => _x( 'Novo Produto', 'produto' ),
//		'view_item' => _x( 'Ver Produto', 'produto' ),
//		'search_items' => _x( 'Procurar Produtos', 'produto' ),
//		'not_found' => _x( 'Nenhum produto encontrado', 'produto' ),
//		'not_found_in_trash' => _x( 'Nenhum produto encontrado na lixeira', 'produto' ),
//		'parent_item_colon' => _x( 'Produto Pai:', 'produto' ),
//		'menu_name' => _x( 'Produtos', 'produto' ),
//	);
//
//	$args = array(
//		'labels' => $labels,
//		'hierarchical' => false,
//		'exclude_from_search' => true,
//		'query_var' => true,
//		'rewrite' => array( 'slug' => 'prod', 'with_front' => false ),
//		'publicly_queryable' => true,
//		'public' => true,
//		'show_ui' => true,
//		'show_in_menu' => true,
//		'has_archive' => true,
//		'supports' => array( 'title', 'editor', 'thumbnail' )
//	);
//
//	register_post_type( 'produto', $args );
//}
