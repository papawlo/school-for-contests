<?php
if ( !is_user_logged_in() ) :
	wp_redirect( home_url() );
	exit;
endif;
get_header();
?>
<section id="editar-dados">
	<div class="content">
		<header class="header-padrao">
			<svg>
			<use xlink:href="#icon-lapis" />
			</svg>
			<h2>Editar dados</h2>
		</header>
		<aside class="col1">
			<ul>
				<li>
					<a href="<?php bloginfo( 'url' ) ?>/meus-dados/" title="Editar dados" class="active">Editar dados</a>
				</li>
				<!--				<li>
									<a href="<?php bloginfo( 'url' ) ?>/meus-cursos/" title="Cursos matriculados">Cursos matriculados</a>
								</li>-->
				<li>
					<a href="<?php bloginfo( 'url' ) ?>/meus-pedidos/" title="Meus Pedidos">Meus Pedidos</a>
				</li>
			</ul>
		</aside>

		<?php
		global $user_ID;

		/*		 * *
		 * Referencias
		 * http://wordpress.stackexchange.com/questions/9775/how-to-edit-a-user-profile-on-the-front-end
		 * http://cubiq.org/front-end-user-registration-and-login-in-wordpress
		 * 
		 */

		$error = array();



		if ( !empty( $_POST ) && !empty( $_POST['update-user'] ) && $_POST['update-user'] == '1' ) {
			


			/* Update user password */
			if ( !empty( $_POST['current_password'] ) && !empty( $_POST['password'] ) && !empty( $_POST['password2'] ) ) {

				if ( !wp_check_password( $_POST['current_password'], $current_user->user_pass, $current_user->ID ) ) {
					$error['password']['nao_coincide_com_anterior'] = 'Sua senha atual não corresponde. Por favor, tente novamente.';
					$error[] = 'Sua senha atual não corresponde. Por favor, tente novamente.';
				} elseif ( $_POST['password'] != $_POST['password2'] ) {
					$error['password']['nao_coincidem'] = 'As senhas não coincidem.';
				} elseif ( strlen( $_POST['password'] ) < 4 ) {
					$error['password']['muito_curta'] = 'Senha muito curta';
				} elseif ( false !== strpos( wp_unslash( $_POST['password'] ), "\\" ) ) {
					$error['password']['caracter_ilegal'] = 'A senha não pode conter o caractere "\\" (barra invertida).';
				} else {
					$result_update = wp_update_user( array( 'ID' => $current_user->ID, 'user_pass' => esc_attr( $_POST['password'] ) ) );

					if ( !is_int( $result_update ) ) {
						$error['passowrd']['update'] = 'Ocorreu um erro ao atualizar seu perfil. Por favor, tente novamente.';
					}
				}
			}

			if ( empty( $_POST['username'] ) ) {
				$error['username']['vazio'] = "Insira um nome para seu usúario";
			} else {
				if ( trim( $_POST['username'] ) != $user_login )
					if ( username_exists( $_POST['username'] ) )
						$error['username']['ja_existe'] = "Você não pode usar esse usuário";
			}

			if ( empty( $_POST['billing_first_name'] ) ) {
				$error['billing_first_name'] = 'Insira seu nome corretamente.';
			}
			if ( empty( $_POST['billing_rg'] ) ) {
				$error['billing_rg'] = 'Insira seu nome corretamente.';
			}

			if ( empty( $_POST['billing_cpf'] ) ) {
				$error['billing_cpf'] = 'Insira seu CPF.';
			}
			if ( empty( $_POST['billing_address_1'] ) ) {
				$error['billing_address_1'] = 'Insira seu endereço.';
			}
			if ( empty( $_POST['billing_postcode'] ) ) {
				$error['billing_postcode'] = 'Insira seu CEP.';
			}
			if ( empty( $_POST['billing_city'] ) ) {
				$error['billing_city'] = 'Insira sua cidade.';
			}
			if ( empty( $_POST['billing_state'] ) ) {
				$error['billing_state'] = 'Insira seu estado.';
			}


			if ( !count( $error ) ) {

				/* Update user meta */

				$user_fields = array( 'ID' => $current_user->ID );


				if ( !empty( $_POST['billing_first_name'] ) ) {
					$user_fields['first_name'] = esc_attr( $_POST['billing_first_name'] );
					update_user_meta( $current_user->ID, 'billing_first_name', sanitize_text_field( $_POST['billing_first_name'] ) );
				}


				if ( !empty( $_POST['billing_rg'] ) ) {
					update_user_meta( $current_user->ID, 'billing_rg', sanitize_text_field( $_POST['billing_rg'] ) );
				}

				if ( !empty( $_POST['billing_cpf'] ) ) {
					update_user_meta( $current_user->ID, 'billing_cpf', sanitize_text_field( $_POST['billing_cpf'] ) );
				}

				if ( !empty( $_POST['user_birthdate'] ) )
					update_user_meta( $current_user->ID, 'user_birthdate', sanitize_text_field( $_POST['user_birthdate'] ) );

				if ( !empty( $_POST['user_escolaridade'] ) )
					update_user_meta( $current_user->ID, 'user_escolaridade', sanitize_text_field( $_POST['user_escolaridade'] ) );

				if ( !empty( $_POST['billing_phone'] ) )
					update_user_meta( $current_user->ID, 'billing_phone', sanitize_text_field( $_POST['billing_phone'] ) );

				if ( !empty( $_POST['billing_phone2'] ) )
					update_user_meta( $current_user->ID, 'billing_phone2', sanitize_text_field( $_POST['billing_phone2'] ) );

				if ( !empty( $_POST['billing_cellphone'] ) )
					update_user_meta( $current_user->ID, 'billing_cellphone', sanitize_text_field( $_POST['billing_cellphone'] ) );

				if ( !empty( $_POST['user_facebook'] ) )
					update_user_meta( $current_user->ID, 'user_facebook', sanitize_text_field( $_POST['user_facebook'] ) );

				if ( !empty( $_POST['user_autorizo_sms'] ) )
					update_user_meta( $current_user->ID, 'user_autorizo_sms', sanitize_text_field( $_POST['user_autorizo_sms'] ) );
				else
					update_user_meta( $current_user->ID, 'user_autorizo_sms', "" );

				if ( !empty( $_POST['billing_address_1'] ) )
					update_user_meta( $current_user->ID, 'billing_address_1', sanitize_text_field( $_POST['billing_address_1'] ) );

				if ( !empty( $_POST['billing_number'] ) )
					update_user_meta( $current_user->ID, 'billing_number', sanitize_text_field( $_POST['billing_number'] ) );

				if ( !empty( $_POST['billing_postcode'] ) )
					update_user_meta( $current_user->ID, 'billing_postcode', sanitize_text_field( $_POST['billing_postcode'] ) );

				if ( !empty( $_POST['billing_neighborhood'] ) )
					update_user_meta( $current_user->ID, 'billing_neighborhood', sanitize_text_field( $_POST['billing_neighborhood'] ) );

				if ( !empty( $_POST['billing_city'] ) )
					update_user_meta( $current_user->ID, 'billing_city', sanitize_text_field( $_POST['billing_city'] ) );

				if ( !empty( $_POST['billing_state'] ) )
					update_user_meta( $current_user->ID, 'billing_state', sanitize_text_field( $_POST['billing_state'] ) );

				if ( !empty( $_POST['user_nome_emergencia'] ) )
					update_user_meta( $current_user->ID, 'user_nome_emergencia', sanitize_text_field( $_POST['user_nome_emergencia'] ) );

				if ( !empty( $_POST['user_telefone_emergencia'] ) )
					update_user_meta( $current_user->ID, 'user_telefone_emergencia', sanitize_text_field( $_POST['user_telefone_emergencia'] ) );


				if ( !empty( $_POST['email'] ) )
					$user_fields['user_email'] = esc_attr( $_POST['email'] );


				$user_id = wp_update_user( $user_fields );


				if ( is_wp_error( $user_id ) ) {
					// There was an error, probably that user doesn't exist.
					$error[] = "Ocorreu um erro, provavelmente o usuário não existe";
				}
			}
		}

		/* Redirect so the page will show updated info. */
		/* I am not Author of this Code- i dont know why but it worked for me after changing below line to if ( count($error) == 0 ){ */
