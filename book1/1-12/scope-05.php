<?php 
	function foo()
	{
		static $bar; 
		$bar++; 
    	echo "unset 실행전: $bar, "; 
    	
    	unset($bar); 
    	$bar = 21; 
    	echo "unset 실행후: $bar <br>"; 
 	}

 	foo();
 	// 결과: unset 실행전: 1, unset 실행후: 21
 	
 	foo();
 	// 결과: unset 실행전: 2, unset 실행후: 21 
 	
 	foo();
 	// 결과: unset 실행전: 3, unset 실행후: 21 
 ?> 