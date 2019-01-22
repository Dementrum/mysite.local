<?php
	require_once"inc/lib.inc.php";
	require_once"inc/data.inc.php";
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
	<?php
		require_once"inc/top.inc.php";
	?>
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
			require_once"inc/index.inc.php";	
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
