<?php
//$arr = [ 
//				"name" =>"John", 
//				"login"=>"root", 
//				"pass"=>"1234"
//];
//$arr["age"] = 25;
//$arr[] = true;
//print_r($arr);
//echo is_array($arr);
////var_dump($arr);
?>
<?
$arr = [
	'name' => 'John',
	'age' => 25,
	'login'=>'root'
];
foreach($arr as $key=>$val){
	echo "$key : $val\n";
}
?>