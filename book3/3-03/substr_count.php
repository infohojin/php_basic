<?php
	$text = 'This is a test';
	echo $text . "<br>";

	echo "원본 문자열 길이 = ". strlen($text) ."<br>";
	// 출력: 14

	// 'This is a test' 안에 is 두번 존재
	echo "needle substring이 발생하는 횟수 =". substr_count($text, 'is')."<br>";
	// 출력 :2
	
	// 오프셋 3 적용하여 문자열은 's is a test' 형태로 앞에 3개의 문자열은 건너 뜁니다.
	echo "오프셋 적용 = ".substr_count($text, 'is', 3) ."<br>";

	// 오프셋 3 적용 및 문자열의 길이는 3으로 제한합니다.
	// 따라서 문자열은 's i' 로 적용됩니다.
	echo "오프셋 적용, 길이제한  = ".substr_count($text, 'is', 3, 3) ."<br>";

	// 오류발생
	// 오프셋 5 + 길이 10 = 총길이 15로 원본 $text 문자열 14보다 크기 때문에 오류 발생 
	echo substr_count($text, 'is', 5, 10) ."<br>";

	// prints only 1, because it doesn't count overlapped substrings
	$text2 = 'gcdgcdgcd';
	echo substr_count($text2, 'gcdgcd') ."<br>";
?> 
