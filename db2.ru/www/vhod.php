<?php // Заключаем форму в php-скрипт для возможности прописівать скрипты прямо в этом файле
require 'connect.php';
//  вся процедура работает на сессиях. В сессии хранятся данные  пользователя, пока он находится на сайте. Запускается сессия в начале странички
	session_start();
echo "
<html>
<head>
<title>Форма входа на PHP</title>
</head><body>"?>
<?php
require 'connect.php';
if(isset($_SESSION['login']))
{$login='Здравствуйте, '.$_SESSION['login'].'!';}
 // Проверяем, пусты ли переменные логина и id пользователя
    if (empty($_SESSION['login']) or empty($_SESSION['id']))
 // Если пусты, то 
    {
				echo "<p style='margin-left:60px;'>Вы вошли на сайт, как гость</p><br>
<!--Подключение обработчика формы-->
<form id='forma' action='script1.php' method='post'>
<h1>Форма входа</h1>
<p>Заполните поля для входа на сайт</p>
<p>Логин<br /><input type='text' name='login'></p>
<p>Пароль<br /><input type='password' name='password'></p>
<p><input type='submit' name='submit' value='Войти'>
<!--**** Кнопка (type='submit') отправляет данные на страничку script1.php ***** --> 
";
	
	}
 else
 // Если не пусты, то 
    {
	    echo "<br /><br />Вы вошли на сайт, как ".$_SESSION['login']."<br><br />";
		echo ('<form action="close.php" method="POST">
				<input type="submit" value="Выход"/>
			</form>');
		echo ('<form action="kassa_vecher.php" method="POST">
				<input type="submit" value="Закрыть кассу"/>
			</form>');	
}
echo"
</body></html>"; 
?>