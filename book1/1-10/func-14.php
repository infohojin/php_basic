<?php
	function add($a, $b) {
    	return $a + $b;
	}

	echo add(...[1, 2])."<br>";

	$a = [4, 5];
	echo add(...$a);
?>