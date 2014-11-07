<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<title>Untitled Document</title>
</head>

<body>
<?php 
require 'connect.php';


$Nomer = trim($_REQUEST['Nomer']);
$Data = trim($_REQUEST['Data']); 
$Familia = trim($_REQUEST['Familia']); 
$Name = trim($_REQUEST['Name']); 
$Otchestvo = trim($_REQUEST['Otchestvo']);
$Telefon = trim($_REQUEST['Telefon']); 
$Email = trim($_REQUEST['Email']); 
$Vid_ustroystva = trim($_REQUEST['Vid_ustroystva']); 
$Proizvoditel = trim($_REQUEST['Proizvoditel']); 
$Model = trim($_REQUEST['Model']); 
$Defekti = trim($_REQUEST['Defekti']); 
$Vid_polomki = trim($_REQUEST['Vid_polomki']); 
$Stoimost_pabot = trim($_REQUEST['Stoimost_pabot']); 
$Detal = trim($_REQUEST['Detal']); 
$Stoimost_detali = trim($_REQUEST['Stoimost_detali']); 
$Status = trim($_REQUEST['Status']); 
$Remonter = trim($_REQUEST['Remonter']); 

$insert_sql = "INSERT INTO zakaz (Nomer, Data, Familia, Name, Otchestvo, Telefon, Email, Vid_ustroystva, Proizvoditel, Model, Defekti, Vid_polomki, Stoimost_pabot, Detal, Stoimost_detali, Status, Remonter)" . 
"VALUES('{$Nomer}', '{$Data}', '{$Familia}', '{$Name}', '{$Otchestvo}', '{$Telefon}', '{$Email}', '{$Vid_ustroystva}', '{$Proizvoditel}', '{$Model}', '{$Defekti}', '{$Vid_polomki}', '{$Stoimost_pabot}', '{$Detal}', '{$Stoimost_detali}', '{$Status}', '{$Remonter}');"; 
mysql_query($insert_sql);
echo "<p>Заказ сохранён в базе!</p>";
?>
</body>
<a href="search_user.php">Вернуться к поиску</a><br/><br/>
<a href="info_form.php">Добавить пользователя</a>
</html>