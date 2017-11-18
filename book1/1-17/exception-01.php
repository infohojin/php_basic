<?php
	$msg = "예외클래스 오류발생";
	$code = 444;
	$e = new Exception($msg,$code);

	echo "예외코드 = ".$e->getCode();
	echo "<br>";
	echo "예외메시지 = ".$e->getMessage();
?>