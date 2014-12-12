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
$id = $_REQUEST['user'];
$select_sql = "SELECT * FROM zakaz WHERE id= $id ";
$result = mysql_query($select_sql);
$row = mysql_fetch_array($result);
printf("<form action='update.php' method='post' name='forma'>

<input type='hidden' name='id'  value='%s' ><br/>

<label for='Nomer'>Номер:</label><br/>
<input type='text' name='Nomer' size='30' value='%s' readonly='readonly'><br/>

<label for='Familia'>Фамилия:</label><br/>
<input type='text' name='Familia' size='30' value='%s'><br/>
<label for='Name'>Имя:</label><br/>
<input type='text' name='Name' size='30' value='%s'><br/>
<label for='Otchestvo'>Отчество:</label><br/>
<input type='text' name='Otchestvo' size='30' value='%s'><br/>
<label for='Telefon'>Телефон:</label><br/>
<input type='text' name='Telefon' size='30' value='%s'><br/>
<label for='Email'>Email:</label><br/>
<input type='text' name='Email' size='30' value='%s'><br/>

<label for='Vid_ustroystva'>Вид устройства:</label><br/>
<input type='text' name='Vid_ustroystva' size='30' value='%s'><br/>

<label for='Proizvoditel'>Производитель:</label><br/>
<input type='text' name='Proizvoditel' size='30' value='%s'><br/>
 
<label for='Model'>Модель:</label><br/>
<input type='text' name='Model' size='30' value='%s'><br/>
<label for='Defekti'>Дефекты:</label><br/>
<input type='text' name='Defekti' size='30' value='%s'><br/>
 
<label for='Vid_polomki'>Вид поломки:</label><br/>
<input type='text' name='Vid_polomki' size='30' value='%s'><br/>


<label for='Stoimost_pabot'>Стоимость работ:</label><br/>
<input type='text' name='Stoimost_pabot' size='30' value='%s'><br/>
<label for='Detal'>Деталь:</label><br/>
<input type='text' name='Detal' size='30' value='%s'><br/>
<label for='Stoimost_detali'>Стоимость детали:</label><br/>
<input type='text' name='Stoimost_detali' size='30' value='%s'><br/>
<label for='Status'>Статус:</label><br/>
<input type='text' name='Status' size='30' value='%s' readonly='readonly'><br/>
<label for='Remonter'>Ремонтер:</label><br/>
<input type='text' name='Remonter' size='30' value='%s' readonly='readonly'><br/>
<label for='Kod_ustr'>Код устройства:</label><br/>
<input type='text' name='Kod_ustr' size='30' value='%s' ><br/>


<br/>

<input id='submit' type='submit' value='Редактировать запись' class='button_example'><br/></br>

</form>",$row['id'], $row['Nomer'],  $row['Familia'], $row['Name'], $row['Otchestvo'], $row['Telefon'], $row['Email'], $row['Vid_ustroystva'], $row['Proizvoditel'],  $row['Model'], $row['Defekti'], $row['Vid_polomki'], $row['Stoimost_pabot'], $row['Detal'], $row['Stoimost_detali'], $row['Status'], $row['Remonter'], $row['Kod_ustr']);
?>
<?php
echo "




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