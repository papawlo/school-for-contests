<?php
/*
  Template Name: Reset Page
 */

global $wpdb, $user_ID;
$error = '';
$success = '';
$user_data = '';
//print_r($_GET);exit;

if ( !$user_ID ) { //block logged in users
	//Validation stuffs, Form stuffs, etc
} else {
	wp_redirect( home_url() );
	exit;
	//redirect logged in users to home page
}
get_header();

if ( isset( $_GET['key'] ) && $_GET['action'] == "reset_pwd" ) {
	$reset_key = $_GET['key'];
	$user_login = $_GET['login'];
	$user_data = $wpdb->get_row( $wpdb->prepare( "SELECT ID, user_login, user_email FROM $wpdb->users WHERE user_activation_key = %s AND user_login = %s", $reset_key, $user_login ) );
//	print_r( $user_data );
//	print_r( $reset_key );
//	exit();

	$user_login = $user_data->user_login;
	$user_email = $user_data->user_email;
	if ( !empty( $reset_key ) && !empty( $user_data ) ) {
		$new_password = wp_generate_password( 7, false ); //you can change the number 7 to whatever length needed for the new password
		wp_set_password( $new_password, $user_data->ID );
		//mailing the reset details to the user
		$message = __( 'Sua nova senha para a conta  para o site:' ) . "\r\n\r\n";
		$message .= get_bloginfo( 'name' ) . "\r\n\r\n";
		$message .= sprintf( __( 'Usuário: %s' ), $user_login ) . "\r\n\r\n";
		$message .= sprintf( __( 'Senha: %s' ), $new_password ) . "\r\n\r\n";
		$message .= __( 'Agora você pode fazer login em: ' ) . get_option( 'siteurl' ) . "\r\n\r\n";

		if ( $message && !wp_mail( $user_email, 'Pedido de redefinição de senha', $message ) ) {
			$error = "Email não conseguiu enviar por algum motivo desconhecido";
		} else {
			$success = 'Sua senha foi alterada. Agora você pode fazer o login com sua nova senha';
		}
	} else
		$error =  'Não é uma chave válida.' ;
}
?>
<section id="esqueci-a-senha">
	<div class="content">
		<header class="header-padrao">
			<h2>Esqueceu sua senha?</h2>
		</header>
		<?php
// check if we're in reset form
		if ( isset( $_POST['action'] ) && 'reset' == $_POST['action'] ) {
			if ( !wp_verify_nonce( $_POST['pwd_nonce'], "pwd_nonce" ) ) {
				$error = "Sem truques, por favor";
			} else {

				$user_login = esc_sql( trim( $_POST['user_login'] ) );

				if ( empty( $user_login ) ) {
					$error = 'Digite um usuário ou e-mail..';
				} else {
					if ( strpos( $user_login, '@' ) ) {
						$user_data = get_user_by( 'email', $user_login );


						if ( empty( $user_data ) || $user_data->caps['administrator'] == 1 ) {
							//the condition $user_data->caps[administrator] == 1 to prevent password change for admin users.
							//if you prefer to offer password change for admin users also, just delete that condition.
							$error = 'Não há usuário registrado com o e-mail informado.';
						}
					} else {
						$user_data = get_user_by( 'login', $user_login );
						if ( empty( $user_data ) || $user_data->caps['administrator'] == 1 ) {
							//the condition $user_data->caps[administrator] == 1 to prevent password change for admin users.
							//if you prefer to offer password change for admin users also, just delete that condition.
							$error = 'Não há usuário registrado com o login informado.';
						}
					}
				}//fim else validacoes
			}//fim ELSE  NONCE
			if ( empty( $error ) ) {

				$user_login = $user_data->user_login;
				$user_email = $user_data->user_email;

				$random_password = wp_generate_password( 12, false );


				$key = $wpdb->get_var( $wpdb->prepare( "SELECT user_activation_key FROM $wpdb->users WHERE user_login = %s", $user_login ) );
				if ( empty( $key ) ) {
					//generate reset key
					$key = wp_generate_password( 20, false );
					$wpdb->update( $wpdb->users, array( 'user_activation_key' => $key ), array( 'user_login' => $user_login ) );
				}

//emailing password change request details to the user
				$message = __( 'Alguém requisitou a redefinição da senha para a seguinte conta:' ) . "\r\n\r\n";
				$message .= get_option( 'siteurl' ) . "\r\n\r\n";
				$message .= sprintf( __( 'Usuário: %s' ), $user_login ) . "\r\n\r\n";
				$message .= __( 'Se isso foi um erro, apenas ignore este email e nada acontecerá.' ) . "\r\n\r\n";
				$message .= __( 'Para redefinir sua senha, visite o seguinte endereço:' ) . "\r\n\r\n";
				$message .= get_permalink() . "?action=reset_pwd&key=$key&login=" . rawurlencode( $user_login )  . "\r\n";
				if ( $message && !wp_mail( $user_email, 'Pedido de redefinição de senha', $message ) ) {
					$error = "Email não conseguiu enviar por algum motivo desconhecido";
				} else {
					$success = 'Confira seu email para redefinir sua senha';
				}
			}//fim IF envia email
		}//fim IF POST
		?>


		<form method="post" action="" id="esqueciForm" class="wp-user-form">
			<fieldset class="field-legend">
				<legend>Para redefinir sua senha, digite o seu usuário ou endereço de e-mail que você usou para fazer cadastro no Nuce.</legend>
			</fieldset>
			<fieldset class="field-input-label">
				<label for="user_login">Endereço de e-mail</label>
