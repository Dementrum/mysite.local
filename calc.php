<?php
	error_reporting(0);
	require_once"inc/lib.inc.php";	
	require_once"inc/data.inc.php";	
?>
<!DOCTYPE html>
<html>
<body>
	<!-- Область основного контента -->
	<form action='' method ="POST">
		<label>Число 1:</label>
		<br />
		<input name='num1' type='text' />
		<br />
		<label>Оператор: </label>
		<br />
		<input name='operator' type='text' />
		<br />
		<label>Число 2: </label>
		<br />
		<input name='num2' type='text' />
		<br />
		<br />
		<input type='submit' value='Считать'>
	</form>
    <!-- Область основного контента -->
  <?php
	if($_SERVER['REQUEST_METHOD'] == 'POST')
		echo "данные переданы методом POST"
	?>
</body>

</html>