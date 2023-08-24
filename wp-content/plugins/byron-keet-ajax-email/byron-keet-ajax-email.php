<?php
/**
 * Plugin Name: Byron Keet AJAX Email
 * Description: A plugin to send emails via AJAX.
 * Version: 1.0
 * Author: Byron Keet
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function byron_keet_enqueue_scripts() {
	wp_enqueue_style('byron-keet-ajax-email-styles', plugin_dir_url(__FILE__) . 'dist/css/byron-keet-ajax-email-styles.css');

	wp_enqueue_script(
		'byron-keet-ajax-email-scripts-js',
		plugin_dir_url(__FILE__) . 'js/byron-keet-ajax-email-scripts.js',
		array('jquery'),
		null,
		true
	);

	wp_localize_script(
		'byron-keet-ajax-email-scripts-js',
		'byron_keet_ajax_email_vars',
		array(
			'ajax_url' => admin_url( 'admin-ajax.php' ),
			'nonce'    => wp_create_nonce( 'byron_keet_send_email_nonce' )
		)
	);
}
add_action( 'wp_enqueue_scripts', 'byron_keet_enqueue_scripts' );


function byron_keet_send_email_ajax_handler() {
	// Verify nonce
	if( ! wp_verify_nonce( $_POST['nonce'], 'byron_keet_send_email_nonce' ) ) {
		die( 'Security check failed' );
	}

	$email_to = get_option( 'admin_email' );;
	$subject = sanitize_text_field( $_POST['subject'] );
	$message = sanitize_text_field( $_POST['message'] );

	// Perform additional validation here
	if ( wp_mail( $email_to, $subject, $message ) ) {
		echo 'Email sent successfully.';
	} else {
		echo 'Failed to send email.';
	}
	die();
}
add_action('wp_ajax_send_email', 'byron_keet_send_email_ajax_handler');
add_action('wp_ajax_nopriv_send_email', 'byron_keet_send_email_ajax_handler');

function email_form_shortcode() {
	ob_start(); ?>
	<div id="form-container">
		<form id="email-form" class="email-form">
			<div class="form-group">
				<label for="subject">Subject:</label>
				<input type="text" id="subject" name="subject">
			</div>
			<div class="form-group">
				<label for="message">Message:</label>
				<textarea id="message" name="message"></textarea>
			</div>
			<button type="submit" class="submit-button">Send Email</button>
		</form>
	</div>
	<?php return ob_get_clean();
}
add_shortcode( 'email_form', 'email_form_shortcode' );
