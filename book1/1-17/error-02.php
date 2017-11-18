<?php
	function userError($errno, $errstr){
		echo "사용자 오류처리: [$errno] = $errstr <br>";
	}
	set_error_handler("userError");

	trigger_error("사용자 오류발생", E_USER_ERROR);
?>