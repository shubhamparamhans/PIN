$(document).ready(function(){
	var mapDiv = document.getElementById('mycanvas');
  var map = new google.maps.Map(mapDiv, {
    center: new google.maps.LatLng(37.4419, -122.1419),
    zoom: 13,
    
  });
});