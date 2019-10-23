<?php
error_reporting(0);
require_once "inc/lib.inc.php";
require_once "inc/data.inc.php";
require_once "inc/locali.inc.php";
//Создание константы
	define('COPYRIGHT', 'Супер Мега Веб-мастер');
?>

<!DOCTYPE html>
<html>

<head>
	<title>Сайт нашей школы</title>
	<meta charset="utf-8" />
	<link rel="stylesheet" href="style.css" />
</head>

<body>

	<div id="header">
		<!-- Верхняя часть страницы -->
		<?php
			require_once "inc/header.inc.php";
		?>
		<!-- Верхняя часть страницы -->
	</div>

	<div id="content">
		<!-- Заголовок -->
		<h1>
			<?= $welcome ?>, Гость!</h1>
		<!-- Заголовок -->
		<blockquote>
			<?php
            //echo strftime('Сегодня %d-%m-%Y');
            echo "Сегодня $day $mon $year";
        ?>
		</blockquote>
		<!-- Область основного контента -->
		<?php
			require_once 'inc/index.inc.php';
		?>
		<!-- Область основного контента -->
	</div>
	<div id="nav">
		<!-- Навигация -->
		<?php
			require_once "inc/menu.inc.php";
		?>
		<!-- Навигация -->
	</div>
	<div id="footer">
	<?php
		require_once "inc/footer.inc.php";
	?>
	</div>
</body>

</html>
