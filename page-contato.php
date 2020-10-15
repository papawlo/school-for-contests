<?php
get_header();
?>
<section id="contato">
	<div id="bg-intro"></div>
	<div class="content u-xs-sizeFull">

		<form class="Form Form--contato u-xs-sizeFull" action="<?php echo admin_url( 'admin-ajax.php' ); ?>" id="contactForm" method="post">
			<input type="hidden" name="action" value="contato"/>
			<fieldset class="field-grande">
				<legend class="u-xs-sizeFull">Entre em contato<br/>com a NUCE</legend>
				<fieldset>
					<input type="text" name="nome" placeholder="Nome" required="true"/>
				</fieldset>
				<fieldset>
					<input type="email" name="email" placeholder="E-mail" required="true"/>
				</fieldset>
				<fieldset>
					<input type="text" name="assunto" placeholder="Assunto" required="true"/>
				</fieldset>
				<fieldset>
					<textarea name="mensagem" placeholder="Sua mensagem" required="true"></textarea>
				</fieldset>
				<fieldset>
					<button type="submit">
						<span>Enviar mensagem</span>
						<svg>
						<use xlink:href="#icon-aviao" />
						</svg>
					</button>
				</fieldset>
			</fieldset>
		</form>
		<iframe class="u-xs-sizeFull u-xs-noMargin" id="mapa" src="http://maps.google.de/maps?hl=de&q=Rua Joaquim Felipe, 60 - Boa Vista, Recife - PE, 50050-340 ‎+(nuce concursos)&ie=UTF8&t=k&z=17&iwloc=B&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"><a href="http://www.siteway.de/maps-generator/" title="kostenlose Karten für Ihre Website erstellen">(c) Website Google Maps Generator</a></iframe>
	</div>
</section>
<?php
get_footer();
