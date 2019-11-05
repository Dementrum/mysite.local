<?php
	setcookie("userName", 'John');
	echo $_COOKIE['userName'];
setcookie('counter', counter());
echo "Вы посетили эту страницу {$_COOKIE['counter']} раз";

function counter()
{
    if(isset($_COOKIE['counter'])){
        $_COOKIE['counter']++;
    } else {
        $_COOKIE['counter'] = 1;
    }
    return $_COOKIE['counter'];


}
?>