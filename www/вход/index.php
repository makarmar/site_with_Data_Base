<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<title>����</title>

<?php  
$config = array(); // ���������, ��� ���������� $config ��� ������  
$config['server'] = "localhost"; //������ MySQL. ������ ��� localhost  
$config['login'] ="sa"; //������������ MySQL  
$config['passw'] = "1"; //������ �� ������������ MySQL  
$config['name_db'] = "site"; //�������� ����� ��  

$connect = mysql_connect($config['server'], $config['login'], $config['passw']) or die("Error!"); // ������������ � MySQL ���, � ������  ������, ���������� ���������� ���� 
mysql_select_db($config['name_db'], $connect) or die("Error!"); // �������� ��  ���, � ������� ������, ���������� ���������� ����  
?>


</head>

<body>
<div align="center">

<form action="index_form.php" method="post" enctype="multipart/form-data">
�����:<br /><input name="login" type="text" size="20"><br />
������:<br /><input name="password" type="password" size="20"><br />
<input name="submit" type="submit" value="�����"><br />
</form>
</div>
</body>
</html>