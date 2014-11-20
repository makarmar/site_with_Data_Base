<<<<<<< HEAD
<!DOCTYPE HTML>
=======
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
>>>>>>> f55527339ef2a6372f9b411b8ab6bdd1f7148c0a
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<link rel="stylesheet" type="text/css" href="style.css">
<title>Selected User</title>
</head>

<body>
<form action="edit-poisk.php" method="post">
<<<<<<< HEAD

<?php

=======
<?php
>>>>>>> f55527339ef2a6372f9b411b8ab6bdd1f7148c0a
require 'connect.php';
$Nomer = trim($_REQUEST['Nomer']);

$sql_select = "SELECT id, Nomer, Data, Familia, Name, Otchestvo FROM zakaz WHERE Nomer='$Nomer' ";
$result = mysql_query($sql_select);
$row = mysql_fetch_array($result);

<<<<<<< HEAD
do
{
printf("<input type='radio' name='user' value='%s' checked='checked'>%s %s %s %s %s<br/><br/>", $row['id'], $row['Nomer'], $row['Data'], $row['Familia'], $row['Name'], $row['Otchestvo']);	

}
while($row = mysql_fetch_array($result))

?>
<input type="submit" value="Выбрать элемент";>

<a href="menu.php">Назад в меню</a></br></br>
=======
/*if($row)
{
	printf("<p>Пользователь: " .$row['Familia'] . " " .$row['Name'] . " " .$row['Otchestvo'] . "</p> 
	<p><i>Заказ: </i></p><p>Номер: " .$row['Nomer'] . "</p><p>Создан: " .$row['Data'] . "</p>---------<br/>"
	);
}
else{echo ("Пользователя с таким именем в базе нет<br/><br/>");}*/


do
{
printf("<input type='radio' name='user' value='%s'>%s %s %s %s %s<br/><br/>", $row['id'], $row['Nomer'], $row['Data'], $row['Familia'], $row['Name'], $row['Otchestvo']);	
}
while($row = mysql_fetch_array($result))
?>
<input type="submit" value="Выбрать элемент">




<a href="search_user.php">Вернуться к поиску</a><br/><br/>
<a href="info_form.php">Добавить пользователя</a>
>>>>>>> f55527339ef2a6372f9b411b8ab6bdd1f7148c0a
</body>
</html>