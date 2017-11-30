<?php
	$str = "안녕하세요 '지니'입니다.";
	$temp = addslashes($str);
	echo $temp."<br>";

	$temp2 = stripslashes($temp);
	echo $temp2."<br>";
?>
