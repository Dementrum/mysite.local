<?php 
if ($_POST['user']) {
    print "Hello , " . $_POST['user']; 
} else {
print<<<HTML
<form action="$_SERVER[PHP_SELF]" method='post'>
    Ваше имя: <input type="text" name="user"><br/>
    <button type="submit">Скажите имя</button>
</form>
HTML;
}

print number_format(32085390444, $decimals = 3 , $dec_point = '.' , $thousands_sep = ',');