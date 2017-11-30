<?php
	$string = "   jiny   ";
	echo "안녕하세요!".$string."입니다.<br>";

	// 앞뒤 공백 문자열을 삭제합니다.
	echo "안녕하세요!".trim($string)."입니다.<br>";

	// 오른쪽 공백을 제거합니다.
	echo "안녕하세요!".chop($string)."입니다.<br>";
	echo "안녕하세요!".rtrim($string)."입니다.<br>";

	// 왼쪽 공백을 제거합니다.
	echo "안녕하세요!".ltrim($string)."입니다.<br>";
?>
