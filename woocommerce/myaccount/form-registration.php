<?php
/**
 * Login Form
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.2.6
 */
if ( !defined( 'ABSPATH' ) ) {
	exit;
}
?>

<?php wc_print_notices(); ?>

<?php do_action( 'woocommerce_before_customer_login_form' ); ?>


<section id="cadastro">
	<div class="content">
		<header class="header-padrao">
			<svg>
			<use xlink:href="#icon-prancheta-ok" />
			</svg>
			<h2>Formulário de cadastro</h2>
		</header>
			<form class="form-principal register" action="">
			<?php do_action( 'woocommerce_register_form_start' ); ?>
			<fieldset class="field-grande">
				<header>
					<h3>Informe seus dados</h3>
				</header>
				<fieldset class="field-nome">
					<label for="field-nome">Nome</label>
					<input type="text" id="field-nome" name="nome"/>
				</fieldset>
				<fieldset class="field-rg">
					<label for="field-rg">RG</label>
					<input type="text" id="field-rg" name="rg"/>
				</fieldset>
				<fieldset class="field-cpf">
					<label for="field-cpf">CPF</label>
					<input type="text" id="field-cpf" name="cpf"/>
				</fieldset>
				<fieldset class="field-data-nascimento">
					<label for="field-data-nascimento">Data de nascimento</label>
					<input type="text" id="field-data-nascimento" name="dt-nascimento"/>
				</fieldset>
				<fieldset class="field-escolaridade">
					<label for="field-escolaridade">Escolaridade</label>
					<input type="text" id="field-escolaridade" name="escolaridade"/>
				</fieldset>	
				<fieldset class="field-senha">
					<label for="field-senha">Senha</label>
					<input type="text" id="field-senha" name="password"/>
				</fieldset>
				<fieldset class="field-confirme-senha">
					<label for="field-confirme-senha">Confirme sua senha</label>
					<input type="text" id="field-confirme-senha" name="password2"/>
				</fieldset>	
			</fieldset>
			<fieldset class="field-grande">
				<header>
					<h3>Contato</h3>
				</header>
				<fieldset class="field-telefone1">
					<label for="field-telefone1">Telefone 1</label>
					<input type="text" id="field-telefone1" name="telefone1"/>
				</fieldset>
				<fieldset class="field-telefone2">
					<label for="field-telefone2">Telefone 2</label>
					<input type="text" id="field-telefone2" name="telefone2"/>
				</fieldset>
				<fieldset class="field-data-celular">
					<label for="field-data-celular">Data de celular</label>
					<input type="text" id="field-data-celular" name="celular"/>
				</fieldset>
				<fieldset class="field-email">
					<label for="field-data-email">E-mail</label>
					<input type="text" id="field-data-email" name="email"/>
				</fieldset>
				<fieldset class="field-nome-facebook">
					<label for="field-data-nome-facebook">Nome no facebook</label>
					<input type="text" id="field-data-nome-facebook" name="facebook-user"/>
				</fieldset>
				<fieldset class="field-autorizo-sms">
					<input type="checkbox" id="checkbox-autorizo" name="autorizo-sms"/>
					<label for="checkbox-autorizo">Autorizo receber informações via SMS.</label>
				</fieldset>
			</fieldset>
			<fieldset class="field-grande">
				<header>
					<h3>Endereço</h3>
				</header>
				<fieldset class="field-endereco">
					<label for="field-endereco">Endereço</label>
					<input type="text" id="field-endereco" name="endereco"/>
				</fieldset>
				<fieldset class="field-numero">
					<label for="field-numero">Número</label>
					<input type="text" id="field-numero" name="numero"/>
				</fieldset>
				<fieldset class="field-cep">
					<label for="field-cep">CEP</label>
					<input type="text" id="field-cep" name="cep"/>
				</fieldset>
				<fieldset class="field-bairro">
					<label for="field-bairro">Bairro</label>
					<input type="text" id="field-bairro" name="bairro"/>
				</fieldset>
				<fieldset class="field-municipio">
					<label for="field-municipio">Município</label>
					<input type="text" id="field-municipio" name="cidade" />
				</fieldset>
				<fieldset class="field-estado">
					<label for="field-estado">UF</label>
					<select id="select-estado" name="uf">
						<option value="1">1</option>
						<option value="2">2</option>
					</select>
				</fieldset>
			</fieldset>
			<fieldset class="field-grande">
				<header>
					<h3>Em caso de emergência</h3>
				</header>
				<fieldset class="field-caso-urgencia">
					<label for="field-caso-urgencia">Em caso de urgência, ligar para:</label>
					<input type="text" id="field-caso-urgencia" name="nome-emergencia"/>
				</fieldset>
				<fieldset class="field-telefone-emergencia">
					<label for="field-telefone-emergencia">Telefone</label>
					<input type="text" id="field-telefone-emergencia" name="telefone-emergencia"/>
				</fieldset>
			</fieldset>
			<?php do_action( 'woocommerce_register_form' ); ?>
			<?php do_action( 'register_form' ); ?>
			<fieldset>
				<button type="submit" name="resiter">
					<span>Finalizar cadastro</span>
					<svg>
					<use xlink:href="#icon-aviao" />
					</svg>
				</button>
			</fieldset>
			<?php do_action( 'woocommerce_register_form_end' ); ?>
		</form>
	</div>
</section>