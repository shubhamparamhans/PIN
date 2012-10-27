<html>
<head><title>HELLO:: ::</title>
<style>
body{
margin:0 auto;
}
@font-face{
font-family:tweet;
src:url('/font/Arista.ttf');

}
#field1{
	position:absolute;
	height:25%;
	width:100%;
	background:#3c3c3c;
	color:white;
	font-family:'Open Sans';
	box-shadow:0 0 5px #f6f6f6;
	
}
#field2{
position:absolute;
top:25%;
width:1236px;
}
#left_c{
position:absolute;
//background:white;
color:#3399ff;
font-family:'Open Sans';
//float:left;
//height:75%;
width:300px;
left:0px;top:0px;
border:1px solid #3c3c3c;
height:500px;
padding:5px;margin-top:2px;
}
#center_c{
position:absolute;
font-family:'Open Sans';
width:600px;
//background:#f6f6f6;
left:315px;top:0px;
border:1px solid #3c3c3c;
height:500px;
padding:5px;margin-top:2px;
text-align:center;
}
#right_c{
position:absolute;
//background:#f1f1f1;
color:#3399ff;
font-family:'Open Sans';
//float:right;
//height:75%;
width:300px;
left:930px;top:0px;
border:1px solid #3c3c3c;
height:500px;
padding:5px;margin-top:2px;

}
</style>
<script type="text/javascript" src="JS/jquery.js"></script>
<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDY0kkJiTPVd2U7aTOAwhc9ySH6oHxOIYM&sensor=true">
</script>
<script type="text/javascript">
function intialize(){
var map1={
center:new google.maps.LatLng(0,0),
zoom:1,
mapTypeId:google.maps.MapTypeId.HYBRID	,
panControl:true,
zoomControl:true,
mapTypeControl:true,
scaleControl:true,
streetViewControl:true,
overviewMapControl:true,
rotateControl:true	
};
var map2=new google.maps.Map(document.getElementById('map'),map1);
var myCenter=new google.maps.LatLng(51.0,-0.12);
var marker=new google.maps.Marker({
  position:myCenter,
   animation:google.maps.Animation.BOUNCE
  });

//marker.setMap(map2);
}
google.maps.event.addDomListener(window, 'load', intialize);
if(navigator.geolocation){
var options={timeout:2000};
navigator.geolocation.getCurrentPosition(showLocation,errorHandler,options);

}
else{
alert("SORRY YOUR BROWSER DO NOT SUPPORT GEOLOCATION");
}
function showLocation(position){
var longi=position.coords.latitude;
var lati=position.coords.longitude;
alert("Long: "+longi+" latitude: "+lati); 
}
function errorHandler(){}
</script>
<script type="text/javascript" >
$(document).ready(function(){
	var w1=$(window).width();
	var f2=$('#field2');
	var w_f2=f2.width();
	var margin_f2=(w1-w_f2)/2;
	f2.css({'margin-left':margin_f2});
	alert($('#field2').width());
	
	//HERE IS THE MAP THING
	
	});

</script>
</head>
<body>
<div id="field1">
HELLO WORLD
</div>

<div id="field2">

<div id="left_c">
HELLO1
<br>hjfafa<br>fakj
</div>
<div id="center_c">
HELLO<center>
<div id="map" style="width:500px;height:400px;">
</div></center>
</div>
<div id="right_c">
HELLO
</div>

</div>

</body>
</html>