<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html><head><title>Календарь</title>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<style>
td{
color: #000000;
}
.now{
color : #000080;
}
.color_bg_tbl{
background-color: #aadddd;
}
.color_bg_td{
background-color: #ddddff;
}
.color_bg{
background-color: #eeeeff;
}
.color_bg_today{
background-color: #dddddd;
}
</style>
</head>
<body>

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
$rez = "<table align='left' border='0' cellpadding='0' cellspacing='0' class='color_bg_tbl'>
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
   
</body>
</html>