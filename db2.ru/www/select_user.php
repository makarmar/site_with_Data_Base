<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<link rel="stylesheet" type="text/css" href="style.css">
<title>Selected User</title>
</head>

<body>
<?php
require 'connect.php';
$Nomer = trim($_REQUEST['Nomer']);


$sql_select = "SELECT * FROM zakaz WHERE Nomer='$Nomer' ";
$result = mysql_query($sql_select);
$row = mysql_fetch_array($result);

if($row)
{
	printf("<p>������������: " .$row['Familia'] . " " .$row['Name'] . " " .$row['Otchestvo'] . " " .$row['Telefon'] . " " .$row['Email'] ."</p> 
	<p><i>�����: </i></p><p>�����: " .$row['Nomer'] . "</p><p>������: " .$row['Data'] . "</p><p>��� ����������: " .$row['Vid_ustroystva'] . "</p><p>�����: " .$row['Nomer'] . "</p><p>�������������: " .$row['Proizvoditel'] . "</p><p>������: " .$row['Model'] . "</p><p>�������: " .$row['Defekti'] . "</p><p>��� �������: " .$row['Vid_polomki'] . "</p><p>��������� �����: " .$row['Stoimost_pabot'] . "</p><p>������: " .$row['Detal'] . "</p><p>��������� ������: " .$row['Stoimost_detali'] . "</p><p>������: " .$row['Status'] . "</p><p>�������: " .$row['Remonter'] . "</p>---------<br/>"
	);
}
else{echo ("������������ � ����� ������ � ���� ���<br/><br/>");}


?>
<a href="search_user.php">��������� � ������</a><br/><br/>
<a href="info_form.php">�������� ������������</a>
</body>
</html>