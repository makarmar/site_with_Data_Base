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
</head>
<body> 

<p>����:</p>
<a href='apple.php'>Apple</a></br></br>
<a href='phone.php'>��������\���������</a></br></br>
<a href='planshet.php'>��������</a></br></br>
<a href='../menu.php'>����� � ����</a></br></br>

</body>
</html> 
";

}

else 
{
header('location:vhod.php');
}
?>
