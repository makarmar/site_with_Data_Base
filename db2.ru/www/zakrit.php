<!DOCTYPE HTML>
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
$select_sql = "SELECT id, nomer, Kod_ustr FROM zakaz WHERE id= $id";
$result = mysql_query($select_sql);
$row = mysql_fetch_array($result);
printf("<form action='up_zakr.php' method='post' name='forma'>
<fieldset>
<input type='hidden' name='id'  value='%s'><br/>

<label for='Nomer'>�����:</label><br/>
<input type='text' name='Nomer' size='30' value='%s' ><br/>

<label for='Kod_ustr'>��� ����������:</label><br/>
<input type='text' name='Kod_ustr' size='30' value='%s'  ><br/>


</fieldset>
<br/>
<fieldset>
<input id='submit' type='submit' value='�������� � �������'><br/>
</fieldset>
</form>",$row['id'], $row['Nomer'], $row['Kod_ustr'] );
?>

<a href="menu.php">����� � ����</a></br></br>
</body>
</html>