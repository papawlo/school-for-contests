<?php
//date_default_timezone_set("America/Recife");
/**
 * Odin functions and definitions.
 *
 * Sets up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * For more information on hooks, actions, and filters,
 * see http://codex.wordpress.org/Plugin_API
 *
 * @package Odin
 * @since 2.2.0
 */
/**
 * Sets content width.
 */
if (!isset($content_width)) {
	$content_width = 600;
}

/**
 * Odin Classes.
 */
require_once get_template_directory() . '/core/classes/class-bootstrap-nav.php';
require_once get_template_directory() . '/core/classes/class-shortcodes.php';
require_once get_template_directory() . '/core/classes/class-thumbnail-resizer.php';
require_once get_template_directory() . '/core/classes/class-theme-options.php';
require_once get_template_directory() . '/core/classes/class-options-helper.php';
require_once get_template_directory() . '/core/classes/class-post-type.php';
require_once get_template_directory() . '/core/classes/class-taxonomy.php';
require_once get_template_directory() . '/core/classes/class-metabox.php';
require_once get_template_directory() . '/core/classes/abstracts/abstract-front-end-form.php';
require_once get_template_directory() . '/core/classes/class-contact-form.php';
require_once get_template_directory() . '/core/classes/class-post-form.php';
require_once get_template_directory() . '/core/classes/class-user-meta.php';

/**
 * Nuce Meta BOxes.
 */
require_once get_template_directory() . '/inc/custom-post-types.php';
/**
 * Nuce Meta BOxes.
 */
require_once get_template_directory() . '/inc/meta-boxes.php';

/**
 * Odin Widgets.
 */
//require_once get_template_directory() . '/core/classes/widgets/class-widget-like-box.php';

if (!function_exists('odin_setup_features')) {

	/**
	 * Setup theme features.
	 *
	 * @since  2.2.0
	 *
	 * @return void
	 */
	function odin_setup_features()
	{


		/**
		 * Register nav menus.
		 */
		register_nav_menus(
			array(
				'main-menu' => __('Main Menu', 'nuce')
			)
		);

		/*
		 * Add post_thumbnails suport.
		 */
		add_theme_support('post-thumbnails');

		/*
		 * Add images sizes
		 */
		add_image_size("1600x567", 1600, 567, true); //slideshow home
		add_image_size("188x188", 188, 188, false); //slideshow insignia
		add_image_size("156x156", 156, 156, true); //o-nuce
		add_image_size("134x134", 134, 134, true); //slideshow home
		add_image_size("170x170", 170, 170, true); //produto
		add_image_size("110x170", 110, 170, true); //produto-relacionado

		/**
		 * Add feed link.
		 */
		add_theme_support('automatic-feed-links');



		/**
		 * Add support for infinite scroll.
		 */
		add_theme_support(
			'infinite-scroll',
			array(
				'type' => 'scroll',
				'footer_widgets' => false,
				'container' => 'content',
				'wrapper' => false,
				'render' => false,
				'posts_per_page' => get_option('posts_per_page')
			)
		);


		/**
		 * Support The Excerpt on pages.
		 */
		add_post_type_support('page', 'excerpt');

		require_once 'inc/digimailingAPI.php';
	}
}

add_action('after_setup_theme', 'odin_setup_features');

/**
 * Register widget areas.
 *
 * @since  2.2.0
 *
 * @return void
 */
function odin_widgets_init()
{
	register_sidebar(
		array(
			'name' => __('Main Sidebar', 'odin'),
			'id' => 'main-sidebar',
			'description' => __('Site Main Sidebar', 'odin'),
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget' => '</aside>',
			'before_title' => '<h3 class="widgettitle widget-title">',
			'after_title' => '</h3>',
		)
	);
}

add_action('widgets_init', 'odin_widgets_init');

//hook the admin init
add_action('admin_init', 'customize_meta_boxes');

function customize_meta_boxes()
{
	remove_meta_box('postcustom', 'post', 'normal');
}

/**
 * Flush Rewrite Rules for new CPTs and Taxonomies.
 *
 * @since  2.2.0
 *
 * @return void
 */
function odin_flush_rewrite()
{
	flush_rewrite_rules();
}

add_action('after_switch_theme', 'odin_flush_rewrite');

/**
 * Load site scripts.
 *
 * @since  2.2.0
 *
 * @return void
 */
function odin_enqueue_scripts()
{
	$template_url = get_template_directory_uri();

	// Loads Odin main stylesheet.
	wp_enqueue_style('nuce-style', get_stylesheet_uri(), array(), null, 'all');
	wp_enqueue_style('jquery-ui-structure', $template_url . '/assets/css/libs/jquery-ui.structure.min.css', array(), null, 'all');
	wp_enqueue_style('jquery-ui', $template_url . '/assets/css/libs/jquery-ui.min.css', array(), null, 'all');

	// jQuery.
	wp_enqueue_script('jquery');

	// Ddslick.
	wp_enqueue_script('ddslick', $template_url . '/assets/js/libs/jquery-ddslick.js', array('jquery'), null, true);

	// Touchswipe.
	wp_enqueue_script('touchswipe', $template_url . '/assets/js/libs/jquery-touchswipe.js', array('jquery'), null, true);

	// CarouFredSel.
	wp_enqueue_script('carousel', $template_url . '/assets/js/libs/jquery.carouFredSel-6.2.1-packed.js', array('jquery'), null, true);

	// General scripts.
	// FitVids.
	wp_enqueue_script('fitvids', $template_url . '/assets/js/libs/jquery.fitvids.js', array(), null, true);

	// form.
	wp_enqueue_script('form', $template_url . '/assets/js/libs/jquery.form.js', array(), null, true);

	// sticky
	wp_enqueue_script('sticky', $template_url . '/assets/js/libs/jquery.sticky.js', array('jquery'), null, true);

	// waypoints
	wp_enqueue_script('waypoints', $template_url . '/assets/js/libs/waypoints.min.js', array('jquery'), null, true);

	// validate.
	wp_enqueue_script('validate', $template_url . '/assets/js/libs/jquery.validate.js', array(), null, true);
	wp_enqueue_script('validate-localization', $template_url . '/assets/js/libs/localization/messages_pt_BR.js', array('validate'), null, true);

	// calendar.
	wp_enqueue_script('jquery-ui-datepicker');

	// Mask.
	wp_enqueue_script('jquery-mask', $template_url . '/assets/js/libs/jquery.mask.js', array('jquery'), null, true);


	// Main jQuery.
	wp_enqueue_script('nuce-main', $template_url . '/assets/js/main.js', array(), null, true);

	// Grunt main file with Bootstrap, FitVids and others libs.
	// wp_enqueue_script( 'odin-main-min', $template_url . '/assets/js/main.min.js', array(), null, true );
	// Load Thread comments WordPress script.
	if (is_singular() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}

add_action('wp_enqueue_scripts', 'odin_enqueue_scripts', 1);

/**
 * Odin custom stylesheet URI.
 *
 * @since  2.2.0
 *
 * @param  string $uri Default URI.
 * @param  string $dir Stylesheet directory URI.
 *
 * @return string      New URI.
 */
function nuce_stylesheet_uri($uri, $dir)
{
	return $dir . '/assets/css/style.css';
}

add_filter('stylesheet_uri', 'nuce_stylesheet_uri', 10, 2);

/**
 * Core Helpers.
 */
require_once get_template_directory() . '/core/helpers.php';

/**
 * WP Custom Admin.
 */
require_once get_template_directory() . '/inc/admin.php';

/**
 * Comments loop.
 */
//require_once get_template_directory() . '/inc/comments-loop.php';

/**
 * WP optimize functions.
 */
//require_once get_template_directory() . '/inc/optimize.php';

/**
 * Custom WooCommerce tags.
 */
require_once get_template_directory() . '/inc/plugins-support.php';

/**
 * Custom template tags.
 */
require_once get_template_directory() . '/inc/template-tags.php';

function custom_excerpt_length($length)
{
	return 10;
}

// Replaces the excerpt "more" text by a link
function new_excerpt_more($more)
{
	global $post;
	//&#8594;
	//&rarr;
	//&#x2192;
	return '...';
}

add_filter('excerpt_more', 'new_excerpt_more');

add_filter('excerpt_length', 'custom_excerpt_length', 999);

function get_id_by_slug($page_slug)
{
	$page = get_page_by_path($page_slug);
	if ($page) {
		return $page->ID;
	} else {
		return null;
	}
}

function enviarNewsletter()
{

	$email = $_POST["email"];

	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		echo 0;
		die();
	} else {
		$result = cadastraNoDigimailing($email, 255); //newsletter list
		//
		/* Método para enviar via form */

		//		$form = 'frmSS12';
		//		$id_form = '2';
		//
		//		$ch = curl_init();
		//		curl_setopt( $ch, CURLOPT_URL, "http://www.digimailing.com.br/form.php?form=$id_form" );
		//		curl_setopt( $ch, CURLOPT_POST, 1 );
		//		curl_setopt( $ch, CURLOPT_POSTFIELDS, "CustomFields[2]=$nome&format=h&email=$email&form=$form&id_form=$id_form" );
		//		$result = curl_exec( $ch );
		//
		//		curl_close( $ch );
		//
		//
		//		$http_status = curl_getinfo( $ch, CURLINFO_HTTP_CODE );
		//		print_r( $http_status );
		// Closing
		//		curl_close( $ch );
		//		switch ( $http_status ) {
		//			case '200':
		//				echo 'HTTP code: ' . $http_status;
		//				echo " <br> Cadastrado com sucesso";
		//				break;
		//
		//			case '403':
		//			case '404':
		//				echo 'HTTP code: ' . $http_status;
		//				echo " <br> Deu erro";
		//
		//				break;
		//
		//			default:
		//				break;
		//		}

		if ($result) {
			echo 1;
		} else {
			echo 0;
		}
	}

	die();
}

