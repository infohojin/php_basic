<?php
	$array1 = $array2 = array('IMG0.png', 'img12.png', 'img10.png', 'img2.png', 'img1.png', 'IMG3.png');

	echo "기본 정렬<br>";
	sort($array1);
	print_r($array1);

	echo "<br>";

	echo "자연 순서<br>";
	natcasesort($array2);
	print_r($array2);
?>
