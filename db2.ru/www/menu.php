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
</head>
<body> 

<p>����:</p>
<a href='info_form.php'>����� �����</a></br></br>
<a href='search_user.php'>����� �����</a></br></br>
<a href='select_change.php'>��� ����</a></br></br>
<a href='video/video.php'>����� � ������</a></br></br>
<a href='forum/test.php'>�����</a></br></br>
<a href='vhod.php'>�� �����</a></br></br>
<a href='reg.php'>����������� ������ ������������</a>
</body>
</html> 
";

}

else 
{
header('location:vhod.php');
}
?>
