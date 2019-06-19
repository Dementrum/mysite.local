<?php
	error_reporting(0);
	require_once"inc/lib.inc.php";
	set_error_handler("myError");
	require_once"inc/data.inc.php";
	require_once"inc/cookie.inc.php";
////Инициализация заголовков страницы
$title = 'Сайт нашей школы';
$header = "$welcome, Гость!";
$id = strtolower(strip_tags(trim($_GET['id'])));
switch($id){
	case 'about':
		$title = 'О сайте';
		$header = "$welcome, Гость!";
		break;
	case 'contact':
		$title = 'Контакты';
		$header = 'Обратная связь';
		break;
	case 'table':
		$title = 'Таблица умножения';
		$header = 'Таблица умножения';
		break;
	case 'calc':
		$title = 'Он-лайн калькулятор';
		$header = 'Калькулятор';
		break;
}

?>
<!DOCTYPE html>
<html>

<head>
	<title><?= $title?></title>
	<meta charset="utf-8" />
	<link rel="stylesheet" href="style.css" />
</head>

<body>

	<div id="header">
	<?php
		require_once"inc/top.inc.php";
	?>
	</div>

	<div id="content">
		<!-- Заголовок -->
		<h1>
			<?= $header?></h1>
		<!-- Заголовок -->
		<blockquote>
			<?php
            //echo strftime('Сегодня %d-%m-%Y');
        echo "Сегодня $day $mon $year";
			?>
		</blockquote>
		<blockquote>
			<?php
			if($visitCounter == 1){
				echo "Cпасибо, что зашли к нам на огонёк";
			} else {
				echo "Вы зашли к нам $visitCounter раз<br>Последнее посещение:$lastVisit";
			}
       ?>
		</blockquote>
		<!-- Область основного контента -->
		<?php
			switch($id){
				case 'about':
					include 'about.php';
					break;
				case 'contact':
					include 'contact.php';
					break;
				case 'table':
					include 'table.php';
					break;
				case 'calc':
					include 'calc.php';
					break;
				default:
					include 'inc/index.inc.php';
			}	
		
		?>
		<!-- Область основного контента -->
	</div>
	<div id="nav">
		<!-- Навигация -->
		<h2>Навигация по сайту</h2>
		<!-- Навигация -->
		<?php
			require_once"inc/menu.inc.php";	
		?>
	</div>
	<div id="footer">
		<!-- Нижняя часть страницы -->
		<?php
			require_once"inc/bottom.inc.php";	
		
		?>
		<!-- Нижняя часть страницы -->
	</div>
</body>

</html>
