<?php
	echo PHP_INT_MAX ."\n";
	
//double или float
	$d_1 = 1.5;
	$d_2 = 9.2e5;// 9.2 * 10 в 5 степени
	$d_3 = 9.2e-5;// 9.2 * 10 в -5 степени
	echo "d_1 = $d_1; d_2 = $d_2; d_3 = $d_3" . "\n";
	$age = 42;
	$my_ege = "Мой возраст $age лет"; 
	echo $my_ege ."\n";
//	$bool = true;
//	echo $bool;
	$bool = false;
	echo $bool;
	$a = 1.25e-5;
	$b = 7;
	echo isset($a), PHP_EOL;
	echo gettype($a), PHP_EOL;
	$var = 2;
	echo is_int($var);
?>
<?php	
	$values = [
			23,
			"23",
			23.5,
			"23.5",
			null,
			true,
			false
		];
	foreach ($values as $val) {
		echo "is_int(";
		var_export($val);
		echo ") = ";
		var_dump(is_int($val));
	}
?>
<?php 
/* Жесткие ссылки */
  $a = 5;
  $b =& $a;
  $a = 8;
  echo $b, PHP_EOL;
?>
<?php
/* Символические ссылки */
	$a = 17.1;
  $b = 'a';
  echo $$b;
?>
