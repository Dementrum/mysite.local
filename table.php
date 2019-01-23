<?php
	require_once"inc/lib.inc.php";
	require_once"inc/data.inc.php";
?>
<!DOCTYPE html>
<html>

<head>
    <title>Таблица умножения</title>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="style.css" />
</head>

<body>

<div id="header">
    <!-- Верхняя часть страницы -->
    <img src="logo.gif" width="187" height="29" alt="Наш логотип" class="logo" />
    <span class="slogan">приходите к нам учиться</span>
    <!-- Верхняя часть страницы -->
</div>

<div id="content">
    <!-- Заголовок -->
    <h1>Таблица умножения</h1>
    <!-- Заголовок -->
    <!-- Область основного контента -->
    <form action=''>
        <label>Количество колонок: </label>
        <br />
        <input name='cols' type='text' value="" />
        <br />
        <label>Количество строк: </label>
        <br />
        <input name='rows' type='text' value="" />
        <br />
        <label>Цвет: </label>
        <br />
        <input name='color' type='text' value="" />
        <br />
        <br />
        <input type='submit' value='Создать' />
    </form>
   <?php
		drawTable(10, 10, 1, '#ccb');
	?>
    <!-- Область основного контента -->
</div>
<div id="nav">
    <h2>Навигация по сайту</h2>
    <!-- Меню -->
   	<?php
			require_once"inc/menu.inc.php";	
		?>
    <!-- Меню -->
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