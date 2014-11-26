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

$Kod_ustr = $_REQUEST['Kod_ustr']; 


if($Kod_ustr = $Nomer)
{ $Status = Закрыт; }
else { echo 'Не равны'; }

/*$update_sql = "UPDATE zakaz SET  Nomer='$Nomer',  Familia='$Familia', Name='$Name', Otchestvo='$Otchestvo', Telefon='$Telefon', Email='$Email', Vid_ustroystva='$Vid_ustroystva', Proizvoditel='$Proizvoditel', Model='$Model', Defekti='$Defekti', Vid_polomki='$Vid_polomki', Stoimost_pabot='$Stoimost_pabot', Detal='$Detal', Stoimost_detali='$Stoimost_detali', Status='$Status', Remonter='$Remonter' WHERE id='$id'";
mysql_query($update_sql) or die("Ошибка вставки" . mysql_error());*/
echo '<p>Заказ сохранён в базе!</p>';

?>
<a href="menu.php">Назад в меню</a></br></br>
</body>
</html>