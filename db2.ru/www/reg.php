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
<title>Регистрация</title>";
 ?>

 
 
<?php  
require 'connect.php';
$config = array(); // указываем, что переменная $config это массив  
$config['server'] = "localhost"; //сервер MySQL. Обычно это localhost  
$config['login'] ="sa"; //пользователь MySQL  
$config['passw'] = "1"; //пароль от пользователя MySQL  
$config['name_db'] = "site"; //название нашей БД  

$connect = mysql_connect($config['server'], $config['login'], $config['passw']) or die("Error!"); // подключаемся к MySQL или, в случаи  ошибки, прекращаем выполнение кода 
mysql_select_db($config['name_db'], $connect) or die("Error!"); // выбираем БД  или, в случаии ошибки, прекращаем выполнение кода  
?>

<?php 
require 'connect.php';
echo "
</head>

<body>
<div align='center'>


<div align='center' id='error'>   ";
?>


<?php  
if(isset($_POST['submit'])){ //выполняем нижеследующий код, только если нажата кнопка 
$query = mysql_query("SELECT * FROM `users`  WHERE `login`='".$_POST['login']."'"); //отправляем запрос на выборку всего содержимого , где поле логин равно переменной $login  
  $row = mysql_num_rows($query); // считаем количество рядов результата запроса  
if(empty($_POST['login'])){ //если переменная логина пуста или не существует  
echo"Вы не ввели логин"; // выводим сообщение об ошибке  
  }elseif(!preg_match("/[-a-zA-Z0-9]{3,15}/", $_POST['login'])){ //если переменная не соответствует шаблону -a-zA-Z0-9  
echo"Вы неправильно ввели логин"; // выводим сообщение об ошибке   
  }elseif(empty($_POST['password'])){ //если переменная логина пуста или не существует  
echo"Вы не ввели пароль"; // выводим сообщение об ошибке  
  }elseif($row > 0){ //если переменная больше 0  
echo"Такой пользователь уже существует!"; // выводим сообщение об ошибке  
  }elseif(!preg_match("/[-a-zA-Z0-9]{3,30}/", $_POST['password'])){ //если переменная не соответствует шаблону -a-zA-Z0-9  
echo"Вы неправильно ввели пароль"; // выводим сообщение об ошибке   
  }elseif(empty($_POST['password2'])){ //если переменная логина пуста или не существует  
echo"Вы не ввели подтверждение пароля"; // выводим сообщение об ошибке  
  }elseif(!preg_match("/[-a-zA-Z0-9]{3,30}/", $_POST['password2'])){ //если переменная не соответствует шаблону -a-zA-Z0-9  
echo"Вы неправильно ввели подтверждение пароля"; // выводим сообщение об ошибке   
  }elseif($_POST['password'] != $_POST['password2']){ //если переменная пароля и переенная  повтора пароля не одинаковы  
echo"Вы неправильно ввели подтверждение пароля"; // выводим сообщение об ошибке   
  }elseif(empty($_POST['email'])){ //если переменная E-mail'a пуста   
echo"Вы не ввели E-mail"; // выводим сообщение об ошибке   
  }elseif(!preg_match("/[-a-zA-Z0-9_]{3,20}@[-a-zA-Z0-9]{2,64}\.[a-zA-Z\.]{2,9}/", $_POST['email'])){ //регулярка на проверку правильности email  
echo"Вы неправильно ввели E-mail"; // выводим сообщение об ошибке   
  }else{ //если же ошибок нет  
  $login = mysql_real_escape_string($connect,(int)$_POST['login']); //присваеваем переменную  
  $password = mysql_real_escape_string($connect,settype(md5($_POST['password']),"char"));//присваеваем переменную и КОДИРУЕМ её в md5 для безопасности  
  $email = mysql_real_escape_string($connect,settype( $_POST['email'], "char"));//присваеваем переменную  
   
  $insert = mysql_query("INSERT INTO `users` (`login` ,`password` ,`email` ) VALUES ('$login', '$password', '$email')"); //выполняем запрос на добавление нового пользователя  
  if($insert == true){  
  echo "Вы успешно зарегистрированы!</n></n> "; 
  echo "<a href='vhod.php'>Вход на сайт</a>";
  }else{  
  echo "Непредвиденная ошибка!";  
  }  
   
  }  

}  
?> 


<?php 
require 'connect.php';
echo "
</div>


<form action='' method='post' enctype='multipart/form-data'>
Логин:<br /><input name='login' type='text' size='20'><br />
Пароль:<br /><input name='password' type='password' size='20'><br />
Еще раз пароль:<br /><input name='password2' type='password' size='20'><br />
E-mail:<br /><input name='email' type='text' size='20'><br /><br />

<input name='submit' type='submit' value='Зарегистрироваться'><br /><br /><br />
</form>
<form method='post' action='write.php'>
		<img src='captcha.php' /></br>
		<input class='input' type='text' name='norobot' /></br>
		<input type='submit' value='Ввести' />
	</form>
</div>
</body>
</html> ";
}
else 
{
header('location:vhod.php');

}
?>