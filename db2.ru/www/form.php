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
<title>Новый заказ</title>
<link href='style.css' rel='stylesheet' type='text/css' />
<link href='layout.css' rel='stylesheet' type='text/css' />
<link href='style/style.css' rel='stylesheet' type='text/css' />
<style type='text/css' media='print'> 
  div.no_print {display: none; } 
</style> 

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
		  <div class='no_print'> 
            <label>Поиск:</label>
            <span>
            <input type='text' />
            </span></div></div>
        </form>
        <ul class='list'>
		<div class='no_print'> 
          <li><a href='home.php'><img src='images/icon1.gif' alt='' /></a></li>
          <li><a href='home.php'><img src='images/icon2.gif' alt='' /></a></li>
          <li class='last'><a href='index.php'><img src='images/icon3.gif' alt='' /></a></li>
		  </div>
        </ul>
        <ul class='site-nav'>
		<div class='no_print'> 
          <li><a href='info_form.php'>Новый заказ</a></li>
          <li><a href='search_user.php'>Найти заказ</a></li>
          <li><a href='select_change.php'>Все заказы</a></li>
          <li><a href='video/video.php'>Видео в помощь</a></li>
          <li><a href='forum/test.php''>Форум</a></li>
          <li class='last'><a href='vhod.php'>Выход</a></li>
		  </div>
        </ul>
		
        <div class='logo'><a href='home.php'><img src='images/logo.png' alt='' /></a></div>
        <div class='slogan'><img src='images/slogan.png' alt='' /></div>
      </div>
	  ";
	  ?>
<?php 
require 'connect.php';


$Nomer = trim($_REQUEST['Nomer']);
$Data = trim($_REQUEST['Data']); 
$Familia = trim($_REQUEST['Familia']); 
$Name = trim($_REQUEST['Name']); 
$Otchestvo = trim($_REQUEST['Otchestvo']);
$Telefon = trim($_REQUEST['Telefon']); 
$Email = trim($_REQUEST['Email']); 
$Vid_ustroystva = trim($_REQUEST['category_list']); 
$Proizvoditel = trim($_REQUEST['category_list2']); 
$Model = trim($_REQUEST['Model']); 
$Defekti = trim($_REQUEST['Defekti']); 
$Vid_polomki = trim($_REQUEST['category_list3']); 
$Stoimost_pabot = trim($_REQUEST['Stoimost_pabot']); 
$Detal = trim($_REQUEST['category_list4']); 
$Detal_com = trim($_REQUEST['Detal_com']); 
$Stoimost_detali = trim($_REQUEST['Stoimost_detali']); 
$Status = trim($_REQUEST['category_list5']); 
$Remonter = trim($_REQUEST['category_list6']); 

$insert_sql = "INSERT INTO zakaz (Nomer, Data, Familia, Name, Otchestvo, Telefon, Email, Vid_ustroystva, Proizvoditel, Model, Defekti, Vid_polomki, Stoimost_pabot, Detal, Detal_com, Stoimost_detali, Status, Remonter)" . 
"VALUES('{$Nomer}', now(), '{$Familia}', '{$Name}', '{$Otchestvo}', '{$Telefon}', '{$Email}', '{$Vid_ustroystva}', '{$Proizvoditel}', '{$Model}', '{$Defekti}', '{$Vid_polomki}', '{$Stoimost_pabot}', '{$Detal}', '{$Detal_com}', '{$Stoimost_detali}', '{$Status}', '{$Remonter}');"; 
mysql_query($insert_sql);
echo "</br><p>Заказ сохранён в базе!</p></br>";

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