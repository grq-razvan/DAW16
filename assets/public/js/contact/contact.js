$(function () {
	$('#contact').validate({
		rules: {
			name: {
				required: true,
				minlength: 3
			},

			email: {
				required: true,
				email: true
			},

			message: {
				required: true
			}
		},
		messages: {
			name: {
				required: "I'm sure you have a name. Come on, spoil it!",
				minlength: "Your name can't be that short, can it?"
			},
			email: {
				required: "You know you need an email to do this, right?",
			},
			message: {
				required: "Writing something here was the whole point of doing this, wasn't it?"
			}
		},

		submitHandler: function (form) {
			$(form).ajaxSubmit({
				type: "POST",
				data: $(form).serialize(),
				url: "/assets/private/general/mail.php",
				success: function () {
					alert("email sent");
					$('#contact :input').attr('disabled', 'disabled');
				},
				error: function () {
					alert("error");
				}
			});
		}
	});
});
