<?php

	$str = "Hello Friend";

	// 한글자씩 배열로 변환 합니다.
	$arr1 = str_split($str);
	print_r($arr1);
	echo "<br>";

	// 3글자씩 배열로 변환 합니다.
	$arr2 = str_split($str, 3);
	print_r($arr2);

?> 
