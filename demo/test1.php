<?php
$arr = [ 
				"name" =>"John", 
				"login"=>"root", 
				"pass"=>"1234"
];
$arr["age"] = 25;
$arr[] = true;
print_r($arr);
echo is_array($arr);
//var_dump($arr);
?>