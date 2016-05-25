function i18nHax() {
  var t1 = "A warm welcome";
  var t2 = "DAW Newspaper - your best source of information.";
  var t3 = "Latest News";
  if (getCurrentLanguage() == 'ro') {
    t1 = "Bine ai venit!";
    t2 = "Ziarul DAW - adevarul de dimineata!";
    t3 = "Ultimele patanii!";
  }
  $("#welcome").append(t1);
  $("#intro").append(t2);
  $("#latest").append(t3);
}

function buttonMessage() {
  if (getCurrentLanguage() == 'en') { return "More"; }
  return "Mai multe";
}

function entryDOM(title, description, imageSrc, id) {
  var data =
  '<div class="col-md-3 col-sm-4 hero-feature">' +
    '<div class="thumbnail">' +
      '<img src="' + imageSrc + '" alt="">' +
      '<div class="caption">' +
        '<h3>' + title + '</h3>' +
        '<p>' + description + '</p>' +
        '<p>' +
          '<a href="/newspaper/entry.php?id=' + id + '" class="btn btn-primary">' +
           buttonMessage() + '</a> </p>' +
      '</div>' +
    '</div>' +
  '</div>';
  return data;
}

function newsTransmog(xml) {
    $(xml).find('entry').each(function() {
      if (getPropertyValue(this, 'language') == getCurrentLanguage()) {
        $("#entries").append(entryDOM(
          getPropertyValue(this, 'title'),
          getPropertyValue(this, 'shortdescription'),
          getPropertyValue(this, 'image'),
          getPropertyValue(this, 'id')
        ));
      }
    });
  }
