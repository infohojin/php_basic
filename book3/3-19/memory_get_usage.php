<?php
	// 시작전 메모리
	echo memory_get_usage() . "<br>";

	// 메모리 할당 
	$a = str_repeat("Hello", 4242);
	echo memory_get_usage() . "<br>";

	// 메모리 해제
	unset($a);
	echo memory_get_usage() . "<br>";
	
?>
