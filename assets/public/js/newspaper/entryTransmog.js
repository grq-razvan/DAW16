function getEntryData(title, author, description, content, date, image) {
  var data =
  '<div class="container">' +
  '<h1>'+ title + '</h1>' +
  '<p class="lead"> by ' + author + ' </p>' +
  '<hr>' +
  '<p><span class="glyphicon glyphicon-time"></span> Posted on ' + date + '</p>' +
  '<img class="img-responsive" src="' + image + '" alt="">' +
  '<hr>' +
  '<p class="lead">' + description +'</p>' +
  '<p>' + content + '</p>'+
  '<hr>' + '</div>';
  return data;
}

function entityTransmog(xml, id) {
  $(xml).find('entry').each(function() {
    if (getPropertyValue(this, 'id') == id &&
      getPropertyValue(this, 'language') == getCurrentLanguage()) {
      $('#entry').append(getEntryData(
        getPropertyValue(this, 'title'),
        getPropertyValue(this, 'author'),
        getPropertyValue(this, 'shortdescription'),
        getPropertyValue(this, 'content'),
        getPropertyValue(this, 'date'),
        getPropertyValue(this, 'image')
      ));
      $('#entryTitle').append(getPropertyValue(this, 'title'));
    }
  });
};
