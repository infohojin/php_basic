<?php
	// 배열
	$array = array('a' => 5, 'b' => 7, 'c' => -1, 'd' => -6, 'e' => 3, 'f' => 2, 'g' => 8, 'h' => -3);
	print_r($array);

	echo "<br> === 배열 뒤썩음 === <br>";

	shuffle($array);
	print_r($array);

?>
