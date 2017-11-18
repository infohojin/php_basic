<?php
	try {
	
		throw new Exception("강제적 예외발생");

	} catch(Exception $err){
		// Try {} 부분에 연산오류로 인하여 예외처리가 발생됨
		echo "예외처리 발생 :".$err->getMessage();
	} 
?>