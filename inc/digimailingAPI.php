<?php

class digimailingAPI {

	private $_username, $_usertoken, $_xmlrequest;

	public function __construct( $username, $token ) {
		$this->_username = $username;
		$this->_usertoken = $token;
	}

	private function sendRequest() {
		$ch = curl_init( 'http://www.digimailing.com.br/xml.php' );
		curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1 );
		curl_setopt( $ch, CURLOPT_POST, 1 );
		curl_setopt( $ch, CURLOPT_NOBODY, false );
		curl_setopt( $ch, CURLOPT_POSTFIELDS, $this->_xmlrequest );
		$result = @curl_exec( $ch );



		if ( $result === false ) {
			echo "Error performing request";
		} else {
			$xml_doc = simplexml_load_string( $result );
			$arr = json_decode( json_encode( $xml_doc ), 1 );

//			print_r( $arr );
			if ( $xml_doc->status == 'SUCCESS' ) {
				return $xml_doc;
			} else {
				throw new Exception( $xml_doc->errormessage );
			}
		}
	}

	public function addEmail( $email, $mailinglist, $fields = array() ) {

		if ( self::isContactOnList( $email, $mailinglist ) ) {
			return true;
		}



		$xml = '<xmlrequest><username>' . $this->_username . '</username>
		<usertoken>' . $this->_usertoken . '</usertoken>
		<requesttype>subscribers</requesttype>
		<requestmethod>AddSubscriberToList</requestmethod>
		<details>
		<emailaddress>' . $email . '</emailaddress>
		<mailinglist>' . $mailinglist . '</mailinglist>
		<confirmed>0</confirmed>
		<format>html</format>';

		if ( count( $fields ) > 0 ) :
			$xml .= '<customfields>';

			foreach ( $fields as $key => $value ) {
				$xml .= '<item>';
				$xml .= '<fieldid>' . $key . '</fieldid>';
				$xml .= '<value>' . $value . '</value>';
				$xml .= '</item>';
			}

			$xml .= '</customfields>';
		endif;

		$xml .= '</details></xmlrequest>';

		$this->_xmlrequest = $xml;

		try {
			$result = $this->sendRequest();

			$result = (array) $result;


			if ( is_numeric( $result['data'] ) ) {
				return true;
			} else {
				return false;
			}
		} catch ( Exception $e ) {
			return $e->getMessage();
		}
	}

	public function getListas() {
		$xml = '<xmlrequest><username>' . $this->_username . '</username>
		<usertoken>' . $this->_usertoken . '</usertoken>
		<requesttype>user</requesttype>
		<requestmethod>GetLists</requestmethod>
		<details></details></xmlrequest>';

		$this->_xmlrequest = $xml;

		try {
			return $this->sendRequest();
		} catch ( Exception $e ) {
			return false;
		}
	}

	public function isContactOnList( $email, $mailinglist ) {


		$xml = '<xmlrequest><username>' . $this->_username . '</username>
		<usertoken>' . $this->_usertoken . '</usertoken>
		<requesttype>subscribers</requesttype>
		<requestmethod>IsSubscriberOnList</requestmethod>
		<details>
		<Email>' . $email . '</Email>
		<List>' . $mailinglist . '</List>		
		</details>
		</xmlrequest>';

		$this->_xmlrequest = $xml;

		try {
			$result = $this->sendRequest();

			$result = (array) $result;


			if ( is_numeric( $result['data'] ) ) {
				return true;
			} else {
				return false;
			}
		} catch ( Exception $e ) {
			return false;
		}
	}

}
