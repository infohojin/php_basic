<?php
	$str = "<h1>Hello World!</h1>";
 
	$aaa = filter_var($str, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
	echo $aaa;
?>