<?php
require 'connect.php';
session_start();
if (isset($_SESSION['login']))
{

echo "
<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Strict//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml' xml:lang='en' lang='en'>
<head>
<title>����� �����</title>
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
            <label>�����:</label>
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
          <li><a href='info_form.php'>����� �����</a></li>
          <li><a href='search_user.php'>����� �����</a></li>
          <li><a href='select_change.php'>��� ������</a></li>
          <li><a href='video/video.php'>����� � ������</a></li>
          <li><a href='forum/test.php''>�����</a></li>
          <li class='last'><a href='vhod.php'>�����</a></li>
        </ul>
        <div class='logo'><a href='index.php'><img src='images/logo.png' alt='' /></a></div>
        <div class='slogan'><img src='images/slogan.png' alt='' /></div>
      </div>


</br><h3>�����</h3>
	  
<form action='form.php' method='post' name='forma'>
<table width='90%' cellpadding='5' cellspacing='0'>
<tr>
<td id='col1'>
</br></br>
<label for='Nomer'>�����:</label>
<input type='text' name='Nomer' size='30'><br/><br/> 
</td>

<td id='col2'>
</br></br>
<label for='Status'>������:</label><br/> ";?>

<?php
require 'connect.php';
$result =  mysql_query("SELECT id, name FROM Status");
echo "<select name='category_list5'>";
while($row = mysql_fetch_array($result))
{
 echo "<option value='".$row['name']."'>".$row['name']."</option>";
}
echo '<option value="" selected="selected">��������..</option>';
echo "</select><br/><br/></td>";
?>

<? echo "
<td id='col3'></br></br><label for='Remonter'>�������:</label><br/> ";?>
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
<label for='Familia'>�������:</label> </br>
<input type='text'name='Familia' size='30'><br/> <br/>
</td>

<td id='col12
<label for='Name'>���:</label><br/>
<input type='text' name='Name' size='30'><br/> <br/>
</td>

<td id='col3'>
<label for='Otchestvo'>��������:</label>
<input type='text' name='Otchestvo' size='30'><br/><br/>
</td></tr>

<tr>
<td id='col1'>
</td>

<td id='col2'>
<label for='Telefon'>�������:</label> 
<input type='text' name='Telefon' size='30'><br/> <br/>
</td>

<td id='col3'>
<label for='Email'>Email:</label>
<input type='text' name='Email' size='30'><br/> <br/>
</td></tr></table></br><hr></br>

<table width='90%' cellpadding='5' cellspacing='0'>
<tr>
<td id='col1'></br>
<label for='Vid_ustroystva'>��� ����������:</label><br/>
"; ?>


<?php
require 'connect.php';
$result =  mysql_query("SELECT id, name FROM Vidustroystva");
echo "<select name='category_list'>";
while($row = mysql_fetch_array($result))
{
 echo "<option value='".$row['name']."'>".$row['name']."</option>";
}
echo '<option value="" selected="selected">��������..</option>';
echo "</select></br><br/></td>";
?>

<? echo " <td id='col2'><label for='Proizvoditel'>�������������:</label><br/> ";?>
<?php
require 'connect.php';
$result =  mysql_query("SELECT id, name FROM Proizvoditel");
echo "<select name='category_list2'>";
while($row = mysql_fetch_array($result))
{
 echo "<option value='".$row['name']."'>".$row['name']."</option>";
}
echo '<option value="" selected="selected">��������..</option>';
echo "</select></br><br/></td>";
?>


 <? echo "<td id='col3'>
<label for='Model'>������:</label><br/>
<input type='text' name='Model' size='30'><br/><br/> 
</td></tr>
 
<tr>
<td id='col1'>
<label for='Defekti'>���������� �������:</label> <br/>
<input type='text' name='Defekti' size='30'><br/> <br/>
</td>

<td id='col2'>
<label for='Vid_polomki'>��� �������:</label><br/> ";?>
<?php
require 'connect.php';
$result =  mysql_query("SELECT id, name FROM Vidpolomki");
echo "<select name='category_list3'>";
while($row = mysql_fetch_array($result))
{
 echo "<option value='".$row['name']."'>".$row['name']."</option>";
}
echo '<option value="" selected="selected">��������..</option>';
echo "</select><br/><br/></td>";
?>


<? echo "<td id='col3'>
<label for='Detal'>����������� ������:</label><br/>  ";?>
<?php
require 'connect.php';
$result =  mysql_query("SELECT id, name FROM Detal");
echo "<select name='category_list4'>";
while($row = mysql_fetch_array($result))
{
 echo "<option value='".$row['name']."'>".$row['name']."</option>";
}
echo '<option value="" selected="selected">��������..</option>';
echo "</select><br/><br/></td></tr>";
?>

<? echo "<tr><td id='col1'>
<label for='Detal_com'>�������:</label><br/>
<input type='text' name='Detal_com' size='30'><br/><br/> 
</td>

<td id='col2'>
<label for='Stoimost_pabot'>��������� �����:</label> <br/>
<input type='text' name='Stoimost_pabot' size='30'><br/> <br/>
</td>

<td id='col3'>
<label for='Stoimost_detali'>��������� ������:</label> <br/>
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
<input id='submit' type='submit' value=' ������� '><br/><br/>
<div class='no_print'><input type='button' value=' ������ ' onClick='window.print();'/> </div>
</td>
</table>

<div id='footer'>
        <div class='indent'>
          <div class='fleft'>group of companies LeXan</div>
          <div class='fright'>���.: 8(812)100-00-00</br>+7911-100-00-00</div>
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
