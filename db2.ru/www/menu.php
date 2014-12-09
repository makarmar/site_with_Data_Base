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
<a href='info_form.php'>Новый заказ</a></br></br>
<a href='search_user.php'>Найти заказ</a></br></br>
<a href='select_change.php'>Вся база</a></br></br>
<a href='video/video.php'>Видео в помощь</a></br></br>
<a href='forum/test.php'>Форум</a></br></br>
<a href='vhod.php'>На выход</a></br></br>
<a href='reg.php'>Регистрация нового пользователя</a>
</body>
</html> 
";

}

else 
{
header('location:vhod.php');
}
?>