add_action('wp_ajax_enviarNewsletter', 'enviarNewsletter');
add_action('wp_ajax_nopriv_enviarNewsletter', 'enviarNewsletter');


/**
 * Remove admin top toolbar from site
 */
add_filter('show_admin_bar', '__return_false');


//carrega mais posts com ajax
add_action('wp_ajax_loadMore', 'loadMore');
add_action('wp_ajax_nopriv_loadMore', 'loadMore'); // not really needed

if (!function_exists('loadMore')) :

	function loadMore()
	{

		$page = $_GET['page'];
		// get your $_GET variables sorted out
		// setup your query to get what you want
		$offset = 8;
		if ($page == 2) {
			$offset = "offset=10";
		} else {
			$offset = 8;
		}
		query_posts('posts_per_page=8&paged=' . $page . "&" . $offset);
		$class = '';
		$j = 0;

		// the Loop
		while (have_posts()) : the_post();
			if ($j % 4 == 3 && $j > 1) {
				$class = " last";
			} else {
				$class = '';
			}
?>
			<li class="entry-meta<?php echo $class; ?>">
				<time class="entry-date" datetime="<?php echo esc_attr(get_the_date('c')) ?>">
					<svg>
						<use xlink:href="#icon-calendario-preto" />
					</svg>
					<span><?php echo esc_html(get_the_date('d/m/Y')) ?></span>
				</time>
				<h3><a href="<?php echo esc_url(get_permalink()) ?>" title="<?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h3>
				<h4><?php the_excerpt(10); ?></h4>
			</li>
		<?php
			$j++;
		endwhile;

		die();
	}

endif;

//SEARCH
//carrega mais resultado de com ajax
add_action('wp_ajax_loadMoreSearch', 'loadMoreSearch');
add_action('wp_ajax_nopriv_loadMoreSearch', 'loadMoreSearch'); // not really needed

if (!function_exists('loadMoreSearch')) :

	function loadMoreSearch()
	{
		//		print_r( $_GET);
		//		exit();


		$page = isset($_GET['page']) ? $_GET['page'] : 2;
		//		print_r( $page );
		//		exit();

		$term = isset($_GET['term']) ? sanitize_text_field($_GET['term']) : "";


		// get your $_GET variables sorted out
		// setup your query to get what you want
		//		$offset = 8;
		$args = array(
			's' => $term,
			'post_status' => 'publish',
			//			'post_type' => 'any',
			//			'offset' => '2',
			'paged' => $page,
			//			'posts_per_page' => 1,
			//			'post_type'     => get_post_types( array(
			//							'public'   => true,
			//							'_builtin' => true,
			//							'exclude_from_search' => true
			//						) ),
		);

		// the Loop
		$my_query = new WP_Query($args);

		if ($my_query) :
			while ($my_query->have_posts()) : $my_query->the_post();
				get_template_part('content', 'search');
			endwhile;
		endif;
		die();
	}

endif;

//DOWNLOADS
// Rewrite Rules to Downloads taxonomy
function eg_add_rewrite_rules()
{
	global $wp_rewrite;

	$new_rules = array(
		'downloads/(tipo|area)/(.+?)/(tipo|area)/(.+?)/?$' => 'index.php?post_type=downloads&' . $wp_rewrite->preg_index(1) . '=' . $wp_rewrite->preg_index(2) . '&' . $wp_rewrite->preg_index(3) . '=' . $wp_rewrite->preg_index(4),
		'downloads/(tipo|area)/(.+)/?$' => 'index.php?post_type=downloads&' . $wp_rewrite->preg_index(1) . '=' . $wp_rewrite->preg_index(2)
	);
	$wp_rewrite->rules = $new_rules + $wp_rewrite->rules;
}

add_action('generate_rewrite_rules', 'eg_add_rewrite_rules');

//carrega mais posts com ajax
add_action('wp_ajax_loadMoreDownload', 'loadMoreDownload');
add_action('wp_ajax_nopriv_loadMoreDownload', 'loadMoreDownload'); // not really needed

if (!function_exists('loadMoreDownload')) :

	function loadMoreDownload()
	{

		$page = isset($_GET['page']) ? $_GET["page"] : null;
		$taxonomy = isset($_GET['taxonomy']) ? $_GET["taxonomy"] : null;
		$slug = isset($_GET['slug']) ? $_GET["slug"] : null;

		//		$userRole = $current_user->roles;
		// get your $_GET variables sorted out
		// setup your query to get what you want
		//		if ( $page == 2 ) {
		//			$offset = "offset=10";
		//		} else {
		//			$offset = 8;
		//		}
		$args = array('post_type' => 'downloads', 'posts_per_page' => 8, 'paged' => $page);
		if ($slug && $taxonomy) {
			$args['tax_query'] = array(
				array(
					'taxonomy' => $taxonomy,
					'field' => 'slug',
					'terms' => $slug
				)
			);
		}

		query_posts($args);
		// the Loop
		while (have_posts()) : the_post();
		?>
			<tr>
				<?php
				if (nuce_check_user_role('customer')) {
				?>
					<td><a href="<?php echo get_post_meta(get_the_ID(), 'download_arquivo', true); ?>" title=""><?php the_title(); ?></a></td>

					<td class="td-download"><a href="<?php echo get_post_meta(get_the_ID(), 'download_arquivo', true); ?>">
							<svg>
								<use xlink:href="#icon-quadrado-download" />
							</svg>
						</a>
					</td>
				<?php
				} else {
				?>
					<td class="td-first-restrita"><a href="<?php bloginfo('url') ?>/cadastrar/" title="Acesso restrito para usuários registrados"><?php the_title(); ?></a></td>
					<td class="td-restrito">
						<a href="<?php bloginfo('url') ?>/cadastrar/" title="Acesso restrito para usuários registrados">
							<svg>
								<use xlink:href="#icon-cadeado" />
							</svg>
						</a>
					</td>
					<td class="td-download">
						<a href="<?php bloginfo('url') ?>/cadastrar/" title="Acesso restrito para usuários registrados">
							<svg>
								<use xlink:href="#icon-quadrado-download" />
							</svg>
						</a>
					</td>
				<?php } ?>
			</tr>
	<?php
		endwhile;

		die();
	}

