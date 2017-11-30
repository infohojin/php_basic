<?php

	// 파일명과 사용자
	$file_name= "test.php";
	$path = "/home/php7/" . $file_name ;
	$user_name = "root";

	// 소유권을 변경합니다.
	chown($path, $user_name);

	// 결과를 확인합니다.
	$stat = stat($path);
	print_r(posix_getpwuid($stat['uid']));

?>
