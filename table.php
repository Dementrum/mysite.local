<?php
if($_SERVER['REQUEST_METHOD'] == 'POST') {
	$cols = abc((int) $_POST['cols']);
	$rows = abc((int) $_POST['rows']);
	$color = trim(strip_tags($_POST['color']));
}
$cols = ($cols) ? $cols : 10;
$rows = ($rows) ? $cols : 10;
$border = ($border) ? $border : 3;
$color = ($color) ? $color : 'yellow';
?>
     <!-- Область основного контента -->
    <form action="<?= $_SERVER['REQUEST_URI'] ?>"method="POST">
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
    <!-- Таблица -->
	<?php 
		drawTable($rows, $cols, $border, $color);
	?>
    <!-- Таблица -->
    <!-- Область основного контента -->
