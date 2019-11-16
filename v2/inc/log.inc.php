<?php
$dt = $_SERVER['REQUEST_TIME'];
$page = $_SERVER['REQUEST_URI'];
$ref = $_SERVER['HTTP_REFERER'];
$path = "$dt|$page|$ref\n";

file_put_contents("W:\\domains\\mysite.local\\v2\\log\\path.log", $path, FILE_APPEND) or die("Не могу открыть файл");
