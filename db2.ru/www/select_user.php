<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<link rel="stylesheet" type="text/css" href="style.css">
<title>Selected User</title>
</head>

<body>
<form action="edit-poisk.php" method="post">

<?php

require 'connect.php';
$Nomer = trim($_REQUEST['Nomer']);

$sql_select = "SELECT id, Nomer, Data, Familia, Name, Otchestvo FROM zakaz WHERE Nomer='$Nomer' ";
$result = mysql_query($sql_select);
$row = mysql_fetch_array($result);

do
{
printf("<input type='radio' name='user' value='%s' checked='checked'>%s %s %s %s %s<br/><br/>", $row['id'], $row['Nomer'], $row['Data'], $row['Familia'], $row['Name'], $row['Otchestvo']);	

}
while($row = mysql_fetch_array($result))

?>
<input type="submit" value="Редактировать заказ";>

<a href="menu.php">Назад в меню</a></br></br>
</body>
</html>