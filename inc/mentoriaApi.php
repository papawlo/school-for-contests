<?php

/**
 * Description of mentoriaApi
 * 
 * Integração com o mentoria.cc
 * Ao fazer o cadastro do aluno no Nuce ele deve ser cadastrado também no mentoria na turma escolhida.
 * 
 * API de integração do mentoria passada por André Dieb <andre.dieb@gmail.com>
 *
 * @author Papaulo <papawlo@gmail.com>
 */
class mentoriaApi {

	/**
	 * @var string
	 */
	public $version = '0.5';

	/**
	 * @var string $name
	 */
	public $name;

	/**
	 * @var string $email
	 */
	public $email;

	/**
	 * @var string $username
	 */
	public $username;

	/**
	 * @var string $course_code
	 */
	public $course_code;

	/**
	 * @var string $organization_name
	 */
	public $organization_name = "Nuce Concursos";

	/**
	 * @var $_nuceToken
	 * @var $_endpoint
	 */
	private $_nuceToken = "kgMUHBALvNzexpAwvqKq", $_signature, $_endpoint, $_jsonrequest;

	public function __construct() {
		
	}

	/**
	 * 
	 * API MENTORIA
	 * 
	 * 
	  Request tipo POST para http://mentoria.nuceconcursos.com.br/api/students
	  - Setar header Content-type: application/json
	  - Setar header Private-token: <TOKEN_NUCE>
	  - Setar body da request um JSON do seguinte formato:

	  {
	  "name": "nome do aluno",
	  "username": "username do aluno",
	  "email": "email do aluno",
	  "course_code": "código do curso"
	  "organization_name": "Nuce Concursos"
	  }
	 * 
	 * Resposta: no sucesso da criação, response status HTTP 201 e nenhum conteúdo. Caso falhe, receberá 403 ou 404 e uma mensagem de erro.
	 * 
	 */
	public function cadastraAlunoMentoria( $name, $username, $email, $course_code ) {
		$this->_endpoint = 'http://mentoria.nuceconcursos.com.br/api/v1/students';

		$this->name = $name;
		$this->username = $username;
		$this->email = $email;
		$this->course_code = $course_code;


		if ( !$this->name || !$this->username || !$this->email || !$this->course_code ) {
			return false;
		}

		$data = array(
			"name" => $this->name,
			"username" => $this->username,
			"email" => $this->email,
			"course_code" => $this->course_code,
			"organization_name" => $this->organization_name
		);

		$this->_jsonrequest = json_encode( $data );

		try {
			//  Initiate curl
			$ch = curl_init();

// Set The Response Format to Json
			curl_setopt( $ch, CURLOPT_HTTPHEADER, array( 'Content-type: application/json', 'Private-token: ' . $this->_nuceToken ) );
			curl_setopt( $ch, CURLOPT_HEADER, true );
			curl_setopt( $ch, CURLOPT_NOBODY, true ); // we don't need body
// Disable SSL verification
			curl_setopt( $ch, CURLINFO_HEADER_OUT, true );

// Set the url
			curl_setopt( $ch, CURLOPT_URL, $this->_endpoint );

			curl_setopt( $ch, CURLOPT_CUSTOMREQUEST, "POST" );
			curl_setopt( $ch, CURLOPT_POST, true );
			// Will return the response, if false it print the response
			curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
			curl_setopt( $ch, CURLOPT_POSTFIELDS, $this->_jsonrequest );
// Execute
			$result = curl_exec( $ch );


			$http_status = curl_getinfo( $ch, CURLINFO_HTTP_CODE );


// Closing
			curl_close( $ch );

			switch ( $http_status ) {
				case '201':
					return true;
					break;
				default:
					return false;
					break;
			}
		} catch ( Exception $e ) {
			return false;
//			return array( 'error' => $e->getMessage() );
		}
	}

	/*
	 * LOGIN via API no mentoria
	 * 
	 * Formato da requisição:

	 * 	- Request tipo POST para url http://mentoria.nuceconcursos.com.br/api/v1/sessions/sso
	 * 	- Setar header Content-type: application/json
	 * 	- Setar header Private-token: <TOKEN_NUCE>
	 * 	- Setar body da request um JSON do seguinte formato:

	 * 	{ "username": "username do aluno",
	 * 	"signature": "assinatura"
	 * 	}

	 * 	onde

	 * 	- assinatura = SHA256(key=CHAVE_SECRETA, data=username)
	 * 	- CHAVE_SECRETA é uma chave conhecida pelo Mentoria e pelo Nuce, pode ser guardada em um arquivo
	 * 	- CHAVE_SECRETA deve ser alterada em ambas localizações a cada mês
	 * 	- CHAVE_SECRETA também pode ser um arquivo que possamos escrever e alterar com facilidade no servidor
	 * 	- TOKEN_NUCE é o mesmo token descrito acima

	 */

	public function loginAlunoMentoria( $username ) {



		$this->username = $username;

		if ( !$this->username ) {
			return false;
		}
		$this->_signature = mentoriaApi::pegaChaveSecreta();

		$this->_endpoint = 'http://mentoria.nuceconcursos.com.br/api/v1/sessions/sso';

		$data = array(
			"username" => $this->username,
			"signature" => hash_hmac( 'sha256', $this->username, $this->_signature )
		);


		$this->_jsonrequest = json_encode( $data );

		try {

//  Initiate curl
			$ch = curl_init();

// Set The Response Format to Json
			curl_setopt( $ch, CURLOPT_HTTPHEADER, array( 'Content-type: application/json', 'Private-token: ' . $this->_nuceToken ) );

// Disable SSL verification
			curl_setopt( $ch, CURLINFO_HEADER_OUT, true );

// Set the url
			curl_setopt( $ch, CURLOPT_URL, $this->_endpoint );

			curl_setopt( $ch, CURLOPT_CUSTOMREQUEST, "POST" );
			curl_setopt( $ch, CURLOPT_POST, true );
			// Will return the response, if false it print the response
			curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
			curl_setopt( $ch, CURLOPT_POSTFIELDS, $this->_jsonrequest );
// Execute
			$result = curl_exec( $ch );

			$http_status = curl_getinfo( $ch, CURLINFO_HTTP_CODE );
// Closing
			curl_close( $ch );

			if ( $result === false ) {
				return false;
			}

			$retorno = "";

			switch ( $http_status ) {
				case '201':

					$retorno = json_decode( $result, true );

					break;

				default:
					$retorno = false;
					break;
			}


			if ( $retorno ) {
				setcookie( "remember_student_token", $retorno["cookie"], strtotime( '+30 days' ), "/", ".nuceconcursos.com.br", false, true );  /* expira em 30 dias */
				return true;
			} else {
				return false;
			}
		} catch ( Exception $e ) {
			return false;
//			return array( 'error' => $e->getMessage() );
		}
	}

	public static function pegaChaveSecreta() {
//		if ( !function_exists( 'get_home_path' ) )
//			require_once( dirname( __FILE__ ) . '/../../../wp-admin/includes/file.php' );
		return file_get_contents( ABSPATH . 'mentoria/chave.txt' );
//		$file = fopen( 'chave.txt', 'r' );
//		while ( $line = fgets( $file ) ) {
//			// <... Do your work with the line ...>
//			echo($line);
//		}
//		fclose( $file );
	}

}
