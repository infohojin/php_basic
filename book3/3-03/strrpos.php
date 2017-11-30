<?php
	$str = "abcdeghijklem-abcdeghijklem-1234567";
	echo "원본 : " . $str . "<br>";
	$a = strrpos($str,"em-");
	echo $a; 
?>
