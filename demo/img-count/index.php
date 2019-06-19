<?php
	$hour = date('H');
	$img = (int)($h / 6);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>IMG</title>
	<style>
		body{
			background: url(img/<?php echo $img;?>.jpg);
			background-size: cover;
			color: #00419F;
		}
	</style>
</head>
<body>
	<h1><?php echo $hour % 8; ?></h1>
</body>
</html>