<?php
require 'connect.php';  
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
  header ("Location: menu.php"); // ������� ��������� �� ������� �����������! 
  

  
  }
  else{  
  //echo "������������ ����� ��� ������!"; // ������� ��������� �� ������!  
  header ("Location: index.php");
  exit;
  }  
   
  }  
}  
?>