<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>

<body>
	<p>Примеры</p>
	<hr>

<p>1 пример</p>
<?php
	echo"Hello World!";
	echo strftime('%d-%B-%Y, %A');

?>
<?
	$name = "John"
?>
<hr>

<p>2 пример</p>

<?= $name;?>
<hr>

<p>3 пример</p>
<?
define("USER_NAME", "Вася");
echo USER_NAME;
?>

<hr>
<p>3a пример</p>


<p>3 пример</p>

<?
define("ONE_HUNDRED", "100");
define("ONE_HUNDRED_TEN",ONE_HUNDRED + 10);
echo ONE_HUNDRED_TEN
?>

<hr>

<p>3b пример</p>
<?
const TWO_HUNDRED = 200;
const TWO_HUNDRED_TEN = TWO_HUNDRED + 10;
echo ONE_HUNDRED_TEN;
?>
</body>

</html> 
