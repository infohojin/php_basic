<?php
	function foo()
	{
    	$numargs = func_num_args();
    	echo "Number of arguments: $numargs\n";
	}

	foo(1, 2, 3);   
?>
