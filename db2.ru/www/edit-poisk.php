<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<link rel="stylesheet" type="text/css" href="style.css">
<title>������ ����������</title>
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

<label for='Nomer'>�����:</label><br/>
<input type='text' name='Nomer' size='30' value='%s'><br/>

<label for='Familia'>�������:</label><br/>
<input type='text' name='Familia' size='30' value='%s'><br/>
<label for='Name'>���:</label><br/>
<input type='text' name='Name' size='30' value='%s'><br/>
<label for='Otchestvo'>��������:</label><br/>
<input type='text' name='Otchestvo' size='30' value='%s'><br/>
<label for='Telefon'>�������:</label><br/>
<input type='text' name='Telefon' size='30' value='%s'><br/>
<label for='Email'>Email:</label><br/>
<input type='text' name='Email' size='30' value='%s'><br/>

<label for='Vid_ustroystva'>��� ����������:</label><br/>
<input type='text' name='Vid_ustroystva' size='30' value='%s'><br/>

<label for='Proizvoditel'>�������������:</label><br/>
<input type='text' name='Proizvoditel' size='30' value='%s'><br/>
 
<label for='Model'>������:</label><br/>
<input type='text' name='Model' size='30' value='%s'><br/>
<label for='Defekti'>�������:</label><br/>
<input type='text' name='Defekti' size='30' value='%s'><br/>
 
<label for='Vid_polomki'>��� �������:</label><br/>
<input type='text' name='Vid_polomki' size='30' value='%s'><br/>


<label for='Stoimost_pabot'>��������� �����:</label><br/>
<input type='text' name='Stoimost_pabot' size='30' value='%s'><br/>
<label for='Detal'>������:</label><br/>
<input type='text' name='Detal' size='30' value='%s'><br/>
<label for='Stoimost_detali'>��������� ������:</label><br/>
<input type='text' name='Stoimost_detali' size='30' value='%s'><br/>
<label for='Status'>������:</label><br/>
<input type='text' name='Status' size='30' value='%s'><br/>
<label for='Remonter'>��������:</label><br/>
<input type='text' name='Remonter' size='30' value='%s'><br/>

</fieldset>
<br/>
<fieldset>
<input id='submit' type='submit' value='������������� ������'><br/>
</fieldset>
</form>",$row['id'], $row['Nomer'],  $row['Familia'], $row['Name'], $row['Otchestvo'], $row['Telefon'], $row['Email'], $row['Vid_ustroystva'], $row['Proizvoditel'],  $row['Model'], $row['Defekti'], $row['Vid_polomki'], $row['Stoimost_pabot'], $row['Detal'], $row['Stoimost_detali'], $row['Status'], $row['Remonter']);
?>

<a href="info_form.php">�������� ������������</a><br/><br/>
<a href="search_user.php">��������� � ������</a><br/><br/>
<a href="select_change.php">��������� � ������ ������� ��� ��������������</a><br/><br/>
</body>
</html>