//				if ( count( $error ) == 0 ) {
//					//action hook for plugins and extra fields saving
//					do_action( 'edit_user_profile_update', $current_user->ID );
//					wp_redirect( get_permalink() );
//					exit;
//				}
//		if ( empty( $error ) ) {
//			do_action( 'edit_user_profile_update', $current_user->ID );
//			wp_redirect( site_url( '/meus-dados/' ) . '?success=1' );
//			exit;
//		}
		?>


		<?php
		if ( isset( $_POST['update-user'] ) ) {
			if ( count( $error ) > 0 ) {
				?>
				<div id="mensagens-de-retorno" class="erro">
					<div class="overlay"></div>
					<div class="box">
						<h3>Aconteceu algum erro!</h3>
					</div>
				</div>
			<?php } else { ?>
				<div id="mensagens-de-retorno" class="sucesso">
					<div class="overlay"></div>
					<div class="box">
						<h3>Salvo!</h3>
					</div>
				</div>
				<?php
			}
		}
		if ( isset( $_GET["register"] ) && $_GET["register"] == 'true' ) {
			?>
			<div id="mensagens-de-retorno" class="sucesso">
				<div class="overlay"></div>
				<div class="box">
					<h3>Cadastrado com Sucesso!</h3>
				</div>
			</div>
		<?php }
		?>
		<form class="form-principal" method="post" id="form-edituser" action="<?php the_permalink(); ?>">
			<fieldset class="field-grande">
				<header>
					<h3>Informe seus dados</h3>
				</header>				
				<fieldset class="field-nome">
					<label for="field-nome"><?php _e( 'Nome Completo', 'woocommerce' ); ?> <span class="required">*</span></label>
					<input type="text" class="input-text" name="billing_first_name" id="field-nome" value="<?php echo get_user_meta( $user_ID, 'billing_first_name', true ); ?>" />
					<?php if ( isset( $error['billing_first_name'] ) ) { ?>
						<em class="error"><?php echo $error['billing_first_name'] ?></em>
					<?php } ?>
				</fieldset>
				<fieldset class="field-rg">
					<label for="field-rg">RG <span class="required">*</span></label>
					<input type="text" id="field-rg" name="billing_rg" value="<?php echo get_user_meta( $user_ID, 'billing_rg', true ); ?>" />
					<?php if ( isset( $error['billing_rg'] ) ) { ?>
						<em class="error"><?php echo $error['billing_rg'] ?></em>
					<?php } ?>
				</fieldset>
				<fieldset class="field-cpf">
					<label for="field-cpf">CPF <span class="required">*</span></label>
					<input type="text" data-mask="000.000.000-00" id="field-cpf" name="billing_cpf"  value="<?php echo get_user_meta( $user_ID, 'billing_cpf', true ); ?>" />
					<?php if ( isset( $error['billing_cpf'] ) ) { ?>
						<em class="error"><?php echo $error['billing_cpf'] ?></em>
					<?php } ?>
				</fieldset>
				<fieldset class="field-data-nascimento">
					<label for="field-data-nascimento">Data de nascimento</label>
					<input type="text" data-mask="00/00/0000" id="field-data-nascimento" name="user_birthdate"  value="<?php echo get_user_meta( $user_ID, 'user_birthdate', true ); ?>" placeholder="dd/mm/aaaa"/>
				</fieldset>
				<fieldset class="field-escolaridade">
					<label for="field-escolaridade">Escolaridade</label>
					<input type="text" id="field-escolaridade" name="user_escolaridade"  value="<?php echo get_user_meta( $user_ID, 'user_escolaridade', true ); ?>" />
				</fieldset>	
				<fieldset class="field-username">
					<label for="field-username">Usuário <span class="required">*</span></label>
					<input type="text" id="field-username" name="username" value="<?php echo esc_attr( stripslashes( $user_login ) ); ?>" maxlength="20"/>
					<?php if ( isset( $error['username'] ) ) { ?>
						<em class="error"><?php echo implode( " ,", $error['username'] ) ?></em>
					<?php } ?>
				</fieldset>
				<fieldset class="field-senha">
					<label for="field-senha-atual">Senha Atual</label>
					<input type="password" id="field-senha-atual" name="current_password"  value="" />
					<?php if ( isset( $error['current_password'] ) ) { ?>
						<em class="error"><?php echo $error['current_password'] ?></em>
					<?php } ?>
				</fieldset>
				<fieldset class="field-senha">
					<label for="field-senha">Senha</label>
					<input type="password" id="field-senha" name="password"  value="" />
					<?php if ( isset( $error['password'] ) ) { ?>
						<em class="error"><?php echo $error['password'] ?></em>
					<?php } ?>
				</fieldset>
				<fieldset class="field-confirme-senha">
					<label for="field-confirme-senha">Confirme sua senha</label>
					<input type="password" id="field-confirme-senha" name="password2" value=""/>
					<?php if ( isset( $error['password2'] ) ) { ?>
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
					<input type="text" data-mask="(00) 00000-0000" id="field-telefone1"  name="billing_phone"  value="<?php echo get_user_meta( $user_ID, 'billing_phone', true ); ?>" />
				</fieldset>
				<fieldset class="field-telefone2">
					<label for="field-telefone2">Telefone 2</label>
					<input type="text" data-mask="(00) 00000-0000" id="field-telefone2" name="billing_phone2"  value="<?php echo get_user_meta( $user_ID, 'billing_phone2', true ); ?>" />
				</fieldset>
				<fieldset class="field-data-celular">
					<label for="field-data-celular">Celular</label>
					<input type="text" data-mask="(00) 00000-0000" id="field-data-celular" name="billing_cellphone"  value="<?php echo get_user_meta( $user_ID, 'billing_cellphone', true ); ?>" />
				</fieldset>
				<fieldset class="field-email">
					<label for="field-data-email">E-mail <span class="required">*</span></label>
					<input type="text" id="field-data-email" name="email"  value="<?php echo esc_attr( stripslashes( $user_email ) ); ?>" />
					<?php if ( isset( $error['email'] ) ) { ?>
						<em class="error"><?php echo $error['email'] ?></em>
					<?php } ?>
				</fieldset>
				<fieldset class="field-nome-facebook">
					<label for="field-data-nome-facebook">Nome no facebook</label>
					<input type="text" id="field-data-nome-facebook" name="user_facebook"  value="<?php echo get_user_meta( $user_ID, 'user_facebook', true ); ?>" />
				</fieldset>
				<fieldset class="field-autorizo-sms">		
					<?php
					$checked = "";
					if ( get_user_meta( $user_ID, 'user_autorizo_sms', true ) == "on" ) {
						$checked = "checked";
					}
					?>
					<input type="checkbox" id="checkbox-autorizo" name="user_autorizo_sms" value="on" <?php echo $checked; ?>/>
					<label for="checkbox-autorizo">Autorizo receber informações via SMS.</label>
				</fieldset>
			</fieldset>
			<fieldset class="field-grande">
				<header>
					<h3>Endereço</h3>
				</header>
				<fieldset class="field-endereco">
					<label for="field-endereco">Endereço <span class="required">*</span></label>
					<input type="text" id="field-endereco" name="billing_address_1"  value="<?php echo get_user_meta( $user_ID, 'billing_address_1', true ); ?>" />
					<?php if ( isset( $error['billing_address_1'] ) ) { ?>
						<em class="error"><?php echo $error['billing_address_1'] ?></em>
					<?php } ?>
				</fieldset>
				<fieldset class="field-numero">
					<label for="field-numero">Número <span class="required">*</span></label>
					<input type="text" id="field-numero" name="billing_number"  value="<?php echo get_user_meta( $user_ID, 'billing_number', true ); ?>" />
					<?php if ( isset( $error['billing_number'] ) ) { ?>
						<em class="error"><?php echo $error['billing_number'] ?></em>
					<?php } ?>
				</fieldset>
				<fieldset class="field-cep">
					<label for="field-cep">CEP <span class="required">*</span></label>
					<input type="text" data-mask="00000-000" id="field-cep" name="billing_postcode"  value="<?php echo get_user_meta( $user_ID, 'billing_postcode', true ); ?>" />
					<?php if ( isset( $error['billing_postcode'] ) ) { ?>
						<em class="error"><?php echo $error['billing_postcode'] ?></em>
					<?php } ?>
				</fieldset>
				<fieldset class="field-bairro">
					<label for="field-bairro">Bairro <span class="required">*</span></label>
					<input type="text" id="field-bairro" name="billing_neighborhood" value="<?php echo get_user_meta( $user_ID, 'billing_neighborhood', true ); ?>" />
					<?php if ( isset( $error['billing_neighborhood'] ) ) { ?>
						<em class="error"><?php echo $error['billing_neighborhood'] ?></em>
					<?php } ?>
				</fieldset>
				<fieldset class="field-municipio">
					<label for="field-municipio">Município <span class="required">*</span></label>
					<input type="text" id="field-municipio" name="billing_city" value="<?php echo get_user_meta( $user_ID, 'billing_city', true ); ?>" />
					<?php if ( isset( $error['billing_city'] ) ) { ?>
						<em class="error"><?php echo $error['billing_city'] ?></em>
					<?php } ?>
				</fieldset>
				<fieldset class="field-estado">
					<label for="field-estado">UF <span class="required">*</span></label>
					<select id="select-estado" name="billing_state">
						<?php
//							echo get_user_meta( $user_ID, 'billing_state', true );exit;
						$estados = array( "AC" => "Acre", "AL" => "Alagoas", "AM" => "Amazonas", "AP" => "Amapá", "BA" => "Bahia", "CE" => "Ceará", "DF" => "Distrito Federal", "ES" => "Espírito Santo", "GO" => "Goiás", "MA" => "Maranhão", "MT" => "Mato Grosso", "MS" => "Mato Grosso do Sul", "MG" => "Minas Gerais", "PA" => "Pará", "PB" => "Paraíba", "PR" => "Paraná", "PE" => "Pernambuco", "PI" => "Piauí", "RJ" => "Rio de Janeiro", "RN" => "Rio Grande do Norte", "RO" => "Rondônia", "RS" => "Rio Grande do Sul", "RR" => "Roraima", "SC" => "Santa Catarina", "SE" => "Sergipe", "SP" => "São Paulo", "TO" => "Tocantins" );
						$estado = get_user_meta( $user_ID, 'billing_state', true );

						foreach ( $estados as $sigla => $nome ) {
							if ( !empty( $estado ) && $estado == $sigla )
								echo '<option value="' . $sigla . '" selected="selected">' . $nome . '</option>';
							else
								echo '<option value="' . $sigla . '">' . $nome . '</option>';
						}
						?>				
					</select>
					<?php if ( isset( $error['billing_state'] ) ) { ?>
						<em class="error"><?php echo $error['billing_state'] ?></em>
					<?php } ?>
				</fieldset>
			</fieldset>
			<fieldset class="field-grande">
				<header>
					<h3>Em caso de emergência</h3>
				</header>
				<fieldset class="field-caso-urgencia">
					<label for="field-caso-urgencia">Em caso de urgência, ligar para:</label>
					<input type="text" id="field-caso-urgencia" name="user_nome_emergencia"  value="<?php echo get_user_meta( $user_ID, 'user_nome_emergencia', true ); ?>" />
				</fieldset>
				<fieldset class="field-telefone-emergencia">
					<label for="field-telefone-emergencia">Telefone</label>
					<input type="text" data-mask="(00) 00000-0000" id="field-telefone-emergencia" name="user_telefone_emergencia"  value="<?php echo get_user_meta( $user_ID, 'user_telefone_emergencia', true ); ?>" />
				</fieldset>
				<fieldset>
					<button type="submit" name="update-user" value="1">
						<span>Salvar alterações</span>
					</button>
				</fieldset>
			</fieldset>
		</form><!-- #adduser -->

	</div>
</section>
<?php
get_footer();
