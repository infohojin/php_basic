<?php
	// php.ini 의 수정없이, 화면에 에러발생시 출력할 수있습니다.
	error_reporting(E_ALL);
	ini_set("display_errors", 1);

	// test.php는 실제 존재하지 않는 파일입니다.  
	@include('test.php'); 
?>