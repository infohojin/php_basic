<?php
	// 지정한 로그파일에 에러를 출력합니다.
	$errFile = "./my-errors.log";
	error_log("You messed up!", 3, $errFile);
?>
