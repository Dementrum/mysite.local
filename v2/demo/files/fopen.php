
<?php 
$f = fopen("data.html", "r") or die("Не могу открыть файл!");
/* fread($f, 5);
fread($f, 4);
fpassthru($f); */
$lines = [];
while ($line = fgetss($f, 4096, "<a>") ) {
	$lines[] = $line;
}
print_r($lines);
// Закрытие потока

fclose($f);
?>
