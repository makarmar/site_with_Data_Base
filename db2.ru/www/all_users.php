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
<?php
require 'connect.php';

$sql_select = "SELECT * FROM zakaz";
$result = mysql_query($sql_select);
$row = mysql_fetch_array($result);

do
{
	printf("<p>������������: " .$row['Familia'] . " " .$row['Name'] . " " .$row['Otchestvo'] . " " .$row['Telefon'] . " " .$row['Email'] ."</p> 
	<p><i>�����: </i></p><p>�����: " .$row['Nomer'] . "</p><p>������: " .$row['Data'] . "</p><p>��� ����������: " .$row['Vid_ustroystva'] . "</p><p>�����: " .$row['Nomer'] . "</p><p>�������������: " .$row['Proizvoditel'] . "</p><p>������: " .$row['Model'] . "</p><p>�������: " .$row['Defekti'] . "</p><p>��� �������: " .$row['Vid_polomki'] . "</p><p>��������� �����: " .$row['Stoimost_pabot'] . "</p><p>������: " .$row['Detal'] . "</p><p>��������� ������: " .$row['Stoimost_detali'] . "</p><p>������: " .$row['Status'] . "</p><p>�������: " .$row['Remonter'] . "</p>---------<br/>"
	);
}
while($row = mysql_fetch_array($result));


?>
<<<<<<< HEAD
<a href="menu.php">����� � ����</a></br></br>
=======
<a href="search_user.php">��������� � ������</a><br/><br/>
<a href="info_form.php">�������� ������������</a>
>>>>>>> f55527339ef2a6372f9b411b8ab6bdd1f7148c0a
</body>
</html>