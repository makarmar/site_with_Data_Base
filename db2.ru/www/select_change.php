<<<<<<< HEAD
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<link rel="stylesheet" type="text/css" href="style.css">
=======
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
>>>>>>> f55527339ef2a6372f9b411b8ab6bdd1f7148c0a

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


<input type="submit" value="Выбрать элемент">

</form>
<<<<<<< HEAD
<a href="menu.php">Назад в меню</a></br></br>
=======
<a href="info_form.php">Добавить пользователя</a><br/><br/>
<a href="search_user.php">Вернуться к поиску</a><br/><br/>
>>>>>>> f55527339ef2a6372f9b411b8ab6bdd1f7148c0a
</body>
</html>