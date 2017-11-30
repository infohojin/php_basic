<?php
	$password = "abcd1234";
	echo "password = " . $password . "<br>";

	echo "MD5 = " . md5($password) . "<br>";
	echo "MD5 = " . md5($password) . "<br>";

	echo "랜덤생성 예 === <br>";
	echo "램덤 MD5 = " . md5(mt_rand()) . "<br>";
?>