endif;

// custom filter to replace '=' with 'LIKE'
function my_posts_where($where)
{
	$where = str_replace("meta_key = 'curso_turma_%_curso_turma_data_de_inicio'", "meta_key LIKE 'curso_turma_%_curso_turma_data_de_inicio'", $where);

	return $where;
}

add_filter('posts_where', 'my_posts_where');
if (!function_exists('load_calendario')) :

	function load_calendario()
	{
		$startDate = $_GET['ano'] . '-' . $_GET['mes'] . '-01';
		$startDateTime = strtotime($startDate);
		$endDateTime = strtotime("last day of this month", $startDateTime);
		$endDate = date("Y-m-d", $endDateTime);
		$cursoDates = array();
		$args = array(
			'post_type' => 'cursos',
			'posts_per_page' => -1,
			'meta_query' => array(
				array(
					'key' => 'curso_turma_%_curso_turma_data_de_inicio',
					'type' => 'DATE',
					'value' => array($startDate, $endDate),
					'compare' => 'BETWEEN'
				),
			),
		);


		$query = new WP_Query($args);

		while ($query->have_posts()) : $query->the_post();
			$turmas = get_field('curso_turma');

			if (count($turmas)) :
				foreach ($turmas as $turma) :
					$cursoDates[$turma['curso_turma_data_de_inicio']][get_the_ID()]['title'] = get_the_title();
					$cursoDates[$turma['curso_turma_data_de_inicio']][get_the_ID()]['excerpt'] = get_the_excerpt();
					$cursoDates[$turma['curso_turma_data_de_inicio']][get_the_ID()]['permalink'] = get_the_permalink();
				endforeach;
			endif;
		endwhile;

		die(json_encode($cursoDates));
	}

endif;

add_action('wp_ajax_load_calendario', 'load_calendario');
add_action('wp_ajax_nopriv_load_calendario', 'load_calendario');

//carrega mais posts com ajax
add_action('wp_ajax_loadMoreCurso', 'loadMoreCurso');
add_action('wp_ajax_nopriv_loadMoreCurso', 'loadMoreCurso'); // not really needed
if (!function_exists('loadMoreCurso')) :

	function loadMoreCurso()
	{

		$page = isset($_GET['page']) ? $_GET["page"] : null;
		$taxonomy = isset($_GET['taxonomy']) ? $_GET["taxonomy"] : null;
		$slug = isset($_GET['slug']) ? $_GET["slug"] : null;

		// get your $_GET variables sorted out
		// setup your query to get what you want
		//		if ( $page == 2 ) {
		//			$offset = "offset=10";
		//		} else {
		//			$offset = 8;
		//		}
		$args = array('post_type' => 'curso', 'posts_per_page' => 1, 'paged' => $page);
		if ($slug && $taxonomy) {
			$args['tax_query'] = array(
				array(
					'taxonomy' => $taxonomy,
					'field' => 'slug',
					'terms' => $slug
				)
			);
		}

		query_posts($args);
		// the Loop
		while (have_posts()) : the_post();
			get_template_part('content', 'curso');
		endwhile;

		die();
	}

endif;

/* * ** REMOVE tag <p> do excertp **** */
remove_filter('the_excerpt', 'wpautop');

/* * *** Form Contato Ajax **** */
add_action("wp_ajax_contato", "contato");
add_action("wp_ajax_nopriv_contato", "contato");

if (!function_exists('contato')) :

	function contato()
	{


		//		$destino_email = get_field( 'email_de_contato', 'option' );
		$destino_email = "email@example.com.br";

		$destino_nome = 'NUCE Contato';
		$from_email = isset($_POST['email']) ? $_POST['email'] : "";
		$from_nome = isset($_POST['nome']) ? $_POST['nome'] : "";
		$assunto = isset($_POST['assunto']) ? $_POST['assunto'] : "";
		$mensagem = isset($_POST['mensagem']) ? $_POST['mensagem'] : "";

		$msg = '';

		$msg .= 'Nome: ' . $from_nome . '<br />';
		$msg .= 'Email: ' . $from_email . '<br />';
		$msg .= 'Mensagem: ' . $mensagem . '<br />';


		$_subject = "Contato Site " . $assunto;

		// To send HTML mail, the Content-type header must be set
		$headers = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=utf8' . "\r\n";

		// Additional headers
		$headers .= 'To: ' . $destino_nome . '<' . $destino_email . '>' . "\r\n";
		$headers .= 'From: ' . $from_nome . ' <' . $from_email . '>' . "\r\n";

		$msgSucesso = 1;
		$msgErro = 0;
		try {
			wp_mail($destino_nome . '<' . $destino_email . '>', $_subject, $msg, $headers);
			echo $msgSucesso;
		} catch (Exception $exc) {
			echo $msgErro;
			echo $exc->getTraceAsString();
		}

		die();
	}

endif;

//SEARCH
function get_post_name()
{
	global $post;
	$tipo = '';
	$post_type = get_post_type();
	switch ($post_type) {
		case 'post':
			$tipo = 'Notícia';
			break;
		case 'download':
			$tipo = 'Download';
			break;
		case 'cursos':
			$tipo = 'Curso';
			break;
		case 'product':
			$tipo = 'Produto';
			break;
		case 'page':
			$tipo = 'Página';
			break;

		default:
			break;
	}
	echo $tipo;
}

//WOOCOMMERCE
add_theme_support('woocommerce');
//REMOVE CSS
add_filter('woocommerce_enqueue_styles', '__return_false');
//AJUSTA NOME JQUEY_COOKIE
add_action('wp_enqueue_scripts', 'custom_frontend_scripts');

function custom_frontend_scripts()
{

	global $post, $woocommerce;

	$suffix = defined('SCRIPT_DEBUG') && SCRIPT_DEBUG ? '' : '.min';
	wp_deregister_script('jquery-cookie');
	wp_register_script('jquery-cookie', get_template_directory_uri() . '/assets/js/libs/jquery_cookie' . $suffix . '.js', array('jquery'), '1.3.1', true);
}

