<?php

	$number = 1234.56;

	// 기본
	// 매개인자 1개만 전달할 경우 천단위 구분자 쉼표(,)로 포맷변경 됩니다.
	echo number_format($number) ."<br>";
	// 1,235

	// 두번째 매개변수는 소수점 자리수
	echo number_format($number,5) ."<br>";
	// 1,234.56000

	// 3번째 인자는 = 소수점 표기 기호
	// 4번재 인자는 = 천단위 표기 기호
	echo number_format($number, 2, ',', ' ') ."<br>";
	// 1 234,56

	$number = 1234.5678;
	echo number_format($number, 2, '.', ',');
	// 1234.57

?>
