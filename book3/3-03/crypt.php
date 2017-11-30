<?php
	
	$password = "ABCD1234";
	echo "암호 = " . $password . "<br>";

	// salt 자동 생성
	echo "DES 기반 암호 =" .crypt('ABCD1234') . "<br>";

	// 사용자 salt
	$salt = "복잡한 암호키 입니다."; 
	echo "DES 기반 암호 =" .crypt('ABCD1234',$salt) . "<br>";

?>
