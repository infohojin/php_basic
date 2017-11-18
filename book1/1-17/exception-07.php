<?php
	// 전역 예외처리기를 등록합니다.
	set_exception_handler(function(Exception $e){
		echo "전역 예외처리 포착<br>";
		echo "예외메시지 = ".$e->getMessage();
	});

	throw new Exception("강제적 예외발생");

	// 설정한 전역처리기를 복원합니다.
	restore_exception_handler();
?>