<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<title>Untitled Document</title>
</head>
<body>
<?php
require 'connect.php';

//header('Refresh: 3; URL=http://db2.ru/menu.php'); 
//echo '�� ������ �������������� �� ������� �������� ����� 5 ������.'; 

$V_kasse = trim($_REQUEST['V_kasse']);


$ins = mysql_query( "select fio from Reg_vxod where id=(select max(id) from Reg_vxod) " );
	$mainrow=mysql_fetch_assoc($ins);
	$thetext=$mainrow["fio"];

$insert_sql = "INSERT INTO kassa_utro (Data, V_kasse, user)" .
"VALUES(now(), '{$V_kasse}', '{$thetext}');";
mysql_query($insert_sql);

echo "<br /><br />�����������! �� ������� ����� �� ����! <br /><a href='http://db2.ru/menu.php'>������� ��������</a><br />";

?>

</body>



</html>