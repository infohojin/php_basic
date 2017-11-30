<?php
	$a = array('green', 'red', 'yellow');
	$b = array('avocado', 'apple', 'banana');

	// $a 배열은 키명으로 사용고, $b는 데이터로 사용합니다.
	// 두개의 배열을 연상배열 형태로 결합니다.
	$arr = array_combine($a, $b);
	print_r($arr);
?>
