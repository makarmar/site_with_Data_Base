<?php
require 'connect.php';
 session_start();//��� ��������� ������ ������ � ������� �������� �� �������. ������ � ��� �������� ������  ������������, ���� �� ��������� �� �����. ��������� ������ ����� � ������ ���������

//header('Refresh: 5; URL=http://db2.ru/menu.php'); //redirect � ��������� 
//echo '�� ������ �������������� �� ������� �������� ����� 5 ������.'; //����� ���������

header('Location: bank_utro.php');

if (isset($_POST['login'])) { $login = $_POST['login']; if ($login == '') { unset($login);} } //������� ��������� ������������� ����� � ���������� $login, ���� �� ������, �� ���������� ����������

if (isset($_POST['password'])) { $password=$_POST['password']; if ($password =='') { unset($password);} }//������� ��������� ������������� ������ � ���������� $password, ���� �� ������, �� ���������� ����������

if (empty($login) or empty($password)) //���� ������������ �� ���� ����� ��� ������, �� ����� ������ � ������������� ���������� �������
    {
    exit ("�� ����� �� ��� ����������, ��������� ����� � ��������� ��� ����!");
    }
    
$login = stripslashes($login);//������� ������������� ��������, ������������� �������� addslashes()
    
$login = htmlspecialchars($login);//����������� ����������� ������� � HTML-�������� (������������ ��, ����� ���� � ������� �� �������� �� ������ �� �������� �������-��������)

$password = stripslashes($password); //������� ������������� ��������, ������������� �������� addslashes()
    
$password = htmlspecialchars($password);

$login = trim($login);//������� ������� (��� ������ �������) �� ������ � ����� ������
$password = trim($password);
// ����� ���������� ��� ����������� � �� 
$db_host = 'localhost'; 
$db_user = 'sa'; 
$db_password = '1'; 
$database = 'site'; 
// ������������ � �� mysql_connect($db_host, $db_user, $db_password); 
mysql_select_db($database); 

$result = mysql_query("SELECT * FROM users WHERE login='$login'"); //��������� �� ���� �� ������� ������������������ ������������� ��� ������ � ������������ � ��������� �������
    $myrow = mysql_fetch_array($result);

if (empty($myrow['password']))
    {
    //���� ������������ � ��������� ������� �� ����������
    exit ("<br /><br />��������, �������� ���� login ��� ������ ��������!");
    }
    
else {
    //���� ����������, �� ������� ������

if ($myrow['password']== md5( "$password" )){
    //���� ������ ���������, �� ��������� ������� ������������ ������
    $_SESSION['login']=$myrow['login']; 
    $_SESSION['id']=$myrow['id'];//��� ������ ����� ����� ������������, ������� ������ ����������� � �������������� ���� ������
    //������� ����������, ��� ������������ ����������� � ����� ������ ��� �������� �� ������� �������� (����� �� ����� ��������� ������)
	
	$ins = mysql_query( "select fio from users where login = '{$_SESSION[ "login" ]}'" );
	$mainrow=mysql_fetch_assoc($ins);
	$thetext=$mainrow["fio"];
	
	$insert = "INSERT INTO Reg_vxod (Data, fio)" . 
    "VALUES(now(), '{$thetext}');"; 
	// "VALUES(now(), '{$_SESSION['login']}');"; 
    mysql_query($insert);
	
	echo "<br /><br />�����������! �� ������� ����� �� ����! <br />
	<a href='http://db2.ru/home.php'>������� ��������</a></br >";
    }

else {
    //���� ������ �� �������, ������� �� ����� ���������� �� ���� � ������������ �� ��������������

    exit ("<br /><br />��������, �������� ���� login ��� ������ ��������!");
    }
    }
    ?>