//remove wrappers
remove_action('woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
remove_action('woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);

//Remove Breadcrumbs
remove_action('woocommerce_before_main_content', 'woocommerce_breadcrumb', 20, 0);
remove_action('woocommerce_before_shop_loop', 'woocommerce_result_count', 20, 0);

//Get Rid of Stupid Tabs
remove_action('woocommerce_after_single_product_summary', 'woocommerce_output_product_data_tabs', 10);
remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20, 2);

add_action('woocommerce_single_product_summary', 'woocommerce_product_description_panel', 20);

//Remove Product Reviews
remove_action('woocommerce_product_tabs', 'woocommerce_product_reviews_tab', 30);
remove_action('woocommerce_product_tab_panels', 'woocommerce_product_reviews_panel', 30);

//Remove "Sale" tag on product image
remove_action('woocommerce_before_shop_loop_item_title', 'woocommerce_show_product_loop_sale_flash', 10);

//Remove Sidebar from WooCommerce
remove_action('woocommerce_sidebar', 'woocommerce_get_sidebar', 10);

// Remove the product rating display on product loops
remove_action('woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_rating', 5);

// Remove the product rating display on product single
remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_rating', 10);
// Remove the product categories
remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40);

/** Remove Showing results functionality site-wide */
remove_action('woocommerce_single_product_summary', 'woocommerce_result_count', 100);

//AjAx para atualizar o mini-carrinho do menu
add_filter('add_to_cart_fragments', 'woocommerce_header_add_to_cart_fragment');

//remove produtos relacionados e tab
remove_action('woocommerce_after_single_product_summary', 'woocommerce_upsell_display', 40);
remove_action('woocommerce_after_single_product_summary', 'woocommerce_output_product_data_tabs', 40);


//altera nome do botão comprar
add_filter('woocommerce_product_single_add_to_cart_text', 'woo_custom_cart_button_text'); // 2.1 +

function woo_custom_cart_button_text()
{
	return __('Comprar', 'woocommerce');
}

function change_default_checkout_country()
{
	return 'BR'; // country code
}

add_action('woocommerce_checkout_init', 'fused_disable_billing_shipping');

function fused_disable_billing_shipping($checkout)
{

	$checkout->checkout_fields['shipping'] = array();
	return $checkout;
}

add_filter('woocommerce_ship_to_different_address_checked', '__return_false');
/* Remove Woocommerce User Fields */
add_filter('woocommerce_checkout_fields', 'custom_override_checkout_fields');
add_filter('woocommerce_billing_fields', 'custom_override_billing_fields');
add_filter('woocommerce_shipping_fields', 'custom_override_shipping_fields');

function custom_override_checkout_fields($fields)
{
	unset($fields['billing']['billing_last_name']);

	$fields['billing_last_name']['required'] = false;
	unset($fields['billing']['billing_country']);
	unset($fields['billing']['billing_company']);
	//  unset($fields['billing']['billing_address_1']);
	//	unset( $fields['billing']['billing_address_2'] );
	//  unset($fields['billing']['billing_postcode']);
	//  unset($fields['billing']['billing_city']);
	//  unset($fields['shipping']['shipping_state']);
	//  unset($fields['shipping']['shipping_country']);
	unset($fields['shipping']['shipping_company']);
	//  unset($fields['shipping']['shipping_address_1']);
	//	unset( $fields['shipping']['shipping_address_2'] );
	//  unset($fields['shipping']['shipping_postcode']);
	//  unset($fields['shipping']['shipping_city']);
	return $fields;
}

function custom_override_billing_fields($fields)
{
	$fields['billing_last_name']['required'] = false;
	unset($fields['billing_last_name']);
	unset($fields['billing_country']);
	unset($fields['billing_company']);
	//	unset( $fields['billing_address_1'] );
	//  unset($fields['billing_address_2']);
	//  unset($fields['billing_postcode']);
	//  unset($fields['billing_city']);
	return $fields;
}

function custom_override_shipping_fields($fields)
{
	$fields['billing_last_name']['required'] = false;
	unset($fields['billing_last_name']);
	unset($fields['shipping_country']);
	unset($fields['shipping_company']);
	//  unset($fields['shipping_address_1']);
	//	unset( $fields['shipping_address_2'] );
	//  unset($fields['shipping_postcode']);
	//  unset($fields['shipping_city']);
	return $fields;
}

/* End - Remove Woocommerce User Fields */

function woocommerce_header_add_to_cart_fragment($fragments)
{

	global $woocommerce;

	ob_start();
	?>
	<div class="cart-header">
		<span class="carrinho inativo">
			<svg>
				<?php if (WC()->cart->get_cart_contents_count()) : ?>
					<use xlink:href="#icon-carrinho-cheio" />
				<?php else : ?>
					<use xlink:href="#icon-carrinho-vazio" />
				<?php endif; ?>
			</svg>
		</span>
		<div class="cart-totals">
			<?php echo sprintf('%d', WC()->cart->get_cart_contents_count()); ?>
		</div>
	</div>
	<!--<a class="cart-contents" href="<?php // echo $woocommerce->cart->get_cart_url();
										?>" title="<?php // _e( 'View your shopping cart', 'woothemes' );
													?>"><?php // echo sprintf( _n( '%d item', '%d items', $woocommerce->cart->cart_contents_count, 'woothemes' ), $woocommerce->cart->cart_contents_count );
																											?> - <?php // echo $woocommerce->cart->get_cart_total();
																																											?></a>-->
	<?php
	$fragments['div.cart-header'] = ob_get_clean();

	return $fragments;
}

/**
 * Cart Link
 * Displayed a link to the cart including the number of items present and the cart total
 * @param  array $settings Settings
 * @return array           Settings
 * @since  1.0.0
 */
if (!function_exists('nuce_cart_link')) {

	function nuce_cart_link()
	{
		if (is_cart()) {
			$class = "current-menu-item";
		} else {
			$class = "";
		}
	?>
		<div class="carrinho-header">
			<span class="carrinho inativo">
				<svg>
					<use xlink:href="#icon-carrinho-vazio" />
				</svg>
			</span>
			<div class="cart-contents">
				<?php echo sprintf('%d', WC()->cart->get_cart_contents_count()); ?>
			</div>
			<div class="carrinho-container">
				<header>
					<h2>Itens que você escolheu</h2>
					<button class="bt-fechar icon-fechar ativo"></button>
				</header>

				<!--<div class="widget_shopping_cart_content">-->
				<?php the_widget('WC_Widget_Cart', 'title='); ?>
				<!--</div>-->
			</div>
		</div>
	<?php
	}
}

/**
 * Display Header Cart
 * @since  1.0.0
 * @uses  is_woocommerce_activated() check if WooCommerce is activated
 * @return void
 */
function nuce_header_cart()
{
	nuce_cart_link();
}

add_action('nuce_header', 'nuce_header_cart', 60);

/**
 * Get a refreshed cart fragment
 */
function get_refreshed_fragments()
{

	// Get mini cart
	ob_start();

	woocommerce_mini_cart();

	$mini_cart = ob_get_clean();

	// Fragments and mini cart are returned
	$data = array(
		'fragments' => apply_filters('add_to_cart_fragments', array(
			'div.widget_shopping_cart_content' => '<div class="widget_shopping_cart_content">' . $mini_cart . '</div>'
		)),
		'cart_hash' => WC()->cart->get_cart() ? md5(json_encode(WC()->cart->get_cart())) : ''
	);

	wp_send_json($data);
}

//remove produto do mini carrinho
add_action('wp_footer', 'add_js_to_wp_wcommerce');

function add_js_to_wp_wcommerce()
{
	?>
	<script type="text/javascript">
		jQuery('.product_list_widget').on('click', '.bt-excluir', (function() {

			var product_id = jQuery(this).data("item-key");
			console.log(product_id);
			jQuery.ajax({
				type: 'POST',
				dataType: 'json',
				url: "/wp-admin/admin-ajax.php",
				data: {
					action: "product_remove",
					product_id: product_id
				},
				success: function(data) {
					console.log(data);
				}
			});
			return false;
		}));
	</script>
<?php
}

