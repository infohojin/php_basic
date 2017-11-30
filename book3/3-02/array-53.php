<?php
	$array1 = array("a" => "green", "b" => "brown", "c" => "blue", "red");
	$array2 = array("a" => "green", "b" => "yellow", "blue", "red");
	$result_array = array_intersect_assoc($array1, $array2);
	print_r($result_array);
?>
