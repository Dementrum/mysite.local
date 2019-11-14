
<?php 
$f = fopen("data.txt", "a+") or die("Не могу открыть файл!");
/* fread($f, 5);
fread($f, 4);
fpassthru($f); */
// $lines = [];
// while ($line = fgetss($f, 4096, "<a>") ) {
// 	$lines[] = $line;
// }
// print_r($lines) . "<br/>";
// $bytes = [];
// while (!feof($f) ) {
// 	$bytes[] = fgetc($f);
// }
// print_r($bytes);
// Закрытие потока
fputs($f, "\nLine six");
fclose($f);
?>
