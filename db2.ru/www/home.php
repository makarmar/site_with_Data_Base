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
<title>Найти заказ</title>
<link href='style.css' rel='stylesheet' type='text/css' />
<link href='layout.css' rel='stylesheet' type='text/css' />
<link href='style/style.css' rel='stylesheet' type='text/css'>
<style type='text/css'>
   TD {
   vertical-align: center; 
   color: #000000;
   }
   #col1 {
    width: 25%; 
   
   }
   #col2 {
    width: 40%; 
     
   }
   #col3 {
    width: 35%; 
   }
 
.now{
color : #CD6600;
}
.color_bg_tbl{
background-color: #FFFACD;
}
.color_bg_td{
background-color: #FFDEAD;
}
.color_bg{
background-color: #FFF8DC;
}
.color_bg_today{
background-color: #F5DEB3;
}

.button_example{
border:1px solid #ffad41; -webkit-border-radius: 3px; -moz-border-radius: 3px;border-radius: 3px;font-size:30px;font-family:arial, helvetica, sans-serif; padding: 10px 10px 10px 10px; text-decoration:none; display:inline-block;text-shadow: -1px -1px 0 rgba(0,0,0,0.3);font-weight:bold; color: #FFFFFF;
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
	
	<script>
function dysTime(){
		var d = new Date();
		var sek = d.getSeconds();
		var minut = d.getMinutes();
		var hour = d.getHours();
		
		var s = sek*6;
		var m = minut*6;
		var Hm = minut*0.5;
		if (hour > 12) {
				h = (hour - 12 )* 30;
			}
		else {
				h = hour * 30;
			}
		
		var divS = document.getElementById('sekond');
			divS.style.webkitTransform = 'rotate('+ s +'deg)';
			divS.style.MozTransform = 'rotate('+ s +'deg)';
			divS.style.OTransform = 'rotate('+ s +'deg)';
			divS.style.msTransform = 'rotate('+ s +'deg)';
		var divM = document.getElementById('minute');
			divM.style.webkitTransform = 'rotate('+ m +'deg)';
			divM.style.MozTransform = 'rotate('+ m +'deg)';
			divM.style.OTransform = 'rotate('+ m +'deg)';
			divM.style.msTransform = 'rotate('+ m +'deg)';
		var divH = document.getElementById('hour');
			divH.style.webkitTransform = 'rotate('+ (h+Hm) +'deg)';
			divH.style.MozTransform = 'rotate('+ (h+Hm) +'deg)';
			divH.style.OTransform = 'rotate('+ (h+Hm) +'deg)';
			divH.style.msTransform = 'rotate('+ (h+Hm) +'deg)';
		
		setTimeout(dysTime, 1000);
	}
	
window.onload = dysTime;
</script>
	
	
	
	
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

<h3>Главная</h3>

<table width='100%' cellpadding='5' cellspacing='0'>
<tr>
<td id='col1'>
";
?>
<?php
function zodiak($mon,$day)
{
 $z_str = array("Козерог","Водолей","Рыбы","Овен","Телец","Близнецы","Рак","Лев","Девы","Весы","Скорпион","Стрелец");
 $z_arr = array(1=>21,2=>20,3=>20,4=>20,5=>20,6=>20,7=>21,8=>22,9=>23,10=>23,11=>23,12=>23);
 return $day < $z_arr[$mon + 1] ? $z_str[$mon - 1] : $z_str[$mon % 12];
}

function calendar($mon,$year,$day){
$td1 = "<td align='right' class='color_bg'>";
$td2 = "<td align='right' class='color_bg_today'>";
if($_REQUEST['day']=='')
$day = date ('j',time ());
else
$day = $_REQUEST['day'];
if($_REQUEST['mon']=='')
$mon = date('n',time ());
else
{
$mon = $_REQUEST['mon'];
if($day == 0)
{
$day=28;$mon=$mon-1;
$dim = date ('t',mktime(1,0,0,$mon,1,$year));
if($dim>28) $day=$dim;
}
}
if($_REQUEST['year']=='')
$year = date('Y',time ());
else
{
$year = $_REQUEST['year'];
if($mon==13) {$mon=1;$year=$year+1;}
if($mon==0) {$mon=12;$year=$year-1;}
}
$dim = date ('t',mktime(1,0,0,$mon,1,$year));
if($_REQUEST['day'] and ($day == $dim+1))
{
$day=1;$mon=$mon+1;if($mon==13){$mon=1;$year=$year+1;};
$dim = date('t',mktime(1,0,0,$mon,1,$year));
}

$frst_day = date('w',mktime(1,0,0,$mon,1,$year))-1;
if ($frst_day=='-1'){ $frst_day='6'; }
$mon_str=array('Январь','Февраль','Март','Апрель','Май','Июнь','Июль','Август','Сентябрь','Октябрь','Ноябрь','Декабрь');
$mon1=$mon-1;
$rez = "<table align='left' border='5' cellpadding='0' cellspacing='0' class='color_bg_tbl' border-style='outset '>
<tr>
<td>
<table border='0' cellspacing='1' cellpadding='2' width='100%'>
<tr>
<td align='center' colspan='7' class='color_bg_td'>
<select class='color_bg_td' onchange='top.location.href=this.options[this.selectedIndex].value' name='day'>";
$rez_day="";
for( $iii = 1; $iii <= $dim; $iii++)
{
$day_add=" >";
if($iii==$day) $day_add=" selected >";
$rez_day=$rez_day ."<option value=" ."'?mon=" .$mon ."&year=" .$year ."&day=" .$iii ."'" .$day_add .$iii ."</option>";
}
$rez = $rez .$rez_day ."</select>
 
<select class='color_bg_td' onchange='top.location.href=this.options[this.selectedIndex].value' name='mon'>";
$rez_mon="";
for( $iii = 0; $iii < 12; $iii++)
{
$mon_add=" >";
if($iii==($mon-1)) $mon_add=" selected >";
$rez_mon=$rez_mon ."<option value=" ."'?mon=" .($iii+1) ."&year=" .$year ."&day=" .$day ."'" .$mon_add .$mon_str[$iii] ."</option>";
}
$rez = $rez .$rez_mon ."</select>
</td>\n 
</tr>
<tr>
<td align='center' class='color_bg'>Пн</td>
<td align='center' class='color_bg'>Вт</td>
<td align='center' class='color_bg'>Ср</td>
<td align='center' class='color_bg'>Чт</td>
<td align='center' class='color_bg'>Пт</td>
<td align='center' class='color_bg'>Сб</td>
<td align='center' class='color_bg'><font color=red>Вс</font></td>
</tr>\n";
for( $i = 1; $i <= $dim+$frst_day; $i++)
 {
 if($i==$day+$frst_day) $td=$td2; else $td=$td1;
 if($dw==0)
  {$dw='7';}
 $dw = $dw-1;
 $dm = $i- $frst_day;
 if($frst_day > $i or $dm<1)
  {$rez .= $td."\n   </td>\n";}
 elseif($frst_day == $i)
  {$rez .= $td."\n".$dm."</td>\n"; }
 elseif($i=='7' or $i=='14' or $i=='21' or $i=='28' or $i=='35')
  {
  $rez .= $td." <font color=red>" .$dm ."</font> </td>\n</tr>\n<tr>\n";
  }
 else{$rez .= $td ." " .$dm ."\n</td>\n";}
 }
if($dw!=0)
 { 
 for( $i = 0; $i < $dw; $i++)
  { $rez .= $td ."\n   </td>\n";}
 }
$zodiak=zodiak($mon, $day);
$rez .= "</tr>\n
<tr>
<td align='center' colspan='7' class='color_bg_td'> 
<font class='now'> Зодиак: <b> $zodiak</b></font></td>\n
</tr>\n
<tr>
<td align='center' colspan='7' class='color_bg_td'>
<select class='color_bg_td' onchange='top.location.href=this.options[this.selectedIndex].value' name='year'>";
$rez_year="";
for( $iii = ($year-100); $iii < ($year+100); $iii++)
{
$year_add=" >";
if($iii==$year) $year_add=" selected >";
$rez_year=$rez_year ."<option value=" ."'?mon=" .$mon ."&year=" .$iii ."&day=" .$day ."'" .$year_add .$iii ."</option>";
}
$rez = $rez .$rez_year ."</select>
</td>\n 
</tr>
<tr>
</table>\n</td>\n</tr>\n</table>\n"; 
return $rez;
} 

print calendar($mon,$year,$day); 


?>
<?php
echo "
</td>

<td id='col2' align=center>

<a class='button_example' href='info_form.php'> Новый заказ </a>
</br></br></br>
<a class='button_example' href='zakrit.php'>Закрыть заказ</a>
</br></br></br>
<a class='button_example' href='reg.php'> Регистрация </a>
</td>

<td id='col3' align=right>

<div id='сlock'>
  		<div id='minute'><img src='img/minute.png' width='300' height='300'></div>
     	<div id='hour'><img src='img/hour.png' width='300' height='300'></div>
      	<div id='sekond'><img src='img/sek.png' width='300' height='300'></div>
      	<div id='ciferblat'><img src='img/Ciferblat.png' width='300' height='300'>
</div>
</div>



</td>
</tr>
</table>


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