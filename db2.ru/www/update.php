<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<link rel="stylesheet" type="text/css" href="style.css">
<title>Untitled Document</title>
</head>

<body>
<?php
require 'connect.php';
$id=$_REQUEST['id'];
$Nomer = $_REQUEST['Nomer']; 

$Familia = $_REQUEST['Familia']; 
$Name = $_REQUEST['Name']; 
$Otchestvo = $_REQUEST['Otchestvo'];
$Telefon = $_REQUEST['Telefon']; 
$Email = $_REQUEST['Email']; 
$Vid_ustroystva = $_REQUEST['Vid_ustroystva']; 
$Proizvoditel = $_REQUEST['Proizvoditel']; 
$Model = $_REQUEST['Model']; 
$Defekti = $_REQUEST['Defekti']; 
$Vid_polomki = $_REQUEST['Vid_polomki']; 
$Stoimost_pabot = $_REQUEST['Stoimost_pabot']; 
$Detal = $_REQUEST['Detal']; 
$Stoimost_detali = $_REQUEST['Stoimost_detali']; 
$Status = $_REQUEST['Status']; 
$Remonter = $_REQUEST['Remonter']; 

$update_sql = "UPDATE zakaz SET  Nomer='$Nomer',  Familia='$Familia', Name='$Name', Otchestvo='$Otchestvo', Telefon='$Telefon', Email='$Email', Vid_ustroystva='$Vid_ustroystva', Proizvoditel='$Proizvoditel', Model='$Model', Defekti='$Defekti', Vid_polomki='$Vid_polomki', Stoimost_pabot='$Stoimost_pabot', Detal='$Detal', Stoimost_detali='$Stoimost_detali', Status='$Status', Remonter='$Remonter' WHERE id='$id'";
mysql_query($update_sql) or die("Ошибка вставки" . mysql_error());
echo '<p>Заказ сохранён в базе!</p>';

?>
<a href="menu.php">Назад в меню</a></br></br>
</body>
</html>