add_action('wp_ajax_product_remove', 'product_remove');
add_action('wp_ajax_nopriv_product_remove', 'product_remove');

function product_remove()
{
	//	global $wpdb, $woocommerce;
	$cart = WC()->instance()->cart;
	$id = $_POST['product_id'];
	$cart_id = $cart->generate_cart_id($id);
	$cart_item_id = $cart->find_product_in_cart($cart_id);

	if ($cart_item_id) {
		$cart->set_quantity($cart_item_id, 0);
	}

	print_r($cart);
	//echo json_encode(array('status' => 0));
	exit();
}

/**
 * Add new register fields for WooCommerce registration.
 *
 * @return string Register fields HTML.
 */
function wooc_extra_register_fields()
{

	$error = array();
	if (!empty($_POST) && !empty($_POST['register']) && wp_verify_nonce($_POST['_wpnonce'], 'woocommerce-register')) {

		/* check user password */
		if (!empty($_POST['password']) && !empty($_POST['password2'])) {

			if ($_POST['password'] != $_POST['password2']) {
				$error['password']['nao_coincidem'] = 'As senhas não coincidem.';
			} elseif (strlen($_POST['password']) < 4) {
				$error['password']['muito_curta'] = 'Senha muito curta';
			} elseif (false !== strpos(wp_unslash($_POST['password']), "\\")) {
				$error['password']['caracter_ilegal'] = 'A senha não pode conter o caractere "\\" (barra invertida).';
			}
		} else {
			if (empty($_POST['password1']))
				$error['password']['vazia'] = 'O campo senha está vazio.';
			if (empty($_POST['password2']))
				$error['password2'] = 'O campo está vazio.';
		}

		if (empty($_POST['billing_first_name'])) {
			$error['billing_first_name'] = 'Insira seu nome corretamente.';
		}
		if (empty($_POST['billing_rg'])) {
			$error['billing_rg'] = 'Insira seu nome corretamente.';
		}

		if (empty($_POST['billing_cpf'])) {
			$error['billing_cpf'] = 'Insira seu CPF.';
		} elseif (!Extra_Checkout_Fields_For_Brazil_Formatting::is_cpf($_POST['billing_cpf'])) {
			$error['billing_cpf'] = 'CPF inválido.';
		}
		if (empty($_POST['billing_address_1'])) {
			$error['billing_address_1'] = 'Insira seu endereço.';
		}
		if (empty($_POST['billing_neighborhood'])) {
			$error['billing_neighborhood'] = 'Insira seu bairro.';
		}
		if (empty($_POST['billing_postcode'])) {
			$error['billing_postcode'] = 'Insira seu CEP.';
		}
		if (empty($_POST['billing_city'])) {
			$error['billing_city'] = 'Insira sua cidade.';
		}
		if (empty($_POST['billing_state'])) {
			$error['billing_state'] = 'Insira seu estado.';
		}
	}
?>
	<fieldset class="field-grande">
		<header>
			<h3>Informe seus dados</h3>
		</header>

		<fieldset class="field-nome">
			<label for="field-nome"><?php _e('Nome Completo', 'woocommerce'); ?> <span class="required">*</span></label>
			<input type="text" class="input-text" name="billing_first_name" id="field-nome" value="<?php if (!empty($_POST['billing_first_name'])) esc_attr_e($_POST['billing_first_name']); ?>" />
			<?php if (isset($error['billing_first_name'])) { ?>
				<em class="error"><?php echo $error['billing_first_name'] ?></em>
			<?php } ?>
		</fieldset>
		<fieldset class="field-rg">
			<label for="field-rg">RG <span class="required">*</span></label>
			<input type="text" id="field-rg" name="billing_rg" value="<?php if (!empty($_POST['billing_rg'])) esc_attr_e($_POST['billing_rg']); ?>" />
			<?php if (isset($error['billing_rg'])) { ?>
				<em class="error"><?php echo $error['billing_rg'] ?></em>
			<?php } ?>
		</fieldset>
		<fieldset class="field-cpf">
			<label for="field-cpf">CPF <span class="required">*</span></label>
			<input type="text" data-mask="000.000.000-00" id="field-cpf" name="billing_cpf" value="<?php if (!empty($_POST['billing_cpf'])) esc_attr_e($_POST['billing_cpf']); ?>" />
			<?php if (isset($error['billing_cpf'])) { ?>
				<em class="error"><?php echo $error['billing_cpf'] ?></em>
			<?php } ?>
		</fieldset>
		<fieldset class="field-data-nascimento">
			<label for="field-data-nascimento">Data de nascimento</label>
			<input type="text" data-mask="00/00/0000" id="field-data-nascimento" name="user_birthdate" value="<?php if (!empty($_POST['user_birthdate'])) esc_attr_e($_POST['user_birthdate']); ?>" placeholder="dd/mm/aaaa" />
		</fieldset>
		<fieldset class="field-escolaridade">
			<label for="field-escolaridade">Escolaridade</label>
			<input type="text" id="field-escolaridade" name="user_escolaridade" value="<?php if (!empty($_POST['user_escolaridade'])) esc_attr_e($_POST['user_escolaridade']); ?>" />
		</fieldset>
		<fieldset class="field-senha">
			<label for="field-username">Usuário <span class="required">*</span></label>
			<input type="text" id="field-username" name="username" value="<?php if (!empty($_POST['username'])) esc_attr_e($_POST['username']); ?>" maxlength="20" />
		</fieldset>
		<fieldset class="field-senha">
			<label for="field-senha">Senha <span class="required">*</span></label>
			<input type="password" id="field-senha" name="password" value="<?php if (!empty($_POST['password'])) esc_attr_e($_POST['password']); ?>" />
			<?php if (isset($error['password'])) { ?>
				<em class="error"><?php echo implode(", ", $error['password']) ?></em>
			<?php } ?>
		</fieldset>
		<fieldset class="field-confirme-senha" style="margin-right:0; ">
			<label for="field-confirme-senha">Confirme sua senha <span class="required">*</span></label>
			<input type="password" id="field-confirme-senha" name="password2" value="<?php if (!empty($_POST['password2'])) esc_attr_e($_POST['password2']); ?>" />
			<?php if (isset($error['password2'])) { ?>
				<em class="error"><?php echo $error['password2'] ?></em>
			<?php } ?>
		</fieldset>
	</fieldset>
	<fieldset class="field-grande">
		<header>
			<h3>Contato</h3>
		</header>
		<fieldset class="field-telefone1">
			<label for="field-telefone1">Telefone 1</label>
			<input type="text" data-mask="(00) 00000-0000" id="field-telefone1" name="billing_phone" value="<?php if (!empty($_POST['billing_phone'])) esc_attr_e($_POST['billing_phone']); ?>" />
		</fieldset>
		<fieldset class="field-telefone2">
			<label for="field-telefone2">Telefone 2</label>
			<input type="text" data-mask="(00) 00000-0000" id="field-telefone2" name="billing_phone2" value="<?php if (!empty($_POST['billing_phone2'])) esc_attr_e($_POST['billing_phone2']); ?>" />
		</fieldset>
		<fieldset class="field-data-celular">
			<label for="field-data-celular">Celular</label>
			<input type="text" data-mask="(00) 00000-0000" id="field-data-celular" name="billing_cellphone" value="<?php if (!empty($_POST['billing_cellphone'])) esc_attr_e($_POST['billing_cellphone']); ?>" />
		</fieldset>
		<fieldset class="field-email">
			<label for="field-data-email">E-mail</label>
			<input type="text" id="field-data-email" name="email" value="<?php if (!empty($_POST['email'])) esc_attr_e($_POST['email']); ?>" />
			<?php if (isset($error['email'])) { ?>
				<em class="error"><?php echo $error['email'] ?></em>
			<?php } ?>
		</fieldset>
		<fieldset class="field-nome-facebook">
			<label for="field-data-nome-facebook">Nome no facebook</label>
			<input type="text" id="field-data-nome-facebook" name="user_facebook" value="<?php if (!empty($_POST['user_facebook'])) esc_attr_e($_POST['user_facebook']); ?>" />
		</fieldset>
		<fieldset class="field-autorizo-sms">
			<input type="checkbox" id="checkbox-autorizo" name="user_autorizo_sms" value="on" <?php if (!empty($_POST['user_autorizo_sms'])) echo "checked"; ?> />
			<label for="checkbox-autorizo">Autorizo receber informações via SMS.</label>
		</fieldset>
	</fieldset>
	<fieldset class="field-grande">
		<header>
			<h3>Endereço</h3>
		</header>
		<fieldset class="field-endereco">
			<label for="field-endereco">Endereço <span class="required">*</span></label>
			<input type="text" id="field-endereco" name="billing_address_1" value="<?php if (!empty($_POST['billing_address_1'])) esc_attr_e($_POST['billing_address_1']); ?>" />
			<?php if (isset($error['billing_address_1'])) { ?>
				<em class="error"><?php echo $error['billing_address_1'] ?></em>
			<?php } ?>
		</fieldset>
		<fieldset class="field-numero">
			<label for="field-numero">Número <span class="required">*</span></label>
			<input type="text" id="field-numero" name="billing_number" value="<?php if (!empty($_POST['billing_number'])) esc_attr_e($_POST['billing_number']); ?>" />
			<?php if (isset($error['billing_number'])) { ?>
				<em class="error"><?php echo $error['billing_number'] ?></em>
			<?php } ?>
		</fieldset>
		<fieldset class="field-cep">
			<label for="field-cep">CEP <span class="required">*</span></label>
			<input type="text" data-mask="00000-000" id="field-cep" name="billing_postcode" value="<?php if (!empty($_POST['billing_postcode'])) esc_attr_e($_POST['billing_postcode']); ?>" />
			<?php if (isset($error['billing_postcode'])) { ?>
				<em class="error"><?php echo $error['billing_postcode'] ?></em>
			<?php } ?>
		</fieldset>
		<fieldset class="field-bairro">
			<label for="field-bairro">Bairro <span class="required">*</span></label>
			<input type="text" id="field-bairro" name="billing_neighborhood" value="<?php if (!empty($_POST['billing_neighborhood'])) esc_attr_e($_POST['billing_neighborhood']); ?>" />
			<?php if (isset($error['billing_neighborhood'])) { ?>
				<em class="error"><?php echo $error['billing_neighborhood'] ?></em>
			<?php } ?>
		</fieldset>
		<fieldset class="field-municipio">
			<label for="field-municipio">Município <span class="required">*</span></label>
			<input type="text" id="field-municipio" name="billing_city" value="<?php if (!empty($_POST['billing_city'])) esc_attr_e($_POST['billing_city']); ?>" />
			<?php if (isset($error['billing_city'])) { ?>
				<em class="error"><?php echo $error['billing_city'] ?></em>
			<?php } ?>
		</fieldset>
		<fieldset class="field-estado">
			<label for="field-estado">UF <span class="required">*</span></label>
			<select id="select-estado" name="billing_state">
				<?php
				$estados = array("AC" => "Acre", "AL" => "Alagoas", "AM" => "Amazonas", "AP" => "Amapá", "BA" => "Bahia", "CE" => "Ceará", "DF" => "Distrito Federal", "ES" => "Espírito Santo", "GO" => "Goiás", "MA" => "Maranhão", "MT" => "Mato Grosso", "MS" => "Mato Grosso do Sul", "MG" => "Minas Gerais", "PA" => "Pará", "PB" => "Paraíba", "PR" => "Paraná", "PE" => "Pernambuco", "PI" => "Piauí", "RJ" => "Rio de Janeiro", "RN" => "Rio Grande do Norte", "RO" => "Rondônia", "RS" => "Rio Grande do Sul", "RR" => "Roraima", "SC" => "Santa Catarina", "SE" => "Sergipe", "SP" => "São Paulo", "TO" => "Tocantins");
				$estado = "";
				if (!empty($_POST['billing_state']))
					$estado = esc_attr_e($_POST['billing_state']);
				foreach ($estados as $sigla => $nome) {
					if (!empty($estado) && $estado == $sigla)
						echo '<option value="' . $sigla . '" selected=\"selected\">' . $nome . '</option>';
					else
						echo '<option value="' . $sigla . '">' . $nome . '</option>';
				}
				?>
			</select>
			<?php if (isset($error['billing_state'])) { ?>
				<em class="error"><?php echo $error['billing_state'] ?></em>
			<?php } ?>
		</fieldset>
	</fieldset>
<?php
}

