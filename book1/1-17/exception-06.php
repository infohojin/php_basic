<?php
	try {
	
		throw new Exception("강제적 예외발생");

	} catch(Exception $err){
		// Try {} 부분에 연산오류로 인하여 예외처리가 발생됨
		echo "예외처리 발생 :".$err->getMessage();
	} finally {
		// try {} 또는 catch(){} 부분의 처리후에 처리가 됩니다.
		echo "<br>";
		echo "finally 연산 종료";
	}
?>