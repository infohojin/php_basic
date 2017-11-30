<?php
	$sweet = array('a' => 'apple', 'b' => 'banana');
	$fruits = array('sweet' => $sweet, 'sour' => 'lemon');

	print_r($fruits);
	echo "<br>";

	function test_print($item, $key)
	{
    		echo "$key ==> $item <br>";
	}

	array_walk_recursive($fruits, 'test_print');
?>
