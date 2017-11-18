<?php

	function increment(){
		// static 변수는 처음한번 선언시에만 초기화 됩니다.
		static $total = 0; 
		return ++$total;
	}

	echo increment() . "<br>";
	echo increment() . "<br>";
	echo increment() . "<br>";

?>