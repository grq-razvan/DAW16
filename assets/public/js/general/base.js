function parse(callback) {
  $.get("/assets/private/data.xml", callback);
}

function language(language) {
  createCookie("language", language, 1);
  location.reload();
}

function getCurrentLanguage() {
  var lang = readCookie('language');
  return lang;
}

function getPropertyValue(obj, property) {
  var result = $(obj).find(property).text();
  return result;
}

function getUrlParameter(sParam) {
    var sPageURL = decodeURIComponent(window.location.search.substring(1)),
        sURLVariables = sPageURL.split('&'),
        sParameterName,
        i;

    for (i = 0; i < sURLVariables.length; i++) {
        sParameterName = sURLVariables[i].split('=');

        if (sParameterName[0] === sParam) {
            return sParameterName[1] === undefined ? true : sParameterName[1];
        }
    }
};

if (getCurrentLanguage() == null || getCurrentLanguage() == "") {
  createCookie('language', 'ro', 2);
}
