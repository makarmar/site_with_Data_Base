<?php
require 'connect.php';
session_start();
if (isset($_SESSION['login']))
{

echo "

<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Strict//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml' xml:lang='en' lang='en'>
<head>
<title>��� ������</title>
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
	  </br>
	  <h3>����</h3>


<form action='edit.php' method='post'>
"; ?>
<?php
require 'connect.php';
$select_sql = "SELECT * FROM zakaz";
$result = mysql_query($select_sql);
$row = mysql_fetch_array($result);
do
{
printf("<input type='radio' name='user' value='%s'>%s %s %s %s %s %s %s %s %s %s<br/><br/>", $row['id'], $row['Nomer'], $row['Data'], $row['Familia'], $row['Name'], $row['Otchestvo'], $row['Telefon'], $row['Vid_ustroystva'], $row['Proizvoditel'], $row['Model'], $row['Vid_polomki']);	
}
while($row = mysql_fetch_array($result))
?>

<?
echo "
<table> <tr>
<td id='col1'> </td>
<td id='col2'> </td>
<td id='col3'>
<input type='submit' value=' ������������� ����� '></br></br>

</form>

<form action='zakrit.php' method='post'>

<input type='submit' value=' ������� ����� '>
</form> </br>
</td>
</tr>
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