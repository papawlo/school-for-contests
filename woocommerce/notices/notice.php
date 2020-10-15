<?php
/**
 * Show messages
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */
if ( !defined( 'ABSPATH' ) )
	exit; // Exit if accessed directly

if ( !$messages )
	return;
?>

  <?php foreach ( $messages as $message ) : ?>
  <div class="woocommerce-info"><?php echo wp_kses_post( $message ); ?></div>
  <?php endforeach; ?>

<div id="mensagens-de-retorno" class="warning">
	<div class="overlay"></div>
	<div class="box">
		<h3>Atenção!</h3>
	</div>
</div>