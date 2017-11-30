<?php
	// 비교함수
	function cmp($a, $b) {
    	if ($a == $b) return 0;
    	else return ($a < $b) ? -1 : 1;
	}

	// 배열
	$array = array('a' => 5, 'b' => 7, 'c' => -1, 'd' => -6, 'e' => 3, 'f' => 2, 'g' => 8, 'h' => -3);
	print_r($array);

	echo "<br>";

	// 외부 비교함수를 통하여 정렬
	uasort($array, 'cmp');
	print_r($array);
?>
