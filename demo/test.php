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
			echo "<pre>\nПривет ,</pre>", $name;
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
	echo " это простая строка в двойных кавычках";
	print "<pre>Это будет развернуто: \n\tв две строки\n";
	echo 'А это не будет развернуто: \nв две строки</pre>';
echo <<<Chip
\nHello
	$name
Chip;

	$juice = "apple";
	echo "<pre>\nHe drank some $juice juice\n</pre>";
	echo "<pre>He drank some $juice made of {$juice}s</pre>";//Решение
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
	<hr>
	<p>Приведение типов</p>
	<?php
	$x = "10 hello";
	echo (int)$x;
	echo $x;
	?>
	<hr>
	<p>Условия if и else</p>
	<?
	$shop = true;
	if($shop){
		echo "<pre>Покупаю хлеб\n";
		echo "Иду домой</pre>";
	}	
	?>
	<p>Конструкцию лучше писать начинать так:</p>
	<p><b>if(){}</b></p>
	<?php
		$shoping = "0";//1 или true
		$shoping = null;//false
		echo isset($shoping);
	?>
	<?
	$shop = "open";
	if($shop == "open"){
		echo "<pre>Иду в магазин\n";
		echo "Покупаю хлеб\n";
	}	
	echo "Иду домой</pre>";
	?>
	<?
	$shop = "open";
	if($shop != "close"){//не равно
		echo "<pre>Иду в магазин\n";
		echo "Покупаю хлеб\n";
	}	
	echo "Иду домой</pre>";
	?>
	<?
	$shop = "true";
	$money = "true";
	if($shop && $money){//или
		echo "<pre>Иду в магазин\n";
		echo "Покупаю хлеб\n";
	}	
	echo "Иду домой</pre>";
	?>
	<?
	$shop = "close";
//Одна инструкция
	if($shop == 'open')
		echo "<pre>Иду в магазин\n</pre>";
	else
		echo "<pre>Иду в киоск\n";
	echo "Иду домой</pre>";
	?>
	<?
	$shop = true;
	$money = false;
//Группа инструкций
	if($shop and $money) {
		echo "<pre>Иду в магазин\n";
		echo "Покупаю хлеб</pre>";
	}else{
		echo "<pre>Иду домой\n";
		echo "Туплю в телевизор</pre>";
	}
	?>
	<p>Тернарный оператор</p>
	<?
	$shop = false;
	if($shop)
		echo "<pre>Иду в магазин\n";
	else
		echo "Иду в киоск</pre>";
	$x = ($shop) ? "Иду в магазин"  : "Иду в киоск";
	?>

	<h1>HEADER</h1>
	<?
		$shop = 'close';
		if($shop == "open"){
			//			echo "Иду в магазин";
			
	?>
	<h1>HEADER</h1>
	<?
		echo "Покупаю хлеб\n";
		echo "Иду домой";
		}
	?>
	<h1>HEADER</h1>
	<hr>
	<p>Switch</p>
	<?php
		$i = 2;
		switch($i) {
			case 0:
				echo "Результат: 0"; break;
			case 1:
				echo "Результат: 1"; break;
			case 2:
				echo "Результат: 2"; break;
			case 3:
				echo "Результат: 3"; break;
			case 4:
				echo "Результат: 4"; break;
			default: 
				echo "Много";
		}
	?>
	<hr>
	<p>Массивы</p>
	<?
	$arr = []; //$arr = array();
	$user = [
			"name" =>'John', 
			"login" =>"root", 
			"pass" =>"1234"
	];
//	echo count($arr);
	$arr["age"] = 25;
	$arr[] = true;
//	echo $user["name"];
//	echo $user["login"];
	echo is_array($arr);
//	print_r($arr);
//	var_dump($arr);
	?>
	<p>Многомерные массивы</p>
	<?
	$user[0] = [
		"login" => "john",
		"pass" => "1234",
	];
	$user[1] = [
		"login" => "mike",
		"pass" => "5678",
	];
	echo $user[1]['login'];
	?>
	<p>Постфиксный инкремент</p>
	<?
	$x = 1;
	echo "Должно быть 1:" . $x++;
	echo "Должно быть 2:" . $x;
	//что и 
	echo "Должно быть 1: $x"; $x += 1;
	?>
	<p>Префиксный инкремент</p>
	<?
$x = 1;
echo "Должно быть 2: " . ++$x;
echo "Должно быть 2: " . $x;
//Что и
echo"Должно быть 2: $x"; $x += 1;
?>
	<hr>
	<p>Цикл for</p>
	<?
for ($i = 1; $i <= 10; $i++) {
	echo $i;
}
?>
	<?
	//Можно записать в одну строчку
for ($d = 1; $d <= 10; print $d++);

?>
	<p>Цикл while</p>
	<?
$i = 1;
while($i <= 10) {
	echo $i++."<pre>\n</pre>";
}
//бесконечный цикл
//while(true);
?>
	<p>Цикл do-while</p>
	<?
	$i = 100;
	do {
		echo $i++;
	} while ($i <= 10);
?>
	<p>Прерывание цикла</p>
	<?
	$i = 1;
	while($i < 10){
		echo $i++;
		if($i == 5)
			break;
		
	}
?>
	<p>Продолжение цикла</p>
	<?
	$i = 0;
	while($i < 9){
		$i++;
		if($i == 5)
			continue;
		echo $i;
	}

?>
	<p>Управление вложенными циклами</p>
	<?
	$i = 1; $u = 1;
	while($u <= 10){
		while ($i <= 10) {
			echo $i++;
			if($i == 5)
				break 2;
		}
		$u++;
	}
?>
	<?
	$arr = [
		'name' => 'John',
		'age' => 25,
		'login'=>'root'
	];
	foreach($arr as $key=>$val){
		echo "<pre>$key : $val\n</pre>";
	}
?>
	<?
	$nums = [1, 2, 3, 4, 5];
	print_r($nums);
	foreach($nums as &$v)
		$v *= 10;
	print_r($nums);
?>

<?php
    function say($name="Nik", $h=3){
	echo "<h$h>Hello, $name</h$h>";
}	
say("John", 1);
$n = "Mike";
$str = 'say';
say();
say($n, 2);
say("Guest")
?>

</body>

</html>
