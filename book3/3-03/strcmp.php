<?php
	$str1 = "hello";
	$str2 = "hello";
	$str3 = "word";

	if (strcmp($str1, $str2) == 0) {
		echo $str1 ."== ". $str2 . "<br>";
	} else {
		echo $str1 ."!= ". $str2 . "<br>";
	}

	if (strcmp($str2, $str3) == 0 ) {
		echo $str2 ."== ". $str3 . "<br>";
	} else {
		echo $str2 ."!= ". $str3 . "<br>";
	}

?>
