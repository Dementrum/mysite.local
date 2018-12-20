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
			echo "<pre>\nПривет ,", $name;
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
	<hr>
	<p>Cтроки</p>
<?php
	$name = "John";
	echo 'это простая строка в апострофах';
	echo "\nэто простая строка в двойных кавычках";
	print "<pre>Это будет развернуто: \n\tв две строки</pre>";
	echo '<pre>А это не будет развернуто: \nв две строки</pre>';
echo <<<Chip
\nHello
	$name
Chip;

	$juice = "apple";
	echo "\nHe drank some $juice juice\n";
	echo "He drank some $juice made of {$juice}s\n";//Решение
//	Доступ к символу в строке
	$str = "This is a test";
	$first = $str{0};
	$third = $str{2};
	echo $first;
	echo $third;

?>
	<?php
		$name = "John!";//1 вариант Получение последнего символа в строке
		$len = strlen($name);//5
		$pos = $len - 1;
		echo $name{$pos};

		$letter = $name{4};// 2 вариант
		echo $letter;

		$last = $name{ strlen($name) -1};// 3 вариант
		echo $last;

		$name{strlen($name)-1} = "i";// Изменение последнего символа в строке
		echo $name;
	?>
	<p><b><i>Конкатенация строк</i></b></p>
	<?php	//первый вариант
		$a = "Hello";
		$b = $a . " World";
		echo $b; 
	?>
	<?php //второй вариант
		$a = "Hello";
		$b = "World";
		$c = $a . " " . $b; 
		echo $c
	?>
	<?php //третьий вариант
		$a = "Hello";
		$b = "World";
		$c = "$a $b"; 
		echo $c
	?>
	<hr>
	<p>Длина строк</p>
	<?php
		$name = "Вася";
		$len = mb_strlen($name);
		echo $len;
	?>
	<?php
		$x = '5';
		echo $x * 10;
	?>
	<?php
		$x = '5hhhh';
		echo $x * 10;
	?>
	<hr>
	<p>Boolen</p>
	<?php
	$x = true;
	echo $x; // Выводит 1 false выводит 0
	echo gettype($x);
	?>
</body>

</html>
