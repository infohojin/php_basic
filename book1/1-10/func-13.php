<?php
	// 가변 인자로 받습니다.
	function sum(...$numbers) {
    	$acc = 0;
    	foreach ($numbers as $n) {
        	$acc += $n;
    	}
    	return $acc;
	}

	echo sum(1, 2, 3, 4, 5);
?>