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
<title>�����������</title>";
 ?>

 
 
<?php  
require 'connect.php';
$config = array(); // ���������, ��� ���������� $config ��� ������  
$config['server'] = "localhost"; //������ MySQL. ������ ��� localhost  
$config['login'] ="sa"; //������������ MySQL  
$config['passw'] = "1"; //������ �� ������������ MySQL  
$config['name_db'] = "site"; //�������� ����� ��  

$connect = mysql_connect($config['server'], $config['login'], $config['passw']) or die("Error!"); // ������������ � MySQL ���, � ������  ������, ���������� ���������� ���� 
mysql_select_db($config['name_db'], $connect) or die("Error!"); // �������� ��  ���, � ������� ������, ���������� ���������� ����  
?>

<?php 
require 'connect.php';
echo "
</head>

<body>
<div align='center'>


<div align='center' id='error'>   ";
?>


<?php  
if(isset($_POST['submit'])){ //��������� ������������� ���, ������ ���� ������ ������ 
$query = mysql_query("SELECT * FROM `users`  WHERE `login`='".$_POST['login']."'"); //���������� ������ �� ������� ����� ����������� , ��� ���� ����� ����� ���������� $login  
  $row = mysql_num_rows($query); // ������� ���������� ����� ���������� �������  
if(empty($_POST['login'])){ //���� ���������� ������ ����� ��� �� ����������  
echo"�� �� ����� �����"; // ������� ��������� �� ������  
  }elseif(!preg_match("/[-a-zA-Z0-9]{3,15}/", $_POST['login'])){ //���� ���������� �� ������������� ������� -a-zA-Z0-9  
echo"�� ����������� ����� �����"; // ������� ��������� �� ������   
  }elseif(empty($_POST['password'])){ //���� ���������� ������ ����� ��� �� ����������  
echo"�� �� ����� ������"; // ������� ��������� �� ������  
  }elseif($row > 0){ //���� ���������� ������ 0  
echo"����� ������������ ��� ����������!"; // ������� ��������� �� ������  
  }elseif(!preg_match("/[-a-zA-Z0-9]{3,30}/", $_POST['password'])){ //���� ���������� �� ������������� ������� -a-zA-Z0-9  
echo"�� ����������� ����� ������"; // ������� ��������� �� ������   
  }elseif(empty($_POST['password2'])){ //���� ���������� ������ ����� ��� �� ����������  
echo"�� �� ����� ������������� ������"; // ������� ��������� �� ������  
  }elseif(!preg_match("/[-a-zA-Z0-9]{3,30}/", $_POST['password2'])){ //���� ���������� �� ������������� ������� -a-zA-Z0-9  
echo"�� ����������� ����� ������������� ������"; // ������� ��������� �� ������   
  }elseif($_POST['password'] != $_POST['password2']){ //���� ���������� ������ � ���������  ������� ������ �� ���������  
echo"�� ����������� ����� ������������� ������"; // ������� ��������� �� ������   
  }elseif(empty($_POST['email'])){ //���� ���������� E-mail'a �����   
echo"�� �� ����� E-mail"; // ������� ��������� �� ������   
  }elseif(!preg_match("/[-a-zA-Z0-9_]{3,20}@[-a-zA-Z0-9]{2,64}\.[a-zA-Z\.]{2,9}/", $_POST['email'])){ //��������� �� �������� ������������ email  
echo"�� ����������� ����� E-mail"; // ������� ��������� �� ������   
  }else{ //���� �� ������ ���  
  $login = mysql_real_escape_string($connect,(int)$_POST['login']); //����������� ����������  
  $password = mysql_real_escape_string($connect,settype(md5($_POST['password']),"char"));//����������� ���������� � �������� � � md5 ��� ������������  
  $email = mysql_real_escape_string($connect,settype( $_POST['email'], "char"));//����������� ����������  
   
  $insert = mysql_query("INSERT INTO `users` (`login` ,`password` ,`email` ) VALUES ('$login', '$password', '$email')"); //��������� ������ �� ���������� ������ ������������  
  if($insert == true){  
  echo "�� ������� ����������������!</n></n> "; 
  echo "<a href='vhod.php'>���� �� ����</a>";
  }else{  
  echo "�������������� ������!";  
  }  
   
  }  

}  
?> 


<?php 
require 'connect.php';
echo "
</div>


<form action='' method='post' enctype='multipart/form-data'>
�����:<br /><input name='login' type='text' size='20'><br />
������:<br /><input name='password' type='password' size='20'><br />
��� ��� ������:<br /><input name='password2' type='password' size='20'><br />
E-mail:<br /><input name='email' type='text' size='20'><br /><br />

<input name='submit' type='submit' value='������������������'><br /><br /><br />
</form>
<form method='post' action='write.php'>
		<img src='captcha.php' /></br>
		<input class='input' type='text' name='norobot' /></br>
		<input type='submit' value='������' />
	</form>
</div>
</body>
</html> ";
}
else 
{
header('location:vhod.php');

}
?>