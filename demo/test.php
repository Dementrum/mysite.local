<!--
<?php
header("Content-Type: text/plain; charset=utf-8");
?>
-->

<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>

<body>
	<p>Примеры</p>
	<hr>

	<p>Даты</p>
	<?php
	echo"Hello World!";
	echo strftime('%d-%B-%Y, %A');

	?>
	<?php
		$name = "John"
	?>
	<hr>

	<p>Сокращенное echo</p>

	<?= $name;?>
	<hr>

	<p>Константа</p>
	<?php
			define("USER_NAME", "Вася");
			echo USER_NAME;
	?>

	<hr>

	<p>Константа</p>
	<?php
			define("ONE_HUNDRED", "100");
			define("ONE_HUNDRED_TEN",ONE_HUNDRED + 10);
			echo ONE_HUNDRED_TEN
	?>

	<hr>

	<p>Константа</p>
	<?php
			const TWO_HUNDRED = 200;
			const TWO_HUNDRED_TEN = TWO_HUNDRED + 10;
			echo ONE_HUNDRED_TEN;
	?>

	<p>Переменные</p>
	<!--Копирование переменных-->
	<?php
			$x = 10;
			$y = $x;
			$y = 20;
			echo $x;// 10
			echo $y;// 20
	?>
	<!--Ссылки-->
	<?php
			$x = 10;
			$y = &$x;
			$y = 20;
			echo $x;// 20
			echo $y;// 20
	?>
	<!--Переменные переменных-->
	<?php
			$x = 'name';
			$$x = 'Вася';
			echo 'Привет ,', $name;
	?>
	<hr>
	<p>Числа</p>
	<?php
		$int = 123;//десятичное число
		$int = -123;//отрицательное число
		$int = 0123;//восьмеричное число (эквивалентно 83 в десятичной системе)
		$int = 0X123;// шестнадцатеричное число (эквивалентно 26 в десятичной системе)
		$int = 0b11111111;// двоичное число (эквивалентно 255 в десятичной системе)
		echo $int
	?>
	<?php
		// Числа с плавающей точкой (float, также известны как double и real)
		$float = 1.234;
		$float = 1.2e3;
		$float = 7E-10;
		echo $float
	?>
	<?php
		echo 'это простая строка в апострофах';
		echo "это простая строка в двойных кавычках";
		print "<pre>Это будет развернуто: \n\tв две строки";
		echo '<pre>А это не будет развернуто: \nв две строки';
  ?>

</body>

</html>
