<?php
require 'connect.php';
session_start();
if (isset($_SESSION['login']))
{

echo "

<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv='Content-Type' content='text/html; charset=windows-1251'>
<link rel='stylesheet' type='text/css' href='style.css'>
<title>����� ������</title>
</head>

<body>
<fieldset>
<form method='post' action='select_user.php'>


<label for='Nomer'><div class='no_print'>�����:</div></label><br/> 
<input type='text' name='Nomer' size='10'><br/> 

<input id='submit' type='submit' value='����� � �������'><br/>

</form>
</fieldset>

<a href='menu.php'>����� � ����</a></br></br>
</body>
</html>
";

}

else 
{
header('location:vhod.php');
}
?>