add_action('woocommerce_register_form_start', 'wooc_extra_register_fields');

/**
 * Validate the extra register fields.
 *
 * @param  string $username          Current username.
 * @param  string $email             Current email.
 * @param  object $validation_errors WP_Error object.
 *
 * @return void
 */
function wooc_validate_extra_register_fields($username, $email, $validation_errors)
{
	if (isset($_POST['billing_first_name']) && empty($_POST['billing_first_name'])) {
		$validation_errors->add('billing_first_name', __('<strong>Erro</strong>: Digite o seu nome.', 'woocommerce'));
	}
	if (isset($_POST['billing_rg']) && empty($_POST['billing_rg'])) {
		$validation_errors->add('billing_rg_error', __('<strong>Erro</strong>: Digite o seu rg.', 'woocommerce'));
	}
	if (isset($_POST['billing_cpf']) && empty($_POST['billing_cpf'])) {
		$validation_errors->add('billing_cpf_error', __('<strong>Erro</strong>: Digite o seu cpf.', 'woocommerce'));
	}
	if (isset($_POST['user_birthdate']) && empty($_POST['user_birthdate'])) {
		$validation_errors->add('user_birthdate', __('<strong>Erro</strong>: Digite o sua data de nascimento.', 'woocommerce'));
	}

	if (isset($_POST['billing_city']) && empty($_POST['billing_city'])) {
		$validation_errors->add('billing_city_error', __('<strong>Erro</strong>: Digite o sua cidade.', 'woocommerce'));
	}
	if (isset($_POST['billing_state']) && empty($_POST['billing_state'])) {
		$validation_errors->add('billing_state_error', __('<strong>Erro</strong>: Digite o seu estado.', 'woocommerce'));
	}
	if (isset($_POST['billing_endereco']) && empty($_POST['billing_endereco'])) {
		$validation_errors->add('billing_endereco_error', __('<strong>Erro</strong>: Digite o seu endereco.', 'woocommerce'));
	}
	if (isset($_POST['billing_numero']) && empty($_POST['billing_numero'])) {
		$validation_errors->add('billing_numero_error', __('<strong>Erro</strong>: Digite o seu número.', 'woocommerce'));
	}
	if (isset($_POST['billing_bairro']) && empty($_POST['billing_bairro'])) {
		$validation_errors->add('billing_bairro_error', __('<strong>Erro</strong>: Digite o seu bairro.', 'woocommerce'));
	}
}

