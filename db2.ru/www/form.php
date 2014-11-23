<!DOCTYPE HTML>
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
$Vid_ustroystva = trim($_REQUEST['category_list']); 
$Proizvoditel = trim($_REQUEST['category_list2']); 
$Model = trim($_REQUEST['Model']); 
$Defekti = trim($_REQUEST['Defekti']); 
$Vid_polomki = trim($_REQUEST['category_list3']); 
$Stoimost_pabot = trim($_REQUEST['Stoimost_pabot']); 
$Detal = trim($_REQUEST['Detal']); 
$Stoimost_detali = trim($_REQUEST['Stoimost_detali']); 
$Status = trim($_REQUEST['Status']); 
$Remonter = trim($_REQUEST['Remonter']); 

$insert_sql = "INSERT INTO zakaz (Nomer, Data, Familia, Name, Otchestvo, Telefon, Email, Vid_ustroystva, Proizvoditel, Model, Defekti, Vid_polomki, Stoimost_pabot, Detal, Stoimost_detali, Status, Remonter)" . 
"VALUES('{$Nomer}', now(), '{$Familia}', '{$Name}', '{$Otchestvo}', '{$Telefon}', '{$Email}', '{$Vid_ustroystva}', '{$Proizvoditel}', '{$Model}', '{$Defekti}', '{$Vid_polomki}', '{$Stoimost_pabot}', '{$Detal}', '{$Stoimost_detali}', '{$Status}', '{$Remonter}');"; 
mysql_query($insert_sql);
echo "<p>Заказ сохранён в базе!</p>";
?>
</body>
<a href="menu.php">Назад в меню</a></br></br>
</html>