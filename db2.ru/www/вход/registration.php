<?php 
require 'connect.php';
echo " 
<html> 
<head> 
<title>Форма входа на PHP</title> 
</head>
<body> 
<!--Подключение обработчика формы--> 
<form id='forma' action='script2.php' method='POST'> 
<h1>Форма регистрации</h1> 
<p>Заполните поля для регистрации на сайте</p> 
<p>Имя<br /><input type='text' name='login' ></p> 
<p>Пароль<br /><input type='password' name='password' ></p> 
<p>Повторите пароль<br /><input type='password' name='password2'></p> 
<p>Фамилия Имя Отчество<br /><input type='text' name='fio'></p> 
<p>Email<br /><input type='text' name='email'></p> 
<p><input type='submit' value='OK' name='submit' ></p> 
</form>
</body>
</html>"; 
?>