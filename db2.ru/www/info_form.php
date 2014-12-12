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


</br><h3>Заказ</h3>
	  
<form action='form.php' method='post' name='forma'>
<table width='90%' cellpadding='5' cellspacing='0'>
<tr>
<td id='col1'>
</br></br>
<label for='Nomer'>Номер:</label>
<input type='text' name='Nomer' size='30' ><br/><br/> 
</td>

<td id='col2'>
</br></br>
<label for='Status'>Статус:</label><br/> ";?>

<?php
require 'connect.php';
$result =  mysql_query("SELECT id, name FROM Status");
echo "<select name='category_list5'>";
while($row = mysql_fetch_array($result))
{
 echo "<option value='".$row['name']."'>".$row['name']."</option>";
}
echo '<option value="" selected="selected">Выберите..</option>';
echo "</select><br/><br/></td>";
?>

<? echo "
<td id='col3'></br></br><label for='Remonter'>Ремонтёр:</label><br/> ";?>
<?php
require 'connect.php'; 
$result =  mysql_query("SELECT fio FROM Reg_vxod WHERE id = ( SELECT MAX( id ) FROM Reg_vxod )");
echo "<select name='category_list6'>";
while($row = mysql_fetch_array($result))
{
 echo "<option value='".$row['fio']."'>".$row['fio']."</option>";
}
echo "</select><br/><br/></td></tr></table></br><hr></br>";
?> 


<? echo "<table width='90%' cellpadding='5' cellspacing='0'>
<tr><td id='col1'>
<label for='Familia'>Фамилия:</label> </br>
<input type='text'name='Familia' size='30'><br/> <br/>
</td>

<td id='col12
<label for='Name'>Имя:</label><br/>
<input type='text' name='Name' size='30'><br/> <br/>
</td>

<td id='col3'>
<label for='Otchestvo'>Отчество:</label>
<input type='text' name='Otchestvo' size='30'><br/><br/>
</td></tr>

<tr>
<td id='col1'>
</td>

<td id='col2'>
<label for='Telefon'>Телефон:</label> 
<input type='text' name='Telefon' size='30'><br/> <br/>
</td>

<td id='col3'>
<label for='Email'>Email:</label>
<input type='text' name='Email' size='30'><br/> <br/>
</td></tr></table></br><hr></br>

<table width='90%' cellpadding='5' cellspacing='0'>
<tr>
<td id='col1'>
<label for='Vid_ustroystva'>Вид устройства:</label><br/>
"; ?>


<?php
require 'connect.php';
$result =  mysql_query("SELECT id, name FROM Vidustroystva");
echo "<select name='category_list'>";
while($row = mysql_fetch_array($result))
{
 echo "<option value='".$row['name']."'>".$row['name']."</option>";
}
echo '<option value="" selected="selected">Выберите..</option>';
echo "</select></br><br/></td>";
?>

<? echo " <td id='col2'><label for='Proizvoditel'>Производитель:</label><br/> ";?>
<?php
require 'connect.php';
$result =  mysql_query("SELECT id, name FROM Proizvoditel");
echo "<select name='category_list2'>";
while($row = mysql_fetch_array($result))
{
 echo "<option value='".$row['name']."'>".$row['name']."</option>";
}
echo '<option value="" selected="selected">Выберите..</option>';
echo "</select></br><br/></td>";
?>


 <? echo "<td id='col3'>
<label for='Model'>Модель:</label><br/>
<input type='text' name='Model' size='30'><br/><br/> 
</td></tr>
 
<tr>
<td id='col1'>
<label for='Defekti'>Заявленные дефекты:</label> <br/>
<input type='text' name='Defekti' size='30'><br/> <br/>
</td>

<td id='col2'>
<label for='Vid_polomki'>Вид поломки:</label><br/> ";?>
<?php
require 'connect.php';
$result =  mysql_query("SELECT id, name FROM Vidpolomki");
echo "<select name='category_list3'>";
while($row = mysql_fetch_array($result))
{
 echo "<option value='".$row['name']."'>".$row['name']."</option>";
}
echo '<option value="" selected="selected">Выберите..</option>';
echo "</select><br/><br/></td>";
?>


<? echo "<td id='col3'>
<label for='Detal'>Необходимая деталь:</label><br/>  ";?>
<?php
require 'connect.php';
$result =  mysql_query("SELECT id, name FROM Detal");
echo "<select name='category_list4'>";
while($row = mysql_fetch_array($result))
{
 echo "<option value='".$row['name']."'>".$row['name']."</option>";
}
echo '<option value="" selected="selected">Выберите..</option>';
echo "</select><br/><br/></td></tr>";
?>

<? echo "<tr><td id='col1'>
<label for='Detal_com'>Коммент:</label><br/>
<input type='text' name='Detal_com' size='30'><br/><br/> 
</td>

<td id='col2'>
<label for='Stoimost_pabot'>Стоимость работ:</label> <br/>
<input type='text' name='Stoimost_pabot' size='30'><br/> <br/>
</td>

<td id='col3'>
<label for='Stoimost_detali'>Стоимость детали:</label> <br/>
<input type='text' name='Stoimost_detali' size='30'<br/> <br/><br/></td></tr></table>
";?>


<? echo "

<br/>
<table width='90%' cellpadding='5' cellspacing='0'>
<td id='col1'>
</td>
<td id='col2'>
</td>
<td id='col3' >
<div class='no_print'> 
<input type='button' value=' Печать ' class='button_example' onClick='window.print();'/> 
<input id='submit' type='submit' value=' Сохранить ' class='button_example' >
</div>
</br></br>
</td>
</table>

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
