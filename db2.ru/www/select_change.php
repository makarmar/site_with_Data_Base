<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<link rel="stylesheet" type="text/css" href="style.css">

<title>Выбор пользователя для редактирования.</title>
</head>
<body>
<form action="edit.php" method="post">

<?php
require 'connect.php';
$select_sql = "SELECT id, Nomer, Data, Familia, Name, Otchestvo FROM zakaz";
$result = mysql_query($select_sql);
$row = mysql_fetch_array($result);
do
{
printf("<input type='radio' name='user' value='%s'>%s %s %s %s %s<br/><br/>", $row['id'], $row['Nomer'], $row['Data'], $row['Familia'], $row['Name'], $row['Otchestvo']);	
}
while($row = mysql_fetch_array($result))
?>


<input type="submit" value="Редактировать заказ">

</form>

<form action="zakrit.php" method="post">

<input type="submit" value="Закрыть заказ">
</form>
<a href="menu.php">Назад в меню</a></br></br>
</body>
</html>