add_action('woocommerce_register_post', 'wooc_validate_extra_register_fields', 10, 3);

/**
 * Save the extra register fields.
 *
 * @param  int  $customer_id Current customer ID.
 *
 * @return void
 */
function wooc_save_extra_register_fields($customer_id)
{
	if (isset($_POST['billing_first_name'])) {
		// WordPress default first name field.
		update_user_meta($customer_id, 'first_name', sanitize_text_field($_POST['billing_first_name']));

		// WooCommerce billing first name.
		update_user_meta($customer_id, 'billing_first_name', sanitize_text_field($_POST['billing_first_name']));
	}

	if (isset($_POST['billing_rg'])) {
		// WooCommerce billing rg
		update_user_meta($customer_id, 'billing_rg', sanitize_text_field($_POST['billing_rg']));
	}
	if (isset($_POST['billing_cpf'])) {
		// WooCommerce billing rg
		update_user_meta($customer_id, 'billing_cpf', sanitize_text_field($_POST['billing_cpf']));
	}
	if (isset($_POST['user_escolaridade'])) {
		// WooCommerce billing rg
		update_user_meta($customer_id, 'user_escolaridade', sanitize_text_field($_POST['user_escolaridade']));
	}
	if (isset($_POST['user_birthdate'])) {
		// WooCommerce billing rg
		update_user_meta($customer_id, 'user_birthdate', sanitize_text_field($_POST['user_birthdate']));
	}
	if (isset($_POST['billing_phone'])) {
		// WooCommerce billing phone
		update_user_meta($customer_id, 'billing_phone', sanitize_text_field($_POST['billing_phone']));
	}
	if (isset($_POST['billing_phone2'])) {
		// WooCommerce billing phone2
		update_user_meta($customer_id, 'billing_phone2', sanitize_text_field($_POST['billing_phone2']));
	}
	if (isset($_POST['billing_cellphone'])) {
		// WooCommerce billing phone2
		update_user_meta($customer_id, 'billing_cellphone', sanitize_text_field($_POST['billing_cellphone']));
	}
	//	if ( isset( $_POST['billing_cellphone'] ) ) {
	//		// WooCommerce billing phone2
	//		update_user_meta( $customer_id, 'billing_cellphone', sanitize_text_field( $_POST['billing_cellphone'] ) );
	//	}
	if (isset($_POST['user_facebook'])) {
		// WooCommerce billing facebook
		update_user_meta($customer_id, 'user_facebook', sanitize_text_field($_POST['user_facebook']));
	}
	if (isset($_POST['user_autorizo_sms'])) {
		// WooCommerce billing autorizo
		update_user_meta($customer_id, 'user_autorizo_sms', sanitize_text_field($_POST['user_autorizo_sms']));
	}
	if (isset($_POST['billing_address_1'])) {
		// WooCommerce billing address1
		update_user_meta($customer_id, 'billing_address_1', sanitize_text_field($_POST['billing_address_1']));
	}
	if (isset($_POST['billing_number'])) {
		// WooCommerce billing number
		update_user_meta($customer_id, 'billing_number', sanitize_text_field($_POST['billing_number']));
	}
	if (isset($_POST['billing_postcode'])) {
		// WooCommerce billing postcode
		update_user_meta($customer_id, 'billing_postcode', sanitize_text_field($_POST['billing_postcode']));
	}
	if (isset($_POST['billing_neighborhood'])) {
		// WooCommerce billing neighborhood
		update_user_meta($customer_id, 'billing_neighborhood', sanitize_text_field($_POST['billing_neighborhood']));
	}
	if (isset($_POST['billing_city'])) {
		// WooCommerce billing city
		update_user_meta($customer_id, 'billing_city', sanitize_text_field($_POST['billing_city']));
	}
	if (isset($_POST['billing_state'])) {
		// WooCommerce billing state
		update_user_meta($customer_id, 'billing_state', sanitize_text_field($_POST['billing_state']));
	}
	if (isset($_POST['billing_country'])) {
		// WooCommerce billing country
		update_user_meta($customer_id, 'billing_country', sanitize_text_field($_POST['billing_country']));
	}
	if (isset($_POST['user_nome_emergencia'])) {
		// WooCommerce billing nome_emergência
		update_user_meta($customer_id, 'user_nome_emergencia', sanitize_text_field($_POST['user_nome_emergencia']));
	}
	if (isset($_POST['user_telefone_emergencia'])) {
		// WooCommerce billing nome_emergência
		update_user_meta($customer_id, 'user_telefone_emergencia', sanitize_text_field($_POST['user_telefone_emergencia']));
	}
}

add_action('woocommerce_created_customer', 'wooc_save_extra_register_fields');

remove_action('init', 'woocommerce_process_registration');
add_action('init', 'nuce_woocommerce_process_registration');

/**
 * Process the registration form.
 */
function nuce_woocommerce_process_registration()
{
	//	print_r( $_POST );



	if (!empty($_POST['register']) && wp_verify_nonce($_POST['_wpnonce'], 'woocommerce-register')) {

		if ('no' === get_option('woocommerce_registration_generate_username')) {
			$_username = $_POST['username'];
		} else {
			$_username = $_POST['email'];
		}

		if ('no' === get_option('woocommerce_registration_generate_password')) {
			$_password = $_POST['password'];
		} else {
			$_password = '';
		}

		try {

			$validation_error = new WP_Error();
			$validation_error = apply_filters('woocommerce_process_registration_errors', $validation_error, $_username, $_password, $_POST['email']);

			if ($validation_error->get_error_code()) {
				throw new Exception('<strong>' . __('Error', 'woocommerce') . ':</strong> ' . $validation_error->get_error_message());
			}
		} catch (Exception $e) {

			wc_add_notice($e->getMessage(), 'error');
			return;
		}

		$username = !empty($_username) ? wc_clean($_username) : '';
		$email = !empty($_POST['email']) ? sanitize_email($_POST['email']) : '';
		$password = $_password;

		// Anti-spam trap
		if (!empty($_POST['email_2'])) {
			wc_add_notice('<strong>' . __('ERROR', 'woocommerce') . '</strong>: ' . __('Anti-spam field was filled in.', 'woocommerce'), 'error');
			return;
		}

		$new_customer = wc_create_new_customer($email, $username, $password);

		if (is_wp_error($new_customer)) {
			wc_add_notice($new_customer->get_error_message(), 'error');
			return;
		}

		wc_set_customer_auth_cookie($new_customer);

		// Redirect
		if (wp_get_referer()) {
			$redirect = esc_url(wp_get_referer());
		} else {
			$redirect = esc_url(get_permalink(get_id_by_slug("meus-dados")) . '?register=true');
		}

		/* Digimailing
		 * insere email do novo usuário no digimailing.com
		 * 		 */

		//insere email do novo usuário no digimailing.com

		if ($_POST['billing_state'] == 'PE') {
			$mailinglist = 195; //coidgo da lista de contatos no digimailing
		} else {
			$mailinglist = 343;
		}

		// passa o email e nome
		cadastraNoDigimailing($email, $mailinglist, array("2" => sanitize_text_field($_POST['billing_first_name'])));
		/* Fim do digimailing */

		wp_redirect(apply_filters('woocommerce_registration_redirect', $redirect));
		exit;
	}
}

add_filter('woocommerce_registration_redirect', 'my_registration_redirect');

function my_registration_redirect($redirect)
{

	return esc_url(get_permalink(get_id_by_slug("meus-dados")) . '?register=true');
}

//**  FIM DO WOOCOMMERCE **//

