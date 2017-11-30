<?php
	$arr = array("blue"=>"파랑색","red"=>"발강색","black"=>"검정색");

	// 배열을 변수로 생성합니다.
	extract($arr);

	echo "blue = ".$blue ."<br>";
	echo "red = ".$red ."<br>";
	echo "black = ".$black ."<br>";
?>
