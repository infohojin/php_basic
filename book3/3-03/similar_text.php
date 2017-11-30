<?php
	$str1 = "안녕하세요! 지니 입니다.";
	$str2 = "안녕하세요! jiny 입니다.";


	similar_text($str1, $str2, $percent); 
	echo "두 문장의 유사도는 $percent % 입니다.<br>";

	similar_text($str2, $str1, $percent); 
	echo "두 문장의 유사도는 $percent % 입니다.<br>";

?>