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
<link rel='stylesheet' href='style.css'  type='text/css'>
<title>Untitled Document</title>
</head>

<body>
<form action='form.php' method='post' name='forma'>
<fieldset>
<label for='Nomer'><div class='no_print'>�����:</div></label><br/> 
<input type='text' name='Nomer' size='10'><br/> 

<label for='Familia'><div class='no_print'>�������:</div></label><br/> 
<input type='text'name='Familia' size='30'><br/> 
<label for='Name'><div class='no_print'>���:</div></label><br/> 
<input type='text' name='Name' size='30'><br/> 
<label for='Otchestvo'><div class='no_print'>��������:</div></label><br/> 
<input type='text' name='Otchestvo' size='30'><br/>
<label for='Telefon'><div class='no_print'>�������:</div></label><br/> 
<input type='text' name='Telefon' size='11'><br/> 
<label for='Email'><div class='no_print'>Email:</div></label><br/> 
<input type='text' name='Email' size='30'><br/> 

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
echo "</select>";
?></br>

<? echo " <label for='Proizvoditel'>�������������:</label><br/> ";?>
<?php
require 'connect.php';
$result =  mysql_query("SELECT id, name FROM Proizvoditel");
echo "<select name='category_list2'>";
while($row = mysql_fetch_array($result))
{
 echo "<option value='".$row['name']."'>".$row['name']."</option>";
}
echo '<option value="" selected="selected">��������..</option>';
echo "</select>";
?></br>


 <? echo "
<label for='Model'>������:</label><br/> 
<input type='text' name='Model' size='30'><br/> 
<label for='Defekti'>���������� �������:</label><br/> 
<input type='text' name='Defekti' size='50'><br/> 

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
echo "</select>";
?></br>

<? echo "
<label for='Stoimost_pabot'>��������� �����:</label><br/> 
<input type='text' name='Stoimost_pabot' size='10'><br/> 

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
echo "</select>";
?></br>

<? echo "
<label for='Detal_com'>�������:</label><br/> 
<input type='text' name='Detal_com' size='30'><br/> 

<label for='Stoimost_detali'>��������� ������:</label><br/> 
<input type='text' name='Stoimost_detali' size='10'<br/> 

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
echo "</select>";
?></br>

<? echo "
<label for='Remonter'>�������:</label><br/> ";?>
<?php
require 'connect.php'; 
$result =  mysql_query("SELECT fio FROM Reg_vxod WHERE id = ( SELECT MAX( id ) FROM Reg_vxod )");
echo "<select name='category_list6'>";
while($row = mysql_fetch_array($result))
{
 echo "<option value='".$row['fio']."'>".$row['fio']."</option>";
}
echo "</select>";
?></br> 

<? echo "
</fieldset>
<br/>

<input id='submit' type='submit' value='��������� ������'><br/>
<div class='no_print'><input type='button' value='������' onClick='window.print();'/> </div>

</form>
<a href='menu.php'>����� � ����</a></br></br>
</body>
</html>

";

}

else 
{
header('location:vhod.php');
}

?>
