<?php // ��������� ����� � php-������ ��� ����������� ���������� ������� ����� � ���� �����
require 'connect.php';
//  ��� ��������� �������� �� �������. � ������ �������� ������  ������������, ���� �� ��������� �� �����. ����������� ������ � ������ ���������
	session_start();
echo "
<html>
<head>
<title>����� ����� �� PHP</title>
</head><body>"?>
<?php
require 'connect.php';
if(isset($_SESSION['login']))
{$login='������������, '.$_SESSION['login'].'!';}
 // ���������, ����� �� ���������� ������ � id ������������
    if (empty($_SESSION['login']) or empty($_SESSION['id']))
 // ���� �����, �� 
    {
				echo "<p style='margin-left:60px;'>�� ����� �� ����, ��� �����</p><br>
<!--����������� ����������� �����-->
<form id='forma' action='script1.php' method='post'>
<h1>����� �����</h1>
<p>��������� ���� ��� ����� �� ����</p>
<p>�����<br /><input type='text' name='login'></p>
<p>������<br /><input type='password' name='password'></p>
<p><input type='submit' name='submit' value='�����'>
<!--**** ������ (type='submit') ���������� ������ �� ��������� script1.php ***** --> 
";
	
	}
 else
 // ���� �� �����, �� 
    {
	    echo "<br /><br />�� ����� �� ����, ��� ".$_SESSION['login']."<br><br />";
		echo ('<form action="close.php" method="POST">
				<input type="submit" value="�����"/>
			</form>');
		echo ('<form action="kassa_vecher.php" method="POST">
				<input type="submit" value="������� �����"/>
			</form>');	
}
echo"
</body></html>"; 
?>