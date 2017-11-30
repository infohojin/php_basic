<?php
	function test($str)
	{
    	echo "Hello World! $str<br>";
    	var_dump(debug_backtrace());
	}

	test('jiny');
?>
