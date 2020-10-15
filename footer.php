<?php
if ( !defined( 'ABSPATH' ) ) {
	header( 'Location: /' );
	exit;
}
?>

</div><!-- /wrap -->
<footer id="footer" class="Footer" role="contentinfo">
	<div id="newsletter" class="Mail">
		<div class="content u-xs-sizeFull">
			<form action="<?php bloginfo( 'url' ); ?>/wp-admin/admin-ajax.php" method="post" class="form-newsletter Mail-form u-xs-sizeFull">
				<input type="hidden" name="action" value="enviarNewsletter" />
				<fieldset class="field-legend Mail-header">
					<svg class="Mail-icon">
					<use xlink:href="#icon-envelope" />
					</svg>
					<legend class="Mail-title">Newsletter<span class="Mail-description">Cadastre seu e-mail para receber nossos informativos.</span></legend>
				</fieldset>
				<fieldset class="field-email u-xs-sizeFull">
					<input class="Mail-fieldEmail u-xs-blockCenter" type="email" placeholder="Seu e-mail" name="email"/>
					<button class="Mail-btnSend u-xs-blockCenter" type="submit"><span>Enviar</span>
						<svg>
							<use xlink:href="#icon-aviao"/>
						</svg>
					</button>
				</fieldset>
			</form>
		</div>
	</div><!-- #newsletter -->
	<div id="endereco">
		<div class="content u-xs-sizeFull">
			<h5>&copy; <?php echo date( 'Y' ); ?> NUCE - Núcleo de Concursos Especial</h5>
			<h6>Rua Joaquim Felipe, 60 Boa Vista (ao lado da Celpe) • Recife - PE  •  contato@nuceconcursos.com.br  •  Fone: (81) 3198 1414</h6>
		</div>
	</div><!-- #endereco -->
</footer><!-- #footer -->
<?php
?>
<?php include 'inc/notification.php'; ?>
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
<script type="text/javascript">
//	$zopim(function() {
//		$zopim.livechat.setOnStatus(function(status) {
//			if (status == 'online' || status == 'away')
//				$('.atendimento-online').removeClass('offline').addClass('online');
//			else if (status == 'offline')
//				$('.atendimento-online').removeClass('online').addClass('offline');
//		});
//	});
</script>
</body>
</html>