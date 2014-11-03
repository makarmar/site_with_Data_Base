<?php
require 'connect.php';
//Присваиваем каждому значению в форме переменную, передаём переменным данные форм
if (isset($_POST['submit']))
{

if(empty($_POST['login']))
{
echo 'Вы не ввели логин';
}
elseif(empty($_POST['password']))
{
echo 'Вы не ввели пароль';
}
elseif(empty($_POST['password2']))
{
echo 'Вы не ввели подтверждение пароля';
}
elseif($_POST['password'] != $_POST['password2'])
{
echo 'Введенные пароли не совпадают';
}
elseif(empty($_POST['fio']))
{
echo 'Вы не ввели ФИО';
}
elseif(empty($_POST['email']))
{
echo 'Вы не ввели E-mail';
}
else
{
$login=$_POST['login']; 
$password=$_POST['password']; 
$password2 = $_POST['password2'];
$fio = $_POST['fio'];
$email = $_POST['email'];
$password = md5( "$password" );

//выборка id из вашей таблицы зарегистрированных пользователей, сверка логина и пароля
$query = "SELECT `id` FROM `users` WHERE `login`='{$login}' AND `password`='{$password}'";

    $login = stripslashes($login);//удаляет экранирование символов, произведенное функцией addslashes()
    $login = htmlspecialchars($login);//преобразует специальные символы в HTML-сущности (обрабатываем их, чтобы теги и скрипты не работали на случай от действий умников-спамеров)
 $password = stripslashes($password);
    $password = htmlspecialchars($password);
    $login = trim($login);//удаляет пробелы (или другие символы) из начала и конца строки
    $password = trim($password);
	// Задаём переменные для подключения к БД
$db_host = 'localhost';
$db_user = 'sa';
$db_password = '1';
$database = 'site';
// Подключаемся к БД mysql_connect($db_host, $db_user, $db_password);
mysql_select_db($database);

	mysql_query("CREATE TABLE IF NOT EXISTS users (`id` int(10) unsigned NOT NULL auto_increment, `date_created` datetime NOT NULL, `login` VARCHAR( 255 ) NOT NULL, `password` VARCHAR( 255 ) NOT NULL,`email` VARCHAR( 255 ) NOT NULL,`fio` VARCHAR( 255 ) NOT NULL, PRIMARY KEY  (`id`) ) 
ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6849") or die(mysql_error());
$sql = mysql_query($query) or die(mysql_error());
if (mysql_num_rows($sql) > 0)
{
echo 'Такой логин уже существует';
}

else 
{
//Записываем в БД данные форм
$query="INSERT INTO `users` (`id`, `date_created`, `login`, `password`, `fio`, `email`)
                  VALUES ('', NOW(), '$login', '$password', '$email')"; 
        $result = mysql_query($query); 
        if (!$result) { 
          $feedback = 'ОШИБКА - Ошибка базы данных'; 
          $feedback .= mysql_error(); 
          return $feedback; 
        }
echo 'Регистрация успешно прошла';
echo '<br /><br /><a href="http://db2.ru/vhod.php">Войти на сайт</a>';
}
}
}
?>