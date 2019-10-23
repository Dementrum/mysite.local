<?php
//Установка локали и даты
setlocale(LC_TIME, "ru_RU.UTF-8", "russian");
$day = strftime('%d');
$mon = strftime('%B');
$year = strftime('%Y');
if(PHP_OS =="WINNT")
<<<<<<< HEAD
	$mon = iconv('windows-1251', 'utf-8', $mon);
=======
    $mon = iconv('windows-1251', 'utf-8', $mon);
>>>>>>> b8a925d93cc961004d78e79c0e3176816ff85b4c

    // Приветствие
$hour = (int)strftime('%H');//Получаем текущий час в виде строки от 00 до 23 и приводим к целому числу от 0 до 23
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
