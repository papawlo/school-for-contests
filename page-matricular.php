<?php

if ( !defined( 'ABSPATH' ) ) {
	header( 'Location: /' );
	exit;
}


$nonce = isset( $_REQUEST['_wpnonce'] ) ? $_REQUEST['_wpnonce'] : false;

if ( $nonce ) {
// verify nonce
	if ( wp_verify_nonce( $nonce, 'matricula-nonce' ) ) {

		$WPMatriculas = new WPMatriculas();

//		$matriculado = $WPMatriculas->is_aluno_matriculado( (int) $_POST['id_aluno'], esc_attr( $_POST['turma'] ) );
		$matriculado = false;
		if ( !$matriculado ) {
//				var_dump( $matriculado );
//				exit;
			$data = array();
			$data['id_aluno'] = sanitize_text_field( $_POST['id_aluno'] );
			$data['id_curso'] = (int) sanitize_text_field( $_POST['id_curso'] );
			$data['turma'] = sanitize_text_field( $_POST['turma'] );
			$data['id_turma'] = md5( $data['turma'] );
			$tipo_de_aluno = (int) $_POST["tipo_de_aluno"];
			$data['valor'] = get_turma_valor( $data['id_curso'], $tipo_de_aluno );

			$data['status'] = isset( $_POST['status'] ) ? $_POST['status'] : 'aguardando';
			$data['create_date'] = date( "Y-m-d H:i:s" );

			$result = $WPMatriculas->matricular( $data );

			if ( $result ) {

				$data["id_matricula"] = $result;

				global $user_ID;
				global $current_user;
				get_currentuserinfo();
				$telefone = preg_replace( "/[^0-9]/", "", get_user_meta( $user_ID, 'billing_phone', true ) );
				$data["cliente_ddd"] = substr( $telefone, 0, 2 );
				$data["cliente_telefone"] = substr( $telefone, 2 );

				$data["cliente_nome"] = $current_user->user_firstname;
				$data["cliente_email"] = $current_user->user_email;
				$data["cliente_document_value"] = get_user_meta( $user_ID, 'billing_cpf', true );

				$data["nome_curso"] = get_the_title( $data['id_curso'] );
				$data['nome_turma'] = $data['turma'];
//				print_r( $data);
//				exit();



				$_SESSION["message"] = array( "type" => "sucesso", "text" => "Matriculado com sucesso", "_wp_http_referer" => $_POST["_wp_http_referer"] );
				write_log( array( time() => $_SESSION["message"] ) );

				include_once "lib/createPaymentRequest.php";
				$pagSeguroAPI = new CreatePaymentRequest( $data );
				$url = $pagSeguroAPI->main();
				wp_redirect( $url );
			}
		} else {
			$_SESSION["message"] = array( "type" => "erro", "text" => "Já Matriculado", "_wp_http_referer" => $_POST["_wp_http_referer"] );

			write_log( array( time() => $_SESSION["message"] ) );
//					return array( "type" => "error", "text" => "Erro ao matricular" );
//			return true;
		}
	} else {


		$_SESSION["message"] = array( "type" => "erro", "text" => "Erro ao matricular", "_wp_http_referer" => $_POST["_wp_http_referer"] );
		write_log( array( time() => $_SESSION["message"] ) );
//		return true;
	}
} else {
//	print_r($_SERVER);
	wp_redirect( site_url() );
}
//}