/** Exclude woocommerce products from wp default search results */
add_action('init', 'update_my_custom_type', 99);

function update_my_custom_type()
{
	global $wp_post_types;

	if (post_type_exists('product')) {

		// exclude from search results
		$wp_post_types['product']->exclude_from_search = true;
	}
}

/* Remove Checkout Fields */

//SEARCH
function mySearchFilter($query)
{

	return $query;
}

//add_action( 'pre_get_posts', 'mySearchFilter' );

add_action('pre_get_posts', 'nuce_pre_get_posts', 1);

function nuce_pre_get_posts($query)
{

	// not an admin page and is the main query
	if (!is_admin() && $query->is_main_query()) {

		$post_type = isset($_GET['type']) ? $_GET['type'] : false;
		if (!$post_type) {
			$post_type = 'any';
		} else {
			if (is_post_type_archive('downloads')) {
				$query->set('posts_per_page', 8);
			}
		}
		if ($query->is_search) {
			$query->set('post_type', $post_type);
			$query->set('posts_per_page', 8);
		}
	}
}

/**
 * Checks if a particular user has a role.
 * Returns true if a match was found.
 *
 * @param string $role Role name.
 * @param int $user_id (Optional) The ID of a user. Defaults to the current user.
 * @return bool
 */
function nuce_check_user_role($role, $user_id = null)
{

	if (is_numeric($user_id))
		$user = get_userdata($user_id);
	else
		$user = wp_get_current_user();

	if (empty($user))
		return false;

	return in_array($role, (array) $user->roles);
}

function custom_lost_password_page()
{
	return home_url('/esqueci-a-senha/');
}

// function wpse_133647_custom_lost_password_page
add_filter('lostpassword_url', 'custom_lost_password_page');


/** changing default wordpres email settings */
add_filter('wp_mail_from', 'new_mail_from');
add_filter('wp_mail_from_name', 'new_mail_from_name');

function new_mail_from($old)
{
	return 'no-reply@nuceconcursos.com.br';
}

function new_mail_from_name($old)
{
	return 'Nuce Concursos';
}

/** funtion allow login with email  */
// Change login credentials
// remove the default filter
remove_filter('authenticate', 'wp_authenticate_username_password', 20, 3);
// add custom filter
add_filter('authenticate', 'my_authenticate_username_password', 20, 3);

function my_authenticate_username_password($user, $username, $password)
{

	// If an email address is entered in the username box,
	// then look up the matching username and authenticate as per normal, using that.
	if (!empty($username)) {
		//if the username doesn't contain a @ set username to blank string
		//causes authenticate to fail
		if (strpos($username, '@')) {
			$user = get_user_by('email', $username);
			if (isset($user->user_login, $user))
				$username = $user->user_login;
		}
	}
	// using the username found when looking up via email
	return wp_authenticate_username_password(NULL, $username, $password);
}

/* ------------------------------------------------------------------------------------- */
/* Login Hooks and Filters
  /*------------------------------------------------------------------------------------- */
if (!function_exists('custom_login_fail')) {

	function custom_login_fail($username)
	{
		$referrer = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : ""; // where did the post submission come from?
		if (strstr($referrer, '?login=empty')) {
			$referrer = str_replace('?login=empty', '', $referrer);
		}

		// if there's a valid referrer, and it's not the default log-in screen
		if (!empty($referrer) && !strstr($referrer, 'wp-login') && !strstr($referrer, 'wp-admin')) {

			if (!strstr($referrer, '?login=failed')) {
				wp_redirect($referrer . '?login=failed');  // let's append some information (login=failed) to the URL for the theme to use
			} else {
				wp_redirect($referrer);  // let's append some information (login=failed) to the URL for the theme to use
			}

			exit;
		}
	}
}
add_action('wp_login_failed', 'custom_login_fail'); // hook failed login

if (!function_exists('custom_login_empty')) {

	function custom_login_empty()
	{
		$referrer = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : "";
		if (strstr($referrer, '?login=failed')) {
			$referrer = str_replace('?login=failed', '', $referrer);
		}

		//		if ( strstr( $referrer, get_home_url() ) && $user == null ) { // mylogin is the name of the loginpage.
		if (!empty($referrer) && !strstr($referrer, 'wp-login') && !strstr($referrer, 'wp-admin')) {
			if (!strstr($referrer, '?login=empty')) { // prevent appending twice
				wp_redirect($referrer . '?login=empty');
			} else {
				wp_redirect($referrer);
			}
		} else {
			//			echo "not loged";
		}
	}
}
add_action('authenticate', 'custom_login_empty');

function cadastraNoDigimailing($email, $lista, $fields = array())
{
	if ($email && $lista) {
		$digimailingAPI = new digimailingAPI(DIGIUSER, KEY);
		$result = $digimailingAPI->addEmail($email, $lista, $fields);

		if ($result)
			return true;
	}
	return false;
}

function loga_no_mentoria($user_login, $user)
{
	include_once 'inc/mentoriaApi.php';

	if (nuce_check_user_role('customer', $user->ID)) {
		$mentoriaApi = new mentoriaApi();
		$return = array('user' => $user, 'retorno' => $mentoriaApi->loginAlunoMentoria($user_login));
		write_log($return);
	}
}

add_action('wp_login', 'loga_no_mentoria', 10, 2);

function cadastra_no_mentoria($name, $username, $email, $course_code, $user)
{
	include_once 'inc/mentoriaApi.php';
	if (nuce_check_user_role('customer', $user->ID)) {
		$mentoriaApi = new mentoriaApi();
		$return = array('user' => $user, 'retorno' => $mentoriaApi->cadastraAlunoMentoria($name, $username, $email, $course_code));
		write_log($return);
	}
}

if (!function_exists('write_log')) {

	function write_log($log)
	{
		if (true === WP_DEBUG) {
			if (is_array($log) || is_object($log)) {
				error_log(var_export($log, true));
			} else {
				error_log($log);
			}
		}
	}
}

if (!function_exists('get_turma_valor')) {

	function get_turma_valor($post_id, $tipo_de_aluno)
	{

		global $wpdb;
		//pega o nome do meta_key da turma escolhida pro código
		$rows = $wpdb->get_results($wpdb->prepare(
			"
            SELECT *
            FROM wp_postmeta
            WHERE meta_key LIKE %s
                AND meta_value = %s
				AND post_id = %d
            ",
			'%_curso_turma_valores_repeater_tipo_de_aluno', // meta_name: $ParentName_$RowNumber_$ChildName
			$tipo_de_aluno, // meta_value: 'type_3' for example
			$post_id // pos_id: 'type_3' for example
		));

		//querbra a string do tipo: curso_turma_0_curso_turma_valores_repeater_1_curso_turma_valores_repeater_tipo_de_aluno] em:
		//		[0] => curso_turma_0
		//		[1] => 1
		//		[2] => tipo_de_aluno
		//para o obter o indice do repeater pra pegar o seu valor de fato

		if ($rows) {
			$meta_key = explode("_curso_turma_valores_repeater_", $rows[0]->meta_key);
			//consulta para pegar o valor da turma por tipo de aluno
			$rows2 = $wpdb->get_results($wpdb->prepare(
				"SELECT *
            FROM wp_postmeta
            WHERE meta_key LIKE %s
			AND post_id = %d",
				$meta_key[0] . "_curso_turma_valores_repeater_" . $meta_key[1] . "_curso_turma_valores_repeater_valor",
				$post_id
			));


			if ($rows2)
				return $rows2[0]->meta_value;
		}
	}

	return false;
}
