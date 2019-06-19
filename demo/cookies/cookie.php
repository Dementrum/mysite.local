<?php
	setcookie("name", 'John', time()-3600);
echo $_COOKIE["name"];
