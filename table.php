<?php
if($_SERVER['REQUEST_METHOD'] == 'POST') {
	$cols = abs((int)$_POST['cols']);
	$rows = abs((int)$_POST['rows']);
    $border = abs((int)$_POST['border']);
	$color = trim(strip_tags($_POST['color']));
}
$cols = ($cols) ? $cols : 10;
$rows = ($rows) ? $rows : 10;
$border = ($border) ? $border : 1;
$color = ($color) ? $color : 'yellow';
?>
     <!-- Область основного контента -->
    <form action="<?= $_SERVER['REQUEST_URI'] ?>"method="POST">
        <label>Количество колонок: </label>
        <br />
        <input name='cols' type='text' value="<?= $cols?>" />
        <br />
        <label>Количество строк: </label>
        <br />
        <input name='rows' type='text' value="<?= $rows?>" />
        <br />
        <label>Рамка: </label>
        <br/>
        <input name='border' type='text' value="<?= $border?>" />
        <br />
        <label>Цвет: </label>
        <br />
        <input name='color' type='text' value="<?= $color?>" />
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
