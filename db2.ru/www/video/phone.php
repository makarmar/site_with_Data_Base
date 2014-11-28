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

$sql_select = "SELECT name, ssilka FROM V_phone";
$result = mysql_query($sql_select);
$row = mysql_fetch_array($result);

do
{
	printf( "<table><tr>" .$row['name'] . "</br><iframe width='560' height='315' src='//"  .$row['ssilka'] . "' frameborder='0' allowfullscreen></iframe></tr> <tr>" .$row['Opisanie'] ."</tr></table>" );

	
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
