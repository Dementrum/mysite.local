<?php
error_reporting(0);
require_once "inc/lib.inc.php";
set_error_handler("myErr");
require_once "inc/data.inc.php";
require_once "inc/locali.inc.php";
//Создание константы
	define('COPYRIGHT', 'Супер Мега Веб-мастер');

$title = 'Сайт нашей школы';
$header = "$welcome ,Гость";
$id = strtolower(strip_tags(trim($_GET['id'])));
switch ($id) {
    case 'about':
        $title = 'О сайте';
        $header = 'О нашем сайте';
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
	<title><?= $title ?></title>
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
			<?= $header?>
        </h1>
		<!-- Заголовок -->
		<blockquote>
			<?php
            //echo strftime('Сегодня %d-%m-%Y');
            echo "Сегодня $day $mon $year";
        ?>
		</blockquote>
		<!-- Область основного контента -->
		<?php
			switch ($id){
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
                    include  'inc/index.inc.php';
            }
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
