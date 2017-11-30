<?php
	$str = "안녕하세요! 지니PHP입니다.";
	$encode = base64_encode($str);
	echo "엔코딩 = ". $encode ."<br>";

	$decode = base64_decode($encode);
	echo "디코딩 = ". $decode ."<br>";
?>
