<!DOCTYPE HTML>
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

$Kod_ustr = $_REQUEST['Kod_ustr']; 


if($Kod_ustr = $Nomer)
{ $Status = ������; }
else { echo '�� �����'; }

/*$update_sql = "UPDATE zakaz SET  Nomer='$Nomer',  Familia='$Familia', Name='$Name', Otchestvo='$Otchestvo', Telefon='$Telefon', Email='$Email', Vid_ustroystva='$Vid_ustroystva', Proizvoditel='$Proizvoditel', Model='$Model', Defekti='$Defekti', Vid_polomki='$Vid_polomki', Stoimost_pabot='$Stoimost_pabot', Detal='$Detal', Stoimost_detali='$Stoimost_detali', Status='$Status', Remonter='$Remonter' WHERE id='$id'";
mysql_query($update_sql) or die("������ �������" . mysql_error());*/
echo '<p>����� ������� � ����!</p>';

?>
<a href="menu.php">����� � ����</a></br></br>
</body>
</html>