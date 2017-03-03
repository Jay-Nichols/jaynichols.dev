@extends('layouts.master')

@section('content')
<!DOCTYPE html>
<html>
	<head>
		<title>3-Day Weather Forecast</title>
	</head>
	<body id="weathermap-body">
		<div id="container">
		<h1 class="weathermap-heading">3-Day Weather Forecast</h1>
		<h2 id="city" class="weathermap-heading">San Antonio, Texas</h2>
			<input id="address" type="text" placeholder="Enter City">
			<input id="submit" type="button" value="Submit">
		</div>
		<div class="row"></div>
		<div id="map"></div>
		</div>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA2OJukM41NiEP_KnDGkx4mQ6HSucCuhwI&callback=initMap"></script>
		<script>
			"use strict";
				function initMap() {
					var myLatLng = {lat: 29.42, lng: -98.49};
  					var map = new google.maps.Map(document.getElementById('map'), {
	  				  		zoom: 10,
	  				  		center: myLatLng
	  				});
	  				var geocoder = new google.maps.Geocoder();
					document.getElementById('submit').addEventListener('click', function() {
					    geocodeAddress(geocoder, map);
				    	updateweather();
					});
				    	updateweather();
				  	var marker = new google.maps.Marker({
					    position: myLatLng,
					    map: map,
					    title: 'San Antonio, Texas'
				  	});
				}
                var address = 'San Antonio, Texas';
				function geocodeAddress(geocoder, resultsMap) {
				  address = document.getElementById('address').value;
				  geocoder.geocode({'address': address}, function(results, status) {
				    if (status === google.maps.GeocoderStatus.OK) {
				      resultsMap.setCenter(results[0].geometry.location);
				      var marker = new google.maps.Marker({
				        map: resultsMap,
				        position: results[0].geometry.location
				      });
				    } else {
				      alert('Geocode was not successful for the following reason: ' + status);
				    }
				    	address = document.getElementById('city').innerHTML;
				  });
				}
				 function updateweather(){
				 	$.get("http://api.openweathermap.org/data/2.5/forecast/daily", {
    				  APPID: "efc1a00e7362ad0fe4f4c9a7fa9d296d",
    				  units: "imperial",
    				  cnt: 3,
    				  q: address
				  }).done(function(forecast) {
    	               $('.row').html('');
	    	         	 forecast.list.forEach(function(weather) {
	    	         	 	var timestamp = weather.dt;
	    	         	 	var weatherDate = new Date(timestamp * 1000);
							var months = ['Jan.','Feb.','March','April','May','June','July','Aug.','Sep.','Oct.','Nov.','Dec.'];
							var year = weatherDate.getFullYear();
							var month = months[weatherDate.getMonth()];
							var date = weatherDate.getDate();
							var time = month + ' ' + date + ', ' + year;
				 			var description = weather.weather[0].description;
				 			var highTemp = weather.temp.max.toFixed(0);
				 			var lowTemp = weather.temp.min.toFixed(0);
				 			var humidity = weather.humidity;
				 			var wind = weather.speed.toFixed(0);
				 			var icon = weather.weather[0].icon;
	    	            	   $('.row').append("<div class=\"day\"><p><b>" + time + "</p></b>" + "<img src=\"http://openweathermap.org/img/w/" + icon + ".png\">" + 
	    	            	  	"<p><b>High:</b> " + highTemp + 
	    	            	  	"<p><b>Low:</b> " + lowTemp + "</p>" +
	    	            	  	"<p><b>Outside:</b> " + description + "</p>" +
	    	            	  	"<p><b>Humidity:</b> " + humidity + "</p>" +
	    	            	  	"<p><b>Wind:</b> " + wind + "mph</p></div>")
	    	         	 });
    	          });
	    	    }     	 
				
		</script>
	</body>
</html>

@stop