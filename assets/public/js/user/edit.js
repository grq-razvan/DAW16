$(function() {
  $('#editPage').validate({
    submitHandler: function (form) {
      $(form).ajaxSubmit({
        type: "GET",
        data: $(form).serialize(),
        url : "/user/user-update.php",
        success: function() {
          update(jQuery, '#updatePage');
        }, error: function() {
          alert("error");
        }
      });
    }
  });
});
