<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<link rel="stylesheet" type="text/css" href="style.css">
<title>Selected User</title>
</head>

<body>
<?php
require 'connect.php';
$Nomer = trim($_REQUEST['Nomer']);


$sql_select = "SELECT * FROM zakaz WHERE Nomer='$Nomer' ";
$result = mysql_query($sql_select);
$row = mysql_fetch_array($result);

if($row)
{
	printf("<p>Пользователь: " .$row['Familia'] . " " .$row['Name'] . " " .$row['Otchestvo'] . " " .$row['Telefon'] . " " .$row['Email'] ."</p> 
	<p><i>Заказ: </i></p><p>Номер: " .$row['Nomer'] . "</p><p>Создан: " .$row['Data'] . "</p><p>Вид устройства: " .$row['Vid_ustroystva'] . "</p><p>Номер: " .$row['Nomer'] . "</p><p>Производитель: " .$row['Proizvoditel'] . "</p><p>Модель: " .$row['Model'] . "</p><p>Дефекты: " .$row['Defekti'] . "</p><p>Вид поломки: " .$row['Vid_polomki'] . "</p><p>Стоимость работ: " .$row['Stoimost_pabot'] . "</p><p>Деталь: " .$row['Detal'] . "</p><p>Стоимость детали: " .$row['Stoimost_detali'] . "</p><p>СТатус: " .$row['Status'] . "</p><p>Ремонтёр: " .$row['Remonter'] . "</p>---------<br/>"
	);
}
else{echo ("Пользователя с таким именем в базе нет<br/><br/>");}


?>
<a href="search_user.php">Вернуться к поиску</a><br/><br/>
<a href="info_form.php">Добавить пользователя</a>
</body>
</html>