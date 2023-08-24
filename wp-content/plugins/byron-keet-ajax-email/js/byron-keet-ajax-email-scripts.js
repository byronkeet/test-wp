	jQuery(document).ready(function($) {
	$('#email-form').submit(function(event) {
		event.preventDefault();

		$('.validation-error-message').remove();

		// Initialize a variable to check if the form is valid
		let formIsValid = true;

		let subject = $('#subject').val();
		if (subject === '') {
			$('<div class="validation-error-message">This field is required</div>').insertBefore('#subject');
			formIsValid = false;
		}

		let message = $('#message').val();
		if (message === '') {
			$('<div class="validation-error-message">This field is required</div>').insertBefore('#message');
			formIsValid = false;
		}

		// If form is not valid, stop submission
		if (!formIsValid) {
			return;
		}

		$.ajax({
			type: 'POST',
			url: byron_keet_ajax_email_vars.ajax_url,
			data: {
				action: 'send_email',
				nonce: byron_keet_ajax_email_vars.nonce,
				subject: subject,
				message: message
			},
			success: function(response) {
				$('#email-form').fadeOut(400, function() {
					$('#form-container').html('<div class="success-message">The email was sent, and we will be in touch shortly.</div>');
					$('.success-message').hide().fadeIn(400);
				});
			},
			error: function() {
				$('#email-form').fadeOut(400, function() {
					$('#form-container').html('<div class="error-message">An error occurred while sending the email.</div>');
					$('.error-message').hide().fadeIn(400);
				});
			}
		});
	});
});
