<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Аналоговые часы на JavaScript</title>
<link href="style/style.css" rel="stylesheet" type="text/css">
<link href='http://fonts.googleapis.com/css?family=Kelly+Slab&subset=cyrillic' rel='stylesheet' type='text/css'>

<script>
function dysTime(){
		var d = new Date();
		var sek = d.getSeconds();
		var minut = d.getMinutes();
		var hour = d.getHours();
		
		var s = sek*6;
		var m = minut*6;
		var Hm = minut*0.5;
		if (hour > 12) {
				h = (hour - 12 )* 30;
			}
		else {
				h = hour * 30;
			}
		
		var divS = document.getElementById("sekond");
			divS.style.webkitTransform = "rotate("+ s +"deg)";
			divS.style.MozTransform = "rotate("+ s +"deg)";
			divS.style.OTransform = "rotate("+ s +"deg)";
			divS.style.msTransform = "rotate("+ s +"deg)";
		var divM = document.getElementById("minute");
			divM.style.webkitTransform = "rotate("+ m +"deg)";
			divM.style.MozTransform = "rotate("+ m +"deg)";
			divM.style.OTransform = "rotate("+ m +"deg)";
			divM.style.msTransform = "rotate("+ m +"deg)";
		var divH = document.getElementById("hour");
			divH.style.webkitTransform = "rotate("+ (h+Hm) +"deg)";
			divH.style.MozTransform = "rotate("+ (h+Hm) +"deg)";
			divH.style.OTransform = "rotate("+ (h+Hm) +"deg)";
			divH.style.msTransform = "rotate("+ (h+Hm) +"deg)";
		
		setTimeout(dysTime, 1000);
	}
	
window.onload = dysTime;
</script>

</head>

<body>
	<div id="logo"><img src="../logo.png" width="380" height="110"></div>
    <div id="name">Аналоговые часы на JavaScript</div>
<div id="сlock">
  		<div id="minute"><img src="img/minute.png" width="300" height="300"></div>
     	<div id="hour"><img src="img/hour.png" width="300" height="300"></div>
      	<div id="sekond"><img src="img/sek.png" width="300" height="300"></div>
      	<div id="ciferblat"><img src="img/Ciferblat.png" width="300" height="300">
</div>
</div>
</body>
</html>
