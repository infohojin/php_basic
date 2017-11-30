<?php
	// " ", \r, \t, \n, \f를 포함하여
	$keywords = preg_split("/[\s,]+/", "php language, programming");
	echo "임의 갯수의 콤마와 스페이스로 구문을 나눕니다. ";
	print_r($keywords);
	echo "<br>";


	$str = 'string';
	echo "문자 단위로 분리합니다. ";
	$chars = preg_split('//', $str, -1, PREG_SPLIT_NO_EMPTY);
	print_r($chars);
	echo "<br>";
?>
