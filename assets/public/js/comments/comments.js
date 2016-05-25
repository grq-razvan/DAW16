$(function() {
  $('#commentForm').validate({
    rules: {
      commentText: {
          required: true,
          minlength: 3
      }
    },
    messages: {
      commentText: {
        required: "You wanted to write a comment!",
        minlength: "It can't be THAT short!"
      }
    },
    submitHandler: function (form) {
      $(form).ajaxSubmit({
        type: "POST",
        data: $(form).serialize(),
        url: "/assets/private/comments/comment.php",
        success: function(comment) {
            $('#comments').append(comment);
        },
        error: function() {
          window.location.replace("/general/error.php");
        }
      });
    }
  });
});
