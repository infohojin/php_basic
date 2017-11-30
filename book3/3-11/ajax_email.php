<?php
	$email = $_GET['q'];

	if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
    		echo "$email 정상적인 이메일 주소 입니다.";
	} else {
    		echo "$email 는 잘못된 이메일 주소 입니다.";
	}

?>
