<?php

global $wpdb, $user_ID;
if ( isset( $_GET['key'] ) && $_GET['action'] == "reset_pwd" ) {
	$reset_key = $_GET['key'];
	$user_login = $_GET['login'];
	$user_data = $wpdb->get_row( $wpdb->prepare( "SELECT ID, user_login, user_email FROM $wpdb->users WHERE user_activation_key = %s AND user_login = %s", $reset_key, $user_login ) );
	$user_login = $user_data->user_login;
	$user_email = $user_data->user_email;
	if ( !empty( $reset_key ) && !empty( $user_data ) ) {
		$new_password = wp_generate_password( 7, false ); //you can change the number 7 to whatever length needed for the new password
		wp_set_password( $new_password, $user_data->ID );
		//mailing the reset details to the user
		$message = __( 'Your new password for the account at:' ) . "\r\n\r\n";
		$message .= get_bloginfo( 'name' ) . "\r\n\r\n";
		$message .= sprintf( __( 'Username: %s' ), $user_login ) . "\r\n\r\n";
		$message .= sprintf( __( 'Password: %s' ), $new_password ) . "\r\n\r\n";
		$message .= __( 'You can now login with your new password at: ' ) . get_option( 'siteurl' ) . "/login" . "\r\n\r\n";

		if ( $message && !wp_mail( $user_email, 'Password Reset Request', $message ) ) {
			echo "<div class='error'>Email failed to sent for some unknown reason</div>";
			exit();
		} else {
			$redirect_to = get_bloginfo( 'url' ) . "/login?action=reset_success";
			wp_safe_redirect( $redirect_to );
			exit();
		}
	} else
		exit( 'Not a Valid Key.' );
}