<?php
require 'connect.php';
session_start();
if (isset($_SESSION['login']))
{

echo "
<html>
<head>
<title>����� �� ����</title>
</head><body>
<form action='bank_sc.php' method='post' name='forma'>
<fieldset>
<label for='V_kasse'><div class='no_print'>������ � �����:</div></label><br/> 
<input type='text' name='V_kasse' size='10'><br/> 
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
