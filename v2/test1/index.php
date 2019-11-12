<?php
//  if (file_exists('file.txt')){
//      echo"Такая директория или файл существует";
//  } 
 if(is_file('file.txt')) {
    echo"Такой файл существует";
 } 
 if(is_dir('file.txt')) {
    echo"Такая директория существует";
 }
 echo "Размер файла" . filesize('file.txt');
echo "Файл file.txt был изменён: " . filemtime("file.txt") . "и запрошен: " . fileatime("file.txt");
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $title?></title>
    <form action="result.php" method="post" align="center">
        <div>
            <p>Сколько будет 2 + 2?</p>
            <label for=""><input name = 'q1' value='a' type="radio">4</label>
            <label for=""><input name = 'q1' value='b' type="radio">3</label>
            <label for=""><input name = 'q1' value='c' type="radio">2</label>
        </div>
        <div>
            <p>Сколько будет 2 * 4?</p>
            <label for=""><input name = 'q2' value='a' type="radio">8</label>
            <label for=""><input name = 'q2' value='b' type="radio">7</label>
            <label for=""><input name = 'q2' value='c' type="radio">6</label>
        </div>
        <button type="submit">Результат</button>
    </form>
  

</head>
<body>

</body>
</html>
