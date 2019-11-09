<!DOCTYPE HTML>

<html>
<head>
	<meta charset="utf-8" />
	<title>Стойкое хеширование с солью</title>
</head>

<body>
<h1>Стойкое хеширование с солью</h1>
<?
$str = $_GET["str"];
?>
<form action="<?=$_SERVER["PHP_SELF"]?>">
	Строка:
	<input type="text" name="str" value="<?=$str?>">
	<input type="submit" value="Проверить!">
</form>
<?
// Хэш для строки "password"
/* echo $hash = password_hash("password", PASSWORD_BCRYPT); */
$hash = '$2y$10$y1Wt./c4/eh6VXViOpXU4eQlEoXmCEstVGa9w2QTQi3T.QvwCD56C'; 

 if ($str) {
	if( password_verify($str, $hash) )
		echo "Пароль верный";
	else	
		echo "Пароль не верный";
} 
?>
</body>
</html>
