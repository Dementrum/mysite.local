<?php
const ERR_ON_DRAW_MENU = "Sorry ... err";
$leftMenu = [
						['link'=>'Домой','href'=>'index.php'],
						['link'=>'О нас','href'=>'about.php'],
						['link'=>'Контакты','href'=>'contact.php'],
						['link'=>'Таблица умножения','href'=>'table.php'],
						['link'=>'Калькулятор','href'=>'calc.php']
	];
?>
<?php
	//Установка локали и даты
	setlocale(LC_ALL, "russian");
	$day = strftime('%d');
	$mon = strftime('%B');
	$year = strftime('%Y');
	$mon = iconv('windows-1251', 'utf-8', $mon);
	// Приветствие
	$hour = (int)strftime('%H');//Получаем текущий час в виде строки от 00 до 23
															//и приводим к целому числу от 0 до 23
	$welcome = '';//Инициализируем переменную для приветствия
	if($hour>0 and $hour<6):
		$welcome = "Доброй ночи";
	elseif($hour>=6 and $hour<12):
		$welcome = "Доброе утро";
	elseif($hour>=12 and $hour<18):
		$welcome = "Добрый день";
	elseif($hour>=18 and $hour<23):
		$welcome = "Добрый вечер";
	else:
		$welcome = "Доброй ночи";
	endif;
	//Создание константы
	define('COPYRIGHT', 'Супер Мега Веб-мастер');
