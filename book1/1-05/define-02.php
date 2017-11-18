<?php
	// 상수를 정의합니다.
	define("DB_TYPE","mysql");
	// 설정한 상수를 출력합니다.
	echo DB_TYPE."<br>";

	// 상수를 정의합니다.
	if(define("DB_TYPE","mysql")){
		echo "상수 설정 성공";
	} else {
		echo "상수 설정 실패";
	}

?>