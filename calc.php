<?php
function clearInt($data){
    return (int)$data;
}
function clearStr($data){
    return trim(strip_tags($data));
}

$output = '';
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $num1 = clearInt($_POST['num1']);
    $num2 = clearInt($_POST['num2']);
    $operator = clearStr($_POST['operator']);
    //Проверить поля
    $output = "$num1 $operator $num2 = ";

    switch ($operator) {
        case '+': $output .= $num1 + $num2; break;
        case '-': $output .= $num1 - $num2; break;
        case '*': $output .= $num1 * $num2; break;
        case '/':
            if($num2 == 0)
                $output='На ноль делить нельзя';
            else
                $output .= $num1 / $num2;
            break;
        default:
            $output="Неизвестный оператор";
    }
}

?>

<!-- Область основного контента -->
    <?php
        if($output)
            echo"<h3>Результат: $output </h3>";
    ?>
    <form action='<?= $_SERVER['REQUEST_URI'] ?>' method="post">
      <label>Число 1:</label>
      <br />
      <input name='num1' type='text' value="<?= $num1?>"/>
      <br />
      <label>Оператор: </label>
      <br />
      <input name='operator' type='text' value="<?= $operator?>"/>
      <br />
      <label>Число 2: </label>
      <br />
      <input name='num2' type='text' value="<?= $num2?>"/>
      <br />
      <input type='submit' value='Считать'>
    </form>
    <!-- Область основного контента -->
