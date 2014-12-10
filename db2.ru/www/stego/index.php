<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv='Content-Type' content='text/html; charset=windows-1251'>
		<title>Стеганография</title>

	<!-- <script src="glm-ajax.js"></script> -->
	<!-- <script src="stego.js"></script> -->
		<!-- <script type="text/javascript" src="ajax.js"></script> -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
		<script type="text/javascript" src="stego.js"></script>
	</head>

	<body>
		URL: <input type="url" name="url" id="url" value=""></br></br>
		Код: <input type="text" name="code" id="code" value=""></br></br>

		<input type="button" value="Скрыть" onclick="stego(document.getElementById('url').value, document.getElementById('code').value)"/>
		<input type="button" value="Извлечь" onclick="destego(document.getElementById('url').value)"></br></br>

		<div id="img_new"></div>
	</body>
</html>