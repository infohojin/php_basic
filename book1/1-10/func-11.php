<?php
	function setting(){
		$num = func_num_args();
		echo "실행인자 갯수 = $num <br>";

		$args = func_get_args();
		foreach($args as $arg) echo $arg."<br>";
		
	}

	setting("aaa");
	echo "====<br>";

	setting("aaa","bbb");
	echo "====<br>";
	
	setting("aaa","bbb","ccc");
	echo "====<br>";
?>