<?php $user_login = isset( $_POST['user_login'] ) ? esc_sql( trim( $_POST['user_login'] ) ) : ''; ?>
				<input type="text" name="user_login" value="<?php echo $user_login; ?>" size="20" id="user_login" required="true" placeholder="<?php _e( 'Username or Email' ); ?>"/>				
			</fieldset>
			<fieldset class="input-submit">
<?php do_action( 'login_form', 'resetpass' ); ?>
				<button type="submit">
					<span>Enviar</span>
					<svg>
					<use xlink:href="#icon-aviao" />
					</svg>
				</button>
				<input type="hidden" name="action" value="reset" />
				<input type="hidden" name="pwd_nonce" value="<?php echo wp_create_nonce( "pwd_nonce" ); ?>" />
			</fieldset>
		</form>
	</div>
</section>

</div><!-- /wrap -->
<footer id="footer" role="contentinfo">
	<div id="newsletter">
		<div class="content">
			<form action="<?php bloginfo( 'url' ); ?>/wp-admin/admin-ajax.php" method="post" class="form-newsletter">
				<input type="hidden" name="action" value="enviarNewsletter" />
				<fieldset class="field-legend">
					<svg>
					<use xlink:href="#icon-envelope" />
					</svg>
					<legend>Newsletter<span>Cadastre seu e-mail para receber nossos informativos.</span></legend>
				</fieldset>
				<fieldset class="field-email">
					<input type="email" placeholder="Seu e-mail" name="email"/>
					<button type="submit"><span>Enviar</span>
						<svg>
						<use xlink:href="#icon-aviao" />
						</svg>
					</button>
				</fieldset>
			</form>
		</div>
	</div><!-- #newsletter -->
	<div id="endereco">
		<div class="content">
			<h5>&copy; <?php echo date( 'Y' ); ?> NUCE - Núcleo de Concursos Especial</h5>
			<h6>Rua Joaquim Felipe, 60 Boa Vista (ao lado da Celpe) • Recife - PE  •  contato@nuceconcursos.com.br  •  Fone: (81) 3198 1414</h6>
		</div>
	</div><!-- #endereco -->
</footer><!-- #footer -->
<?php
if ( !empty( $error ) ) {
	?>
	<div id="mensagens-de-retorno" class="erro">
		<div class="overlay"></div>
		<div class="box">
			<h3><?php echo $error; ?></h3>
		</div>
	</div>
	<?php
}



if ( !empty( $success ) ) {
	?>
	<div id="mensagens-de-retorno" class="sucesso">
		<div class="overlay"></div>
		<div class="box">
			<h3><?php echo $success; ?></h3>
		</div>
	</div>
	<?php
}
?>
<?php wp_footer(); ?>
<?php require_once get_template_directory() . "/assets/images/sprite.svg"; ?>
<!--Start of Zopim Live Chat Script-->
<script type="text/javascript">
//window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=
//d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
//_.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute('charset','utf-8');
//$.src='//v2.zopim.com/?2eb5i3NO6cN56cZIqCYNrrorKInxw5XM';z.t=+new Date;$.
//type='text/javascript';e.parentNode.insertBefore($,e)})(document,'script');
</script>
<!--End of Zopim Live Chat Script-->
</body>
</html>
