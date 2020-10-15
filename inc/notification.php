<?php
$message = array();

if ( isset( $_SESSION["message"] ) )
	$message = $_SESSION["message"];


if ( isset( $_GET['login'] ) && $_GET['login'] == 'failed' ) {
	$message = array( 'type' => 'erro', 'text' => 'Erro ao fazer login.' );
}

if ( isset( $_GET['login'] ) && $_GET['login'] == 'empty' ) {
	$message = array( 'type' => 'erro', 'text' => 'Usuário ou senha vazio.' );
}
//var_dump(empty($message));
if ( !empty( $message ) ) {
	$class = $message["type"];
	$mensagem = $message["text"];
} else {
	$class = 'none';
	$mensagem = 'Mensagem enviada com sucesso';
}
?>
<div id="mensagens-de-retorno" class="<?php echo $class; ?>">
	<div class="overlay"></div>
	<div class="box">
		<h3><?php echo $mensagem; ?></h3>
		<!-- <p></p> -->
		<button class="bt-fechar" type="button">
			<svg>
			<use xlink:href="#icon-fechar" />
			</svg>
		</button>
	</div>
</div>