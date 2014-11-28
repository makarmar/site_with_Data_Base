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

"; ?>

<?php
require 'connect.php';

$sql_select = "SELECT name, ssilka, opisanie FROM V_planshet";
$result = mysql_query($sql_select);
$row = mysql_fetch_array($result);

do
{
	printf(  $row['name'].$row['Opisanie'] . "</br><iframe width='560' height='315' src='//"  .$row['ssilka'] . "' frameborder='0' allowfullscreen></iframe></br>" );

	
}
while($row = mysql_fetch_array($result));



?>

<? echo "


</body>
</html>


";

}

else 
{
header('location:vhod.php');
}
?>
