<html>
<head>
<title>WELCOME TO ::FWITTER::</title>
<link rel="stylesheet" href="css/index.css" type="text/css">
<style>
</style>
<script type="text/javascript" src="JS/jquery.js"></script>
<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDY0kkJiTPVd2U7aTOAwhc9ySH6oHxOIYM&sensor=true">
</script>
<script src="./JS/1.js" type="text/javascript"></script>
<script type="text/javascript">
function intialize(){
var map1={
center:new google.maps.LatLng(51.0,-0.12),
zoom:16,
mapTypeId:google.maps.MapTypeId.HYBRID	,
panControl:true,
zoomControl:true,
mapTypeControl:true,
scaleControl:true,
streetViewControl:true,
overviewMapControl:true,
rotateControl:true
};
var map2=new google.maps.Map(document.getElementById('mycanvas'),map1);
var myCenter=new google.maps.LatLng(51.0,-0.12);
var marker=new google.maps.Marker({
  position:myCenter,
   animation:google.maps.Animation.BOUNCE
  });

marker.setMap(map2);
}
google.maps.event.addDomListener(window, 'load', intialize);
</script>
</head>
<body>
<div id="top">
PIN MY POINT

</div>
<div id="mid">
<div id="left">
	PIN YOUR LOCATION OVER MAP<br>
	TAG YOU FRIENDS.&nbsp;.&nbsp;.&nbsp;<br>
	MAKE IT PUBLIC PRIVATE...<br>
	HAVE FUN :)
	<div id='mycanvas' style="width: 500px; height: 300px" onload="pp()">

	</div>
	
</div>
<div id="right">
</div>
</div>

</body>
</html>
