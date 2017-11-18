<?php
	function sum() {
		$a = 0;
		// func_get_args 함수를 통하여 매개변수를 읽어옵니다.
		foreach (func_get_args() as $n) {
			$a += $n;
		}
		return $a;
	}

	echo sum(1, 2, 3, 4, 5);
?>