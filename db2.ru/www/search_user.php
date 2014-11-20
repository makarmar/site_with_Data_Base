<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<link rel="stylesheet" type="text/css" href="style.css">
<title>Вывод данных</title>
</head>

<body>
<fieldset>
<form method="post" action="select_user.php">


<label for="Nomer"><div class="no_print">Номер:</div></label><br/> 
<input type="text" name="Nomer" size="10"><br/> 

<input id="submit" type="submit" value="Найти и вывести"><br/>

</form>
</fieldset>
<fieldset>
<form method="post" action="all_users.php">
<input id="submit" type="submit" value="Вывести всех пользователей"><br/>
</form>
</fieldset>
<a href="menu.php">Назад в меню</a></br></br>
</body>
</html>
