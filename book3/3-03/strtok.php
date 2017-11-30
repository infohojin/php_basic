<?php
	$str = "안녕하세요! 지니 PHP 코딩 입니다.";

	// 공백 문자로 문자열을 토큰화 합니다.
	$aaa = strtok($str," ");

	$i=0;
	
	while($aaa){
		echo $i++ . "= ". $aaa . "<br>";
		$aaa = strtok(" ");
	}

?>
