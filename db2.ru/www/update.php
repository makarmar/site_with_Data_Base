<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<link rel="stylesheet" type="text/css" href="style.css">
<title>Untitled Document</title>
</head>

<body>
<?php
require 'connect.php';
$id=$_REQUEST['id'];
$Nomer = $_REQUEST['Nomer']; 
$Data = $_REQUEST['Data']; 
$Familia = $_REQUEST['Familia']; 
$Name = $_REQUEST['Name']; 
$Otchestvo = $_REQUEST['Otchestvo'];
$Telefon = $_REQUEST['Telefon']; 
$Email = $_REQUEST['Email']; 
$Vid_ustroystva = $_REQUEST['Vid_ustroystva']; 
$Proizvoditel = $_REQUEST['Proizvoditel']; 
$Model = $_REQUEST['Model']; 
$Defekti = $_REQUEST['Defekti']; 
$Vid_polomki = $_REQUEST['Vid_polomki']; 
$Stoimost_pabot = $_REQUEST['Stoimost_pabot']; 
$Detal = $_REQUEST['Detal']; 
$Stoimost_detali = $_REQUEST['Stoimost_detali']; 
$Status = $_REQUEST['Status']; 
$Remonter = $_REQUEST['Remonter']; 

$update_sql = "UPDATE zakaz SET  Nomer='$Nomer', Data='$Data', Familia='$Familia', Name='$Name', Otchestvo='$Otchestvo', Telefon='$Telefon', Email='$Email', Vid_ustroystva='$Vid_ustroystva', Proizvoditel='$Proizvoditel', Model='$Model', Defekti='$Defekti', Vid_polomki='$Vid_polomki', Stoimost_pabot='$Stoimost_pabot', Detal='$Detal', Stoimost_detali='$Stoimost_detali', Status='$Status', Remonter='$Remonter' WHERE id='$id'";
mysql_query($update_sql) or die("������ �������" . mysql_error());
echo '<p>����� �������� � ����!</p>';

?>
<a href="info_form.php">�������� ������������</a><br/><br/>
<a href="search_user.php">��������� � ������</a><br/><br/>
<a href="select_change.php">��������� � ������ ������� ��� ��������������</a><br/><br/>
</body>
</html>