<?php
	$x = array("red" => "빨강", "green" => "녹색");  
	$y = array("red" => "빨강", "green" => "녹색");
	var_dump($x === $y);

	echo "<br>";

	$z = array("green" => "녹색", "red" => "빨강");
	var_dump($x === $z);
	
?> 