<?php
	function foo()
	{
    	$numargs = func_num_args();
    	echo "Number of arguments: $numargs <br>";
    	if ($numargs >= 2) {
        	echo "Second argument is: " . func_get_arg(1) . "<br>";
    	}
    
    	$arg_list = func_get_args();
    	for ($i = 0; $i < $numargs; $i++) {
        	echo "Argument $i is: " . $arg_list[$i] . "<br>";
    	}
	}

	foo(1, 2, 3);
?>
