<?php
	// php.ini 의 수정없이, 화면에 에러발생시 출력할 수있습니다.
	error_reporting(E_ALL);
	ini_set("display_errors", 1);

	$my_file = @file ('testing.txt') or die($php_errormsg." = 오류를 ");
?>