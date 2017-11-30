<?php
	// 함수 호출
	function foobar($arg, $arg2) {
    echo __FUNCTION__, " got $arg and $arg2 <br>";
	}

	// 함수명
	// 매개변수 매열
	call_user_func_array("foobar", array("one", "two"));

	// 객체 매소드 호출 
	class foo {
    	function bar($arg, $arg2) {
        	echo __METHOD__, " got $arg and $arg2<br>";
    	}
	}

	$foo = new foo;
	// 인스턴스, 매소드 배열
	// 매개변수 매열
	call_user_func_array(array($foo, "bar"), array("three", "four"));

?>
