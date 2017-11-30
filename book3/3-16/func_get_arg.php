<?php
	function foo()
	{
    	$numargs = func_num_args();
    	echo "Number of arguments: $numargs <br>";
    	if ($numargs >= 2) {
        	echo "Second argument is: " . func_get_arg(1) . " <br>";
    	}
	}

	foo(1, 2, 3);
?>
