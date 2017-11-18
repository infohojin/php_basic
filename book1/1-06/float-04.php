<?php
	// 실수값을 입력하면 변수는 실수 입니다.
	$pi = 3.14;
	var_dump( $pi );
	echo "pi = $pi<br>";

	// 정수로 형변환 합니다.
	$a = (int)5.14;
	var_dump( $a );
	echo "a = $a<br>";

	// 더블형으로 형변환 합니다.
	$b = (double)3.14;
	var_dump( $b );
	echo "b = $b<br>";

	// 문자열로 형현환 합니다.
	$b = (string)3.14;
	var_dump( $b );
	echo "b = $b<br>";
?> 