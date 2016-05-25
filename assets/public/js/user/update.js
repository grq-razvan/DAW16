function update(form) {
  $.ajax({
    type : "POST",
    data : $(form).serialize(),
    url : "/assets/private/user/update.php",
    success: function() {
      var idParam = getUrlParameter('id');
      window.location.replace('/user/user.php?id=' + idParam);
    }
  });
}
