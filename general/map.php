<?php session_start();?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include '../assets/public/templates/general/header.php'; ?>
    <link href="../assets/public/css/newspaper/entry.css" rel="stylesheet">
</head>

<body onLoad="initialize()">
  <?php include '../assets/public/templates/general/navbar/navbar.php'; ?>

  <div id="map_canvas" style="width:100%; height:400px"></div>
  <div class="container">
  <?php include '../assets/public/templates/general/mapform.php'; ?>
  </div>
  <div id="directionsPanel" class="container">
  </div>
  <br />
  <?php include '../assets/public/templates/general/footer.php'; ?>
  <script src="../assets/public/js/lib/jquery.js"></script>
  <script src="../assets/public/js/lib/jquery.form.min.js"></script>
  <script src="http://cdn.jsdelivr.net/jquery.validation/1.15.0/jquery.validate.min.js"></script>
  <script src="../assets/public/js/lib/bootstrap.min.js"></script>
  <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
  <script type="text/javascript">
  var directionDisplay, map;
  var directionsService = new google.maps.DirectionsService();
  var geocoder = new google.maps.Geocoder();

  function notFound(msg) {
  	alert('Could not find your location :(')
  }

  function initialize() {
  	var latlng = new google.maps.LatLng(46.7780990,23.6070400);
  	var rendererOptions = {
  		draggable: false
  	};
  	directionsDisplay = new google.maps.DirectionsRenderer(rendererOptions);
  	var myOptions = {
  		zoom: 14,
  		center: latlng,
  		mapTypeId: google.maps.MapTypeId.ROADMAP,
  		mapTypeControl: false
  	};
  	map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
  	directionsDisplay.setMap(map);
  	directionsDisplay.setPanel(document.getElementById("directionsPanel"));
  	if (navigator.geolocation) {
  		navigator.geolocation.getCurrentPosition(foundYou, notFound);
  	} else {
  		alert('Geolocation not supported or not enabled.');
  	}
  }

  function foundYou(position) {
  	var latlng = new google.maps.LatLng(position.coords.latitude, position.coords.longitude);
  	geocoder.geocode({
  		'latLng': latlng
  	}, function (results, status) {
  		if (status == google.maps.GeocoderStatus.OK) {
  			if (results[0]) {
  				marker = new google.maps.Marker({
  					position: latlng,
  					map: map
  				});
  				var address = results[0].address_components[1].long_name + ' ' + results[0].address_components[0].long_name + ', ' + results[0].address_components[3].long_name
  				$('.autoLink span').html(address).parent().show().click(function () {
  					$('#routeStart').val(address);
  					calcRoute();
  				});
  			}
  		} else {
  			alert("Geocoder failed due to: " + status);
  		}
  	});
  }

  function calcRoute() {
  	var travelMode = $('input[name="travelMode"]:checked').val();
  	var start = $("#routeStart").val();
  	var end = $("#routeEnd").val();
  	var request = {
  		origin: start,
  		destination: end,
  		unitSystem: google.maps.UnitSystem.METRIC,
  		travelMode: google.maps.DirectionsTravelMode[travelMode]
  	};
  	directionsService.route(request, function (response, status) {
  		if (status == google.maps.DirectionsStatus.OK) {
  			$('#directionsPanel').empty();
  			directionsDisplay.setDirections(response);
  		} else {
  			if (status == 'ZERO_RESULTS') {
  				alert('No route could be found between the origin and destination.');
  			} else if (status == 'UNKNOWN_ERROR') {
  				alert('A directions request could not be processed due to a server error. The request may succeed if you try again.');
  			} else if (status == 'REQUEST_DENIED') {
  				alert('This webpage is not allowed to use the directions service.');
  			} else if (status == 'OVER_QUERY_LIMIT') {
  				alert('The webpage has gone over the requests limit in too short a period of time.');
  			} else if (status == 'NOT_FOUND') {
  				alert('At least one of the origin, destination, or waypoints could not be geocoded.');
  			} else if (status == 'INVALID_REQUEST') {
  				alert('The DirectionsRequest provided was invalid.');
  			} else {
  				alert("There was an unknown error in your request. Requeststatus: nn" + status);
  			}
  		}
  	});
  }
  </script>
</body>
</html>
