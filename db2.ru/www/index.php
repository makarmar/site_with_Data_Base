<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<title>����</title>

<?php  
$config = array(); // ���������, ��� ���������� $config ��� ������  
$config['server'] = "localhost"; //������ MySQL. ������ ��� localhost  
$config['login'] ="sa"; //������������ MySQL  
$config['passw'] = "1"; //������ �� ������������ MySQL  
$config['name_db'] = "site"; //�������� ����� ��  

$connect = mysql_connect($config['server'], $config['login'], $config['passw']) or die("Error!"); // ������������ � MySQL ���, � ������  ������, ���������� ���������� ���� 
mysql_select_db($config['name_db'], $connect) or die("Error!"); // �������� ��  ���, � ������� ������, ���������� ���������� ����  
?>


</head>

<body>
<div align="center">

<div align="center" id="error"> 

<?php  
if(isset($_POST['submit'])){ //��������� ������������� ���, ������ ���� ������ ������ 
if(empty($_POST['login'])){ //���� ���������� ������ ����� ��� �� ����������  
echo"�� �� ����� �����"; // ������� ��������� �� ������  
  }elseif(!preg_match("/[-a-zA-Z0-9]{3,15}/", $_POST['login'])){ //���� ���������� �� ������������� ������� -a-zA-Z0-9  
echo"�� ����������� ����� �����"; // ������� ��������� �� ������   
  }elseif(empty($_POST['password'])){ //���� ���������� ������ ����� ��� �� ����������  
echo"�� �� ����� ������"; // ������� ��������� �� ������  
  }elseif(!preg_match("/[-a-zA-Z0-9]{3,30}/", $_POST['password'])){ //���� ���������� �� ������������� ������� -a-zA-Z0-9  
echo"�� ����������� ����� ������"; // ������� ��������� �� ������   
  }else{  
  $login = $_POST['login']; //����������� ����������  
  $password = md5($_POST['password']);//����������� ���������� � �������� � � md5 ��� ������������  
  $query = mysql_query("SELECT * FROM `users`  WHERE `login`='$login' AND `password`='$password'"); //���������� ������ �� ������� ����� ����������� , ��� ���� ����� ����� ���������� $login, � ���� password ����� ���������� $password  
  $row = mysql_num_rows($query); // ������� ���������� ����� ���������� �������  
  if($row > 0){ //���� �� ������ 0  
  echo "<a href='http://db2.ru/menu.php'>����</a>"; // ������� ��������� �� ������� �����������!  
  }
  else{  
  echo "������������ ����� ��� ������!"; // ������� ��������� �� ������!  
  }  
   
  }  
}  
?>
</div>

<form action="" method="post" enctype="multipart/form-data">
�����:<br /><input name="login" type="text" size="20"><br />
������:<br /><input name="password" type="password" size="20"><br />
<input name="submit" type="submit" value="�����"><br />
</form>
</div>
</body>
</html>