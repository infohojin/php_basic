<?php

	$a = strcspn('abcd', 'apple');
	var_dump($a); //0

	$b = strcspn('abcd',  'banana');
	var_dump($b);	// 0

	$c = strcspn('hello', 'l');
	var_dump($c);	// 2

	$d = strcspn('hello', 'world');
	var_dump($d); // 2

	$e = strcspn('abcdhelloabcd', 'abcd', -9);
	var_dump($e); //5

	$f = strcspn('abcdhelloabcd', 'abcd', -9, -5);	
	var_dump($f); //4
?>
