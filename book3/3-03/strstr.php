<?php
	$str = "abcdeghijklem-abcdeghijklem-1234567";
	echo "원본 : " . $str . "<br>";

	// 문자열에서 em- 으로 시작하는 위치를 찾아
	// 이후의 문자열을 반환합니다.
	$a = strstr($str,"em-");
	echo $a; 
?>
