<?php
	error_reporting(0);
	require_once"inc/lib.inc.php";
	require_once"inc/data.inc.php";
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		$cols = abs((int) $_POST ['cols']);
		$rows = abs((int) $_POST ['rows']);
		$color = trim(strip_tags($_POST)['color']);
	}
	$cols = ($cols) ? $cols : 10;
	$rows = ($rows) ? $rows : 10;
	$color = ($color) ? $color : '#ccc';
?>
<!DOCTYPE html>
<html>
<body>
    <!-- Область основного контента -->
    <form action='' method="POST">
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
		drawTable($cols, $rows, 1, $color);
		drawTable($cols = 5, $rows = 5, 3, $color='#efcfce');
	?>
    <!-- Область основного контента -->

</body>

</html>