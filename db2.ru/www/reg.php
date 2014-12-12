<?php
  header('Content-Type: text/html; charset= utf-8');
?>
<?php
require 'connect.php';
session_start();
if (isset($_SESSION['login']))
{

echo "


<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Strict//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml' xml:lang='en' lang='en'>
<head>
<title>Редактирование</title>
<link href='style.css' rel='stylesheet' type='text/css' />
<link href='layout.css' rel='stylesheet' type='text/css' />
<style type='text/css'>
   TD {
   vertical-align: center; 
   }
   #col1 {
    width: 35%; 
      }
   #col2 {
    width: 35%; 
        }
   #col3 {
    width: 30%; 
      }
	  
	  .button_example{
border:1px solid #ffad41; -webkit-border-radius: 3px; -moz-border-radius: 3px;border-radius: 3px;font-size:16px;font-family:arial, helvetica, sans-serif; padding: 10px 10px 10px 10px; text-decoration:none; display:inline-block;text-shadow: -1px -1px 0 rgba(0,0,0,0.3);font-weight:bold; color: #FFFFFF;
 background-color: #ffc579; background-image: -webkit-gradient(linear, left top, left bottom, from(#ffc579), to(#fb9d23));
 background-image: -webkit-linear-gradient(top, #ffc579, #fb9d23);
 background-image: -moz-linear-gradient(top, #ffc579, #fb9d23);
 background-image: -ms-linear-gradient(top, #ffc579, #fb9d23);
 background-image: -o-linear-gradient(top, #ffc579, #fb9d23);
 background-image: linear-gradient(to bottom, #ffc579, #fb9d23);filter:progid:DXImageTransform.Microsoft.gradient(GradientType=0,startColorstr=#ffc579, endColorstr=#fb9d23);
}

.button_example:hover{
 border:1px solid #ff9913;
 background-color: #ffaf46; background-image: -webkit-gradient(linear, left top, left bottom, from(#ffaf46), to(#e78404));
 background-image: -webkit-linear-gradient(top, #ffaf46, #e78404);
 background-image: -moz-linear-gradient(top, #ffaf46, #e78404);
 background-image: -ms-linear-gradient(top, #ffaf46, #e78404);
 background-image: -o-linear-gradient(top, #ffaf46, #e78404);
 background-image: linear-gradient(to bottom, #ffaf46, #e78404);filter:progid:DXImageTransform.Microsoft.gradient(GradientType=0,startColorstr=#ffaf46, endColorstr=#e78404);
}
    </style>
</head>

<body id='page6'>
<div class='tail-top-right'></div>
<div class='tail-top'>
  <div class='tail-bottom'>
    <div id='main'>
      <!-- header -->
      <div id='header'>
        <form action='' method='post' id='form'>
          <div>
            <label>Поиск:</label>
            <span>
            <input type='text' />
            </span></div>
        </form>
        <ul class='list'>
          <li><a href='home.php'><img src='images/icon1.gif' alt='' /></a></li>
          <li><a href='home.php'><img src='images/icon2.gif' alt='' /></a></li>
          <li class='last'><a href='home.php'><img src='images/icon3.gif' alt='' /></a></li>
        </ul>
        <ul class='site-nav'>
          <li><a href='info_form.php'>Новый заказ</a></li>
          <li><a href='search_user.php'>Найти заказ</a></li>
          <li><a href='select_change.php'>Все заказы</a></li>
          <li><a href='video/video.php'>Видео в помощь</a></li>
          <li><a href='forum/test.php''>Форум</a></li>
          <li class='last'><a href='vhod.php'>Выход</a></li>
        </ul>
        <div class='logo'><a href='home.php'><img src='images/logo.png' alt='' /></a></div>
        <div class='slogan'><img src='images/slogan.png' alt='' /></div>
      </div>
	  </br>
	  ";
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

<input name='submit' type='submit' value='Зарегистрироваться' class='button_example'><br /><br /><br />
</form>

</div>


<div id='footer'>
        <div class='indent'>
          <div class='fleft'>group of companies LeXan</div>
          <div class='fright'>Тел.: 8(812)100-00-00</br>+7911-100-00-00</div>
        </div>
      </div>



</div>
  </div>
</div>
</body></html>
";

}

else 
{
header('location:vhod.php');
}
?>