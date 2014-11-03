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

<p>Меню:</p>
<a href='apple.php'>Apple</a></br></br>
<a href='phone.php'>Телефоны\Смартфоны</a></br></br>
<a href='planshet.php'>Планшеты</a></br></br>
<a href='../menu.php'>Назад в меню</a></br></br>

</body>
</html> 
";

}

else 
{
header('location:vhod.php');
}
?>
