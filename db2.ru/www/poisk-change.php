<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">

<title>����� ������������ ��� ��������������.</title>
</head>
<body>
<form action="edit-poisk.php" method="post">

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


<input type="submit" value="������� �������">

</form>
<a href="info_form.php">�������� ������������</a><br/><br/>
<a href="search_user.php">��������� � ������</a><br/><br/>
</body>
</html>