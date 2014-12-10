<?php
require 'connect.php';
session_start();
if (isset($_SESSION['login']))
{

echo "
<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Strict//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml' xml:lang='en' lang='en'>
<head>
<title>Видео</title>
<link href='style.css' rel='stylesheet' type='text/css' />
<link href='layout.css' rel='stylesheet' type='text/css' />
<style type='text/css'>
   TD {
   vertical-align: center; 
   }
   #col1 {
    width: 27%; 
      }
   #col2 {
    width: 60%; 
        }
   #col3 {
    width: 13%; 
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
          <li><a href='index.php'><img src='images/icon1.gif' alt='' /></a></li>
          <li><a href='index.php'><img src='images/icon2.gif' alt='' /></a></li>
          <li class='last'><a href='index.php'><img src='images/icon3.gif' alt='' /></a></li>
        </ul>
        <ul class='site-nav'>
          <li><a href='../info_form.php'>Новый заказ</a></li>
          <li><a href='../search_user.php'>Найти заказ</a></li>
          <li><a href='../select_change.php'>Все заказы</a></li>
          <li><a href='video.php'>Видео в помощь</a></li>
          <li><a href='../forum/test.php''>Форум</a></li>
          <li class='last'><a href='../vhod.php'>Выход</a></li>
        </ul>
        <div class='logo'><a href='index.php'><img src='images/logo.png' alt='' /></a></div>
        <div class='slogan'><img src='images/slogan.png' alt='' /></div>
      </div>
</br>
<h3>Видео</h3>

<table width='90%' cellpadding='5' cellspacing='0'>
<tr>
<td id='col1'>

</td>
<td id='col2'>
<a href='apple.php'><img src='ap.jpg' width='150' height='150' alt='Apple'></a>
<a href='phone.php'><img src='tel.jpg' width='150' height='150' alt='Телефоны'></a>
<a href='planshet.php'><img src='pl.jpg' width='170' height='130' alt='Планшеты'></a>
</td>
<td id='col3'>
</td>
</tr>
</table></br>



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
