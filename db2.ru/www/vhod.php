<?php // ��������� ����� � php-������ ��� ����������� ���������� ������� ����� � ���� �����
require 'connect.php';
//  ��� ��������� �������� �� �������. � ������ �������� ������  ������������, ���� �� ��������� �� �����. ����������� ������ � ������ ���������
	session_start();
echo "
<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Strict//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml' xml:lang='en' lang='en'>
<head>
<title>����</title>
<link href='style.css' rel='stylesheet' type='text/css' />
<link href='layout.css' rel='stylesheet' type='text/css' />
<style type='text/css'>
   TD {
   vertical-align: center; 
   }
   #col1 {
    width: 30%; 
   
   }
   #col2 {
    width: 30%; 
     
   }
   #col3 {
    width: 40%; 
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
            <label>�����:</label>
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
          <li><a href='info_form.php'>����� �����</a></li>
          <li><a href='search_user.php'>����� �����</a></li>
          <li><a href='select_change.php'>��� ������</a></li>
          <li><a href='video/video.php'>����� � ������</a></li>
          <li><a href='forum/test.php''>�����</a></li>
          <li class='last'><a href='vhod.php'>�����</a></li>
        </ul>
        <div class='logo'><a href='home.php'><img src='images/logo.png' alt='' /></a></div>
        <div class='slogan'><img src='images/slogan.png' alt='' /></div>
      </div>




";?>
<?php
require 'connect.php';
if(isset($_SESSION['login']))
{$login='������������, '.$_SESSION['login'].'!';}
 // ���������, ����� �� ���������� ������ � id ������������
    if (empty($_SESSION['login']) or empty($_SESSION['id']))
 // ���� �����, �� 
    {
				echo "
			</br>
        <h3>����</h3>
		<table width='90%' cellpadding='5' cellspacing='5'>
		<tr><td id='col1'></td>
        <td id='col2'>�� ����� �� ����, ��� �����</td>
		<td id='col3'></td></tr><tr></tr><tr></tr>
	<tr><td id='col1'></td>
	<td id='col2'>					
<form id='forma' action='script1.php' method='post'>

<p class='p1'>�����<br /><input type='text' name='login' class='button_example'></p>
<p class='p1'>������<br /><input type='password' name='password' class='button_example'></p>
<p class='p1'><input type='submit' name='submit' value='�����' class='button_example'></p>
</form></td><td id='col3'></td>
</tr></table>
	       
		   	
";
	
	}
 else
 // ���� �� �����, �� 
    {
	    echo "  <br /><br /><table width='90%' cellpadding='5' cellspacing='0'>
		<tr><td id='col1'></td>
		<td id='col2' align=center>
		�� ����� �� ����, ��� ".$_SESSION['login']."<br><br />";
		echo ("<!--<form action='close.php' method='POST'>
				<input type='submit' value='�����' class='button_example'/>
			</form>-->
			<form action='kassa_vecher.php' method='POST'>
				<input type='submit' value='������� �����' class='button_example'/>
			</form> </td>
			<td id='col3'></td>
			</tr></table>
			</br>
			
			");	
}
echo"

<div id='footer'>
        <div class='indent'>
          <div class='fleft'>group of companies LeXan</div>
          <div class='fright'>���.: 8(812)100-00-00</br>+7911-100-00-00</div>
        </div>
      </div>



</div>
  </div>
</div>
</body></html>"; 
?>