$(function() {
  $("#login").validate({
    rules: {
      name: {
        required: true,
        minlength: 3
      },
      pass: {
        required: true,
        minlength: 6
      }
    },
    messages: {
        name: {
          required: "...",
          minlength: "We've talked about this before.."
        },
        pass: {
          required: "Enter a password",
          minlength: "I know this isn't your password"
        }
    },

    submitHandler: function (form) {
      $(form).ajaxSubmit({
        type: "POST",
        data: $(form).serialize(),
        url: "/assets/private/authentication/login.php",
        success: function() {
          window.location.replace('/general/news.php');
        },
        error: function() {
          window.location.replace('/general/error.php');
        }
      });
    }
  });
});
