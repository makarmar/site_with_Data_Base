<?php
require 'connect.php';
//����������� ������� �������� � ����� ����������, ������� ���������� ������ ����
if (isset($_POST['submit']))
{

if(empty($_POST['login']))
{
echo '�� �� ����� �����';
}
elseif(empty($_POST['password']))
{
echo '�� �� ����� ������';
}
elseif(empty($_POST['password2']))
{
echo '�� �� ����� ������������� ������';
}
elseif($_POST['password'] != $_POST['password2'])
{
echo '��������� ������ �� ���������';
}
elseif(empty($_POST['fio']))
{
echo '�� �� ����� ���';
}
elseif(empty($_POST['email']))
{
echo '�� �� ����� E-mail';
}
else
{
$login=$_POST['login']; 
$password=$_POST['password']; 
$password2 = $_POST['password2'];
$fio = $_POST['fio'];
$email = $_POST['email'];
$password = md5( "$password" );

//������� id �� ����� ������� ������������������ �������������, ������ ������ � ������
$query = "SELECT `id` FROM `users` WHERE `login`='{$login}' AND `password`='{$password}'";

    $login = stripslashes($login);//������� ������������� ��������, ������������� �������� addslashes()
    $login = htmlspecialchars($login);//����������� ����������� ������� � HTML-�������� (������������ ��, ����� ���� � ������� �� �������� �� ������ �� �������� �������-��������)
 $password = stripslashes($password);
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

	mysql_query("CREATE TABLE IF NOT EXISTS users (`id` int(10) unsigned NOT NULL auto_increment, `date_created` datetime NOT NULL, `login` VARCHAR( 255 ) NOT NULL, `password` VARCHAR( 255 ) NOT NULL,`email` VARCHAR( 255 ) NOT NULL,`fio` VARCHAR( 255 ) NOT NULL, PRIMARY KEY  (`id`) ) 
ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6849") or die(mysql_error());
$sql = mysql_query($query) or die(mysql_error());
if (mysql_num_rows($sql) > 0)
{
echo '����� ����� ��� ����������';
}

else 
{
//���������� � �� ������ ����
$query="INSERT INTO `users` (`id`, `date_created`, `login`, `password`, `fio`, `email`)
                  VALUES ('', NOW(), '$login', '$password', '$email')"; 
        $result = mysql_query($query); 
        if (!$result) { 
          $feedback = '������ - ������ ���� ������'; 
          $feedback .= mysql_error(); 
          return $feedback; 
        }
echo '����������� ������� ������';
echo '<br /><br /><a href="http://db2.ru/vhod.php">����� �� ����</a>';
}
}
}
?>