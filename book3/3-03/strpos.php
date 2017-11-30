<?php
	$string = "abcdefg";
	$keyword = "cde";
	if (($pos = strpos($string, $keyword)) === false) {
		echo "Err] 찾는 문자열이 없습니다.";
		
	} else {
		echo "문자열 시작위치 $pos 존재<br>";
	}
?>
