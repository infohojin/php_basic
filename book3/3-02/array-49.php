<?php
	$base = array("orange", "banana", "apple", "raspberry");
	$replacements = array(0 => "pineapple", 4 => "cherry");

	$basket = array_replace($base, $replacements);
	print_r($basket);
?>