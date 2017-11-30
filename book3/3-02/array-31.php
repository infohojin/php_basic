<?php
	$array1 = $array2 = array("img12.png", "img10.png", "img2.png", "img1.png");

	echo "기본 정렬<br>";
	asort($array1);
	print_r($array1);

	echo "<br>";

	echo "자연 순서<br>";
	natsort($array2);
	print_r($array2);
?>
