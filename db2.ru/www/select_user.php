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
<input type="submit" value="������� �������";>

<a href="menu.php">����� � ����</a></br></br>
=======
/*if($row)
{
	printf("<p>������������: " .$row['Familia'] . " " .$row['Name'] . " " .$row['Otchestvo'] . "</p> 
	<p><i>�����: </i></p><p>�����: " .$row['Nomer'] . "</p><p>������: " .$row['Data'] . "</p>---------<br/>"
	);
}
else{echo ("������������ � ����� ������ � ���� ���<br/><br/>");}*/


do
{
printf("<input type='radio' name='user' value='%s'>%s %s %s %s %s<br/><br/>", $row['id'], $row['Nomer'], $row['Data'], $row['Familia'], $row['Name'], $row['Otchestvo']);	
}
while($row = mysql_fetch_array($result))
?>
<input type="submit" value="������� �������">




<a href="search_user.php">��������� � ������</a><br/><br/>
<a href="info_form.php">�������� ������������</a>
>>>>>>> f55527339ef2a6372f9b411b8ab6bdd1f7148c0a
</body>
</html>