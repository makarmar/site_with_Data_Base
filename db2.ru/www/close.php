<?php 
session_start();//�������� ������ 
unset($_SESSION['login']);//�������� ������ �� ������ 
session_destroy();//�������� ������ 
header("Location: http://db2.ru/vhod.php");//��������������� �� ��� �������� ����� ������� ������ ����� 
?>