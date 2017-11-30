<?php
	$str = 'apple';

	// 40 문자 16 진수
	echo $str ." = ". sha1($str). "<br>"; 

	// 길이가 20 인 원시 바이너리 형식
	echo $str ." = ". sha1($str,true). "<br>"; 
?>
