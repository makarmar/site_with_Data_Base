<?php 
require 'connect.php';
echo " 
<html> 
<head> 
<title>����� ����� �� PHP</title> 
</head>
<body> 
<!--����������� ����������� �����--> 
<form id='forma' action='script2.php' method='POST'> 
<h1>����� �����������</h1> 
<p>��������� ���� ��� ����������� �� �����</p> 
<p>���<br /><input type='text' name='login' ></p> 
<p>������<br /><input type='password' name='password' ></p> 
<p>��������� ������<br /><input type='password' name='password2'></p> 
<p>������� ��� ��������<br /><input type='text' name='fio'></p> 
<p>Email<br /><input type='text' name='email'></p> 
<p><input type='submit' value='OK' name='submit' ></p> 
</form>
</body>
</html>"; 
?>