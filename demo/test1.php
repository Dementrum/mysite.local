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
<?php
//$arr = [
//	'name' => 'John',
//	'age' => 25,
//	'login'=>'root'
//];
//foreach($arr as $key=>$val){
//	echo "$key : $val\n";
//}
?>
<?php
//  function say($name){
//	echo "<h1>Hello, $name</h1>";
//	$GLOBALS['name']="Vasya";
//}	
//say("John");
//$name = "Mike";
//say($name);
//echo $name;
?>
<?php
	function foo(){
	static $x = 0;
	echo $x++;
}	
foo();
foo();
foo();