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
<script type="text/javascript">
</script>
<script type="text/javascript" >
$(document).ready(function(){
	var w1=$(window).width();
	var f2=$('#field2');
	var w_f2=f2.width();
	var margin_f2=(w1-w_f2)/2;
	f2.css({'margin-left':margin_f2});
	alert($('#field2').width());
	
	
	
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
HELLO
</div>
<div id="right_c">
HELLO
</div>

</div>

</body>
</html>