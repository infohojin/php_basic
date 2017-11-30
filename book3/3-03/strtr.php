<?php
	$str = "안녕하세요. jiny 입니다.!";
	echo $str."<br>";

	$src = "jiny";
	$dst = "hojinlee";

	echo strtr($str, $src, $dst);
?>
