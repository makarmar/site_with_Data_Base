<?php
require 'connect.php';
session_start();
if (isset($_SESSION['login']))
{

echo "
<html>
<head>
<title>����� �� �����</title>
</head><body>
<form action='kassa_sc.php' method='post' name='forma'>
<fieldset>
<label for='Kassa_vsego'><div class='no_print'>����� � �����:</div></label><br/> 
<input type='text' name='Kassa_vsego' size='10'><br/> </br>
<label for='V_bank'><div class='no_print'>�������� � ����:</div></label><br/> 
<input type='text' name='V_bank' size='10'><br/> 
</fieldset>
<br/>
<input id='submit' type='submit' value='��!'><br/>

</body></html>
";

}

else 
{
header('location:vhod.php');
}
?>
