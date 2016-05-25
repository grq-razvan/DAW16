$(function(){
  $('#register').validate({
    rules: {
      username: {
        required: true,
        minlength: 3
      },
      email: {
        required: true,
        email: true
      },

      password: {
        required: true,
        minlength: 6
      }
    },
    messages: {
      username: {
        required: "I'm sure you have a nice name; well, don't be shy!",
        minlength: "It can't be that short, can it?"
      },
      email: {
        required: "We may want to talk, so go ahead!"
      },
      password: {
        required: "You want protection",
        minlength: "I want to be on your side, and tell you that you need a stronger password"
      }
    },
    submitHandler: function(form) {
      $(form).ajaxSubmit({
        type: "POST",
        data: $(form).serialize(),
        url: "/assets/private/authentication/register.php",
        success: function() {
          window.location.replace("/general/news.php");
        },
        error: function() {
          window.location.replace("/general/error.php");
        }
      });
    }
  });
});
