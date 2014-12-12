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
<title>Все заказы</title>
<link href='style.css' rel='stylesheet' type='text/css' />
<link href='layout.css' rel='stylesheet' type='text/css' />
<style type='text/css'>
   TD {
   vertical-align: center; 
   }
   #col1 {
    width: 40%; 
      }
   #col2 {
    width: 40%; 
        }
   #col3 {
    width: 20%; 
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
$id=$_REQUEST['id'];

$Kod_ustr = $_REQUEST['Kod_ustr']; 

if($Kod_ustr = $Nomer)
{ $Status = 'Закрыт'; }
else { echo 'Не равны'; }

$update_sql = "UPDATE zakaz SET  Nomer='$Nomer', Status='$Status', Remonter='$Remonter', Familia='$Familia', Name='$Name', Otchestvo='$Otchestvo', Telefon='$Telefon', Email='$Email', Vid_ustroystva='$Vid_ustroystva', Proizvoditel='$Proizvoditel', Model='$Model', Defekti='$Defekti', Vid_polomki='$Vid_polomki', Detal='$Detal', Detal_com='$Detal_com', Stoimost_pabot='$Stoimost_pabot',  Stoimost_detali='$Stoimost_detali' WHERE id='$id'";
mysql_query($update_sql) or die("Ошибка вставки" . mysql_error());
echo '<p>Заказ сохранён в базе!</p>';

?>
<?php
echo "
</br>
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