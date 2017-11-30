<?php
	function cube($n) {
		// 3승값을 반환
    	return($n * $n * $n);
	}

	$a = array(1, 2, 3, 4, 5);
	$b = array_map("cube", $a);
	print_r($b);
?>
