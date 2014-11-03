<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<title>Untitled Document</title>
</head>
<body>
<?php
require 'connect.php';


$Kassa_vsego = trim($_REQUEST['Kassa_vsego']);
$V_bank = trim($_REQUEST['V_bank']);


$ins = mysql_query( "select fio from Reg_vxod where id=(select max(id) from Reg_vxod) " );
	$mainrow=mysql_fetch_assoc($ins);
	$thetext=$mainrow["fio"];

$insert_sql = "INSERT INTO kassa_vecher (Data, Kassa_vsego, V_bank, user)" .
"VALUES(now(), '{$Kassa_vsego}', '{$V_bank}', '{$thetext}');";
mysql_query($insert_sql);

echo "<br /><br />Кассовый день Закрыт! <br /><br />";
echo ('<form action="close.php" method="POST">
				<input type="submit" value="Выход"/>
			</form>');

?>

</body>



</html>