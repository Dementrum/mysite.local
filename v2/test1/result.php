<?php
$ot = 0;
$not = 0;
$_POST['q1'] == 'a' ? $ot++ : $hot++ ;
$_POST['q2'] == 'a' ? $ot++ : $hot++ ;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <p>Правильных ответов:<?= $ot?></p>
    <p>Неправильных ответов:<?= $not?></p>
</body>
</html>