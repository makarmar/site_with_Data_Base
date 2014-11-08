<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<link rel="stylesheet" type="text/css" href="style.css">
<title>Вносим изменеиния</title>
</head>

<body>
<?php
require 'connect.php';
$id = $_REQUEST['user'];
$select_sql = "SELECT * FROM zakaz WHERE id= $id ";
$result = mysql_query($select_sql);
$row = mysql_fetch_array($result);
printf("<form action='update.php' method='post' name='forma'>
<fieldset>
<input type='hidden' name='id'  value='%s'><br/>

<label for='Nomer'>Номер:</label><br/>
<input type='text' name='Nomer' size='30' value='%s'><br/>

<label for='Familia'>Фамилия:</label><br/>
<input type='text' name='Familia' size='30' value='%s'><br/>
<label for='Name'>Имя:</label><br/>
<input type='text' name='Name' size='30' value='%s'><br/>
<label for='Otchestvo'>Отчество:</label><br/>
<input type='text' name='Otchestvo' size='30' value='%s'><br/>
<label for='Telefon'>Телефон:</label><br/>
<input type='text' name='Telefon' size='30' value='%s'><br/>
<label for='Email'>Email:</label><br/>
<input type='text' name='Email' size='30' value='%s'><br/>

<label for='Vid_ustroystva'>Вид устройства:</label><br/>
<input type='text' name='Vid_ustroystva' size='30' value='%s'><br/>

<label for='Proizvoditel'>Производитель:</label><br/>
<input type='text' name='Proizvoditel' size='30' value='%s'><br/>
 
<label for='Model'>Модель:</label><br/>
<input type='text' name='Model' size='30' value='%s'><br/>
<label for='Defekti'>Дефекты:</label><br/>
<input type='text' name='Defekti' size='30' value='%s'><br/>
 
<label for='Vid_polomki'>Вид поломки:</label><br/>
<input type='text' name='Vid_polomki' size='30' value='%s'><br/>


<label for='Stoimost_pabot'>Стоимость работ:</label><br/>
<input type='text' name='Stoimost_pabot' size='30' value='%s'><br/>
<label for='Detal'>Деталь:</label><br/>
<input type='text' name='Detal' size='30' value='%s'><br/>
<label for='Stoimost_detali'>Стоимость детали:</label><br/>
<input type='text' name='Stoimost_detali' size='30' value='%s'><br/>
<label for='Status'>Статус:</label><br/>
<input type='text' name='Status' size='30' value='%s'><br/>
<label for='Remonter'>Ремонтер:</label><br/>
<input type='text' name='Remonter' size='30' value='%s'><br/>

</fieldset>
<br/>
<fieldset>
<input id='submit' type='submit' value='Редактировать запись'><br/>
</fieldset>
</form>",$row['id'], $row['Nomer'],  $row['Familia'], $row['Name'], $row['Otchestvo'], $row['Telefon'], $row['Email'], $row['Vid_ustroystva'], $row['Proizvoditel'],  $row['Model'], $row['Defekti'], $row['Vid_polomki'], $row['Stoimost_pabot'], $row['Detal'], $row['Stoimost_detali'], $row['Status'], $row['Remonter']);
?>

<a href="info_form.php">Добавить пользователя</a><br/><br/>
<a href="search_user.php">Вернуться к поиску</a><br/><br/>
<a href="select_change.php">Вернуться к выбору записей для редактирования</a><br/><br/>
</body>
</html>